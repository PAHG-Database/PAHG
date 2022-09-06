@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ $title }}} :: @parent
@stop

@section('keywords')Blogs administration @stop
@section('author')Laravel 4 Bootstrap Starter SIte @stop
@section('description')Family administration index @stop

{{-- Content --}}
@section('content')
	
		<div class="well" style="padding: 15px">
   			 <h4><strong> Table: Gene Family Analysis </strong></h4><h6> Statistical analysis of gene families residing on human paralogons </h6>
   			 <h6> Table shows the number of gene families present on each paralogon, number of gene members and the sequences used to predict the phylogenomic history of these gene families.</h6>
</h6>
		</div>
	<div class="well" style="padding: 5px">

	<table id="blogs" class="table table-striped table-hover">
		<thead>
			<tr>
				<th class="col-md-2">Human Paralogon</th>
				<th class="col-md-1">No. of Gene Families</th>
				<th class="col-md-1">No. of Gene Members</th>
				<th class="col-md-1">No. of Sequences employed for Phylogenomic Analysis</th>
				
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>
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
			"sAjaxSource": "{{ URL::to('Gene_Family_Statistics/data') }}",
		        "fnDrawCallback": function ( oSettings ) {
	           		$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
	     		}
			});
		});
	</script>
@stop