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
                    <th>tipe</th>
                    <th>nominal</th>
                    <th>uraian</th>
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
                            data: 'nomor',
                            name: 'nomor'
                        },
                        {
                            data: 'tanggal',
                            name: 'tanggal'
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
                            data: 'uraian',
                            name: 'uraian'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        },
                    ]
                });

            });
        });
    </script>
@endpush
