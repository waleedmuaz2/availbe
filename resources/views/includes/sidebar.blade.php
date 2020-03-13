<?php $url = url()->current();?>
<div class="az-sidebar-header">
    <a href="{{route('home')}}" class="az-logo">Ava<span>il</span>bee</a>
</div>
<div class="az-sidebar-loggedin">
    <div class="az-img-user online"><img src="https://via.placeholder.com/500" alt=""></div>
    <div class="media-body">
        <h6>{{auth()->user()->first_name}}</h6>
        <span>
            @foreach(\Spatie\Permission\Models\Permission::all() as $per)
                @can($per->name)
                    {{$per->name}}
                @endcan
            @endforeach
        </span>
    </div>
</div>
<div class="az-sidebar-body">
    <ul class="nav">
        <li class="nav-label">Main Menu</li>
        <li class="nav-item">
            <a href="#!" class="nav-link with-sub"><i class="typcn typcn-clipboard"></i>Accounts Overview</a>
            <ul class="nav-sub">
                <li class="nav-sub-item"><a href="{{route('admin.service_partner')}}" class="nav-sub-link">Service Partners</a></li>
                <li class="nav-sub-item"><a href="{{route('admin.inventory_partner')}}" class="nav-sub-link">Inventory Partner</a>
                </li>
                <li class="nav-sub-item"><a href="{{route('admin.towing_partner')}}" class="nav-sub-link">Towing Partners</a></li>
                <li class="nav-sub-item"><a href="{{route('admin.collusion_partner')}}" class="nav-sub-link">Collusion Partners</a></li>
                <li class="nav-sub-item"><a href="{{route('admin.banking_partner')}}" class="nav-sub-link">Banking Partners</a></li>
                <li class="nav-sub-item"><a href="{{route('admin.insurance_partner')}}" class="nav-sub-link">Insurance Partners</a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#!" class="nav-link with-sub"><i class="icon ion-md-notifications"></i>Notification</a>
            <ul class="nav-sub">
                <li class="nav-sub-item"><a href="{{route('admin.mailbox')}}" class="nav-sub-link">Mailbox</a></li>
                <li class="nav-sub-item"><a href="{{route('admin.chat')}}" class="nav-sub-link">Chat</a>
                </li>
                <li class="nav-sub-item"><a href="{{route('admin.notice_board')}}" class="nav-sub-link">Notice Board</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#!" class="nav-link with-sub"><i class="icon ion-md-basket"></i>Service Orders</a>
            <ul class="nav-sub">
                <li class="nav-sub-item"><a href="{{route('admin.service_overview')}}" class="nav-sub-link">All Service Overview</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#!" class="nav-link with-sub"><i class="icon ion-md-card"></i>Payments</a>
            <ul class="nav-sub">
                <li class="nav-sub-item"><a href="{{route('admin.payment_overview')}}" class="nav-sub-link">Overview</a></li>
                <li class="nav-sub-item"><a href="{{route('admin.quick_payment')}}" class="nav-sub-link">Qucik Pay</a></li>
                <li class="nav-sub-item"><a href="{{route('admin.payment_history')}}" class="nav-sub-link">Payment History</a></li>
                <li class="nav-sub-item"><a href="{{route('admin.quick_payment_faq')}}" class="nav-sub-link">Quick Pay FAQ</a></li>
            </ul>
        </li>
        @if(auth()->user()->hasRole('admin'))
            <li class="nav-item">
                <a href="" class="nav-link with-sub"><i class="icon ion-ios-locate"></i>Service Management</a>
                <ul class="nav-sub">
                    <li class="nav-sub-item"><a href="{{route('admin.service-category.index')}}" class="nav-sub-link">Service Category</a></li>
                    <li class="nav-sub-item"><a href="{{route('admin.service.index')}}" class="nav-sub-link">Service</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link with-sub"><i class="icon ion-md-car"></i>Car Management</a>
                <ul class="nav-sub">
                    <li <?php if(preg_match("/car-type/i", $url)):?> class="nav-sub-item active" <?php endif;?> class="nav-sub-item">
                        <a href="{{route('admin.car-type.index')}}" class="nav-sub-link">Car Category</a>
                    </li>
                    <li <?php if(preg_match("/car-brand/i", $url)):?> class="nav-sub-item active" <?php endif;?> class="nav-sub-item">
                        <a href="{{route('admin.car-brand.index')}}" class="nav-sub-link">Car Type</a>
                    </li>

                    <li <?php if(preg_match("/car-brand/i", $url)):?> class="nav-sub-item active" <?php endif;?> class="nav-sub-item">
                        <a href="{{route('admin.car-company.index')}}" class="nav-sub-link">Car Brand</a>
                    </li>
                </ul>
            </li>
        @endif
        <li class="nav-item">
            <a href="#!" class="nav-link"><i class="typcn typcn-map"></i>Refferals</a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link"><i class="typcn typcn-tabs-outline"></i>Rewards</a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link"><i class="typcn typcn-tabs-outline"></i>Support</a>
        </li>

        <li class="nav-item">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-tabs-outline"></i>Settings</a>
            <ul class="nav-sub">
                <li class="nav-item">
                    <a href="{{route('admin.profile_setting')}}" class="nav-link">Profile</a>
                </li>
                <li class="nav-item"><a href="{{route('admin.tax.index')}}" class="nav-link">Tax</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
