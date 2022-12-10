@extends('admin.layouts.app')

@section('title', 'Growth Report')

@section('breadcrumb')
    <li><a href="#">Growth Report</a></li>
@endsection
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">

                    <div class="card-header p-0 position-relative mt-n4 mb-4">
                        <div class="bg-gradient-warning shadow-warning border-radius-lg pt-3 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Growth Report</h6>
                        </div>
                    </div>

                    <div class="card-body ml-3 mr-3">
                        <form>
                            <div class="row box-custom">
                                <h3 class="text-center mb-4">Growth Report</h3>

                                <div class="col-md-12">
                                    <label>Sector :</label>
                                    <select id="VOL_ENTITY_SECTOR" class="form-select select2" name="VOL_ENTITY_SECTOR">
                                        <option value="">All</option>
                                        <option value="Public Health and social services" {{request()->VOL_ENTITY_SECTOR == 'Public Health and social services' ? 'selected' : ''}}>Public Health and social services</option>
                                        <option value="Community Service" {{request()->VOL_ENTITY_SECTOR == 'Community Service' ? 'selected' : ''}}>Community Service</option>
                                        <option value="Entertainment" {{request()->VOL_ENTITY_SECTOR == 'Entertainment' ? 'selected' : ''}}>Entertainment</option>
                                        <option value="Education" {{request()->VOL_ENTITY_SECTOR == 'Education' ? 'selected' : ''}}>Education</option>
                                        <option value="Hospitality" {{request()->VOL_ENTITY_SECTOR == 'Education' ? 'selected' : ''}}>Hospitality</option>
                                        <option value="Technology" {{request()->VOL_ENTITY_SECTOR == 'Technology' ? 'selected' : ''}}>Technology</option>
                                        <option value="Others" {{request()->VOL_ENTITY_SECTOR == 'Others' ? 'selected' : ''}}>Others</option>
                                    </select>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-md bg-gradient-warning btn-lg w-30 mt-4 mb-0">
                                        Generate Report <i class="fa fa-file"></i>
                                    </button>

                                    <button onclick="PrintElem('printDiv')" type="button" class="btn btn-md bg-gradient-warning btn-lg w-30 mt-4 mb-0">
                                        print Report <i class="fa fa-print"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                      <div id="printDiv">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="chart">
                                      <canvas id="chart-bars" class="chart-canvas" height="300"></canvas>
                                  </div>
                              </div>
                          </div>
                          <div class="table-responsive text-center p-0">
                              <table class="table text-center table-bordered mb-0 text-center" id="">
                                  <thead>
                                  <tr>
                                      <th class="text-center">Number Of Entity Registered</th>
                                      <th class="text-center">Number Of Entity Pending</th>
                                      <th class="text-center">Number Of Entity Canceled</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <tr>
                                      <td><span class="badge bg-success">{{count($volEntityCountReigstered)}}</span></td>
                                      <td><span class="badge bg-warning">{{count($volEntityCountPending)}}</span></td>
                                      <td><span class="badge bg-danger">{{count($volEntityCountReject)}}</span></td>
                                  </tr>
                                  </tbody>
                              </table>

                          </div>
                          <div class="table-responsive p-0 mt-3 mb-3">
                              <table class="table  table-bordered">
                                  <thead>
                                  <tr>
                                      <th style="text-align: center;padding: 10px" colspan="3"> Entity Registered [{{count($volEntityCountReigstered)}}]</th>
                                  </tr>
                                  <tr>
                                      <th>#</th>
                                      <th>Entity Name</th>
                                      <th>Sector</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  @foreach($volEntityCountReigstered as $entity)
                                      <tr>
                                          <td>{{$entity->VOL_ENTITY_ID}}</td>
                                          <td>{{$entity->VOL_ENTITY_NAME}}</td>
                                          <td>{{$entity->VOL_ENTITY_SECTOR}}</td>
                                      </tr>
                                  @endforeach
                                  </tbody>
                              </table>
                          </div>
                          <div class="table-responsive p-0 mt-3 mb-3">
                              <table class="table  table-bordered">
                                  <thead>
                                  <tr>
                                      <th style="text-align: center;padding: 10px" colspan="3"> Entity Pending [{{count($volEntityCountPending)}}]</th>
                                  </tr>
                                  <tr>
                                      <th>#</th>
                                      <th>Entity Name</th>
                                      <th>Sector</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  @foreach($volEntityCountPending as $entity)
                                      <tr>
                                          <td>{{$entity->VOL_ENTITY_ID}}</td>
                                          <td>{{$entity->VOL_ENTITY_NAME}}</td>
                                          <td>{{$entity->VOL_ENTITY_SECTOR}}</td>
                                      </tr>
                                  @endforeach
                                  </tbody>
                              </table>
                          </div>
                          <div class="table-responsive p-0 mt-3 mb-3">
                              <table class="table  table-bordered">
                                  <thead>
                                  <tr>
                                      <th style="text-align: center;padding: 10px" colspan="3"> Entity Cancelled [{{count($volEntityCountReject)}}]</th>
                                  </tr>
                                  <tr>
                                      <th>#</th>
                                      <th>Entity Name</th>
                                      <th>Sector</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  @foreach($volEntityCountReject as $entity)
                                      <tr>
                                          <td>{{$entity->VOL_ENTITY_ID}}</td>
                                          <td>{{$entity->VOL_ENTITY_NAME}}</td>
                                          <td>{{$entity->VOL_ENTITY_SECTOR}}</td>
                                      </tr>
                                  @endforeach
                                  </tbody>
                              </table>
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
            type: "doughnut",
            data: {
                labels: ['Registered', 'Pending', 'Cancelled'],
                datasets: [{
                    label: 'Volunteering Entity',
                    data: @json($dataset),
                    backgroundColor: [
                        'rgb(37,137,37)',
                        'rgb(202,142,10)',
                        'rgb(197,35,53)'
                    ],
                    hoverOffset: 4
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
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            display: false,
                            color: '#c72537',
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


        function PrintElem(elem)
        {
            var mywindow = window.open('', 'PRINT', 'height=400,width=600');

            mywindow.document.write('<html><head><title>' + document.title  + '</title>');
            mywindow.document.write(`</head><body >@include('admin.layouts.print')`);
            mywindow.document.write('<h1>' + document.title  + '</h1>');
            mywindow.document.write(document.getElementById(elem).innerHTML);
            mywindow.document.write('</body></html>');

            mywindow.document.close(); // necessary for IE >= 10
            mywindow.focus(); // necessary for IE >= 10*/

            mywindow.print();
            // mywindow.close();

            // return true;
        }
    </script>
@endpush
