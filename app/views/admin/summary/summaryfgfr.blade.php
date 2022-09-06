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
   			 <h4><strong> Table: Duplication Summary </strong></h4><h6> Summary of the phylogenetic analysis of gene families whose three or more members are residing on FGFR paralogon HSA 4/5/8/10 </h6>
   			 <h6> For each gene family the chromosomal location and topologies (in the Newick format) of those genes are given, which arose through duplications after the invertebrates
vertebrates split and before the tetrapod-fish divergence. The percentage bootstrap support of the internal branches is given with each relevant topology.</h6>
<ul>
<li> a, b, c Indicates that the gene family members are positioned on Has 2, Hsa 20 and Hsa 11 respectively.</li>
</ul></h6>
		</div>
	<div class="well" style="padding: 5px">

	<table id="blogs" class="table table-striped table-hover">
		<thead>
			<tr>
				<th class="col-md-2">Family Name</th>
				<th class="col-md-1">Hsa4/2a</th>
				<th class="col-md-1">Hsa5</th>
				<th class="col-md-1">Hsa8/20b</th>
				<th class="col-md-1">Hsa10/11c</th>
				<th class="col-md-4">Consistency_with_FGFR_Phylogeny</th>
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
			"sAjaxSource": "{{ URL::to('summaryfgfr/data') }}",
		        "fnDrawCallback": function ( oSettings ) {
	           		$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
	     		}
			});
		});
	</script>
@stop