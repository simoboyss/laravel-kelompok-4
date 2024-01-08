<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\Fasilitator;
use App\Models\Nilai;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class SoftskillController extends Controller
{
    public function register()
    {
        $data['title'] = 'Register';
        return view('user/register', $data);
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:tb_user',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
            
        ]);

        $user = new User([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            
        ]);
        $user->save();

        return redirect()->route('login')->with('success', 'Registration success. Please login!');
    }


    public function login()
    {
        $data['title'] = 'Login';
        return view('user/login', $data);
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'password' => 'Wrong username or password',
        ]);
    }

    public function password()
    {
        $data['title'] = 'Change Password';
        return view('user/password', $data);
    }

    public function password_action(Request $request)
    {
        $request->validate([
            'old_password' => 'required|current_password',
            'new_password' => 'required|confirmed',
        ]);
        $user = User::find(Auth::id());
        $user->password = Hash::make($request->new_password);
        $user->save();
        $request->session()->regenerate();
        return back()->with('success', 'Password changed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    // Menampilkan daftar fasilitator
    public function indexFasilitator(Request $request){

    // Mengambil data program studi unik dari tabel Fasilitator
    $programStudis = Fasilitator::select('prodi')->distinct()->get(); // Fetch distinct program studies from the Fasilitator table

    // Mengambil nilai program studi yang dipilih dari input form
    $selectedProdi = $request->input('prodi');

    $data = Fasilitator::query();

    // Mengecek apakah terdapat parameter pencarian 'search' pada request
    if ($request->has('search')) {
        // Menambahkan kondisi ke query untuk mencocokkan Nama_Lengkap dengan nilai pencarian
        $data->where('nama', 'LIKE', '%' . $request->search . '%');
    }

    // Mengecek apakah terdapat program studi yang dipilih
    if ($selectedProdi) {
        // Menambahkan kondisi ke query untuk mencocokkan Prodi dengan program studi yang dipilih
        $data->where('prodi', $selectedProdi);
    }

    $data = $data->paginate(5);

    // Mengambil data fasilitator berdasarkan ID
    return view ('datafasilitator',compact('data', 'programStudis', 'selectedProdi'));
}



    public function tambahfasilitator(){
        return view('tambahdatafasilitator');
    }
    public function insertdatafasilitator(Request $request){
        //dd($request->all()); //mengeprint day dummy ketika tombol disubmit sebelum ke database
        //DB::table('fasilitators')->get(); 
        Fasilitator::create($request->all());
        return redirect()->route('fasilitator');
    }

    public function tampilkandatafasilitator($id) {
        $data = Fasilitator::find($id);
        return view('tampildatafasilitator', compact('data'));
        //dd($data);
    }

    public function updatedatafasilitator(Request $request, $id) {
        $data = Fasilitator::find($id);
        $data->update($request->all());
        return redirect()->route('fasilitator');
    }

    public function deletefasilitator($id) {
        $data = Fasilitator::find($id);
        $data->delete();
        return redirect()->route('fasilitator');
    }

    /*public function indexPeserta(){
        $data = Peserta::all();
        return view('peserta',compact('data'));
    }*/

    //peserta softskill
    public function indexPeserta(Request $request){

        $programStudis2 = Peserta::select('prodi')->distinct()->get();
        
        $selectedProdi2 = $request->input('prodi');
    
        $data = Peserta::query();
    
        if ($request->has('search2')) {
            $data->where('nama_lengkap', 'LIKE', '%' . $request->search2 . '%');
        }
    
        if ($selectedProdi2) {
            $data->where('prodi', $selectedProdi2);
        }
    
        $data = $data->paginate(5);
    
        return view ('peserta',compact('data', 'programStudis2', 'selectedProdi2'));
    }
    
    public function tambahpeserta(){
        $fasil = Fasilitator::all();
        return view('tambahpeserta', compact('fasil'));
    }
    public function insertdata(Request $request){
        //dd($request->all());
        Peserta::create($request->all());
        return redirect()->route('peserta')->with('success','Data Berhasil Di Tambahkan');
    }
    public function editpeserta($id){
        $data = Peserta::find($id);
        //dd($data);
        return view ('editpeserta', compact('data'));
    }
    public function updatepeserta(Request $request, $id){
        $data = Peserta::find($id);
        $data->update($request->all());
        return redirect()->route('peserta')->with('success','Data Berhasil Di Edit');
    }
    public function delete($id){
        $data = Peserta::find($id);
        $data->delete();
        return redirect()->route('peserta')->with('success','Data Berhasil Di Hapus');
    }

    public function index(){
        $nilai = Nilai::all();
        return view("nilai.index", compact("nilai"));
        // dd($nilai);
    }
    //add data
    public function create(){
        return view("nilai.create");
    }
    public function store(Request $request){
        // dd($request->except("_token", "submit"));
        Nilai::create($request->except("_token", "submit"));
        return redirect("/nilai");
    }
    //edit data
    public function edit($id){
        // dd($id);
        $nilai = Nilai::find($id);
        // dd(nilai); 
        return view("nilai.edit", compact(["nilai"]));
    }
    public function update(Request $request, $id){
        Nilai::find($id)->update($request->except("_token","submit"));
        return redirect("/nilai");
    }
    //delete data
    public function destroy($id){
        
        Nilai::find($id)->delete();
        return redirect("/nilai");
    }
    //filter data
    
}
