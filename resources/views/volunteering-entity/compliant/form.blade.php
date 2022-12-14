<div class="row">

    <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
        <label class="form-label">Volunteer</label>
        <select class="form-control" name="VOL_ID" {{isset($item) ? 'readonly' : ''}}>
            <option value="">Select</option>
            @foreach($volunteers as $volunteer)
                <option value="{{$volunteer->VOL_ID}}"
                        {{isset($item) && $item->VOL_ID  == $volunteer->VOL_ID ? 'selected' : ''}} >{{optional($volunteer->volunteer)->full_name}}</option>
            @endforeach
        </select>
    </div>

    <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
        <label class="form-label">Complaint Title</label>
        <select class="form-control" name="COMP_TITLE" {{isset($item) ? 'readonly' : ''}}>
            <option value="">Select</option>
                <option value="Time Management" {{isset($item) && $item->COMP_TITLE  =='Time Management' ? 'selected' : ''}} >Time Management</option>
                <option value="Mistreatment" {{isset($item) && $item->COMP_TITLE  =='Mistreatment' ? 'selected' : ''}} >Mistreatment</option>
                <option value="Violence" {{isset($item) && $item->COMP_TITLE  =='Violence' ? 'selected' : ''}} >Violence</option>
                <option value="Attendance" {{isset($item) && $item->COMP_TITLE  =='Attendance' ? 'selected' : ''}} >Attendance</option>
                <option value="Irresponsibility" {{isset($item) && $item->COMP_TITLE  =='Irresponsibility' ? 'selected' : ''}} >Irresponsibility</option>
                <option value="Uncommittment" {{isset($item) && $item->COMP_TITLE  =='Uncommittment' ? 'selected' : ''}} >Uncommittment</option>
                <option value="Others" {{isset($item) && $item->COMP_TITLE  =='Others' ? 'selected' : ''}} >Others</option>
        </select>
    </div>

    <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
        <label class="form-label">Date</label>
        <input type="date" name="COMP_DATE" value="{{isset($item) ? $item->COMP_DATE : old('COMP_DATE')}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
    </div>

    <label class="form-label">description</label>
    <div class="input-group col-md-6 mb-3">

        <textarea style="border: 1px solid #ff993a" name="COMP_DESCRIPTION" rows="4" class="form-control">{{isset($item) ? $item->COMP_DESCRIPTION : old('COMP_DESCRIPTION')}}</textarea>
    </div>

</div>
