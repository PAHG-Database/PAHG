@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ $title }}} :: @parent
@stop

@section('keywords')Blogs administration @stop
@section('author')Laravel 4 Bootstrap Starter SIte @stop
@section('description')Blogs administration index @stop

{{-- Content --}}
@section('content')

	<div class="col-md-9">

		<div class="well" style="padding: 15px">
   			 <h4><strong> Table: Families analysed for FGFR paralogon </strong></h4><h6> List of human gene families inhabiting Human Chromosomes 4/5/8/10 which were used in the phylogenetic analysis of FGFR paralogon. Please click on particular family to view its members. </h6>
		</div>
	</div>
		<div class="col-md-3 pull-right">
            <div class="alert alert-defsult fade in" style="width:300px; padding: 8px 0; margin-bottom: 10px; background-color: #f5f5f5; ">                     
                <h4>&nbsp;&nbsp;FGFR Paralogon Summary</h4><hr style="margin: 10px 0; color: #f5f5f5; background-color: #f5f5f5;">
                        
                <strong>&nbsp;&nbsp;Paralogon:</strong>&nbsp;&nbsp;<div class="pull-right"><a href="#"><span class="label label-default">Hsa: 4/5/8/10</span>&nbsp;&nbsp;&nbsp;</a></div><br>          
                <strong>&nbsp;&nbsp;Number of Families:</strong>&nbsp;&nbsp;<div class="pull-right"><span class="label label-default">80</span>&nbsp;&nbsp;&nbsp;</div><br>
                <strong>&nbsp;&nbsp;Number of Family Members:</strong>&nbsp;&nbsp;<div class="pull-right"><span class="label label-default">539</span>&nbsp;&nbsp;&nbsp;</div><br>
                <strong>&nbsp;&nbsp;Number of Family Sequences:</strong>&nbsp;&nbsp;<div class="pull-right"><span class="label label-default">6152</span>&nbsp;&nbsp;&nbsp;</div><br>
                            
            </div>
        </div>
    
	<div class= "col-md-12">
		<div class="well" style="padding: 5px">

    
	<table id="blogs" class="table table-striped table-hover">
		<thead>
			
			<tr>
				<th class="col-md-4">Gene Family Name</th>
				<th class="col-md-1">Years</th>
				<th class="col-md-2">Number of Included Taxa</th>
				<th class="col-md-4">Functions</th>
				<th class="col-md-1">Number of Sequences Included</th>
			</tr>

		</thead>
		<tbody>
		</tbody>

	</table>
	</div>
	</div>
@stop

{{-- Scripts --}}
@section('scripts')
	<script type="text/javascript">
		var oTable;
		$(document).ready(function() {
			oTable = $('#blogs').dataTable( {
				"sDom": "<'row'<'col-md-6'l><'col-md-6'f>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
				"sPaginationType": "bootstrap",
				"oLanguage": {
					"sLengthMenu": "_MENU_ records per page"
				},
				"bProcessing": true,
				"bServerSide": true,
				"sAjaxSource": "{{ URL::to('fgfrfamily/fgfrdata') }}",
				"fnDrawCallback": function ( oSettings ) {
					$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
				}
			});
		});
	</script>
@stop
