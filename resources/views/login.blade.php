<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



<!doctypehtml>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
</head>

<body>
	

<div class="container">
<br/>
<br/>
<br/>
<br/>

<center> <b id="login-name">LOGIN Here </b> </center>>
	
	<div class="row">
		
<div class="col-md-6 col-md-offset-3" id="login">  

<form role="form" action="{{url('/') }}" method="post" enctype="multipart/form-data">
                @if ($errors->any())
                                <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                </div>
                            @endif
<div class="form-group">
<label class="user"> Email  </label>
<div class="input-group">
	<span class="input-group-addon" id="iconn"> <i class="glyphicon glyphicon-user"></i></span>
<input type="email" class="form-control" id="text1" name="email" placeholder="Email" value="">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
</div>
	
</div>

<div class="form-group">
<label class="user"> Password </label>
<div class="input-group">
	<span class="input-group-addon" id="iconn1"> <i class="glyphicon glyphicon-lock"></i></span>
<input type="password" class="form-control" id="text2" name="password" placeholder=" Enter Password" value="">
</div>
</div>

<div class="form-group">

<input type="submit" class="btn btn-success" value="login" style="border-radius:0px;">
<input type="reset" class="btn btn-danger" value="reset" style="border-radius:0px;">

    </div>
    <br/><br/><br/>
    <a href="#" style="color: white; font-size: 15px; float: right; margin-right: 10px;"> Forget Password </a>
    <a href="/reg" style="color: white; font-size: 15px; float: right; margin-right: 10px;"> Register </a>
</form>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
                           <script>

                          $(document).ready(function(){
                                $( "#myform" ).validate({
                                rules: {
                                   
                                    email:{
                                        required: true,
                                        email: true
                                    },
                                    Pass:{
                                        required: true,
                                        minlength: 6
                                    }
                                }
                                });
                            });   
</body>
	</html>