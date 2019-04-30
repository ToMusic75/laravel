<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
  public function create()
 {
     return view('inscription');
 }

 public function store(Request $request)
 {
     return "Tu es inscrit, ton mot de passe est : " . $request->input('password');

 }
}
