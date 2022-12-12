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
        <select id="OPP_CITY" class="form-select select2" name="OPP_CITY">
            <option value="">Select</option>
            <option value="Abha" {{isset($item) && $item->OPP_CITY == 'Abha' ? 'selected' : ''}}>Abha</option>
            <option value="Abqaiq" {{isset($item) && $item->OPP_CITY == 'Abqaiq' ? 'selected' : ''}}>Abqaiq</option>
            <option value="Al-Bahah" {{isset($item) && $item->OPP_CITY == 'Al-Bahah' ? 'selected' : ''}}>Al-Bahah</option>
            <option value="Al-Dammam" {{isset($item) && $item->OPP_CITY == 'Al-Dammam' ? 'selected' : ''}}>Al-Dammam</option>
            <option value="Al-Jubail" {{isset($item) && $item->OPP_CITY == 'Al-Jubail' ? 'selected' : ''}}>Al-Jubail</option>
            <option value="Al-Hufuf" {{isset($item) && $item->OPP_CITY == 'Al-Hufuf' ? 'selected' : ''}}>Al-Hufuf</option>
            <option value="Al-Jawf" {{isset($item) && $item->OPP_CITY == 'Al-Jawf' ? 'selected' : ''}}>Al-Jawf</option>
            <option value="Al-Kharj (oasis)" {{isset($item) && $item->OPP_CITY == 'Al-Kharj (oasis)' ? 'selected' : ''}}>Al-Kharj (oasis)</option>
            <option value="Al-Khubar" {{isset($item) && $item->OPP_CITY == 'Al-Khubar' ? 'selected' : ''}}>Al-Khubar</option>
            <option value="Al-Qatif" {{isset($item) && $item->OPP_CITY == 'Al-Qatif' ? 'selected' : ''}}>Al-Qatif</option>
            <option value=" Al-Taif" {{isset($item) && $item->OPP_CITY == ' Al-Taif' ? 'selected' : ''}}> Al-Taif</option>
            <option value="Buraydah" {{isset($item) && $item->OPP_CITY == 'Buraydah' ? 'selected' : ''}}>Buraydah</option>
            <option value="Dhahran" {{isset($item) && $item->OPP_CITY == 'Dhahran' ? 'selected' : ''}}>Dhahran</option>
            <option value="Hail" {{isset($item) && $item->OPP_CITY == 'Hail' ? 'selected' : ''}}>Hail</option>
            <option value="Jiddah" {{isset($item) && $item->OPP_CITY == 'Jiddah' ? 'selected' : ''}}>Jiddah</option>
            <option value="Jizan" {{isset($item) && $item->OPP_CITY == 'Jizan' ? 'selected' : ''}}>Jizan</option>
            <option value=" Khamis Mushayt" {{isset($item) && $item->OPP_CITY == ' Khamis Mushayt' ? 'selected' : ''}}> Khamis Mushayt</option>
            <option value="King Khalid Military City" {{isset($item) && $item->OPP_CITY == 'King Khalid Military City' ? 'selected' : ''}}>King Khalid Military City</option>
            <option value="Mecca" {{isset($item) && $item->OPP_CITY == 'Mecca' ? 'selected' : ''}}>Mecca</option>
            <option value="Medina" {{isset($item) && $item->OPP_CITY == 'Medina' ? 'selected' : ''}}>Medina</option>
            <option value="Najran" {{isset($item) && $item->OPP_CITY == 'Najran' ? 'selected' : ''}}>Najran</option>
            <option value="Ras Tanura" {{isset($item) && $item->OPP_CITY == 'Ras Tanura' ? 'selected' : ''}}>Ras Tanura</option>
            <option value="Riyadh" {{isset($item) && $item->OPP_CITY == 'Riyadh' ? 'selected' : ''}}>Riyadh</option>
            <option value="Sakaka" {{isset($item) && $item->OPP_CITY == 'Sakaka' ? 'selected' : ''}}>Sakaka</option>
            <option value="Tabuk" {{isset($item) && $item->OPP_CITY == 'Tabuk' ? 'selected' : ''}}>Tabuk</option>
        </select>

    </div>

    <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
        <label class="form-label">location</label>
        <input type="text" name="OPP_LOCATION" value="{{isset($item) ? $item->OPP_LOCATION : old('OPP_LOCATION')}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
    </div>

    <div class="input-group col-md-6 mb-3">
{{--        <label class="form-label">decription</label>--}}
        <textarea style="border: 1px solid #ff993a" name="OPP_DESCRIPTION" rows="4" class="form-control">{{isset($item) ? $item->OPP_DESCRIPTION : old('OPP_DESCRIPTION')}}</textarea>
    </div>

</div>
