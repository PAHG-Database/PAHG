   @extends('site.layouts.default')
{{-- Content --}}
@section('content')
    

<h1 xmlns="http://www.w3.org/1999/xhtml" id="sites-page-title-header" style="" align="left">
<span id="sites-page-title" dir="ltr" tabindex="-1" style="outline: none"> <font color="#00a3cc">Gene Family Analysis </font></span>
</h1>
<br><br>
<h5 xmlns="http://www.w3.org/1999/xhtml" id="sites-page-title-header" style="" align="center" "justify">
<span id="sites-page-title" dir="ltr" tabindex="-1" style="outline: none"><b><i> Summary of Human gene families and its members with total number of sequences analyzed in phylogenomic analysis</span>
</i></b></h5>
<table align="center">
<tbody>    
<tr><td><img class="alignnone size-medium wp-image-944" title="" alt="" src="{{asset('assets/img/GeneFamilyAnalysis_1.jpg')}}" width="878" height="189" align="center"></a></td></tr>
<tr><td><a href="{{{ URL::to('/hoxfamilydata') }}}"> <img class="alignnone size-medium wp-image-944" title="" alt="" src="{{asset('assets/img/GeneFamilyAnalysis_2.jpg')}}" width="878" height="99"></a></td></tr>
<tr><td><a href="{{{ URL::to('/fgfrfamilydata') }}}"> <img class="alignnone size-medium wp-image-944" title="" alt="" src="{{asset('assets/img/GeneFamilyAnalysis_3.jpg')}}" width="878" height="99"></a></td></tr>
<tr><td><a href="{{{ URL::to('/mhcfamilydata') }}}"> <img class="alignnone size-medium wp-image-944" title="" alt="" src="{{asset('assets/img/GeneFamilyAnalysis_4.jpg')}}" width="878" height="99"></a></td></tr>
<tr><td><a href="{{{ URL::to('/paralogonfamilydata') }}}"> <img class="alignnone size-medium wp-image-944" title="" alt="" src="{{asset('assets/img/GeneFamilyAnalysis_5.jpg')}}" width="878" height="99"></a></td></tr>
<tr><td><img class="alignnone size-medium wp-image-944" title="" alt="" src="{{asset('assets/img/GeneFamilyAnalysis_6.jpg')}}" width="878" height="99"></a></td></tr>
</tbody>
</table>
<br><br>
<p xmlns="http://www.w3.org/1999/xhtml" id="sites-page-title-header" style="" align="center">
<span id="sites-page-title" dir="ltr" style="outline: none"><strong><i><b>Table:</b></strong> This table summarized total number of gene families and their members that residing on four human paralogons i.e. HOX (2/7/12/17), FGFR (4/5/8/10), MHC (1/6/9/19) and 1/2/8/20. Number of sequences varies that used in phylogenomic analysis of four human paralogy blocks.</span>
</i></p>
    <!-- </div> -->
 
@stop