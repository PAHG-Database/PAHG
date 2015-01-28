<?php

class HoxFamily extends \BaseController {
	
	
	protected $family;
	protected $member;
	
	public function __construct(Genefamily $Family, Members $Members)
	{
		parent::__construct();

		$this->family = $Family;
		$this->member = $Members;
	}

	/**
	 * Display a listing of the resource.
	 * GET /hoxfamily
	 *
	 * @return Response
	 */
	public function index()
	{
		// Title
		$title = 'Family';

		// Grab all the blog posts
		$families = $this->family;

		// Show the page
		return View::make('family/index', compact('families', 'title'));

	}

	/**
	 * Display a listing of the resource.
	 * GET /hoxfamily
	 *
	 * @return Response
	 */
	public function getMember($id)
	{
		// Title
		$title = 'Members of Family '. $id;

		// Grab all the blog posts
		$memberId = $id;

		// Show the page
		return View::make('family/member', compact('memberId', 'title'));

	}


	/**
	 * Show the form for creating a new resource.
	 * GET /hoxfamily/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /hoxfamily
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /hoxfamily/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /hoxfamily/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /hoxfamily/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /hoxfamily/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
	
	/**
	 * Show a list of all the blog posts formatted for Datatables.
	 *
	 * @return Datatables JSON
	 */
	public function getData()
	{
		$posts = Genefamily::select(array('genefamily.GeneFamilyName as Name', 'genefamily.Year', 'genefamily.NoIncludedTaxa as comments', 'genefamily.Function', 'genefamily.NoSeqIncluded', 'genefamily.FID as id'
			//, 'genefamily.TPPic as tppic' 
			//, 'genefamily.NJTreePic as njtppic' 
			//, 'genefamily.MLTreePic as mltppic')
		));

		return Datatables::of($posts)

		//	->edit_column('tppic', '<img src="data:image/jpeg;base64,{{ $tppic; }}" width="100">')
			->edit_column('Name', '<a href="{{{ URL::to(\'hoxfamily/\' . $id  ) }}}">{{{ $Name }}}</a>
')
		//	->edit_column('njtppic', '<img src="data:image/jpeg;base64,{{ $njtppic; }}" width="100">')
		//	->edit_column('mltppic', '<img src="data:image/jpeg;base64,{{ $mltppic; }}" width="100">')

			->make();
	}
	
	/**
	 * Show a list of all the blog posts formatted for Datatables.
	 *
	 * @return Datatables JSON
	 */
	public function getMemberData($id)
	{
		$posts = Members::select(array('MemberName as Name', 'ChrLocation', 'HumnaProAccNo',
			//, 'genefamily.TPPic as tppic' 
			//, 'genefamily.NJTreePic as njtppic' 
			//, 'genefamily.MLTreePic as mltppic')
		))->where('FID', '=', $id);

		return Datatables::of($posts)

		//	->edit_column('tppic', '<img src="data:image/jpeg;base64,{{ $tppic; }}" width="100">')
		//	->edit_column('Name', '<a href="{{{ URL::to(\'hoxfamily/\' . $id  ) }}}">{{{ $Name }}}</a>')
		//	->edit_column('njtppic', '<img src="data:image/jpeg;base64,{{ $njtppic; }}" width="100">')
		//	->edit_column('mltppic', '<img src="data:image/jpeg;base64,{{ $mltppic; }}" width="100">')

			->make();
	}

}
