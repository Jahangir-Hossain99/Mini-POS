@extends('layout.main')

@section('content')

<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row clearfix page_header">
                            	
                            	<div class=" d-inline-block col-md-4 ">
                                    <a href="{{  url('/users') }}" class="btn btn-primary "><i class="fas fa-arrow-left"></i> Back</a>
                                </div>

                            	<div class=" d-inline-block col-md-8 text-right">
                            		<a href="{{  url('/users/create') }}" class="btn btn-info"><i class="fa fa-plus"></i>New Sale</a>
                                    <a href="{{  url('/users/create') }}" class="btn btn-info"><i class="fa fa-plus"></i>New Purchase</a>
                                    <a href="{{  url('/users/create') }}" class="btn btn-info"><i class="fa fa-plus"></i>New Payment</a>
                                    <a href="{{  url('/users/create') }}" class="btn btn-info"><i class="fa fa-plus"></i>New Receipt</a>
                            	</div>

                            </div>
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weighted-bold text-primary" > {{ $user->name }} </h6>
                            </div>
                        </div>
                        <div class="card-body">
                            
                            <table class="table" >

                                <tr>
                                    <td>Group </td>
                                    <td> {{ $user->group->tittle }} </td>
                                </tr>

                                <tr>
                                    <td>Name</td>
                                    <td> {{ $user->name }} </td>
                                </tr>

                                <tr>
                                    <td>Email</td>
                                    <td> {{ $user->email }} </td>
                                </tr>

                                <tr>
                                    <td>Phone</td>
                                    <td> {{ $user->phone }} </td>
                                </tr>

                                <tr>
                                    <td>Address</td>
                                    <td> {{ $user->address }} </td>
                                </tr>

                            </table>

                    </div>

@endsection