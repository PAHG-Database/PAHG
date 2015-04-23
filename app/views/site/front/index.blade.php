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
   					<ul class="nav nav-tabs nav-stacked">	
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
					<h4 class="panel-title"><span class="glyphicon glyphicon-th-large"> Latest </span></h4>
				</div>
				<div class="panel-body">
   					<ul class="nav nav-tabs nav-stacked">
				        <li><a href="{{{ URL::to('/lab') }}}">Evolutionary Genomics Lab</a></li>
				        <li><a href="{{{ URL::to('/blast') }}}">Search by Sequence</a></li>
				        <li><a href="{{{ URL::to('/faqs') }}}">FAQs</a></li>
				    </ul>
   				</div>	          
  		</div>
    </aside>
    <div class= "col-md-2 col-md-push-1">
		 	<div class="panel panel-primary">
		 		<div class="panel-heading">
				<p><a href="{{asset('assets/img/stree.png')}}" ><b> <font color="#FFFFFF" >Species Tree</font></b></a></p>
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
													<img src="{{asset('assets/img/tree.png')}}" alt="Species Tree" style="width:100px;height:100px;">
														
												</div>													
										</div>
								</div>
			  			</div>	 
		 		<div class="panel-heading">
				 	<p><a href="#" ><b> <font color="#FFFFFF" >Species</font></b></a></p>
				 </div>
   			<div class="news_section clearfix">
      				 <!--<div class="latest_news fLeft">Latest News</div>-->
			      	<div class="news_details fRight">           
			        	<style>:host { display: inline-block; width:100% -webkit-fill-available; overflow: hidden; text-align: initial; white-space: nowrap; }:host([direction="up"]), :host([direction="down"]) { overflow: initial; overflow-x: hidden; white-space: initial; }</style>
					  	<div><content></content></div>
					    <marquee behavior="scroll" direction="down" onmouseover="stop();" onmouseout="start();" style="height:200px;">
				    										<div class="item active">
																<img src="{{asset('assets/img/sidebar/a.png')}}" alt="Synteny" style="width:50px;height:50px;">	
															</div>
															<div class="item">
																<img src="{{asset('assets/img/sidebar/b.png')}}" alt="Synteny" style="width:50px;height:50px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/c.png')}}" alt="Synteny" style="width:50px;height:50px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/d.png')}}" alt="Synteny" style="width:50px;height:50px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/e.png')}}" alt="Synteny" style="width:50px;height:50px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/f.png')}}" alt="Synteny" style="width:50px;height:50px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/g.png')}}" alt="Synteny" style="width:50px;height:50px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/h.png')}}" alt="Synteny" style="width:50px;height:50px;">		
															</div>		
															<div class="item">
																<img src="{{asset('assets/img/sidebar/i.png')}}" alt="Synteny" style="width:50px;height:50px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/j.png')}}" alt="Synteny" style="width:50px;height:50px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/k.png')}}" alt="Synteny" style="width:50px;height:50px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/l.png')}}" alt="Synteny" style="width:50px;height:50px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/m.png')}}" alt="Synteny" style="width:50px;height:50px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/n.png')}}" alt="Synteny" style="width:50px;height:50px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/o.png')}}" alt="Synteny" style="width:50px;height:50px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/p.png')}}" alt="Synteny" style="width:50px;height:50px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/q.png')}}" alt="Synteny" style="width:50px;height:50px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/r.png')}}" alt="Synteny" style="width:50px;height:50px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/s.png')}}" alt="Synteny" style="width:50px;height:50px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/human.jpg')}}" alt="Synteny" style="width:100px;height:100px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/mouse.png')}}" alt="Synteny" style="width:100px;height:100px;">		
															</div>	
															<div class="item">
																<img src="{{asset('assets/img/sidebar/chicken.jpg')}}" alt="Synteny" style="width:150px;height:174px;">		
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
													<img src="{{asset('assets/img/timeperiod/tpg.png')}}" alt="timeperiod" style="width:200px;height:130px;">
														
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