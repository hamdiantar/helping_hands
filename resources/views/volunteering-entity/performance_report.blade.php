@extends('volunteering-entity.layouts.app')

@section('title', 'Entity Performance Summary Report')

@section('breadcrumb')
    <li><a href="#">Entity performance summary report</a></li>
@endsection
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">

                    <div class="card-header p-0 position-relative mt-n4 mb-4">
                        <div class="bg-gradient-warning shadow-warning border-radius-lg pt-3 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Entity performance summary report</h6>
                        </div>
                    </div>

                    <div class="card-body ml-3 mr-3">
                            <form method="get" action="{{route('volunteering-entity.performance_report')}}">
                                @csrf
                                <div class="row box-custom">
                                <div class="col-md-6">
                                    <label>Date From :</label>
                                    <input type="date" name="date_from" value="{{request()->date_from}}" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>Date To :</label>
                                    <input type="date" name="date_to" value="{{request()->date_to}}" class="form-control">
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-md bg-gradient-warning  mt-4 mb-0">
                                        Generate Report <i class="fa fa-file"></i>
                                    </button>
                                    <a href="{{route('volunteering-entity.performance_report')}}" class="btn btn-md bg-gradient-warning  mt-4 mb-0">
                                     clear <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                                </div>
                            </form>
                        <div class="table-responsive text-center p-0">
                            <table class="table text-center table-bordered mb-0 text-center" id="dataTable">
                                <thead>
                                <tr>
                                    <th class="text-center">Event Name</th>
                                    <th class="text-center">Attendance</th>
                                    <th class="text-center">Total Applicants</th>
                                    <th class="text-center">Applicants <i class="fa fa-check-circle text-success"></i></th>
                                    <th class="text-center">Applicants <i class="fa fa-times-circle text-danger"></i></th>
                                    <th class="text-center">complaint ?</th>
{{--                                    <th class="text-center">responsible</th>--}}
                                    <th class="text-center">Start Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($items as $item)
                                <tr>
                                    <td>{{$item->OPP_NAME}}</td>
                                    <td><span class="badge bg-success">{{$item->attends_count}}</span></td>
                                    <td><span class="badge bg-dark">{{count($item->applicants)}}</span></td>
                                    <td><span class="badge bg-success">{{count($item->applicantsAccept)}}</span></td>
                                    <td><span class="badge bg-danger">{{count($item->applicantsReject)}}</span></td>
                                    <td>
                                        @if($item->volEntity && $item->volEntity->compliants)
                                            <p>Yes</p>
                                        @else
                                            <p>No</p>
                                        @endif
                                    </td>
{{--                                    <td>{{optional($item->volEntity)->VOL_ENTITY_NAME}}</td>--}}
                                    <td>{{$item->OPP_START_DATE}}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="row col-md-12">
                            <div class="chart">
                                <canvas id="chart-bars" class="chart-canvas" height="300"></canvas>
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
                    label: "Applicants Accepted",
                    tension: 0.4,
                    borderWidth: 0,
                    borderRadius: 4,
                    borderSkipped: false,
                    backgroundColor: "rgb(37,137,37)",
                    data: @json($dataSet1),
                    maxBarThickness: 100
                },
                    {
                        label: "Applicants Rejected",
                        tension: 0.4,
                        borderWidth: 0,
                        borderRadius: 4,
                        borderSkipped: false,
                        backgroundColor: "rgb(197,35,53)",
                        data: @json($dataSet2),
                        maxBarThickness: 100
                    }],
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
                            color: 'rgba(0,0,0,0.2)'
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
                            color: "#000000"
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
                            color: '#000000',
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
