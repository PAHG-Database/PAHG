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
   			 <h4><strong> Table: Duplication Summary </strong></h4><h6> Summary of the phylogenetic analysis of gene families whose three or more members are residing on human MHC paralogon HSA 1/6/9/19 </h6>
   			 <h6> For each gene family the chromosomal location and topologies (in the Newick format) of those genes are given, which arose through duplications after the invertebrates
vertebrates split and before the tetrapod-fish divergence. The percentage bootstrap support of the internal branches is given with each relevant topology.</h6>
<ul>
<li> a Represents that a gene family member is not residing on human MHC paralogon.</li>
<li> b Indicates that the gene family member is positioned on a different chromosome, i.e. KDM4D/KDM4E is on Hsa 11, PLOD2 and PLOD3 are on Hsa3 and Hsa7 respectfully.</li>
<li> c Depicts the sub family.</li></ul></h6>
		</div>
	<div class="well" style="padding: 5px">

	<table id="blogs" class="table table-striped table-hover">
		<thead>
			<tr>
				<th class="col-md-2">Family Name</th>
				<th class="col-md-1">Hsa1/15a</th>
				<th class="col-md-1">Hsa6</th>
				<th class="col-md-1">Hsa9/18</th>
				<th class="col-md-1">Hsa19</th>
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
			"sAjaxSource": "{{ URL::to('summarymhc/data') }}",
		        "fnDrawCallback": function ( oSettings ) {
	           		$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
	     		}
			});
		});
	</script>
@stop
