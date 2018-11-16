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

Route::get('/', function () {
    // return view('welcome');
    
    /*    新增    */
    /*
    \App\Post::create([
        'title'=>'testtitle',
        'content'=>'testcontent',
    ]);
    */
    
    /*
    $post = new\App\Post();
    $post -> title ='testtitle';
    $post -> content = 'testcontent';
    $post -> save(); 
    */

    /*    查詢    */

    /*  使用 all方法  */
    //$posts=\App\Post::all();
    //dd($posts);

    /*  使用 find 方法   */
    //$post=\App\Post::find(1);
    //dd($post);

    /*  使用條件式    */
    //$posts = \App\Post::where('id','<',10) -> orderBy('id','DESC') -> get();
    //dd($posts);

    /*    修改    */
    /*
    $posts = \App\Post::find(18);
    $posts -> update([
        'title' => 'updatetitle',
        'content' => 'updatecontent',
    ]);
    */
    
    $post = \App\Post::find(19);
    $post -> title='savedtitle';
    $post -> content='savedcontent';
    $post -> save();

});


