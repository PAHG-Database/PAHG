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
//summary2012
public function getIndex2012()
    {
        // Title
        $title = 'Summary Management';

        // Grab all the blog posts
       // $posts = $this->summary;

        // Show the page
        return View::make('admin/summary/summary2012', compact('title'));
    }

    //summaryotherhumangenefamily
public function getIndexotherhumangenefamily()
    {
        // Title
        $title = 'Summary Management';

        // Grab all the blog posts
       // $posts = $this->summary;

        // Show the page
        return View::make('admin/summary/summaryotherhumangenefamily', compact('title'));
    }

    //summarymhc
public function getIndexmhc()
    {
        // Title
        $title = 'Summary Management';

        // Grab all the blog posts
       // $posts = $this->summary;

        // Show the page
        return View::make('admin/summary/summarymhc', compact('title'));
    }
    //summary FGFR
public function getIndexfgfr()
    {
        // Title
        $title = 'Summary Management';

        // Grab all the blog posts
       // $posts = $this->summary;

        // Show the page
        return View::make('admin/summary/summaryfgfr', compact('title'));
    }
    //New Rozina functions for getting summary data
  
    //summary HOX
    public function getHoxSummaryData()
{
// Title
        $title = 'HOX Summary ';

        // Show the page
        return View::make('admin/summary/admin-summaryhox', compact('title'));
}
  //summary FGFR
    public function getFGFRSummaryData()
{
// Title
        $title = 'FGFR Summary ';

        // Show the page
        return View::make('admin/summary/admin-summaryfgfr', compact('title'));
}
   //summary 1/2/8/20
    public function getParalogonSummaryData()
{
// Title
        $title = '1/2/8/20 Summary ';

        // Show the page
        return View::make('admin/summary/admin-summary2012', compact('title'));
}
//summary MHC
    public function getMHCSummaryData()
{
// Title
        $title = 'MHC Summary ';

        // Show the page
        return View::make('admin/summary/admin-summarymhc', compact('title'));
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
        $summary->delete();

        // Was the blog post deleted?
        $summary = Summary::find($id);
     */
     
     
     
      //Gene_Family_Statistics
public function getIndex_Gene_Family_Statistics()
    {
        // Title
        $title = 'Gene_Family_Statistics';

        // Grab all the blog posts
       // $posts = $this->summary;

        // Show the page
        return View::make('admin/summary/Gene_Family_Statistics', compact('title'));
    }

     
        public function getData_Gene_Family_Statistics()
    {
    $posts = DB::table('Gene_Family_Statistics')->select(array('Gene_Family_Statistics.Human_Paralogon as Name', 'Gene_Family_Statistics.No_of_Gene_Families', 'Gene_Family_Statistics.No_of_Gene_members', 'Gene_Family_Statistics.No_of_Sequences_employed_for_Phylogenomic_Analysis'
            //, 'genefamily.TPPic as tppic' 
            //, 'genefamily.NJTreePic as njtppic' 
            //, 'genefamily.MLTreePic as mltppic')
        ));
        return Datatables::of($posts)


        ->make();

    }
     
     
     
     
    public function getData()
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

 public function getDatafgfr()
    {
    $posts = DB::table('summaryfgfr')->select(array('summaryfgfr.Family_Name as Name', 'summaryfgfr.Hsa4/2a', 'summaryfgfr.Hsa5', 'summaryfgfr.Hsa8/20b', 'summaryfgfr.Hsa10/11c', 'Consistency_with_FGFR_Phylogeny', 'Topology'
            //, 'genefamily.TPPic as tppic' 
            //, 'genefamily.NJTreePic as njtppic' 
            //, 'genefamily.MLTreePic as mltppic')
        ));
        return Datatables::of($posts)
        ->make();

    }
    public function getData2012()
    {
    $posts = DB::table('summary2012')->select(array('summary2012.Family_Name as Name', 'summary2012.Hsa1', 'summary2012.Hsa2/6a', 'summary2012.Hsa8/18b', 'summary2012.Hsa20', 'Topology'
            //, 'genefamily.TPPic as tppic' 
            //, 'genefamily.NJTreePic as njtppic' 
            //, 'genefamily.MLTreePic as mltppic')
        ));
        return Datatables::of($posts)


        ->make();

    }

     public function getDataotherhumangenefamily()
    {
    $posts = DB::table('summaryotherhumangenefamily')->select(array('summaryotherhumangenefamily.Family_Name as Name', 'summaryotherhumangenefamily.Hsa1', 'summaryotherhumangenefamily.Hsa2/6a', 'summaryotherhumangenefamily.Hsa8/18b', 'summaryotherhumangenefamily.Hsa20', 'Topology'
            //, 'genefamily.TPPic as tppic' 
            //, 'genefamily.NJTreePic as njtppic' 
            //, 'genefamily.MLTreePic as mltppic')
        ));
        return Datatables::of($posts)


        ->make();

    }
    public function getDatamhc()
    {
    $posts = DB::table('summarymhc')->select(array('summarymhc.Family_Name as Name', 'summarymhc.Hsa1/15a', 'summarymhc.Hsa6', 'summarymhc.Hsa9', 'summarymhc.Hsa19', 'Topology'
            //, 'genefamily.TPPic as tppic' 
            //, 'genefamily.NJTreePic as njtppic' 
            //, 'genefamily.MLTreePic as mltppic')
        ));
        return Datatables::of($posts)


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
    // summary 2012
     public function getDataUsers()
    {
    $posts = Summary::select(array('SID as id', 'summary2012.Family_Name as Name', 'summary2012.Hsa1', 'summary2012.Hsa2/6a ', 'summary2012.Hsa8/18b ', 'summary2012.Hsa20', 'Topology'
            //, 'genefamily.TPPic as tppic' 
            //, 'genefamily.NJTreePic as njtppic' 
            //, 'genefamily.MLTreePic as mltppic')
        ));
        return Datatables::of($posts)
 ->remove_column('id')
        ->make();
    }

}
