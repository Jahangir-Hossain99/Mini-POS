@extends('layout.main')

@section('content')



<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row clearfix page_header">
                            	
                            	<div class="col-md-6">
                            	<h2>User Groups</h2>	
                            	</div>

                            	<div class="col-md-6 text-right">
                            		<a href="{{  url('/groups/create') }}" class="btn btn-info"><i class="fa fa-plus"></i>New Group</a>
                            	</div>

                            </div>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tittle</th>
                                            <th class="text-center" >Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tittle</th>
                                            <th class="text-center" >Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    	@foreach($groups as $group)
                                          <tr>
                                            <td>{{ $group->id }}</td>
                                            <td>{{ $group->tittle }}</td>
                                            <td class="text-center" >

                                   <form method="post"  action="{{ url('/groups/'. $group->id) }}" >
                                   	@csrf
                                   	@method('DELETE')

                                   	<button onclick =" return confirm('Are you sure?') " type="submit" class="btn btn-danger" ><i class="fa fa-trash" ></i>Delete</button>

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