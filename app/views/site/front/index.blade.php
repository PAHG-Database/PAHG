<!DOCTYPE html>
@extends('site.layouts.default')
{{-- Content --}}
@section('content')

<div style='position:absolute;z-index:0;left:0;top:0;width:100%;height:100%'>
  <img src='assets/img/background.png' style='width:100%;height:100%;' alt='[]' />
</div>	
<paper-toolbar role="toolbar">
      <div id="aligner" class="middle">
        <span id="title" title="irsephandbook.pdf">
          <span>irsephandbook.pdf</span>
        </span>

        <div id="pageselector-container">
          <viewer-page-selector id="pageselector" class="">
          </viewer-page-selector>
        </div>

        <div id="buttons" class="">
          <paper-icon-button id="rotate-right" icon="image:rotate-right" i18n-values="aria-label:tooltipRotateCW;title:tooltipRotateCW" role="button" tabindex="0" aria-disabled="false" aria-label="Rotate clockwise" title="Rotate clockwise">
          </paper-icon-button>

          <paper-icon-button id="download" icon="file-download" i18n-values="aria-label:tooltipDownload;title:tooltipDownload" role="button" tabindex="0" aria-disabled="false" aria-label="Download" title="Download">
          </paper-icon-button>

          <paper-icon-button id="print" icon="print" i18n-values="aria-label:tooltipPrint;title:tooltipPrint" role="button" tabindex="0" aria-disabled="false" aria-label="Print" title="Print">
          </paper-icon-button>

          <viewer-toolbar-dropdown id="bookmarks" open-icon="bookmark" closed-icon="bookmark-border" i18n-values="header:bookmarks" hidden="" header="Bookmarks">
              <viewer-bookmarks-content>
              </viewer-bookmarks-content>
          </viewer-toolbar-dropdown>
        </div>
      </div>
      <div class="bottom fit">
        <paper-progress id="progress" role="progressbar" value="100" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" aria-disabled="false" style="opacity: 0;"></paper-progress>
      </div>
    </paper-toolbar>
    
<div class= "col-md-12 ">
	<div class= "firstbox" style="margin-right: 12px">
		<div class="panel panel-primary">
   			<div class="panel-heading">
				<h4 class="panel-title">Genome <br> History</h4>
			</div>
				<div class="panel-body" id="boxsetting">
						<ul class="nav  nav-stacked">	
   						<li><a href="{{{ URL::to('background') }}}">Background</a></li>
   						<li class="dropdown">
         					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Methodology<span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
           							 <li><a href="{{{ URL::to('data-generation') }}}">Data Generation</a></li>
   									 <li><a href="{{{ URL::to('data-incorporation') }}}">Data Incorporation</a></li>    					
         					</ul>
     					</li>
     					<li><a href="{{{ URL::to('pahg-user-tutorial') }}}">Tutorial</a></li>
   						
					</ul>       
			</div>	
		</div>
		
		<div class="panel panel-primary">

		    <div class="panel-body">
				<span>
					<a href="{{{ URL::to('whole-genome-duplications-during-vertebrate-history-2r') }}}"><b>2R Hypothesis</b>
				</span>
				<a href="{{{ URL::to('whole-genome-duplications-during-vertebrate-history-2r') }}}"><img  src=" {{asset('assets/img/WGD.png')}}" class="img-responsive" title="Whole genome duplication hypothesis or 2R hypothesis" style="width:140px;height:70px;"></a>
  			</div>	 	
		</div>	
		
		
		
		
		
		
	</div>

	<div class="jumbotron" id="gradient-background">
		<a href=" {{asset('assets/img/sfinal.png')}}" data-toggle="lightbox" data-html="true" data-title="Synteny" data-footer="" title="">
			<img  src=" {{asset('assets/img/sfinal.png')}}"  id="rotateimage" class="img-responsive img-rounded pull-left" title="Synteny" style="width:265px;height:265px;">
		</a>
    	<h1 class="no-margin text-primary text-right" style="font-family:courier; color:#428BCA"><b>PAHG</b></h1>
	 	<h2 class="no-margin text-primary text-right" style="font-family:courier"><b>P</b>hylogenomic <b>A</b>nalysis of <b>H</b>uman <b>G</b>enome</h2>
	 	<h5 text-align:justify; class="no-margin text-primary text-right" >  "Insight into the evolutionary history of human genome"</h5>
	    <p><a button type="button" class="btn btn-primary btn-xs pull-right" href="{{{ URL::to('phylogenomic-analysis-of-human-genome') }}}" role="button">Read more</a></p>
	    <h5 text-align:right; class="no-margin text-primary text-right" >.</h5>
	    <p> <a button type="button" class="btn btn-info btn-lg pull-right" href="http://phyloeasy.pahgncb.com:7737/" role="button"> Click Here To Construct; PhyloEasy</a></p>
	</div>
	
	
	<div class="firstbox"style="margin-left: 10px">
 		<div class="panel panel-primary">
			<div class="panel-heading">
				<h4 class="panel-title"><a href="{{asset('assets/img/estree2.png')}}" > <font color="#FFFFFF" >Species Employed</font></a></h4>
			</div>
			    <div class="panel-body">
				<a href=" {{asset('assets/img/especies1.png')}}" data-toggle="lightbox" data-html="true" data-title="Species Tree" data-footer="" title="">
					<img  src=" {{asset('assets/img/especies1.png')}}" class="img-responsive" title="Species Employed" style="width:140px;height:100px;">
				</a>
				<a <button type="button" class="btn btn-primary btn-xs"  href="{{asset('assets/img/estree.png')}}">  <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"> </span> Enlarge tree </button></a>
	  		</div>	 	
		</div>
		<div class="panel panel-primary">
			<div class="panel-body">
				<span>
					<a href="{{{ URL::to('piecemeal-theory') }}}"><b>Piecemeal Theory</b>
				</span>
					<a href="{{{ URL::to('piecemeal-theory') }}}"><img  src=" {{asset('assets/img/main.png')}}" class="img-responsive" title="Piecemeal theory of gene duplication" style="width:140px;height:70px;">	
				</a>
				
	  		</div>	 	
		</div>
	</div>

