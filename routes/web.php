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
    /*
    $post = \App\Post::find(19);
    $post -> title='savedtitle';
    $post -> content='savedcontent';
    $post -> save();
    */
    /*    刪除    */
    
    /*  方法一
    $post = \App\Post::find(20);
    $post -> delete();   
    */
    /*  方法二
    \App\Post::destroy(21);
    */
    /* 刪除多筆資料 */
    //\App\Post::destroy(18,19,22,23);

    /* 取得 Collection */
    /*
    $allPosts = \App\Post::all();
    dd($allPosts);
    $featuredPosts = \App\Post::where('is_feature',1) -> get();
    dd($featuredPosts);
    */
    /* 取得 Model */
    /*
    $fourthPost = \App\Post::find(4);
    dd($fourthPost);
    $lastPost = \App\Post::orderBy('id','DESC') -> first();
    dd($lastPost);
    */
    $post = \App\Post::find(2);
    foreach($post -> comments as $comment){
        echo $comment -> content.'<br>';
    }
    
});


