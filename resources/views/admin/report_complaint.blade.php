@extends('admin.layouts.app')

@section('title', 'Most Volunteering Entity Has Complaint')

@section('breadcrumb')
    <li><a href="#">Most Volunteering Entity Has Complaint</a></li>
@endsection
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">

                    <div class="card-header p-0 position-relative mt-n4 mb-4">
                        <div class="bg-gradient-warning shadow-warning border-radius-lg pt-3 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Most Volunteering Entity Has Complaint</h6>
                        </div>
                    </div>

                    <div class="card-body ml-3 mr-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive text-center p-0">
                                    <table class="table text-center table-bordered mb-0 text-center"
                                           id="dataTableReports">
                                        <thead>
                                        <tr>
                                            <th class="text-center">Entity Name</th>
                                            <th class="text-center">Number Of Complaint</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($entities as $entity)
                                            <tr>
                                                <td>{{$entity->VOL_ENTITY_NAME}}</td>
                                                <td>
                                                    @if($entity->compliants_count == 0)
                                                        <span class="badge bg-danger">{{ $entity->compliants_count }}</span>
                                                    @else

                                                        <a href="{{route('admin.report-complaint.volEntity', $entity->VOL_ENTITY_ID)}}"><span
                                                                    class="badge bg-success">{{ $entity->compliants_count }}</span></a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-12 mt-5">
                                <div class="card z-index-2 ">
                                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                                        <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                                            <div class="chart">
                                                <canvas id="chart-bars" class="chart-canvas" height="300"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{asset('assets/js/plugins/chartjs.min.js')}}"></script>

    <script>
        var ctx = document.getElementById("chart-bars").getContext("2d");
        new Chart(ctx, {
            type: "bar",
            data: {
                labels: @json($labels),
                datasets: [{
                    label: "Opportunities",
                    tension: 0.4,
                    borderWidth: 0,
                    borderRadius: 4,
                    borderSkipped: false,
                    backgroundColor: "rgba(255, 255, 255, .8)",
                    data: @json($datasets),
                    maxBarThickness: 100
                }, ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            suggestedMin: 0,
                            suggestedMax: 500,
                            beginAtZero: true,
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                            color: "#fff"
                        },
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
    </script>
@endpush
