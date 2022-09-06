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
				                <h4>Molecular Function:
				                    <small>{{$family['family']['Function']}}</small>
				                </h4>
				                <h4>Number of Sequences Included:
				                    <small>{{$family['family']['NoSeqIncluded']}}</small>				          
				                <h4>Data Submission:
                                    <!-- <small> <a href="http://localhost:8080/genomedb/public/about#pub{{$family['family']['Year']}}" target="_blank" >{{$family['family']['Year']}}</a></small> -->
                                     <small>{{$family['family']['Year']}} :</small>
                                     <small><a href="{{{ URL::to('/about#pub') }}}"><span>Concerned Citation</span></a></small>
				                </h4>				                
				                <h4>Sequence File:
				                <a href="{{url('view/seqs/'.$family['member']['FID'])}}" target="_blank">View</a>
				                 <a href="{{url('download/seqs/'.$family['member']['FID'])}}">Download</a>	</h4>
                                <h4>Alignment File:
                    <a href="{{url('view/alignment/'.$family['member']['FID'])}}" target="_blank">View</a>
                    <a href="{{url('download/alignment/'.$family['member']['FID'])}}">Download</a>
                </h4>    
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
                            <!-- Modal -->
                            <div class="modal fade large" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Please wait......</h4>
                                        </div>
                                        <div class="modal-body">
                                            <canvas id="tree"></canvas>
                                            <canvas id="tip" width=300 height=25></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
				            <div class="panel-body">
					            <div class="row">
								    <div class="col-sm-6 col-md-4">
								        <div class="thumbnail">
        								    <a href="{{{asset($family['family']['TPPicPath'])}}}" data-toggle="lightbox" data-title="Time Period" data-footer="The relative timing of duplication events that expanded multigene families residing on the paralogon. The branching order within phylogenetic
