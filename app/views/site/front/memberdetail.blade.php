@extends('site.layouts.default')
{{-- Content --}}
@section('content')
<div class="panel-group" id="accordion">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" class="">Family Details</a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse" aria-expanded="true" style="">
            <div class="panel-body">
            	<div class="row">
					<h1 class="text-center">{{$family['family']['GeneFamilyName']}}</h1>
				    <div class="col-lg-4">
				        <div class="panel panel-default">
				            <div class="panel-heading">
				                Details
				            </div>
				            <div class="panel-body">
				                <h4>Number of Taxa Included:
				                    <small>{{$family['family']['NoIncludedTaxa']}}</small>
				                </h4>
				                <h4>Function:
				                    <small>{{$family['family']['Function']}}</small>
				                </h4>
				                <h4>Number of Sequences Included:
				                    <small>{{$family['family']['NoSeqIncluded']}}</small>
				          
				                <h4>Year:
				                    <small>{{$family['family']['Year']}}</small>
				                </h4>
				                
				                <h4>Sequence:
				                	
				                </h4>
				                <a href="{{url('download/seqs/'.$family['member']['FID'])}}">Download</a>
				              
				            </div>
				            <!-- /.panel-body -->
				        </div>
				        <!-- /.panel -->
				    </div>
				    <!-- /.col-lg-4 -->
				    <div class="col-lg-8">
				        <div class="panel panel-default">
				            <div class="panel-heading">
				                Images
				            </div>
				            <div class="panel-body">
					            <div class="row">
								  <div class="col-sm-6 col-md-4">
								    <div class="thumbnail">
								    <a href="data:image/jpeg;base64, {{{ $family['family']['TPPic'] }}}" data-toggle="lightbox" data-title="TPPic" data-footer="" title="">
										<img src="data:image/jpeg;base64, {{{ $family['family']['TPPic'] }}}" class="img-responsive" title="" style="width:200px">
									</a>
								      
								      <div class="caption">
								        <h3>Time Period</h3>
								      </div>
								    </div>
								  </div>
								  <div class="col-sm-6 col-md-4">
								    <div class="thumbnail">
								    <a href="data:image/jpeg;base64, {{{ $family['family']['NjTreePic'] }}}" data-toggle="lightbox" data-title="NjTreePic" data-footer="" title="">
										<img src="data:image/jpeg;base64, {{{ $family['family']['NjTreePic'] }}}" class="img-responsive" title="" style="width:200px">
									</a>
								      <div class="caption">
								        <h3>Neighbour Joining Tree</h3>
								      </div>
								    </div>
								  </div>
								  <div class="col-sm-6 col-md-4">
								    <div class="thumbnail">
								    <a href="data:image/jpeg;base64, {{{ $family['family']['MLTreePic'] }}}" data-toggle="lightbox" data-title="MLTreePic" data-footer="" title="">
										<img src="data:image/jpeg;base64, {{{ $family['family']['MLTreePic'] }}}" class="img-responsive" title="" style="width:200px">
									</a>
								      <div class="caption">
								        <h5>Maximum Likelihood Tree</h5>
								      </div>
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
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="" aria-expanded="true">Member Details</a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse in" aria-expanded="true" style="">
            <div class="panel-body">
            	<div class="row">
					<h1 class="text-center">{{$family['member']['MemberName']}}</h1>
				    <div class="col-lg-4">
				        <div class="panel panel-default">
				            <div class="panel-heading">
				                Details
				            </div>
				            <div class="panel-body">
				                <h4>Chromosome Location:
				                    <small>{{$family['member']['ChrLocation']}}</small>
				                </h4>
				                <h4>Humnan Protein Accession Number:
				                    <small><a href="http://www.uniprot.org/uniprot/{{$family['member']['HumnaProAccNo']}}" target="_blank" >{{$family['member']['HumnaProAccNo']}}</a></small>
				                </h4>
				                <h4>Sequence File:

				                </h4>
				                <a href="{{url('download/seq/'.$family['member']['MID'])}}">Download</a>
				            </div>
				            <!-- /.panel-body -->
				        </div>
				        <!-- /.panel -->
				    </div>
				    <!-- /.col-lg-4 -->
				    <div class="col-lg-8">
				        <div class="panel panel-default">
				            <div class="panel-heading">
				                Images
				            </div>
				            <div class="panel-body">
					            <div class="row">
								  <div class="col-sm-6 col-md-4">
								    <div class="thumbnail">
								    <a href="data:image/jpeg;base64, {{{ $family['member']['Topology'] }}}" data-toggle="lightbox" data-html="true" data-title='<div class="content"> <ul> <li class="red"><a href="http://www.ncbi.nlm.nih.gov/pmc/articles/PMC2235844/">Abbasi et al., 2007</a> </li> <li class="blue"><a href="http://www.ncbi.nlm.nih.gov/pubmed/20696259">Abbasi et al., 2010</a></li> <li class="pink"><a href="http://www.ncbi.nlm.nih.gov/pubmed/23142696">Asrar et al., 2013</a></li> <li class="green"><a href="http://www.ncbi.nlm.nih.gov/pubmed/24821622">Ambreen et al., 2014</a></li> </ul> </div>' data-footer="" title="">
										<img src="data:image/jpeg;base64, {{{ $family['member']['Topology'] }}}" class="img-responsive" title="" style="width:200px">
									</a>
								      
								      <div class="caption">
								        <h3>co-duplicated groups</h3>
								      </div>
								    </div>
								  </div>
								  <div class="col-sm-6 col-md-4">
								    <div class="thumbnail">
								    <a href="data:image/jpeg;base64, {{{ $family['member']['Syntany'] }}}" data-toggle="lightbox" data-html="true" data-title='<div class="content"> <ul> <li class="red"><a href="http://www.ncbi.nlm.nih.gov/pmc/articles/PMC2235844/">Abbasi et al., 2007</a> </li> <li class="blue"><a href="http://www.ncbi.nlm.nih.gov/pubmed/20696259">Abbasi et al., 2010</a></li> <li class="pink"><a href="http://www.ncbi.nlm.nih.gov/pubmed/23142696">Asrar et al., 2013</a></li> <li class="green"><a href="http://www.ncbi.nlm.nih.gov/pubmed/24821622">Ambreen et al., 2014</a></li> </ul> </div>' data-footer="" title="">
										<img src="data:image/jpeg;base64, {{{ $family['member']['Syntany'] }}}" class="img-responsive" title="" style="width:200px">
									</a>
								      
								      <div class="caption">
								        <h3>Synteny</h3>
								      </div>
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
            </div>
        </div>
    </div>
</div>


@stop

@section('scripts')
<script>
function getUrlParameter(sParam)
{
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++) 
    {
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam) 
        {
            return sParameterName[1];
        }
    }
}  
jQuery( document ).ready( function( $ ) {
 
    $( '#form-seq-download' ).submit( function(e) {
 		alert('test');
 		return false;
        //.....
        //show some spinner etc to indicate operation in progress
        //.....
 		e.preventDefault();	


        var jqxhr = $.post(
            $( this ).prop( 'action' ),
            {
                "_token": $( this ).find( 'input[name=_token]' ).val(),
                "format": $( '#output' ).val(),
                "mid"	: getUrlParameter('mid')
            },
            function( data ) {
                //do something with data/response returned by server
                console.log(data);
                document.location = data.url;
            },
            'json'
	    );
 
        //.....
        //do anything else you might want to do
        //.....
 
        //prevent the form from actually submitting in browser
        return false;
    } );
 
} );

</script>
@stop