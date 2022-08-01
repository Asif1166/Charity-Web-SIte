<?php
session_start();
$con = mysqli_connect('localhost','root','','charity');
include('includes/header.php'); 
include('includes/navbar.php'); 
error_reporting(0);

session_start();

if (isset($_SESSION['name'])) {
  header("Location: index.php");
}

if(isset($_POST['registerbtn'])){

   $name = mysqli_real_escape_string($con, $_POST['name']);
   $email = mysqli_real_escape_string($con, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);

   if ($pass == $cpass) {
    $sql = " SELECT * FROM `admin` WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($con, $sql);

   if(!$result->num_rows > 0){
    $sql = "INSERT INTO `admin`(name,email,password) VALUES('$name','$email','$pass')";
    $result = mysqli_query($con, $sql);
    
    if ($result){
      echo "<script>alert('Wow! User Registration Completed.')</script>";
      $name = "";
      $email = "";
      $_POST['password'] = "";
      $_POST['cpassword'] = "";
    } else{

      echo "<script>alert('Woops! Something Wrong Went.')</script>";
      } 
    } else{
      echo "<script>alert('Woops! Email Already Exists.')</script>";
      }
   } else {
    echo "<script>alert('Password Not Matched.')</script>";
   }

}



?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Username </label>
                <input type="text" name="name" class="form-control" placeholder="Enter Username" value="<?php echo $name; ?>" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email" value="<?php echo $email; ?>" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password" value="<?php echo $_POST['cpassword']; ?>" required>
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Admin Profile 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Admin Profile 
            </button>
    </h6>
  </div>

  <div class="card-body">


    <div class="table-responsive">
    <?php
                $sql = "SELECT * FROM `admin`";
                $result = mysqli_query($con, $sql);
            ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Username </th>
            <th>Email </th>
            <th>Password</th>
            
            <th>EDIT </th>
            <th>DELETE </th>
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
                                <td><?php  echo $row['password']; ?></td>
                                
                                <td>
                                    <form action="register_edit.php" method="post">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['ID']; ?>">
                                        <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="code.php" method="post">
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
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>