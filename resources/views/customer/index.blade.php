@extends('layouts.crm-master')

@section('content')

<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home')}}">CostexEA</a>
                        </li><!--end nav-item-->
                        <li class="breadcrumb-item"><a href="{{ route('crm.index')}}">CRM</a>
                        </li><!--end nav-item-->
                        <li class="breadcrumb-item active">Customers</li>
                    </ol>
                </div>
                <h3 class="page-title text-uppercase">Customers List</h3>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div>
    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class="col-12">
            <div class="card">                
                <div class="card-body">
                    <div class="table-responsive dash-social">
                        <table id="datatable-customers" class="table dataTable table-bordered" >
                            <thead class="thead-light">
                            <tr>
                                <th class="sorting_asc text-uppercase" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Customer Name: activate to sort column descending" style="width: 300.422px;">Customer Name</th>
                                <th class="sorting text-uppercase" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 169.219px;"> Email</th>
                                <th class="sorting text-uppercase" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Phone No: activate to sort column ascending" style="width: 129.562px;">Phone No</th>  
                                <th class="sorting text-uppercase" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Lead  Score: activate to sort column ascending" style="width: 146.172px;">Class Code</th>                                                  
                                <th class="sorting text-uppercase" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Company: activate to sort column ascending" style="width: 180.016px;">Country</th>                                                                                                
                                <th class="text-uppercase" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Click to view" style="width: 50.016px;"> Action</th>
                            </tr><!--end tr-->
                            </thead>

                            <tbody>                                         
                                @foreach($clients as $client)                                                
                                    <tr class="sorting_1">
                                        <td class="sorting_1"><a href="{{ route('customer.show', $client->account_id) }}" class="user-avatar mr-2 font-14 text-capitalize" title="Go to Customer Profile"> {{ $client->name }}</a></td>
                                        <td class="sorting_1">{{ $client->account_type }}</td>
                                        <td class="sorting_1">{{ $client->phone_fax }}</td>
                                        <td class="sorting_1">{{ $client->rating }}</td>
                                        <td class="sorting_1">{{ $client->website }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('customer.show', $client->account_id) }}"> <i class="fa fa-eye text-success" title="Go to Customer Profile"></i> </a> &nbsp;&nbsp;                                            
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
