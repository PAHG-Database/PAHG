<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/** ------------------------------------------
 *  Route model binding
 *  ------------------------------------------
 */
Route::model('user', 'User');
Route::model('comment', 'Comment');
Route::model('post', 'Post');
Route::model('role', 'Role');

/** ------------------------------------------
 *  Route constraint patterns
 *  ------------------------------------------
 */
Route::pattern('comment', '[0-9]+');
Route::pattern('post', '[0-9]+');
Route::pattern('user', '[0-9]+');
Route::pattern('role', '[0-9]+');
Route::pattern('token', '[0-9a-z]+');

/** ------------------------------------------
 *  Admin Routes
 *  ------------------------------------------
 */
Route::group(array('prefix' => 'admin', 'before' => 'auth'), function()
{

    Route::get('hoxfamily', 'AdminFamilyController@getIndex');
    Route::get('family/data', 'AdminFamilyController@getData');

    Route::get('family/create', 'AdminFamilyController@getCreate');
    Route::post('family/create', 'AdminFamilyController@postCreate');

    Route::get('family/{fid}/edit', 'AdminFamilyController@getEdit');
    Route::post('family/{fid}/edit', 'AdminFamilyController@postEdit');
   
    Route::get('family/{fid}/delete', 'AdminFamilyController@getDelete');
    Route::post('family/{fid}/delete', 'AdminFamilyController@postDelete');
    
    Route::get('family/{fid}/details', 'AdminFamilyController@getDetail');
    
    Route::get('hoxfamily/members/{fid}', 'AdminMemberController@getIndex');
    Route::get('members/{fid}/data', 'AdminMemberController@getData');
    
    Route::get('members/create/{fid}', 'AdminMemberController@getCreate');
    Route::post('members/create/{fid}', 'AdminMemberController@postCreate');

    Route::get('members/{mid}/edit', 'AdminMemberController@getEdit');
    Route::post('members/{mid}/edit', 'AdminMemberController@postEdit');
   
    Route::get('members/{mid}/delete', 'AdminMemberController@getDelete');
    Route::post('members/{mid}/delete', 'AdminMemberController@postDelete');

Route::get('members/{mid}/details', 'AdminMemberController@getDetail');
    
    Route::get('summary', 'AdminSummaryController@getIndex');
    Route::get('summary/data', 'AdminSummaryController@getData');

Route::get('summary/create', 'AdminSummaryController@getCreate');
    Route::post('summary/create', 'AdminSummaryController@postCreate');

      Route::get('summary/{sid}/edit', 'AdminSummaryController@getEdit');
    Route::post('summary/{sid}/edit', 'AdminSummaryController@postEdit');
   
    Route::get('summary/{sid}/delete', 'AdminSummaryController@getDelete');
    Route::post('summary/{sid}/delete', 'AdminSummaryController@postDelete');

# summary FGFR
    Route::get('summaryfgfr', 'AdminSummaryController@getIndexfgfr');
    Route::get('summaryfgfr/data', 'AdminSummaryController@getDatafgfr');
    # summary 2012 
    Route::get('summary2012', 'AdminSummaryController@getIndex2012');
    Route::get('summary2012/data', 'AdminSummaryController@getData2012');

     


    # Comment Management
    Route::get('comments/{comment}/edit', 'AdminCommentsController@getEdit');
    Route::post('comments/{comment}/edit', 'AdminCommentsController@postEdit');
    Route::get('comments/{comment}/delete', 'AdminCommentsController@getDelete');
    Route::post('comments/{comment}/delete', 'AdminCommentsController@postDelete');
    Route::controller('comments', 'AdminCommentsController');

    # Blog Management
    Route::get('blogs/{post}/show', 'AdminBlogsController@getShow');
    Route::get('blogs/{post}/edit', 'AdminBlogsController@getEdit');
    Route::post('blogs/{post}/edit', 'AdminBlogsController@postEdit');
    Route::get('blogs/{post}/delete', 'AdminBlogsController@getDelete');
    Route::post('blogs/{post}/delete', 'AdminBlogsController@postDelete');
    Route::controller('blogs', 'AdminBlogsController');

    # User Management
    Route::get('users/{user}/show', 'AdminUsersController@getShow');
    Route::get('users/{user}/edit', 'AdminUsersController@getEdit');
    Route::post('users/{user}/edit', 'AdminUsersController@postEdit');
    Route::get('users/{user}/delete', 'AdminUsersController@getDelete');
    Route::post('users/{user}/delete', 'AdminUsersController@postDelete');
    Route::controller('users', 'AdminUsersController');

    # User Role Management
    Route::get('roles/{role}/show', 'AdminRolesController@getShow');
    Route::get('roles/{role}/edit', 'AdminRolesController@getEdit');
    Route::post('roles/{role}/edit', 'AdminRolesController@postEdit');
    Route::get('roles/{role}/delete', 'AdminRolesController@getDelete');
    Route::post('roles/{role}/delete', 'AdminRolesController@postDelete');
    Route::controller('roles', 'AdminRolesController');

    # Admin Dashboard
    Route::controller('/', 'AdminDashboardController');
});


