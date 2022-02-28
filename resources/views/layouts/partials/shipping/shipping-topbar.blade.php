<!-- Top Bar Start -->
<div class="topbar">  
    <!-- LOGO -->
    <div class="brand">
        <a href="{{ route('home')}}" class="logo">
            <span>                
                <img src="{{ URL::asset('assets/images/logo-sm.png')}}" alt="logo-small" class="logo-sm">
            </span>
            <span>                
                <img src="{{ URL::asset('assets/images/logo.png')}}" alt="logo-large" class="logo-lg logo-light">
                <img src="{{ URL::asset('assets/images/logo-dark.png')}}" alt="logo-large" class="logo-lg logo-dark">
            </span>
        </a>
    </div>
    <!--end logo-->  
    <!-- Navbar -->
    <nav class="navbar-custom">    
        <ul class="list-unstyled topbar-nav float-end mb-0"> 
            <li class="dropdown hide-phone">
                <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <i class="ti ti-search"></i>
                </a>                
                <div class="dropdown-menu dropdown-menu-end dropdown-lg p-0">
                    <!-- Top Search Bar -->
                    <div class="app-search-topbar">
                        <form action="#" method="get">
                            <input type="search" name="search" class="from-control top-search mb-0" placeholder="Type text...">
                            <button type="submit"><i class="ti ti-search"></i></button>
                        </form>
                    </div>
                </div>
            </li>                      

            <li class="notification-list">
                <a class="nav-link arrow-none nav-icon offcanvas-btn" href="#" data-bs-toggle="offcanvas" data-bs-target="#Appearance" role="button" aria-controls="Rightbar">
                    <i class="ti ti-settings ti-spin"></i>
                </a>
            </li>                       
    
            <li class="dropdown notification-list hideProp">
                <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <i class="ti ti-mail"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-lg pt-0">
        
                    <h6 class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                        Emails <span class="badge bg-soft-primary badge-pill">3</span>
                    </h6> 
                    <div class="notification-menu" data-simplebar>
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">2 min ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <img src="assets/images/users/user-1.jpg" alt="" class="thumb-sm rounded-circle">
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                    <small class="text-muted mb-0">Dummy text of the printing and industry.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">10 min ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">                                    
                                    <img src="{{ URL::asset('assets/images/users/user-4.jpg')}}" alt="" class="thumb-sm rounded-circle">
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">Meeting with designers</h6>
                                    <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">40 min ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <img src="assets/images/users/user-2.jpg" alt="" class="thumb-sm rounded-circle">
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">UX 3 Task complete.</h6>
                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">1 hr ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <img src="assets/images/users/user-5.jpg" alt="" class="thumb-sm rounded-circle">
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                    <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">2 hrs ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <img src="assets/images/users/user-3.jpg" alt="" class="thumb-sm rounded-circle">
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">Payment Successfull</h6>
                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                    </div>
                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                        View all <i class="fi-arrow-right"></i>
                    </a>
                </div>
            </li>

            <li class="dropdown notification-list hideProp">
                <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <i class="ti ti-bell"></i>
                    <span class="alert-badge"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-lg pt-0">
        
                    <h6 class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                        Notifications <span class="badge bg-soft-primary badge-pill">2</span>
                    </h6> 
                    <div class="notification-menu" data-simplebar>
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">2 min ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <i class="ti ti-chart-arcs"></i>
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                    <small class="text-muted mb-0">Dummy text of the printing and industry.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">10 min ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <i class="ti ti-device-computer-camera"></i>
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">Meeting with designers</h6>
                                    <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">40 min ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">                                                    
                                    <i class="ti ti-diamond"></i>
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">UX 3 Task complete.</h6>
                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">1 hr ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <i class="ti ti-drone"></i>
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                    <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">2 hrs ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <i class="ti ti-users"></i>
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">Payment Successfull</h6>
                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                    </div>
                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                        View all <i class="fi-arrow-right"></i>
                    </a>
                </div>
            </li>

            <li class="dropdown">
                <a class="nav-link dropdown-toggle nav-user" data-bs-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <img src="{{ URL::asset('assets/images/users/user-4.jpg')}}" alt="profile-user" class="rounded-circle me-0 me-md-2 thumb-sm" />
                        <div class="user-name">
                            <small class="d-none d-lg-block font-11">Admin</small>
                            <span class="d-none d-lg-block fw-semibold font-12">
                                @if(auth()->check())
                                    {{auth()->user()->name}}
                                @endif
                                <i class="mdi mdi-chevron-down"></i>
                            </span>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#"><i class="ti ti-user font-16 me-1 align-text-bottom"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="ti ti-settings font-16 me-1 align-text-bottom"></i> Settings</a>
                    <div class="dropdown-divider mb-0"></div>
                    <a class="dropdown-item" href="{{ route('logout')}}"><i class="ti ti-power font-16 me-1 align-text-bottom"></i> Logout</a>
                </div>
            </li><!--end topbar-profile-->
            <li class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle nav-link" id="mobileToggle"  onclick="toggleMenu()" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a><!-- End mobile menu toggle-->
            </li> <!--end menu item--> 
        </ul><!--end topbar-nav-->

        <div class="navbar-custom-menu hideProp">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}" aria-haspopup="true" aria-expanded="false" data-display="static">
                            <span><i class="ti ti-home menu-icon font-18">  Home</i></span>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('home') }}" id="navbarDashboards" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                            <span><i class="ti ti-dashboard menu-icon font-18">  Customers</i></span>
                        </a>
                        <ul class="dropdown-menu animate slideIn" aria-labelledby="navbarDashboards"> 
                            <li>
                                <a class="dropdown-item text-uppercase" href="{{ route('customer.index') }}">View Customers</a>
                            </li><!--end /li-->                            
                        </ul>
                    </li><!--end nav-item-->

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarApps" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span><i class="ti ti-apps menu-icon font-18">  Contacts</i></span>
                        </a>
                        <ul class="dropdown-menu animate slideIn" aria-labelledby="navbarApps"> 
                            <li class="dropdown-submenu dropend hideProp">
                                <a class="dropdown-item  dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                    Analytics
                                </a>
                                <ul class="dropdown-menu animate slideIn">
                                    <li>
                                        <a href="analytics-customers.html" class="dropdown-item ">Customers</a>
                                    </li>
                                    <li>
                                        <a href="analytics-reports.html" class="dropdown-item ">Reports</a>
                                    </li>
                                </ul>
                            </li> 
                            <li class="dropdown-submenu dropend hideProp">
                                <a class="dropdown-item  dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                    Crypto
                                </a>
                                <ul class="dropdown-menu animate slideIn">
                                    <li>
                                        <a class="dropdown-item" href="crypto-exchange.html">Exchange</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="crypto-wallet.html">Wallet</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="crypto-news.html">Crypto News</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="crypto-ico.html">ICO List</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="crypto-settings.html">Settings</a>
                                    </li><!--end /li-->
                                </ul>
                            </li> 
                            <li class="dropdown-submenu dropend hideProp">
                                <a class="dropdown-item  dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                    CRM
                                </a>
                                <ul class="dropdown-menu animate slideIn">
                                    <li>
                                        <a class="dropdown-item" href="crm-contacts.html">Contacts</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="crm-opportunities.html">Opportunities</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="crm-leads.html">Leads</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="crm-customers.html">Customers</a>
                                    </li><!--end /li--> 
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend hideProp">
                                <a class="dropdown-item  dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                    Projects
                                </a>
                                <ul class="dropdown-menu animate slideIn">
                                    <li>
                                        <a class="dropdown-item" href="projects-clients.html">Clients</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="projects-team.html">Team</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="projects-project.html">Project</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="projects-task.html">Task</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="projects-kanban-board.html">Kanban Board</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="projects-chat.html">Chat</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="projects-users.html">Users</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="projects-create.html">Project Create</a>
                                    </li><!--end /li--> 
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend hideProp">
                                <a class="dropdown-item  dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                    Ecommerce
                                </a>
                                <ul class="dropdown-menu animate slideIn">
                                    <li>
                                        <a class="dropdown-item" href="ecommerce-products.html">Products</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="ecommerce-product-list.html">Product List</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="ecommerce-product-detail.html">Product Detail</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="ecommerce-cart.html">Cart</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="ecommerce-checkout.html">Checkout</a>
                                    </li><!--end /li-->
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend hideProp">
                                <a class="dropdown-item  dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                    Helpdesk
                                </a>
                                <ul class="dropdown-menu animate slideIn">
                                    <li>
                                        <a class="dropdown-item" href="helpdesk-teckets.html">Tickets</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="helpdesk-reports.html">Reports</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="helpdesk-agents.html">Agents</a>
                                    </li><!--end /li-->
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend hideProp">
                                <a class="dropdown-item  dropdown-toggle" data-bs-toggle="dropdown" href="#" id="hospital" aria-labelledby="navbarApps">
                                    Hospital
                                </a>
                                <ul class="dropdown-menu animate slideIn">
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item  dropdown-toggle" data-bs-toggle="dropdown" href="#" id="appointments" aria-labelledby="hospital">
                                            Appointments
                                        </a>
                                        <ul class="dropdown-menu animate slideIn">
                                            <li>
                                                <a class="dropdown-item" aria-labelledby="appointments" href="hospital-doctor-shedule.html">Dr. Shedule</a>
                                            </li><!--end /li-->
                                            <li>
                                                <a class="dropdown-item" href="hospital-all-appointments.html">All Appointments</a>
                                            </li><!--end /li-->
                                        </ul>
                                    </li><!--end /li-->
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item  dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                            Doctors
                                        </a>
                                        <ul class="dropdown-menu animate slideIn">
                                            <li>
                                                <a class="dropdown-item" href="hospital-all-doctors.html">All Doctors</a>
                                            </li><!--end /li-->
                                            <li>
                                                <a class="dropdown-item" href="hospital-add-doctor.html">Add Doctor</a>
                                            </li><!--end /li-->
                                            <li>
                                                <a class="dropdown-item" href="hospital-doctor-edit.html">Doctor Edit</a>
                                            </li><!--end /li-->
                                            <li>
                                                <a class="dropdown-item" href="hospital-doctor-profile.html">Doctor Profile</a>
                                            </li><!--end /li-->
                                        </ul>
                                    </li><!--end /li-->
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item  dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                            Patients
                                        </a>
                                        <ul class="dropdown-menu animate slideIn">
                                            <li>
                                                <a class="dropdown-item" href="hospital-all-patients.html">All Patients</a>
                                            </li><!--end /li-->
                                            <li>
                                                <a class="dropdown-item" href="hospital-add-patient.html">Add Patient</a>
                                            </li><!--end /li-->
                                            <li>
                                                <a class="dropdown-item" href="hospital-patient-edit.html">Patient Edit</a>
                                            </li><!--end /li-->
                                            <li>
                                                <a class="dropdown-item" href="hospital-patient-profile.html">Patient Profile</a>
                                            </li><!--end /li-->
                                        </ul>
                                    </li><!--end /li-->
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item  dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                            Patients
                                        </a>
                                        <ul class="dropdown-menu animate slideIn">
                                            <li>
                                                <a class="dropdown-item" href="hospital-all-patients.html">All Patients</a>
                                            </li><!--end /li-->
                                            <li>
                                                <a class="dropdown-item" href="hospital-add-patient.html">Add Patient</a>
                                            </li><!--end /li-->
                                            <li>
                                                <a class="dropdown-item" href="hospital-patient-edit.html">Patient Edit</a>
                                            </li><!--end /li-->
                                            <li>
                                                <a class="dropdown-item" href="hospital-patient-profile.html">Patient Profile</a>
                                            </li><!--end /li-->
                                        </ul>
                                    </li><!--end /li-->
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item  dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                            Payments
                                        </a>
                                        <ul class="dropdown-menu animate slideIn">
                                            <li>
                                                <a class="dropdown-item" href="hospital-all-payments.html">All Payments</a>
                                            </li><!--end /li-->
                                            <li>
                                                <a class="dropdown-item" href="hospital-payment-invoice.html">Payment Invoice</a>
                                            </li><!--end /li-->
                                            <li>
                                                <a class="dropdown-item" href="hospital-cashless-payments.html">Cashless Payments</a>
                                            </li><!--end /li-->
                                        </ul>
                                    </li><!--end /li-->
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item  dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                            Staff
                                        </a>
                                        <ul class="dropdown-menu animate slideIn">
                                            <li>
                                                <a class="dropdown-item" href="hospital-all-staff.html">All Staff</a>
                                            </li><!--end /li-->
                                            <li>
                                                <a class="dropdown-item" href="hospital-add-member.html">Add Member</a>
                                            </li><!--end /li-->
                                            <li>
                                                <a class="dropdown-item" href="hospital-edit-member.html">Edit Member</a>
                                            </li><!--end /li-->
                                            <li>
                                                <a class="dropdown-item" href="hospital-member-profile.html">Member Profile</a>
                                            </li><!--end /li-->
                                            <li>
                                                <a class="dropdown-item" href="hospital-salary.html">Staff Salary</a>
                                            </li><!--end /li-->
                                        </ul>
                                    </li><!--end /li-->
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item  dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                            General
                                        </a>
                                        <ul class="dropdown-menu animate slideIn">
                                            <li>
                                                <a class="dropdown-item" href="hospital-all-rooms.html">Room Allotments</a>
                                            </li><!--end /li-->
                                            <li>
                                                <a class="dropdown-item" href="hospital-expenses.html">Expenses Report</a>
                                            </li><!--end /li-->
                                            <li>
                                                <a class="dropdown-item" href="hospital-departments.html">Departments</a>
                                            </li><!--end /li-->
                                            <li>
                                                <a class="dropdown-item" href="hospital-insurance-company.html">Insurance Co.</a>
                                            </li><!--end /li-->
                                            <li>
                                                <a class="dropdown-item" href="hospital-events.html">Events</a>
                                            </li><!--end /li-->
                                            <li>
                                                <a class="dropdown-item" href="hospital-leaves.html">Leaves</a>
                                            </li><!--end /li-->
                                            <li>
                                                <a class="dropdown-item" href="hospital-holidays.html">Holidays</a>
                                            </li><!--end /li-->
                                            <li>
                                                <a class="dropdown-item" href="hospital-attendance.html">Attendance</a>
                                            </li><!--end /li-->
                                            <li>
                                                <a class="dropdown-item" href="hospital-chat.html">Chat</a>
                                            </li><!--end /li-->
                                        </ul>
                                    </li><!--end /li-->
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend hideProp">
                                <a class="dropdown-item  dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                    Emails
                                </a>
                                <ul class="dropdown-menu animate slideIn">
                                    <li>
                                        <a href="apps-email-inbox.html" class="dropdown-item">Inbox</a>
                                    </li>
                                    <li>
                                        <a href="apps-email-read.html" class="dropdown-item">Read Email</a>
                                    </li>
                                </ul>
                            </li>                       
                            <li>
                                <a class="dropdown-item text-uppercase" href="{{ route('customer.index') }}">View Contacts</a>
                            </li><!--end /li-->                         
                        </ul><!--end submenu-->
                    </li><!--end nav-item--> 
            
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarUI_Kit" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span><i class="ti ti-planet menu-icon font-18">  Opportunities</i></span>
                        </a>
                        <ul class="dropdown-menu animate slideIn" aria-labelledby="navbarUI_Kit">    
                            <li>
                                <a class="dropdown-item text-uppercase" href="{{ route('customer.index') }}">View Opportunities</a>
                            </li><!--end /li-->                                    
                            <li class="dropdown-submenu dropend hideProp">
                                <a class="dropdown-item  dropdown-toggle" data-bs-toggle="dropdown" href="#" >
                                    UI Elements
                                </a>
                                <ul class="dropdown-menu animate slideIn">
                                    <li>
                                        <a class="dropdown-item" href="ui-alerts.html">Alerts</a>
                                    </li><!--end /li--> 
                                    <li>
                                        <a class="dropdown-item" href="ui-avatar.html">Avatar</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="ui-buttons.html">Buttons</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="ui-badges.html">Badges</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="ui-cards.html">Cards</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="ui-carousels.html">Carousels</a>
                                    </li><!--end /li-->                                
                                    <li>
                                        <a class="dropdown-item" href="ui-dropdowns.html">Dropdowns</a>
                                    </li><!--end /li-->                                   
                                    <li>
                                        <a class="dropdown-item" href="ui-grids.html">Grids</a>
                                    </li><!--end /li-->                                
                                    <li>
                                        <a class="dropdown-item" href="ui-images.html">Images</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="ui-list.html">List</a>
                                    </li><!--end /li-->                                   
                                    <li>
                                        <a class="dropdown-item" href="ui-modals.html">Modals</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="ui-navs.html">Navs</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="ui-navbar.html">Navbar</a>
                                    </li><!--end /li--> 
                                    <li>
                                        <a class="dropdown-item" href="ui-paginations.html">Paginations</a>
                                    </li><!--end /li-->   
                                    <li>
                                        <a class="dropdown-item" href="ui-popover-tooltips.html">Popover & Tooltips</a>
                                    </li><!--end /li-->                                
                                    <li>
                                        <a class="dropdown-item" href="ui-progress.html">Progress</a>
                                    </li><!--end /li-->                                
                                    <li>
                                        <a class="dropdown-item" href="ui-spinners.html">Spinners</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="ui-tabs-accordions.html">Tabs & Accordions</a>
                                    </li><!--end /li-->                               
                                    <li>
                                        <a class="dropdown-item" href="ui-typography.html">Typography</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="ui-videos.html">Videos</a>
                                    </li><!--end /li-->                                                     
                                </ul>                                      
                            </li><!--end nav-item-->
                            <li class="dropdown-submenu dropend hideProp">
                                <a class="dropdown-item  dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                    Advanced UI
                                </a>
                                <ul class="dropdown-menu animate slideIn">
                                    <li>
                                        <a class="dropdown-item" href="advanced-animation.html">Animation</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="advanced-clipboard.html">Clip Board</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="advanced-dragula.html">Dragula</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="advanced-files.html">File Manager</a>
                                    </li><!--end /li--> 
                                    <li>
                                        <a class="dropdown-item" href="advanced-highlight.html">Highlight</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="advanced-rangeslider.html">Range Slider</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="advanced-ratings.html">Ratings</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="advanced-ribbons.html">Ribbons</a>
                                    </li><!--end /li-->                                  
                                    <li>
                                        <a class="dropdown-item" href="advanced-sweetalerts.html">Sweet Alerts</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="advanced-toasts.html">Toasts</a>
                                    </li><!--end /li-->
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend hideProp">
                                <a class="dropdown-item  dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                    Forms
                                </a>
                                <ul class="dropdown-menu animate slideIn">
                                    <li>
                                        <a class="dropdown-item" href="forms-elements.html">Basic Elements</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="forms-advanced.html">Advance Elements</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="forms-validation.html">Validation</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="forms-wizard.html">Wizard</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="forms-editors.html">Editors</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="forms-uploads.html">File Upload</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="forms-img-crop.html">Image Crop</a>
                                    </li><!--end /li--> 
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend hideProp">
                                <a class="dropdown-item  dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                    Charts
                                </a>
                                <ul class="dropdown-menu animate slideIn">
                                    <li>
                                        <a class="dropdown-item" href="charts-apex.html">Apex</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="charts-justgage.html">JustGage</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="charts-chartjs.html">Chartjs</a>
                                    </li><!--end /li--> 
                                    <li>
                                        <a class="dropdown-item" href="charts-toast-ui.html">Toast</a>
                                    </li><!--end /li-->
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend hideProp">
                                <a class="dropdown-item  dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                    Tables
                                </a>
                                <ul class="dropdown-menu animate slideIn">
                                    <li>
                                        <a class="dropdown-item" href="tables-basic.html">Basic</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="tables-datatable.html">Datatables</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="tables-editable.html">Editable</a>
                                    </li><!--end /li-->
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend hideProp">
                                <a class="dropdown-item  dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                    Icons
                                </a>
                                <ul class="dropdown-menu animate slideIn">
                                    <li>
                                        <a class="dropdown-item" href="icons-materialdesign.html">Material Design</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="icons-fontawesome.html">Font awesome</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="icons-tabler.html">Tabler</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="icons-feather.html">Feather</a>
                                    </li><!--end /li-->
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend hideProp">
                                <a class="dropdown-item  dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                    Maps
                                </a>
                                <ul class="dropdown-menu animate slideIn">
                                    <li>
                                        <a class="dropdown-item" href="maps-google.html">Google Maps</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="maps-leaflet.html">Leaflet Maps</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="maps-vector.html">Vector Maps</a>
                                    </li><!--end /li-->  
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend hideProp">
                                <a class="dropdown-item  dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                    Email Templates
                                </a>
                                <ul class="dropdown-menu animate slideIn">
                                    <li>
                                        <a class="dropdown-item" href="email-templates-alert.html">Alert Email</a>
                                    </li><!--end /li-->
                                    <li>
                                        <a class="dropdown-item" href="email-templates-basic.html">Basic Action Email</a>
                                    </li><!--end /li-->                                    
                                    <li>
                                        <a class="dropdown-item" href="email-templates-billing.html">Billing Email</a>
                                    </li><!--end /li-->
                                </ul>
                            </li><!--end nav-item-->                     
                        </ul><!--end submenu-->
                    </li><!--end nav-item-->

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarPages" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span><i class="ti ti-file-diff menu-icon font-18">  Leads</i></span>
                        </a>
                        <ul class="dropdown-menu  animate slideIn" aria-labelledby="navbarPages">
                            <li>
                                <a class="dropdown-item text-uppercase" href="{{ route('customer.index') }}">View Leads</a>
                            </li><!--end /li-->                       
                        </ul>
                    </li><!--end nav-item-->

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbar_auth" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span><i class="ti ti-shield-lock menu-icon font-18">  Quotes</i></span>
                        </a>
                        <ul class="dropdown-menu  animate slideIn" aria-labelledby="navbar_auth">
                            <li>
                                <a class="dropdown-item text-uppercase" href="{{ route('customer.index') }}">View Quotes</a>
                            </li><!--end /li-->
                        </ul><!--end submenu-->
                    </li><!--end nav-item-->  
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbar_auth" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span><i class="ti ti-shield-lock menu-icon font-18">  Calendar</i></span>
                        </a>
                        <ul class="dropdown-menu  animate slideIn" aria-labelledby="navbar_auth">
                            <li>
                                <a class="dropdown-item text-uppercase" href="{{ route('customer.index') }}">View Calendar</a>
                            </li><!--end /li--> 
                        </ul><!--end submenu-->
                    </li><!--end nav-item--> 
                </ul><!-- End navigation menu -->
            </div> <!-- end navigation -->
        </div>
        <!-- Navbar -->
    </nav>
    <!-- end navbar-->
</div>
<!-- Top Bar End -->