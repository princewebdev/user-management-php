<?php include("inc/header.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2> All User Information </h2>
            <table id="userTable" class="table table-striped w-100">
                <thead class="table-dark ">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Email</th>
                        <th scope="col">Join Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                       $sql = "SELECT * FROM all_user WHERE status = '1' ORDER BY id DESC";
                       $query = mysqli_query($db, $sql);
                       $n = 0;
                       while($row = mysqli_fetch_assoc( $query)){
                        $id         = $row['id'];
                        $name       = $row['full_name'];
                        $address    = $row['short_address'];
                        $email      = $row['email'];
                        $joinDate   = $row['join_date'];
                        $status     = $row['status'];
                        $n++
                        ?>
                    <tr>
                        <th scope="row"><?php echo $n ; ?></th>
                        <td><?php echo $name ?></td>
                        <td><?php echo $address ?></td>
                        <td><?php echo $email ?></td>
                        <td><?php echo $joinDate ?></td>
                        <td>
                            <?php 
                                if($status == 1){echo '<p class="badge bg-success"> Active </p>';}
                                if($status == 0){echo '<p class="badge bg-danger"> Inactive </p>';}
                                ?>
                        </td>
                        <td>
                            <div class="btn-group">
                                <a href="update.php?id=<?php echo $id?>"><i
                                        class="bi bi-pencil-square text-primary  btn-outline-0 "></i></a>
                                <a class="btn btn-primary bg-transparent border-0 p-0" data-bs-toggle="modal" data-bs-target="#delete<?php echo $id?>" ><i class="bi bi-trash text-danger  ms-2 "></i></a>
                            </div>
                        </td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="delete<?php echo $id?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Are You Sure Delete <span class="text-warning"><?php echo $name; ?></span></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary"
                                        data-bs-dismiss="modal">Close</button>
                                    <a type="button" href="index.php?did=<?php echo $id; ?>" class="btn btn-warning">Confirm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
            
                       }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

        <?php
            // Soft Delete Oparation
            if(isset($_GET['did'])){
                $did = $_GET['did'];
                $sql = "UPDATE all_user SET status= 0  WHERE id = '$did'";
                $query = mysqli_query($db, $sql);

                if($query){
                    header("Location:index.php");
                }else{
                    die("soft delete error".mysqli_error($db));
                }
            }

        ?>

<?php include("inc/footer.php"); ?>