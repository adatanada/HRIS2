<html lang="en">
<head>
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <title>HRIS</title>
            <meta name="viewport" content="width=device-width, initial-scale=1"> 
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600" > 
            <link rel="stylesheet" href="{{URL::asset('assets/css/bundle.css')}}">
    </head>
    <body class="o-page">  
    
    @yield('layout')

<script src="https://xsodia.space/payroll/docs/assets/js/bundle.js"></script>
<script src="http://xsodia.space/payroll/assets/js/jquery.js"></script>
<script src="http://xsodia.space/payroll/assets/js/main.min3661.js?v=2.0"></script>
 <script src="http://xsodia.space/payroll/assets/js/clock.js"></script>
 <script type="text/javascript">
            $('body .confirm').click(function(){
                if(window.confirm("Are you sure you want to proceed ?")){
                    return true;
                } 
                return false;
            });
        </script>
        
        
                
        <style>
	.alert-card{
		position: fixed;
		z-index: 100;
		width: 30%;
		top: 2%;
		right: 1%;
	}
</style>

</body>
</html>