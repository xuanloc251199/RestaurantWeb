<!DOCTYPE html>
<html>

<head>
	<title>Trang chu</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('CSS/CHITIETDD.css') }}">
	<script>
		if ( window.history.replaceState ) 
		{
			window.history.replaceState( null, null, window.location.href );
		}
	</script>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('CSS/SANPHAM.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('CSS/TOP.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
	<link rel="stylesheet" href="CSS/w3.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('CSS/TRANGCHU1.css') }}">


	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<style type="text/css">
  	.container-fluid{
  		background-color: #630118;
  	}

  	.navbar-brand{
  		width: 200px;
      height: auto;
  		
  	}

  	
  	.navbar-nav li{
  		width: 150px;
      height: auto;
      font-size: 16px;
  	}

    .navbar-nav li a{
      padding-top: 28px;
    }



  	.input-group{
  		width: 350px; 
      margin-top: 10px;
      margin-left: 100px;
  	}
    

    .dropdown:hover {
      background-color: #630118;
    }

    .logo{
      display: block;
      margin: auto;
      width: 60%;
    }

  
  </style>


</head>
<body>

<nav class="navbar navbar-inverse" >
  <div class="container-fluid" >
    <div class="navbar-header" >
      <a class="navbar-brand" href="{{URL::to('trangchu')}}"><img class="logo" src="{{ URL::asset('ANHTRANGCHU/logoH.png') }}" ></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{URL::to('trangchu')}}">Trang chủ</a></li>
      <li><a href="{{URL::to('monan')}}">Thể Loại</a></li>
      <li><a href="{{URL::to('gioithieu')}}">Giới thiệu</a></li>
      
    </ul>


    <form class="navbar-form navbar-left" action="{{ url('Monan/TimKiem')}}" method="post">
      <div class="input-group">
      	<input type="hidden" name="_token" value="{{csrf_token()}}">
        <input class="form-control" name="TimKiem" type="text" placeholder="Tìm Kiếm..." >
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
  
</nav>


	<form method="post">
		@csrf 
		@yield('menu')
	</form>
</body>
</html>



