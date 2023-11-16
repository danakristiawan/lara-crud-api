@extends('layouts.app')

@section('title', 'Ref Bank Page')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="table-responsive">
        <a href="{{ route('referensi-bank.create') }}" class="btn btn-sm btn-primary mb-2">Rekam</a>
        <table class="table table-sm table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>kode</th>
                    <th>nama</th>
                    <th>nomor</th>
                    <th>uraian</th>
                    <th>jenis</th>
                    <th>bank</th>
                    <th>surat</th>
                    <th>tanggal</th>
                    <th>status</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($referensiBank as $r)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $r->kode_satker }}</td>
                        <td>{{ $r->nama_satker }}</td>
                        <td>{{ $r->nomor_rekening }}</td>
                        <td>{{ $r->uraian_rekening }}</td>
                        <td>{{ $r->jenis_rekening }}</td>
                        <td>{{ $r->nama_bank }}</td>
                        <td>{{ $r->surat_izin }}</td>
                        <td>{{ $r->tanggal_surat }}</td>
                        <td>{{ $r->status_rekening }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{ route('referensi-bank.show', $r->id) }}"
                                    class="btn btn-sm btn-primary">Detail</a>
                                <a href="{{ route('referensi-bank.edit', $r->id) }}" class="btn btn-sm btn-primary">Ubah</a>
                                <form action="{{ route('referensi-bank.destroy', $r->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-primary" type="submit"
                                        onclick="return confirm('are you sure?');">Hapus</button>
                                </form>
                                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    modal
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $(document).ready(function() {
                $('#start').click(function(e) {
                    e.preventDefault();
                    console.log('start');
                });
            });
        });
    </script>
@endpush
