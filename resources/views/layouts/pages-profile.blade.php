<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- <meta charset="utf-8" />
        <title> | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        App favicon
        <link rel="shortcut icon" href="assets/images/favicon.ico"> -->

        <meta charset="utf-8" />
                <title>Metrica - Admin & Dashboard Template</title>
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
                <meta content="" name="author" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />

                <!-- App favicon -->
                <link rel="shortcut icon" href="assets/images/favicon.ico">

       

        <link href="assets/plugins/tobii/tobii.min.css" rel="stylesheet" type="text/css" />

         <!-- App css -->
         <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
         <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
         <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body id="body">
        <!-- leftbar-tab-menu -->
        <div class="leftbar-tab-menu">
            <div class="main-icon-menu">
                <a href="index.html" class="logo logo-metrica d-block text-center">
                    <span>
                        <img src="assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                    </span>
                </a>
                <div class="main-icon-menu-body">
                    <div class="position-reletive h-100" data-simplebar style="overflow-x: hidden;">
                        <ul class="nav nav-tabs" role="tablist" id="tab-menu">
                            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard" data-bs-trigger="hover">
                                <a href="#MetricaDashboard" id="dashboard-tab" class="nav-link">
                                    <i class="ti ti-smart-home menu-icon"></i>
                                </a><!--end nav-link-->
                            </li><!--end nav-item-->
                            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Apps" data-bs-trigger="hover">
                                <a href="#MetricaApps" id="apps-tab" class="nav-link">
                                    <i class="ti ti-apps menu-icon"></i>
                                </a><!--end nav-link-->
                            </li><!--end nav-item-->

                            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Uikit" data-bs-trigger="hover">
                                <a href="#MetricaUikit" id="uikit-tab" class="nav-link">
                                    <i class="ti ti-planet menu-icon"></i>
                                </a><!--end nav-link-->
                            </li><!--end nav-item-->

                            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Pages" data-bs-trigger="hover">
                                <a href="#MetricaPages" id="pages-tab" class="nav-link">
                                    <i class="ti ti-files menu-icon"></i>
                                </a><!--end nav-link-->
                            </li><!--end nav-item-->

                            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Authentication" data-bs-trigger="hover">
                                <a href="#MetricaAuthentication" id="authentication-tab" class="nav-link">
                                    <i class="ti ti-shield-lock menu-icon"></i>
                                </a><!--end nav-link-->
                            </li><!--end nav-item-->
                        </ul><!--end nav-->
                    </div><!--end /div-->
                </div><!--end main-icon-menu-body-->
                <div class="pro-metrica-end">
                    <a href="" class="profile">
                        <img src="assets/images/users/user-4.jpg" alt="profile-user" class="rounded-circle thumb-sm">
                    </a>
                </div><!--end pro-metrica-end-->
            </div>
            <!--end main-icon-menu-->

            <div class="main-menu-inner">
                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                        <span>
                            <img src="assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">
                            <img src="assets/images/logo.png" alt="logo-large" class="logo-lg logo-light">
                        </span>
                    </a><!--end logo-->
                </div><!--end topbar-left-->
                <!--end logo-->
                <div class="menu-body navbar-vertical tab-content" data-simplebar>
                    <div id="MetricaDashboard" class="main-icon-menu-pane tab-pane" role="tabpanel"
                        aria-labelledby="dasboard-tab">
                        <div class="title-box">
                            <h6 class="menu-title">Dashboard</h6>
                        </div>

                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Analytics</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="crypto-index.html">Crypto</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="crm-index.html">CRM</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="projects-index.html">Project</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="ecommerce-index.html">Ecommerce</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="helpdesk-index.html">Helpdesk</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="hospital-index.html">Hospital</a>
                            </li><!--end nav-item-->
                        </ul><!--end nav-->
                    </div><!-- end Dashboards -->

                    <div id="MetricaApps" class="main-icon-menu-pane tab-pane" role="tabpanel"
                        aria-labelledby="apps-tab">
                        <div class="title-box">
                            <h6 class="menu-title">Apps</h6>
                        </div>

                        <div class="collapse navbar-collapse" id="sidebarCollapse">
                            <!-- Navigation -->
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarAnalytics" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarAnalytics">
                                        Analytics
                                    </a>
                                    <div class="collapse " id="sidebarAnalytics">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a href="analytics-customers.html" class="nav-link ">Customers</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a href="analytics-reports.html" class="nav-link ">Reports</a>
                                            </li><!--end nav-item-->
                                        </ul><!--end nav-->
                                    </div><!--end sidebarAnalytics-->
                                </li><!--end nav-item-->

                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarCrypto" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarCrypto">
                                        Crypto
                                    </a>
                                    <div class="collapse " id="sidebarCrypto">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="crypto-exchange.html">Exchange</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="crypto-wallet.html">Wallet</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="crypto-news.html">Crypto News</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="crypto-ico.html">ICO List</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="crypto-settings.html">Settings</a>
                                            </li><!--end nav-item-->
                                        </ul><!--end nav-->
                                    </div><!--end sidebarCrypto-->
                                </li><!--end nav-item-->

                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarCRM" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarCRM">
                                        CRM
                                    </a>
                                    <div class="collapse " id="sidebarCRM">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="crm-contacts.html">Contacts</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="crm-opportunities.html">Opportunities</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="crm-leads.html">Leads</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="crm-customers.html">Customers</a>
                                            </li><!--end nav-item--> 
                                        </ul><!--end nav-->
                                    </div><!--end sidebarCRM-->
                                </li><!--end nav-item-->

                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarProjects" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarProjects">
                                        Projects
                                    </a>
                                    <div class="collapse " id="sidebarProjects">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="projects-clients.html">Clients</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="projects-team.html">Team</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="projects-project.html">Project</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="projects-task.html">Task</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="projects-kanban-board.html">Kanban Board</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="projects-chat.html">Chat</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="projects-users.html">Users</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="projects-create.html">Project Create</a>
                                            </li><!--end nav-item--> 
                                        </ul><!--end nav-->
                                    </div><!--end sidebarProjects-->
                                </li><!--end nav-item-->

                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarEcommerce" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarEcommerce">
                                        Ecommerce
                                    </a>
                                    <div class="collapse " id="sidebarEcommerce">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="ecommerce-products.html">Products</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="ecommerce-product-list.html">Product List</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="ecommerce-product-detail.html">Product Detail</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="ecommerce-cart.html">Cart</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="ecommerce-checkout.html">Checkout</a>
                                            </li><!--end nav-item-->
                                        </ul><!--end nav-->
                                    </div><!--end sidebarEcommerce-->
                                </li><!--end nav-item-->

                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarHelpdesk" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarHelpdesk">
                                        Helpdesk
                                    </a>
                                    <div class="collapse " id="sidebarHelpdesk">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="helpdesk-teckets.html">Tickets</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="helpdesk-reports.html">Reports</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="helpdesk-agents.html">Agents</a>
                                            </li><!--end nav-item-->
                                        </ul><!--end nav-->
                                    </div><!--end sidebarHelpdesk-->
                                </li><!--end nav-item-->

                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarHospital" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarHospital">
                                        Hospital
                                    </a>
                                    <div class="collapse " id="sidebarHospital">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a href="#sidebarAppointments " class="nav-link" data-bs-toggle="collapse"
                                                    role="button" aria-expanded="false" aria-controls="sidebarAppointments">
                                                    Appointments 
                                                </a>
                                                <div class="collapse " id="sidebarAppointments">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-doctor-shedule.html">Dr. Shedule</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-all-appointments.html">All Appointments</a>
                                                        </li><!--end nav-item-->
                                                    </ul><!--end nav-->
                                                </div><!--end sidebarAppointments-->
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a href="#sidebarDoctors" class="nav-link" data-bs-toggle="collapse"
                                                    role="button" aria-expanded="false" aria-controls="sidebarDoctors">
                                                    Doctors
                                                </a>
                                                <div class="collapse" id="sidebarDoctors">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-all-doctors.html">All Doctors</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-add-doctor.html">Add Doctor</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-doctor-edit.html">Doctor Edit</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-doctor-profile.html">Doctor Profile</a>
                                                        </li><!--end nav-item-->
                                                    </ul><!--end nav-->
                                                </div><!--end sidebarDoctors-->
                                            </li><!--end nav-item-->

                                            <li class="nav-item">
                                                <a href="#sidebarPatients" class="nav-link" data-bs-toggle="collapse"
                                                    role="button" aria-expanded="false" aria-controls="sidebarPatients">
                                                    Patients
                                                </a>
                                                <div class="collapse" id="sidebarPatients">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-all-patients.html">All Patients</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-add-patient.html">Add Patient</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-patient-edit.html">Patient Edit</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-patient-profile.html">Patient Profile</a>
                                                        </li><!--end nav-item-->
                                                    </ul><!--end nav-->
                                                </div><!--end sidebarPatients-->
                                            </li><!--end nav-item-->

                                            <li class="nav-item">
                                                <a href="#sidebarPayments" class="nav-link" data-bs-toggle="collapse"
                                                    role="button" aria-expanded="false" aria-controls="sidebarPayments">
                                                    Payments
                                                </a>
                                                <div class="collapse" id="sidebarPayments">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-all-payments.html">All Payments</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-payment-invoice.html">Payment Invoice</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-cashless-payments.html">Cashless Payments</a>
                                                        </li><!--end nav-item-->
                                                    </ul><!--end nav-->
                                                </div><!--end sidebarPayments-->
                                            </li><!--end nav-item-->

                                            <li class="nav-item">
                                                <a href="#sidebarStaff" class="nav-link" data-bs-toggle="collapse"
                                                    role="button" aria-expanded="false" aria-controls="sidebarStaff">
                                                    Staff
                                                </a>
                                                <div class="collapse" id="sidebarStaff">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-all-staff.html">All Staff</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-add-member.html">Add Member</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-edit-member.html">Edit Member</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-member-profile.html">Member Profile</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-salary.html">Staff Salary</a>
                                                        </li><!--end nav-item-->
                                                    </ul><!--end nav-->
                                                </div><!--end sidebarStaff-->
                                            </li><!--end nav-item-->

                                            <li class="nav-item">
                                                <a href="#sidebarGeneral" class="nav-link" data-bs-toggle="collapse"
                                                    role="button" aria-expanded="false" aria-controls="sidebarGeneral">
                                                    General
                                                </a>
                                                <div class="collapse" id="sidebarGeneral">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-all-rooms.html">Room Allotments</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-expenses.html">Expenses Report</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-departments.html">Departments</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-insurance-company.html">Insurance Co.</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-events.html">Events</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-leaves.html">Leaves</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-holidays.html">Holidays</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-attendance.html">Attendance</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-chat.html">Chat</a>
                                                        </li><!--end nav-item-->
                                                    </ul><!--end nav-->
                                                </div><!--end sidebarGeneral-->
                                            </li><!--end nav-item-->
                                        </ul><!--end nav-->
                                    </div><!--end sidebarHospital-->
                                </li><!--end nav-item-->

                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarEmail" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarEmail">
                                        Email
                                    </a>
                                    <div class="collapse " id="sidebarEmail">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="apps-email-inbox.html">Inbox</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="apps-email-read.html">Read Email</a>
                                            </li><!--end nav-item--> 
                                        </ul><!--end nav-->
                                    </div><!--end sidebarEmail-->
                                </li><!--end nav-item-->

                                <li class="nav-item">
                                    <a class="nav-link" href="apps-chat.html">Chat</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="apps-contact-list.html">Contact List</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="apps-calendar.html">Calendar</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="apps-invoice.html">Invoice</a>
                                </li><!--end nav-item-->
                            </ul><!--end navbar-nav--->
                        </div><!--end sidebarCollapse-->
                    </div><!-- end Crypto -->

                    <div id="MetricaUikit" class="main-icon-menu-pane  tab-pane" role="tabpanel"
                        aria-labelledby="uikit-tab">
                        <div class="title-box">
                            <h6 class="menu-title">UI Kit</h6>
                        </div>
                        <div class="collapse navbar-collapse" id="sidebarCollapse_2">
                            <!-- Navigation -->
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarElements" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarElements">
                                    UI Elements
                                    </a>
                                    <div class="collapse " id="sidebarElements">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-alerts.html">Alerts</a>
                                            </li><!--end nav-item--> 
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-avatar.html">Avatar</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-buttons.html">Buttons</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-badges.html">Badges</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-cards.html">Cards</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-carousels.html">Carousels</a>
                                            </li><!--end nav-item-->                                
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-dropdowns.html">Dropdowns</a>
                                            </li><!--end nav-item-->                                   
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-grids.html">Grids</a>
                                            </li><!--end nav-item-->                                
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-images.html">Images</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-list.html">List</a>
                                            </li><!--end nav-item-->                                   
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-modals.html">Modals</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-navs.html">Navs</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-navbar.html">Navbar</a>
                                            </li><!--end nav-item--> 
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-paginations.html">Paginations</a>
                                            </li><!--end nav-item-->   
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-popover-tooltips.html">Popover & Tooltips</a>
                                            </li><!--end nav-item-->                                
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-progress.html">Progress</a>
                                            </li><!--end nav-item-->                                
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-spinners.html">Spinners</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-tabs-accordions.html">Tabs & Accordions</a>
                                            </li><!--end nav-item-->                               
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-typography.html">Typography</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-videos.html">Videos</a>
                                            </li><!--end nav-item--> 
                                        </ul><!--end nav-->
                                    </div><!--end sidebarElements-->
                                </li><!--end nav-item-->

                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarAdvancedUI" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarAdvancedUI">
                                        Advanced UI
                                    </a>
                                    <div class="collapse " id="sidebarAdvancedUI">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="advanced-animation.html">Animation</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="advanced-clipboard.html">Clip Board</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="advanced-dragula.html">Dragula</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="advanced-files.html">File Manager</a>
                                            </li><!--end nav-item--> 
                                            <li class="nav-item">
                                                <a class="nav-link" href="advanced-highlight.html">Highlight</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="advanced-rangeslider.html">Range Slider</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="advanced-ratings.html">Ratings</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="advanced-ribbons.html">Ribbons</a>
                                            </li><!--end nav-item-->                                  
                                            <li class="nav-item">
                                                <a class="nav-link" href="advanced-sweetalerts.html">Sweet Alerts</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="advanced-toasts.html">Toasts</a>
                                            </li><!--end nav-item-->
                                        </ul><!--end nav-->
                                    </div><!--end sidebarAdvancedUI-->
                                </li><!--end nav-item-->

                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarForms" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarForms">
                                        Forms
                                    </a>
                                    <div class="collapse " id="sidebarForms">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="forms-elements.html">Basic Elements</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="forms-advanced.html">Advance Elements</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="forms-validation.html">Validation</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="forms-wizard.html">Wizard</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="forms-editors.html">Editors</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="forms-uploads.html">File Upload</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="forms-img-crop.html">Image Crop</a>
                                            </li><!--end nav-item-->
                                        </ul><!--end nav-->
                                    </div><!--end sidebarForms-->
                                </li><!--end nav-item-->

                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarCharts" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarCharts">
                                    Charts
                                    </a>
                                    <div class="collapse " id="sidebarCharts">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="charts-apex.html">Apex</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="charts-justgage.html">JustGage</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="charts-chartjs.html">Chartjs</a>
                                            </li><!--end nav-item--> 
                                            <li class="nav-item">
                                                <a class="nav-link" href="charts-toast-ui.html">Toast</a>
                                            </li><!--end nav-item--> 
                                        </ul><!--end nav-->
                                    </div><!--end sidebarCharts-->
                                </li><!--end nav-item-->

                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarTables" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarTables">
                                        Tables
                                    </a>
                                    <div class="collapse " id="sidebarTables">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="tables-basic.html">Basic</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="tables-datatable.html">Datatables</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="tables-editable.html">Editable</a>
                                            </li><!--end nav-item-->
                                        </ul><!--end nav-->
                                    </div><!--end sidebarTables-->
                                </li><!--end nav-item-->

                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarIcons" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarIcons">
                                    Icons
                                    </a>
                                    <div class="collapse " id="sidebarIcons">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="icons-materialdesign.html">Material Design</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="icons-fontawesome.html">Font awesome</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="icons-tabler.html">Tabler</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="icons-feather.html">Feather</a>
                                            </li><!--end nav-item-->
                                        </ul><!--end nav-->
                                    </div><!--end sidebarIcons-->
                                </li><!--end nav-item-->

                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarMaps" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarMaps">
                                        Maps
                                    </a>
                                    <div class="collapse " id="sidebarMaps">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="maps-google.html">Google Maps</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="maps-leaflet.html">Leaflet Maps</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="maps-vector.html">Vector Maps</a>
                                            </li><!--end nav-item--> 
                                        </ul><!--end nav-->
                                    </div><!--end sidebarMaps-->
                                </li><!--end nav-item-->

                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarEmailTemplates" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarEmailTemplates">
                                        Email Templates
                                    </a>
                                    <div class="collapse " id="sidebarEmailTemplates">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="email-templates-basic.html">Basic Action Email</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="email-templates-alert.html">Alert Email</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="email-templates-billing.html">Billing Email</a>
                                            </li><!--end nav-item-->
                                        </ul><!--end nav-->
                                    </div><!--end sidebarEmailTemplates-->
                                </li><!--end nav-item-->
                            </ul><!--end navbar-nav--->
                        </div><!--end sidebarCollapse_2-->
                    </div><!-- end Others -->

                    <div id="MetricaPages" class="main-icon-menu-pane tab-pane" role="tabpanel" aria-labelledby="pages-tab">
                        <div class="title-box">
                            <h6 class="menu-title">Pages</h6>
                        </div>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="pages-profile.html">Profile</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="pages-tour.html">Tour</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="pages-timeline.html">Timeline</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="pages-treeview.html">Treeview</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="pages-starter.html">Starter Page</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="pages-pricing.html">Pricing</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="pages-blogs.html">Blogs</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="pages-faq.html">FAQs</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="pages-gallery.html">Gallery</a>
                            </li><!--end nav-item-->
                        </ul><!--end nav-->
                    </div><!-- end Pages -->

                    <div id="MetricaAuthentication" class="main-icon-menu-pane tab-pane" role="tabpanel"
                        aria-labelledby="authentication-tab">
                        <div class="title-box">
                            <h6 class="menu-title">Authentication</h6>
                        </div>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="auth-login.html">Log in</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="auth-login-alt.html">Log in alt</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="auth-register.html">Register</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="auth-register-alt.html">Register-alt</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="auth-recover-pw.html">Re-Password</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="auth-recover-pw-alt.html">Re-Password-alt</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="auth-lock-screen.html">Lock Screen</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="auth-lock-screen-alt.html">Lock Screen-alt</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="auth-404.html">Error 404</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="auth-404-alt.html">Error 404-alt</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="auth-500.html">Error 500</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="auth-500-alt.html">Error 500-alt</a>
                            </li><!--end nav-item-->
                        </ul><!--end nav-->
                    </div><!-- end Authentication-->
                </div>
                <!--end menu-body-->
            </div><!-- end main-menu-inner-->
        </div>
        <!-- end leftbar-tab-menu-->

        <!-- Top Bar Start -->
        <!-- Top Bar Start -->
        <div class="topbar">            
            <!-- Navbar -->
            <nav class="navbar-custom" id="navbar-custom">    
                <ul class="list-unstyled topbar-nav float-end mb-0">
                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <img src="assets/images/flags/us_flag.jpg" alt="" class="thumb-xxs rounded-circle">
                    </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><img src="assets/images/flags/us_flag.jpg" alt="" height="15" class="me-2">English</a>
                            <a class="dropdown-item" href="#"><img src="assets/images/flags/spain_flag.jpg" alt="" height="15" class="me-2">Spanish</a>
                            <a class="dropdown-item" href="#"><img src="assets/images/flags/germany_flag.jpg" alt="" height="15" class="me-2">German</a>
                            <a class="dropdown-item" href="#"><img src="assets/images/flags/french_flag.jpg" alt="" height="15" class="me-2">French</a>
                        </div>
                    </li><!--end topbar-language-->
            
                    <li class="dropdown notification-list">
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
                                            <img src="assets/images/users/user-4.jpg" alt="" class="thumb-sm rounded-circle">
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

                    <li class="dropdown notification-list">
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
                                <img src="assets/images/users/user-4.jpg" alt="profile-user" class="rounded-circle me-2 thumb-sm" />
                                <div>
                                    <small class="d-none d-md-block font-11">Admin</small>
                                    <span class="d-none d-md-block fw-semibold font-12">Maria Gibson <i
                                            class="mdi mdi-chevron-down"></i></span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#"><i class="ti ti-user font-16 me-1 align-text-bottom"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i class="ti ti-settings font-16 me-1 align-text-bottom"></i> Settings</a>
                            <div class="dropdown-divider mb-0"></div>
                            <a class="dropdown-item" href="#"><i class="ti ti-power font-16 me-1 align-text-bottom"></i> Logout</a>
                        </div>
                    </li><!--end topbar-profile-->
                    <li class="notification-list">
                        <a class="nav-link arrow-none nav-icon offcanvas-btn" href="#" data-bs-toggle="offcanvas" data-bs-target="#Appearance" role="button" aria-controls="Rightbar">
                            <i class="ti ti-settings ti-spin"></i>
                        </a>
                    </li>   
                </ul><!--end topbar-nav-->

                <ul class="list-unstyled topbar-nav mb-0">                        
                    <li>
                        <button class="nav-link button-menu-mobile nav-icon" id="togglemenu">
                            <i class="ti ti-menu-2"></i>
                        </button>
                    </li> 
                    <li class="hide-phone app-search">
                        <form role="search" action="#" method="get">
                            <input type="search" name="search" class="form-control top-search mb-0" placeholder="Type text...">
                            <button type="submit"><i class="ti ti-search"></i></button>
                        </form>
                    </li>                       
                </ul>
            </nav>
            <!-- end navbar-->
        </div>
        <!-- Top Bar End -->
        <!-- Top Bar End -->

    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content-tab">

            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="float-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Metrica</a></li>
                                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                    <li class="breadcrumb-item active">Profile</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Profile</h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="met-profile">
                                    <div class="row">
                                        <div class="col-lg-4 align-self-center mb-3 mb-lg-0">
                                            <div class="met-profile-main">
                                                <div class="met-profile-main-pic">
                                                    <img src="assets/images/users/user-4.jpg" alt="" height="110" class="rounded-circle">
                                                    <span class="met-profile_main-pic-change">
                                                        <i class="fas fa-camera"></i>
                                                    </span>
                                                </div>
                                                <div class="met-profile_user-detail">
                                                    <h5 class="met-user-name">Rosa Dodson</h5>                                                        
                                                    <p class="mb-0 met-user-name-post">UI/UX Designer, India</p>                                                        
                                                </div>
                                            </div>                                                
                                        </div><!--end col-->
                                        
                                        <div class="col-lg-4 ms-auto align-self-center">
                                            <ul class="list-unstyled personal-detail mb-0">
                                                <li class=""><i class="las la-phone mr-2 text-secondary font-22 align-middle"></i> <b> phone </b> : +91 23456 78910</li>
                                                <li class="mt-2"><i class="las la-envelope text-secondary font-22 align-middle mr-2"></i> <b> Email </b> : mannat.theme@gmail.com</li>
                                                <li class="mt-2"><i class="las la-globe text-secondary font-22 align-middle mr-2"></i> <b> Website </b> : 
                                                    <a href="https://mannatthemes.com/" class="font-14 text-primary">https://mannatthemes.com/</a> 
                                                </li>                                                   
                                            </ul>
                                           
                                        </div><!--end col-->
                                        <div class="col-lg-4 align-self-center">
                                            <div class="row">
                                                <div class="col-auto text-end border-end">
                                                    <button type="button" class="btn btn-soft-primary btn-icon-circle btn-icon-circle-sm mb-2">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </button>
                                                    <p class="mb-0 fw-semibold">Facebook</p>
                                                    <h4 class="m-0 fw-bold">25k <span class="text-muted font-12 fw-normal">Followers</span></h4>
                                                </div><!--end col-->
                                                <div class="col-auto">
                                                    <button type="button" class="btn btn-soft-info btn-icon-circle btn-icon-circle-sm mb-2">
                                                        <i class="fab fa-twitter"></i>
                                                    </button>
                                                    <p class="mb-0 fw-semibold">Twitter</p>
                                                    <h4 class="m-0 fw-bold">58k <span class="text-muted font-12 fw-normal">Followers</span></h4>
                                                </div><!--end col-->
                                            </div><!--end row-->                                               
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end f_profile-->                                                                                
                            </div><!--end card-body-->  
                            <div class="card-body p-0">    
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#Post" role="tab" aria-selected="true">Post</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Gallery" role="tab" aria-selected="false">Gallery</a>
                                    </li>                                                
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Settings" role="tab" aria-selected="false">Settings</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane p-3 active" id="Post" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-9">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="card">                                                        
                                                            <div class="card-body  report-card">
                                                                <div class="row d-flex justify-content-center">
                                                                    <div class="col">
                                                                        <p class="text-dark mb-1 fw-semibold">Views</p>
                                                                        <h3 class="my-2 font-24 fw-bold">24k</h3>
                                                                        <p class="mb-0 text-truncate text-muted"><i class="ti ti-bell text-warning font-18"></i>
                                                                            <span class="text-dark fw-semibold">1500</span> New subscribers this week
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-auto align-self-center">
                                                                        <div class="d-flex justify-content-center align-items-center thumb-xl bg-light-alt rounded-circle mx-auto">
                                                                            <i class="ti ti-eye font-30 align-self-center text-muted"></i>
                                                                        </div>                                                                    
                                                                    </div>
                                                                </div>
                                                            </div><!--end card-body-->          
                                                        </div> <!--end card-->    
                                                    </div><!--end col-->
                                                    <div class="col-lg-6">
                                                        <div class="card">                                                        
                                                            <div class="card-body  report-card">
                                                                <div class="row d-flex justify-content-center">
                                                                    <div class="col">
                                                                        <p class="text-dark mb-1 fw-semibold">Comments</p>
                                                                        <h3 class="my-2 font-24 fw-bold">24k</h3>
                                                                        <p class="mb-0 text-truncate text-muted"><i class="ti ti-thumb-up text-success font-18"></i>
                                                                            <span class="text-dark fw-semibold">854</span> New Like this week
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-auto align-self-center">
                                                                        <div class="d-flex justify-content-center align-items-center thumb-xl bg-light-alt rounded-circle mx-auto">
                                                                            <i class="ti ti-brand-hipchat font-30 align-self-center text-muted"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!--end card-body-->          
                                                        </div> <!--end card-->    
                                                    </div><!--end col-->
                                                </div><!--end row--> 
                                                <div class="card">
                                                    <div class="card-body">                                                    
                                                        <img src="assets/images/small/1.jpg" alt="" class="img-fluid">
                                                        <div class="post-title mt-4">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <span class="badge badge-soft-primary">Natural</span>
                                                                </div><!--end col-->
                                                                <div class="col-auto">
                                                                    <span class="text-muted"><i class="far fa-calendar me-1"></i>02 July 2020</span>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                           
                                                            <h5 href="#" class="font-20 fw-bold d-block mt-3 mb-4">There is nothing more beautiful than nature.</h5>
                                                            <span class="font-15 bg-light py-2 px-3 rounded">Taking pictures is savouring life intensely.</span>
                                                            <p class="font-15 mt-4">It is a long established fact that a reader will be distracted by the readable content of 
                                                                a page when looking at its layout. The point of using Lorem Ipsum is that it has a 
                                                                more-or-less normal distribution of letters, as opposed to using 
                                                                'Content here, content here', making it look like readable English. 
                                                                Many desktop publishing packages and web page editors now use Lorem Ipsum 
                                                                as their default model text, and a search for 'lorem ipsum' will uncover many
                                                                 web sites still in their infancy. 
    
                                                            </p>
                                                            <blockquote class="blockquote border-start ps-4">
                                                                <p class="font-18"><i>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante."</i></p>
                                                                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                                            </blockquote>
                                                            <p class="font-15">Taking pictures is savouring life intensely, every hundredth of a second – Marc Riboud.
                                                                Joy in looking and comprehending is nature’s most beautiful gift.</p>
                                                            <p class="font-15 mb-0">It is a long established fact that a reader will be distracted by the readable content of 
                                                                a page when looking at its layout. The point of using Lorem Ipsum is that it has a 
                                                                more-or-less normal distribution of letters, as opposed to using 
                                                                'Content here, content here', making it look like readable English. 
                                                                Many desktop publishing packages and web page editors now use Lorem Ipsum 
                                                                as their default model text, and a search for 'lorem ipsum' will uncover many
                                                                 web sites still in their infancy. 
    
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="card-body pt-0">
                                                        <div class="row mb-3">
                                                            <div class="col">
                                                                <p class="text-dark fw-semibold mb-0">Artical tags</p>
                                                            </div>
                                                        </div>
                                                        <span class="badge bg-soft-dark px-3 py-2 fw-semibold">Music</span>
                                                        <span class="badge bg-soft-dark px-3 py-2 fw-semibold">Animals</span>
                                                        <span class="badge bg-soft-dark px-3 py-2 fw-semibold">Natural</span>
                                                        <span class="badge bg-soft-dark px-3 py-2 fw-semibold">Food</span>
                                                        <span class="badge bg-soft-dark px-3 py-2 fw-semibold">Fashion</span>
                                                        <span class="badge bg-soft-dark px-3 py-2 fw-semibold">Helth</span>
                                                        <span class="badge bg-soft-dark px-3 py-2 fw-semibold">Charity</span>
                                                    </div>
                                                </div>   
                                                <div class="card">
                                                    <div class="card-body pb-0">
                                                        <div class="row">
                                                            <div class="col">
                                                                <p class="text-dark fw-semibold mb-0">Comments (205)</p>
                                                            </div><!--end col-->
                                                        </div><!--end row-->    
                                                    </div><!--end card-body-->  
                                                    <div class="card-body border-bottom-dashed"> 
                                                        <ul class="list-unstyled mb-0">
                                                            <li>
                                                                <div class="row">
                                                                    <div class="col-auto">
                                                                        <img src="assets/images/users/user-2.jpg" alt="" class="thumb-md rounded-circle">
                                                                    </div><!--end col-->
                                                                    <div class="col">
                                                                        <div class="comment-body ms-n2 bg-light-alt p-3">
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <p class="text-dark fw-semibold mb-2">Martin Luther</p>
                                                                                </div><!--end col-->
                                                                                <div class="col-auto">
                                                                                    <span class="text-muted"><i class="far fa-clock me-1"></i>30 min ago</span>
                                                                                </div><!--end col-->
                                                                            </div><!--end row-->                                                                
                                                                            <p>It is a long established fact that a reader will be distracted by the 
                                                                                readable content of a page when looking at its layout. The point of 
                                                                                using Lorem Ipsum is that it has a more-or-less normal distribution of letters, 
                                                                                as opposed to using 'Content here, content here', making it look like readable English.
                                                                            </p>
                                                                            <a href="#" class="text-primary"><i class="fas fa-reply me-1"></i>Replay</a>
                                                                        </div>
                                                                    </div><!--end col-->
                                                                </div><!--end row-->
                                                                <ul class="list-unstyled ms-5">
                                                                    <li>
                                                                        <div class="row mt-3">
                                                                            <div class="col-auto">
                                                                                <img src="assets/images/logo-sm.png" alt="" class="thumb-md rounded-circle">
                                                                            </div><!--end col-->
                                                                            <div class="col">
                                                                                <div class="comment-body ms-n2 bg-light-alt p-3">
                                                                                    <div class="row">
                                                                                        <div class="col">
                                                                                            <p class="text-dark fw-semibold mb-2">Metrica Author</p>
                                                                                        </div><!--end col-->
                                                                                        <div class="col-auto">
                                                                                            <span class="text-muted"><i class="far fa-clock me-1"></i>37 min ago</span>
                                                                                        </div><!--end col-->
                                                                                    </div><!--end row-->                                                                
                                                                                    <p>It is a long established fact that a reader will be distracted by the 
                                                                                        readable content of a page when looking at its layout. 
                                                                                    </p>
                                                                                    <p class="mb-0">Thank you</p>
                                                                                </div>
                                                                            </div><!--end col-->
                                                                        </div><!--end row-->
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="mt-3">
                                                                <div class="row">
                                                                    <div class="col-auto">
                                                                        <img src="assets/images/users/user-1.jpg" alt="" class="thumb-md rounded-circle">
                                                                    </div><!--end col-->
                                                                    <div class="col">
                                                                        <div class="comment-body ms-n2 bg-light-alt p-3">
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <p class="text-dark fw-semibold mb-2">Joseph Rust</p>
                                                                                </div><!--end col-->
                                                                                <div class="col-auto">
                                                                                    <span class="text-muted"><i class="far fa-clock me-1"></i>40 min ago</span>
                                                                                </div><!--end col-->
                                                                            </div><!--end row-->                                                                
                                                                            <p>Is it a long established fact that a reader will be distracted by the 
                                                                                readable content of a page when looking at its layout?
                                                                            </p>
                                                                            <a href="#" class="text-primary"><i class="fas fa-reply me-1"></i>Replay</a>
                                                                        </div>
                                                                    </div><!--end col-->
                                                                </div><!--end row--> 
                                                            </li>
                                                            <li class="mt-3">
                                                                <div class="row">
                                                                    <div class="col-auto">
                                                                        <img src="assets/images/users/user-5.jpg" alt="" class="thumb-md rounded-circle">
                                                                    </div><!--end col-->
                                                                    <div class="col">
                                                                        <div class="comment-body ms-n2 bg-light-alt p-3">
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <p class="text-dark fw-semibold mb-2">Matt Rosales</p>
                                                                                </div><!--end col-->
                                                                                <div class="col-auto">
                                                                                    <span class="text-muted"><i class="far fa-clock me-1"></i>40 min ago</span>
                                                                                </div><!--end col-->
                                                                            </div><!--end row-->                                                                
                                                                            <p>Is it a long established fact that a reader will be distracted by the 
                                                                                readable content of a page when looking at its layout?
                                                                            </p>
                                                                            <a href="#" class="text-primary"><i class="fas fa-reply me-1"></i>Replay</a>
                                                                        </div>
                                                                    </div><!--end col-->
                                                                </div><!--end row-->
                                                                <ul class="list-unstyled ms-5">
                                                                    <li>
                                                                        <div class="row mt-3">
                                                                            <div class="col-auto">
                                                                                <img src="assets/images/logo-sm.png" alt="" class="thumb-md rounded-circle">
                                                                            </div><!--end col-->
                                                                            <div class="col">
                                                                                <div class="comment-body ms-n2 bg-light-alt p-3">
                                                                                    <div class="row">
                                                                                        <div class="col">
                                                                                            <p class="text-dark fw-semibold mb-2">Metrica Author</p>
                                                                                        </div><!--end col-->
                                                                                        <div class="col-auto">
                                                                                            <span class="text-muted"><i class="far fa-clock me-1"></i>37 min ago</span>
                                                                                        </div><!--end col-->
                                                                                    </div><!--end row-->                                                                
                                                                                    <p>It is a long established fact that a reader will be distracted by the 
                                                                                        readable content of a page when looking at its layout. 
                                                                                    </p>
                                                                                    <p class="mb-0">Thank you</p>
                                                                                </div>
                                                                            </div><!--end col-->
                                                                        </div><!--end row-->
                                                                    </li>
                                                                </ul> 
                                                            </li>
                                                        </ul> 
                                                    </div><!--end card-body--> 
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col">
                                                                <p class="text-dark fw-semibold mb-0">Leave a comment</p>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end card-body--> 
                                                    <div class="card-body pt-0">
                                                        <form>
                                                            <div class="form-group mb-3">
                                                                <textarea class="form-control" rows="5" id="leave_comment" placeholder="Message"></textarea>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12 text-end">
                                                                    <button type="submit" class="btn btn-de-primary px-4">Send Message</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div><!--end card-body-->             
                                                </div> <!--end card-->  
                                            </div><!--end col-->
                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="row align-items-center">
                                                            <div class="col">                      
                                                                <h4 class="card-title">Latest Posts</h4>                      
                                                            </div><!--end col-->
                                                            <div class="col-auto"> 
                                                                <div class="dropdown">
                                                                    <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                       Today<i class="las la-angle-down ms-1"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#">Today</a>
                                                                        <a class="dropdown-item" href="#">Yesterday</a>
                                                                        <a class="dropdown-item" href="#">Last Week</a>
                                                                    </div>
                                                                </div>               
                                                            </div><!--end col-->
                                                        </div>  <!--end row-->                                  
                                                    </div><!--end card-header-->
                                                    <div class="card-body">
                                                        <div class="blog-card">
                                                            <img src="assets/images/small/img-1.jpg" alt="" class="img-fluid rounded">
                                                            <span class="badge badge-purple px-3 py-2 bg-soft-primary fw-semibold mt-3">Photography</span>   
                                                            <h4 class="my-3 font-15">
                                                                <a href="" class="">There are many variations of passages of Lorem</a>
                                                            </h4>
                                                            <p class="text-muted">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Cum sociis natoque penatibus et magnis.</p>
                                                            <hr class="hr-dashed">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="meta-box">
                                                                    <div class="media">
                                                                        <img src="assets/images/users/user-5.jpg" alt="" class="thumb-sm rounded-circle me-2">                                       
                                                                        <div class="media-body align-self-center text-truncate">
                                                                            <h6 class="m-0 text-dark">Donald Gardner</h6>
                                                                            <ul class="p-0 list-inline mb-0">
                                                                                <li class="list-inline-item">26 mars 2020</li>
                                                                                <li class="list-inline-item">by <a href="">admin</a></li>
                                                                            </ul>
                                                                        </div><!--end media-body-->
                                                                    </div>                                            
                                                                </div><!--end meta-box-->
                                                                <div class="align-self-center">
                                                                    <a href="#" class="text-dark">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                                                                </div>
                                                            </div>                                        
                                                        </div><!--end blog-card-->                                                                                   
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="row align-items-center">
                                                            <div class="col">                      
                                                                <h4 class="card-title">Popular Posts</h4>                      
                                                            </div><!--end col-->
                                                            <div class="col-auto"> 
                                                                <div class="dropdown">
                                                                    <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                       Today<i class="las la-angle-down ms-1"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#">Today</a>
                                                                        <a class="dropdown-item" href="#">Yesterday</a>
                                                                        <a class="dropdown-item" href="#">Last Week</a>
                                                                    </div>
                                                                </div>               
                                                            </div><!--end col-->
                                                        </div>  <!--end row-->                                  
                                                    </div><!--end card-header-->
                                                    <div class="card-body">
                                                        <ul class="list-group custom-list-group mb-n3">
                                                            <li class="list-group-item align-items-center d-flex justify-content-between">
                                                                <div class="media">
                                                                    <img src="assets/images/small/img-2.jpg" height="40" class="me-3 align-self-center rounded" alt="...">
                                                                    <div class="media-body align-self-center"> 
                                                                        <a href="#" class="m-0 d-block fw-semibold font-13">Dastyle - Admin Dashboard</a>
                                                                        <a href="#" class="font-12 text-primary">analytic-index.html</a>                                                                                           
                                                                    </div><!--end media body-->
                                                                </div>
                                                                <div class="align-self-center">
                                                                    <span class="text-muted mb-n2">20 June</span>
                                                                </div>                                            
                                                            </li>
                                                            <li class="list-group-item align-items-center d-flex justify-content-between">
                                                                <div class="media">
                                                                    <img src="assets/images/small/img-1.jpg" height="40" class="me-3 align-self-center rounded" alt="...">
                                                                    <div class="media-body align-self-center"> 
                                                                        <a href="#" class="m-0 d-block fw-semibold font-13">Metrica Simple- Admin Dashboard</a>
                                                                        <a href="#" class="font-12 text-primary">sales-index.html</a>                                                                                           
                                                                    </div><!--end media body-->
                                                                </div>
                                                                <div class="align-self-center">
                                                                    <span class="text-muted mb-n2">18 june</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item align-items-center d-flex justify-content-between">
                                                                <div class="media">
                                                                    <img src="assets/images/small/img-4.jpg" height="40" class="me-3 align-self-center rounded" alt="...">
                                                                    <div class="media-body align-self-center"> 
                                                                        <a href="#" class="m-0 d-block fw-semibold font-13">Crovex - Admin Dashboard</a>
                                                                        <a href="#" class="font-12 text-primary">helpdesk-index.html</a>                                                                                           
                                                                    </div><!--end media body-->
                                                                </div>
                                                                <div class="align-self-center">
                                                                    <span class="text-muted mb-n2">15 june</span>
                                                                </div>   
                                                            </li>
                                                            <li class="list-group-item align-items-center d-flex justify-content-between">
                                                                <div class="media">
                                                                    <img src="assets/images/small/img-5.jpg" height="40" class="me-3 align-self-center rounded" alt="...">
                                                                    <div class="media-body align-self-center"> 
                                                                        <a href="#" class="m-0 d-block fw-semibold font-13">Annex - Admin Dashboard</a>
                                                                        <a href="#" class="font-12 text-primary">calendar.html</a>                                                                                           
                                                                    </div><!--end media body-->
                                                                </div>
                                                                <div class="align-self-center">
                                                                    <span class="text-muted mb-n2">12 june</span>
                                                                </div>   
                                                            </li>
                                                        </ul>                                    
                                                    </div><!--end card-body--> 
                                                </div><!--end card-->
                                                
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="row align-items-center">
                                                            <div class="col">                      
                                                                <h4 class="card-title">Social Profile</h4>                      
                                                            </div><!--end col-->                                                       
                                                        </div>  <!--end row-->                                  
                                                    </div><!--end card-header-->
                                                    <div class="card-body">
                                                        <div class="button-list btn-social-icon">                                                
                                                            <button type="button" class="btn btn-soft-primary btn-icon-circle">
                                                                <i class="fab fa-facebook-f"></i>
                                                            </button>
                    
                                                            <button type="button" class="btn btn-soft-info btn-icon-circle ms-2">
                                                                <i class="fab fa-twitter"></i>
                                                            </button>
                    
                                                            <button type="button" class="btn btn-soft-pink btn-icon-circle  ms-2">
                                                                <i class="fab fa-dribbble"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-soft-info btn-icon-circle  ms-2">
                                                                <i class="fab fa-linkedin-in"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-soft-danger btn-icon-circle  ms-2">
                                                                <i class="fab fa-google-plus-g"></i>
                                                            </button>
                                                        </div>
                                                    </div><!--end card-body-->
                                                </div><!--end card-->                                            
                                            </div><!--end col-->
                                        </div><!--end row-->  
                                    </div>
                                    <div class="tab-pane p-3" id="Gallery" role="tabpanel">
                                        <div class="row">                    
                                            <div class="col-md-6 col-lg-auto filters-group-wrap">
                                                <div class="filters-group mb-3">
                                                    <div class="btn-group filter-options">
                                                        <button class="btn btn-primary" data-group="fashion">Fashion</button>
                                                        <button class="btn btn-primary" data-group="animal">Animal</button>
                                                        <button class="btn btn-primary" data-group="food">Food</button>
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                        
                                          
                                        <div id="grid" class="row g-0">
                                            <div class="col-md-4 col-lg-3 picture-item" data-groups='["fashion"]'>
                                                <a href="assets/images/small/img-1.jpg" class="lightbox">
                                                    <img src="assets/images/small/img-1.jpg" alt="" class="img-fluid" />
                                                </a>  
                                            </div><!--end col-->
                                            <div class="col-md-4 col-lg-3 picture-item picture-item--overlay" data-groups='["food"]'>
                                                <a href="assets/images/small/img-2.jpg" class="lightbox">
                                                    <img src="assets/images/small/img-2.jpg" alt="" class="img-fluid" />
                                                </a> 
                                            </div><!--end col-->
                                            <div class="col-md-4 col-lg-3 picture-item" data-groups='["animal"]'>
                                                <a href="assets/images/small/img-3.jpg" class="lightbox">
                                                    <img src="assets/images/small/img-3.jpg" alt="" class="img-fluid" />
                                                </a> 
                                            </div><!--end col-->
                                            <div class="col-md-4 col-lg-3 picture-item picture-item--h2" data-groups='["food"]'>
                                                <a href="assets/images/small/img-4.jpg" class="lightbox">
                                                    <img src="assets/images/small/img-4.jpg" alt="" class="img-fluid" />
                                                </a> 
                                            </div><!--end col-->
                                            <div class="col-md-4 col-lg-3 picture-item" data-groups='["food", "animal"]'>
                                                <a href="assets/images/small/img-5.jpg" class="lightbox">
                                                    <img src="assets/images/small/img-5.jpg" alt="" class="img-fluid" />
                                                </a> 
                                            </div><!--end col-->
                                            <div class="col-md-4 col-lg-3 picture-item picture-item--overlay" data-groups='["fashion"]'>
                                                <a href="assets/images/small/img-6.jpg" class="lightbox">
                                                    <img src="assets/images/small/img-6.jpg" alt="" class="img-fluid" />
                                                </a> 
                                            </div><!--end col-->
                                            <div class="col-md-4 col-lg-3 picture-item picture-item--h2" data-groups='["food"]'>
                                                <a href="assets/images/small/img-2.jpg" class="lightbox">
                                                    <img src="assets/images/small/img-2.jpg" alt="" class="img-fluid" />
                                                </a> 
                                            </div><!--end col-->
                                            <div class="col-md-4 col-lg-3 picture-item picture-item--h2" data-groups='["fashion"]'>
                                                <a href="assets/images/small/img-1.jpg" class="lightbox">
                                                    <img src="assets/images/small/img-1.jpg" alt="" class="img-fluid" />
                                                </a> 
                                            </div> <!--end col-->                     
                                        </div><!--end row-->
                                    </div>                                                
                                    <div class="tab-pane p-3" id="Settings" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-6 col-xl-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="row align-items-center">
                                                            <div class="col">                      
                                                                <h4 class="card-title">Personal Information</h4>                      
                                                            </div><!--end col-->                                                       
                                                        </div>  <!--end row-->                                  
                                                    </div><!--end card-header-->
                                                    <div class="card-body">                       
                                                        <div class="form-group mb-3 row">
                                                            <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">First Name</label>
                                                            <div class="col-lg-9 col-xl-8">
                                                                <input class="form-control" type="text" value="Rosa">
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-3 row">
                                                            <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Last Name</label>
                                                            <div class="col-lg-9 col-xl-8">
                                                                <input class="form-control" type="text" value="Dodson">
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-3 row">
                                                            <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Company Name</label>
                                                            <div class="col-lg-9 col-xl-8">
                                                                <input class="form-control" type="text" value="MannatThemes">
                                                                <span class="form-text text-muted font-12">We'll never share your email with anyone else.</span>
                                                            </div>
                                                        </div>
                            
                                                        <div class="form-group mb-3 row">
                                                            <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Contact Phone</label>
                                                            <div class="col-lg-9 col-xl-8">
                                                                <div class="input-group">
                                                                    <span class="input-group-text"><i class="las la-phone"></i></span>
                                                                    <input type="text" class="form-control" value="+123456789" placeholder="Phone" aria-describedby="basic-addon1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-3 row">
                                                            <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Email Address</label>
                                                            <div class="col-lg-9 col-xl-8">
                                                                <div class="input-group">
                                                                    <span class="input-group-text"><i class="las la-at"></i></span>
                                                                    <input type="text" class="form-control" value="rosa.dodson@demo.com" placeholder="Email" aria-describedby="basic-addon1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-3 row">
                                                            <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Website Link</label>
                                                            <div class="col-lg-9 col-xl-8">
                                                                <div class="input-group">
                                                                    <span class="input-group-text"><i class="la la-globe"></i></span>
                                                                    <input type="text" class="form-control" value=" https://mannatthemes.com/" placeholder="Email" aria-describedby="basic-addon1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-3 row">
                                                            <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">USA</label>
                                                            <div class="col-lg-9 col-xl-8">
                                                                <select class="form-select">
                                                                    <option>London</option>
                                                                    <option>India</option>
                                                                    <option>USA</option>
                                                                    <option>Canada</option>
                                                                    <option>Thailand</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-3 row">
                                                            <div class="col-lg-9 col-xl-8 offset-lg-3">
                                                                <button type="submit" class="btn btn-de-primary">Submit</button>
                                                                <button type="button" class="btn btn-de-danger">Cancel</button>
                                                            </div>
                                                        </div>                                                    
                                                    </div>                                            
                                                </div>
                                            </div> <!--end col--> 
                                            <div class="col-lg-6 col-xl-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Change Password</h4>
                                                    </div><!--end card-header-->
                                                    <div class="card-body"> 
                                                        <div class="form-group mb-3 row">
                                                            <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Current Password</label>
                                                            <div class="col-lg-9 col-xl-8">
                                                                <input class="form-control" type="password" placeholder="Password">
                                                                <a href="#" class="text-primary font-12">Forgot password ?</a>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-3 row">
                                                            <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">New Password</label>
                                                            <div class="col-lg-9 col-xl-8">
                                                                <input class="form-control" type="password" placeholder="New Password">
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-3 row">
                                                            <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Confirm Password</label>
                                                            <div class="col-lg-9 col-xl-8">
                                                                <input class="form-control" type="password" placeholder="Re-Password">
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-3 row">
                                                            <div class="col-lg-9 col-xl-8 offset-lg-3">
                                                                <button type="submit" class="btn btn-de-primary">Change Password</button>
                                                                <button type="button" class="btn btn-de-danger">Cancel</button>
                                                            </div>
                                                        </div>   
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Other Settings</h4>
                                                    </div><!--end card-header-->
                                                    <div class="card-body"> 
    
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="Email_Notifications" checked>
                                                            <label class="form-check-label" for="Email_Notifications">
                                                                Email Notifications
                                                            </label>
                                                            <span class="form-text text-muted font-12 mt-0">Do you need them?</span>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="API_Access">
                                                            <label class="form-check-label" for="API_Access">
                                                                API Access
                                                            </label>
                                                            <span class="form-text text-muted font-12 mt-0">Enable/Disable access</span>
                                                        </div>
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                            </div> <!-- end col -->                                                                              
                                        </div><!--end row-->
                                    </div>
                                </div>        
                            </div> <!--end card-body-->                            
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

            </div><!-- container -->

            <!--Start Rightbar-->
                <!--Start Rightbar/offcanvas-->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
                    <div class="offcanvas-header border-bottom">
                      <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
                      <button type="button" class="btn-close text-reset p-0 m-0 align-self-center" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">  
                        <h6>Account Settings</h6>
                        <div class="p-2 text-start mt-3">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch1">
                                <label class="form-check-label" for="settings-switch1">Auto updates</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
                                <label class="form-check-label" for="settings-switch2">Location Permission</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="settings-switch3">
                                <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
                            </div><!--end form-switch-->
                        </div><!--end /div-->
                        <h6>General Settings</h6>
                        <div class="p-2 text-start mt-3">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch4">
                                <label class="form-check-label" for="settings-switch4">Show me Online</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
                                <label class="form-check-label" for="settings-switch5">Status visible to all</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="settings-switch6">
                                <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
                            </div><!--end form-switch-->
                        </div><!--end /div-->               
                    </div><!--end offcanvas-body-->
                </div>
                <!--end Rightbar/offcanvas-->
                 <!--end Rightbar-->
                 
                <!--Start Footer-->
                <!-- Footer Start -->
                <footer class="footer text-center text-sm-start">
                    &copy; <script>
                        document.write(new Date().getFullYear())
                    </script> Metrica <span class="text-muted d-none d-sm-inline-block float-end">Crafted with <i
                            class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
                </footer>
                <!-- end Footer -->                
                <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->

    <!-- Javascript  -->
    <script src="assets/plugins/tobii/tobii.min.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>
    <script>
        const tobii = new Tobii()
    </script>

</body>

</html>