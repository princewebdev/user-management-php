<?php include("inc/header.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-2">
            <form action="" method="post" class="row g-3 needs-validation" novalidate>
                <div class="col-md-12">
                    <label for="fname" class="form-label">Please Enter Your Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="address">Enter Your Address</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="email">Enter Your Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-12">
                    <select name="status" class="form-select">
                        <option value="1">Select User Status</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <input type="submit" class="btn btn-warning border-2 border-primary text-uppercase fw-bolder   rounded-0" name="submit" value="Add User">
            </form>
        </div>
    </div>
</div>

<!-- Create Data  -->
<?php 

if(isset($_POST['submit'])){
    $name       = mysqli_real_escape_string($db, $_POST['fname']);
    $address    = mysqli_real_escape_string($db, $_POST['address']);
    $email      = mysqli_real_escape_string($db, $_POST['email']);
    $status     = mysqli_real_escape_string($db, $_POST['status']);

    $sql = "INSERT INTO all_user (full_name, short_address, email, join_date, status ) VALUES ('$name', '$address', '$email', now(), '$status')";

    $query = mysqli_query($db , $sql);

    if($query){
        header("Location: index.php");
    }else{
         die("Data Inster Error". mysqli_error());
    }

}

?>


<?php include("inc/footer.php"); ?>