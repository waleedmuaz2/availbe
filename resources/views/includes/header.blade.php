<div class="container-fluid">
    <div class="az-header-left">
        <a href="" id="azSidebarToggle" class="az-header-menu-icon"><span></span></a>
    </div>
    <div class="az-header-center">
        <input type="search" class="form-control" placeholder="Search for anything...">
        <button class="btn"><i class="fas fa-search"></i></button>
    </div>
    <div class="az-header-right">
        @if(auth()->user()->hasRole('customer'))
            <div class="az-header-message pd-15">
                <button data-toggle="modal" data-target="#serviceBookingModel"
                        class="btn btn-outline-indigo btn-rounded btn-block">Book Now
                </button>
            </div>
        @endif
        <div class="az-header-message">
            <a href="!#"><i class="typcn typcn-messages"></i></a>
        </div>

        <div class="dropdown az-header-notification">
            <a href="" class="new"><i class="typcn typcn-bell"></i></a>
            <div class="dropdown-menu">
                <div class="az-dropdown-header mg-b-20 d-sm-none">
                    <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                </div>
                <h6 class="az-notification-title">Notifications</h6>
                <p class="az-notification-text">You have 2 unread notification</p>
                <div class="az-notification-list">
                    <div class="media new">
                        <div class="az-img-user"><img src="https://via.placeholder.com/500" alt=""></div>
                        <div class="media-body">
                            <p>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</p>
                            <span>Mar 15 12:32pm</span>
                        </div>
                    </div>
                    <div class="media new">
                        <div class="az-img-user online"><img src="https://via.placeholder.com/500" alt=""></div>
                        <div class="media-body">
                            <p><strong>Joyce Chua</strong> just created a new blog post</p>
                            <span>Mar 13 04:16am</span>
                        </div>
                    </div>
                    <div class="media">
                        <div class="az-img-user"><img src="https://via.placeholder.com/500" alt=""></div>
                        <div class="media-body">
                            <p><strong>Althea Cabardo</strong> just created a new blog post</p>
                            <span>Mar 13 02:56am</span>
                        </div>
                    </div>
                    <div class="media">
                        <div class="az-img-user"><img src="https://via.placeholder.com/500" alt=""></div>
                        <div class="media-body">
                            <p><strong>Adrian Monino</strong> added new comment on your photo</p>
                            <span>Mar 12 10:40pm</span>
                        </div>
                    </div>
                </div>
                <div class="dropdown-footer"><a href="">View All Notifications</a></div>
            </div>
        </div>
        <div class="dropdown az-profile-menu">
            <a href="" class="az-img-user"><img src="https://via.placeholder.com/500" alt=""></a>
            <div class="dropdown-menu">
                <div class="az-dropdown-header d-sm-none">
                    <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                </div>
                <div class="az-header-profile">
                    <div class="az-img-user">
                        <img src="https://via.placeholder.com/500" alt="">
                    </div>
                    <h6>Aziana Pechon</h6>
                    <span>
                        @foreach(\Spatie\Permission\Models\Permission::all() as $per)
                            @can($per->name)
                                {{$per->display_name}}
                            @endcan
                        @endforeach
                    </span>
                </div>

                <a href="" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
                <a href="" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
                <a href="" class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a>
                <a href="" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>
                <a href="#" onclick="document.getElementById('logout-form').submit();" class="dropdown-item"><i class="typcn typcn-power-outline"></i>
                    <form id="logout-form" action="{{route('logout')}}" method="POST">
                     @csrf
                    </form>
                    <span form="logout-form">Sign Out</span>
                </a>
            </div>
        </div>
    </div>
</div>
