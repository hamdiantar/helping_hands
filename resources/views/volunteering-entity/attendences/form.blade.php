  <div class="row">
    <input type="hidden" name="OPP_ID" value="{{$opportunity->OPP_ID}}">
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
        <label class="form-label">Date</label>
        <input type="date" class="form-control" name="ATT_DATE" value="{{isset($item) ? $item->ATT_DATE : old('ATT_DATE')}}">
    </div>

      <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
          <label class="form-label">Status</label>
          <select class="form-control" name="ATT_STATUS">
              <option>Select</option>
                  <option value="attend" {{isset($item) && $item->ATT_STATUS  == 'attend' ? 'selected' : ''}} >attend</option>
                  <option value="absent" {{isset($item) && $item->ATT_STATUS  == 'absent' ? 'selected' : ''}} >absent</option>
          </select>
      </div>
</div>
