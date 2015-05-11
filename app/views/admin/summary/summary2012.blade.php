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
   			 <h4><strong> Summary Table </strong></h4><h6> Summary of the phylogenetic analysis of gene families whose three or more members are residing on human paralogon HSA 1/2/8/20 </h6>
		</div>
	<div class="well" style="padding: 5px">

	<table id="blogs" class="table table-striped table-hover">
		<thead>
			<tr>
				<th class="col-md-2">Family Name</th>
				<th class="col-md-1">Hsa1</th>
				<th class="col-md-1">Hsa2/6a</th>
				<th class="col-md-1">Hsa8/18</th>
				<th class="col-md-1">Hsa20</th>
				<th class="col-md-2">Topology</th>
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
			"sAjaxSource": "{{ URL::to('admin/summary2012/data') }}",
		        "fnDrawCallback": function ( oSettings ) {
	           		$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
	     		}
			});
		});
	</script>
@stop
