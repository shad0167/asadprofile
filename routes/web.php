<?php
/*
*/


Route::get('/', function () {
    return view('asadprofile.mainIndex');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', function () {
    return view('test');
});
//////////////////////////////////////////////////////////////////



Route::get('/atomic', function () {
    return view('welcome');
});

///////////////////////////////////////////////////////////
///
/*

                            video vlog post


*/


Route::get('/blog/videoblog/index', 'VideoBlogs@index');

Route::get('user/blog/videoblog/index', 'VideoBlogs@index_user');

Route::get('/blog/videoblog/create',function (){


    return view("admin.blog.videoblog.create");

}
);
Route::post('/blog/videoblog/store', 'VideoBlogs@store');

Route::get('/blog/videoblog/view/{id}', array("uses"=>'VideoBlogs@view') );

Route::get('//blog/videoblog/edit/{id}', array("uses"=>'VideoBlogs@edit') );


Route::post('/blog/videoblog/edit/update', 'VideoBlogs@update' );


Route::get('/blog/videoblog/delete/{id}', array("uses"=>'VideoBlogs@delete') );


Route::get('/blog/videoblog/search/{keyword}', array("uses"=>'VideoBlogs@search') );


Route::post('/blog/videoblog/search_result', function(){
    $path = '/blog/videoblog/'.$_POST['keyword'];
    return redirect($path);
});















///////////////////////////////////////////////////////////
///
/*

                             Book Title

*/
Route::get('/Booktitle/index', 'Booktitle@index');
Route::get('/Booktitle/create',function (){


    return view("Booktitle.create");

}
);
Route::post('/Booktitle/store', 'Booktitle@store');

Route::get('/Booktitle/view/{id}', array("uses"=>'Booktitle@view') );

Route::get('/Booktitle/edit/{id}', array("uses"=>'Booktitle@edit') );


Route::post('/Booktitle/edit/update', 'Booktitle@update' );


Route::get('/Booktitle/delete/{id}', array("uses"=>'Booktitle@delete') );


Route::get('/Booktitle/search/{keyword}', array("uses"=>'Booktitle@search') );


Route::post('/Booktitle/search_result', function(){
    $path = 'Booktitle/search/'.$_POST['keyword'];
    return redirect($path);
});


////////////////////////////////////////////////////////////
/// ///////////////////////////////////////////////////////////
/*

                             Hobbies

*/
Route::get('/Hobbies/index', 'Hobbies@index');
Route::get('/Hobbies/create',function (){


    return view("Hobbies.create");

}
);
Route::post('/Hobbies/store', 'Hobbies@store');

Route::get('/Hobbies/view/{id}', array("uses"=>'Hobbies@view') );

Route::get('/Hobbies/edit/{id}', array("uses"=>'Hobbies@edit') );


Route::post('/Hobbies/edit/update', 'Hobbies@update' );


Route::get('/Hobbies/delete/{id}', array("uses"=>'Hobbies@delete') );


Route::get('/Hobbies/search/{keyword}', array("uses"=>'Hobbies@search') );


Route::post('/Hobbies/search_result', function(){
    $path = 'Hobbies/search/'.$_POST['keyword'];
    return redirect($path);
});


////////////////////////////////////////////////////////////
/*

                             BirthDate

*/

Route::get('/Birthdate/index', 'Birthdate@index');
Route::get('/Birthdate/create',function (){


    return view("Birthdate.create");

}
);
Route::post('/Birthdate/store', 'Birthdate@store');
Route::get('/Birthdate/view/{id}', array("uses"=>'Birthdate@view') );

Route::get('/Birthdate/edit/{id}', array("uses"=>'Birthdate@edit') );


Route::post('/Birthdate/edit/update', 'Birthdate@update' );


Route::get('/Hobbies/delete/{id}', array("uses"=>'Hobbies@delete') );


Route::get('/Birthdate/search/{keyword}', array("uses"=>'Birthdate@search') );


Route::post('/Birthdate/search_result', function(){
    $path = 'Birthdate/search/'.$_POST['keyword'];
    return redirect($path);
});


/////////////////////////////////////////////////////////////

/*

                             Profile Picture

*/
Route::get('/Profilepicture/index', 'Profilepicture@index');
Route::get('/Profilepicture/create',function (){


    return view("Profilepicture.create");

}
);
Route::post('/Profilepicture/store', 'Profilepicture@store');
Route::get('/Profilepicture/view/{id}', array("uses"=>'Profilepicture@view') );

Route::get('/Profilepicture/edit/{id}', array("uses"=>'Profilepicture@edit') );


Route::post('/Profilepicture/edit/update', 'Profilepicture@update' );


Route::get('/Profilepicture/delete/{id}', array("uses"=>'Profilepicture@delete') );


Route::get('/Profilepicture/search/{keyword}', array("uses"=>'Profilepicture@search') );


Route::post('/Profilepicture/search_result', function(){
    $path = 'Profilepicture/search/'.$_POST['keyword'];
    return redirect($path);
});

///////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////

/*

                             Email

*/
Route::get('/Email/index', 'Email@index');
Route::get('/Email/create',function (){


    return view("Email.create");

}
);
Route::post('/Email/store', 'Email@store');
Route::get('/Email/view/{id}', array("uses"=>'Email@view') );

Route::get('/Email/edit/{id}', array("uses"=>'Email@edit') );


Route::post('/Email/edit/update', 'Email@update' );


Route::get('/Email/delete/{id}', array("uses"=>'Email@delete') );


Route::get('/Email/search/{keyword}', array("uses"=>'Email@search') );


Route::post('/Email/search_result', function(){
    $path = 'Email/search/'.$_POST['keyword'];
    return redirect($path);
});

///////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////

/*

                             City

*/
Route::get('/City/index', 'City@index');
Route::get('/City/create',function (){


    return view("City.create");

}
);
Route::post('/City/store', 'City@store');
Route::get('/City/view/{id}', array("uses"=>'City@view') );

Route::get('/City/edit/{id}', array("uses"=>'City@edit') );


Route::post('/City/edit/update', 'City@update' );


Route::get('/City/delete/{id}', array("uses"=>'City@delete') );


Route::get('/City/search/{keyword}', array("uses"=>'City@search') );


Route::post('/City/search_result', function(){
    $path = 'City/search/'.$_POST['keyword'];
    return redirect($path);
});


///////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////

/*

                             City

*/
Route::get('/Summeryoforganization/index', 'Summeryoforganization@index');
Route::get('/Summeryoforganization/create',function (){


    return view("Summeryoforganization.create");

}
);
Route::post('/Summeryoforganization/store', 'Summeryoforganization@store');
Route::get('/Summeryoforganization/view/{id}', array("uses"=>'Summeryoforganization@view') );

Route::get('/Summeryoforganization/edit/{id}', array("uses"=>'Summeryoforganization@edit') );


Route::post('/Summeryoforganization/edit/update', 'Summeryoforganization@update' );


Route::get('/Summeryoforganization/delete/{id}', array("uses"=>'Summeryoforganization@delete') );


Route::get('/Summeryoforganization/search/{keyword}', array("uses"=>'Summeryoforganization@search') );


Route::post('/Summeryoforganization/search_result', function(){
    $path = 'Summeryoforganization/search/'.$_POST['keyword'];
    return redirect($path);
});

///////////////////////////////////////////////////////////////////////////////////////////
///
///