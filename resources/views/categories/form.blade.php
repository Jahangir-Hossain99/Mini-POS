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

   					@if(isset($categories))
   						{!!   Form::model($categories,['route' => ['categories.update',$categories->id], 'method'=> 'put'])    !!}
   					@else
   						{!!   Form::open(['route' => 'categories.store', 'method'=> 'post'])    !!}
   					@endif


   					
   				
				 
				  <div class="col-auto">
					    {{Form::label('tittle', 'Tittle',['class' => 'col-form-label']);}}<span  class="text-danger" >*</span>
					  </div>

					  <div class="col-auto">
					  	 {{Form::text('tittle',Null,['class' => 'form-control', 'id' =>'tittle','placeholder'=>'Category Tittle']);}}
				  </div>

				 
				    
				    <div class="col-auto mt-1 text-right" >
				  <button type="submit" class="btn btn-primary text-right">Submit</button>
				  </div>
				   
				  </div>
				  
				{!! Form::close() !!}

   				</div>

   			</div>
	</div>
</div>

@endsection