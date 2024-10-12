@extends('layout.main')

@section('content')
<div class="card shadow mb-4">
   <div class="card-body">
   			<h1>New Group</h1>

   			<div class="row row justify-content-md-center">
   				<div class="col-md-6">
   					
   					<form method="post" action="{{ url('/groups') }}" >
   						@csrf
				  <div class="mb-3">
				    <label for="tittle" >User Group Tittle</label>
				    <input type="tittle" name="tittle" class="form-control" id="tittle" placeholder="User Group Tittle">
				    <div id="grouphelp" class="form-text">Tittle of Users Groups.</div>
				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>


   				</div>

   			</div>
	</div>
</div>
@endsection