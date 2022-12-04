@extends('volunteering-entity.layouts.app')

@section('title', 'Dashboard')


@section('content')
    <div class="row mt-3 mb-3">
        <div class="col-xl-6 col-sm-6 mb-xl-0 pb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">notifications_active</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Total Opportunities</p>
                        <h4 class="mb-0">{{count(getAuthVolEntity()->opps)}} Opportunity</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0"><span class="text-success text-sm font-weight-bolder"> {{count(getAuthVolEntity()->opps)}} </span>Opportunity</p>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-sm-6 mb-xl-0 pb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Total Applicants</p>
                        <h4 class="mb-0">{{count(getAuthVolEntity()->requests)}} Applicants</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0"><span class="text-success text-sm font-weight-bolder">{{count(getAuthVolEntity()->requests)}}</span>  Applicants</p>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-sm-6 mb-xl-0 pb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">workspace_premium</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Total Certifications</p>
                        <h4 class="mb-0">{{(getAuthVolEntity()->certificationTotal())}} Certifications</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0"><span class="text-success text-sm font-weight-bolder">{{(getAuthVolEntity()->certificationTotal())}}</span>  Certifications</p>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-sm-6 mb-xl-0 pb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">assignment</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Total Reviews</p>
                        <h4 class="mb-0">{{count(getAuthVolEntity()->reviews)}} Review</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0"><span class="text-success text-sm font-weight-bolder">{{count(getAuthVolEntity()->reviews)}}</span>  Review</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4 justify-content-center">
        <h6 class="mb-3 mt-5 text-center">Chart For Opportunities With Number Of Applicants</h6>

        <div class="col-md-10 mt-4 mb-4">
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
                    label: "Applicants",
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
