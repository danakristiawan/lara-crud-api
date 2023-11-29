@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <h1>Selamat Datang {{ auth()->user()->nama }}</h1>
    <h2>Ini halaman home</h2>
    <div>
        <canvas id="myChart" width="400" height="100"></canvas>
    </div>
@endsection

@push('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $(document).ready(function() {

                (async function() {
                    const data = [{
                            year: 2010,
                            count: 10
                        },
                        {
                            year: 2011,
                            count: 20
                        },
                        {
                            year: 2012,
                            count: 15
                        },
                        {
                            year: 2013,
                            count: 25
                        },
                        {
                            year: 2014,
                            count: 22
                        },
                        {
                            year: 2015,
                            count: 30
                        },
                        {
                            year: 2016,
                            count: 28
                        },
                    ];

                    new Chart(
                        $('#myChart'), {
                            type: 'bar',
                            data: {
                                labels: data.map(row => row.year),
                                datasets: [{
                                    label: 'Acquisitions by year',
                                    data: data.map(row => row.count)
                                }]
                            }
                        }
                    );
                })();

            });
        });
    </script>
@endpush
