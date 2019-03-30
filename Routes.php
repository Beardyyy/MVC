<?php

Route::set('index.php', function(){

    Index::CreateView('home');
});



Route::set('about-us', function(){

    AboutUs::CreateView('aboutUs');
    AboutUs::test();
});



Route::set('blog', function(){

    Blog::CreateView('blog');
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


?>