@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('breadcrumb')
    <li><a href="#">Volunteers Management </a></li>
@endsection
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">

                    <div class="card-header p-0 position-relative mt-n4 mx-3">
                        <div class="bg-gradient-warning shadow-warning border-radius-lg pt-3 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Volunteers Management</h6>
                        </div>
                    </div>

                    <div class="card-body ml-3 mr-3 mt-5">
                        <form method="get">
                            <div class="row mt-5">
                                <div class="input-group col-md-4 input-group-outline mb-3 is-filled">
                                    <label class="form-label">Filter By city :</label>
                                    <select id="VOL_CITY" class="form-select select2" name="VOL_CITY">
                                        <option value="">Select</option>
                                        <option value="Abha" {{ request()->VOL_CITY == 'Abha' ? 'selected' : ''}}>Abha</option>
                                        <option value="Abqaiq" {{ request()->VOL_CITY == 'Abqaiq' ? 'selected' : ''}}>Abqaiq</option>
                                        <option value="Al-Bahah" {{ request()->VOL_CITY == 'Al-Bahah' ? 'selected' : ''}}>Al-Bahah</option>
                                        <option value="Al-Dammam" {{ request()->VOL_CITY == 'Al-Dammam' ? 'selected' : ''}}>Al-Dammam</option>
                                        <option value="Al-Jubail" {{ request()->VOL_CITY == 'Al-Jubail' ? 'selected' : ''}}>Al-Jubail</option>
                                        <option value="Al-Hufuf" {{ request()->VOL_CITY == 'Al-Hufuf' ? 'selected' : ''}}>Al-Hufuf</option>
                                        <option value="Al-Jawf" {{ request()->VOL_CITY == 'Al-Jawf' ? 'selected' : ''}}>Al-Jawf</option>
                                        <option value="Al-Kharj (oasis)" {{ request()->VOL_CITY == 'Al-Kharj (oasis)' ? 'selected' : ''}}>Al-Kharj (oasis)</option>
                                        <option value="Al-Khubar" {{ request()->VOL_CITY == 'Al-Khubar' ? 'selected' : ''}}>Al-Khubar</option>
                                        <option value="Al-Qatif" {{ request()->VOL_CITY == 'Al-Qatif' ? 'selected' : ''}}>Al-Qatif</option>
                                        <option value=" Al-Taif" {{ request()->VOL_CITY == ' Al-Taif' ? 'selected' : ''}}> Al-Taif</option>
                                        <option value="Buraydah" {{ request()->VOL_CITY == 'Buraydah' ? 'selected' : ''}}>Buraydah</option>
                                        <option value="Dhahran" {{ request()->VOL_CITY == 'Dhahran' ? 'selected' : ''}}>Dhahran</option>
                                        <option value="Hail" {{ request()->VOL_CITY == 'Hail' ? 'selected' : ''}}>Hail</option>
                                        <option value="Jiddah" {{ request()->VOL_CITY == 'Jiddah' ? 'selected' : ''}}>Jiddah</option>
                                        <option value="Jizan" {{ request()->VOL_CITY == 'Jizan' ? 'selected' : ''}}>Jizan</option>
                                        <option value=" Khamis Mushayt" {{ request()->VOL_CITY == ' Khamis Mushayt' ? 'selected' : ''}}> Khamis Mushayt</option>
                                        <option value="King Khalid Military City" {{ request()->VOL_CITY == 'King Khalid Military City' ? 'selected' : ''}}>King Khalid Military City</option>
                                        <option value="Mecca" {{ request()->VOL_CITY == 'Mecca' ? 'selected' : ''}}>Mecca</option>
                                        <option value="Medina" {{ request()->VOL_CITY == 'Medina' ? 'selected' : ''}}>Medina</option>
                                        <option value="Najran" {{ request()->VOL_CITY == 'Najran' ? 'selected' : ''}}>Najran</option>
                                        <option value="Ras Tanura" {{ request()->VOL_CITY == 'Ras Tanura' ? 'selected' : ''}}>Ras Tanura</option>
                                        <option value="Riyadh" {{ request()->VOL_CITY == 'Riyadh' ? 'selected' : ''}}>Riyadh</option>
                                        <option value="Sakaka" {{ request()->VOL_CITY == 'Sakaka' ? 'selected' : ''}}>Sakaka</option>
                                        <option value="Tabuk" {{ request()->VOL_CITY == 'Tabuk' ? 'selected' : ''}}>Tabuk</option>
                                    </select>
                                </div>
                                <div class="col-md-2 text-center">
                                    <button type="submit" class="btn bg-gradient-warning btn-sm w-100 p-2">
                                        search
                                    </button>
                                </div>
                            </div>
                        </form>

                        <div class="table-responsive p-0">
                            <table class="table  table-bordered mb-0 text-center" id="dataTable">
                                <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        #VOL_ID
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        FullName
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        UserName
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        E-Mail
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                       completed Hours
                                    </th>
                                    <th class="text-center text-secondary opacity-7">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($items as $index=>$item)
                                <tr>
                                    <td>{{$item->VOL_ID}}</td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{$item->full_name}}</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{$item->VOL_USERNAME}}</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{$item->VOL_EMAIL}}</p>
                                    </td>
                                    <td>
                                        <span class="badge bg-success">{{$item->VOL_COMPLETED_HOUR}}</span>
                                    </td>

                                    <td class="align-middle">
                                        <a href="{{route('admin.volunteers.show', $item->VOL_ID)}}" class="text-secondary font-weight-bold text-xs"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fa fa-eye text-info fa-2x"></i>
                                        </a>

                                        <a style="cursor: pointer" onclick="confirmAction('formid{{$item->VOL_ID}}', 'delete ?')"
                                           class="text-secondary font-weight-bold text-xs  ml-2"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fa fa-trash text-danger fa-2x"></i>
                                        </a>
                                        <form id="formid{{$item->VOL_ID}}" method="post" action="{{route('admin.volunteers.destroy', $item->VOL_ID)}}">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
