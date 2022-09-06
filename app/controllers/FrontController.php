
<?php

class FrontController extends BaseController {

	
    
    public function __construct(Genefamily $Family, Members $Members)
    {
        parent::__construct();

    }
    
	/**
	 * Returns the front page.
	 *
	 * @return View
	 */

	public function getIndex()
	{
		$posts = Genefamily::all();
		$members=Members::all();
		$banner_title = 'Duplication trends in Vertebrates';

		return View::make('site/front/index', compact('posts','members','banner_title'));
	}
    
    	public function getGenes()
	{
		
		//$posts = Genefamily::all();

		return View::make('site/front/genes' , compact('posts'));
	}

	public function getSearchForm()  
	{
		$posts = Genefamily::where('year','!=','2015')->where('year','!=','2011')->get();

		$banner_title = 'Search HSA:2/7/12/17 (HOX-cluster Paralogon) Information';

		return View::make('site/front/search', compact('posts','banner_title'));
	}

public function getSearchFormAbc()
	{
	
		$members = Members::all();

		$banner_title = 'Members search...';
		//return Response::json($members);

		return View::make('site/front/searchmember', compact('members','banner_title'));
		
	}
	
	public function  getSearchviaseqform() 
	{

		

		$posts = Genefamily::where('year','!=','2015')->where('year','!=','2011')->get();

		$banner_title = 'Search HSA:2/7/12/17 (HOX-cluster Paralogon) Information';

		return View::make('site/front/searchviaseq', compact('posts','banner_title'));
	}

	public function getfetchForm()
	{
		$posts = Genefamily::where('year','=','2011')-> get();
		$banner_title = 'Search HSA:1/2/8/20 Information';

		return View::make('site/front/search', compact('posts','banner_title'));
	}
public function getfetch3Form()
	{
		$posts = Genefamily::where('year','=','2016')-> get();
		$banner_title = 'Search HSA:1/6/9/19 Information';

		return View::make('site/front/search', compact('posts','banner_title'));
	}

	public function getfetchviaseqForm()
	{
		$posts = Genefamily::where('year','=','2011')-> get();
		$banner_title = 'Search HSA:1/2/8/20 Information';

		return View::make('site/front/searchviaseq', compact('posts','banner_title'));
	}

	public function getfetchFrizzledfamilyForm()
	{
		$posts = Genefamily::where('year','=','2019')-> get();
		$banner_title = 'Search Frizzledfamily Information';

		return View::make('site/front/search', compact('posts','banner_title'));
	}

	public function getfetchMHCForm()
	{
		$posts = Genefamily::where('year','=','2011')-> get();
		$banner_title = 'Search HSA:1/6/9/19 Information';

		return View::make('site/front/search', compact('posts','banner_title'));
	}


	public function mypage()
	{
		$posts = Genefamily::where('year','=','2019')-> get();
		$banner_title = 'Search Frizzledfamily Information';

		return View::make('site/front/search', compact('posts','banner_title'));
	}

	public function getfetchviaFrizzledfamilyseqForm()
	{
		$posts = Genefamily::where('year','=','2011')-> get();
		$banner_title = 'Search Frizzledfamily Information';

		return View::make('site/front/searchviaseq', compact('posts','banner_title'));
	}

#FGFR view
	
	public function getfetchfgfrForm()
	{
		$posts = Genefamily::where('year','=','2015')-> get();

		$banner_title = 'Search HSA:4/5/8/10 Information';

		return View::make('site/front/search', compact('posts','banner_title'));
	}

public function getfetchfgfrviaseqForm()
	{
		$posts = Genefamily::where('year','=','2015')-> get();

	

		$banner_title = 'Search HSA:4/5/8/10 Information';

		return View::make('site/front/searchviaseq', compact('posts','banner_title'));
	} 

	public function getMembers($fid)
	{
		
		$posts = Members::select(array('MemberName as name','MID as id'
	    ))->where('FID', '=', $fid)->get()->toArray();

		return Response::json($posts);
	}

