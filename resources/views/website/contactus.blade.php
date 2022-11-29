@extends('website.layouts.app')

@section('title', 'Contact Us')
@section('content')
    <div class="main-banner2">
        <div class="container">
            <div class="card card-box-shadow">
                <div class="card-header card-header-custom bg-transparent text-center">
                    <h3>Contact Us</h3>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('contactus.post')}}" class="row" id="form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Name :</label>
                                <input required autocomplete="new-password" value="{{old('name')}}" type="text" class="form-control" name="name" id="name">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">E-Mail : </label>
                                <input required type="email" class="form-control" value="{{old('email')}}" id="email" name="email">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="subject" class="form-label">Subject : </label>
                                <input required autocomplete="new-password" type="text" class="form-control" id="subject" name="subject">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="message" class="form-label">Message : </label>
                                <textarea  required class="form-control" id="message" name="message">
                                </textarea>
                            </div>

                            <div class="col-md-6 mb-3 mt-4">
                                <button form="form" type="submit" class="btn btn-primary">Send Message</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
