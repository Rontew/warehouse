<!DOCTYPE html>
<html>
<head>
	    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Sanchez" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(function() {
    $( "#date").datepicker();
  	});
    </script>
    <script type="text/javascript">
      $(function() {
    $( "#taulu").datepicker();
  	});
    </script>


    




	<title><?php echo $__env->yieldContent('title'); ?></title>
</head>

<body>
	<nav class="navbar navbar-inverse navbar-static-top">
    <div class = "container">
        
        <div class="navbar-header">
                <a class="navbar-brand" href="#">WWW2016</a>

            <button class = "navbar-toggle" data-toggle = "collapse" data-target =".navHeaderCollapse">
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
            </button>

        </div>
            <div class = "collapse navbar-collapse navHeaderCollapse">

                <ul class = "nav navbar-nav navbar-right">
                        <li><a href = "#" class="sliding-middle-out">Etusivu</a> </li>
                        <li><a href = "#" class="sliding-middle-out">jotain</a> </li>
                        <li><a href = "#" class="sliding-middle-out">jotain</a> </li>
                </ul>
            </div>
    </div>
</nav>
	<?php echo $__env->yieldContent('body'); ?>
	
</body>
</html>
