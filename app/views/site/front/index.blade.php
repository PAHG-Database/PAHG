@extends('site.layouts.default')
{{-- Content --}}
@section('content')

<div class="content row">	
<div class= "col-md-8 col-md-push-2 ">
	<div class="jumbotron " >
        			
		    <img src="{{asset('assets/img/main.png')}}" class="img-responsive img-rounded pull-right" alt="Responsive image" style="width:300px;height:300px;">
		 	<h2 class="no-margin text-primary">VGA~ Vertebrate Genome Architecture</h2>
		 	<p> VGA is a database which throws light on the concept of 2R and !2R. It elucidate the evolution of organismal complexity in animal lineage.</p>
		    <p><a button type="button" class="btn btn-primary btn-xs" href="#" role="button">Read more</a></p>			 		
		
	</div>
</div>

	<aside class= " col-md-2 col-md-pull-9 " >
   		<div class="panel panel-primary">
   			<div class="panel-heading">
				<h4 class="panel-title">Vertebrate History</h4>
			</div>
   				<div class="panel-body">
   					<ul class="nav  nav-stacked">	
	   						<li><a href="{{{ URL::to('background') }}}">Background</a></li>
					        <li class="dropdown">
	         					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Duplication Mechanism </span></a>
									<ul class="dropdown-menu" role="menu">
	           							 <li><a href="{{{ URL::to('introduction') }}}">Introduction</a></li>
	            						 <li><a href="{{{ URL::to('independent-gene-duplications') }}}">Independent Gene Duplications</a></li>
	           							 <li><a href="{{{ URL::to('segmental-duplication') }}}">Segmental Duplications</a></li>
	           							 <li><a href="{{{ URL::to('whole-genome-duplication-hypothesis-or-2r-hypothesis') }}}">Whole Genome Duplications</a></li>
	           							 <li><a href="{{{ URL::to('piecemeal-theory') }}}">Piecemeal Theory</a></li>
	         						</ul>
         					</li>
         					<li><a href="{{{ URL::to('methodology') }}}">Methodology</a></li>
					</ul>       
				</div>
   				<div class="panel-heading">
					<h4 class="panel-title"> Publications </h4>
				</div>
				<div class="news_section clearfix">
      				 <!--<div class="latest_news fLeft">Latest News</div>-->
			      	<div class="news_details fRight">           
			        	<style>:host { display: inline-block; width:100% -webkit-fill-available; overflow: hidden; text-align: initial; white-space: nowrap; }:host([direction="up"]), :host([direction="down"]) { overflow: initial; overflow-x: hidden; white-space: initial; }</style>
					  	
					    <marquee behavior="scroll" direction="up" onmouseover="stop();" onmouseout="start();" style="height:160px;" padding-right= "25px;" >
					    	<ul class="nav  nav-stacked" id="pubs">	
				    										<li><p class="text-justify"><a href="http://www.biomedcentral.com/1471-2148/7/239" target="_blank">An insight into the phylogenetic history of HOX linked gene families in vertebrates   </a></p></li>
				    										<li><p class="text-justify"><a href="http://www.sciencedirect.com/science/article/pii/S1055790310003209" target="_blank">Unraveling ancient segmental duplication events in human genome by phylogenetic analysis of multigene families residing on HOX-cluster paralogons</a></p></li>
															<li><p class="text-justify"><a href="http://www.sciencedirect.com/science/article/pii/S1055790312000814" target="_blank">Phylogenetic history of paralogous gene quartets on human chromosomes 1, 2, 8 and 20 provides no evidence in favor of the vertebrate octoploidy hypothesis</a></p></li>														
														    <li><p class="text-justify"><a href="http://www.sciencedirect.com/science/article/pii/S1055790312004307" target="_blank">Fourfold paralogy regions on human HOX-bearing chromosomes: Role of ancient segmental duplications in the evolution of vertebrate genome</a></p></li>															
														    <li><p class="text-justify"><a href="http://www.sciencedirect.com/science/article/pii/S1055790314001614" target="_blank">Integrating large-scale phylogenetic datasets to dissect the ancient evolutionary history of vertebrate genome</a></p></li>
															
						</ul>
						</marquee>
					</div>
    			</div>         
  		</div>
    </aside>
    <div class= "col-md-2 col-md-push-1">
		 	<div class="panel panel-primary">
		 		<div class="panel-heading">
				<h4 class="panel-title"><a href="{{asset('assets/img/stree.png')}}" > <font color="#FFFFFF" >Species Tree</font></a></h4>
				 </div>
   						<div class="panel-body">
								<style>
								        #carousel-example-generic
								        {
								        	width:200px;
								        }
								</style>
								<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
								
										<div class="carousel-inner">
												<div class="item active">
													<img src="{{asset('assets/img/tree.png')}}" alt="Species Tree" style="width:140px;height:120px;">
														
												</div>													
										</div>
								</div>
			  			</div>	 
		 		<div class="panel-heading">
				 	<h4 class="panel-title"><a href="#" > <font color="#FFFFFF" >Species</font></a></h4>
				 </div>
   			<div class="news_section clearfix">
      				 <!--<div class="latest_news fLeft">Latest News</div>-->
			      	<div class="news_details fRight">           
			        	<style>:host { display: inline-block; width:100% -webkit-fill-available; overflow: hidden; text-align: initial; white-space: nowrap; }:host([direction="up"]), :host([direction="down"]) { overflow: initial; overflow-x: hidden; white-space: initial; }</style>
					  	
					    <marquee behavior="scroll" direction="up" onmouseover="stop();" onmouseout="start();" style="height:200px;" id="figs">
				    										<div class="item active">
																<img src="{{asset('assets/img/sidebar/homo.png')}}" alt="Human" style="width:100px;height:100px;">	
															</div>
															<div class="item">
																<img src="{{asset('assets/img/sidebar/chimpanzee.png')}}" alt="chimpanzee" style="width:100px;height:100px;">		
															</div>	
																
															<div class="item">
																<img src="{{asset('assets/img/sidebar/gorilla.png')}}" alt="gorilla2"  style="width:100px;height:100px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/Orangutan.png')}}" alt="Orangutan"  style="width:100px;height:100px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/macaque.png')}}" alt="macaque"  style="width:100px;height:100px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/marmoset.png')}}" alt="marmoset"  style="width:100px;height:100px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/mouse.png')}}" alt="mouse"  style="width:100px;height:100px;">		
															</div>		
															<div class="item">
																<img src="{{asset('assets/img/sidebar/rat.png')}}" alt="rat"  style="width:100px;height:100px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/rabbit.png')}}" alt="rabbit"  style="width:100px;height:100px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/dog.png')}}" alt="dog"  style="width:100px;height:100px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/cat.png')}}" alt="cat"  style="width:100px;height:100px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/cow.png')}}" alt="cow"  style="width:100px;height:100px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/horse.png')}}" alt="horse"  style="width:100px;height:100px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/elephant.png')}}" alt="elephant"  style="width:100px;height:100px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/Armadillo.png')}}" alt="Armadillo" style="width:100px;height:100px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/microbat.png')}}" alt="microbat" style="width:100px;height:100px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/megabat.png')}}" alt="megabat" style="width:100px;height:100px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/opossum.png')}}" alt="opossum" style="width:100px;height:100px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/hedgehog.png')}}" alt="hedgehog" style="width:100px;height:100px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/platypus.png')}}" alt="platypus" style="width:100px;height:100px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/chicken.png')}}" alt="chicken" style="width:100px;height:100px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/zebrafinch.png')}}" alt="zebrafinch" style="width:100px;height:100px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/anolelizard.png')}}" alt="anolelizard" style="width:100px;height:100px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/Softshellturtle.png')}}" alt="Softshellturtle" style="width:100px;height:100px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/Xenopus.png')}}" alt="Xenopus" style="width:100px;height:100px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/zebrafish.png')}}" alt="zebrafish" style="width:100px;height:100px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/fugu.png')}}" alt="fugu" style="width:100px;height:100px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/tetraodon.png')}}" alt="tetraodon" style="width:100px;height:100px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/stickleback.png')}}" alt="stickleback" style="width:100px;height:100px;">		
															</div>
															<div class="item">
																<img src="{{asset('assets/img/sidebar/medaka.png')}}" alt="medaka" style="width:100px;height:100px;">		
															</div>
															<div class="item">
																<img src="{{asset('assets/img/sidebar/C.intestinalis.png')}}" alt="C.intestinalis" style="width:100px;height:100px;">		
															</div>
															<div class="item">
																<img src="{{asset('assets/img/sidebar/Cionasavignyi.png')}}" alt="Cionasavignyi" style="width:100px;height:100px;">		
															</div>
															<div class="item">
																<img src="{{asset('assets/img/sidebar/Floridalancele.png')}}" alt="Floridalancele" style="width:100px;height:100px;">		
															</div>
															
															<div class="item">
																<img src="{{asset('assets/img/sidebar/seaurchin.png')}}" alt="seaurchin" style="width:100px;height:100px;">		
															</div>
															<div class="item">
																<img src="{{asset('assets/img/sidebar/Honeybees.png')}}" alt="Honeybees" style="width:100px;height:100px;">		
															</div>
															<div class="item">
																<img src="{{asset('assets/img/sidebar/drosophila.png')}}" alt="drosophila" style="width:100px;height:100px;">		
															</div>
															<div class="item">
																<img src="{{asset('assets/img/sidebar/mosquitoes.png')}}" alt="mosquitoes" style="width:100px;height:100px;">		
															</div>
															<div class="item">
																<img src="{{asset('assets/img/sidebar/Celegans.png')}}" alt="C.elegans" style="width:100px;height:100px;">		
															</div>
															<div class="item">
																<img src="{{asset('assets/img/sidebar/nematostella.png')}}" alt="nematostella" style="width:100px;height:100px;">		
															</div>
															<div class="item">
																<img src="{{asset('assets/img/sidebar/hydra.png')}}" alt="hydra" style="width:100px;height:100px;">		
															</div>
							</marquee>
					</div>
    			</div>
		</div>
		</div>
