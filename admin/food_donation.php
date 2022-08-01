<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
$con = mysqli_connect('localhost','root','','charity');


if(isset($_POST['addfoodbtn'])){


    $name=$_POST['name'];
    $email=$_POST['email'];
    $food=$_POST['food'];
    $quantity=$_POST['quantity'];
    $city=$_POST['city'];
    $area=$_POST['area'];
    $mobile=$_POST['mobile'];
  
    $sql="insert into `food` (name,email,food,quantity,city,area,mobile)
    values('$name','$email','$food','$quantity','$city','$area','$mobile')";
  
    $result=mysqli_query($con, $sql);
  
    if($result){
      echo "<script>alert('Thanks for your Donation')</script>";
  
    }else{
      echo "<script>alert('Woops! Something Wrong Went.')</script>";
    }
  
  }





?>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add food Donation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Name </label>
                <input type="text" name="name" class="form-control" placeholder="Enter Username"  required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
            </div>
            <div class="form-group">
                <label>Food</label>
                <input type="text" name="food" class="form-control" placeholder="Enter Food name"  required>
            </div>
            <div class="form-group">
                <label>Quantity</label>
                <input type="text" name="quantity" class="form-control" placeholder="Enter quantity"  required>
            </div>
            <div class="form-group">
                <label>City</label>
                <input type="text" name="city" class="form-control" placeholder="Enter your city"  required>
            </div>
            <div class="form-group">
                <label>Area</label>
                <input type="text" name="area" class="form-control" placeholder="Enter your Area"  required>
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="mobile" name="mobile" class="form-control" placeholder="Enter Your phone."  required>
            </div>
            
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="addfoodbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Food Donation 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Food Donation 
            </button>
    </h6>
  </div>






<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Food Item</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <?php
                $sql = "SELECT * FROM `food`";
                $result = mysqli_query($con, $sql);
            ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th> Name </th>
                            <th>Email </th>
                            <th>Food</th>
                            <th>Quantity</th>
                            <th>City</th>
                            <th>Area</th>
                            <th>Mobile</th>

                            <th>Edit</th>
                        
                            
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
                                <td><?php  echo $row['food']; ?></td>
                                <td><?php  echo $row['quantity']; ?></td>
                                <td><?php  echo $row['city']; ?></td>
                                <td><?php  echo $row['area']; ?></td>
                                <td><?php  echo $row['mobile']; ?></td>
                                

                                <td>
                                    <form action="food_donation.php" method="post">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['ID']; ?>">
                                        <button type="submit" name="edit_btn" class="btn btn-danger"> EDIT</button>
                                    </form>
                                </td>
                                
                                <td>
                                    <form action="food_donation.php" method="post">
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