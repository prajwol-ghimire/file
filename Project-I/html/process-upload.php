<?php
if(!$_SERVER['REQUEST_METHOD']=="POST"){
    header('Location:login.php');
}
else{
    $bookname = $_POST['book-name'];
    $bookauthor = $_POST['book-author'];
    $bookdes = $_POST['book-des'];
    if (empty($bookname) || empty($bookauthor) || empty($bookdes) ) {
        header('Location: upload.php?error= * All fields are required' . '&bookname=' . $bookname . '&bookauthor=' . $bookauthor . '&bookdes=' . $bookdes);
    } 
    else {
        include_once '../db/connect.php';
        $db = mysqli_select_db($connection, 'booksdata');

            // if(mysqli_query($connection,$query)){
                $query = "SELECT * FROM bookinfo WHERE bookname = '$bookname'";
                $result = mysqli_query($connection, $query);
                if (mysqli_num_rows($result) > 0) {
                    header('Location: upload.php?error= * The book has been already registered' . '&bookname=' . $bookname . '&bookauthor=' . $bookauthor . '&bookdes=' . $bookdes);
                }
                else{

                    //file upload ko lyang           
                    $pname = rand(1000,10000)."-".$_FILES['book_file']['name'];
                    $tname = $_FILES["book_file"]["tmp_name"];
                    move_uploaded_file($tname,"photo/".$pname);
                    //////////////////////////////////////////////////////////////

                    $query = "INSERT INTO bookinfo (bookname, author, book_images, book_description) VALUES ('$bookname', '$bookauthor', '$pname', '$bookdes')";
                    $result = mysqli_query($connection, $query);
                    if ($result) {
                        header('Location: ../index.php');
                    } else {
                        header('Location: upload.php?error= Something went wrong try again' . '&bookname=' . $bookname . '&bookauthor=' . $bookauthor . '&bookdes=' . $bookdes);
                    }
                }
            }
            // else{
            //     // header('Location: upload.php?error= * All fields are required' . '&bookname=' . $bookname . '&bookauthor=' . $bookauthor . '&bookdes=' . $bookdes);
            //     echo("error");
            // }
}


?>



<!-- if (isset($_POST["submit"]))
 {
     #retrieve file title
        $title = $_POST["title"];
     
    #file name with a random number so that similar dont get replaced
     $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
   
     #upload directory path
$uploads_dir = 'images';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
 
    #sql query to insert into database
    $sql = "INSERT into fileup(title,image) VALUES('$title','$pname')";
 
    if(mysqli_query($conn,$sql)){
 
    echo "File Sucessfully uploaded";
    }
    else{
        echo "Error";
    }
} -->