</div>

		 <div class= "col-sm-6 col-md-3">
		 	<div class="panel panel-primary">
		 		<div class="panel-heading">
				 	<p><a href="{{{ URL::to('synteny') }}}" ><b> <font color="#FFFFFF" >Synteny</font></b></a></p>
				 </div>
   			<div class="panel-body">
								<style>
								        #carousel-example-generic
								        {
								        	width:200px;
								        }
								</style>
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-example-generic" data-slide-to="1" ></li>
									
									
								</ol>
										<div class="carousel-inner">
												<div class="item active">
													<img src="{{asset('assets/img/Synteny/hoxblack.png')}}" alt="Synteny" style="width:200px;height:130px;">
														
												</div>
												<div class="item">
													<img src="{{asset('assets/img/Synteny/one.png')}}" alt="Synteny" style="width:200px;height:130px;">
														
												</div>
																							
										</div>
								<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span></a>
								<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span></a>
							</div>
			  			</div>
		</div>
		</div>

		<div class= "col-sm-6 col-md-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<p><a href="{{{ URL::to('topology-comparision-approach') }}}" ><b> <font color="#FFFFFF" >Co-duplicated groups</font></b></a></p>
				 </div>
				 <div class="panel-body">
								<style>
								        #carousel-example-generic
								        {
								        	width:200px;
								        }
								</style>
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-example-generic" data-slide-to="1" ></li>
									<li data-target="#carousel-example-generic" data-slide-to="2" ></li>
									
								</ol>
										<div class="carousel-inner">
												<div class="item active">
													<img src="{{asset('assets/img/topology/one.png')}}" alt="Topology" style="width:200px;height:130px;">
														
												</div>
												<div class="item">
													<img src="{{asset('assets/img/topology/three.png')}}" alt="Topology" style="width:200px;height:130px;">
														
												</div>
												<div class="item">
													<img src="{{asset('assets/img/topology/two.png')}}" alt="Topology" style="width:200px;height:130px;">
														
												</div>												
										</div>
								<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span></a>
								<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span></a>
							</div>
			  			</div>
		</div>
		</div>

	<div class= "col-sm-6 col-md-3">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<p><a href="{{{ URL::to('relative-dating') }}}" ><b> <font color="#FFFFFF" >Time Period</font></b></a></p>
				 </div>
   			<div class="panel-body">
								<style>
								        #carousel-example-generic
								        {
								        	width:200px;
								        }
								</style>
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-example-generic" data-slide-to="1" ></li>
									
									
								</ol>
										<div class="carousel-inner">
												<div class="item active">
													<img src="{{asset('assets/img/timeperiod/one.png')}}" alt="timeperiod" style="width:200px;height:130px;">
														
												</div>
												<div class="item">
													<img src="{{asset('assets/img/timeperiod/two.png')}}" alt="timeperiod" style="width:200px;height:130px;">
														
												</div>
																							
										</div>
								<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span></a>
								<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span></a>
							</div>
			  			</div>
		</div>
	</div>
	<div class= "col-sm-6 col-md-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<p><a href="{{asset('assets/img/t.png')}}" ><b> <font color="#FFFFFF" >Phylogenetic Trees</font></b></a></p>				 
				 </div>
						<div class="panel-body">
								<style>
								        #carousel-example-generic
								        {
								        	width:200px;
								        }
								</style>
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-example-generic" data-slide-to="1" ></li>
									<li data-target="#carousel-example-generic" data-slide-to="2" ></li>
								</ol>
										<div class="carousel-inner">
												<div class="item active">
													<img src="{{asset('assets/img/t.png')}}" alt="Topology" style="width:200px;height:130px;">
														<div class="carousel-caption">
															<h2 class="text-info">N.J</h2>	
														</div>
												</div>
												<div class="item">
													<img src="{{asset('assets/img/t.png')}}" alt="Topology" style="width:200px;height:130px;">
														<div class="carousel-caption">
															<h2 class="text-info">M.L</h2>
														</div>
												</div>
										</div>
								<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span></a>
								<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span></a>
							</div>
			  			</div>
			</div>
   </div>
</div>

   
   

	
@stop