	public function getSearch()
	{
		$get = Input::all();

		if(!$get['fid']){

			return Redirect::to('/');
		}

		if(!$get['mid']){
			$family = Genefamily::where('FID', '=', $get['fid'])->first()->toArray();
			return View::make('site/front/familydetail', compact('family'));
		}else{
			$family = array('family' => Genefamily::where('FID', '=', $get['fid'])->first()->toArray(), 'member' => Members::where('MID', '=', $get['mid'])->first()->toArray());
			return View::make('site/front/memberdetail', compact('family'));
		}

		//print_r($input);exit;

	}
public function getSearchFamily()
	{
		$get = Input::all();

		if(!$get['fid']){

			return Redirect::to('/');
		}
		else{
			$family = Genefamily::where('FID', '=', $get['fid'])->first()->toArray();
			return View::make('site/front/familydetail', compact('family'));
		}

		//print_r($input);exit;

	}

public function getSearchMember()
	{
		$get = Input::all();

		if(!$get['mid']){

			return Redirect::to('/');
		}
		
		$member = Members::where('MID', '=', $get['mid'])->first()->toArray();
		
		$FID = $member['FID'];
		
		$family = array('family' => Genefamily::where('FID', '=', $FID)->first()->toArray(),
		 'member' => Members::where('MID', '=', $get['mid'])->first()->toArray());
		return View::make('site/front/memberdetail', compact('family'));
		

	}
	#Contact Form
	public function getContactForm()
	{
		
$banner_title = 'Contact';
		return View::make('site/front/contact', compact('posts','banner_title'));
	}
		#Lab Contact Form
	public function getLabContactForm()
	{
		

		return View::make('site/front/labcontact');
	}
	#Lab Form
	public function getLabForm()
	{
		

		return View::make('site/front/lab');
	}
	#Lines of Research 
	public function getLabResearchForm()
	{
		

		return View::make('site/front/labresearch');
	}
	#Scholars
	public function getScholarsForm()
	{
		

		return View::make('site/front/scholars');
	}


	public function getBlastResult()
	{	
		$query = Input::get('QUERY');
		
		$member = Members::where('seqfile', 'like', '%'.$query.'%')->get();
		
		if($member->count() != 0){
				$member = $member->first()->toArray();
				$family = array('family' => Genefamily::where('FID', '=', $member['FID'])->first()->toArray(), 'member' => $member);
				return View::make('site/front/memberdetail', compact('family'));

		}else{
				$family = Genefamily::where('seqfile', 'like', '%'.$query.'%')->get();
				if($family->count() != 0){
					$family = $family->first()->toArray();
					return View::make('site/front/familydetail', compact('family'));
				}else{
					//show no result page
					$_SESSION['Error'] = "Sequence is invalid.";
				}
		}

				if( isset($_SESSION['Error']) )
				{
				        echo $_SESSION['Error'];

				        unset($_SESSION['Error']);

				}	
	}


	#FAQs
	public function getFaqForm()
	{
		
		$banner_title = 'FAQs';
		return View::make('site/front/faqs', compact('posts','banner_title'));
	}

#About
	public function getAboutForm()
	{
		
		$banner_title = 'About';
		return View::make('site/front/about', compact('posts','banner_title'));
	}

#patternarical
public function getpatternarticle()
	{
		
		$banner_title = 'About';
		return View::make('raheela/patternArticle', compact('posts','banner_title'));
	}
#Co-duplication
public function getcoduplicationForm()
	{
		
		$banner_title = 'coduplication';
		return View::make('site/front/coduplication', compact('posts','banner_title'));
	}

	

#GeneFamilyAnalysis
	public function getGeneFamilyAnalysisForm()
	{
		
		$banner_title = 'GeneFamilyAnalysis';
		return View::make('site/front/GeneFamilyAnalysis', compact('posts','banner_title'));
	}
	
#DuplicationSummary
	public function getDuplicationSummaryForm()
	{
		
		$banner_title = 'DuplicationSummary';
		return View::make('site/front/DuplicationSummary', compact('posts','banner_title'));
	}
}
