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
		$banner_title = 'Duplication trends in Vertebrates';

		return View::make('site/front/index', compact('posts','banner_title'));
	}
    
    	public function getGenes()
	{
		
		//$posts = Genefamily::all();

		return View::make('site/front/genes' , compact('posts'));
	}

	public function getSearchForm()
	{

		$posts = Genefamily::where('year','!=','2015')-> get();

		$posts = Genefamily::where('year','!=','2015')->where('year','!=','2011')->get();

		$banner_title = 'Search HSA:2/7/12/17 (HOX-cluster Paralogon) Information';

		return View::make('site/front/search', compact('posts','banner_title'));
	}
	public function getfetchForm()
	{
		$posts = Genefamily::where('year','=','2011')-> get();
		$banner_title = 'Search HSA:1/2/8/20 Information';

		return View::make('site/front/search', compact('posts','banner_title'));
	}

#FGFR view
	
	public function getfetchfgfrForm()
	{
		$posts = Genefamily::where('year','=','2015')-> get();

		$banner_title = 'Search HSA:1/2/8/20 Information';

		$banner_title = 'Search HSA:4/5/8/10 Information';

		return View::make('site/front/search', compact('posts','banner_title'));
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
#Blast Front
	public function getBlastForm()
	{
		$banner_title = 'Blast';

		return View::make('site/front/blast' , compact('posts','banner_title'));
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
				}
		}


		


		
			


		print_r($result);
		exit;

	}


	#Blast Result
	public function getVlastForm()
	{
		

		return View::make('site/front/vlast');
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

}
