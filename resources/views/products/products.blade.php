@extends('layout.main')

@section('content')

<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row clearfix page_header">
                            	
                            	<div class="col-md-6">
                            	<h2>Products List</h2>	
                            	</div>

                            	<div class="col-md-6 text-right">
                            		<a href="{{  route('product.create') }}" class="btn btn-info"><i class="fa fa-plus"></i>New Product</a>
                            	</div>

                            </div>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive ">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Product ID</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Cost_Price</th>
                                            <th>Price</th>
                                            <th class="text-center" >Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Product ID</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Cost_Price</th>
                                            <th>Price</th>
                                            <th class="text-center" >Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    	@foreach($products as $product)
                                          <tr>
                                            <th>{{$product->id}}</th>
                                            <th>{{$product->tittle}}</th>
                                            <th>{{$product->category->tittle}}</th>
                                            <th>{{$product->cost_price}}</th>
                                            <th>{{$product->price}}</th>
                                            <td class="text-center" >

                                    

                                   <form method="post"  action="{{ route('product.destroy',['product' => $product->id]) }}" >

                                   	<a href="{{route('product.edit',['product' => $product->id]) }}" class="btn btn-primary btn-sm" ><i class="fa fa-edit" ></i></a>

                                    <a href="{{route('product.show',['product' => $product->id]) }}" class="btn btn-warning btn-sm" ><i class="fa fa-eye" ></i></a>

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