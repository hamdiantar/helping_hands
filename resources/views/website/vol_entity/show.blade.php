@extends('website.layouts.app')

@section('title', 'Listing Volunteering')
@section('content')
    <div id="services" class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div  class="section-heading mb-40 wow fadeInDown animated" data-wow-duration="1s" data-wow-delay="0.5s"
                         style=" visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.5s; -moz-animation-delay: 0.5s; animation-delay: 0.5s;">
                        <h4>Entity <em>Name</em></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="service-item first-service">
                        <span class="Available_opportunities">Available opportunities [ 20 ]</span>
                        <img height="170px" src="{{asset('website/assets/images/vo_1.jpeg')}}">
                        <h4>App Maintenance</h4>
                        <div class="text-button">
                            <a class="btn btn-primary" href="{{route('vol_entity.opportunity')}}">Apply Now <i class="fa fa-arrow-right"></i></a>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <a href="{{route('vol_entity.show')}}">(10 Review)</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-10 offset-1">
                            <h5 class="text-center mb-3">Feedback</h5>
                            <table class="table table-bordered table-striped">
                                <tbody>
                                <tr>
                                    <td>Reviewer Name</td>
                                    <td>Comment</td>
                                    <td>Rating</td>
                                </tr>
                                <tr>
                                    <td>Dalal Mohammed</td>
                                    <td>lab lab lab lab lab lab</td>
                                    <td>  <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-dark"></i>
                                        <i class="fa fa-star text-dark"></i></td>
                                </tr>
                                <tr>
                                    <td>Abeer Saleh</td>
                                    <td>lab lab lab lab lab lab</td>
                                    <td>  <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-dark"></i>
                                        <i class="fa fa-star text-dark"></i></td>
                                </tr>
                                <tr>
                                    <td>Dalal Mohammed</td>
                                    <td>lab lab lab lab lab lab</td>
                                    <td>  <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-dark"></i>
                                        <i class="fa fa-star text-dark"></i></td>
                                </tr>
                                <tr>
                                    <td>Abeer Saleh</td>
                                    <td>lab lab lab lab lab lab</td>
                                    <td>  <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-dark"></i>
                                        <i class="fa fa-star text-dark"></i></td>
                                </tr>
                                <tr>
                                    <td>Dalal Mohammed</td>
                                    <td>lab lab lab lab lab lab</td>
                                    <td>  <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-dark"></i>
                                        <i class="fa fa-star text-dark"></i></td>
                                </tr>
                                <tr>
                                    <td>Abeer Saleh</td>
                                    <td>lab lab lab lab lab lab</td>
                                    <td>  <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-dark"></i>
                                        <i class="fa fa-star text-dark"></i></td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="feedback">
                                <div>
                                    <i class="fa fa-star text-dark"></i>
                                    <i class="fa fa-star text-dark"></i>
                                    <i class="fa fa-star text-dark"></i>
                                    <i class="fa fa-star text-dark"></i>
                                    <i class="fa fa-star text-dark"></i>
                                </div>
                                <textarea rows="3" class="form-control mb-2 mt-2" placeholder="write your feedback here ....."></textarea>
                                <button class="btn btn-info float-end">post</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
