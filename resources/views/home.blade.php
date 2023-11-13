@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <h1>Selamat Datang {{ auth()->user()->nama }}</h1>
    <h2>Ini halaman home</h2>
    <div class="div">
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <input type="submit" class="btn btn-danger" value="Logout">
        </form>
    </div>
@endsection
