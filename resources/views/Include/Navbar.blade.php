<nav class="navbar navbar-expand-lg navbar-light bg-lightt bottom-shadow" style="">
    <a class="navbar-brand" href="{{ url('/') }}"><img src="/asset/images/sharedocs_enterpriser.png"
            style="width: 200px;background: white;" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Superadmin/index">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link   dropdown-menu-right" href="" data-toggle="dropdown" style="padding-right: 0px;"><i class="fa fa-bell" aria-hidden="true" style="
                    font-size: 22px;
                "></i><i class="fa fa-circle notification_dot" aria-hidden="true" ></i></a>
                <div class="dropdown-menu" id="notification" aria-labelledby="navbarDropdownMenuLink"
                    style="margin-right: 25px;min-width: 23rem !important;padding-bottom: 0px;!important;border-radius: 8px;">
                    <div class="noti-title">
                        <span class="new-noti-title">Notifications</span>
                        <span class="noti-count" id="noti-container-count"></span>
                    </div>
                    <div id="notificationpatch">
                    
                    {{-- <a class="dropdown-item" href="#">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="notificatn_profile_div">
                                    <div class="notificatn_profile_div_main">
                                        <img src="/asset/images/Anonymous_Mask.png"
                                            class="notification_icon">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-10 notifican_leftpad">
                                Employee1 upvoted your question
                                <div>
                                    <span class="notification_bottom_patch_left">10:20pm</span>
                                    <span class="notification_bottom_patch_right">2 days ago</span>
                                </div>
                            </div>
                        </div>
                    </a> --}}
                    {{-- <a class="dropdown-item" href="#">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="notificatn_profile_div">
                                    <div class="notificatn_profile_div_main">
                                        <img src="/asset/images/Anonymous_Mask.png"
                                            class="notification_icon">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-10 notifican_leftpad">
                                Employee1 upvoted your question
                                <div>
                                    <span class="notification_bottom_patch_left">10:20pm</span>
                                    <span class="notification_bottom_patch_right">2 days ago</span>
                                </div>
                            </div>
                        </div>
                    </a> --}}
                    {{-- <a class="dropdown-item" href="#">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="notificatn_profile_div">
                                    <div class="notificatn_profile_div_main">
                                        <img src="/asset/images/Anonymous_Mask.png"
                                            class="notification_icon">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-10 notifican_leftpad">
                                Employee1 upvoted your question
                                <div>
                                    <span class="notification_bottom_patch_left">10:20pm</span>
                                    <span class="notification_bottom_patch_right">2 days ago</span>
                                </div>
                            </div>
                        </div>
                    </a> --}}
                    </div>
                    <div class="notification_viewall"><a href="">View All</a></div>
                </div>
            </li>
            <li class="nav-item  dropdown dropdown-menu-right">
                <a class="nav-link dropdown-toggle  dropdown-menu-right"
                    style="padding-left: 5px;padding-top: 5px;cursor:pointer;" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <img src="/asset/images/Anonymous_Mask.png" class="navbar_profile_icon">
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item" href="\logout">Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
