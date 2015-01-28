<?php

class FrontController extends BaseController {

    
    public function __construct()
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
		
		return View::make('site/front/index');
	}

}
