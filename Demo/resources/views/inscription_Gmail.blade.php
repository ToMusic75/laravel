@extends('layout')

@section('contenu')

  <h1>Connexion à Gmail</h1>
  <form action="/inscription_Gmail" method="POST">
    {{ csrf_field() }}

    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Mot de passe">
    <input type="submit" value="Connexion">
  </form>

@endsection
