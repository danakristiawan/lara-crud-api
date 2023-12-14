@extends('layouts.app')

@section('title', 'Buku Kas Umum')

@section('content')
    <div class="table-responsive">
        <table class="table table-sm table-hover data-table">
            <thead>
                <tr>
                    <th>no</th>
                    <th>tanggal</th>
                    <th>bulan</th>
                    <th>tahun</th>
                    <th>tipe</th>
                    <th>jenis</th>
                    <th>kode</th>
                    <th>debet</th>
                    <th>kredit</th>
                    <th>keterangan</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

@endsection

@push('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $(document).ready(function() {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                const table = $('.data-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('buku-kas-umum.index') }}",
                    columns: [{
                            data: null,
                            render: function(data, type, row, meta) {
                                return meta.row + meta.settings._iDisplayStart + 1;
                            }
                        },
                        {
                            data: 'tanggal',
                            name: 'tanggal'
                        },
                        {
                            data: 'bulan',
                            name: 'bulan'
                        },
                        {
                            data: 'tahun',
                            name: 'tahun'
                        },
                        {
                            data: 'tipe',
                            name: 'tipe'
                        },
                        {
                            data: 'jenis',
                            name: 'jenis'
                        },
                        {
                            data: 'kode',
                            name: 'kode'
                        },
                        {
                            data: 'debet',
                            name: 'debet'
                        },
                        {
                            data: 'kredit',
                            name: 'kredit'
                        },
                        {
                            data: 'keterangan',
                            name: 'keterangan'
                        },
                    ]
                });

            });
        });
    </script>
@endpush
