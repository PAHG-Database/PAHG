@extends('site.layouts.default')
{{-- Content --}}
@section('content')

<div class="row">
	<h1 class="text-center">HOX GENE Search Page</h1>
	<div class="well">
		<form method="GET" action="index.php/search">
			<div class="form-group control-group">
				<label for="select-beast">Family:</label>
				<select id="select-state" name="fid" placeholder="Pick a Family...">
					<option value="">Select a family...</option>
					@foreach ($posts as $post)
					<option value="{{$post->FID}}">{{$post->GeneFamilyName}}</option>
					@endforeach
				</select>
				<label for="select-beast" style="margin-top:20px">Members:</label>
				<select id="select-city" name="mid" placeholder="Select a member..."></select>
			</div>
			<button type="submit" class="btn btn-primary btn-lg btn-block">SEARCH</button>
		</form>
    </div>
</div>

@stop