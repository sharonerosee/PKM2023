<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anak;
use App\Models\Pengurus;
use App\Models\Saran;
use Illuminate\Support\Facades\Auth;
    
class view extends Controller
{
    public function index() {
        $anaks = Anak::all();
        $anakPhotos = $anaks->map(function ($anak) {
            return asset("public/img/fotopanti/{$anak->photos}");
        });

        $pengurus = Pengurus::all();
        $pengurusPhotos = $pengurus->map(function ($penguru) {
            return asset("public/img/fotopanti/{$penguru->photos}");
        });

        $sarans = Saran::all();
        

        return view('pages.index', ['anaks' => $anaks, 'photos' => $anakPhotos])
            ->with('pengurus', $pengurus)
            ->with('pengurusPhotos', $pengurusPhotos)
            ->with('sarans', $sarans);
    }
    
    public function admin() {
        $anaks = Anak::all();
        $photos = $anaks->map(function($anak) {
            return asset("public/img/fotopanti/{$anak->photos}");
        });
    
        return view('admin.admin', ['anaks' => $anaks, 'photos' => $photos]);
    }
    
    public function about(){
        return view('pages.about');
    }

    public function sejarah(){
        return view('pages.sejarah');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function donate(){
        return view('pages.donate');
    }

    public function bmi(){
        return view('pages.BMI');
    }
    public function caretaker(){
        $pengurus = Pengurus::all();
        $photos = $pengurus->map(function($penguru) {
            return asset("public/img/fotopanti/{$penguru->photos}");
        });
    
        return view('pages.caretaker', ['pengurus' => $pengurus, 'photos' => $photos]);
    }
    
    public function facility(){
        return view('pages.facility');
    }
    public function kids(){
        $anaks = Anak::all();
        $photos = $anaks->map(function($anak) {
            return asset("public/img/fotopanti/{$anak->photos}");
        });
    
        return view('pages.kids', ['anaks' => $anaks, 'photos' => $photos]);
    }
    public function prosesBmi(){
        return view ('pages.prosesBmi');
    }

    public function saran(Request $request)
    {
        $request->validate([
            'gname' => 'required|string|max:50',
            'gmail' => 'required|email',
            'message' => 'required',
        ]);
        
        $sarans = new Saran();
        $sarans->gname = $request->gname;
        $sarans->gmail = $request->gmail;
        $sarans->message = $request->message;
        $sarans->save();
    
        return redirect('/');
    }

    public function loginadmin(){
        return view('admin.loginadmin');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }

        return back()->with('loginError', 'Login failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    
    public function destroy($id)
    {
        $anak = Anak::find($id);
        if ($anak) {
            $anak->delete();
        }
        return redirect('/admin');
    }
    

    public function create()
    {
    return view('admin.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'age' => 'required|integer',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
            'weight' => 'required',
            'height' => 'required',
        ]);  
        $ext = $request->file('photo')->extension();
        $filename = 'photo_' . time() . '.' . $ext;
        $request->file('photo')->move(public_path('img/fotopanti'), $filename);
        $anaks = new Anak();
        $anaks->name = $request->name;
        $anaks->age = $request->age;
        $anaks->weight = $request->weight;
        $anaks->height = $request->height;
        $anaks->photos = 'img/fotopanti/' . $filename;
        $anaks->save();
    
        return redirect('/admin');
    }

    public function createp()
    {
    return view('admin.createp');
    }

    public function editp($id)
    {
        $pengurus = Pengurus::find($id);
        return view('admin.editp', ['pengurus' => $pengurus]);
    }
    public function destroyp($id)
    {
        $pengurus = Pengurus::find($id);
        if ($pengurus) {
            $pengurus->delete();
        }
        return redirect('/adminp');
    }
    public function updatep(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'position' => 'required|string|max:50',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $pengurus = Pengurus::find($id);
        $pengurus->name = $request->name;
        $pengurus->position = $request->position;

        if ($request->hasFile('photo')) {
            $filename = 'photo_' . time() . '.' . $request->file('photo')->extension();
            $request->file('photo')->move(public_path('img/fotopanti'), $filename);
            $pengurus->photos = 'img/fotopanti/' . $filename;
        }

        $pengurus->save();
        return redirect('/adminp');
    }    

    public function store1(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'position' => 'required|string|max:50',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);  
        $ext = $request->file('photo')->extension();
        $filename = 'photo_' . time() . '.' . $ext;
        $request->file('photo')->move(public_path('img/fotopanti'), $filename);
        $pengurus = new Pengurus();
        $pengurus->name = $request->name;
        $pengurus->position = $request->position;
        $pengurus->photos = 'img/fotopanti/' . $filename;
        $pengurus->save();
    
        return redirect('/adminp');
    }

    public function edit($id)
    {
        $anaks = Anak::find($id);
        return view('admin.edit', ['anak' => $anaks]);
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'age' => 'required|integer',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'weight' => 'required',
            'height' => 'required',
        ]);

        $anaks = Anak::find($id);
        $anaks->name = $request->name;
        $anaks->age = $request->age;
        $anaks->weight = $request->weight;
        $anaks->height = $request->height;

        if ($request->hasFile('photo')) {
            $filename = 'photo_' . time() . '.' . $request->file('photo')->extension();
            $request->file('photo')->move(public_path('img/fotopanti'), $filename);
            $anaks->photos = 'img/fotopanti/' . $filename;
        }

        $anaks->save();
        return redirect('/admin');
    }

    public function adminp() 
    {
        $pengurus = Pengurus::all();
        $photos = $pengurus->map(function($pengurus) {
            return asset("public/img/fotopanti/{$pengurus->photos}");
        });
    
        return view('admin.adminp', ['pengurus' => $pengurus, 'photos' => $photos]);
    }

    
    public function bmiadmin($id)
    {
        $anaks = Anak::find($id);
        return view('admin.bmiadmin', ['anak' => $anaks]);
    }

    public function prosesBmip($id){
        $anaks = Anak::find($id);
        return view('admin.prosesBmip', ['anak' => $anaks]);
    }

    public function adminstore3(Request $request, $id)
    {
    $anaks = Anak::find($id);
    $anaks->BMI = $request->BMI;
    $anaks->save();

    return redirect('/admin');
    } 
}
