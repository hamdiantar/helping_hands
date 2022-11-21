  <div class="row">
    <div class="input-group col-md-12 input-group-outline mb-3 is-filled">
        <label class="form-label">Select Package</label>
        <select required class="form-control" name="PACKAGE_ID">
            <option>Select</option>
            @foreach($packages as $package)
                <option value="{{$package->PACKAGE_ID}}">{{$package->PACKAGE_DURATION}} day / {{$package->PACKAGE_PRICE}} SAR</option>
            @endforeach
        </select>
    </div>
</div>
