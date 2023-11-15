@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <h1>Selamat Datang {{ auth()->user()->nama }}</h1>
    <h2>Ini halaman home</h2>
    <a href="{{ route('signout') }}" class="btn btn-danger mt-2">Logout Using SSO</a>
@endsection
