<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8" />
		<title>
			@section('title')
			VGA Database
			@show
		</title>
		@section('meta_keywords')
		<meta name="keywords" content="your, awesome, keywords, here" />
		@show
		@section('meta_author')
		<meta name="author" content="Jon Doe" />
		@show
		@section('meta_description')
		<meta name="description" content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei." />
                @show
		<!-- Mobile Specific Metas
		================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- CSS
		================================================== -->
       <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
	    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-theme.min.css')}}">
	    <link rel="stylesheet" href="{{asset('assets/css/wysihtml5/prettify.css')}}">
	    <link rel="stylesheet" href="{{asset('assets/css/wysihtml5/bootstrap-wysihtml5.css')}}">
	    <link rel="stylesheet" href="{{asset('assets/css/datatables-bootstrap.css')}}">
	    <link rel="stylesheet" href="{{asset('assets/css/colorbox.css')}}">
	    <link rel="stylesheet" href="{{asset('assets/css/selectize.css')}}">
	    <link rel="stylesheet" href="{{asset('assets/css/cyto-chromosome.style.css')}}">
	     <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
	     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	     <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css">
	     <link rel="stylesheet" href="{{asset('assets/css/theme.css')}}">
	     <link rel="stylesheet" href="{{asset('assets/css/submenu.css')}}">

		
		<style>
        
		@section('styles')
		@show
		</style>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Favicons
		================================================== -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}}">
		<link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}">
	</head>

