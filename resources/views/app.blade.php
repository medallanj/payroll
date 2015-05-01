
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>deiform - Free CSS Template by ZyPOP</title>


<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/styles.css" type="text/css" />
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">


<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>

<script type="text/javascript" src="js/custom.js"></script>

<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />

<!--
deiform, a free CSS web template by ZyPOP (zypopwebtemplates.com/)

Download: http://zypopwebtemplates.com/

License: Creative Commons Attribution
//-->
</head>
<body>
	<div id="container" class="width">

    <header> 
	<div class="width">

    		<h1><a href="/">deiform</a></h1>

		<nav>
	
    			<ul class="sf-menu dropdown">

			
        			<li class="selected"><a href="{{ URL::to('/')}}">Home</a></li>

            			<li>

					<a href="examples.html">Style examples</a>
            			
					<ul>
                				<li><a href="three-column.html">Three Column</a></li>
						<li><a href="one-column.html">One Column</a></li>
                    				<li><a href="#">Another link</a></li>
                			</ul>

            			</li>

	     			<li><a href="#">Services</a></li>
            
				<li>

					<a href="#">Products</a>
            				
					<ul>
                				<li><a href="#">Product One</a></li>
                   				<li><a href="#">Product Two</a></li>
                   				<li><a href="#">Product Three</a></li>
                			</ul>

            			</li>
            
				<li><a href="{{URL::to('contact')}}">Contact</a></li>
       			</ul>

			
			<div class="clear"></div>
    		</nav>
       	</div>

	<div class="clear"></div>

       
    </header>
	@yield('content')
</div>
    <footer>
        <div class="footer-content width">
            <ul>
            	<li><h4>Proin accumsan</h4></li>
                <li><a href="{{ URL::to('about') }}">Rusdfdsfsfdtrum nulla a ultrices</a></li>
                <li><a href="#">Blandit elementum</a></li>
                <li><a href="#">Proin placerat accumsan</a></li>
                <li><a href="#">Morbi hendrerit libero </a></li>
                <li><a href="#">Curabitur sit amet tellus</a></li>
            </ul>
            
            <ul>
            	<li><h4>Condimentum</h4></li>
                <li><a href="#">Curabitur sit amet tellus</a></li>
                <li><a href="#">Morbi hendrerit libero </a></li>
                <li><a href="#">Proin placerat accumsan</a></li>
                <li><a href="#">Rutrum nulla a ultrices</a></li>
                <li><a href="#">Cras dictum</a></li>
            </ul>

 	    <ul>
                <li><h4>Suspendisse</h4></li>
                <li><a href="#">Morbi hendrerit libero </a></li>
                <li><a href="#">Proin placerat accumsan</a></li>
                <li><a href="#">Rutrum nulla a ultrices</a></li>
                <li><a href="#">Curabitur sit amet tellus</a></li>
                <li><a href="#">Donec in ligula nisl.</a></li>
            </ul>
            
            <ul class="endfooter">
            	<li><h4>Suspendisse</h4></li>
                <li>Integer mattis blandit turpis, quis rutrum est. Maecenas quis arcu vel felis lobortis iaculis fringilla at ligula. Nunc dignissim porttitor dolor eget porta. <br /><br />

<div class="social-icons">

<a href="#"><i class="fa fa-facebook fa-2x"></i></a>

<a href="#"><i class="fa fa-twitter fa-2x"></i></a>

<a href="#"><i class="fa fa-youtube fa-2x"></i></a>

<a href="#"><i class="fa fa-instagram fa-2x"></i></a>

</div>

</li>
            </ul>
            
            <div class="clear"></div>
        </div>
        <div class="footer-bottom">
            <p>&copy; YourSite 2014. <a href="http://zypopwebtemplates.com/">Free CSS Web Templates</a> by ZyPOP</p>
         </div>
    </footer>
</body>
</html>
