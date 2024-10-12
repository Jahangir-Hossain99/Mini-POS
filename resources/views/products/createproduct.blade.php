@extends('layout.main')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="card shadow mb-4">
   <div class="card-body">
   			<h1>{{ $headline }}</h1>

   			<div class="row row justify-content-md-center">
   				<div class="col-md-8">

   					@if(isset($product))
   						{!!   Form::model($user,['route' => ['product.update',$user->id], 'method'=> 'put'])    !!}
   					@else
   						{!!   Form::open(['route' => 'product.store', 'method'=> 'post'])    !!}
   					@endif


   					
   				
				  <div class="mb-3">

				  	<div class="col-auto">
					    {{Form::label('Product_group', 'product Group',['class' => 'col-form-label']);}}<span  class="text-danger" >*</span>
					  </div>

					  <div class="col-auto">
					  	 {{Form::select('category_id',$categories,Null,['class'=>'form-control','id'=>'group','placeholder'=>'Select Group ']);}}
				  </div>

				  <div class="col-auto">
					    {{Form::label('name', 'Product Name',['class' => 'col-form-label']);}}<span  class="text-danger" >*</span>
					  </div>

					  <div class="col-auto">
					  	 {{Form::text('name',Null,['class' => 'form-control', 'id' =>'name','placeholder'=>'Name']);}}
				  </div>

				  <div class="col-auto">
					    {{Form::label('email', 'Description',['class' => 'col-form-label']);}}   <span  class="text-danger" >*</span>
					  </div>


					  <div class="col-auto">
					  	 {{Form::textarea('email',Null,['class' => 'form-control', 'id' =>'name','placeholder'=>'E-mail']);}}
				  </div>

				  <div class="col-auto">
					    {{Form::label('phone', 'Cost_Price',['class' => 'col-form-label']);}}
					  </div>

					  <div class="col-auto">
					  	 {{Form::text('phone',Null,['class' => 'form-control', 'id' =>'name','placeholder'=>'Phone Number']);}}
				  </div>

				  <div class="col-auto">
					    {{Form::label('address', 'Price',['class' => 'col-form-label']);}}
					  </div>

					  <div class="col-auto">
					  	 {{Form::text('address',Null,['class' => 'form-control', 'id' =>'address','placeholder'=>'Address']);}}
				  </div>
				    
				    
				   
				  </div>
				  <div class=" text-right" >
				  <button type="submit" class="btn btn-primary text-right">Submit</button>
				  </div>
				{!! Form::close() !!}

   				</div>

   			</div>
	</div>
</div>

@endsection