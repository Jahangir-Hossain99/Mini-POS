@extends('layout.main')

@section('content')

<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row clearfix page_header">
                            	
                            	<div class="col-md-6">
                            	<h2>Categories List</h2>	
                            	</div>

                            	<div class="col-md-6 text-right">
                            		<a href="{{  url('/categories/create') }}" class="btn btn-info"><i class="fa fa-plus"></i>New categories</a>
                            	</div>

                            </div>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive ">
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
                                    	@foreach($categories as $categories)
                                          <tr>
                                            <th>{{$categories->id}}</th>
                                            <th>{{$categories->tittle}}</th>
                                            <td class="text-center" >

                                    

                                   <form method="post"  action="{{ url('/categories/'. $categories->id) }}" >

                                   	<a href="{{ url('/categories/'. $categories->id).'/edit' }}" class="btn btn-primary btn-sm" ><i class="fa fa-edit" ></i></a>

                                    
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