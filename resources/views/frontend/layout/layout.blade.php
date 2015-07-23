<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{!! $settings['site_title'] or "Grace Manager - Multi Language Content Managment System" !!}</title>
    <meta name="description" content="{!! isset($meta_description) ? $meta_description : ($settings['meta_description']) !!}">
    <meta name="keywords" content="{!! isset($meta_keywords) ? $meta_keywords : ($settings['meta_keywords']) !!}">
    <meta name="author" content="Phillip Madsen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {!! HTML::script('assets/js/jquery.2.0.3.js') !!}
    {!! HTML::style("frontend/css/bootstrap.min.css") !!}
    {!! HTML::style("frontend/css/font-awesome.min.css") !!}
    {!! HTML::style("frontend/css/prettyPhoto.css") !!}
    {!! HTML::style("frontend/css/animate.css") !!}
    {!! HTML::style("frontend/css/main.css") !!}
    
    <!--[if lt IE 9]>
    {!! HTML::script("frontend/js/html5shiv.js") !!}
    {!! HTML::script("frontend/js/respond.min.js") !!}
    <![endif]-->
    <link rel="shortcut icon" href="{!! url('favicon.ico') !!}">
    <script type="text/javascript">
    
    </script>
</head><!--/head-->
<body>
@include('frontend/layout/menu')
 
@yield('content')
@include('frontend/layout/footer')
{!! HTML::script("frontend/js/bootstrap.min.js") !!}
{!! HTML::script("frontend/js/jquery.prettyPhoto.js") !!}
{!! HTML::script("frontend/js/main.js") !!}
</body>
</html>
