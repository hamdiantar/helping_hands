<div class="row">
    <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
        <label class="form-label">Price</label>
        <input type="number" name="PACKAGE_PRICE" value="{{isset($item) ? $item->PACKAGE_PRICE : old('PACKAGE_PRICE')}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
    </div>

    <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
        <label class="form-label">Duration</label>
        <input type="number" name="PACKAGE_DURATION" value="{{isset($item) ? $item->PACKAGE_DURATION : old('PACKAGE_DURATION')}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
    </div>
</div>
