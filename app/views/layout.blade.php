<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css" type="text/css" media="screen, print" title="no title" charset="utf-8">
    <link rel="stylesheet" href="/css/main.css?<?=time();?>" type="text/css" media="screen, print" title="no title" charset="utf-8">
    <link rel="stylesheet" href="/css/font-awesome.css?<?=time();?>" type="text/css" media="screen, print" title="no title" charset="utf-8">
    <link rel="stylesheet" href="/css/print.css?<?=time();?>" type="text/css" media="print" title="no title" charset="utf-8">
    

    <style>
        @import url(http://fonts.googleapis.com/css?family=Lato:300,400,700);
        @import url(http://fonts.googleapis.com/css?family=Droid+Sans);
    </style>
</head>
<body>

    <div id="stage">
    <div id="sidebar">
      <div id="nav" class="fixedpos">
        @include('nav')
      </div>
    </div>

    <div class="main">
        @yield('content')
    </div>


    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="/bootstrap/js/bootstrap.js"></script>
    <script src="/js/autoresize.jquery.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('textarea').autoResize();
    });

    function fixDiv() {
      var $cache = $('.fixedpos'); 
      if ($(window).scrollTop() > 0 ) 
        $cache.css({'position': 'fixed', 'top': '0px'}); 
      else
        $cache.css({'position': 'relative', 'top': 'auto'});
    }
    $(window).scroll(fixDiv);
    fixDiv();
    </script>

    <br class="clear" />
    </div>
</body>
</html>

