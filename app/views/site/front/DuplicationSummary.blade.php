   @extends('site.layouts.default')
{{-- Content --}}
@section('content')
  
<h1 xmlns="http://www.w3.org/1999/xhtml" style="" align="left">
 <font color="4c0080"><strong>Duplication Summary</font></span></strong>
</h1>

<br><br>
<h5 xmlns="http://www.w3.org/1999/xhtml" style="" align="center" "justify">
<span id="sites-page-title" dir="ltr" tabindex="-1" style="outline: none"><b><i> Describe Human Paralogon and its total number of duplication before Vertebrate Invertebrate split that leads to primate specific duplication number</span>
</i></b></h5><br>
<table align="center">
<tbody>    
<tr><td><img class="alignnone size-medium wp-image-944" title="" alt="" src="{{asset('assets/img/DuplicationEvents_1.jpg')}}" width="878" height="109" align="center"></a></td></tr>
<tr><td><a href="{{{ URL::to('/age-estimates-of-duplications-hox-paralogon') }}}"> <img class="alignnone size-medium wp-image-944" title="" alt="" src="{{asset('assets/img/DuplicationEvents_2.jpg')}}" width="878" height="99"></a></td></tr>
<tr><td><a href="{{{ URL::to('/age-estimates-of-duplications-fgfr-paralogon') }}}"> <img class="alignnone size-medium wp-image-944" title="" alt="" src="{{asset('assets/img/DuplicationEvents_3.jpg')}}" width="878" height="99"></a></td></tr>
<tr><td><a href="{{{ URL::to('/age-estimates-of-duplications-mhc-paralogon') }}}"> <img class="alignnone size-medium wp-image-944" title="" alt="" src="{{asset('assets/img/DuplicationEvents_4.jpg')}}" width="878" height="99"></a></td></tr>
<tr><td><a href="{{{ URL::to('/age-estimates-of-duplications-hsa-12820-paralogon') }}}"> <img class="alignnone size-medium wp-image-944" title="" alt="" src="{{asset('assets/img/DuplicationEvents_5.jpg')}}" width="878" height="99"></a></td></tr>
<tr><td><img class="alignnone size-medium wp-image-944" title="" alt="" src="{{asset('assets/img/DuplicationEvents_6.jpg')}}" width="878" height="99"></a></td></tr>
</tbody>
</table>
<br><br>
<p xmlns="http://www.w3.org/1999/xhtml" id="sites-page-title-header" style="" align="center" "justify">
<span id="sites-page-title" dir="ltr" style="outline: none"><strong><i><b>Table:</b></strong> This table covers about 1179 total duplication events lied on four human paralogy blocks HOX (2/7/12/17), FGFR (4/5/8/10), MHC (1/6/9/19) and 1/2/8/20. All duplication numbers are calculated by using relative timing of gene duplication events corresponding to divergence of major taxa of organisms. Horizontal bar of table elucidate time period in which different duplication events occur before vertebrate invertebrate split and then leads to mammals specific and primate specific duplication numbers. This table clearly represent duplication number is in penalty that scatter among entire animal lineage.</span>
</i></p>
    <!-- </div> -->
 
@stop