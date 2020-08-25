<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//for frontend
Route::get('/','front\HomePagesController@index')->name('/');
Route::get('/planet/page','front\HomePagesController@PlanetPage')->name('planet.design');
Route::get('/planet/page/quiz','front\HomePagesController@PlanetQuizPage')->name('planet.quiz.page');
//Route::get('/header','front\HomePagesController@Header');
//frontend for blog
Route::get('/blog','front\BlogPagesController@index')->name('blog');
Route::get('/blog/all','front\BlogPagesController@BlogPage')->name('blog.page');
Route::get('/blog/details/{id}/{title}','front\BlogPagesController@blogDetails')->name('blog.details');
//comment for blog
Route::post('/blog/comment','front\BlogPagesController@blogComment')->name('new.comment');
//user Signup
Route::get('/sign/up/user','front\SignupPagesController@userSignUp')->name('sign.up');
Route::post('/registration/user','front\SignupPagesController@userRegistration')->name('user.registration');
Route::post('/logout/user','front\SignupPagesController@userLogout')->name('user.logout');
//user login
Route::get('/login/user','front\SignupPagesController@userLogin')->name('user.login');
Route::post('/login/user/in','front\SignupPagesController@userLoginPage')->name('user.log.in');
// quiz start

Route::get('/quiz/start/{id}','front\HomePagesController@QuizStart')->name('quiz.start');
Route::post('/quiz/','front\HomePagesController@Quiz')->name('quiz');

//submit project

Route::get('/project/sumbit','front\ProjectPagesController@index')->name('submit.project');
Route::get('/project/sumbit/next','front\ProjectPagesController@SubmitNext')->name('submit.next');
Route::get('/project/sumbit/next1','front\ProjectPagesController@SubmitNext1')->name('submit.next1');
Route::get('/project/sumbit/next2','front\ProjectPagesController@SubmitNext2')->name('submit.next2');
//final submit project
Route::post('/project/sumbmission','front\ProjectPagesController@FinalSubmission')->name('final.submit.project');
Route::post('/project/sumbmission/next','front\ProjectPagesController@FinalSubmission2')->name('final.submit.project.2');
Route::post('/project/sumbmission/next2','front\ProjectPagesController@FinalSubmission3')->name('final.submit.project.3');





