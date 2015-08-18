<?php

class LabtestController extends BaseController {

	
    
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
		$banner_title = ' trends in Vertebrates';

		return View::make('site/front/labtest', compact('posts','banner_title'));
	}
    
    	

}
