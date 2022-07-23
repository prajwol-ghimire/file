<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $name_box = $_POST['name_box'];
    $email_box = $_POST['email_box'];
    $message_box = $_POST['message_box'];
    if (empty($name_box) || empty($email_box) || empty($message_box) ) {
        header('Location: contact.php?label= * All fields are required' . '&name_box=' . $name_box . '&email_box=' . $email_box . '&message_box=' . $message_box);
    } 
    else 
    {
        include_once '../db/connect.php';
        $db = mysqli_select_db($connection, 'booksdata');
        $query = "INSERT INTO contactdata (name_box, email_box, message_box) VALUES ('$name_box', '$email_box', '$message_box')";
        $result = mysqli_query($connection, $query);
        if ($result) {
                // echo("done");
            header('Location: contact.php?sucess=We will reach you soon');
        } else {
            header('Location: contact.php?label= *  Something went wrong' . '&name_box=' . $name_box . '&email_box=' . $email_box . '&message_box=' . $message_box);
        }
    }
}
else
{
    header("Location: contact.php");
}

?>