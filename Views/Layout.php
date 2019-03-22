<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>CSS from scratch</title>
    <meta name="description" content="">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="style.css">

    <style>

        body {
            background-image: url("img/img.jpg");
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }

        #container {
            padding: 5%;
            margin:  5% auto;
            width: 600px;
            height: 100%;
            background-color: #5F6F6E;
            border-radius: 25px;
        }

        #nav {


        }

        ul {
            padding-left: 10px;
            padding-right: 10px;
        }

        ul, li{

        }

        ul,li,a {
            text-decoration: none;
            padding: 5px 20px;
            display: inline;
            background-color: #BACCDA;
            color: #62422B;
            border-radius: 5px;
        }
        ul,li,a:hover{
            color: white;

        }

        #footer{

            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            background-color: #DED1C8;
        }

        .body {
            width: 70%;
            min-height: 30px;
            background-color: #DED7D3;
            border-radius: 5px;
            margin: 20px auto;
            float: left;

        }

        .body, p{
            padding: 10px;
        }

        #calendar{
            width: 26%;
            margin: 20px auto;
            #display: inline;
            background-color: #DED7D3;
            float: left;
            border-radius: 5px;
            border: 1px solid white;

        }

        h3 {
            text-align: center;
        }



    </style>
</head>

<body>

<div id="container">
    <div id="nav">
        <ul>
            <li><a href="/MVC-new">HOME</a></li>
            <li><a href="/MVC-new/about-us">ABOUT US</a></li>
            <li><a href="/MVC-new/blog">BLOG</a></li>
            <li><a href="/MVC-new/contact-us">CONTACT</a></li>
        </ul>
    </div>

    <?php
    require_once $viewName . ".php";
    ?>

    <div id="calendar">
        <p>Etiam sit amet nunc ac ante pellentesque mollis. Quisque gravida tortor neque, a convallis eros iaculis in. Donec scelerisque lorem tellus, a varius ex semper sit amet. Praesent mollis porta arcu, id blandit lorem. Aliquam erat volutpat. </p>
    </div>
    <div style="clear: both"></div>

</div>
<div id="footer">
    <p>All rights resived <i>@Fox</i></p>
</div>


<script></script>
</body>
</html>