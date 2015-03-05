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

	public function getSearchForm()
	{
		$posts = Genefamily::all();

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

}
