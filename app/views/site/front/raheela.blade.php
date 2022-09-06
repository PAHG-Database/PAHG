   @extends('site.layouts.default')
{{-- Content --}}
@section('content')
    <div class= "col-md-3 col-md-pull-1">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <ul class="nav  nav-stacked">
                        <li><a href="{{{ URL::to('/about#pahg') }}}"><span class="glyphicon glyphicon-th-large"> PAHG</span></a></li>
                        <li class="divider"></li>
                        <li><a href="{{{ URL::to('/about#fun') }}}"><span class="glyphicon glyphicon-th-large"> Funding</span></a></li>
                        <li class="divider"></li>
                        <li><a href="{{{ URL::to('/about#future') }}}"><span class="glyphicon glyphicon-th-large"> Future Prospectives</span></a></li>
                        <li class="divider"></li>
                        <li><a href="{{{ URL::to('/about#data') }}}"><span class="glyphicon glyphicon-th-large"> Data Access Policy</span></a></li>
                        <li class="divider"></li>
                        <li><a href="{{{ URL::to('/about#cit') }}}"><span class="glyphicon glyphicon-th-large"> Citing the database</span></a></li>
                        <li class="divider"></li>
                        <li><a href="{{{ URL::to('/about#pub') }}}"><span class="glyphicon glyphicon-th-large"> Publications</span></a></li>
                        <li class="divider"></li>
                        <li><a href="{{{ URL::to('/about#ack') }}}"><span class="glyphicon glyphicon-th-large"> Acknowledgements</span></a></li>
                    </ul>
                </div> 
            </div>
    </div>
 <div class= "col-md-9">           
    <div class="row">
        <div class="span9">
            <section id="pahg">
                <div class="page-header">
                    <h3>PAHG</h3>                                
                </div>
                <p><i>PAHG</i> database (Phylogenomic Analysis of Human Genome) provides insight into evolutionary history of Human genome Paralogy regions.</p>
            </section>
            <section id="fun">
                <div class="page-header">
                    <h3>Funding</h3>                                
                </div>
                <p>This project is funded by Higher Education Commission of Pakistan.</p>
            </section>
            <section id="future">
                <div class="page-header">
                    <h3>Future Prospectives</h3>                                
                </div>
                <p>The phylogenomic analysis of 1117 gene members of 193 gene families residing on four paralogy blocks was conducted and results were incorporated in the database. Present database deals with evolutionary history of 5% of human protein coding genes and our aim is to keep moving in this domain to cover phylogenetic history of all possible human protein coding gene families. We are also building a library which will work in R so that a user can access data by using an R interpretor. To increase the efficiency of database operations, dynamicity would be integrated into the graphical images. This database will help out Evolutionary Biologists, Geneticists, Biochemists, Biotechnologists, Bioinformaticians and researchers from versatile biological communities to obtain evolutionary histories of human genes of their interest/human multigene families/human paralogy blocks in an interactive graphical manner. </p>
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
                    <p>If a specific page of the database has been used, we would be pleased if you cite us in your article. Please use the following format:
                    
                    
            </section>
            <section id="pub">
                <div class="page-header">
                    <h3>Publications</h3>                                
                </div>
                <p>
                    Azhar, R., Arif, R., Khokhar, M.W., Rana, N., Abbasi, A.A.,* PAHG. <a href="{{{ URL::to('') }}}">http://pahg.qau.edu.pk/</a> (Unpublished) 
                    <br><br>
                    Batool, F., Pervaiz, N., Khalid, Q., & Abbasi, A.A. <a href="https://onlinelibrary.wiley.com/doi/10.1002/9780470015902.a0029116" target="_blank" > Evolution of Human Multigene Families</a>. Encyclopedia of Life Sciences. *Corresponding author
                    <br><br>
                    Nawaz, S.M., Asghar, R., Pervaiz, N., Ali, S., Hussain, I., Xing, P., Bao, Y., & Abbasi, A.A. <a href="https://bmcecolevol.biomedcentral.com/articles/10.1186/s12862-020-01684-7" target="_blank" > Molecular evolutionary and structural analysis of human UCHL1 gene demonstrates the relevant role of intragenic epistasis in Parkinson’s disease and other neurological disorders</a>. BMC Ecology and Evolution. *Corresponding author
                    <br><br>
                    Naz, R., Tahir, S., Abbasi, A.A., (2017). <a href="http://www.sciencedirect.com/science/article/pii/S1055790317301690"> An insight into the evolutionary history of human MHC paralogon</a>. Molecular Phylogenetics and Evolution. *Corresponding author
                    <br><br>
                    Hafeez, M., Shabbir, M., Altaf, F., and Abbasi, A.A*. (2016). <a href="https://www.ncbi.nlm.nih.gov/pubmed/26327327"> Phylogenomic analysis reveals ancient segmental duplications in the human genome</a>. Molecular Phylogenetics and Evolution. 94: 95-100. *Corresponding Author
                    <br><br>
                    Ajmal, W., Khan, H., Abbasi, A.A*., (2014). <a href="http://www.sciencedirect.com/science/article/pii/S1055790314003212"> Phylogenetic investigation of human FGFR-bearing paralogons favors piecemeal duplication theory of vertebrate genome evolution</a>. Molecular Phylogenetics and Evolution. 81: 49-60. *Corresponding Author
                    <br><br>
                    Ambreen S , Khalil F ,  Abbasi A.A*. (2014).<a href="http://www.sciencedirect.com/science/article/pii/S1055790314001614"> Integrating large-scale phylogenetic datasets to dissect the ancient evolutionary history of vertebrate genome </a>. Molecular Phylogenetics and Evolution. 78: 1-13. *Corresponding Author
                    <br><br>
                    Asrar Z , Haq F, Abbasi A.A*. (2013). <a href=" http://www.sciencedirect.com/science/article/pii/S1055790312004307"> Fourfold paralogy regions on human HOX-bearing chromosomes: Role of ancient segmental duplications in the evolution of vertebrate genome, Molecular Phylogenetics and Evolution </a>. 66(3): Pages 737–747. *Corresponding Author
                    <br><br>
                    Abbasi A.A*, Hanif H (2012). <a href=" http://www.ncbi.nlm.nih.gov/pubmed/22425707"> Phylogenetic history of paralogous gene quartets on human chromosomes 1, 2, 8 and 20 provides no evidence in favor of the vertebrate octoploidy hypothesis. Molecular Phylogenetics and Evolution </a>. 63:922-927. *Corresponding Author.
                    <br><br>
                    Abbasi A.A.*, (2011). <a href="http://www.ncbi.nlm.nih.gov/pmc/articles/PMC3216519/"> Molecular evolution of HR, a gene that regulates the postnatal cycle of the hair follicle </a>. Sci. Rep. 1, 32; DOI:10.1038/srep00032. *Corresponding Author
                    <br><br>
                    Abbasi A.A.*, (2011). <a href="http://www.ncbi.nlm.nih.gov/pubmed/21337665"> Evolution of vertebrate appendicular structures: Insight from genetic and palaeontological data </a>.Developmental Dynamics. 240:1005-1066. (Special issue on limb development). *Corresponding Author
                    <br><br>
                    Abbasi A.A.*, (2010). <a href="http://www.ncbi.nlm.nih.gov/pubmed/20696259"> Unraveling ancient segmental duplication events in human genome by phylogenetic analysis of multigene families residing on HOX cluster paralogons </a>. Molecular Phylogenetics and Evolution. 57: 836-848.*Corresponding Author
                    <br><br>
                    
                    Abbasi A.A.*, (2010). <a href="http://www.ncbi.nlm.nih.gov/pubmed/20051988"> Piecemeal or big bangs: correlating the vertebrate evolution with proposed models of gene expansion events </a>. Nat Rev Genet 11(2):166. *Corresponding Author
                    <br><br>
                    
                    Abbasi A.A*., (2008). <a href="http://www.ncbi.nlm.nih.gov/pmc/articles/PMC2615429/"> Are we degenerate tetraploids? More genomes, New facts </a>. Biology Direct 3:50 (Highly accessed).*Corresponding Author
                    <br><br>
                    Abbasi A.A*, Grzeschik KH (2007). <a href="http://www.ncbi.nlm.nih.gov/pmc/articles/PMC2235844/"> An insight into the phylogenetic history of HOX linked gene families in vertebrates </a>. BMC Evol Biol 7:239. *Corresponding Author
                    <br><br>
                
                </p>
            </section>
            <section id="ack">
                <div class="page-header">
                    <h3>Acknowledgements</h3>                                
                </div>
                <b>We would like to acknowledge:</b>
                <br>
                <br>
                <ul><li>Comparative and Evolutionary Genomics Lab, National Center for Bioinformatics, Quaid-i-Azam University, Islamabad, Pakistan.</li>
                <li>Yasir Abbasi, Aftab Ahmad, Shakeel Shafique for technical support.</li></ul>
                <br>
                <br>
                <br>
                <br>
            </section>
        </div>
    </div>
</div>
@stop