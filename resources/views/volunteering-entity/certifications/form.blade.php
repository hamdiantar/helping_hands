  <div class="row">
    <input type="hidden" name="OPP_ID" value="{{$opportunity->OPP_ID}}">
    <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
        <label class="form-label">Volunteer</label>
        <select required class="form-control" name="VOL_ID" {{isset($item) ? 'readonly' : ''}}>
            <option value="">Select</option>
            @foreach($volunteers as $volunteer)
                <option value="{{$volunteer->VOL_ID}}"
                        {{isset($item) && $item->VOL_ID  == $volunteer->VOL_ID ? 'selected' : ''}} >{{optional($volunteer->volunteer)->full_name}}</option>
            @endforeach
        </select>
    </div>

    <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
        <label class="form-label">Cert Issue Date</label>
        <input required type="date" class="form-control" name="CER_ISSUE_DATE" value="{{isset($item) ? $item->CER_ISSUE_DATE : old('CER_ISSUE_DATE')}}">
    </div>


      <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
          <label class="form-label">Cert Type</label>
          <input required type="text" class="form-control" name="CER_TYPE" value="{{isset($item) ? $item->CER_TYPE : old('CER_TYPE')}}">
      </div>
</div>
