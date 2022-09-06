@extends('site.layouts.default')
{{-- Content --}}
@section('content')
<div id="main">
  <div id="main-inner" class="clear-block">
    <div id="content">
      <div id="content-inner">
        <div id="content-header">
          <h1 class="title ">FAQ about PAHG Database</h1>
        </div> <!-- /#content-header -->
        <div id="content-area">           
          <div id="node-198" class="node">
              <div class="content clear-block"><p>&nbsp;</p><p><strong>General</strong></p>
                <ol>
                 <li><a href="{{{ URL::to('/faqs') }}}">What is PAHG?</a></li>
                 <li><a href="#Whatis">Why do we need it?</a></li>
                 <li><a href="#Whatis">Where can I find information about gene famlies present in databse?</a></li>
                  <li><a href="#Whatis">Paralogons present in the database?</a></li>
                </ol>
                <hr style="size: 4px;">
                <h3 class="Title1"><span style="color: #125699;"><strong>General</strong></span></h3>
                <p><span class="Title1"><strong><a name="whatisvga" id="whatisvga"></a><span style="color: #125699;">What is PAHG?</span></strong></span></p>
                <p>Phylogenomic Analysis of Human Genome (PAHG) is a database that depecits the major evolutinary events.</p>
                <p><span class="Title1"><a name="Whatis" id="Whatis"></a><span style="color: #125699;"><strong>Why do we need it?</strong></span></span><br>
                <br>
                Scientist are very keen to know  about the duplication mechanisms means whether these are whole genome duplicatons or segmental duplications, so in order to reveal this mystery this database is created.</p>
                <p><span class="Title1"><strong><a name="information" id="information"></a><span style="color: #125699;">Where can I find information about gene Famlies Present in databse?</span></strong></span></p>
                <p>You can search about all the gene famlies present in database by using the <a href="/{{{ URL::to('/find') }}}">PAHG search</a> facility.</p>
                <p><span class="Title1"><strong><a name="information" id="information"></a><span style="color: #125699;">Paralogons present in the database?</span></strong></span></p>
                <p>There are three Paralogons present in this database that will reveal the concept of 2R and not 2R.</p><p>&nbsp;</p><p>&nbsp;</p>
                <div class="mcePaste" style="position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;">
                  <p class="MsoNoSpacing">Does the HGNC collaborate with specialist nomenclature commmittees and advisors?</p>
                  <p class="MsoNoSpacing"><span style="mso-fareast-language: EN-GB;">&nbsp;</span></p>
                </div>
              </div>
              <div class="clear-block">
                <div class="meta">
                  <div class="terms"></div>
                </div>
              </div>
          </div>
        </div>         
      </div>
    </div> <!-- /#content-inner, /#content -->
  </div>
</div>

@stop