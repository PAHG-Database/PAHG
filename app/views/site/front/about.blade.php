@extends('site.layouts.default')
{{-- Content --}}
@section('content')
<ol class="breadcrumb">
  <li><a href="{{{ URL::to('') }}}">Home</a></li>
  <li class="active">About</a></li>
  
</ol>

<div class= " col-md-3  col-md-pull-1" >
        <div class="panel panel-primary">

                <div class="panel-body">
                    <ul class="nav  nav-stacked">
                        <li><a href="{{{ URL::to('/about#gen') }}}"><span class="glyphicon glyphicon-th-large"> General Information</span></a></li>
                        <li class="divider"></li>
                        <li><a href="{{{ URL::to('/about#ack') }}}"><span class="glyphicon glyphicon-th-large"> Acknowledgements</span></a></li>
                        <li class="divider"></li>
                        <li><a href="{{{ URL::to('/about#fun') }}}"><span class="glyphicon glyphicon-th-large"> Funding</span></a></li>
                       <li class="divider"></li>
                        <li><a href="{{{ URL::to('/about#data') }}}"><span class="glyphicon glyphicon-th-large"> Data Access Policy</span></a></li>
                        <li class="divider"></li>
                        <li><a href="{{{ URL::to('/about#cit') }}}"><span class="glyphicon glyphicon-th-large"> Citing the database</span></a></li>
                        <li class="divider"></li>
                        <li><a href="{{{ URL::to('/about#pub') }}}"><span class="glyphicon glyphicon-th-large"> Publications</span></a></li>
                    </ul>
                </div> 
                </div>
                </div>
 <div class= " col-md-9 " >           
