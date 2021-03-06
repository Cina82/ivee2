@extends('layouts.back')
@section('contents')
 <div class="content">
	<div class="col-md-12">
 	<div class="card">
        <div class="card-header" data-background-color="orange">
            <h4 class="title">Create New SubCategory</h4>
        </div>
        <div class="card-content">
        @if(Session::has('message'))
		<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
     	@endif
        	<form method="post" action="saveSubCategory">
	        	{{csrf_field()}}
	            <div class="row">
	            	<div class="col-md-12">
	            		<div class="col-md-6">
	            		<div class="form-group label-floating is-empty {{ $errors->has('email') ? ' has-error' : '' }}">
	                		 	<select name="proCategory" id="proCategory" class="selectpicker" required>
                                <option selected>Select Category</option>
                                @foreach($ary as $rows)
                                <option value ="{{$rows->id}}">{{$rows->name}}</option>
                                @endforeach
                                </select>
                              </div>
	            		</div>
	            		<div class="col-md-6">
	                   <div class="form-group label-floating is-empty {{ $errors->has('Name') ? ' has-error' : '' }}">
							<label class="control-label">Name</label>
							<input class="form-control" type="text" name="name" id="name" required> 
							<span class="material-input"></span>
					  	</div>
					  	</div>
	                </div>
	                <div class="col-md-12">
	                	<div class="col-md-6">
						   <div class="form-group label-floating is-empty {{ $errors->has('Priority') ? ' has-error' : '' }}">
								<label class="control-label">Priority</label>
								<input class="form-control" type="text" name="priority" id="Priority" onkeydown='return((event.which >= 48 && event.which <= 57) || (event.which >= 96 && event.which <= 105)) 
   									|| event.which == 8 || event.which == 46' required> 
								<span class="material-input"></span>
						   </div>
	                   </div>
	                   <div class="col-md-6" style="margin-top: 29px">
		                	<div class="checkbox">
								<label>
									<input type="checkbox" name="status" id="status" value="1">
									Status
								</label>
							</div>
						</div>
	                </div>
	                 
	                <button type="submit" class="btn btn-success pull-right">Save<div class="ripple-container"></div>
					</button>
			</form>
	    </div>
	                        
	</div>
</div>
</div>
</div>
@endsection
@section('javascript')
<script src="http://demos.creative-tim.com/material-kit-pro/assets/js/bootstrap-selectpicker.js" type="text/javascript"></script>
@endsection