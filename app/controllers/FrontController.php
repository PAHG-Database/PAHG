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

		return View::make('site/front/index', compact('posts'));
	}
    
    	public function getGenes()
	{
		//$posts = Genefamily::all();

		return View::make('site/front/genes');
	}

	public function getSearchForm()
	{
		$posts = Genefamily::all();

		return View::make('site/front/search', compact('posts'));
	}
	public function getfetchForm()
	{
		$posts = Genefamily::where('year','=','2015')-> get();

		return View::make('site/front/search', compact('posts'));
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
		

		return View::make('site/front/contact');
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
#Blast
	public function getBlastForm()
	{
		

		return View::make('site/front/blast');
	}

}
