<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TpController extends Controller
{
    function Afficher(){
        return view('login');
    }

    function login(Request $request){
    $login=$request->login;
    $password=$request->password;
    $credentials=['login'=>$login,'password'=>$password];
    if( (Auth::attempt($credentials))){
       $request->session()->regenerate();
       return to_route('produits');
    }else{
      return back()->withErrors([
        "login"=>'login or password incorect'
      ])->onlyInput("login");
    }
    }

    function produits(){
     $produits=Produit::all();
     return view('produits',compact('produits'));
    }
    function show(Produit $id){         
              $produit=$id;
              return view('show',compact('produit')) ;
    }
    function destroy(Produit  $id){
        $id->delete();
        return to_route('produits');
    }
    public function ajouter() {
        return view('ajouter');
    }
    public function store(Request $request) {
        $formfields= $request->validate([
            'RefPdt'=>'required',
             'libPdt'=>'required',
             'Prix'=>'required',
             'Qte'=>'required',
             'image'=>'min:3',
             'description'=>'required',
             'type'=>'required',
         ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move( public_path('image'),$imageName  );
            $formfields['image'] = $imageName;
         }
        Produit::create($formfields);
        return redirect()->route('produits'); 
    }
    
}
