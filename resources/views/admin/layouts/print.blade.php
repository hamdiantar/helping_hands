<div class="container">
    <div style="border: 1px solid; border-radius: 22px;margin-bottom: 43px; margin-top:10px;text-align: center;padding: 15px;" class="row">
        <div class="col-md-6">
            <img style="height: 133px !important;" src="{{asset('website/logo.png')}}">
        </div>
        <div class="col-md-6">
            <h1 style="margin-bottom: 5px;letter-spacing: 2px;font-size: 20px;">Helping Hands</h1>
            @php
                date_default_timezone_set('Asia/Riyadh');

            @endphp
            <h1 style="margin-bottom: 5px;letter-spacing: 2px;font-size: 20px;">Date : {{now()->format('Y-m-d')}}</h1>
            <h1 style="margin-bottom: 5px;letter-spacing: 2px;font-size: 20px;">Time : {{date('h:i A')}}</h1>
        </div>
    </div>

</div>
