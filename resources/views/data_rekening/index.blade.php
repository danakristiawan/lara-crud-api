@extends('layouts.app')

@section('title', 'Ref Rekening Page')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="table-responsive">
        <a href="{{ route('data-rekening.create') }}" class="btn btn-sm btn-primary mb-2">Rekam</a>
        <a href="{{ route('data-rekening.print') }}" class="btn btn-sm btn-primary mb-2">Cetak</a>
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>No</th>
                    <th>kode</th>
                    <th>bank</th>
                    <th>nomor</th>
                    <th>tanggal</th>
                    <th>tipe</th>
                    <th>nominal</th>
                    <th>uraian</th>
                    <th>status</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataRekening as $r)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $r->kode_satker }}</td>
                        <td>{{ $r->bank }}</td>
                        <td>{{ $r->nomor }}</td>
                        <td>{{ $r->tanggal }}</td>
                        <td>{{ $r->tipe }}</td>
                        <td>{{ $r->nominal }}</td>
                        <td>{{ $r->uraian }}</td>
                        <td>{{ $r->status }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{ route('data-rekening.show', $r->id) }}"
                                    class="btn btn-sm btn-primary">Detail</a>
                                <a href="{{ route('data-rekening.edit', $r->id) }}" class="btn btn-sm btn-primary">Ubah</a>
                                <form action="{{ route('data-rekening.destroy', $r->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-primary" type="submit"
                                        onclick="return confirm('are you sure?');">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