<div class="row">
  
    <div class="span9">
        <section id="gen">
            <div class="page-header">
                <h3>General Information</h3>                                
            </div>
            <p><i>VGA</i> database (Vertebrate Genome Architucture) is  database that throws light on the genome duplication mechanism and elobrates the concept of 2r and not 2r.</p>
        </section>
        <section id="ack">
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
        <section id="fun">
            <div class="page-header">
                <h3>Funding</h3>                                
            </div>
            <p>This project is funded by Higher Education Commission of Pakistan.</p>
        </section>
        <section id="data">
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
        <section id="pub">
            <div class="page-header">
                <h3>Publications</h3>                                
            </div>
            <p>
                Ajmal, W., Khan, H., Abbasi, A.A*., (2014). <a href="http://www.sciencedirect.com/science/article/pii/S1055790314003212"> Phylogenetic investigation of human FGFR-bearing paralogons favors piecemeal duplication theory of vertebrate genome evolution</a>. Molecular Phylogenetics and Evolution. 81, 49-60. *Corresponding Author
                <br><br>
                Ambreen S , Khalil F ,  Abbasi A.A*. (2014).<a href="http://www.sciencedirect.com/science/article/pii/S1055790314001614"> Integrating large-scale phylogenetic datasets to dissect the ancient evolutionary history of vertebrate genome </a>. Molecular Phylogenetics and Evolution. 78: 1-13. Corresponding Author*
                <br><br>
                Abbasi, A. A., Minhas, R., Schmidt, A., Koch, S. and Grzeschik, K.-H. (2013), <a href="http://onlinelibrary.wiley.com/doi/10.1111/dgd.12076/full"> Cis-regulatory underpinnings of human GLI3 expression in embryonic craniofacial structures and internal organs </a>. Development, Growth & Differentiation. 55(8):699-709, *Corresponding Author
                <br><br>
                Parveen, N., Masood, A., Iftikhar, N., Minhas, B., Minhas, R., Nawaz, U., & Abbasi, A.A*. (2013). <a href=" http://www.biomedcentral.com/1471-2164/14/122/abstract"> Comparative genomics using teleost fish helps to systematically identify target gene bodies of functionally defined human enhancers </a>. BMC Genomics, 14(1), 122. *Corresponding Author.
                <br><br>
                Asrar Z , Haq F, Abbasi A.A*. (2013). <a href=" http://www.sciencedirect.com/science/article/pii/S1055790312004307"> Fourfold paralogy regions on human HOX-bearing chromosomes: Role of ancient segmental duplications in the evolution of vertebrate genome, Molecular Phylogenetics and Evolution </a>. 66(3), Pages 737–747. *Corresponding Author
                <br><br>
                Abbasi A.A*, Hanif H (2012). <a href=" http://www.ncbi.nlm.nih.gov/pubmed/22425707"> Phylogenetic history of paralogous gene quartets on human chromosomes 1, 2, 8 and 20 provides no evidence in favor of the vertebrate octoploidy hypothesis. Molecular Phylogenetics and Evolution </a>. 63:922-927. *Corresponding Author.
                <br><br>
                Abbasi A.A.*, (2011). <a href="http://www.ncbi.nlm.nih.gov/pmc/articles/PMC3216519/"> Molecular evolution of HR, a gene that regulates the postnatal cycle of the hair follicle </a>. Sci. Rep. 1, 32; DOI:10.1038/srep00032. *Corresponding Author
                <br><br>
                Abbasi A.A.*, (2011). <a href="http://www.ncbi.nlm.nih.gov/pubmed/21337665"> Evolution of vertebrate appendicular structures: Insight from genetic and palaeontological data </a>.Developmental Dynamics, 240:1005-1066. (Special issue on limb development). *Corresponding Author
                <br><br>
                Abbasi A.A.*, (2010). <a href="http://www.ncbi.nlm.nih.gov/pubmed/20696259"> Unraveling ancient segmental duplication events in human genome by phylogenetic analysis of multigene families residing on HOX cluster paralogons </a>. Molecular Phylogenetics and Evolution., 57: 836-848.*Corresponding Author
                <br><br>
                Abbasi A.A*, Paparidis Z, Malik S, Bangs F, Schmidt A, Koch S, Lopez-Rios J, Grzeschik KH (2010). <a href="http://www.biomedcentral.com/1471-213X/10/44"> Human Intronic Enhancers Control Distinct Sub-domain of Gli3 Expression during Mouse CNS and Limb Development </a>. BMC Developmental Biology. 2010, 10:44. (Highly accessed) .*Corresponding Author.
                <br><br>
                Abbasi A.A.*, (2010). <a href="http://www.ncbi.nlm.nih.gov/pubmed/20051988"> Piecemeal or big bangs: correlating the vertebrate evolution with proposed models of gene expansion events </a>. Nat Rev Genet 11(2):166. *Corresponding Author
                <br><br>
                Abbasi A.A*, Goode DK, Amir S, Grzeschik KH (2009). <a href="http://www.ncbi.nlm.nih.gov/pmc/articles/PMC2747127/"> Evolution and functional diversification of the GLI family of transcription factors in vertebrates </a>. Evolutionary Bioinformatics 5: 5-13. *Corresponding Author
                <br><br>
                Abbasi A.A*., (2008). <a href="http://www.ncbi.nlm.nih.gov/pmc/articles/PMC2615429/"> Are we degenerate tetraploids? More genomes, New facts </a>. Biology Direct 3:50 (Highly accessed).*Corresponding Author
                <br><br>
                Abbasi A.A*, Grzeschik KH (2007). <a href="http://www.ncbi.nlm.nih.gov/pmc/articles/PMC2235844/"> An insight into the phylogenetic history of HOX linked gene families in vertebrates </a>. BMC Evol Biol 7:239. *Corresponding Author
                <br><br>
                Abbasi A.A., Paparidis Z, Malik S, Goode DK, Callaway H, Elgar G, Grzeschik KH (2007). <a href="http://www.ncbi.nlm.nih.gov/pubmed/17426814"> Human GLI3 intragenic conserved non-coding sequences are tissue-specific enhancers </a>. PLoS ONE 2:e366
                <br><br>
                Paparidis Z, Abbasi A.A., Malik S, Goode DK, Callaway H, Elgar G, deGraaff E, Lopez-Rios J, Zeller R, Grzeschik KH (2007). <a href="http://www.ncbi.nlm.nih.gov/pubmed/17661744"> Ultraconserved non-coding sequence element controls a subset of spatiotemporal GLI3 expression </a>. Dev Growth Differ 49:543-53
                <br><br>
                Malik S, Abbasi A.A, Ansar M, Ahmad W, Koch MC, Grzeschik KH (2006). <a href="http://www.ncbi.nlm.nih.gov/pubmed/16712704"> Genetic heterogeneity of synpolydactyly: a novel locus SPD3 maps to chromosome 14q11.2-q12 </a>. Clin Genet 69:518-24
                <br><br>
                Wajid M, Abbasi A.A, Ansar M, Pham TL, Yan K, Haque S, Ahmad W, Leal SM (2003). <a href="http://www.ncbi.nlm.nih.gov/pubmed/11973626"> DFNB39, a recessive form of sensorineural hearing impairment, maps to chromosome 7q11.22-21.12 </a>. Eur J Hum Genet 11:812-5
                
            </p>
        </section>
    </div>
</div></div>
@stop