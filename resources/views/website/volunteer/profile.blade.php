@extends('website.layouts.app')

@section('title', 'Join Us')
@section('content')
    <div style="padding: 135px 10px 0 5px !important;" class="main-banner2">
        <div class=" mt-2 mb-4 d-flex justify-content-center">
            <div class="col-md-12 card p-2">
              <div class="row">
                  <div style="border-right: 1px solid #dfdfdf;" class="col-md-2">
                      <div  class=" image d-flex flex-column justify-content-center align-items-center">
                          <a><img class="img-thumbnail img-profile" src="{{asset('website/logo.png')}}" height="100" width="100"/></a>
                          <span class="name mt-3">{{$volunteer->full_name}}</span> <span class="idd">@ {{$volunteer->VOL_USERNAME}}</span>
                          <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                              <span class="idd1">{{$volunteer->VOL_TARGET_HOUR}} Target Hours</span><span><i class="fa fa-clock"></i></span>
                          </div>
                          <div class=" d-flex mt-2">
                              <span>Level : {{$volunteer->VOL_GRADE_LEVEL}}</span>
                          </div>
                          <div class=" px-2 rounded mt-4 date ">

                          </div>
                      </div>
                  </div>
                  <div class="col-md-10 mt-2">
                      <nav>
                          <div class="nav nav-tabs" id="nav-tab" role="tablist">
                              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">My Profile</button>
                              <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">My Attendance</button>
                              <button  class="nav-link" id="nav-opp-tab" data-bs-toggle="tab" data-bs-target="#nav-opp" type="button" role="tab" aria-controls="nav-opp" aria-selected="false">My Requests</button>
                              <button  class="nav-link" id="nav-Compliant-tab" data-bs-toggle="tab" data-bs-target="#nav-Compliant" type="button" role="tab" aria-controls="nav-Compliant" aria-selected="false">My Compliant</button>
                              <button  class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">certificate</button>
                          </div>
                      </nav>
                      <div class="tab-content" id="nav-tabContent">
                          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                              <form class="row p-3" method="post" action="{{route('volunteer.update')}}" id="form">
                                  @csrf
                                  @method('PUT')
                                  <input type="hidden" name="id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
                                  <div class="row">
                                      <div class="col-md-6 mb-3">
                                          <label for="UserName" class="form-label">UserName :</label>
                                          <input type="text" class="form-control" id="UserName" name="VOL_USERNAME" value="{{$volunteer->VOL_USERNAME}}">
                                      </div>
                                      <div class="col-md-6 mb-3">
                                          <label for="Password" class="form-label">Password</label>
                                          <input type="password" autocomplete="new-password" name="password"  class="form-control" id="Password">
                                      </div>

                                      <div class="col-md-6 mb-3">
                                          <label for="First" class="form-label">First Name :</label>
                                          <input type="text" class="form-control" id="First" name="VOL_FNAME"  value="{{$volunteer->VOL_FNAME}}">
                                      </div>
                                      <div class="col-md-6 mb-3">
                                          <label for="Last" class="form-label">Last Name : </label>
                                          <input type="text" class="form-control" id="Last" name="VOL_LNAME"  value="{{$volunteer->VOL_LNAME}}">
                                      </div>

                                      <div class="col-md-6 mb-3">
                                          <label for="Mail" class="form-label">E-Mail : </label>
                                          <input type="email" class="form-control" id="Mail" name="VOL_EMAIL"  value="{{$volunteer->VOL_EMAIL}}">
                                      </div>

                                      <div class="col-md-6 mb-3">
                                          <label for="Phone" class="form-label">Phone : </label>
                                          <input type="tel" class="form-control" id="Phone" name="VOL_PHONE"  value="{{$volunteer->VOL_PHONE}}">
                                      </div>

                                      <div class="col-md-6 mb-3">
                                          <label for="National" class="form-label">National Id : </label>
                                          <input type="number" class="form-control" id="National" name="VOL_NATIONAL_ID"  value="{{$volunteer->VOL_NATIONAL_ID}}">
                                      </div>

                                      <div class="col-md-6 mb-3">
                                          <label for="inputState" class="form-label">Gender</label>
                                          <select id="inputState" class="form-select" name="VOL_GENDER">
                                              <option value="">Select</option>
                                              <option value="male" {{$volunteer->VOL_GENDER == 'male' ? 'selected' : ''}}>Male</option>
                                              <option value="female" {{$volunteer->VOL_GENDER == 'female' ? 'selected' : ''}}>Female</option>
                                          </select>
                                      </div>

                                      <div class="col-md-6 mb-3">
                                          <label for="School" class="form-label">School Name : </label>
                                          <input type="text" class="form-control" id="School" name="VOL_SCHOOL_NAME"  value="{{$volunteer->VOL_SCHOOL_NAME}}">
                                      </div>

                                      <div class="col-md-6 mb-3">
                                          <label for="Target" class="form-label">Target Hours : </label>
                                          <input type="number" class="form-control" id="Target" name="VOL_TARGET_HOUR"  value="{{$volunteer->VOL_TARGET_HOUR}}">
                                      </div>

                                      <div class="col-md-6 mb-3">
                                          <label for="Completed" class="form-label">Completed Hours : </label>
                                          <input type="number" class="form-control" id="Completed" name="VOL_COMPLETED_HOUR"  value="{{$volunteer->VOL_COMPLETED_HOUR}}">
                                      </div>

                                      <div class="col-md-6 mb-3">
                                          <label for="VOL_GRADE_LEVEL" class="form-label">Grade Level : </label>
                                          <select id="VOL_GRADE_LEVEL"  class="form-select select2" name="VOL_GRADE_LEVEL">
                                              <option value="">Select</option>
                                              <option value="first" {{ $volunteer->VOL_GRADE_LEVEL == 'first' ? 'selected' : ''}}>first</option>
                                              <option value="second" {{$volunteer->VOL_GRADE_LEVEL == 'second' ? 'selected' : ''}}>second</option>
                                              <option value="third" {{$volunteer->VOL_GRADE_LEVEL == 'third' ? 'selected' : ''}}>third</option>
                                          </select>
                                      </div>

                                      <div class="col-md-6 mb-3">
                                          <label for="City" class="form-label">City : </label>
                                          <input type="text" class="form-control" id="City" name="VOL_CITY"  value="{{$volunteer->VOL_CITY}}">
                                      </div>

                                      <div class="col-md-6 mb-3 mt-4">
                                          <button type="submit" class="btn btn-primary">Update Profile</button>
                                      </div>

                                  </div>
                              </form>
                          </div>
                          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                              <h5 class="text-center mb-3 mt-3">My Attendance</h5>
                              <button onclick="printData()" style="float: right;  margin: 10px;" class="btn">print <i class="fa fa-print"></i></button>
                              <table class="table table-bordered" id="printTable">
                                  <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>Opportunity Name</th>
                                      <th>Date</th>
                                      <th>status</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  @foreach($volunteer->attends as $attend)
                                      <tr>
                                      <td>{{$attend->ATT_ID}}</td>
                                      <td>{{optional($attend->oppo)->OPP_NAME}}</td>
                                      <td>{{$attend->ATT_DATE}}</td>
                                      <td>
                                          @if($attend->ATT_STATUS == 'attend')
                                              <span class="badge bg-success">Attend</span>
                                          @else
                                              <span class="badge bg-danger">absent</span>
                                          @endif
                                      </td>
                                      </tr>
                                  @endforeach
                                  </tbody>
                              </table>
                          </div>
                          <div class="tab-pane fade" id="nav-opp" role="tabpanel" aria-labelledby="nav-opp-tab">
                              <h5 class="text-center mb-3 mt-3">Requests</h5>
                              <table class="table table-bordered table-">
                                  <thead>
                                  <tr>
                                      <th>#ID</th>
                                      <th>Date</th>
                                      <th>Volunteering Entity</th>
                                      <th>Opportunity</th>
                                      <th>Status</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  @if(count($volunteer->requestes))
                                  @foreach($volunteer->requestes as $request)
                                      <tr>
                                      <td>{{$request->REQ_ID}}</td>
                                      <td>{{$request->REQ_DATE}}</td>
                                      <td>{{optional($request->volEntity)->VOL_ENTITY_NAME}}</td>
                                      <td>{{optional($request->opp)->OPP_NAME}}</td>
                                      <td><span class="badge bg-info">{{$request->REQ_STATUS}}</span></td>
                                  </tr>
                                  @endforeach
                                  @else
                                      <tr>
                                          <td colspan="5">No Requests Found</td>
                                      </tr>
                                  @endif
                                  </tbody>
                              </table>
                          </div>
                          <div class="tab-pane fade" id="nav-Compliant" role="tabpanel" aria-labelledby="nav-Compliant-tab">
                              <h5 class="text-center mb-3 mt-3">Compliant</h5>
                              <table class="table table-bordered table-">
                                  <thead>
                                  <tr>
                                      <th>#ID</th>
                                      <th>Title</th>
                                      <th>Against</th>
                                      <th>Date</th>
                                      <th>Relay</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  @if(count($volunteer->compliants))
                                      @foreach($volunteer->compliants as $request)
                                          <tr>
                                              <td>{{$request->COMP_ID}}</td>
                                              <td>{{$request->COMP_TITLE}}</td>
                                              <td>{{$request->COMP_AGAINST}}</td>
                                              <td>{{$request->COMP_DATE}}</td>
                                              <td>{{$request->COMP_REPLY}}</td>
                                          </tr>
                                      @endforeach
                                  @else
                                      <tr>
                                          <td colspan="5">No compliant Found</td>
                                      </tr>
                                  @endif
                                  </tbody>
                              </table>
                          </div>
                          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                              <div class="col-md-12 p-5 text-center">
                                  <h5 class="text-center mb-3 mt-3">Generate Certifications</h5>
                                  <table class="table table-bordered table-">
                                      <thead>
                                      <tr>
                                          <th>#ID</th>
                                          <th>Volunteering Entity</th>
                                          <th>Opportunity</th>
                                          <th>Issue Date</th>
                                          <th>Generate</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      @if(count($volunteer->certifications))
                                          @foreach($volunteer->certifications as $cert)
                                              <tr>
                                                  <td>{{$cert->CER_ID}}</td>
                                                  <td>{{optional($cert->oppo->volEntity)->VOL_ENTITY_NAME}}</td>
                                                  <td>{{optional($cert->oppo)->OPP_NAME}}</td>
                                                  <td>{{$cert->CER_ISSUE_DATE}}</td>
                                                  <td>
                                                      <a target="_blank" href="{{route('generate.certification', $cert->CER_ID)}}" class="btn p-2">Generate<i class="fa fa-graduation-cap"></i></a>
                                                  </td>
                                              </tr>
                                          @endforeach
                                      @else
                                          <tr>
                                              <td colspan="5">No Certifications Found</td>
                                          </tr>
                                      @endif
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
@endsection
{{--@push('js')--}}
{{--    {!! JsValidator::formRequest('App\Http\Requests\Website\VolunteerRegisterRequest', "#form") !!}--}}
{{--@endpush--}}
