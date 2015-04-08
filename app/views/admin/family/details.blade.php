@extends('admin.layouts.modal')

{{-- Content --}}
@section('content')
	{{-- Edit Blog Form --}}
	<table id="blogs" class="table table-striped table-hover">
		<thead>
			<tr>
				<th class="col-md-3">Gene Family Name</th>
				<th class="col-md-1">Sequence</th>
				<th class="col-md-1">Year</th>
				<th class="col-md-2">Number of Included Taxa</th>
				<th class="col-md-4">Function</th>
				<th class="col-md-1">Number of Sequences Included</th>
				<th class="col-md-1">TP Picture</th>
				<th class="col-md-1">NJ Picture</th>
				<th class="col-md-1">ML Picture</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{{ $post->GeneFamilyName }}}</td> 
				<td>{{{ $post->seqfile }}}</td> 
				<td>{{{ $post->Year }}}</td> 
				<td>{{{ $post->NoIncludedTaxa }}}</td> 
				<td>{{{ $post->Function }}}</td> 
				<td>{{{ $post->NoSeqIncluded }}}</td> 
				<td><img src="data:image/jpeg;base64,{{{ $post->TPPic }}}" width="200" height="300"></td> 
				<td><img src="data:image/jpeg;base64,{{{ $post->NjTreePic }}}" width="200" height="300"></td> 
				<td><img src="data:image/jpeg;base64,{{{ $post->MLTreePic }}}" width="200" height="300"></td> 
			</tr>
		</tbody>
	</table>
@stop
