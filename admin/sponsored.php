<?php 
include('includes/header.php'); 
include('includes/navbar.php');
$con = mysqli_connect('localhost','root','','charity');

if(isset($_POST['delete_btn']))
{
    $ID = $_POST['delete_id'];

    $sql = "DELETE FROM `sponsore` WHERE ID='$ID' ";
    $result = mysqli_query($con, $sql);

    if($result)
    {
        echo "<script>alert('Wow! Sponsore ID Successfully Deleted.')</script>";
    }
    else
    {
        echo "<script>alert('opps! User not Deleted.')</script>"; 
    }    
}


?>



<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">sponsore Profile</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <?php
                $sql = "SELECT * FROM `sponsore`";
                $result = mysqli_query($con, $sql);
            ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th> Name </th>
                            <th>Email </th>
                            <th>Address</th>
                            <th>Input</th>
                            <th>City</th>
                            <th>Area</th>
                            <th>Mobile</th>
                        
                            
                            <th>DELETE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(mysqli_num_rows($result) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($result))
                            {
                        ?>
                            <tr>
                                <td><?php  echo $row['ID']; ?></td>
                                <td><?php  echo $row['name']; ?></td>
                                <td><?php  echo $row['email']; ?></td>
                                <td><?php  echo $row['address']; ?></td>
                                <td><?php  echo $row['input']; ?></td>
                                <td><?php  echo $row['city']; ?></td>
                                <td><?php  echo $row['area']; ?></td>
                                <td><?php  echo $row['mobile']; ?></td>
                                
                                
                                <td>
                                    <form action="sponsored.php" method="post">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['ID']; ?>">
                                        <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>





<?php

include('includes/scripts.php');
include('includes/footer.php');


?>