@extends('website.layouts.app')

@section('title', 'Join Us')
@section('content')
    <div class="main-banner2">
        <div class="container mt-2 mb-4 d-flex justify-content-center">
            <div class="col-md-12 card p-2">
              <div class="row">
                  <div style="border-right: 1px solid #dfdfdf;" class="col-md-4">
                      <div  class=" image d-flex flex-column justify-content-center align-items-center">
                          <a><img class="img-thumbnail img-profile" src="{{asset('website/logo.png')}}" height="100" width="100"/></a>
                          <span class="name mt-3">Dalal Mohammed</span> <span class="idd">@dalal</span>
                          <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                              <span class="idd1">45 Target Hours</span><span>
                                  <i class="fa fa-clock"></i></span>
                          </div>
                          <div class=" d-flex mt-2">
                              <button class="btn1 btn">Edit Profile <i class="fa fa-edit"></i></button>
                          </div>
                          <div class=" px-2 rounded mt-4 date ">
                              <span class="join">Joined May,2021</span>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-8 mt-2">
                      <nav>
                          <div class="nav nav-tabs" id="nav-tab" role="tablist">
                              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">My Profile</button>
                              <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">My Attendance</button>
                              <button style="width: 34% !important;" class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Generate e-certificate</button>
                          </div>
                      </nav>
                      <div class="tab-content" id="nav-tabContent">
                          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                              <form class="row p-3">
                                  <div class="row">
                                      <div class="col-md-6 mb-3">
                                          <label for="UserName" class="form-label">UserName :</label>
                                          <input type="text" class="form-control" id="UserName">
                                      </div>
                                      <div class="col-md-6 mb-3">
                                          <label for="Password" class="form-label">Password</label>
                                          <input type="password" class="form-control" id="Password">
                                      </div>

                                      <div class="col-md-6 mb-3">
                                          <label for="First" class="form-label">First Name :</label>
                                          <input type="text" class="form-control" id="First">
                                      </div>
                                      <div class="col-md-6 mb-3">
                                          <label for="Last" class="form-label">Last Name : </label>
                                          <input type="text" class="form-control" id="Last">
                                      </div>

                                      <div class="col-md-6 mb-3">
                                          <label for="Mail" class="form-label">E-Mail : </label>
                                          <input type="email" class="form-control" id="Mail">
                                      </div>

                                      <div class="col-md-6 mb-3">
                                          <label for="Phone" class="form-label">Phone : </label>
                                          <input type="tel" class="form-control" id="Phone">
                                      </div>

                                      <div class="col-md-6 mb-3">
                                          <label for="National" class="form-label">National Id : </label>
                                          <input type="number" class="form-control" id="National">
                                      </div>

                                      <div class="col-md-6 mb-3">
                                          <label for="inputState" class="form-label">Gender</label>
                                          <select id="inputState" class="form-select">
                                              <option value="">Select</option>
                                              <option value="">Male</option>
                                              <option value="">Female</option>
                                          </select>
                                      </div>

                                      <div class="col-md-6 mb-3">
                                          <label for="School" class="form-label">School Name : </label>
                                          <input type="text" class="form-control" id="School">
                                      </div>

                                      <div class="col-md-6 mb-3">
                                          <label for="Target" class="form-label">Target Hours : </label>
                                          <input type="number" class="form-control" id="Target">
                                      </div>

                                      <div class="col-md-6 mb-3">
                                          <label for="Completed" class="form-label">Completed Hours : </label>
                                          <input type="number" class="form-control" id="Completed">
                                      </div>

                                      <div class="col-md-6 mb-3">
                                          <label for="Grade" class="form-label">Grade Level : </label>
                                          <input type="text" class="form-control" id="Grade">
                                      </div>

                                      <div class="col-md-6 mb-3">
                                          <label for="City" class="form-label">City : </label>
                                          <input type="text" class="form-control" id="City">
                                      </div>

                                      <div class="col-md-6 mb-3 mt-4">
                                          <button type="submit" class="btn btn-primary">Update Profile</button>
                                      </div>

                                  </div>
                              </form>
                          </div>
                          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                              <h5 class="text-center mb-3 mt-3">My Attendance</h5>
                              <button style="    float: right;
    margin: 10px;" class="btn">print <i class="fa fa-print"></i></button>
                              <table class="table table-bordered table-">
                                  <tbody>
                                  <tr>
                                      <th>#</th>
                                      <th>Event Name</th>
                                      <th>Start Date</th>
                                      <th>End Date</th>
                                      <th>status</th>
                                  </tr>
                                  <tr>
                                      <td>1</td>
                                      <td>Event Name</td>
                                      <td>12-12-2022</td>
                                      <td>1-2-2023</td>
                                      <td><span class="badge bg-danger">absent</span></td>
                                  </tr>
                                  <tr>
                                      <td>2</td>
                                      <td>Event Name</td>
                                      <td>12-12-2022</td>
                                      <td>1-2-2023</td>
                                      <td><span class="badge bg-success">attend</span></td>
                                  </tr>
                                  </tbody>
                              </table>
                          </div>
                          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                              <div class="col-md-12 p-5 text-center">
                                  <a target="_blank" href="{{route('generate')}}" class="btn">Generate Your Certificate Now <i class="fa fa-graduation-cap"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
@endsection
