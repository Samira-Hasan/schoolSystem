<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <h1 class="well">Registration Form</h1>
	<div class="col-lg-12 well">
	<div class="row">
		<form role="form" action="{{url('/reg') }}" method="post" enctype="multipart/form-data">
                @if ($errors->any())
                                <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                </div>
                            @endif
							@if(Session::has('message'))
                                <p class="alert {{ Session::get('alert', 'alert-success') }}">{{ Session::get('message') }}</p>
                            @endif
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>First Name</label>
								<input type="text" placeholder="Enter First Name Here.." class="form-control" name="fname">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
							</div>
							<div class="col-sm-6 form-group">
								<label>Last Name</label>
								<input type="text" placeholder="Enter Last Name Here.." class="form-control" name="lname">
							</div>
						</div>					
						<div class="form-group">
							<label>Address</label>
							<textarea placeholder="Enter Address Here.." rows="3" class="form-control" name="address"></textarea>
						</div>	
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>City</label>
								<input type="text" placeholder="Enter City Name Here.." class="form-control" name="city">
							</div>	
							
							<div class="col-sm-4 form-group">
								<label>Zip</label>
								<input type="text" placeholder="Enter Zip Code Here.." class="form-control" name="zip">
							</div>		
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Father's Name</label>
								<input type="text" placeholder="Enter Designation Here.." class="form-control" name="father">
							</div>		
							<div class="col-sm-6 form-group">
								<label>Mother's Name</label>
								<input type="text" placeholder="Enter Company Name Here.." class="form-control" name="mother">
							</div>	
						</div>						
					<div class="form-group">
						<label>Phone Number</label>
						<input type="text" placeholder="Enter Phone Number Here.." class="form-control" name="phone">
					</div>		
					<div class="form-group">
						<label>Email Address</label>
						<input type="email" placeholder="Enter Email Address Here.." class="form-control" name="email">
					</div>	
					<div class="form-group">
						<label>Password</label>
						<input type="password" placeholder="Enter Password." class="form-control" name="password">
					</div>
					<input type="submit" class="btn btn-lg btn-info" value="Submit">				
					</div>
				</form> 
				</div>
	</div>
	</div>