<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8" />
		<title>
			@section('title')
			Laravel 4 Sample Site
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
	    <link rel="stylesheet" href="{{asset('assets/js/select2/select2.css')}}">

		<style>
        body {
            padding: 60px 0;
        }
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
		<div class="navbar navbar-default navbar-inverse navbar-fixed-top">
			 <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
						<li {{ (Request::is('/') ? ' class="active"' : '') }}><a href="{{{ URL::to('') }}}">Home</a></li>
						<li {{ (Request::is('/hoxfamily') ? ' class="active"' : '') }}><a href="{{{ URL::to('/hoxfamily') }}}">Families</a></li>
					</ul>

                    <ul class="nav navbar-nav pull-right">
                        @if (Auth::check())
                        @if (Auth::user()->hasRole('admin'))
                        <li><a href="{{{ URL::to('admin') }}}">Admin Panel</a></li>
                        @endif
                        <li><a href="{{{ URL::to('user') }}}">Logged in as {{{ Auth::user()->username }}}</a></li>
                        <li><a href="{{{ URL::to('user/logout') }}}">Logout</a></li>
                        @else
                        <li {{ (Request::is('user/login') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/login') }}}">Login</a></li>
                        <li {{ (Request::is('user/create') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/create') }}}">{{{ Lang::get('site.sign_up') }}}</a></li>
                        @endif
                    </ul>
					<!-- ./ nav-collapse -->
				</div>
			</div>
		</div>
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
		</div>
		<!-- ./wrap -->


	    <div id="footer">
	      <div class="container">
	        <p class="muted credit">Department of Bioinformatics <a href="#">Quaid-e-Azam University</a>.</p>
	      </div>
	    </div>

		<!-- Javascripts
		================================================== -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
	    <script src="{{asset('assets/js/bootstrap3-typeahead.js')}}"></script>
	    <script src="{{asset('assets/js/wysihtml5/wysihtml5-0.3.0.js')}}"></script>
	    <script src="{{asset('assets/js/wysihtml5/bootstrap-wysihtml5.js')}}"></script>
	    <script src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
	    <script src="{{asset('assets/js/datatables-bootstrap.js')}}"></script>
	    <script src="{{asset('assets/js/datatables.fnReloadAjax.js')}}"></script>
	    <script src="{{asset('assets/js/jquery.colorbox.js')}}"></script>
	    <script src="{{asset('assets/js/prettify.js')}}"></script>
	    <script src="{{asset('assets/js/select2/select2.js')}}"></script>

	    <script type="text/javascript">
	    	$('.wysihtml5').wysihtml5();
	        $(prettyPrint);
	        $("#family").select2({
	        		placeholder: "Select a Family",
	        		width: 'resolve',
	        		allowClear: true,
        	}).on("change", function(e) { alert('test'); });

        	
	     	//$("input").typeahead({ source:["GeneFamilyName","Amiloride-sensitive cation channel, neuronal","Anion exchanger family SLC4A ( AE )","ATP binding cassette","ATP synthase, H+ transporting, mitochondrial F0 complex","ATPase, H+ transporting, lysosomal V0 Subunit A","Bromodomain adjacent to zinc finger domain","Calcium binding and coiled-coil domain","Calcium channel, voltage-dependent, beta subunit","CAP-GLY domain containing linker protein","Carbohydrate sulfotransferase","Chaperonin containing T-complex polypeptide 1","Chromobox homolog","Crystallin family","Cyclin-dependent kinase","ERBB receptor protein-tyrosine kinase","Fbrillar collagen family","FK506 binding protein","Formin-like","Frizzled","GLI zinc-finger protein family","Growth factor receptor-bound protein","Hedgehog family","Heterogeneous nuclear ribonucleoprotein A","Histone deacetylase","Inhibin","Inhibitor of growth family","Insulin-like growth factor-binding protein","Integrin alpha family","Integrin beta chain family","Methyltransferase","MLX interacting protein","Myosin 1","Myosin light chain","NAC alpha domain proteins","Neurexophilin ","Neurogenic differentiation","Nuclear factor (erythroid-derived 2)","ORM1-like","Oxysterol binding protein-like","Phosphodiesterase 1, Calmodulin-dependent","Pleckstrin homology domain containing, family A","Potassium inwardly-rectifying channel, subfamily J","Potassium voltage-gated channel, subfamily H","Protein kinase gamma subunit","Protein phosphatase 1, regulatory (inhibitor)subunit","Pyruvate dehydrogenase kinase","Rap guanine nucleotide exchange factor","Receptor (G protein-coupled) activity modifying protein","Rho family GTPase","Ring finger protein family","Secernin","Solute carrier family  6","Solute carrier family 38A","Sorting nexin","Sp1 c2h2-type zinc-finger protein family","Suppressor of cytokine signaling","Tensin","Transmembrane protein 106","Vesicle-associated membrane protein ","WAS/WASL interacting protein family","Zinc finger protein 386","Zinc finger protein, subfamily 1A"] });
		</script>

        @yield('scripts')
	</body>
</html>
