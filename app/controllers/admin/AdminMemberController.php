<?php

class AdminMemberController extends AdminController {


    /**
     * Post Model
     * @var Post
     */
    protected $members;

    /**
     * Inject the models.
     * @param Post $post
     */
    public function __construct(Members $Members)
    {
        parent::__construct();
        $this->members = $Members;
    }

    /**
     * Show a list of all the blog posts.
     *
     * @return View
     */
    public function getIndex($fid)
    {
        // Title
        $title = 'Members Management of Family '.$fid;

        // Grab all the blog posts
        $posts = $this->members;

	$memberId = $fid;
        // Show the page
        return View::make('admin/members/index', compact('posts', 'memberId', 'title'));
    }
    /*
Show member details


    */
public function getDetail($mid)
    {
        // Title
        $title = 'Member '.$mid.' Details';
    
    $post = Members::find($mid);
        
    return View::make('admin/members/details', compact('post', 'title'));
        // Show the page
    }


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate($fid)
	{
        // Title
        $title = 'Create member for Family '.$fid;

        // Show the page
        return View::make('admin/members/create_edit', compact('title', 'fid'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function postCreate($fid)
	{
        // Declare the rules for the form validation
        $rules = array(
            'name'   => 'required',
            'loc' => 'required',
            'acc' => 'required',
            'tp' => 'required',
            'sn' => 'required',
             'seqfile' => 'required'
        );

        // Validate the inputs
        $validator = Validator::make(Input::all(), $rules);

        // Check if the form validates with success
        if ($validator->passes())
	{
            // Update the blog post data
            $this->members->FID = $fid;
            $this->members->MemberName = Input::get('name');
            $this->members->ChrLocation = Input::get('loc');
	    $this->members->HumnaProAccNo = Input::get('acc');
         $this->members->seqfile = Input::get('seqfile');
	    
	    $tp = Input::file('tp');
	    $sn = Input::file('sn');
        
	    $this->members->Topology = base64_encode(file_get_contents($tp->getRealPath()));
            $this->members->Syntany = base64_encode(file_get_contents($sn->getRealPath()));
	    

	    // Was the blog post created?
            if($this->members->save())
	    {
                // Redirect to the new blog post page
                return Redirect::to('admin/members/' . $this->members->MID . '/edit')->with('success', Lang::get('admin/blogs/messages.create.success'));
            }

            // Redirect to the blog post create page
            return Redirect::to('admin/members/create/'.$fid)->with('error', Lang::get('admin/blogs/messages.create.error'));

	}

        // Form validation failed
        return Redirect::to('admin/members/create/'.$fid)->withInput()->withErrors($validator);
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
	public function getEdit($mid)
	{
        // Title
        $title = Lang::get('admin/blogs/title.blog_update');

	$post = Members::find($mid);
        // Show the page
        return View::make('admin/members/create_edit', compact('title', 'mid', 'post'));
	}

    /**
     * Update the specified resource in storage.
     *
     * @param $post
     * @return Response
     */
	public function postEdit($fid)
	{

        // Declare the rules for the form validation
        $rules = array(
            'name'   => 'required',
            'loc' => 'required',
            'acc' => 'required',
            

            
        );
       
        // Validate the inputs
        $validator = Validator::make(Input::all(), $rules);

        // Check if the form validates with success
        if ($validator->passes())
	{
            // Update the blog post data
            $this->members = Members::find($fid);
            $this->members->MemberName = Input::get('name');
            $this->members->ChrLocation = Input::get('loc');
            $this->members->HumnaProAccNo = Input::get('acc');
	    
	    $tp = Input::file('tp');
	    if(isset($tp)){

		    $this->members->Topology = base64_encode(file_get_contents($tp->getRealPath()));
	    }

	    $sn = Input::file('sn');
	    if(isset($sn)){

		    $this->members->Syntany = base64_encode(file_get_contents($sn->getRealPath()));
	    }

        $seqfile = Input::file('seqfile');
        if(isset($seqfile)){

            $this->members->seqfile = file_get_contents($seqfile->getRealPath());
        }

	    // Was the blog post created?
            if($this->members->update())
	    {
                // Redirect to the new blog post page
                return Redirect::to('admin/members/' . $this->members->MID . '/edit')->with('success', Lang::get('admin/blogs/messages.create.success'));
            }

            // Redirect to the blog post create page
            return Redirect::to('admin/members/'. $fid .'/edit')->with('error', Lang::get('admin/blogs/messages.create.error'));

	}

        // Form validation failed
        return Redirect::to('admin/members/'.$fid.'/edit')->withInput()->withErrors($validator);
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
        $title = Lang::get('admin/blogs/title.blog_delete');

        // Show the page
        return View::make('admin/members/delete', compact('fid', 'title'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $post
     * @return Response
     */
    public function postDelete($post)
    {
        // Declare the rules for the form validation
        $rules = array(
            'id' => 'required|integer'
        );

        // Validate the inputs
        $validator = Validator::make(Input::all(), $rules);

        // Check if the form validates with success
        if ($validator->passes())
        {
            $id = $post;
            $post = Members::find($id);

            $post->delete();

            // Was the blog post deleted?
            $post = Members::find($id);
            if(empty($post))
            {
                // Redirect to the blog posts management page
                return Redirect::to('admin/blogs')->with('success', Lang::get('admin/blogs/messages.delete.success'));
            }
        }
        // There was a problem deleting the blog post
        return Redirect::to('admin/blogs')->with('error', Lang::get('admin/blogs/messages.delete.error'));
    }

    /**
     * Show a list of all the blog posts formatted for Datatables.
     *
     * @return Datatables JSON
     */
    public function getData($fid)
    {
	    $posts = Members::select(array('MemberName as Name', 'ChrLocation', 'HumnaProAccNo','MID as id',
			//, 'genefamily.TPPic as tppic' 
			//, 'genefamily.NJTreePic as njtppic' 
			//, 'genefamily.MLTreePic as mltppic')
	    ))->where('FID', '=', $fid);
     

	    return Datatables::of($posts)
	
		    ->add_column('actions', '<a href="{{{ URL::to(\'admin/members/\' . $id . \'/edit\' ) }}}" class="btn btn-default btn-xs iframe" >{{{ Lang::get(\'button.edit\') }}}</a>
	       <a href="{{{ URL::to(\'admin/members/\' . $id . \'/delete\' ) }}}" class="btn btn-xs btn-danger iframe">{{{ Lang::get(\'button.delete\') }}}</a>
	       <a href="{{{ URL::to(\'admin/members/\' . $id . \'/details\' ) }}}" class="btn btn-xs btn-success iframe">Details</a>

	       ')
         ->remove_column('id')

        ->make();
    }

}
