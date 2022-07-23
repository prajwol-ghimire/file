<?php

function component($bookname, $bookauthor, $bookimage, $bookdesc){
    $book_images="html/photo/".$bookimage;
    $element="
 
        <div class=\"books-content\">   <a>
            <div class=\"image-block\"><img class=\"books-images\" src=\"$book_images\"></div>
            <div class=\"books-title\"><b>$bookname</b></div>
            <div><i>$bookauthor</i></div>
            <div class=\"book_des\">$bookdesc</div>   </a>
        </div>
 
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


function logout(){
    $logout="
    <form action=\"html/processlogout.php\" method=\"POST\"> 
    <button type=\"submit\" class=\"btn_signout\"><i class=\"fa fa-sign-out\"></i> Logout</button>
    </form>
    ";
    echo $logout;


}