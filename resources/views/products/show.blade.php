@extends('layout.main')

@section('content')

<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row clearfix page_header">
                                
                                <div class=" d-inline-block col-md-4 ">
                                    <a href="{{  route('product.index') }}" class="btn btn-primary "><i class="fas fa-arrow-left"></i> Back</a>
                                </div>

                                <div class=" d-inline-block col-md-8 text-right">
                                    <a href="{{  route('product.create') }}" class="btn btn-info"><i class="fa fa-plus"></i>New Product</a>
                                    
                                </div>

                            </div>
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weighted-bold text-primary" > {{ $products->title }} </h6>
                            </div>
                        </div>
                        <div class="card-body">
                            
                            <table class="table" >

                              

                                <tr>
                                    <td>Title</td>
                                    <td> {{$products->tittle }} </td>
                                </tr>

                                <tr>
                                    <td>Categroy</td>
                                    <td> {{$products->category->tittle }} </td>
                                </tr>

                                <tr >
                                    <td>Description</td>
                                    <td> {{ $products->description }} </td>
                                </tr>

                                <tr>
                                    <td>Cost_Price</td>
                                    <td> {{ $products->cost_price }} </td>
                                </tr>

                                <tr>
                                    <td>Price</td>
                                    <td> {{ $products->price }} </td>
                                </tr>

                            </table>

                    </div>

@endsection

