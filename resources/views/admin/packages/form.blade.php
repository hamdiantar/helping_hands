<div class="row">





    <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
        <label class="form-label">Price</label>
        <input type="number" name="SUB_PRICE" value="{{isset($item) ? $item->SUB_PRICE : old('SUB_PRICE')}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
    </div>

    <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
        <label class="form-label">Duration</label>
        <input type="number" name="SUB_DURATION" value="{{isset($item) ? $item->SUB_DURATION : old('SUB_DURATION')}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
    </div>

    <div class="input-group col-md-6 input-group-outline mb-3 focused is-focused">
        <label class="form-label">start Date</label>
        <input type="date" name="SUB_START_DATE" value="{{isset($item) ? $item->SUB_START_DATE : old('SUB_START_DATE')}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
    </div>

    <div class="input-group col-md-6 input-group-outline mb-3 is-focused">
        <label class="form-label">end Date</label>
        <input type="date" name="SUB_FINISH_DATE" value="{{isset($item) ? $item->SUB_FINISH_DATE : old('SUB_FINISH_DATE')}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
    </div>


</div>
