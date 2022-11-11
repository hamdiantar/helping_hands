<div class="row">
    <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
        <label class="form-label">Price</label>
        <input type="number" name="PACKAGE_PRICE" value="{{isset($item) ? $item->PACKAGE_PRICE : old('PACKAGE_PRICE')}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
    </div>

    <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
        <label class="form-label">Duration</label>
        <input type="number" name="PACKAGE_DURATION" value="{{isset($item) ? $item->PACKAGE_DURATION : old('PACKAGE_DURATION')}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
    </div>

    <div class="input-group col-md-6 input-group-outline mb-3 focused is-focused">
        <label class="form-label">start Date</label>
        <input type="date" name="PACKAGE_START_DATE" value="{{isset($item) ? $item->PACKAGE_START_DATE : old('PACKAGE_START_DATE')}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
    </div>

    <div class="input-group col-md-6 input-group-outline mb-3 is-focused">
        <label class="form-label">end Date</label>
        <input type="date" name="PACKAGE_FINISH_DATE" value="{{isset($item) ? $item->PACKAGE_FINISH_DATE : old('PACKAGE_FINISH_DATE')}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
    </div>


</div>
