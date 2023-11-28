@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <h1>Selamat Datang {{ auth()->user()->nama }}</h1>
    <h2>Ini halaman home</h2>
@endsection
