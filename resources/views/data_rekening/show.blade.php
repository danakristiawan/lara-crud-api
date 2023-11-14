@extends('layouts.app')

@section('title', 'Data Rekening')
@section('content')
    <form action="" method="">
        @csrf
        <div class="mb-3">
            <label for="kode_satker" class="form-label">Kode Satker</label>
            <input type="text" name="kode_satker" class="form-control" id="kode_satker"
                value="{{ $dataRekening->kode_satker }}">
        </div>
        <div class="mb-3">
            <label for="bank" class="form-label">Bank</label>
            <input type="text" name="bank" class="form-control" id="bank" value="{{ $dataRekening->bank }}">
        </div>
        <div class="mb-3">
            <label for="nomor" class="form-label">Nomor</label>
            <input type="text" name="nomor" class="form-control" id="nomor" value="{{ $dataRekening->nomor }}">
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="text" name="tanggal" class="form-control" id="tanggal" value="{{ $dataRekening->tanggal }}">
        </div>
        <div class="mb-3">
            <label for="tipe" class="form-label">Tipe</label>
            <input type="text" name="tipe" class="form-control" id="tipe" value="{{ $dataRekening->tipe }}">
        </div>
        <div class="mb-3">
            <label for="nominal" class="form-label">Nominal</label>
            <input type="text" name="nominal" class="form-control" id="nominal" value="{{ $dataRekening->nominal }}">
        </div>
        <div class="mb-3">
            <label for="uraian" class="form-label">Uraian</label>
            <input type="text" name="uraian" class="form-control" id="uraian" value="{{ $dataRekening->uraian }}">
        </div>
        <a href="{{ route('data-rekening.index') }}" class="btn btn-primary">Kembali</a>
    </form>
@endsection
