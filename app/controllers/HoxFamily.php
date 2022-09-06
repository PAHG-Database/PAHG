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
		$banner_title = 'Families Records';
		// Grab all the blog posts
		$families = $this->family;

		// Show the page
		return View::make('family/index', compact('families', 'title', 'banner_title'));

	}
	
	public function hoxindex()
	{
		// Title
		$title = 'Family';
		$banner_title = 'Families Records';
		// Grab all the blog posts
		$families = $this->family;

		// Show the page
		return View::make('family/hoxfamilydata', compact('families', 'title', 'banner_title'));

	}
public function fgfrindex()
	{
		// Title
		$title = 'Family';
		$banner_title = 'Families Records';
		// Grab all the blog posts
		$families = $this->family;

		// Show the page
		return View::make('family/fgfrfamilydata', compact('families', 'title', 'banner_title'));

	}
	public function mhcindex()
	{
		// Title
		$title = 'Family';
		$banner_title = 'Families Records';
		// Grab all the blog posts
		$families = $this->family;

		// Show the page
		return View::make('family/mhcfamilydata', compact('families', 'title', 'banner_title'));

	}

	public function otherhumanindex()
	{
		// Title
		$title = 'Family';
		$banner_title = 'Families Records';
		// Grab all the blog posts
		$families = $this->family;

		// Show the page
		return View::make('family/otherhumanfamilydata', compact('families', 'title', 'banner_title'));

	}
	public function paralogonindex()
	{
		// Title
		$title = 'Family';
		$banner_title = 'Families Records';
		// Grab all the blog posts
		$families = $this->family;

		// Show the page
		return View::make('family/paralogonfamilydata', compact('families', 'title', 'banner_title'));

	}
	public function downloadSeq($mid){

		//get format from the database which member is currently used
		$member = Members::where('MID', '=', $mid)->first()->toArray();
		$family = Genefamily::where('FID', '=', $member['FID'])->first()->toArray();
		//generate file from the content according to the format
		$fileToSave = strtolower($member['MemberName']).'.fasta';

		File::put($fileToSave, $member['seqfile'] .  $family['seqfile']);

		return Response::download($fileToSave);
	
	}
	
		public function viewSeq($mid){

		//get format from the database which member is currently used
		$member = Members::where('MID', '=', $mid)->first()->toArray();
		$family = Genefamily::where('FID', '=', $member['FID'])->first()->toArray();
		//generate file from the content according to the format
		$fileToView = Genefamily::select (['seqfile']) -> where('FID', '=', $member['FID'])->first();
    	$fileToView=str_replace('\r\n', "<br/>", $fileToView);
        $fileToView=str_replace('{"seqfile":"', "<br/>", $fileToView);
        $fileToView=str_replace('"}', "<br/>", $fileToView);
		return $fileToView;
	
	}
	
	
	public function downloadSequence($fid){

		//get format from the database which member is currently used
		//$member = Members::where('MID', '=', $mid)->first()->toArray();
		$family = Genefamily::where('FID', '=', $fid)->first()->toArray();
		//generate file from the content according to the format
		$fileToSave = strtolower($family['GeneFamilyName']).'.fasta';

		File::put($fileToSave, $family['seqfile']);

		return Response::download($fileToSave);

		//return Response::json(array('url'=>public_path().'/'.$fileToSave));
		//save file to disk 
		//print_r();exit;
		//use the path above in $pathToFile

	}
		public function viewSequence($fid){

		
       $fileToView = Genefamily::select (['seqfile']) -> where('FID', '=', $fid)->first();
	
$fileToView=str_replace('\r\n', "<br/>", $fileToView);
$fileToView=str_replace('{"seqfile":"', "<br/>", $fileToView);
$fileToView=str_replace('"}', "<br/>", $fileToView);
		return $fileToView;
 
		//use the path above in $pathToFile
		
		
		}
		
		

	public function downloadAlignment($fid){

		$family = Genefamily::where('FID', '=', $fid)->first()->toArray();
		//generate file from the content according to the format
		$fileToSave = strtolower($family['GeneFamilyName']).'Alignment.fasta';

		File::put($fileToSave, $family['alignfile']);

		return Response::download($fileToSave);

		//use the path above in $pathToFile
	}

	public function viewAlignment($fid){

		
       $fileToView = Genefamily::select (['alignfile']) -> where('FID', '=', $fid)->first();
	
$fileToView=str_replace('\r\n', "<br/>", $fileToView);
$fileToView=str_replace('{"alignfile":"', "<br/>", $fileToView);
$fileToView=str_replace('"}', "<br/>", $fileToView);
		return $fileToView;
 
		//use the path above in $pathToFile
		
		
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
public function getHoxMember($id)
	{
		// Title
		$title = 'Members of Family '. $id;
		
		// Grab all the blog posts
		$memberId = $id;

		// Show the page
		return View::make('family/hoxmember', compact('memberId', 'title'));

	}

public function getFgfrMember($id)
	{
		// Title
		$title = 'Members of Family '. $id;
		
		// Grab all the blog posts
		$memberId = $id;

		// Show the page
		return View::make('family/fgfrmember', compact('memberId', 'title'));

	}
	public function getmhcMember($id)
	{
		// Title
		$title = 'Members of Family '. $id;
		
		// Grab all the blog posts
		$memberId = $id;

		// Show the page
		return View::make('family/mhcmember', compact('memberId', 'title'));

	}

	public function getFrizzledMember($id)
	{
		// Title
		$title = 'Members of Family '. $id;
		
		// Grab all the blog posts
		$memberId = $id;

		// Show the page
		return View::make('family/Frizzledmember', compact('memberId', 'title'));

	}

	public function otherhumandata($id)
	{
		// Title
		$title = 'Members of Family '. $id;
		
		// Grab all the blog posts
		$memberId = $id;

		// Show the page
		return View::make('family/otherhumanmember', compact('memberId', 'title'));

	}

	public function mhcdata($id)
	{
		// Title
		$title = 'Members of Family '. $id;
		
		// Grab all the blog posts
		$memberId = $id;

		// Show the page
		return View::make('family/mhcmember', compact('memberId', 'title'));

	}

public function getParalogonMember($id)
	{
		// Title
		$title = 'Members of Family '. $id;
		
		// Grab all the blog posts
		$memberId = $id;

		// Show the page
		return View::make('family/paralogonmember', compact('memberId', 'title'));

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
	

public function getHoxData()
	{
		$posts = Genefamily:: where('year','!=','2015')->where('year','!=','2017')->where('year','!=','2019')->where('year','!=','2011')->where('year','!=','2016')->select(array('genefamily.GeneFamilyName as Name', 
		 'genefamily.Year' ,
		 'genefamily.NoIncludedTaxa as comments', 
		 'genefamily.Function', 
		 'genefamily.NoSeqIncluded', 
		 'genefamily.FID as id'
//$posts = Genefamily::where('year','!=','2015')->where('year','!=','2011')->get();
			//, 'genefamily.TPPic as tppic' 
			//, 'genefamily.NJTreePic as njtppic' 
			//, 'genefamily.MLTreePic as mltppic')
		));

		return Datatables::of($posts)

		//	->edit_column('tppic', '<img src="data:image/jpeg;base64,{{ $tppic; }}" width="100">')
			->edit_column('Name', '<a href="{{{ URL::to(\'hoxfamilydata/\' . $id  ) }}}">{{{ $Name }}}</a>
')
		//	->edit_column('njtppic', '<img src="data:image/jpeg;base64,{{ $njtppic; }}" width="100">')
		//	->edit_column('mltppic', '<img src="data:image/jpeg;base64,{{ $mltppic; }}" width="100">')

			->make();
	}

public function getFgfrData()
	{
		$posts = Genefamily:: where('year','=','2015')->select(array('genefamily.GeneFamilyName as Name', 
		 'genefamily.Year' ,
		 'genefamily.NoIncludedTaxa as comments', 
		 'genefamily.Function', 
		 'genefamily.NoSeqIncluded', 
		 'genefamily.FID as id'
//$posts = Genefamily::where('year','!=','2015')->where('year','!=','2011')->get();
			//, 'genefamily.TPPic as tppic' 
			//, 'genefamily.NJTreePic as njtppic' 
			//, 'genefamily.MLTreePic as mltppic')
		));

		return Datatables::of($posts)

		//	->edit_column('tppic', '<img src="data:image/jpeg;base64,{{ $tppic; }}" width="100">')
			->edit_column('Name', '<a href="{{{ URL::to(\'fgfrfamilydata/\' . $id  ) }}}">{{{ $Name }}}</a>
')
		//	->edit_column('njtppic', '<img src="data:image/jpeg;base64,{{ $njtppic; }}" width="100">')
		//	->edit_column('mltppic', '<img src="data:image/jpeg;base64,{{ $mltppic; }}" width="100">')

			->make();
	}
	public function getmhcData()
	{
		$posts = Genefamily:: where('year','=','2016')->select(array('genefamily.GeneFamilyName as Name', 
		 'genefamily.Year' ,
		 'genefamily.NoIncludedTaxa as comments', 
		 'genefamily.Function', 
		 'genefamily.NoSeqIncluded', 
		 'genefamily.FID as id'
//$posts = Genefamily::where('year','!=','2015')->where('year','!=','2011')->get();
			//, 'genefamily.TPPic as tppic' 
			//, 'genefamily.NJTreePic as njtppic' 
			//, 'genefamily.MLTreePic as mltppic')
		));

		return Datatables::of($posts)

		//	->edit_column('tppic', '<img src="data:image/jpeg;base64,{{ $tppic; }}" width="100">')
			->edit_column('Name', '<a href="{{{ URL::to(\'mhcfamilydata/\' . $id  ) }}}">{{{ $Name }}}</a>
')
		//	->edit_column('njtppic', '<img src="data:image/jpeg;base64,{{ $njtppic; }}" width="100">')
		//	->edit_column('mltppic', '<img src="data:image/jpeg;base64,{{ $mltppic; }}" width="100">')

			->make();
	}


		public function getOtherhumangenefamilyData()
	{
		$posts = Genefamily:: where('year','=','2019')->select(array('genefamily.GeneFamilyName as Name', 
		 'genefamily.Year' ,
		 'genefamily.NoIncludedTaxa as comments', 
		 'genefamily.Function', 
		 'genefamily.NoSeqIncluded', 
		 'genefamily.FID as id'
//$posts = Genefamily::where('year','!=','2015')->where('year','!=','2011')->get();
			//, 'genefamily.TPPic as tppic' 
			//, 'genefamily.NJTreePic as njtppic' 
			//, 'genefamily.MLTreePic as mltppic')
		));

		return Datatables::of($posts)

		//	->edit_column('tppic', '<img src="data:image/jpeg;base64,{{ $tppic; }}" width="100">')
			->edit_column('Name', '<a href="{{{ URL::to(\'otherhumanfamilydata/\' . $id  ) }}}">{{{ $Name }}}</a>
')
		//	->edit_column('njtppic', '<img src="data:image/jpeg;base64,{{ $njtppic; }}" width="100">')
		//	->edit_column('mltppic', '<img src="data:image/jpeg;base64,{{ $mltppic; }}" width="100">')

			->make();
	}

public function getParalogonData()
	{
		$posts = Genefamily:: where('year','!=','2015')->where('year','!=','2013')->where('year','!=','2019')->where('year','!=','2014')->where('year','!=','2016')->where('year','!=','2010')->where('year','!=','2007')->select(array('genefamily.GeneFamilyName as Name', 
		 'genefamily.Year' ,
		 'genefamily.NoIncludedTaxa as comments', 
		 'genefamily.Function', 
		 'genefamily.NoSeqIncluded', 
		 'genefamily.FID as id'
//$posts = Genefamily::where('year','!=','2015')->where('year','!=','2011')->get();
			//, 'genefamily.TPPic as tppic' 
			//, 'genefamily.NJTreePic as njtppic' 
			//, 'genefamily.MLTreePic as mltppic')
		));

		return Datatables::of($posts)

		//	->edit_column('tppic', '<img src="data:image/jpeg;base64,{{ $tppic; }}" width="100">')
			->edit_column('Name', '<a href="{{{ URL::to(\'paralogonfamilydata/\' . $id  ) }}}">{{{ $Name }}}</a>
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
		$posts = Members::select(array('MemberName as Name', 'ChrLocation', 'HumnaProAccNo as HMnumber',
			//, 'genefamily.TPPic as tppic' 
			//, 'genefamily.NJTreePic as njtppic' 
			//, 'genefamily.MLTreePic as mltppic')
		))->where('FID', '=', $id);

		return Datatables::of($posts)

		//	->edit_column('tppic', '<img src="data:image/jpeg;base64,{{ $tppic; }}" width="100">')
		    ->edit_column('HMnumber', '<a href="http://www.uniprot.org/uniprot/{{$HMnumber}}" target="_blank" >{{$HMnumber}}</a>')
		//	->edit_column('HMnumber', '<a href="{{{ URL::to(\'hoxfamily/\' . $id  ) }}}">{{{ $Name }}}</a>')
		//	->edit_column('njtppic', '<img src="data:image/jpeg;base64,{{ $njtppic; }}" width="100">')
		//	->edit_column('mltppic', '<img src="data:image/jpeg;base64,{{ $mltppic; }}" width="100">')

			->make();
	}

}