trees was used to estimate the time windows of gene duplication events relative to major cladogenetic events. The numbers enclosed within the parentheses in front of the gene family names represent
number of duplications experienced by that gene family."  title="">
        										<img src="{{{asset($family['family']['TPPicPath'])}}}" class="img-responsive" title="" style="width:200px">
        									</a>								      
        								    <div class="caption">
        								        <h6><b>Time Period</b></h6>
        								    </div>
                                        </div>
								    </div>
								    <div class="col-sm-6 col-md-4">
								        <div class="thumbnail">
                                            <img id="njt" src="{{{asset($family['family']['NjTreePicPath']) }}}" class="img-responsive" title=" Neighbour Joining Tree"  style="width:200px">
								            <div class="caption">
								                <h6><b>Neighbour Joining Tree</b></h6>
								            </div>
								        </div>
								    </div>
								    <div class="col-sm-6 col-md-4">
								        <div class="thumbnail">
								            <a href="{{{ asset($family['family']['MLTreePicPath']) }}}" data-toggle="lightbox" data-title="Maximum Likelihood Tree" data-footer="" title="">
										      <img src="{{{ asset($family['family']['MLTreePicPath']) }}}" class="img-responsive" title="" style="width:200px">
									        </a>
								            <div class="caption">
								                <h6><b>Maximum Likelihood Tree</b></h6>
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
				                    <small> {{$family['member']['ChrLocation']}}</small>
				                </h4>
				                <h4>Human Protein Accession Number:
				                    <small><a href="http://www.uniprot.org/uniprot/{{$family['member']['HumnaProAccNo']}}" target="_blank" >{{$family['member']['HumnaProAccNo']}}</a></small>
				                </h4>
				                <h4>Sequence File:    
				                <a href="{{url('view/seq/'.$family['member']['MID'])}}" target="_blank">View</a>
				                <a href="{{url('download/seq/'.$family['member']['MID'])}}">Download</a></h4>
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
        								    <a href="{{{asset($family['member']['TopologyPath']) }}}" data-toggle="lightbox" data-html="true" data-title="Co-duplicated groups" data-footer="" title="">
        										<img src="{{{asset($family['member']['TopologyPath'])}}}" class="img-responsive" title="" style="width:200px">
        									</a>								      
        								    <div class="caption">
        								        <h6><b>Co-duplicated groups</b></h6>
        								    </div>
								        </div>
								    </div>
								    <div class="col-sm-6 col-md-4">
								        <div class="thumbnail">
        								    <a href="{{{ asset($family['member']['SyntanyPath']) }}}" data-toggle="lightbox" data-html="true" data-title="Synteny" data-footer="" title="">
        										<img src="{{{asset($family['member']['SyntanyPath']) }}}" class="img-responsive" title="" style="width:200px">
        									</a>								      
        								    <div class="caption">
        								        <h6><b>Synteny</b></h6>
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
    var draw = false;
    $('#myModal').on('shown.bs.modal', function (e) {
        if(!draw){
            draw = true;
            console.clear();
            var canvas = $('canvas#tree');
            var ctx = canvas[0].getContext( '2d' );

            var tipCanvas = document.getElementById("tip");
            var tipCtx = tipCanvas.getContext("2d");

            var img = new Image;
            img.crossOrigin = '';
            img.src = $('#njt').attr('src');
            img.onload = function() {
            var width = img.width;
            var height = img.height;
            canvas.attr( 'width', width );
            canvas.attr( 'height', height );

            setTimeout( function() {
                ctx.clearRect( 0, 0, width, height );
                ctx.drawImage( img, 0, 0, width, height );
                img.remove();

                canvas.setHover([
        {
            color: [ 112, 48, 160, 255 ],
                newColor: [ 112, 48, 160, 255 ],            // you can set this to show the detected area
                difference: 36,                          // the color/alpha values can have a difference of 36
                func: function() {                       // this is called on hover of the detected points
                    showTooltip( canvas, 'Vertebrate Specific Duplication: In tetrapod history', event );
                }
        },
            {
            color: [ 121, 145, 71, 255 ],
                newColor: [ 121, 145, 71, 255 ],            // you can set this to show the detected area
                difference: 36,                          // the color/alpha values can have a difference of 36
                func: function() {                       // this is called on hover of the detected points
                    showTooltip( canvas, 'Vertebrate Specific Duplication: Prior to fish-tetrapod split', event );
                }
        },
        {
            color: [ 255, 0, 0, 255 ],
                newColor: [ 255, 0, 0, 255 ],            // you can set this to show the detected area
                difference: 36,                          // the color/alpha values can have a difference of 36
                func: function() {                       // this is called on hover of the detected points
                    showTooltip( canvas, 'Ancient Duplication: Prior to Vertebrate-Invertebrate split', event );
                }
        },
        
        {
            color: [ 55, 96, 146, 255 ],
                newColor: [ 55, 96, 146, 255 ],            // you can set this to show the detected area
                difference: 36,                          // the color/alpha values can have a difference of 36
                func: function() {                       // this is called on hover of the detected points
                    showTooltip( canvas, 'Vertebrate Specific Duplication: In Mammalian history', event );
                }
        },
        {
            color: [ 255, 255, 0, 255 ],
                newColor: [ 255, 255, 0, 255 ],            // you can set this to show the detected area
                difference: 36,                          // the color/alpha values can have a difference of 36
                func: function() {                       // this is called on hover of the detected points
                    showTooltip( canvas, 'Recent Duplication: Primates Specific', event );
                }
        },

     {
            color: [ 255, 192, 0, 255 ],
                newColor: [ 255, 192, 0, 255 ],            // you can set this to show the detected area
                difference: 36,                          // the color/alpha values can have a difference of 36
                func: function() {                       // this is called on hover of the detected points
                    showTooltip( canvas, 'HSA 2/7/17/17: Co-duplicated group B', event );
                }
        },

     {
            color: [ 0, 176, 240, 255 ],
                newColor: [ 0, 176, 240, 255 ],            // you can set this to show the detected area
                difference: 36,                          // the color/alpha values can have a difference of 36
                func: function() {                       // this is called on hover of the detected points
                    showTooltip( canvas, 'HSA 2/7/17/17: Co-duplicated group C', event );
                }
        },
        {
            color: [ 255, 51, 201, 255 ],
                newColor: [ 255, 51, 201, 255 ],            // you can set this to show the detected area
                difference: 36,                          // the color/alpha values can have a difference of 36
                func: function() {                       // this is called on hover of the detected points
                    showTooltip( canvas, 'HSA 2/7/17/17: Co-duplicated group A', event );
                }
        },
     
         {
            color: [ 146, 208, 80, 255 ],
                newColor: [ 146, 208, 80, 255 ],            // you can set this to show the detected area
                difference: 36,                          // the color/alpha values can have a difference of 36
                func: function() {                       // this is called on hover of the detected points
                    showTooltip( canvas, 'HSA 2/7/17/17: Co-duplicated group D', event );
                }
        }
                
                ]);

                canvas.tooltip({
                    items: '*',
                        content: '',
                        track: true
                });
                 $('#myModalLabel').html('NJ Tree');
            });
            }

    };
    $.fn.setHover = function( options ) {
        var canvas = this;
        var ctx = this[0].getContext( '2d' );
        var imgData = ctx.getImageData( 0, 0, this.width(), this.height() );
        var rgbaData = imgData.data;
        var hover = [];

        for( var i = 0; i < rgbaData.length; i += 4 ) {
            $.each( options, function() {
                    if( rgbaData[i + 0] - this.difference < this.color[0] && rgbaData[i + 0] + this.difference > this.color[0] &&
                        rgbaData[i + 1] - this.difference < this.color[1] && rgbaData[i + 1] + this.difference > this.color[1] &&
                        rgbaData[i + 2] - this.difference < this.color[2] && rgbaData[i + 2] + this.difference > this.color[2] &&
                        rgbaData[i + 3] - this.difference < this.color[3] && rgbaData[i + 3] + this.difference > this.color[3]
                      ) {
                    // x-Coord: (i / 4) % canvas.width()
                    // y-Coord: Math.floor((i / 4) / canvas.width())
                    if( !hover[(i / 4) % canvas.width()] ) hover[(i / 4) % canvas.width()] = [];
                    hover[(i / 4) % canvas.width()].push({
                    y: Math.floor((i / 4) / canvas.width()),
                    props: this
    });
                    if( this.newColor ) {
                    rgbaData[i] = this.newColor[0];
                    rgbaData[i + 1] = this.newColor[1];
                    rgbaData[i + 2] = this.newColor[2];
                    rgbaData[i + 3] = this.newColor[3];
                    }
                    }
                    });

    }

    imgData.data = rgbaData;
    ctx.putImageData( imgData, 0, 0 );

    var show = false;

    canvas.on( 'mousemove.tooltipDetection', function( event ) {
            if( hover[event.offsetX || event.originalEvent.layerX] ) {
            show = false;
            $.each( hover[event.offsetX || event.originalEvent.layerX], function( i, data ) {
                if( data.y === (event.offsetY || event.originalEvent.layerY) ) {
                show = data;
                }
                });

            if( show ) {
            show.props.func( event );

            } else {
            hideTooltip( canvas );
            }
            } else {
            hideTooltip( canvas );
            }
            });
    };

    var tooltipVisible = true;

    function showTooltip( element, content, e ) {
        mouseX = parseInt(e.clientX );
        mouseY = parseInt(e.clientY );
        // Put your mousemove stuff here
        canvas.css( 'cursor', 'pointer' );
        var dx = mouseX;
        var dy = mouseY;
        var pos = getCursorPosition(element, e);
        tipCanvas.style.left = (pos[0])+"px";
        tipCanvas.style.top = (pos[1])+"px";
        tipCtx.clearRect(0, 0, tipCanvas.width, tipCanvas.height);
        //                  tipCtx.rect(0,0,tipCanvas.width,tipCanvas.height);
        tipCtx.fillText(content, 5, 15);
    }

    function hideTooltip( element ) {
        canvas.css( 'cursor', '' );
        tipCanvas.style.left = "-800px";
    }
    }); 

    function getCursorPosition(canvas, event) {
        var x, y;

        canoffset = $(canvas).offset();
        x = event.clientX + document.body.scrollLeft + document.documentElement.scrollLeft - Math.floor(canoffset.left);
        y = event.clientY + document.body.scrollTop + document.documentElement.scrollTop - Math.floor(canoffset.top) + 1;

        return [x,y];
    }

    $('#njt').click(function(){

        $('#myModal').modal('show');

    });
</script>
@stop
