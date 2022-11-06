<div class="row">
    <div class="input-group col-md-6 input-group-outline mb-3 focused is-focused">
        <label class="form-label">start Date</label>
        <input type="date" name="OPP_START_DATE" value="{{isset($item) ? $item->OPP_START_DATE : old('OPP_START_DATE')}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
    </div>

    <div class="input-group col-md-6 input-group-outline mb-3 is-focused">
        <label class="form-label">end Date</label>
        <input type="date" name="OPP_FINISH_DATE" value="{{isset($item) ? $item->OPP_FINISH_DATE : old('OPP_FINISH_DATE')}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
    </div>

    <div class="input-group col-md-6 input-group-outline mb-3 is-focused">
        <label class="form-label">start time</label>
        <input type="time"  name="OPP_START_TIME" value="{{isset($item) ? $item->OPP_START_TIME : old('OPP_START_TIME')}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
    </div>


    <div class="input-group col-md-6 input-group-outline mb-3 is-focused">
        <label class="form-label">end time</label>
        <input type="time" name="OPP_END_TIME" value="{{isset($item) ? $item->OPP_END_TIME : old('OPP_END_TIME')}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
    </div>

    <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
        <label class="form-label">title</label>
        <input type="text" name="OPP_NAME" value="{{isset($item) ? $item->OPP_NAME : old('OPP_NAME')}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
    </div>

    <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
        <label class="form-label">total hours</label>
        <input type="number" name="OPP_TOTAL_HOUR" value="{{isset($item) ? $item->OPP_TOTAL_HOUR : old('OPP_TOTAL_HOUR')}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
    </div>

    <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
        <label class="form-label">capacity</label>
        <input type="number" name="OPP_CAPACITY" value="{{isset($item) ? $item->OPP_CAPACITY : old('OPP_CAPACITY')}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
    </div>

    <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
        <label class="form-label">city</label>
        <input type="text" name="OPP_CITY" value="{{isset($item) ? $item->OPP_CITY : old('OPP_CITY')}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
    </div>

    <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
        <label class="form-label">location</label>
        <input type="text" name="OPP_LOCATION" value="{{isset($item) ? $item->OPP_LOCATION : old('OPP_LOCATION')}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
    </div>
    <div class="form-check col-md-6 form-check-warning text-start">
        <input type="hidden" name="OPP_STATUS" value="0">
        <input class="form-check-input" type="checkbox" name="OPP_STATUS" value="1" id="flexCheckDefault"{{isset($item) && $item->OPP_STATUS == 1 ? 'checked' : ''}}">
        <label class="form-check-label" for="flexCheckDefault">
            <a href="javascript:;" class="text-dark font-weight-bolder">Status</a>
        </label>
    </div>
    <div class="input-group col-md-6 mb-3">
{{--        <label class="form-label">decription</label>--}}
        <textarea style="border: 1px solid #ff993a" name="OPP_DESCRIPTION" rows="4" class="form-control">{{isset($item) ? $item->OPP_DESCRIPTION : old('OPP_DESCRIPTION')}}</textarea>
    </div>

</div>
