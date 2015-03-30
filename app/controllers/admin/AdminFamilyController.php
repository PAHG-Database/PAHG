<?php

class AdminFamilyController extends AdminController {


    /**
     * Post Model
     * @var Post
     */
    protected $family;

    /**
     * Inject the models.
     * @param Post $post
     */
    public function __construct(Genefamily $Family)
    {
        parent::__construct();
	$this->family = $Family;
    }

    /**
     * Show a list of all the blog posts.
     *
     * @return View
     */
    public function getIndex()
    {
        // Title
        $title = 'Family Management';

        // Grab all the blog posts
        $posts = $this->family;

        // Show the page
        return View::make('admin/family/index', compact('posts', 'title'));
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate()
	{
        // Title
        $title = Lang::get('Create Family');

        // Show the page
        return View::make('admin/family/create_edit', compact('title'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function postCreate()
	{

        // Declare the rules for the form validation
        $rules = array(
            'year'   => 'required',
            'genefamily'   => 'required',
            'taxa'   => 'required',
            'function'   => 'required',
            'seq'   => 'required',
            'tp'   => 'required',
            'nj'   => 'required',
            'ml'   => 'required',
            'tree'   => 'required',
            'syntany'   => 'required',
            'seqfile' => 'required',
        );

        // Validate the inputs
        $validator = Validator::make(Input::all(), $rules);

        // Check if the form validates with success
        if ($validator->passes())
        {
	    $tp = Input::file('tp');
	    $nj = Input::file('nj');
	    $ml = Input::file('ml');
	    $tree = Input::file('tree');
	    $syntany = Input::file('syntany');
            // Update the blog post data
            $this->family->GeneFamilyName = Input::get('genefamily');
            $this->family->NoIncludedTaxa = Input::get('taxa');
            $this->family->Function = Input::get('function');
            $this->family->NoSeqIncluded = Input::get('seq');
            $this->family->seqfile = Input::get('seqfile');
            //$this->family->TPName = Str::slug(Input::get('title'));
            $this->family->Year = Input::get('year');
            $this->family->TPPic = base64_encode(file_get_contents($tp->getRealPath()));
            $this->family->NJTreePic = base64_encode(file_get_contents($nj->getRealPath()));
	    $this->family->MLTreePic = base64_encode(file_get_contents($ml->getRealPath()));
	    $this->family->Tree = base64_encode(file_get_contents($tree->getRealPath()));
	    $this->family->Syntany = base64_encode(file_get_contents($syntany->getRealPath()));
	    $this->family->TPPicName = $tp->getClientOriginalName();
            $this->family->NJTreePicName = $nj->getClientOriginalName();
            $this->family->MLTreePicName = $ml->getClientOriginalName();

	    // Was the blog post created?
            if($this->family->save())
	    {
                // Redirect to the new blog post page
                return Redirect::to('admin/family/' . $this->family->FID . '/edit')->with('success', Lang::get('admin/blogs/messages.create.success'));
            }

            // Redirect to the blog post create page
            return Redirect::to('admin/family/create')->with('error', Lang::get('admin/blogs/messages.create.error'));
        }

        // Form validation failed
        return Redirect::to('admin/family/create')->withInput()->withErrors($validator);
	}

    /**
     * Display the specified resource.
     *
     * @param $post
     * @return Response
     */
	public function getShow($post)
	{
        // redirect to the frontend
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param $post
     * @return Response
     */
	public function getEdit($fid)
	{
        // Title
        $title = Lang::get('admin/blogs/title.blog_update');
	
	$post = GeneFamily::find($fid);
		
	return View::make('admin/family/create_edit', compact('post', 'title'));
        // Show the page
	}

	/**
     * Show the form for editing the specified resource.
     *
     * @param $post
     * @return Response
     */
	public function getDetail($fid)
	{
        // Title
        $title = 'Family '.$fid.' Details';
	
	$post = GeneFamily::find($fid);
		
	return View::make('admin/family/details', compact('post', 'title'));
        // Show the page
	}


    /**
     * Update the specified resource in storage.
     *
     * @param $post
     * @return Response
     */
	public function postEdit($fid)
	{

        $rules = array(
            'year'   => 'required',
            'genefamily'   => 'required',
            'taxa'   => 'required',
            'function'   => 'required',
            'seq'   => 'required',
            'seqfile' => 'required',
        );

        // Validate the inputs
        $validator = Validator::make(Input::all(), $rules);

        // Check if the form validates with success
        if ($validator->passes())
	{
		$this->family = GeneFamily::find($fid);
		
		$tp = Input::file('tp');
		if(isset($tp)){

			$this->family->TPPic = base64_encode(file_get_contents($tp->getRealPath()));
			$this->family->TPPicName = $tp->getClientOriginalName();
		}
		$nj = Input::file('nj');
		if(isset($nj)){

			$this->family->NJTreePic = base64_encode(file_get_contents($nj->getRealPath()));
			$this->family->NJTreePicName = $nj->getClientOriginalName();
		}
		$ml = Input::file('ml');
		if(isset($ml)){

			$this->family->MLTreePic = base64_encode(file_get_contents($ml->getRealPath()));
			$this->family->MLTreePicName = $ml->getClientOriginalName();
		}
		$tree = Input::file('tree');
		if(isset($tree)){

			$this->family->Tree = base64_encode(file_get_contents($tree->getRealPath()));
		}
		$syntany = Input::file('syntany');
		if(isset($syntany)){

			$this->family->Syntany = base64_encode(file_get_contents($syntany->getRealPath()));
		}
        $seqfile = Input::file('seqfile');
        if(isset($seqfile)){

            $this->family->seqfile = file_get_contents($seqfile->getRealPath());
        }




            // Update the blog post data
            $this->family->GeneFamilyName = Input::get('genefamily');
            $this->family->NoIncludedTaxa = Input::get('taxa');
            $this->family->Function = Input::get('function');
            $this->family->NoSeqIncluded = Input::get('seq');
            //$this->family->TPName = Str::slug(Input::get('title'));
            $this->family->Year = Input::get('year');
	    // Was the blog post created?
            if($this->family->save())
	    {
                // Redirect to the new blog post page
                return Redirect::to('admin/family/' . $this->family->FID . '/edit')->with('success', Lang::get('admin/blogs/messages.create.success'));
            }
	}
            // Redirect to the blog post create page
            return Redirect::to('admin/family/'. $fid . '/edit')->with('error', Lang::get('admin/blogs/messages.create.error'));
	}


    /**
     * Remove the specified resource from storage.
     *
     * @param $post
     * @return Response
     */
    public function getDelete($fid)
    {
        // Title
        $title = 'Delete Family '.$fid;

        // Show the page
        return View::make('admin/family/delete', compact('fid', 'title'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $post
     * @return Response
     */
    public function postDelete($fid)
    {
	    $id = $fid;
	    $family = GeneFamily::find($fid);
	    $family->delete();

	    // Was the blog post deleted?
	    $family = GeneFamily::find($fid);
	    if(empty($family))
	    {
		    // Redirect to the blog posts management page
		    return Redirect::to('admin/hoxfamily')->with('success', 'Family Deleted Successfully!');
	    }
        // There was a problem deleting the blog post
        return Redirect::to('admin/hoxfamily')->with('error', 'Please delete again.');
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

	->edit_column('Name', '<a href="{{{ URL::to(\'admin/hoxfamily/members/\' . $id  ) }}}">{{{ $Name }}}</a>
')

        ->add_column('actions', '<a href="{{{ URL::to(\'admin/family/\' . $id . \'/edit\' ) }}}" class="btn btn-default btn-xs iframe" >{{{ Lang::get(\'button.edit\') }}}</a>
	       <a href="{{{ URL::to(\'admin/family/\' . $id . \'/delete\' ) }}}" class="btn btn-xs btn-danger iframe">{{{ Lang::get(\'button.delete\') }}}</a>
	       <a href="{{{ URL::to(\'admin/family/\' . $id . \'/details\' ) }}}" class="btn btn-xs btn-success iframe">Details</a>

	       ')
        ->remove_column('id')
        ->make();
    }

}
