@if($errors->any())
    @foreach($errors->all() as $index=>$error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{$index + 1}} - </strong> {{$error}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endforeach
@endif
{{--@if(session()->has('success'))--}}
{{--        <div class="alert alert-success alert-dismissible fade show" role="alert">--}}
{{--            <strong>Successfully - </strong> {{session()->get('success')}}--}}
{{--            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>--}}
{{--        </div>--}}
{{--@endif--}}
{{--@if(session()->has('error'))--}}
{{--    <div class="alert alert-danger alert-dismissible fade show" role="alert">--}}
{{--        <strong>Error - </strong> {{session()->get('error')}}--}}
{{--        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>--}}
{{--    </div>--}}
{{--@endif--}}
{{--@if(session()->has('errorLogin'))--}}
{{--    <div class="alert alert-danger alert-dismissible fade show text-center"  role="alert">--}}
{{--        <strong> {{session()->get('errorLogin')}}</strong>--}}
{{--        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>--}}
{{--    </div>--}}
{{--@endif--}}
{{--@if(session()->has('not_auth'))--}}
{{--    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">--}}
{{--        <strong>{{session()->get('not_auth')}}</strong>  <a class="ml-4" id="modal_trigger" href="#modal"><i class="fa fa-sign-in-alt"></i>Login</a>--}}
{{--        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>--}}
{{--    </div>--}}
{{--@endif--}}
