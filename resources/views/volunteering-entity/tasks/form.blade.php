  <div class="row">
    <input type="hidden" name="OPP_ID" value="{{$opportunity->OPP_ID}}">
    <div class="input-group col-md-12 input-group-outline mb-3 is-filled">
        <label class="form-label">Task Name</label>
        <textarea rows="4"  name="OPP_TASK_NAME" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">{{isset($item) ? $item->OPP_TASK_NAME : old('OPP_TASK_NAME')}}</textarea>
    </div>

    <div class="input-group col-md-12 input-group-outline mb-3 is-filled">
        <label class="form-label">Task description</label>
        <textarea rows="4"  name="OPP_TASK_DESCRIPTION" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">{{isset($item) ? $item->OPP_TASK_DESCRIPTION : old('OPP_TASK_DESCRIPTION')}}</textarea>
    </div>
</div>
