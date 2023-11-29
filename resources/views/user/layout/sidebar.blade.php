@php
    $userlist = App\Models\User::count();
    $deleteduserlist = App\Models\User::onlyTrashed()->count();

@endphp

<div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">


    <div class="blog-sidebar">
        <div class="sidebar-widget post-widget">
            <div class="widget-title">
                <h4>User Profile </h4>
            </div>
            <div class="post-inner">
                <div class="post">
                    <figure class="post-thumb"><a href="">
                            <img src="{{ asset($data1->avatar) }}" alt=""></a></figure>
                    <h5><a href="">{{ $data1->fullname }}</a></h5>
                    <p>{{ $data1->email }}</p>
                </div>
            </div>
        </div>


        <div class="sidebar-widget category-widget">
            <div class="widget-title">
                <h4>Menu</h4>
            </div>
            <div class="widget-content">
                <ul class="category-list ">


                    <li> <a href="{{ route('home') }}"><i class="fab fa fa-envelope "></i> Home </a></li>

                    <li><a href="{{ route('user-add') }}"><i class="fa fa-cog" aria-hidden="true"></i>
                            Add User</a></li>
                    <li><a href="{{ route('user-index') }}"><i class="fa fa-credit-card" aria-hidden="true"></i>
                            All User<span class="badge badge-info">{{ $userlist }}</span></a></li>
                    <li><a href="{{ route('user-deleted-list') }}"><i class="fa fa-list-alt" aria-hidden="true"></i></i>
                            Deleted User <span class="badge badge-danger">{{ $deleteduserlist }}</span> </a></li>
                    <li><a href="{{ route('user-profile-edit') }}"><i class="fa fa-key" aria-hidden="true"></i> Edit
                            Profile
                        </a></li>

                    <li><a href="{{ route('user-logout') }}"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i>
                            Logout </a></li>
                </ul>

            </div>
        </div>
    </div>






</div>
