<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Niche Admin - Powerful Bootstrap 4 Dashboard and Admin Template</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />
    
    <!-- v4.0.0-alpha.6 -->
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <link rel="stylesheet" href="{{asset("css/font-awesome/css/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/et-line-font/et-line-font.css")}}">
    <link rel="stylesheet" href="{{asset("css/themify-icons/themify-icons.css")}}">
    
    <!-- Chartist CSS -->
    <link rel="stylesheet" href="{{asset("plugins/chartist-js/chartist.min.css")}}">
    <link rel="stylesheet" href="{{asset("plugins/chartist-js/chartist-init.css")}}">
    <link rel="stylesheet" href="{{asset("plugins/chartist-js/chartist-plugin-tooltip.css")}}">
    
<!-- form wizard -->
<link rel="stylesheet" href="{{asset("plugins/formwizard/jquery-steps.css")}}">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript">
   $(function () {
       $('#datetimepicker6').datetimepicker();
       $('#datetimepicker7').datetimepicker({
   useCurrent: false //Important! See issue #1075
   });
       $("#datetimepicker6").on("dp.change", function (e) {
           $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
       });
       $("#datetimepicker7").on("dp.change", function (e) {
           $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
       });
   });
</script>
   
    
    </head>)