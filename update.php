<?php include("inc/header.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-2">

            <?php   
            $id = $_GET['id'];
            //  Read This user data
            $sql = "SELECT * FROM all_user WHERE id=$id";
            $query = mysqli_query($db,$sql);
            while($row = mysqli_fetch_array($query)){
                $id         = $row['id'];
                $name       = $row['full_name'];
                $address    = $row['short_address'];
                $email      = $row['email'];
                $joinDate   = $row['join_date'];
                $status   = $row['status'];
            }
        ?>
            <h2> User Information</h2>
            <form action="" method="post" class="row g-3 needs-validation" novalidate>
                <div class="col-md-12">
                    <label for="fname" class="form-label">Please Update Your Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $name; ?>" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="address">Update Your Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="<?php echo $address; ?>" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="email">Update Your Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="date">Update Joining Date</label>
                    <input type="date" class="form-control" id="date" name="date" value="<?php echo $joinDate; ?>" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-12">
                    <select name="status" class="form-select">
                        <option >Update User Status</option>
                        <option value="1"<?php if($status == 1){echo "selected";} ?>>Active</option>
                        <option value="0"<?php if($status == 0){echo "selected";} ?>>Inactive</option>
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <input type="submit"
                    class="btn btn-warning border-2 border-primary text-uppercase fw-bolder   rounded-0" name="update"
                    value="Save Changes">
            </form>

            <?php 
            //  update this user data
            if(isset($_POST['update'])){
                $name       = mysqli_real_escape_string($db,$_POST['fname']);
                $address    = mysqli_real_escape_string($db,$_POST['address']);
                $email      = mysqli_real_escape_string($db,$_POST['email']);
                $date       = mysqli_real_escape_string($db,$_POST['date']);
                $status     = mysqli_real_escape_string($db,$_POST['status']);

                $sql = "UPDATE all_user SET full_name ='$name', short_address='$address', email = '$email', join_date = '$date', status = '$status' Where id = $id";
                $query = mysqli_query($db, $sql);
                
                if($query){
                    header("Location: index.php");
                }else{
                    die("Data Update Error". mysqli_error());
                }

            }
            ?>

            
        </div>
    </div>
</div>