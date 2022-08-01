<?php
$con = mysqli_connect('localhost','root','','charity');

if(isset($_POST['updatebtn']))
{
    $ID= $_POST['edit_id'];
    $name = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];

    $sql = "UPDATE `admin` SET name='$name', email='$email', password='$password' WHERE ID='$ID' ";
    $result = mysqli_query($con, $sql);

    if($result)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: register.php'); 
    }
}






if(isset($_POST['delete_btn']))
{
    $ID = $_POST['delete_id'];

    $sql = "DELETE FROM `admin` WHERE ID='$ID' ";
    $result = mysqli_query($con, $sql);

    if($result)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: register.php'); 
    }    
}
?>