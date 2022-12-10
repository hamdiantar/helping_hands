@extends('admin.layouts.app')

@section('title', 'Most Packages Subscribed')

@section('breadcrumb')
    <li><a href="#">Most Packages Subscribed</a></li>
@endsection
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">

                    <div class="card-header p-0 position-relative mt-n4 mb-4">
                        <div class="bg-gradient-warning shadow-warning border-radius-lg pt-3 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Most Packages Subscribed</h6>
                        </div>
                    </div>

                    <div class="card-body ml-3 mr-3">
                        <form>
                            <div class="row box-custom">
                                <h3 class="text-center mb-4">Most Packages Subscribed</h3>

                                <div class="col-md-12">
                                    <label>Sector :</label>
                                    <select id="VOL_ENTITY_SECTOR" class="form-select select2" name="VOL_ENTITY_SECTOR">
                                        <option value="">All</option>
                                        <option value="Public Health and social services" {{request()->VOL_ENTITY_SECTOR == 'Public Health and social services' ? 'selected' : ''}}>Public Health and social services</option>
                                        <option value="Community Service" {{request()->VOL_ENTITY_SECTOR == 'Community Service' ? 'selected' : ''}}>Community Service</option>
                                        <option value="Entertainment" {{request()->VOL_ENTITY_SECTOR == 'Entertainment' ? 'selected' : ''}}>Entertainment</option>
                                        <option value="Education" {{request()->VOL_ENTITY_SECTOR == 'Education' ? 'selected' : ''}}>Education</option>
                                        <option value="Hospitality" {{request()->VOL_ENTITY_SECTOR == 'Hospitality' ? 'selected' : ''}}>Hospitality</option>
                                        <option value="Technology" {{request()->VOL_ENTITY_SECTOR == 'Technology' ? 'selected' : ''}}>Technology</option>
                                        <option value="Others" {{request()->VOL_ENTITY_SECTOR == 'Others' ? 'selected' : ''}}>Others</option>
                                    </select>

                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-md bg-gradient-warning btn-lg w-30 mt-4 mb-0">
                                        Generate Report <i class="fa fa-file"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive text-center p-0">
                            <table class="table text-center table-bordered mb-0 text-center" id="dataTableReports">
                                <thead>
                                <tr>
                                    <th class="text-center"> Package ID</th>
                                    <th class="text-center"> Package Price</th>
                                    <th class="text-center"> Package Duration</th>
                                    <th class="text-center">Number Subscription</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                $total = 0;
                                @endphp
                                @foreach($packages as $package)
                                    @php
                                        $total += $package->subs_count;
                                    @endphp
                                    <tr>
                                        <td>{{$package->PACKAGE_ID}}</td>
                                        <td>{{$package->PACKAGE_PRICE}}</td>
                                        <td>{{$package->PACKAGE_DURATION}}</td>
                                        <td>
                                            @if($package->subs_count == 0)
                                                <span class="badge bg-danger">{{ $package->subs_count }}</span>
                                            @else
                                                <span class="badge bg-success">{{ $package->subs_count }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        @if(request()->filled('VOL_ENTITY_SECTOR'))
                            <h2 style="padding: 16px; background: #d1d1d1;margin: 16px;border-radius: 16px;" class="text-center">
                                Number Subscription  With Sector
                                <strong class="text-danger">{{request()->VOL_ENTITY_SECTOR}}</strong>
                                = <span class="badge bg-success">{{$total}}</span>
                            </h2>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
