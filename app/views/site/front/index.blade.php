@extends('site.layouts.default')
{{-- Content --}}
@section('content')

<div class="content row">	
<div class= "col-md-8 col-md-push-2 ">
	<div class="jumbotron " >
        	<a href=" {{asset('assets/img/sfinal.png')}}" data-toggle="lightbox" data-html="true" data-title="Synteny" data-footer="" title="">
				<img  src=" {{asset('assets/img/sfinal.png')}}"  id="rotateimage" class="img-responsive img-rounded pull-right" title="Synteny" style="width:300px;height:300px;">
			
			</a>		
		    <h2 class="no-margin text-primary">VGA~ Vertebrate Genome Architecture</h2>
		 	<p text-align:justify; > It elucidates evolution of organismal complexity in animal lineage using 2R & !2R hypothesis.</p>
		    <p><a button type="button" class="btn btn-primary btn-xs" href="{{{ URL::to('hox-main') }}}" role="button">Read more</a></p>			 		


	</div>
</div>

	<aside class= " col-md-2 col-md-pull-9 ">
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
   				
    </aside>
    <div class= "col-md-2 col-md-push-1">
		 	<div class="panel panel-primary">
		 		<div class="panel-heading">
				<h4 class="panel-title"><a href="{{asset('assets/img/estree.png')}}" > <font color="#FFFFFF" >Species Employed</font></a></h4>
				 </div>
				 
   						<div class="panel-body">
							
								<a href=" {{asset('assets/img/especies.png')}}" data-toggle="lightbox" data-html="true" data-title="Species Tree" data-footer="" title="">
									<img  src=" {{asset('assets/img/especies.png')}}" class="img-responsive" title="Species Employed" style="width:140px;height:120px;">
								</a>
								<a <button type="button" class="btn btn-primary btn-xs"  href="{{asset('assets/img/estree.png')}}">   <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"> </span> Enlarged tree </button>  </a>
				   		
								
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
								        #carousel-synteny
								        {
								        	width:200px;
								        }
								</style>
							<div id="carousel-synteny" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carousel-synteny" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-synteny" data-slide-to="1" ></li>
									
									
								</ol>
										<div class="carousel-inner">
											
												<div class="item active">
													<a href=" {{asset('assets/img/Synteny/hoxblack.png')}}" data-toggle="lightbox" data-html="true" data-title="HSA:2/7/12/17 Synteny" data-footer="" title="">
												<img  src=" {{asset('assets/img/Synteny/hoxblack.png')}}" class="img-responsive img-rounded pull-right" title="HSA:2/7/12/17 Synteny" style="width:200px;height:130px;">
												</a>
												</div>
												<div class="item">
													<a href=" {{asset('assets/img/Synteny/one.png')}}" data-toggle="lightbox" data-html="true" data-title="HSA:1/2/8/20 Synteny" data-footer="" title="">
												<img  src=" {{asset('assets/img/Synteny/one.png')}}" class="img-responsive img-rounded pull-right" title="HSA:1/2/8/20 Synteny" style="width:200px;height:130px;">
												</a>
												</div>
																							
										</div>
								<a class="left carousel-control" href="#carousel-synteny" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span></a>
								<a class="right carousel-control" href="#carousel-synteny" role="button" data-slide="next">
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
								        #carousel-topology
								        {
								        	width:200px;
								        }
								</style>
							<div id="carousel-topology" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carousel-topology" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-topology" data-slide-to="1" ></li>
									<li data-target="##carousel-topology" data-slide-to="2" ></li>
									
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
								<a class="left carousel-control" href="#carousel-topology" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span></a>
								<a class="right carousel-control" href="#carousel-topology" role="button" data-slide="next">
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
								        #carousel-time
								        {
								        	width:200px;
								        }
								</style>
							<div id="carousel-time" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carousel-time" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-time" data-slide-to="1" ></li>
									
									
								</ol>
										<div class="carousel-inner">
												<div class="item active">
													<a href="{{asset('assets/img/timeperiod/one.png')}}" data-toggle="lightbox" data-html="true" data-title="HSA:2/7/12/17 Time period" data-footer="" title="">
														<img  src=" {{asset('assets/img/timeperiod/one.png')}}" class="img-responsive img-rounded pull-right" title="HSA:2/7/12/17 Time period" style="width:200px;height:130px;">
													</a>	
												</div>
												<div class="item">
													<a href="{{asset('assets/img/timeperiod/two.png')}}" data-toggle="lightbox" data-html="true" data-title="HSA:1/2/8/20 Time period" data-footer="" title="">
														<img  src="{{asset('assets/img/timeperiod/two.png')}}" class="img-responsive img-rounded pull-right" title="HSA: 1/2/8/20 Time period" style="width:200px;height:130px;">
													</a>
												</div>													
										</div>
								<a class="left carousel-control" href="#carousel-time" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span></a>
								<a class="right carousel-control" href="#carousel-time" role="button" data-slide="next">
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
							<div id="carousel-tree" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carousel-tree" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-tree" data-slide-to="1" ></li>
									<li data-target="#carousel-tree" data-slide-to="2" ></li>
								</ol>
										<div class="carousel-inner">
												<div class="item active">
													<a href=" {{asset('assets/img/phylotrees/SLC4A.png')}}" data-toggle="lightbox" data-html="true" data-title="HSA:2/7/12/17 N.J Tree" data-footer="" title="">
														<img  src="{{asset('assets/img/phylotrees/SLC4A.png')}}" class="img-responsive img-rounded pull-right" title="HSA:2/7/12/17 N.J Tree" style="width:200px;height:130px;">
													</a>
												</div>
												<div class="item">
													<a href=" {{asset('assets/img/phylotrees/SLC4Aml.png')}}" data-toggle="lightbox" data-html="true" data-title="HSA:2/7/12/17 M.L Tree" data-footer="" title="">
														<img  src="{{asset('assets/img/phylotrees/SLC4Aml.png')}}" class="img-responsive img-rounded pull-right" title="HSA:2/7/12/17 M.L Tree" style="width:200px;height:130px;">
													</a>
														
												</div>
												<div class="item">
													<a href=" {{asset('assets/img/phylotrees/MYB.png')}}" data-toggle="lightbox" data-html="true" data-title="HSA:1/2/8/20 M.L Tree" data-footer="" title="">
														<img  src="{{asset('assets/img/phylotrees/MYB.png')}}" class="img-responsive img-rounded pull-right" title="HSA:1/2/8/20 M.L Tree" style="width:200px;height:130px;">
													</a>
														
												</div>
												<div class="item">
													<a href=" {{asset('assets/img/phylotrees/MYBml.png')}}" data-toggle="lightbox" data-html="true" data-title="HSA:1/2/8/20 M.L Tree" data-footer="" title="">
														<img  src="{{asset('assets/img/phylotrees/MYBml.png')}}" class="img-responsive img-rounded pull-right" title="HSA:1/2/8/20 M.L Tree" style="width:200px;height:130px;">
													</a>
														
												</div>
										</div>
								<a class="left carousel-control" href="#carousel-tree" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span></a>
								<a class="right carousel-control" href="#carousel-tree" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span></a>
							</div>
			  			</div>
			</div>
   </div>
</div>

   
   

	
@stop