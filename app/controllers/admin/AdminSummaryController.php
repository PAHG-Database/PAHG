<?php

class AdminSummaryController extends AdminController {


    /**
     * Post Model
     * @var Post
     */
    protected $summary;

    /**
     * Inject the models.
     * @param Post $post
     */
    public function __construct(Summary $Summary)
    {
        parent::__construct();
        $this->summary = $Summary;
    }

    /**
     * Show a list of all the blog posts.
     *
     * @return View
     */
    public function getIndex()
    {
        // Title
        $title = 'Summary Management';

        // Grab all the blog posts
        $posts = $this->summary;

        // Show the page
        return View::make('admin/summary/index', compact('posts', 'title'));
    }

    public function getIndexUser()
    {
        // Title
        $title = 'Summary Management';

        // Grab all the blog posts
        $posts = $this->summary;

        // Show the page
        return View::make('admin/summary/index-user', compact('posts', 'title'));
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate()
	{
        // Title
        $title = Lang::get('admin/blogs/title.create_a_new_blog');

        // Show the page
        return View::make('admin/summary/create_edit', compact('title'));
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
            'name'   => 'required',
            'hsa21'   => 'required',
            'hsa73'   => 'required',
            'hsa12'   => 'required',
            'hsa17'   => 'required',
            'cons'   => 'required',
            'top'   => 'required',
        );

        // Validate the inputs
        $validator = Validator::make(Input::all(), $rules);

        // Check if the form validates with success
        if ($validator->passes())
        {
       
            // Update the blog post data
            $this->summary->Family_Name = Input::get('name');
            $this->summary->Hsa21 = Input::get('hsa21');
            $this->summary->Hsa73 = Input::get('hsa73');
            $this->summary->Hsa12 = Input::get('hsa12');
            $this->summary->Hsa17 = Input::get('hsa17');
            $this->summary->Consistency_with_HOX_Phylogeny = Input::get('cons');
            $this->summary->Topology = Input::get('top');    
           

        // Was the blog post created?
            if($this->summary->save())
        {
                // Redirect to the new blog post page
                return Redirect::to('admin/summary/' . $this->summary->SID . '/edit')->with('success', Lang::get('admin/blogs/messages.create.success'));
            }

            // Redirect to the blog post create page
            return Redirect::to('admin/summary/create')->with('error', Lang::get('admin/blogs/messages.create.error'));
        }

        // Form validation failed
        return Redirect::to('admin/summary/create')->withInput()->withErrors($validator);
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
	public function getEdit($sid)
	{
        // Title
        $title = 'Update Summary '.$sid;
        $post = Summary::find($sid);
        // Show the page
        return View::make('admin/summary/create_edit', compact('post', 'title'));
	}

    /**
     * Update the specified resource in storage.
     *
     * @param $post
     * @return Response
     */
	public function postEdit($sid)
	{

        // Declare the rules for the form validation
        $rules = array(
            'name'   => 'required',
            'hsa21'   => 'required',
            'hsa73'   => 'required',
            'hsa12'   => 'required',
            'hsa17'   => 'required',
            'cons'   => 'required',
            'top'   => 'required',
        );

        // Validate the inputs
        $validator = Validator::make(Input::all(), $rules);

        // Check if the form validates with success
        if ($validator->passes())
        {
            $this->summary = Summary::find($sid);
        
            // Update the blog post data
            $this->summary->Family_Name = Input::get('name');
            $this->summary->Hsa21 = Input::get('hsa21');
            $this->summary->Hsa73 = Input::get('hsa73');
            $this->summary->Hsa12 = Input::get('hsa12');
            $this->summary->Hsa17 = Input::get('hsa17');
            $this->summary->Consistency_with_HOX_Phylogeny = Input::get('cons');
            $this->summary->Topology = Input::get('top');    
           

        // Was the blog post created?
            if($this->summary->save())
        {
                // Redirect to the new blog post page
                return Redirect::to('admin/summary/' . $this->summary->SID . '/edit')->with('success', Lang::get('admin/blogs/messages.create.success'));
            }

            // Redirect to the blog post create page
            return Redirect::to('admin/summary/' . $this->summary->SID . '/edit')->with('error', Lang::get('admin/blogs/messages.create.error'));
        }

        // Form validation failed
        return Redirect::to('admin/summary/' . $sid . '/edit')->withInput()->withErrors($validator);
	}


    /**
     * Remove the specified resource from storage.
     *
     * @param $post
     * @return Response
     */
    public function getDelete($sid)
    {
        // Title
        $title = 'Delete Summary '.$sid;

        // Show the page
        return View::make('admin/summary/delete', compact('sid', 'title'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $post
     * @return Response
     */
    public function postDelete($sid)
    {
         $id = $sid;
        $summary = Summary::find($id);
        $summary->delete();

        // Was the blog post deleted?
        $summary = Summary::find($id);
        if(empty($summary))
        {
            // Redirect to the blog posts management page
            return Redirect::to('admin/summary')->with('success', 'Summary Deleted Successfully!');
        }
        // There was a problem deleting the blog post
        return Redirect::to('admin/summary')->with('error', 'Please delete again.');
    }

    /**
     * Show a list of all the blog posts formatted for Datatables.
     *
     * @return Datatables JSON
     */
    public function getData()
    {
	$posts = Summary::select(array('SID as id', 'summary.Family_Name as Name', 'summary.Hsa21', 'summary.Hsa73', 'summary.Hsa12', 'summary.Hsa17', 'Consistency_with_HOX_Phylogeny', 'Topology'
			//, 'genefamily.TPPic as tppic' 
			//, 'genefamily.NJTreePic as njtppic' 
			//, 'genefamily.MLTreePic as mltppic')
		));
        return Datatables::of($posts)

->add_column('actions', '<a href="{{{ URL::to(\'admin/summary/\' . $id . \'/edit\' ) }}}" class="btn btn-default btn-xs iframe" >{{{ Lang::get(\'button.edit\') }}}</a>
           <a href="{{{ URL::to(\'admin/summary/\' . $id . \'/delete\' ) }}}" class="btn btn-xs btn-danger iframe">{{{ Lang::get(\'button.delete\') }}}</a>
          
           ')
 ->remove_column('id')
        ->make();
    }

    public function getDataUser()
    {
    $posts = Summary::select(array('SID as id', 'summary.Family_Name as Name', 'summary.Hsa21', 'summary.Hsa73', 'summary.Hsa12', 'summary.Hsa17', 'Consistency_with_HOX_Phylogeny', 'Topology'
            //, 'genefamily.TPPic as tppic' 
            //, 'genefamily.NJTreePic as njtppic' 
            //, 'genefamily.MLTreePic as mltppic')
        ));
        return Datatables::of($posts)
 ->remove_column('id')
        ->make();
    }

}
