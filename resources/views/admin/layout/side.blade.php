            <!-- Sidebar menu-->
            <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
            <aside class="app-sidebar toggle-sidebar">
                <div class="app-sidebar__user">
                    @php
                        $admin = Auth::guard('admin')->user();
                    @endphp 
                    <div class="user-body">
                        <img src="{{ (empty($admin->image)) ? asset('no-image.jpg') : asset('uploads/admins/'.$admin->image) }}"
                            alt="profile-user" class="rounded-circle w-25 h-25">
                    </div>
                    <div class="user-info">
                        <a href="#" class=""><span class="app-sidebar__user-name font-weight-semibold">
                                {{ $admin->firstname }}</span><br>
                            <span class="text-muted app-sidebar__user-designation text-sm">Admin</span>
                        </a>
                    </div>
                </div>
                <ul class="side-menu toggle-menu">
                    <li>
                        <a class="side-menu__item" href="{{ route('admin.dashboard') }}">
                            <i class="side-menu__icon fa fa-tachometer" aria-hidden="true"></i>
                            <span class="side-menu__label">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="side-menu__item" href="{{ route('admin.student.enquiries') }}">
                            <i class="side-menu__icon fa fa-tachometer" aria-hidden="true"></i>
                            <span class="side-menu__label">Student Enquiries</span>
                        </a>
                    </li>


                    







                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#">

                            <i class="side-menu__icon fa fa-user" aria-hidden="true"></i>
                            <span class="side-menu__label">Admin Profile</span>
                            <i class="angle fa fa-angle-right"></i>
                        </a>
                        <ul class="slide-menu">
                            <li>
                                <a class="slide-item" href="{{ route('admin-profile') }}">
                                    <span>View Admin Profile</span>
                                </a>
                                <a class="slide-item" href="{{ route('admin.logout') }}">
                                    <span>Logout</span>
                                </a>
                            </li>
                        </ul>
                    </li>



                </ul>
            </aside>

            <!-- Header End -->