<body>
<!-- To make sticky footer need to wrap in a div -->
<div id="wrap">
	<!-- Navbar -->
	<nav class="navbar  navbar-default navbar-static-top ">
		<div class="container-fluid">
                <div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                  		<div id="logo-title">
                     		 <div id="logo"><a href="{{{ URL::to('') }}}" title="Home" rel="home"><img src="{{asset('assets/img/w.png')}}" alt="Home" id="logo-image"></a></div>
                        </div> 
                </div>
               
     			<div class="collapse navbar-collapse navbar-ex1-collapse">
         			<ul class="nav navbar-nav nav-tabs">
								<li ><a href="{{{ URL::to('') }}}">Home</a></li>
								
								<li class="dropdown">
                      				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About <span class="caret"></span></a>
					                    	<ul class="dropdown-menu" role="menu">
						                       <li><a href="{{{ URL::to('/about') }}}">VGA</a></li>
						                        <li class="divider"></li>
						                        <li><a href="{{{ URL::to('/lab') }}}">CEGRG</a></li>
						                    </ul>
						                    
								</li>
								<li ><a href="{{{ URL::to('/hoxfamily') }}}">Browse</a></li>


        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="menu" aria-expanded="false"> Human Paralogy Blocks <span class="caret"></span></a>
    		<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              
                <li class="dropdown-submenu">
                  <a tabindex="-1" href="#">HSA:2/7/12/17 (HOX-cluster paralogon)</a>
	                <ul class="dropdown-menu">
		                 <li><a tabindex="-1" href="{{{ URL::to('hox-info') }}}"> HOX Info</a></li>
						 <li><a tabindex="-1" href="{{{ URL::to('hox-synteny') }}}">Synteny</a></li>
						 <li><a tabindex="-1" href="{{{ URL::to('hox-time-period') }}}">Time Period</a></li>
						 <li><a tabindex="-1" href="{{{ URL::to('hox-co-duplicated-groups') }}}">Co-duplicated groups</a></li>
		                  <li><a tabindex="-1" href="#">Trees</a></li>
		                  <li><a tabindex="-1" href="{{{ URL::to('/find') }}}">Sequence Files</a></li>
						  <li><a tabindex="-1" href="{{{ URL::to('summary') }}}">Summary Table</a></li>
	                </ul>
                </li>
                <li class="divider"></li>
                <li class="dropdown-submenu">
                  <a tabindex="-1" href="#">HSA:1/2/8/20</a>
	                <ul class="dropdown-menu">
		                 <li><a tabindex="-1" href="{{{ URL::to('hsa12820') }}}">Info</a></li>
						 <li><a tabindex="-1" href="{{{ URL::to('hsa12820-synteny') }}}">Synteny</a></li>
						 <li><a tabindex="-1" href="{{{ URL::to('hsa12820-time-period') }}}">Time Period</a></li>
						 <li><a tabindex="-1" href="{{{ URL::to('hsa12820-topology') }}}">Co-duplicated groups</a></li>
		                 <li><a tabindex="-1" href="{{{ URL::to('hsa12820-phylogenetic-trees') }}}">Trees</a></li>
		                  <li><a tabindex="-1" href="{{{ URL::to('/find') }}}">Sequence Files</a></li>
						  <li><a tabindex="-1" href="{{{ URL::to('summary2012') }}}">Summary Table</a></li>
	                </ul>
                </li>
                <li class="divider"></li>
                <li class="dropdown-submenu">
                  <a tabindex="-1" href="#">HSA:4/5/8/10 (FGFR-cluster paralogon)</a>
	                <ul class="dropdown-menu">
		                 <li><a tabindex="-1" href="{{{ URL::to('hsa12820') }}}"> FGFR Info</a></li>
						 <li><a tabindex="-1" href="{{{ URL::to('hsa12820-synteny') }}}">Synteny</a></li>
						 <li><a tabindex="-1" href="{{{ URL::to('hsa12820-time-period') }}}">Time Period</a></li>
						 <li><a tabindex="-1" href="{{{ URL::to('hsa12820-topology') }}}">Co-duplicated groups</a></li>
		                 <li><a tabindex="-1" href="{{{ URL::to('hsa12820-phylogenetic-trees') }}}">Trees</a></li>
		                  <li><a tabindex="-1" href="{{{ URL::to('/find') }}}">Sequence Files</a></li>
						  <li><a tabindex="-1" href="{{{ URL::to('summaryfgfr') }}}">Summary Table</a></li>
	                </ul>
                </li>
            </ul>
        </li>

								
                   				
         						<li class="dropdown">
	         					 	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Useful Links <span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
									
									 <li><a href="http://www.ncbi.nlm.nih.gov/">NCBI</a></li>
	           							  <li><a href="http://www.genecards.org/">GeneCards</a></li>
	           							 <li><a href="http://www.ensembl.org/index.html">Ensembl</a></li>
	           							  <li><a href="http://www.genenames.org/">HGNC</a></li>
	           							   <li><a href="http://www.uniprot.org/">UniProt</a></li>
	           							   <li><a href="http://www.megasoftware.net/">MEGA</a></li>
	           							  <li><a href="https://genome.ucsc.edu/">UCSC</a></li>
	           							   <li><a href="http://source-search.princeton.edu/">SOURCE</a></li>
	           							   <li><a href="http://jgi.doe.gov/">JGI</a></li>
	            						 
	         						</ul>
         						</li>
         		                <li class="dropdown">
                      				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Search <span class="caret"></span></a>
					                    	<ul class="dropdown-menu" role="menu">
						                       <li><a href="{{{ URL::to('/find') }}}">HSA:2/7/12/17 (HOX-cluster paralogon) Search</a></li>
						                        <li class="divider"></li>
						                        <li><a href="{{{ URL::to('/fetch') }}}">HSA:1/2/8/20 Search</a></li>
						                        <li class="divider"></li>
						                        <li><a href="{{{ URL::to('/fetchfgfr') }}}">HSA:4/5/8/10 Search</a></li>
						                    </ul>
						                    
								</li>
			                        <li> 
			                         	<ul class="nav navbar-nav nav-tabs nav-pull-right ">
			                            	<li><a href="{{{ URL::to('admin') }}}">Admin</a></li>
			                          	</ul> 
			                        </li>
				</div>
			</div>
      </nav>


		 
		<!-- ./ navbar -->

		<!-- Container -->
		<div class="container">
			<!-- Notifications -->
			@include('notifications')
			<!-- ./ notifications -->
			<!-- Content -->
			@yield('content')
			<!-- ./ content -->
		</div>
		
		<!-- ./ container -->
		<!-- the following div is needed to make a sticky footer -->
		<div id="push"></div>
		
		<!-- ./wrap -->


	    <div id="footer">

	      <div class="container">
	       
	      </div>

	    </div>

	    <!-- Start of footer-->
	<footer class="site-footer ">
	    <div class="container">
	    	<div class="row">
	      		<p class="muted credit"><a href="http://ncb.qau.edu.pk/">National Center for Bioinformatics <a href="http://ncb.qau.edu.pk/">Quaid-i-Azam University</a>.</p>
				<div class="bottom-footer">	
					<div class="col-md-2">@ Copyright HOX 2015</div>
					<div class="col-md-10">
						<ul class="footer-nav"> 		
							<li><a href="http://twitter.com" onclick="_gaq.push(['_trackEvent', 'exit', 'footer', 'Twitter']);"><i class="fa fa-twitter"></i> Twitter</a></li>	
							<li><a href="{{{ URL::to('/faqs') }}}" onclick="_gaq.push(['_trackEvent', 'exit', 'footer', 'FAQs']);"><i class="fa fa-github"></i> FAQs</a></li>
							<li><a href="{{{ URL::to('/contact') }}} "><span class="glyphicon glyphicon-phone-alt"> Contact</a></li> 
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	    <!-- End of footer-->

