@extends('site.layouts.default')
{{-- Content --}}
@section('content')

<div class= " col-md-3  col-md-pull-1" >
        <div class="panel panel-primary">

                <div class="panel-body">
                    <ul class="nav  nav-stacked">
                        <li><a href="{{{ URL::to('/about#cit') }}}"><span class="glyphicon glyphicon-th-large"> General Information</span></a></li>
                        <li class="divider"></li>
                        <li><a href="{{{ URL::to('/about#cit') }}}"><span class="glyphicon glyphicon-th-large"> Acknowledgements</span></a></li>
                        <li class="divider"></li>
                        <li><a href="{{{ URL::to('/about#cit') }}}"><span class="glyphicon glyphicon-th-large"> Funding</span></a></li>
                       <li class="divider"></li>
                        <li><a href="{{{ URL::to('/about#cit') }}}"><span class="glyphicon glyphicon-th-large"> Data Access Policy</span></a></li>
                        <li class="divider"></li>
                        <li><a href="{{{ URL::to('/about#cit') }}}"><span class="glyphicon glyphicon-th-large"> Citing the database</span></a></li>
                    </ul>
                </div> 
                </div>
                </div>
 <div class= " col-md-9 " >           
<div class="row">
  
    <div class="span9">
        <section id="general">
            <div class="page-header">
                <h3>General Information</h3>                                
            </div>
            <p><i>VGA</i> database (Vertebrate Genome Architucture) is  database that throws light on the genome duplication mechanism and elobrates the concept of 2r and not 2r.</p>
        </section>
        <section id="acknowledge">
            <div class="page-header">
                <h3>Acknowledgements</h3>                                
            </div>
            <b>We would like to acknowledge:</b>
            <br>
            <br>
          <ul>
            <li>Comparative and Evolutionary Genomics Lab, National Center for Bioinformatics, Quaid-i-Azam University, Islamabad, Pakistan.</li>
            <li>Yasir Abbasi, Aftab Ahmad, Shakeel Shafique for technical support.</li>
           
          </ul>
        </section>
        <section id="funding">
            <div class="page-header">
                <h3>Funding</h3>                                
            </div>
            <p>This project is funded by Higher Education Commission of Pakistan.</p>
        </section>
        <section id="access">
            <div class="page-header">
                <h3>Data Access Policy</h3>                                
            </div>
            <p>Data, sequences, and other information at this site are accessible for the public. However, they are not guaranteed to be accurate as this is an ongoing research. Data will be updated from time to time. When using data obtained from this website, it is important to cite the original publications and contributors of that data and the database. Please see "Citing the database" section below.</p>
        </section>
        <section id="cit">
            <div class="page-header">
                <h3>Citing the database</h3>                                
            </div>
            <p>
                If a specific page of the database has been used, we would be pleased if you cite us in your article. Please use the following format:
                <br><br>
                The YersiniaBase, [the URL of the page being referred to], on yersinia.um.edu.my, [date accessed].
                <br><br>
                 Example: 
                 <br><br>
                 The YersiniaBase, [http://yersinia.um.edu.my/index.php/orf/detail/1/1/150], on yersinia.um.edu.my, [May 10, 2013].
            </p>
        </section>
    </div>
</div></div>
@stop