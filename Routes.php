<?php

Route::set('index.php', function(){

    Index::CreateView('home');
});



Route::set('about-us', function(){

    AboutUs::CreateView('aboutUs');
    AboutUs::view('home');
});



Route::set('blog', function(){

    ContactUs::CreateView('blog');
});

Route::set('contact-us', function(){

    ContactUs::CreateView('contactUs
    ');
});

?>