@extends('site.layouts.default')
{{-- Content --}}
@section('content')

<div class="row">
	<h1 class="text-center">{{$family['GeneFamilyName']}}</h1>
    <div class="col-lg-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                Details
            </div>
            <div class="panel-body">
                <h4>Number of Included Taxa:
                    <small>{{$family['NoIncludedTaxa']}}</small>
                </h4>
                <h4>Function:
                    <small>{{$family['Function']}}</small>
                </h4>
                <h4>Number of Sequences Included:
                    <small>{{$family['NoSeqIncluded']}}</small>
                </h4>
                
                <h4>Year:
                    <small>{{$family['Year']}}</small>
                </h4>
                 <h4>Sequence:
				                	{{ Form::open( array(
										    'route' => 'seq.download',
										    'method' => 'post',
										    'accept-charset' => 'UTF-8',
										    'id' => 'form-seq-download'
										) ) }}

				                    <select name="output" class="fselect required _stt valid" id="output">
				                    	<optgroup label="Bed Format"><option value="bed">BED Format</option></optgroup>
				                    	<optgroup label="FASTA sequence"><option value="fasta" selected="selected">FASTA sequence</option></optgroup>
				                    	<optgroup label="Feature File"><option value="csv">CSV (Comma separated values)</option><option value="tab">Tab separated values</option><option value="gtf">Gene Transfer Format (GTF)</option><option value="gff">Generic Feature Format</option><option value="gff3">Generic Feature Format Version 3</option></optgroup>
				                    	<optgroup label="Flat File"><option value="embl">EMBL</option><option value="genbank">GenBank</option></optgroup>
				                    </select>
				                    {{ Form::submit( 'Download', array(
									    'id' => 'btn-download',
									) ) }}
				
									{{ Form::close() }}
				                </h4>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-4 -->
    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <b>Images</b>
            </div>
            <div class="panel-body">
	            <div class="row">
				  
				  <div class="col-sm-12 col-md-4 ">
				    <div class="thumbnail">
				    	<div class="caption">
				        <h6 ><b>Neighbour Joining Tree</b></h6>
				      </div>
				    <a href="data:image/jpeg;base64, {{{ $family['NjTreePic'] }}}" data-toggle="lightbox" data-title="NjTreePic" data-footer="" title="">
							<img src="data:image/jpeg;base64, {{{ $family['NjTreePic'] }}}" class="img-responsive" title="" style="width:200px">
						</a>
				      
				      
				    </div>
				  </div>
				  <div class="col-sm-12 col-md-4 col-md-offset-4">
				    <div class="thumbnail">
				    	<div class="caption">
				        <h6><b>Maximum Likelihood Tree</b></h6>
				      </div>
				     <a href="data:image/jpeg;base64, {{{ $family['MLTreePic'] }}}" data-toggle="lightbox" data-html="true" data-title="NLTreePic" data-footer="" title="">
							<img src="data:image/jpeg;base64, {{{ $family['MLTreePic'] }}}" class="img-responsive" title="" style="width:200px">
						</a>
				      
				      
				    </div>
				  </div>
				   <div class="col-sm-12 col-md-5 col-md-offset-4">
				    <div class="thumbnail">
				    	<div class="caption">
				        <h6><b>Synteny</b></h6>
				      </div>
				     <a href="data:image/jpeg;base64, {{{ $family['Syntany'] }}}" data-toggle="lightbox"  data-html="true" @if($family['Year'] != "2015") data-title='<div class="content"> <ul> <li class="red"><a href="http://www.ncbi.nlm.nih.gov/pmc/articles/PMC2235844/">Abbasi et al., 2007</a> </li> <li class="blue"><a href="http://www.ncbi.nlm.nih.gov/pubmed/20696259">Abbasi et al., 2010</a></li> <li class="pink"><a href="http://www.ncbi.nlm.nih.gov/pubmed/23142696">Asrar et al., 2013</a></li> <li class="green"><a href="http://www.ncbi.nlm.nih.gov/pubmed/24821622">Ambreen et al., 2014</a></li> </ul> </div>' @endif data-footer="" title="">
							<img src="data:image/jpeg;base64, {{{ $family['Syntany'] }}}" class="img-responsive" title="" style="width:200px">
						</a>
				    </div>
				  </div>
				  
				 <div class="col-sm-12 col-md-4  ">
				    <div class="thumbnail ">
				    	<div class="caption">
				        <h6><b>Co-duplicated groups</b></h6>
				      </div>
				    <a href="data:image/jpeg;base64, {{{ $family['Tree'] }}}" data-toggle="lightbox" data-html="true"  @if($family['Year'] != "2015") data-title='<div class="content"> <ul> <li class="red"><a href="http://www.ncbi.nlm.nih.gov/pmc/articles/PMC2235844/">Abbasi et al., 2007</a> </li> <li class="blue"><a href="http://www.ncbi.nlm.nih.gov/pubmed/20696259">Abbasi et al., 2010</a></li> <li class="pink"><a href="http://www.ncbi.nlm.nih.gov/pubmed/23142696">Asrar et al., 2013</a></li> <li class="green"><a href="http://www.ncbi.nlm.nih.gov/pubmed/24821622">Ambreen et al., 2014</a></li> </ul> </div>' @endif data-footer="" title="">
							<img src="data:image/jpeg;base64, {{{ $family['Tree'] }}}" class="img-responsive" title="" style="width:200px">
						</a>
				    </div>
				  </div>
				 <div class="col-sm-12 col-md-4 col-md-offset-4">
				    <div class="thumbnail">
				    	<div class="caption ">
				        <h6><b>Time Period</b></h6>
				      </div>
						<a href="data:image/jpeg;base64, {{{ $family['TPPic'] }}}" data-toggle="lightbox" data-html="true"   @if($family['Year'] != "2015") data-title='<div class="content"> <ul> <li class="red"><a href="http://www.ncbi.nlm.nih.gov/pmc/articles/PMC2235844/">Abbasi et al., 2007</a> </li> <li class="blue"><a href="http://www.ncbi.nlm.nih.gov/pubmed/20696259">Abbasi et al., 2010</a></li> <li class="pink"><a href="http://www.ncbi.nlm.nih.gov/pubmed/23142696">Asrar et al., 2013</a></li> <li class="green"><a href="http://www.ncbi.nlm.nih.gov/pubmed/24821622">Ambreen et al., 2014</a></li> </ul> </div>' @endif data-footer="" title="">
							<img src="data:image/jpeg;base64, {{{ $family['TPPic'] }}}" class="img-responsive" title="" style="width:200px">
						</a>
				      
				    </div>
				  </div>

				</div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-4 -->
    
</div>

@stop
