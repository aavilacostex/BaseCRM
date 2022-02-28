@extends('layouts.crm-master')

@section('headerStyle')

<link href="{{ URL::asset('assets/plugins/tobii/tobii.min.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home')}}">CostexEA</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('crm.index')}}">CRM</a></li>
                        <li class="breadcrumb-item"><a href="#">Customer</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
                <h3 class="page-title text-uppercase">Customer Profile</h3>
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


<!--


SELECT CUSTS, CUNUM, CUNAM, CUAD1,CUAD2,CUAD3, CUSLM, CUCLS,
CUTRM,CUCRD,CUPH1,CUPH2,CUCN1,CUCN2,CUFAX,CUTX#,CUSRT,CUBRDF,
SUBSTR(T2.CNTDE2,1,11),CUSLM,T3.CNTDE1,CUSLTR,T4.CNTDE1

 -->


                            <!-- Main Data Column -->
                            <div class="col-lg-2 align-self-center mb-3">
                                <div class="met-profile-main">
                                    <div class="met-profile-main-pic" style="display: none !important;">
                                        <img src="assets/images/users/user-4.jpg" alt="" height="110" class="rounded-circle">
                                        <span class="met-profile_main-pic-change">
                                            <i class="fas fa-camera"></i>
                                        </span>
                                    </div>
                                    <div class="met-profile_user-detail">
                                        <ul class="list-unstyled personal-detail mb-0">
                                            <li><h5 class="met-user-name">{{ $basicCust->CUNAM }}</h5>   </li>
                                            <li class="mt-2"><p class="mb-0 met-user-name-post">Class: {{ $basicCust->CUCLS }} </p> </li>
                                            <li class="mt-2"><p class="mb-0 met-user-name-post"> Language: {{ $basicCust->CULANG }}</p> </li>                                            
                                        </ul>                                                  
                                    </div>
                                </div>                                                
                            </div><!--end col-->
                            
                            <!-- Contact Data Column -->
                            <div class="col-lg-3 ms-auto align-self-center">
                                <ul class="list-unstyled personal-detail mb-0">
                                    <!-- <li class=""><i class="las la-info mr-2 text-secondary font-22 align-middle"></i> <b> Contact Info </b> </li> -->
                                    <li class=""><i class="las la-phone mr-2 text-secondary font-18 align-middle"></i> <b> phone </b> : {{ $basicCust->CUPH1 }}</li>
                                    <li class="mt-2"><i class="las la-envelope text-secondary font-22 align-middle mr-2"></i> <b> Email </b> :</li>
                                    <li class="mt-2"><i class="las la-globe text-secondary font-22 align-middle mr-2"></i> <b> Website </b> : 
                                        <a href="https://costex.com/" class="font-14 text-primary"></a> 
                                    </li>  
                                    <li class="mt-2" style="padding-left:20px;padding-top:10px;"></li>                                                   
                                </ul>                               
                            </div><!--end col-->

                            <!-- Billing Data Column -->
                            <div class="col-lg-4 ms-auto align-self-center">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <ul class="list-unstyled personal-detail mb-0">
                                            <li class=""><i class="las la-map-marker mr-2 text-secondary font-18 align-middle"></i> <b> Billing Address </b> </li>
                                            <li class="" style="padding-left:20px;padding-top:10px;">{{ $basicCust->CUAD1 }}</li>
                                            <li class="mt-2" style="padding-left:20px;">{{ $basicCust->CUAD2 }} </li>
                                            <li class="mt-2" style="padding-left:20px;">{{ $basicCust->CUAD3 }}</li>
                                            <li class="mt-2" style="padding-left:20px;">{{ $basicCust->CUCITY }}, {{ $basicCust->CUSTE }} - {{ $basicCust->CUZIP }} </li> 
                                            <li class="mt-2" style="padding-left:20px;">{{ $basicCust->COUNTRY }}</li>                                                                                              
                                        </ul> 
                                    </div>                                    
                                    <div class="col-lg-6">
                                        <ul class="list-unstyled personal-detail mb-0">
                                            <li class=""><i class="las la-map-marker mr-2 text-secondary font-18 align-middle"></i> <b> Pref. Shipping Address </b> </li>
                                            <li class="" style="padding-left:20px;padding-top:10px;"></li>
                                            <li class="mt-2" style="padding-left:20px;"> </li>
                                            <li class="mt-2" style="padding-left:20px;"></li>  
                                        </ul> 
                                    </div>
                                </div>                                
                            </div><!--end col-->

                            <!-- Territory Data Column -->
                            <div class="col-lg-3 align-self-center">
                                <ul class="list-unstyled personal-detail mb-0">
                                    <li class=""><i class="las la-bookmark mr-2 text-secondary font-18 align-middle"></i> <b> Sales Tax </b> : {{ $basicCust->CUTX }}</li>
                                    <li class="mt-2"><i class="las la-user text-secondary font-22 align-middle mr-2"></i> <b> Sales Rep </b> : {{ $basicCust->CUSLM }} - {{ $basicCust->SALESREP }}</li>
                                    <li class="mt-2"><i class="las la-globe text-secondary font-22 align-middle mr-2"></i> <b> Territory </b> : {{ $basicCust->CUSLTR }} - {{ $basicCust->TERR }}</li>
                                    <li class="mt-2" style="padding-left:20px;padding-top:10px;"></li>   
                                </ul>                               
                            </div><!--end col-->

                            <div class="col-lg-4 align-self-center" style="display: none !important;">
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
                    <ul class="nav nav-pills nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#Accounting" role="tab" aria-selected="true">
                                <i class="fa fa-1x fa-home pr-2" aria-hidden="true"> </i>
                                Accounting
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#Contact" role="tab" aria-selected="false">
                                <i class="fa fa-1x fa-home pr-2" aria-hidden="true"> </i>
                                Contacts
                            </a>
                        </li>                                                
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#Shipp" role="tab" aria-selected="false">
                                <i class="fa fa-1x fa-home pr-2" aria-hidden="true"> </i>
                                Shipping Addresses
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#Settings" role="tab" aria-selected="false">
                                <i class="fa fa-1x fa-home pr-2" aria-hidden="true"> </i>
                                Other Settings
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane p-3 active" id="Accounting" role="tabpanel">

                            <!-- Accounting Info Row -->
                            <div class="row">
                                <h4 class="mt-3 fw-semibold font-15 text-center text-uppercase p-2" style="border: 3px groove #cccccc;">
                                    <i class="las la-info mr-2 text-secondary font-18 align-middle">
                                        Accounting Info
                                    </i>                                    
                                </h4>
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4 align-self-center">
                                                    <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                                        <i data-feather="credit-card" class="align-self-center text-secondary icon-sm"></i> 
                                                    </div>  
                                                </div>
                                                <div class="col-8 align-self-center text-end">
                                                    <p class="text-muted mb-1 fw-semibold font-13 text-color-danger" >Credit Limit</p>
                                                    <span class="m-0 danger-bold">{{ $customer->account_type }}</span>    
                                                </div>                    
                                            </div>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4 align-self-center">
                                                    <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                                        <i data-feather="dollar-sign" class="align-self-center text-secondary icon-sm"></i> 
                                                    </div>  
                                                </div>
                                                <div class="col-8 align-self-center text-end">
                                                    <p class="text-muted mb-1 fw-semibold font-13">Balance</p>
                                                    <span class="m-0 fw-bold">{{ $customer->account_type }}</span>    
                                                </div>                    
                                            </div>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4 align-self-center">
                                                    <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                                        <i data-feather="dollar-sign" class="align-self-center text-secondary icon-sm"></i> 
                                                    </div>  
                                                </div>
                                                <div class="col-8 align-self-center text-end">
                                                    <p class="text-muted mb-1 fw-semibold font-13">Last Payment Amount</p>
                                                    <span class="m-0 fw-bold">{{ $customer->account_type }}</span>    
                                                </div>                    
                                            </div>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4 align-self-center">
                                                    <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                                        <i data-feather="calendar" class="align-self-center text-secondary icon-sm"></i> 
                                                    </div>  
                                                </div>
                                                <div class="col-8 align-self-center text-end">
                                                    <p class="text-muted mb-1 fw-semibold font-13">Last Payment Date</p>
                                                    <span class="m-0 fw-bold">{{ $customer->account_type }}</span>    
                                                </div>                    
                                            </div>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4 align-self-center">
                                                    <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                                        <i data-feather="dollar-sign" class="align-self-center text-secondary icon-sm"></i> 
                                                    </div>  
                                                </div>
                                                <div class="col-8 align-self-center text-end">
                                                    <p class="text-muted mb-1 fw-semibold font-13">Pending Returns</p>
                                                    <span class="m-0 fw-bold">{{ $customer->account_type }}</span>    
                                                </div>                    
                                            </div>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4 align-self-center">
                                                    <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                                        <i data-feather="dollar-sign" class="align-self-center text-secondary icon-sm"></i> 
                                                    </div>  
                                                </div>
                                                <div class="col-8 align-self-center text-end">
                                                    <p class="text-muted mb-1 fw-semibold font-13">Invoices to Post</p>
                                                    <span class="m-0 fw-bold">{{ $customer->account_type }}</span>    
                                                </div>                    
                                            </div>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->
                            </div><!-- End Accounting Info Row --> 

                            <!-- Current Month Activity Row -->
                            <div class="row">
                                <h4 class="mt-3 fw-semibold font-15 text-center text-uppercase p-2" style="border: 3px groove #cccccc;">
                                    <i class="las la-info mr-2 text-secondary font-18 align-middle">
                                        Current Month Activity
                                    </i>                                    
                                </h4>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4 align-self-center">
                                                    <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                                        <i data-feather="dollar-sign" class="align-self-center text-secondary icon-sm"></i> 
                                                    </div>  
                                                </div>
                                                <div class="col-8 align-self-center text-end">
                                                    <p class="text-muted mb-1 fw-semibold font-13">Charges</p>
                                                    <span class="m-0 fw-bold">{{ $customer->account_type }}</span>    
                                                </div>                    
                                            </div>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4 align-self-center">
                                                    <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                                        <i data-feather="dollar-sign" class="align-self-center text-secondary icon-sm"></i> 
                                                    </div>  
                                                </div>
                                                <div class="col-8 align-self-center text-end">
                                                    <p class="text-muted mb-1 fw-semibold font-13">Payments</p>
                                                    <span class="m-0 fw-bold">{{ $customer->account_type }}</span>    
                                                </div>                    
                                            </div>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div>
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4 align-self-center">
                                                    <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                                        <i data-feather="dollar-sign" class="align-self-center text-secondary icon-sm"></i> 
                                                    </div>  
                                                </div>
                                                <div class="col-8 align-self-center text-end">
                                                    <p class="text-muted mb-1 fw-semibold font-13">Discounts / Adjustments</p>
                                                    <span class="m-0 fw-bold">{{ $customer->account_type }}</span>    
                                                </div>                    
                                            </div>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4 align-self-center">
                                                    <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                                        <i data-feather="globe" class="align-self-center text-secondary icon-sm"></i> 
                                                    </div>  
                                                </div>
                                                <div class="col-8 align-self-center text-end">
                                                    <p class="text-muted mb-1 fw-semibold font-13">Internet</p>
                                                    <span class="m-0 fw-bold">{{ $customer->account_type }}</span>    
                                                </div>                    
                                            </div>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div>
                                <div class="col-lg-2"></div>
                            </div><!-- End Current Month Activity Row -->

                        </div> 
                        <div class="tab-pane p-3" id="Contact" role="tabpanel">
                            <div class="row">                    
                                <div class="col-lg-6">
                                    <!-- Contact Emails -->
                                    <div class="card mb-3">
                                        <div class="row no-gutters">   
                                            <div class="col-lg-1"></div>                                 
                                            <div class="col-md-10">
                                                <div class="card-header">
                                                    <div class="row align-items-center">
                                                        <div class="col">                      
                                                            <h4 class="card-title text-uppercase fw-semibold font-15 text-center"> 
                                                                <i class="las la-envelope text-secondary font-18 align-middle mr-2">
                                                                    contact emails
                                                                </i>                                                                 
                                                            </h4>       
                                                        </div><!--end col-->                                                       
                                                    </div>  <!--end row-->                                  
                                                </div><!--end card-header-->
                                                <div class="card-body">
                                                    <div class="table-responsive-sm">
                                                        <table class="table table-sm table-bordered mb-0">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th class="text-uppercase text-center" scope="col">contact emails</th>                                                            
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach($cemails as $cemail) 
                                                                    <tr class="sorting_1">
                                                                        <td class="sorting_1">{{ $cemail->id }}</td>
                                                                        <td class="sorting_1 text-center">{{ $cemail->email_address }}</td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table><!--end /table-->
                                                    </div><!--end /tableresponsive-->
                                                </div><!--end card-body-->
                                            </div><!--end col-->  
                                            <div class="col-lg-1"></div>                                          
                                        </div><!--end row-->
                                    </div><!--end card-->
                                </div>
                                <div class="col-lg-6">
                                    <!-- Contact Phones -->
                                    <div class="card mb-3">
                                        <div class="row no-gutters">    
                                            <div class="col-lg-1"></div>                                
                                            <div class="col-md-10">
                                                <div class="card-header">
                                                    <div class="row align-items-center">
                                                        <div class="col">                      
                                                            <h4 class="card-title text-uppercase fw-semibold font-15 text-center">
                                                                <i class="las la-phone text-secondary font-18 align-middle mr-2">
                                                                    contact phones
                                                                </i>                                                                 
                                                            </h4>               
                                                        </div><!--end col-->                                                      
                                                    </div>  <!--end row-->                                  
                                                </div><!--end card-header-->
                                                <div class="card-body">
                                                    <div class="table-responsive-sm">
                                                        <table class="table table-sm table-bordered mb-0">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th class="text-uppercase text-center" scope="col">contact phones</th>                                                            
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach($cphones as $cphone) 
                                                                    <tr class="sorting_1">
                                                                        <td class="sorting_1">{{ $cphone->id }}</td>
                                                                        <td class="sorting_1 text-center">{{ $cphone->phone_number }}</td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table><!--end /table-->
                                                    </div><!--end /tableresponsive-->
                                                </div><!--end card-body-->
                                            </div><!--end col-->        
                                            <div class="col-lg-1"></div>                                    
                                        </div><!--end row-->
                                    </div><!--end card-->
                                </div>
                            </div><!--end row-->  
                        </div>                                                
                        <div class="tab-pane p-3" id="Shipp" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">  
                                        <div class="card-header">
                                            <h4 class="card-title fw-semibold font-15 text-center text-uppercase">
                                                <i class="las la-map-marker mr-2 text-secondary font-18 align-middle">
                                                    Shipping Addresses
                                                </i>
                                            </h4>                                            
                                        </div>                                      
                                        <div class="card-body">
                                            <div class="table-responsive-sm">
                                                <table class="table table-sm table-bordered mb-0">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col" class="text-uppercase">#</th>
                                                            <th scope="col" class="text-uppercase">Addresses</th>                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($shipps as $shipp) 
                                                            <tr class="sorting_1">
                                                                <td class="sorting_1">{{ $shipp->id }}</td>
                                                                <td class="sorting_1">{{ $shipp->shipping_add_street }}, {{ $shipp->shipping_add_city }} {{ $shipp->shipping_add_state }} {{ $shipp->shipping_add_postalcode }} {{ $shipp->shipping_add_country }} </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table><!--end /table-->
                                            </div><!--end /tableresponsive-->
                                        </div><!--end card-body-->
                                    </div><!--end card-->        
                                </div>                                                                           
                            </div><!--end row-->
                        </div>
                        <div class="tab-pane p-3" id="Settings" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title fw-semibold font-15 text-center text-uppercase">
                                                <i class="las la-cog mr-2 text-secondary font-18 align-middle">
                                                    settings
                                                </i>                                                
                                            </h4>
                                        </div><!--end card-header-->
                                        <div class="card-body">
                                        @can('isAdmin')                                        
                                            <ul class="list-group list-group-flush border">
                                                <li class="list-group-item fw-semibold text-center thead-light" style="color: #303e67;background-color:var(--mainBck);border-color: #e8ebf3;" >
                                                    <h3 class="m-0">
                                                        <i class="ti ti-info-circle font-18 text-uppercase">
                                                            Routing Info
                                                        </i>                                                        
                                                    </h3> 
                                                </li>
                                                <li class="list-group-item fw-semibold text-center" ><span class="p-2">Class Code:</span> <span class="fw-bold">{{ $customer->account_type }} </span></li>
                                                <li class="list-group-item fw-semibold text-center" >Terms Code: <span class="fw-bold">{{ $customer->account_type }}</span></li>
                                                <li class="list-group-item fw-semibold text-center" >Credit Code: <span class="fw-bold">{{ $customer->account_type }}</span></li>
                                                <li class="list-group-item fw-semibold text-center" >Price Code: <span class="fw-bold">{{ $customer->account_type }}</span></li>
                                                <li class="list-group-item fw-semibold text-center" >Cancel B/O: <span class="fw-bold">{{ $customer->account_type }}</span></li>
                                                <li class="list-group-item fw-semibold text-center" >Service Charge: <span class="fw-bold">{{ $customer->account_type }}</span></li>
                                                <li class="list-group-item fw-semibold text-center" >Print Statement: <span class="fw-bold">{{ $customer->account_type }}</span></li>
                                                <li class="list-group-item fw-semibold text-center" >Promo Price: <span class="fw-bold">{{ $customer->account_type }}</span></li>
                                                <li class="list-group-item fw-semibold text-center" >Own Currency: <span class="fw-bold">{{ $customer->account_type }}</span></li>
                                                <li class="list-group-item fw-semibold text-center" >Referred By: <span class="fw-bold">{{ $customer->account_type }}</span></li>
                                              </ul>
                                              @endcan
                                        </div><!--end card-body-->
                                    </div><!--end card-->      
                                </div>
                                <div class="col-lg-3"></div>                                                                                                       
                            </div><!--end row-->
                        </div>
                    </div>        
                </div> <!--end card-body-->                            
            </div><!--end card-->
        </div><!--end col-->
    </div><!--end row-->

</div><!-- container -->

@endsection

@section('footerScript')

<script src="{{ URL::asset('assets/plugins/tobii/tobii.min.js')}}"></script>

@endsection




