<!DOCTYPE html>
<html lang="en">
<div id="container">
	<div id="header">
	<head>
		

		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8" />
		<title>
			@section('title')
			PAHG Database
			@show
		</title>
		
		<link rel="shortcut icon" 
              type="image/png" 
              href=" http://pahg.qau.edu.pk/w.ico" />
		@section('meta_keywords')
		<meta name="keywords" content="Database about Human Paralogy Blocks" />
		@show
		@section('meta_author')
		<meta name="Rozeena Arif" content="Phylogenomic analysis of Human Genome" />
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





		<!-- <link rel="shortcut icon" href="{{asset('assets/img/w.png')}}"> --> 
	</head>
</div>
<div id="body">
	<body style="background-image: url('assets/img/background7.png'); background-color: white;  background-position: 50% 50%; background-attachment: fixed;">
		
            <!-- To make sticky footer need to wrap in a div -->
		<div id="wrap">
			<!-- Navbar -->
			<div class="header_wrapper">
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
											<li><a href="{{{ URL::to('/about') }}}">About</a></li>
											<li ><a href="{{{ URL::to('/hoxfamily') }}}">Browse</a></li>
											<li class="dropdown">
				         						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Duplication Mechanism  <span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu" align="left">
				           							 <li><a href="{{{ URL::to('introduction') }}}">Introduction</a></li>
				           							 <li class="divider"></li>
				            						 <li><a href="{{{ URL::to('independent-gene-duplications') }}}">Independent Gene Duplications</a></li>
				            						 <li class="divider"></li>
				           							 <li><a href="{{{ URL::to('segmental-duplication') }}}">Segmental Duplications</a></li>
				           							 <li class="divider"></li>
				           							 <li><a href="{{{ URL::to('whole-genome-duplications-during-vertebrate-history-2r') }}}">Whole Genome Duplications</a></li>
				           							 <li class="divider"></li>
				           							 <li><a href="{{{ URL::to('piecemeal-theory') }}}">Piecemeal Theory</a></li>
                                                     <li class="divider"></li>
				           							 <li><a href="{{{ URL::to('Frizzled-Family') }}}">Frizzled Family</a></li>
				           						</ul>
			         						</li>
									        </li>
							        <li class="dropdown">
							            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="menu" aria-expanded="false"> Human Paralogy Blocks <span class="caret"></span></a>
							    		<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu" align="left">
							                <li class="dropdown-submenu">
							                  	<a tabindex="-1" href="#">HSA:2/7/12/17 (HOX-cluster paralogon)</a>
								                <ul class="dropdown-menu" align="left">
									                 <li><a tabindex="-1" href="{{{ URL::to('hox-hsa-271217-paralogon-information') }}}"> HOX Paralogon Information</a></li>
									                 <li class="divider"></li>
									                 <li><a tabindex="-1" href="{{{ URL::to('/hoxfamilydata') }}}">  Table: List of families analysed</a></li>
													 <li class="divider"></li>
													 <li><a tabindex="-1" href="{{{ URL::to('synteny-of-hox-paralogon') }}}"> Synteny Analysis</a></li>
													 <li class="divider"></li>
													 <li><a tabindex="-1" href="{{{ URL::to('age-estimates-of-duplications-hox-paralogon') }}}">  Age estimates of duplications</a></li>
													 <li class="divider"></li>
													 <li><a tabindex="-1" href="{{{ URL::to('hox-paralogon-phylogenomic-analysis') }}}"> Phylogenomic Analysis</a></li>
													 <li class="divider"></li>
													 <li><a tabindex="-1" href="{{{ URL::to('hox-paralogon-co-duplicated-groups') }}}"> Estimation of Co-duplication events</a></li>
													 <li class="divider"></li>
													 <li><a tabindex="-1" href="{{{ URL::to('summary') }}}"> Table: Duplication Summary</a></li>
									                 <li class="divider"></li>
									                  <li class="dropdown-submenu">
	                      				
							                  	<a tabindex="-1" href="#"> HOX Paralogon Search</a>
								                <ul class="dropdown-menu">
									                 <li><a tabindex="-1" href="{{{ URL::to('/find') }}}"> Search via Family</a></li>
									                 <li class="divider"></li>
									                 <li><a tabindex="-1" href="{{{ URL::to('/searchseq') }}}"> Search via Sequence</a></li> 
								                </ul>
							       
									       
			        						</li>
										                </ul>
									                </li>
									                <li class="divider"></li>
									                <li class="dropdown-submenu">
									                  <a tabindex="-1" href="#">HSA:4/5/8/10 (FGFR-cluster paralogon)</a>
										                <ul class="dropdown-menu" align="left">
											                 <li><a tabindex="-1" href="{{{ URL::to('fgfr-hsa-45810-paralogon-information') }}}"> FGFR Paralogon Information</a></li>
											                 <li class="divider"></li>
											                 <li><a tabindex="-1" href="{{{ URL::to('/fgfrfamilydata') }}}"> Table: List of families analysed</a></li>
															 <li class="divider"></li>
															 <li><a tabindex="-1" href="{{{ URL::to('synteny-of-fgfr-paralogon') }}}"> Synteny Analysis</a></li>
															 <li class="divider"></li>
															 <li><a tabindex="-1" href="{{{ URL::to('age-estimates-of-duplications-fgfr-paralogon') }}}"> Age estimates of duplications</a></li>
											                 <li class="divider"></li>
											                 <li><a tabindex="-1" href="{{{ URL::to('fgfr-paralogon-phylogenomic-analysis') }}}"> Phylogenomic Analysis</a></li>
															 <li class="divider"></li>
															 <li><a tabindex="-1" href="{{{ URL::to('fgfr-paralogon-co-duplicated-groups') }}}"> Estimation of Co-duplication events</a></li>
															 <li class="divider"></li>
															  <li><a tabindex="-1" href="{{{ URL::to('summaryfgfr') }}}"> Table: Duplication Summary</a></li>
											                 <li class="divider"></li>
											                  <li class="dropdown-submenu">
												                  	<a tabindex="-1" href="#"> FGFR Paralogon Search</a>
													                <ul class="dropdown-menu">
														                 <li><a tabindex="-1" href="{{{ URL::to('/fetchfgfr') }}}"> Search via Family</a></li>
														                  <li class="divider"></li>
														                 <li><a tabindex="-1" href="{{{ URL::to('/fetchfgfrviaseq') }}}"> Search via Sequence</a></li> 
													                </ul>
			        										</li>
										                </ul>
									                </li>
									                <li class="divider"></li>
									                <li class="dropdown-submenu">
									                  	<a tabindex="-1" href="#"> HSA:1/2/8/20</a>
										                <ul class="dropdown-menu" align="left">
											                 <li>  <a tabindex="-1" href="{{{ URL::to('hsa12820-paralogon-information') }}}"> HSA:1/2/8/20 Paralogon Information</a></li>
											                  <li class="divider"></li>
											                 <li><a tabindex="-1" href="{{{ URL::to('/paralogonfamilydata') }}}"> Table: List of families analysed</a></li>
															  <li class="divider"></li>
															 <li><a tabindex="-1" href="{{{ URL::to('synteny-of-hsa-12820-paralogon') }}}"> Synteny Analysis</a></li>
															  <li class="divider"></li>
															 <li><a tabindex="-1" href="{{{ URL::to('age-estimates-of-duplications-hsa-12820-paralogon') }}}"> Age estimates of duplications</a></li>
											                  <li class="divider"></li>
											                 <li><a tabindex="-1" href="{{{ URL::to('hsa-12820-paralogon-phylogenomic-analysis') }}}"> Phylogenomic Analysis</a></li>
															  <li class="divider"></li>
															 <li><a tabindex="-1" href="{{{ URL::to('hsa-12820-paralogon-co-duplicated-groups') }}}"> Estimation of Co-duplication events </a></li>
															   <li class="divider"></li>
															  <li><a tabindex="-1" href="{{{ URL::to('summary2012') }}}"> Table: Duplication Summary</a></li>
											                   <li class="divider"></li>
											                   <li class="dropdown-submenu">
												                  	<a tabindex="-1" href="#"> HSA:1/2/8/20 Search</a>
													                <ul class="dropdown-menu">
														                 <li><a tabindex="-1" href="{{{ URL::to('/fetch') }}}"> Search via Family</a></li>
														                  <li class="divider"></li>
														                 <li><a tabindex="-1" href="{{{ URL::to('/fetchviaseq') }}}"> Search via Sequence</a></li>
													                </ul>
			        											</li>
										                </ul>
									                </li>
									                <li class="divider"></li>
									                <li class="dropdown-submenu">
									                  	<a tabindex="-1" href="#"> HSA:1/6/9/19 (MHC paralogon)</a>
										                <ul class="dropdown-menu" align="left">
											                 <li>  <a tabindex="-1" href="{{{ URL::to('mhc-hsa-16919-paralogon-information') }}}"> MHC Paralogon Information</a></li>
											                  <li class="divider"></li>
											                 <li><a tabindex="-1" href="{{{ URL::to('/mhcfamilydata') }}}"> Table: List of families analysed</a></li>
															  <li class="divider"></li>
															 <li><a tabindex="-1" href="{{{ URL::to('synteny-of-mhc-paralogon') }}}"> Synteny Analysis</a></li>
															  <li class="divider"></li>
															 <li><a tabindex="-1" href="{{{ URL::to('age-estimates-of-duplications-mhc-paralogon') }}}"> Age estimates of duplications</a></li>
											                  <li class="divider"></li>
											                 <li><a tabindex="-1" href="{{{ URL::to('mhc-paralogon-phylogenomic-analysis') }}}"> Phylogenomic Analysis</a></li>
															  <li class="divider"></li>
															 <li><a tabindex="-1" href="{{{ URL::to('mhc-hsa-16919-paralogon-information') }}}"> Estimation of Co-duplication events </a></li>
															   <li class="divider"></li>
															  <li><a tabindex="-1" href="{{{ URL::to('summarymhc') }}}"> Table: Duplication Summary</a></li>
											                   <li class="divider"></li>
											                   <li class="dropdown-submenu">
												                  	<a tabindex="-1" href="#"> HSA:1/6/9/19 Search</a>
													                <ul class="dropdown-menu">
														                 <li><a tabindex="-1" href="{{{ URL::to('/fetchMHC') }}}"> Search via Family</a></li>
														                  <li class="divider"></li>
														                 <li><a tabindex="-1" href="{{{ URL::to('/fetchviaseq') }}}"> Search via Sequence</a></li>
													                </ul>
			        											</li>
										                </ul>
									                </li>
									                <li class="divider"></li>
									                <li class="dropdown-submenu">
									                  	<a tabindex="-1" href="#"> Other Human Multi-Gene Family</a>
										                <ul class="dropdown-menu" align="left">
											                 <li>  <a tabindex="-1" href="{{{ URL::to('other-human-multi-gene-family') }}}"> Other Human Multi-Gene Family</a></li>
											                  <li class="divider"></li>
											                 <li><a tabindex="-1" href="{{{ URL::to('/Otherhumangenefamily') }}}"> Table: List of families analysed</a></li>
															 <li class="divider"></li>
											                 <li><a tabindex="-1" href="{{{ URL::to('multi-gene-families-phylogenomic-analysis') }}}"> Phylogenomic Analysis</a></li>
															 <li class="divider"></li>
															  <li><a tabindex="-1" href="{{{ URL::to('summaryotherhumangenefamily') }}}"> Table: Duplication Summary</a></li>
											                   <li class="divider"></li>
											                   <li class="dropdown-submenu">
												                  	<a tabindex="-1" href="#"> Other Human Multi-Gene Family Search</a>
													                <ul class="dropdown-menu">
														                 <li><a tabindex="-1" href="{{{ URL::to('/fetchotherhumanfamily') }}}"> Search via Family</a></li>
														                  <li class="divider"></li>
														                 <li><a tabindex="-1" href="{{{ URL::to('/fetchviaseq') }}}"> Search via Sequence</a></li>
													                </ul>
			        											</li>
										                </ul>
									                </li>
			            						</ul>
			        						</li>
			        						<li class="dropdown">
				         						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Duplication Statistics  <span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu" align="left">
				           							 <li><a href="{{{ URL::to('/coduplication') }}}">Co-duplication Events</a></li>
				           							  <li class="divider"></li>
				           							  <li><a href="{{{ URL::to('Gene_Family_Statistics') }}}">Gene Family Analysis</a></li>
				           							  <li class="divider"></li>
				           							  <li><a href="{{{ URL::to('/DuplicationSummary') }}}">Duplication Summary</a></li>
				           							   
				           							  </ul>
				           							 </li>
			         		                <li class="dropdown">
			                      				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Search <span class="caret"></span></a>
								                    	
									            <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu" align="left">
									                <li class="dropdown-submenu">
									                  	<a tabindex="-1" href="#">HSA:2/7/12/17 (HOX-cluster paralogon)</a>
										                <ul class="dropdown-menu">
											                 <li><a tabindex="-1" href="{{{ URL::to('/find') }}}"> Search via Family</a></li>
											                 <li><a tabindex="-1" href="{{{ URL::to('/searchseq') }}}"> Search via Sequence</a></li>
															 
										                </ul>
									                </li>
									                <li class="divider"></li>
									                <li class="dropdown-submenu">
									                  <a tabindex="-1" href="#">HSA:4/5/8/10 (FGFR-cluster paralogon)</a>
										                <ul class="dropdown-menu">
											                 <li><a tabindex="-1" href="{{{ URL::to('/fetchfgfr') }}}"> Search via Family</a></li>
											                 <li><a tabindex="-1" href="{{{ URL::to('/fetchfgfrviaseq') }}}"> Search via Sequence</a></li>
											                
										                </ul>
									                </li>
									                <li class="divider"></li>
									                <li class="dropdown-submenu">
									                  	<a tabindex="-1" href="#">HSA:1/2/8/20</a>
										                <ul class="dropdown-menu">
											                 <li><a tabindex="-1" href="{{{ URL::to('/fetch') }}}"> Search via Family</a></li>
											                 <li><a tabindex="-1" href="{{{ URL::to('/fetchviaseq') }}}"> Search via Sequence</a></li>
										                </ul>
									                </li>
									                <li class="divider"></li>
									                <li class="dropdown-submenu">
									                  	<a tabindex="-1" href="#">HSA:1/6/9/19 (MHC-cluster paralogon)</a>
										                <ul class="dropdown-menu">
											                 <li><a tabindex="-1" href="{{{ URL::to('/fetchMHC') }}}"> Search via Family</a></li>
											                 <li><a tabindex="-1" href="{{{ URL::to('/fetchviaseq') }}}"> Search via Sequence</a></li>
										                </ul>
									                </li>
									                <li class="divider"></li>
									                <li class="dropdown-submenu">
									                  	<a tabindex="-1" href="#">Frizzled Family</a>
										                <ul class="dropdown-menu">
											                 <li><a tabindex="-1" href="{{{ URL::to('/fetchFrizzledfamily') }}}"> Search via Family</a></li>
											                 <li><a tabindex="-1" href="{{{ URL::to('/fetchviaFrizzledfamilyseq') }}}"> Search via Sequence</a></li>
										                </ul>
									                </li>
			            						</ul>
			        						</li>
									                       
									        <li><a href="{{{ URL::to('/searchseq') }}}">Search via Sequence</a></li>  
									        
									        <li class="dropdown">
				         					 	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tools <span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu" align="left">
													 <li><a href="http://phyloeasy.pahgncb.com/">PhyloEasy</a></li>
					           						 
				         						</ul>
			         						</li>
									        
											
											<li class="dropdown">
				         					 	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Useful Links <span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu" align="left">
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
			         						
								</ul>
							<div class="header_search">
								
										</div>

			         									
							</div>
					</div>
			    </nav>
			<!-- ./ navbar -->
			</div>
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
			<div id="push">
				<!-- ./wrap -->
			    <div id="footer">
					<!-- Start of footer-->
					<footer class="site-footer ">
						<div class="bottom-footer ">	
						    <div class="container">
								<div class="column">
				                <h4>About Us</h4>
				                <p><a href="/genomedb/public/about">About us</a></p>
				                <p><a href="{{{ URL::to('/contact') }}}">Contact us</a></p>
				                <p><a href="/genomedb/public/about#data">Data Access policy</a></p>
				                <p><a href="/genomedb/public/about#cit">Citing PAHG</a></p>
				                <p><a href="/genomedb/public/about#pub">Publications</a></p>


				              	</div>
						        <div class="column">
						        	<h4>Using our Website</h4>
						        		<p><a href="/genomedb/public/pahg-user-tutorial">Tutorial</a></p>
						                <p><a href="/genomedb/public/pahg-user-tutorial">Video Tutorial</a></p>
						                <p><a href="/genomedb/public/background">Background Information</a></p>
						                <p><a href="/genomedb/public/data-generation">Data Generation Methodology</a></p>
						                <p><a href="/genomedb/public/data-incorporation">Data Incorporation Methodology</a></p>	
						        </div>
						        <div class="column">
						        	<h4>Follow Us</h4>		
										<p><a href="http://twitter.com" onclick="_gaq.push(['_trackEvent', 'exit', 'footer', 'Twitter']);"target="_blank"><span class="fa fa-twitter"></span> Twitter</a></p>
										<p><a href="https://www.facebook.com/PhylogenomicAnalysisHumanGenome/" onclick="_gaq.push(['_trackEvent', 'exit', 'footer', 'Facebook']);"target="_blank"><span class="fa fa-facebook"></span>&nbsp;&nbsp;Facebook</a></p>
										<!-- <p><a href="https://github.com/PAHG" onclick="_gaq.push(['_trackEvent', 'exit', 'footer', 'GitHub']);"target="_blank"><i class="fa fa-github"></i> GitHub</a></p>	-->
										<p><a href="{{{ URL::to('/faqs') }}}" onclick="_gaq.push(['_trackEvent', 'exit', 'footer', 'FAQs']);"><span class="glyphicon glyphicon-star"></span> FAQs</a></p>
										<p><a href="{{{ URL::to('/scholars') }}}" target="_blank"><span class="glyphicon glyphicon-star"></span> Our Team</a></p>
										<p style="color:#2A6496;">
										Visitor's count:
										
						       
						        <a href='http://www.counter12.com'><img src='http://www.counter12.com/img-5AbcD4A9-45.gif' border='0' alt='counter' style="width:30px;height:10px;"></a>
								</div>
								
								
						        
						        <div id="meta-links">
									<script type='text/javascript' src='http://www.counter12.com/ad.js?id=5AbcD4A9'></script> </p>
						        	<p class="muted credit" style="text-align:center; margin-top:10px;"><a href="http://ncb.qau.edu.pk/">National Center for Bioinformatics <a href="http://ncb.qau.edu.pk/">Quaid-i-Azam University</a>.</p>
								</div>
							</div>
						</div>								
					</div>
					</footer>
					    <!-- End of footer-->

				</div>	
			</div>    
		</div>
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
		    <!-- CSS
		    <script src="{{asset('assets/js/headingsetting.js')}}"></script>
			================================================== -->
		 
		    <script type="text/javascript">

		    $(function() {
	$("#tfq2b").click(function() {
		if ($("#tfq2b").val() == "Search our website"){
			$("#tfq2b").val(""); 
		}
	});
});
		    	
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
	

<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//localhost:8080/genomedb/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//localhost:8080/genomedb/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->
	</body>
	</div>
</html>