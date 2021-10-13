<!doctype html>
<html>
<head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Login Page</title>
<style>
.custom-login{
height:500px;
padding-top:100px;
}
img.slider-img{
	height:400px !important;
}
.custom-product{
	height:600px;
}
.slider-text{
	background-color: #35443585 !important;
}
.trending-image{
	height:100px;
}
.trending-item{
	float:left;
	width:20%;
}
.trending-wrapper{
	margin:30px;
}
.detail-img{
	height:200px;
}
.cart-list-divider{
	border-bottom: 1px solid #ccc;
	margin-bottom:20px;
	padding-bottom:20px;
}
</style>
</head>

<body>
{{View::make('header')}}
@yield('content')
{{View::make('footer')}}
</body>
</html>