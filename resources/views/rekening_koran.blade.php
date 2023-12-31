@extends('layouts.app')

@section('title', 'Ref User Page')

@section('content')
    <div class="table-responsive">
        <table class="table table-sm table-hover data-table">
            <thead>
                <tr>
                    <th>no</th>
                    <th>nomor</th>
                    <th>tanggal</th>
                    <th>bulan</th>
                    <th>tahun</th>
                    <th>tipe</th>
                    <th>nominal</th>
                    <th>keterangan</th>
                    <th>aksi</th>
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
                    ajax: "{{ route('rekening-koran.index') }}",
                    columns: [{
                            data: null,
                            render: function(data, type, row, meta) {
                                return meta.row + meta.settings._iDisplayStart + 1;
                            }
                        },
                        {
                            data: 'nomor_rekening',
                            name: 'nomor_rekening'
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
                            data: 'nominal',
                            name: 'nominal'
                        },
                        {
                            data: 'keterangan',
                            name: 'keterangan'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        },
                    ]
                });

                $('body').on('click', '#proses', function() {
                    var id = $(this).data("id");
                    $.ajax({
                        data: 'status=' + 1,
                        type: "PUT",
                        dataType: 'json',
                        url: "{{ route('rekening-koran.index') }}" + '/' + id,
                        success: function(data) {
                            table.draw();
                            toastr.success('Data has been proceed successfully!');
                            console.log(data);
                        },
                        error: function(data) {
                            console.log('Error:', data);
                        }
                    });
                });

            });
        });
    </script>
@endpush
