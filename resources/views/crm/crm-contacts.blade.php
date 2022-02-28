@extends('layouts.crm-master')

@section('content')

<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home')}}">Metrica</a>
                        </li><!--end nav-item-->
                        <li class="breadcrumb-item"><a href="{{ route('home')}}">CRM</a>
                        </li><!--end nav-item-->
                        <li class="breadcrumb-item active">Contacts</li>
                    </ol>
                </div>
                <h4 class="page-title">Contacts</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div>
    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">                      
                            <h4 class="card-title">Contacts Details</h4>             
                        </div><!--end col-->                                       
                    </div>  <!--end row-->                                  
                </div><!--end card-header-->
                <div class="card-body">
                    <div class="table-responsive dash-social">
                        <table id="datatable-customers" class="table dataTable no-footer">
                            <thead>
                            <tr>
                                <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Customer Name: activate to sort column descending" style="width: 300.422px;">Customer Name</th>
                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 169.219px;"> Email</th>
                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Phone No: activate to sort column ascending" style="width: 129.562px;">Phone No</th>  
                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Lead  Score: activate to sort column ascending" style="width: 146.172px;">Lead  Score</th>                                                  
                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Company: activate to sort column ascending" style="width: 180.016px;">Company</th>                                                                                                
                                <th tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Click to view" style="width: 50.016px;"> Go to User</th>
                            </tr><!--end tr-->
                            </thead>

                            <tbody>                                         
                                @foreach($clients as $client)                                                
                                    <tr class="sorting_1">
                                        <td class="sorting_1"><a href="#" class="user-avatar mr-2"><img src="{{ URL::asset('assets/images/users/user-10.jpg')}}" alt="" class="thumb-sm rounded-circle"></a> {{ $client->name }}</td>
                                        <td class="sorting_1">{{ $client->account_type }}</td>
                                        <td class="sorting_1">{{ $client->phone_fax }}</td>
                                        <td class="sorting_1">{{ $client->rating }}</td>
                                        <td class="sorting_1">{{ $client->website }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('customer.show', $client->account_id) }}"> <i class="fa fa-eye text-success" title="See User"></i> </a> &nbsp;&nbsp;
                                            <a href="#"> <i class="fa fa-edit text-success" title="Update User"></i> </a>
                                        </td>
                                        <!--<td>
                                            <span class="badge badge-md badge-soft-success">test</span>
                                            <span class="badge badge-md badge-soft-success">another</span>
                                        </td>
                                        <td>                                                       
                                            <a href="#" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                            <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                        </td>-->
                                    </tr><!--end tr-->
                                @endforeach                                              
                            </tbody>
                        </table>                    
                    </div>                                
                </div><!--end card-body--> 
            </div><!--end card--> 
        </div> <!--end col-->                               
    </div><!--end row-->

</div><!-- container -->
    
@endsection
