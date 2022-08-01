<?php
$con = mysqli_connect('localhost','root','','charity');
error_reporting(0);
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 





if(isset($_POST['updatebtn']))
{
    $ID= $_POST['edit_id'];
    $name = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $food = $_POST['edit_food'];
    $quantity = $_POST['edit_quantity'];
    $city = $_POST['edit_city'];
    $area = $_POST['edit_area'];
    $mobile = $_POST['edit_mobile'];

    $sql = "UPDATE `food` SET name='$name', email='$email', food='$food', quantity='$quantity', city='$city', area='$area', mobile='$mobile'  WHERE ID='$ID' ";
    $result = mysqli_query($con, $sql);

    if($result)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: food_donation.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: food_donation.php'); 
    }
}
?>

<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Food Panal </h6>
        </div>
        <div class="card-body">
        <?php

            if(isset($_POST['edit_btn']))
            {
                $ID = $_POST['edit_id'];
                
                $sql = "SELECT * FROM `food` WHERE ID='$ID' ";
                $result = mysqli_query($con, $sql);

                foreach($result as $row)
                {
                    ?>

                        <form action="" method="POST">

                            <input type="hidden" name="edit_id" value="<?php echo $row['ID'] ?>">

                            <div class="form-group">
                                <label> Username </label>
                                <input type="text" name="edit_username" value="<?php echo $row['name'] ?>" class="form-control"
                                    placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="edit_email" value="<?php echo $row['email'] ?>" class="form-control"
                                    placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label>Food</label>
                                <input type="text" name="edit_food" value="<?php echo $row['food'] ?>"
                                    class="form-control" placeholder="Enter food">
                            </div>
                            <div class="form-group">
                                <label>Quantity</label>
                                <input type="text" name="edit_quantity" value="<?php echo $row['quantity'] ?>"
                                    class="form-control" placeholder="Enter quantity">
                            </div>
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" name="edit_city" value="<?php echo $row['city'] ?>"
                                    class="form-control" placeholder="Enter city">
                            </div>
                            <div class="form-group">
                                <label>Area</label>
                                <input type="text" name="edit_area" value="<?php echo $row['area'] ?>"
                                    class="form-control" placeholder="Enter area">
                            </div>
                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="mobile" name="edit_mobile" value="<?php echo $row['mobile'] ?>"
                                    class="form-control" placeholder="Enter mobile">
                            </div>

                            <a href="food_donation.php" class="btn btn-danger"> CANCEL </a>
                            <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>

                        </form>
                        <?php
                }
            }
        ?>
        </div>
    </div>
</div>

</div>


<?php
if(isset($_POST['delete_btn']))
{
    $ID = $_POST['delete_id'];

    $sql = "DELETE FROM `food` WHERE ID='$ID' ";
    $result = mysqli_query($con, $sql);

    if($result)
    {
        echo "<script>alert('Wow! User Successfully Deleted.')</script>"; 
    }
    else
    {
        echo "<script>alert('Wow! User Successfully Deleted.')</script>"; 
    }    
}
?>



?>



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>