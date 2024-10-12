@extends('layout.main')

@section('content')

<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row clearfix page_header">
                            	
                            	<div class="col-md-6">
                            	<h2>User List</h2>	
                            	</div>

                            	<div class="col-md-6 text-right">
                            		<a href="{{  url('/users/create') }}" class="btn btn-info"><i class="fa fa-plus"></i>New User</a>
                            	</div>

                            </div>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive ">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Group</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th class="text-center" >Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Group</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th class="text-center" >Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    	@foreach($users as $user)
                                          <tr>
                                            <th>{{$user->id}}</th>
                                            <th>{{$user->group->tittle}}</th>
                                            <th>{{$user->name}}</th>
                                            <th>{{$user->email}}</th>
                                            <th>{{$user->phone}}</th>
                                            <th>{{$user->address}}</th>
                                            <td class="text-center" >

                                    

                                   <form method="post"  action="{{ url('/users/'. $user->id) }}" >

                                   	<a href="{{ url('/users/'. $user->id).'/edit' }}" class="btn btn-primary btn-sm" ><i class="fa fa-edit" ></i></a>

                                    <a href="{{ url('/users/'. $user->id) }}" class="btn btn-warning btn-sm" ><i class="fa fa-eye" ></i></a>

                                   	@csrf
                                   	@method('DELETE')

                                   	<button onclick =" return confirm('Are you sure?') " type="submit" class="btn btn-danger btn-sm" ><i class="fa fa-trash" ></i></button>

                                   </form>
                                            </td>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

@endsection