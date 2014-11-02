<?php

Route::get('/index', function()
{
    return View::make('pages.index');
    //dd(App::environment());
});

Route::get('/whyThisClinicExists', function()
{
    return View::make('pages.whyThisClinicExists');
});
Route::get('/thePediaSuitProtocol', function()
{
    return View::make('pages.thePediaSuitProtocol');
});
Route::get('/developmentalMilestones', function()
{
    return View::make('pages.developmentalMilestones');
});
Route::get('/caseStudies', function()
{
    return View::make('pages.caseStudies');
});
Route::get('/autism', function()
{
    return View::make('pages.autism');
});

Route::get('/speech', function()
{
    return View::make('pages.speech');
});
Route::get('/testimonial', function()
{
    return View::make('pages.testimonial');
});
Route::get('/gallery', function()
{
    return View::make('pages.imageGallery');
});
//Route::get('route.name','HomeController@showPageLayout');
Route::get('/saoPauloSp', function()
{
    return View::make('pages.saoPauloSp');
});
Route::get('/presidentePrudente', function()
{
    return View::make('pages.presidentePrudente');
});
Route::get('/joinville', function()
{
    return View::make('pages.joinville');
});
Route::get('/occupationalTherapy', function()
{
    return View::make('pages.occupationalTherapy');
});
Route::get('/speechTherapy', function()
{
    return View::make('pages.speechTherapy');
});
Route::get('/physicalTherapy', function()
{
    return View::make('pages.physicalTherapy');
});
Route::get('/intensiveTherapy', function()
{
    return View::make('pages.intensiveTherapy');
});
Route::get('/lisboa', function()
{
    return View::make('pages.lisboa');
});
Route::get('/malaysia', function()
{
    return View::make('pages.malaysia');
});
Route::get('/contact', function()
{
    return View::make('pages.contact');
});