</div>
<div class= "col-md-12 " id="secondbox">
	<div class= " twocolumn">
		<div class="panel panel-primary"id="gradient-background" style="margin-right: 2px; height:177px";>

			<marquee style="vertical-align: bottom; margin-top: 5px; margin-left: 15px; width: 200px; height: 155px;" direction="up" scrollamount="1" scrolldelay="45" onmouseover="this.stop();" onmouseout="this.start();" width="200" height="163">
							<script language="javascript" src="http://www.gnomencb.qau.edu.pk" type="text/javascript"></script>
							<a href="{{{ URL::to('other-human-multi-gene-family') }}}">Other Human Multi gene Family</a>
							<br><br>
							<a href="{{{ URL::to('hox-hsa-271217-paralogon-information') }}}">Importance of HOX Paralogon in evolutionary, developmental and phylogenomic studies</a>
							<br><br>
							<a href="{{{ URL::to('age-estimates-of-duplications-hox-paralogon') }}}">Duplication history of gene families located on HOX cluster bearing chromosomes</a>
							<br><br>
							<a href="{{{ URL::to('fgfr-hsa-45810-paralogon-information') }}}">Evolutionary importance of FGFR Paralogon</a>
							<br><br>
							<a href="{{{ URL::to('age-estimates-of-duplications-fgfr-paralogon') }}}">Evolutionary history of gene families shaping the current architecture of HSA 4/5/8/10</a>
							<br><br>
							<a href="{{{ URL::to('hsa12820-paralogon-information') }}}">Phylogenomic importance of linkage groups located on human chromosomes 1, 2, 8 and 20</a>
							<br><br>
							<a href="{{{ URL::to('age-estimates-of-duplications-hsa-12820-paralogon') }}}">Duplication history of HSA 1/2/8/20 Paralogon</a>
							<br><br>											
						</marquee>
		</div>
	</div>
	<div class="small_column">
		<div class="panel panel-primary"id="gradient-background"style="height:177px">
			<div class="panel-body">
				<span>
					<a href=" {{asset('assets/img/Graph11q.png')}}" data-toggle="lightbox" data-html="true" data-title="Paralogon-wise distribution of duplication numbers"><b>Paralogons History</b>
				</span>
					<a href=" {{asset('assets/img/Graph11q.png')}}" data-toggle="lightbox" data-html="true" data-title="Paralogon-wise distribution of duplication numbers" data-footer="" title="">
					<img  src=" {{asset('assets/img/Graph1q.png')}}" class="img-responsive img-rounded pull-left" title="Paralogon-wise distribution of duplication numbers" style="width:265px;height:135px;">
				</a>
	  		</div>	
		</div>
	</div>
	<div class= "middle_column">
		<div class="panel with-nav-tabs panel-primary margin-top: 5px; margin-left: 25px;" id="gradient-background"style="height:177px">
			
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1primary" data-toggle="tab"><font color="#0D1B28">Gene Search</font></a></li> 
                           <li><a href="#tab2primary" data-toggle="tab"><font color="#0D1B28">Family Search</font></a></li>
                           <li><a href="#tab3primary" data-toggle="tab"><font color="#0D1B28">PhyloEasy</font></a></li>
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                       <div class="tab-pane fade in active" id="tab1primary">
                        	
										
						<form method="GET" action="{{url('searchmember')}}">
											<div class="form-group control-group">
												<label for="select-beast"></label>
											<select id="select-gene" name="mid" placeholder="Pick a Member..." class="selectized">
													<option value="">Select a member...</option>
													@foreach ($members as $member)
													<option value="{{$member->MID}}">{{$member->MemberName}}</option>
													@endforeach
												</select>
											</div>
												<button type="submit" id="search-member" class="btn btn-primary btn-block" style="height: 25px;width: 60px;margin-left: 240px;margin-right:20px;padding-top: 0px;">Search</button>
										</form>				
										
								
						</div>  
                        
                        
                        
                        <div class="tab-pane fade" id="tab2primary">
                        	<form method="GET" action="{{url('searchfamily')}}">
									<div class="form-group control-group">
											<label for="select-beast"></label>
											<select id="select-state" name="fid" placeholder="Pick a Family..."class="selectized">
												<option value="">Select a family...</option>
												@foreach ($posts as $post)
												<option value="{{$post->FID}}">{{$post->GeneFamilyName}}</option>
												@endforeach
											</select>
										
										
										</div>
										<button type="submit" id="search-family" class="btn btn-primary btn-block" style="height: 25px;width: 60px;margin-left: 240px;margin-right:20px;padding-top: 0px;">Search</button>
									</form>
									
						</div>
              
                        <div class="tab-pane fade" id="tab3primary">
                            <div class="panel-body-style" id="wrapper">
                            	<h5 text-align:center; class="no-margin text-primary">Phylogeny Inference From Your Data</h5>
    	                        <p><a button type="button" class="btn btn-primary btn-lg btn-block" href="http://phyloeasy.pahgncb.com/" role="button">PhyloEasy</a></p>
							</div>	
						</div>
                    </div>
                </div>
            </div>
	</div>   

	<div class="small_column">
		<div class="panel panel-primary"id="gradient-background"style="height:177px">
			<div class="panel-body">
				<span>
					<a href=" {{asset('assets/img/Graph22q.png')}}"data-toggle="lightbox" data-html="true"data-title="Cladogenesis-wise distribution of duplication numbers" ><b>Duplication History</b>
				</span>
					<a href=" {{asset('assets/img/Graph22q.png')}}" data-toggle="lightbox" data-html="true" data-title="Cladogenesis-wise distribution of duplication numbers" data-footer="" title="">
					<img  src=" {{asset('assets/img/Graph2q.png')}}" class="img-responsive img-rounded pull-left" title="Cladogenesis-wise distribution of duplication numbers" style="width:265px;height:135px;">
				</a>
	  		</div>	
		</div>
	</div>
	<div class= "twocolumn">
		<div class="panel panel-primary" id="gradient-background" style="margin-left: 2px; height:177px;">
			<div class="panel-body" style="padding:10px;">
				<a href="{{{ URL::to('/hoxfamilydata') }}}" >
					<div class="portion_one">
						<img img style="border:1px solid silver;" src=" {{asset('assets/img/HOXfront3.png')}}" >
					</div>
					<div class="portion_two" style="padding left:10px;">
						HOX Paralogon</a>
						<p><em><style="font-size: 10px">Hsa:2/7/12/17</em></p>
					</div>
				<a href="{{{ URL::to('/fgfrfamilydata') }}}">
					<div class="portion_one">
						<img style="border:1px solid silver;" src=" {{asset('assets/img/FGFRfront2.png')}}">
					</div>
					<div class="portion_two">
						FGFR Paralogon
						</a>
						<p><em><style="font-size: 10px">Hsa:4/5/8/10</em></p>
					</div>
				<a href="{{{ URL::to('/paralogonfamilydata') }}}">
					<div class="portion_one">
						<img style="border:1px solid silver;"  src=" {{asset('assets/img/paralogonfront2.png')}}">
					</div>
					<div class="portion_two">
						HSA:1/2/8/20
						</a>
					</div>
						
						
				<a href="{{{ URL::to('/mhcfamilydata') }}}">

				<div class="portion_one">
						<img style="border:1px solid silver;" src=" {{asset('assets/img/MHC
							ont.png')}}">
					</div>
					
					<div class="portion_two">
						MHC Paralogon
						</a>
						<p><em><style="font-size: 10px">Hsa:1/6/9/19</em></p>
					</div>
				</div>
		</div>
	</div>
