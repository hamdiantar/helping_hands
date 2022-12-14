@extends('website.layouts.app')

@section('title', 'Contact Us')
@section('content')
    <div class="main-banner2">
        <div class="container">
            <div class="card card-box-shadow">
                <div class="card-header card-header-custom bg-transparent text-center">
                    <h4>For Any Concerns, Please Don’t Hesitate To Contact Us Via</h4>
                </div>
                <div class="card-body">
                  <div class="row p-5">
                      <div class="col-md-12 main-con">
                          <p class="cont"> <img src="{{asset('website/email.png')}}">   Inquiry@helpinghands.com</p>
                          <p class="cont"> <img src="{{asset('website/linkedin.png')}}">  HelpingHandsSA</p>
                          <p class="cont"> <img src="{{asset('website/twitter.png')}}"> HelpingHands_center</p>
                          <p class="cont"><img src="{{asset('website/phone-call.png')}}">  +966 56 782 9033</p>
                      </div>
                  </div>
                </div>
            </div>

        </div>
    </div>
@endsection
