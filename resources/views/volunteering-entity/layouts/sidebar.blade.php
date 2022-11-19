<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div>
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 text-center" href="#">
            <img style="height:74px !important;width:181px !important;" src="{{getAuthVolEntity()->logo_path}}" class="h-100" alt="main_logo">
            <span class="font-weight-bold text-white">{{getAuthVolEntity()->VOL_ENTITY_NAME}}</span>
        </a>
    </div>

    <hr class="horizontal light mt-0 mb-2">
    <div style="height: auto !important;" class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link text-white {{isCurrentPage('volunteering-entity')}}" href="{{route('volunteering-entity.')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{isCurrentPage('volunteering-entity/opportunities*')}}" href="{{route('volunteering-entity.opportunities.index')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">notifications_active</i>
                    </div>
                    <span class="nav-link-text ms-1">opportunities</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{isCurrentPage('volunteering-entity/requests*')}}" href="{{route('volunteering-entity.requests.index')}}">
                    <div class="text-white text-center d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">persons</i>
                    </div>
                    <span class="nav-link-text">Applicants</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{isCurrentPage('volunteering-entity/feedback*')}}" href="{{route('volunteering-entity.feedback')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">assignment</i>
                    </div>
                    <span class="nav-link-text ms-1">Feedback</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{isCurrentPage('volunteering-entity/subscription*')}}" href="{{route('volunteering-entity.subscription.index')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">assignment</i>
                    </div>
                    <span class="nav-link-text ms-1">Subscription</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{isCurrentPage('volunteering-entity/certifications')}} {{isCurrentPage('volunteering-entity/opportunities/*certifications*')}}" href="{{route('volunteering-entity.certifications')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">workspace_premium</i>
                    </div>
                    <span class="nav-link-text ms-1">Certifications</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{isCurrentPage('volunteering-entity/performance_report*')}}" href="{{route('volunteering-entity.performance_report')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">receipt_long</i>
                    </div>
                    <span class="nav-link-text ms-1">Performance Report</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{isCurrentPage('volunteering-entity/profile')}}" href="{{route('volunteering-entity.profile')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <span class="material-icons">home</span>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>

        </ul>
    </div>

</aside>
