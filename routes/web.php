<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

http://localhost/
http://localhost/blog/
http://localhost/contact-us/

http://localhost/blog/1
http://localhost/blog/2
http://localhost/blog/3



|
*/

Route::get('/', function () {
    $posts = \App\Post::orderBy("created_at", "DESC")
    ->take(4)
    ->get();

    $nextPosts = \App\Preview::take(3)->get();

    return view('pages.home', ["somePosts" => $posts, "upcomingPosts" => $nextPosts]);
});


Route::get('/blog', function () {

    $posts = \App\Post::orderBy("created_at", "DESC")->get();

    return view('pages.blog', ["manyPosts"=> $posts]);
});






Route::get('/contact-us', function () {

return view('pages.contact');
});


Route::post('/contact-us', function () {

    $variables = request()->all();
    $specific = request()->input("title", "default");

    $comment = new \App\Comment;
    $comment->email = request()->input("email");
    $comment->rating = request()->input("rating");
    $comment->comment = request()->input("comment");

    $comment->save();
    return redirect("/contact-us");

    $emailSend = false;

    if ($emailSend) {
        return redirect("/contact-us")
        -> with("message", "Thank You!");
    } else {
        return redirect("/contact-us")
        -> with("message", "Try Again")


    ;}


    $title = "This is new post";
    $body = "Lorem ipsum";
    $excerpt = "Lorem";
    $img = "/img/bilde.jpg";

    $newpost = new \App\Post;
    $newpost->title = $title;
    $newpost->body = $body;
    $newpost->excerpt = $excerpt;
    $newpost->img = $img;

    $newpost->save();
    //send a person an email

    return redirect("/contact-us");

    });
    

Route::get('/blog/{id}', function ($id) {

    $post = \App\Post::find($id);
    $posts = \App\Post::take(4)->get();

    if ($post == null) {
        return abort(404);

    }

    return view("pages.blog-item", [
        "post" => $post,
        "posts" => $posts,
     ]);
});





