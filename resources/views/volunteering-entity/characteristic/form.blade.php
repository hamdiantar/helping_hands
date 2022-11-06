  <div class="row">
    <input type="hidden" name="OPP_ID" value="{{$opportunity->OPP_ID}}">
    <div class="input-group col-md-12 input-group-outline mb-3 is-filled">
        <label class="form-label">characteristic Name</label>
        <input type="text" name="VOL_CH_NAME" value="{{isset($item) ? $item->VOL_CH_NAME : old('VOL_CH_NAME')}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
    </div>

    <div class="input-group col-md-12 input-group-outline mb-3 is-filled">
        <label class="form-label">characteristic description</label>
        <textarea rows="4"  name="VOL_CH_DESCRIPTION" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">{{isset($item) ? $item->VOL_CH_DESCRIPTION : old('VOL_CH_DESCRIPTION')}}</textarea>
    </div>
</div>
