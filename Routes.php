<?php

Route::set('index.php', function(){

    Index::CreateView('home');
});




Route::set('about-us', function(){

    AboutUs::CreateView('aboutUs');

});




Route::set('blog', function(){

    $post = Blog::fetchPost();
    Blog::CreateView('blog', $post);


});




Route::set('blog/$a', function(){

    $post = Blog::onePost($a);
    Blog::CreateView('blog', $post);


});




Route::set('contact-us', function(){

    ContactUs::CreateView('contactUs');
});




Route::set('register', function(){

    Register::CreateView('register');
    Register::check();
});




Route::set('login', function(){

    Login::CreateView('login');

    Login::check();
});




Route::set('create-post', function(){

    CreatePost::CreateView('createPost');

    CreatePost::create();
});




Route::set('logout', function(){

    Logout::out();

});
