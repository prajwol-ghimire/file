<?php

function component($bookname, $bookauthor, $bookimage){
    $book_images="html/photo/".$bookimage;
    $element="
    <a href=\"content.php\"><div class=\"books-content\">
    <div class=\"image-block\"><img class=\"books-images\" src=\"$book_images\"></div>
    <div class=\"books-title\"><b>$bookname</b></div>
    <div class=\"books-time\"><i>$bookauthor</i></div>
    </div></a>
    ";
    echo $element;
}


function notset(){
    $logons="
    <a href=\"html/login.php\"><input class=\"btn_login\" type=\"submit\" name=\"login\" value=\"login\"></input></a>
    <a href=\"html/signup.php\"><input class=\"btn2_signup\" type=\"submit\" name=\login\" value=\"Sign Up\"></input></a>
    ";
    echo $logons;
}

function set($error,$full_name){
    $userinfo="
    <span class=\"sucess-login\">$error<span></br>
    <span class=\"username\">$full_name</span>
    ";
    echo $userinfo;
}

function upload(){
    $file="
    <form action=\"html/upload.php\" method=\"POST\"> 
    <button type=\"submit\" class=\"btn_upload\"><i class=\"fa fa-upload\"></i> Add a Book review</button>
    </form>
    ";
    echo $file;
}