</div>	    

		<!-- Javascripts
		================================================== -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
	    <script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
	    <script src="{{asset('assets/js/bootstrap3-typeahead.js')}}"></script>
	    <script src="{{asset('assets/js/wysihtml5/wysihtml5-0.3.0.js')}}"></script>
	    <script src="{{asset('assets/js/wysihtml5/bootstrap-wysihtml5.js')}}"></script>
	    <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
	    <script src="{{asset('assets/js/datatables-bootstrap.js')}}"></script>
	    <script src="{{asset('assets/js/datatables.fnReloadAjax.js')}}"></script>
	    <script src="{{asset('assets/js/jquery.colorbox.js')}}"></script>
	    <script src="{{asset('assets/js/prettify.js')}}"></script>
	    <script src="{{asset('assets/js/selectize.js')}}"></script>
	    <script src="{{asset('assets/js/ekko-lightbox-min.js')}}"></script>
	    <script src="{{asset('assets/js/lightbox.js')}}"></script>
        <script src="{{asset('assets/js/cyto-chromosome-vis.js')}}"></script>
        <script src="{{asset('assets/js/jquery-ui.js')}}"></script>
	    <script src="{{asset('assets/js/script.js')}}"></script>


	 
	    <script type="text/javascript">
	    	
	     $(document).delegate('*[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', 'click', function(event) {
                    event.preventDefault();
                    return $(this).ekkoLightbox({
                        onShown: function() {
                            if (window.console) {
                                return console.log('Checking our the events huh?');
                            }
                        },
						onNavigate: function(direction, itemIndex) {
                            if (window.console) {
                                return console.log('Navigating '+direction+'. Current item: '+itemIndex);
                            }
						}
                    });
                });


	    	$('.wysihtml5').wysihtml5();
	        $(prettyPrint);
	        var Chromosome = require('Chromosome');

            var c12 = new Chromosome({
                target: "#c12",
		segment: "12",
		includeAxis: false,
		width: 1000
	    }).draw(function(){
	    	$('[data-toggle="popover"]').popover({
			'trigger':'hover'
				,'container': 'body'
				,'placement': 'right'
				,'white-space': 'nowrap'
				,'html':'true'
		});

	    });

	
            var c2 = new Chromosome({
                target: "#c2",
		segment: "2",
		includeAxis: false,
		width: 1000
	    }).draw(function(){
	    	$('[data-toggle="popover"]').popover({
			'trigger':'hover'
				,'container': 'body'
				,'placement': 'right'
				,'white-space': 'nowrap'
				,'html':'true'
		});

	    });
            var c7 = new Chromosome({
                target: "#c7",
		segment: "7",
		includeAxis: false,
		width: 1000
	    }).draw(function(){
	    	$('[data-toggle="popover"]').popover({
			'trigger':'hover'
				,'container': 'body'
				,'placement': 'right'
				,'white-space': 'nowrap'
				,'html':'true'
		});

	    });
            var c17 = new Chromosome({
                target: "#c17",
		segment: "17",
		includeAxis: false,
		width: 1000
	    }).draw(function(){
	    	$('[data-toggle="popover"]').popover({
			'trigger':'hover'
				,'container': 'body'
				,'placement': 'right'
				,'white-space': 'nowrap'
				,'html':'true'
		});

	    });
	        
	     </script>

        @yield('scripts')
	</body>
</html>