</div>

<div class= "col-sm-6 col-md-3">
	<div class="panel panel-primary">
	 	<div class="panel-heading">
			 <p><a href="{{{ URL::to('paralogy-regions') }}}" ><b> <font color="#FFFFFF" >Paralogy Regions</font></b></a></p>
		</div>
			<div class="panel-body">
			<style>
				#carousel-synteny
				{}
			</style>
			<div id="carousel-synteny" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel-synteny" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-synteny" data-slide-to="1" ></li>
					<li data-target="#carousel-synteny" data-slide-to="2" ></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<a href=" {{asset('assets/img/synteny/hoxblack.png')}}" data-toggle="lightbox" data-html="true" data-title="HSA:2/7/12/17 Synteny" data-footer="" title="">
							<img  src=" {{asset('assets/img/synteny/hoxblack.png')}}" class="img-responsive img-rounded pull-right" title="HSA:2/7/12/17 Synteny" style="width:200px;height:130px;">
						</a>
					</div>
					<div class="item">
						<a href=" {{asset('assets/img/synteny/one.png')}}" data-toggle="lightbox" data-html="true" data-title="HSA:1/2/8/20 Synteny" data-footer="" title=""> 
							<img  src=" {{asset('assets/img/synteny/one.png')}}" class="img-responsive img-rounded pull-right" title="HSA:1/2/8/20 Synteny" style="width:200px;height:130px;"></a>
						</a>
						</a>
					</div>	
					<div class="item">
						<a href=" {{asset('assets/img/synteny/fgfr.png')}}" data-toggle="lightbox" data-html="true" data-title="HSA:4/5/8/10 Synteny" data-footer="" title=""> 
							<img src="{{asset('assets/img/synteny/fgfr.png')}}" alt="Synteny" title="HSA:4/5/8/10 Synteny" style="width:200px;height:130px;"></a>
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
				<p><a href="{{{ URL::to('phylogenomic-analysis') }}}" ><b> <font color="#FFFFFF" >Phylogenomic Analysis</font></b></a></p>				 
			</div>
			<div class="panel-body">
				<style>
					#carousel-example-generic
					{}
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
							<img  src="{{asset('assets/img/phylotrees/SLC4A.png')}}" class="img-responsive img-rounded pull-right" title="HSA:2/7/12/17 N.J Tree" style="width:200px;height:130px;"></a>
						</div>
						<div class="item">
						<a href=" {{asset('assets/img/phylotrees/SLC4Aml.png')}}" data-toggle="lightbox" data-html="true" data-title="HSA:2/7/12/17 M.L Tree" data-footer="" title="">	
							<img  src="{{asset('assets/img/phylotrees/SLC4Aml.png')}}" class="img-responsive img-rounded pull-right" title="HSA:2/7/12/17 M.L Tree" style="width:200px;height:130px;"></a>
						</div>
						<div class="item">
						<a href=" {{asset('assets/img/phylotrees/MYB.png')}}" data-toggle="lightbox" data-html="true" data-title="HSA:1/2/8/20 M.L Tree" data-footer="" title="">	
							<img  src="{{asset('assets/img/phylotrees/MYB.png')}}" class="img-responsive img-rounded pull-right" title="HSA:1/2/8/20 M.L Tree" style="width:200px;height:130px;"></a>
						</div>
						<div class="item">
						<a href=" {{asset('assets/img/phylotrees/MYBml.png')}}" data-toggle="lightbox" data-html="true" data-title="HSA:1/2/8/20 M.L Tree" data-footer="" title="">	
							<img  src="{{asset('assets/img/phylotrees/MYBml.png')}}" class="img-responsive img-rounded pull-right" title="HSA:1/2/8/20 M.L Tree" style="width:200px;height:130px;"></a>
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
<div class= "col-sm-6 col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<p><a href="{{{ URL::to('age-estimates-of-duplications') }}}" ><b> <font color="#FFFFFF" >Age Estimates of Duplications</font></b></a></p>
		</div>
			<div class="panel-body">
			<style>
				 #carousel-time
				{}
			</style>
			<div id="carousel-time" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel-time" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-time" data-slide-to="1" ></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
					<a href="{{asset('assets/img/timeperiod/one.png')}}" data-toggle="lightbox" data-html="true" data-title="HSA:2/7/12/17 Time period" data-footer="" title="">	
						<img  src=" {{asset('assets/img/timeperiod/one.png')}}" class="img-responsive img-rounded pull-right" title="HSA:2/7/12/17 Time period" style="width:200px;height:130px;"></a>	
					</div>
					<div class="item">
					<a href="{{asset('assets/img/timeperiod/two.png')}}" data-toggle="lightbox" data-html="true" data-title="HSA:1/2/8/20 Time period" data-footer="" title="">	
						<img  src="{{asset('assets/img/timeperiod/two.png')}}" class="img-responsive img-rounded pull-right" title="HSA: 1/2/8/20 Time period" style="width:200px;height:130px;"></a>
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
			<p><a href="{{{ URL::to('co-duplication-events')}}}" ><b> <font color="#FFFFFF" >Co-duplication Events</font></b></a></p>
		</div>
		<div class="panel-body">
			<style>
				#carousel-topology
				{ }
			</style>
			<div id="carousel-topology" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel-topology" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-topology" data-slide-to="1" ></li>
					<li data-target="##carousel-topology" data-slide-to="2" ></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<a href=" {{asset('assets/img/topology/one.png')}}" data-toggle="lightbox" data-html="true" data-title="Topology" data-footer="" title="">
							<img src="{{asset('assets/img/topology/one.png')}}" alt="Topology" style="width:200px;height:130px;"></a>
					</div>
					<div class="item">
						<a href=" {{asset('assets/img/topology/three.png')}}" data-toggle="lightbox" data-html="true" data-title="Topology" data-footer="" title="">
							<img src="{{asset('assets/img/topology/three.png')}}" alt="Topology" style="width:200px;height:130px;"></a>
					</div>
					<div class="item">
						<a href=" {{asset('assets/img/topology/two.png')}}" data-toggle="lightbox" data-html="true" data-title="Topology" data-footer="" title="">
							<img src="{{asset('assets/img/topology/two.png')}}" alt="Topology" style="width:200px;height:130px;"></a>
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
<div class= "col-md-12">
		<br>
		<div class= "bottom_column_one">
			<img src="{{asset('assets/img/w.png')}}" alt="Home" id="bottom-image">
		</div>
		<div class= "bottom_column_two">
			<p style="font-family:san-serif; font-size: 16px; color:#868788;"><text-align:justify>The database provides a thorough and robust insight into the evolutionary history of human genome. The database combines carefully curated phylogenetic histories of human multigene families with synteny analysis, relative dating and tree topology comparison aproaches to comprehend the evolutionary mechanisms that shaped our own genome during its recent (Tetrapod specific) and ancient (prior to fish-tetrapod split) history.
			</p>
		</div>
		<br>
</div>
		<br>
</div>
@stop
@section('scripts')
<script>

    function selectGene(e) {
        if ($('#select-gene').selectize().val() == '') {
            alert('Please Select a Member');
            e.preventDefault();
        }
    }

    function selectFamily(e) {
        if ($('#select-state').selectize().val() == '') {
            alert('Please Select a Family');
            e.preventDefault();
        }
    }

    document.getElementById("search-member").addEventListener("click", function(event) {
        selectGene(event);

    });

    document.getElementById("search-family").addEventListener("click", function(event) {
        selectFamily(event);

    });

    $(document).ready(function() {
        
        var xhr;
        var select_family, $select_family;
        var select_gene, $select_gene;
        
        $select_family = $('#select-state').selectize({
            valueField: 'id',
            labelField: 'name',
            searchField: ['name']
        });

        $select_gene = $('#select-gene').selectize({
            valueField: 'id',
            labelField: 'name',
            searchField: ['name']
        });
        
        select_gene = $select_gene[0].selectize;
        select_family = $select_family[0].selectize;

    });

    $(document).ready(function() {
        $('[data-toggle="popover"]').popover();
    });
    
</script>
@stop