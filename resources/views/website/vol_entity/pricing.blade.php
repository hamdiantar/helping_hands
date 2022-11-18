@extends('website.layouts.app')

@section('title', 'Pricing')
@section('content')
    <div id="services" class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div style="    margin-bottom: 26px" class="section-heading">
                        <h4>We Have The Best Pre-Order <em>Prices</em> You Can Get</h4>
                        <img src="{{asset('website/assets/images/heading-line-dec.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pricing-item-regular">
                        <span class="price">100 SAR</span>
                        <h4>For One Month</h4>
                        <div class="icon">
                            <img src="{{asset('website/assets/images/pricing-table-01.png')}}" alt="">
                        </div>
{{--                        <ul>--}}
{{--                            <li>Lorem Ipsum Dolores</li>--}}
{{--                            <li>20 TB of Storage</li>--}}
{{--                            <li class="non-function">Life-time Support</li>--}}
{{--                            <li class="non-function">Premium Add-Ons</li>--}}
{{--                            <li class="non-function">Fastest Network</li>--}}
{{--                            <li class="non-function">More Options</li>--}}
{{--                        </ul>--}}
                        <div class="border-button">
                            <a href="#">Purchase This Plan Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pricing-item-pro">
                        <span class="price">500 SAR</span>
                        <h4>For Six Month</h4>
                        <div class="icon">
                            <img src="{{asset('website/assets/images/pricing-table-01.png')}}" alt="">
                        </div>
{{--                        <ul>--}}
{{--                            <li>Lorem Ipsum Dolores</li>--}}
{{--                            <li>50 TB of Storage</li>--}}
{{--                            <li>Life-time Support</li>--}}
{{--                            <li>Premium Add-Ons</li>--}}
{{--                            <li class="non-function">Fastest Network</li>--}}
{{--                            <li class="non-function">More Options</li>--}}
{{--                        </ul>--}}
                        <div class="border-button">
                            <a href="#">Purchase This Plan Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pricing-item-regular">
                        <span class="price">800 SAR</span>
                        <h4>For One Year</h4>
                        <div class="icon">
                            <img src="{{asset('website/assets/images/pricing-table-01.png')}}" alt="">
                        </div>
{{--                        <ul>--}}
{{--                            <li>Lorem Ipsum Dolores</li>--}}
{{--                            <li>120 TB of Storage</li>--}}
{{--                            <li>Life-time Support</li>--}}
{{--                            <li>Premium Add-Ons</li>--}}
{{--                            <li>Fastest Network</li>--}}
{{--                            <li>More Options</li>--}}
{{--                        </ul>--}}
                        <div class="border-button">
                            <a href="#">Purchase This Plan Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Send You Request Now :  </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <textarea class="form-control" rows="5" cols="5"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
