@extends('layout')

@section('contenu')

  <h1>Inscription</h1>
  <form action="/inscription" method="POST">
    {{ csrf_field() }}

    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Mot de passe">
    <input type="submit" value="M'inscrire">
  </form>

@endsection
