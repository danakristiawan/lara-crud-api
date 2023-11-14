@extends('layouts.app')

@section('title', 'Data Rekening')
@section('content')
    <form action="{{ route('data-rekening.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="kode_satker" class="form-label">Kode Satker</label>
            <input type="text" name="kode_satker" class="form-control @error('kode_satker') is-invalid @enderror"
                id="kode_satker" value="{{ old('kode_satker') }}">
            @error('kode_satker')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="bank" class="form-label">Bank</label>
            <input type="text" name="bank" class="form-control @error('kode_satker') is-invalid @enderror"
                id="bank" value="{{ old('bank') }}">
            @error('kode_satker')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nomor" class="form-label">Nomor</label>
            <input type="text" name="nomor" class="form-control @error('nomor') is-invalid @enderror" id="nomor"
                value="{{ old('nomor') }}">
            @error('nomor')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="text" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal"
                value="{{ old('tanggal') }}">
            @error('tanggal')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tipe" class="form-label">Tipe</label>
            <input type="text" name="tipe" class="form-control @error('tipe') is-invalid @enderror" id="tipe"
                value="{{ old('tipe') }}">
            @error('tipe')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nominal" class="form-label">Nominal</label>
            <input type="text" name="nominal" class="form-control @error('nominal') is-invalid @enderror" id="nominal"
                value="{{ old('nominal') }}">
            @error('nominal')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="uraian" class="form-label">Uraian</label>
            <input type="text" name="uraian" class="form-control @error('uraian') is-invalid @enderror" id="uraian"
                value="{{ old('uraian') }}">
            @error('uraian')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <a href="{{ route('data-rekening.index') }}" class="btn btn-primary">Batal</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
