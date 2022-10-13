@extends('website.layouts.app')

@section('title', 'Listing Volunteering')
@section('content')
    <div id="services" class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading  wow fadeInDown animated" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.5s; -moz-animation-delay: 0.5s; animation-delay: 0.5s;">
                        <h4>Available opportunities  [ 20 ]<em> &amp;  in Entity Name</em> </h4>
                        <!-- Button trigger modal -->
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <article class="col-md-9 mb-5 offset-2 post vt-post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="caption">
                                <h3 class="md-heading text-center"><a href="#">the title of opportunity</a></h3>
                                <p>description for opportunity here description for opportunity here description for opportunity here description for opportunity here description for opportunity here</p>
                                <div class="author-info author-info-2">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td>Capacity</td>
                                            <td>Booked</td>
                                            <td>Available</td>
                                            <td>Total Hours</td>
                                            <td>Start Date</td>
                                            <td>End Date</td>
                                            <td>Location</td>
                                        </tr>
                                        <tr>
                                            <td><span class="badge bg-info">30</span> student</td>
                                            <td><span class="badge bg-danger">20</span> student</td>
                                            <td><span class="badge bg-success">10</span> student</td>
                                            <td>15 Hours</td>
                                            <td>20-10-2022</td>
                                            <td>20-11-2022</td>
                                            <td>Makii</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary btn-book" role="button">Volunteer Now <i class="fa fa-bookmark"></i></a> </div>
                        </div>
                    </div>
                </article>
                <article class="col-md-9 mb-5 offset-2 post vt-post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="caption">
                                <h3 class="md-heading text-center"><a href="#">the title of opportunity</a></h3>
                                <p>description for opportunity here description for opportunity here description for opportunity here description for opportunity here description for opportunity here</p>
                                <div class="author-info author-info-2">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td>Capacity</td>
                                            <td>Booked</td>
                                            <td>Available</td>
                                            <td>Total Hours</td>
                                            <td>Start Date</td>
                                            <td>End Date</td>
                                            <td>Location</td>
                                        </tr>
                                        <tr>
                                            <td><span class="badge bg-info">30</span> student</td>
                                            <td><span class="badge bg-danger">20</span> student</td>
                                            <td><span class="badge bg-success">10</span> student</td>
                                            <td>15 Hours</td>
                                            <td>20-10-2022</td>
                                            <td>20-11-2022</td>
                                            <td>Makii</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary btn-book" role="button">Volunteer Now <i class="fa fa-bookmark"></i></a> </div>
                        </div>
                    </div>
                </article>
                <article class="col-md-9 mb-5 offset-2 post vt-post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="caption">
                                <h3 class="md-heading text-center"><a href="#">the title of opportunity</a></h3>
                                <p>description for opportunity here description for opportunity here description for opportunity here description for opportunity here description for opportunity here</p>
                                <div class="author-info author-info-2">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td>Capacity</td>
                                            <td>Booked</td>
                                            <td>Available</td>
                                            <td>Total Hours</td>
                                            <td>Start Date</td>
                                            <td>End Date</td>
                                            <td>Location</td>
                                        </tr>
                                        <tr>
                                            <td><span class="badge bg-info">30</span> student</td>
                                            <td><span class="badge bg-danger">20</span> student</td>
                                            <td><span class="badge bg-success">10</span> student</td>
                                            <td>15 Hours</td>
                                            <td>20-10-2022</td>
                                            <td>20-11-2022</td>
                                            <td>Makii</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary btn-book" role="button">Volunteer Now <i class="fa fa-bookmark"></i></a> </div>
                        </div>
                    </div>
                </article>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>




    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Send You Request Now :  </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <textarea class="form-control" rows="5" cols="5"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
