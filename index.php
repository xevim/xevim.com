<?php
/**
 * Created by IntelliJ IDEA.
 * User: matt
 * Date: 11/17/15
 * Time: 12:28 AM
 */
require 'inc/xevim.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>  <title>X E V I M . C O M</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/xevim.css">
    <script src="js/jquery-1.10.2.js"></script>
</head>

<body>
    <div id="c0">
        <div id="c0a"><span style="font-size: 1.5em">X E V I M . C O M</span></div>
        <div id="c1">
            <div id="c1a" class="fll">
                <a class="cursor" id="loadXevim">XEVIM</a>
                <a href="">XEVIM PROJECTS</a>
                <a href="">MEMBER PROJECTS</a>
                <a href="">NEWS</a>
                <a href="">FORUM</a>
            </div>
            <div id="c1a" class="flr">
                <a href="">SIGN IN</a>
                <a href="">SIGN UP</a>
                <a href="">WEBMAIL</a>
            </div>
        </div>
        <script type="text/javascript">

        </script>
        <div id="c2" class="ccb"></div>

        <div id="c3">
            <div id="c3a" class="fll">
                <a class="cursor" id="loadTop">&uarr; TOP</a>
                <a class="cursor" id="loadPrivacy">PRIVACY</a>
                <a class="cursor" id="loadContact">CONTACT</a>
                <a class="cursor" id="loadAbout">ABOUT XEVIM.COM</a>
            </div>
            <div id="c3a" class="flr">&copy; 2015 Matthew Willis.  All Rights Reserved.</div>
            <div class="ccb"></div>
        </div>

    </div>

    <script type="text/javascript">

        $( "#c2" ).load( "htm/xevim.htm" );

        /* navigation */
        $("#loadXevim").click(function(){
            $("#c2").load("htm/xevim.htm");
            $('title').text('X E V I M / Home');
        });
        $("#loadPrivacy").click(function(){
            $("#c2").load("htm/privacy.htm");
            $('title').text('X E V I M / Privacy');
        });
        $("#loadContact").click(function(){
            $("#c2").load("htm/contact.htm");
            $('title').text('X E V I M / Contact Information');
        });
        $("#loadAbout").click(function(){
            $("#c2").load("htm/about.htm");
            $('title').text('X E V I M / About Xevim');
        });
    </script>
</body>

<script src="js/xevim.js"></script>
</html>