Auth::routes();
Route::group(['middleware'=>'superadmin'], function(){

    Route::get('/home', 'HomeController@index')->name('home');


//for admin
    Route::get('/admin','admin\AdminPagesController@index');
//admin partner title
    Route::get('/partner/title','admin\PartnerPagesController@index')->name('create.partner.title');
    Route::post('/add/partner/title','admin\PartnerPagesController@addParterTitle')->name('add.partner.title');
    Route::post('/update/partner/title','admin\PartnerPagesController@updateParterTitle')->name('update.partner.title');
    Route::post('/delete/partner/title','admin\PartnerPagesController@deleteParterTitle')->name('delete.partner.title');
//admin partner image
    Route::get('/partner/image','admin\PartnerPagesController@createPartnerImage')->name('create.partner.image');
    Route::post('/add/partner/image','admin\PartnerPagesController@addPartnerImage')->name('add.partner.image');
    Route::post('/update/partner/image','admin\PartnerPagesController@updatePartnerImage')->name('update.partner.image');
    Route::post('/delete/partner/image','admin\PartnerPagesController@deletePartnerImage')->name('delete.partner.image');
//admin see what we do title
    Route::get('/whatwedo/title','admin\WhatwedoPagesController@createWhatwedoTitle')->name('create.whatwedo.title');
    Route::post('/add/whatwedo/title','admin\WhatwedoPagesController@addWhatwedoTitle')->name('add.whatwedo.title');
    Route::post('/update/whatwedo/title','admin\WhatwedoPagesController@updateWhatwedoTitle')->name('update.whatwedo.title');
    Route::post('/delete/whatwedo/title','admin\WhatwedoPagesController@deleteWhatwedoTitle')->name('delete.whatwedo.title');
//admin see what we do image
    Route::get('/whatwedo/image','admin\WhatwedoPagesController@createWhatwedoImage')->name('create.whatwedo.image');
    Route::post('/add/whatwedo/image','admin\WhatwedoPagesController@addWhatwedoImage')->name('add.whatwedo.image');
    Route::post('/update/whatwedo/image','admin\WhatwedoPagesController@updateWhatwedoImage')->name('update.whatwedo.image');
    Route::post('/delete/whatwedo/image','admin\WhatwedoPagesController@deleteWhatwedoImage')->name('delete.whatwedo.image');
// admin slider section
    Route::get('/slider/section','admin\SliderPagesController@createSliderSction')->name('create.slider.section');
    Route::post('/add/slider/section','admin\SliderPagesController@addSliderSction')->name('add.slider.section');
    Route::post('/update/slider/section','admin\SliderPagesController@updateSliderSction')->name('update.slider.section');
    Route::post('/delete/slider/section','admin\SliderPagesController@deleteSliderSction')->name('delete.slider.section');
//admin home blog title
    Route::get('/blog/section','admin\BlogPagesController@createBlogtitle')->name('create.blog.title');
    Route::post('/add/blog/section','admin\BlogPagesController@addBlogtitle')->name('add.blog.title');
    Route::post('/update/blog/section','admin\BlogPagesController@updateBlogtitle')->name('update.blog.title');
    Route::post('/delete/blog/section','admin\BlogPagesController@deleteBlogtitle')->name('delete.blog.title');
//admin blog create
    Route::get('/create/blog','admin\BlogPagesController@createBlog')->name('create.blog');
    Route::post('/add/blog','admin\BlogPagesController@addBlog')->name('add.blog');
    Route::post('/update/blog','admin\BlogPagesController@updateBlog')->name('update.blog');
    Route::post('/delete/blog','admin\BlogPagesController@deleteBlog')->name('delete.blog');
//    admin blog comments manage

     Route::get('/manage/comments','admin\BlogPagesController@manageComments')->name('manage.comments');
     Route::post('/delete/comments','admin\BlogPagesController@deleteComments')->name('delete.comment');

//admin logo one
    Route::get('/logo/one','admin\LogoPagesController@createLogoOne')->name('create.logo.one');
    Route::post('/add/logo/one','admin\LogoPagesController@addLogoOne')->name('add.logo.one');
    Route::post('/update/logo/one','admin\LogoPagesController@updateLogoOne')->name('update.logo.one');
    Route::post('/delete/logo/one','admin\LogoPagesController@deleteLogoOne')->name('delete.logo.one');

//admin logo tow
    Route::get('/logo/two','admin\LogoPagesController@createLogoTwo')->name('create.logo.two');
    Route::post('/add/logo/two','admin\LogoPagesController@addLogoTwo')->name('add.logo.two');
    Route::post('/update/logo/two','admin\LogoPagesController@updateLogoTwo')->name('update.logo.two');
    Route::post('/delete/logo/two','admin\LogoPagesController@deleteLogoTwo')->name('delete.logo.two');
//admin impact title
    Route::get('/impact/title','admin\ImpactPagesController@createImpacttitle')->name('create.impact.title');
    Route::post('/add/impact/title','admin\ImpactPagesController@addImpacttitle')->name('add.impact.title');
    Route::post('/update/impact/title','admin\ImpactPagesController@updateImpacttitle')->name('update.impact.title');
    Route::post('/delete/impact/title','admin\ImpactPagesController@deleteImpacttitle')->name('delete.impact.title');
//admin impact bg img
    Route::get('/impact/image','admin\ImpactPagesController@createImpactImage')->name('create.impact.image');
    Route::post('/add/impact/image','admin\ImpactPagesController@addImpactImage')->name('add.impact.image');
    Route::post('/update/impact/image','admin\ImpactPagesController@updateImpactImage')->name('update.impact.image');
    Route::post('/delete/impact/image','admin\ImpactPagesController@deleteImpactImage')->name('delete.impact.image');
//admin impact value
    Route::get('/impact/value','admin\ImpactPagesController@createImpactValue')->name('create.impact.value');
    Route::post('/add/impact/value','admin\ImpactPagesController@addImpactValue')->name('add.impact.value');
    Route::post('/update/impact/value','admin\ImpactPagesController@updateImpactValue')->name('update.impact.value');
    Route::post('/delete/impact/value','admin\ImpactPagesController@deleteImpactValue')->name('delete.impact.value');
//admin help section
    Route::get('/help/title','admin\HelpPagesController@createHelpTitle')->name('create.help.title');
    Route::post('/add/help/title','admin\HelpPagesController@addHelpTitle')->name('add.help.title');
    Route::post('/update/help/title','admin\HelpPagesController@updateHelpTitle')->name('update.help.title');
    Route::post('/delete/help/title','admin\HelpPagesController@deleteHelpTitle')->name('delete.help.title');
//admin my planet
    Route::get('/planet','admin\PlanetPagesController@createPlanet')->name('create.planet');
    Route::post('/add/planet','admin\PlanetPagesController@addPlanet')->name('add.planet');
    Route::post('/update/planet','admin\PlanetPagesController@updatePlanet')->name('update.planet');
    Route::post('/delete/planet','admin\PlanetPagesController@deletePlanet')->name('delete.planet');
//admin category
    Route::get('/planet/category','admin\PlanetPagesController@createCategory')->name('create.category');
    Route::post('/add/category','admin\PlanetPagesController@addCategory')->name('add.category');
    Route::post('/update/category','admin\PlanetPagesController@updateCategory')->name('update.category');
    Route::post('/delete/category','admin\PlanetPagesController@deleteCategory')->name('delete.category');
//admin create question

    Route::get('/planet/question','admin\PlanetPagesController@createQuestion')->name('create.question');
    Route::post('/add/question','admin\PlanetPagesController@addQuestion')->name('add.question');
    Route::post('/update/question','admin\PlanetPagesController@updateQuestion')->name('update.question');
    Route::post('/delete/question','admin\PlanetPagesController@deleteQuestion')->name('delete.question');
//admin create Contact

    Route::get('/create/contact','admin\ContactPagesController@createContact')->name('create.contact');
    Route::post('/add/contact','admin\ContactPagesController@addContact')->name('add.contact');
    Route::post('/update/contact','admin\ContactPagesController@updateContact')->name('update.contact');
    Route::post('/delete/contact','admin\ContactPagesController@deleteContact')->name('delete.contact');
//    admin create social link
    Route::get('/create/social','admin\ContactPagesController@createSocial')->name('create.social.link');
    Route::post('/add/social','admin\ContactPagesController@addSocial')->name('add.social.link');
    Route::post('/update/social','admin\ContactPagesController@updateSocial')->name('update.social.link');
    Route::post('/delete/social','admin\ContactPagesController@deleteSocial')->name('delete.social.link');

//    project submission from frontend

    Route::get('/view/project','front\ProjectPagesController@ViewProject')->name('view.project.submission');
    Route::get('/file/download/{id}','front\ProjectPagesController@FileDownload')->name('file.download');

    // admin project acceptied
    Route::get('/project/accept/{id}','front\ProjectPagesController@Accept')->name('admin.project.accept');
//    admin we are

     Route::get('/create/we','admin\WePagesController@createWe')->name('create.we.are');
    Route::post('/add/we','admin\WePagesController@addWe')->name('add.we.are');
    Route::post('/update/we','admin\WePagesController@updateWe')->name('update.we.are');
    Route::post('/delete/we','admin\WePagesController@deleteWe')->name('delete.we.are');


});