/** ------------------------------------------
 *  Frontend Routes
 *  ------------------------------------------
 */
# FAQs Page
Route::get('/faqs', 'FrontController@getFaqForm');
# About Page
Route::get('/about', 'FrontController@getAboutForm');
# Blast front Page
Route::get('/blast', 'FrontController@getBlastForm');

Route::post('/blastresult', 'FrontController@getBlastResult');
# Blast Result Page
Route::get('/vlast', 'FrontController@getVlastForm');
# Lab Page
Route::get('/lab', 'FrontController@getLabForm');
# Lines of Research
Route::get('/labresearch', 'FrontController@getLabResearchForm');
# Scholars
Route::get('/scholars', 'FrontController@getScholarsForm');
# Lab contact Form
Route::get('/labcontact', 'FrontController@getLabContactForm');
# contact Form
Route::get('/contact', 'FrontController@getContactForm');
Route::get('summary', 'AdminSummaryController@getIndexUser');
    Route::get('summary/data', 'AdminSummaryController@getDataUser');

    Route::get('summary2012', 'AdminSummaryController@getIndex2012');
    Route::get('summary2012/data', 'AdminSummaryController@getData2012');

    Route::get('summaryfgfr', 'AdminSummaryController@getIndexfgfr');
    Route::get('summaryfgfr/data', 'AdminSummaryController@getDatafgfr');

// User reset routes
Route::get('user/reset/{token}', 'UserController@getReset');
// User password reset
Route::post('user/reset/{token}', 'UserController@postReset');
//:: User Account Routes ::
Route::post('user/{user}/edit', 'UserController@postEdit');

//:: User Account Routes ::
Route::post('user/login', 'UserController@postLogin');

# User RESTful Routes (Login, Logout, Register, etc)
Route::controller('user', 'UserController');

//:: Application Routes ::
Route::get('labtest', 'LabtestController@getIndex');

Route::get('/hoxfamily', 'HoxFamily@index');
Route::get('/download/seqs/{fid}', array('as' => 'seq.download', 'uses' => 'HoxFamily@downloadSequence'));

Route::get('/download/seq/{mid}', array('as' => 'seq.download', 'uses' => 'HoxFamily@downloadSeq'));
Route::get('/hoxfamily/data', 'HoxFamily@getData');
Route::get('/hoxfamily/{id}', 'HoxFamily@getMember');
Route::get('/hoxfamily/{id}/data', 'HoxFamily@getMemberData');

Route::get('/getmembers/{fid}', 'FrontController@getMembers');

Route::get('/search', 'FrontController@getSearch');
Route::get('/genes', 'FrontController@getGenes');
Route::get('/find', 'FrontController@getSearchForm');
# Search paralogon 1/2/8/20
Route::get('/search', 'FrontController@getSearch');
Route::get('/genes', 'FrontController@getGenes');
Route::get('/fetch', 'FrontController@getfetchForm');

# Search paralogon FGFR
Route::get('/search', 'FrontController@getSearch');
Route::get('/genes', 'FrontController@getGenes');
Route::get('/fetchfgfr', 'FrontController@getfetchfgfrForm');
# Posts - Second to last set, match slug
Route::get('{postSlug}', 'BlogController@getView');
Route::post('{postSlug}', 'BlogController@postView');

# Index Page - Last route, no matches
Route::get('/', array('before' => 'detectLang', 'uses' => 'FrontController@getIndex'));
