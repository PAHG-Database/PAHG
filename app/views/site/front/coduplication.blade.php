 @extends('site.layouts.default')
{{-- Content --}}
@section('content')
  
<h1 xmlns="http://www.w3.org/1999/xhtml" style="" align="left">
 <font color="4c0080"><strong>Co-duplication Events</font></span></strong>
</h1>

<br><br>
<h5 xmlns="http://www.w3.org/1999/xhtml" style="" align="center" "justify">
<span id="sites-page-title" dir="ltr" tabindex="-1" style="outline: none"><b><i> List of coduplicated groups along with relevant chromosomes location on human paralogy blocks</span>
</i></b></h5>
<table align="center">
<tbody>    
<tr><td><img class="alignnone size-medium wp-image-944" title="" alt="" src="{{asset('assets/img/co-duplication_1.jpg')}}" width="878" height="109" align="center"></a></td></tr>
<tr><td><a href="{{{ URL::to('/hox-paralogon-co-duplicated-groups') }}}"> <img class="alignnone size-medium wp-image-944" title="" alt="" src="{{asset('assets/img/co-duplication_2.jpg')}}" width="878" height="99"></a></td></tr>
<tr><td><a href="{{{ URL::to('/fgfr-paralogon-co-duplicated-groups') }}}"> <img class="alignnone size-medium wp-image-944" title="" alt="" src="{{asset('assets/img/co-duplication_3.jpg')}}" width="878" height="99"></a></td></tr>
<tr><td><a href="{{{ URL::to('/mhc-paralogon-co-duplicated-groups') }}}"> <img class="alignnone size-medium wp-image-944" title="" alt="" src="{{asset('assets/img/co-duplication_4.jpg')}}" width="878" height="99"></a></td></tr>
<tr><td><a href="{{{ URL::to('/hsa-12820-paralogon-co-duplicated-groups') }}}"> <img class="alignnone size-medium wp-image-944" title="" alt="" src="{{asset('assets/img/co-duplication_5.jpg')}}" width="878" height="99"></a></td></tr>
</tbody>
</table>
<br><br>
<p xmlns="http://www.w3.org/1999/xhtml" id="sites-page-title-header" style="" align="center">
<span id="sites-page-title" dir="ltr" style="outline: none"><strong><i><b>Table:</b></strong> This table summarized different number of co duplicated groups that are independently analyzed through tree topology comparison of human protein coding gene families residing on four human paralogons i.e. HOX (2/7/12/17), FGFR (4/5/8/10), MHC (1/6/9/19) and 1/2/8/20. Physical location of genes that evolved through coduplication event is also mentioned in last column.</span>
</i></p>
    <!-- </div> -->
 
@stop