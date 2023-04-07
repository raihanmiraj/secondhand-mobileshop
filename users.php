<?php require  'session.php'; ?><?php require 'conn.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Users</title>
        <?php include 'header.php'; ?>
    </head>
    <body class="sb-nav-fixed">

    <?php include 'navbar.php' ; ?>
        <div id="layoutSidenav">
            <?php include 'sidebar.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid  ">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"    <?php 
if(isset($_POST['submit'])){
    $u_name = $_POST['u_name'];
    $u_email = $_POST['u_email'];
    $u_pass= $_POST['u_pass'];
 
    include 'api/userssettings.php';

   echo insertUser( $conn, $u_name, $u_email, $u_pass);
}


if(isset($_POST['delete'])){
    $id = $_POST['id'];
  
    include 'api/userssettings.php';

    DeleteUser($id, $conn);
}



?>>Add New User</button>
 
 

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" method="POST">
      <div class="modal-body">
        
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" name="u_name" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="text"  name="u_email" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Password:</label>
            <input type="text"  name="u_pass" class="form-control" id="recipient-name">
          </div>
         
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button  type="submit" name="submit"  class="btn btn-primary">Save User</button>
      </div> </form>
    </div>
  </div>
</div>
                       
                        <div class="card mb-4">
                            <div align="center" class="card-header">

                              List Of Sold Device
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Model</th>
                                            <th>Delete</th>
                                        
                                        </tr>
                                    </thead>
                                 
                                    <tbody>



                                    <?php 

 require 'conn.php';
 $imei2array = array();
 $loadData = "SELECT * FROM `users`  ";
 $result = mysqli_query($conn, $loadData);
 while ($row = mysqli_fetch_assoc($result)) {
     $u_id = $row['u_id'];
     $u_name = $row['u_name'];
     $u_email = $row['u_email'];
     $is_admin = $row['is_admin'];
     
    
                                    
               ?>
        
             
        <td><?php echo $u_id ; ?></td>
                                            <td><?php echo $u_name ; ?></td>
                                         
                                            <td><?php echo $u_email ; ?></td>
                                            <?php if($is_admin== 1){?> 
                                          
                                            <td> <form action="" method="POST"> <input type="text" name="id"  hidden>  <input class="btn btn-danger" type="submit" name="delete" value="Delete" disabled> </form></td>
                                            <?php }else{  ?> 
                                              <td> <form action="" method="POST"> <input type="text" name="id" value="<?php echo $u_id; ?>" hidden>  <input class="btn btn-primary" type="submit" name="delete" value="Delete"> </form></td>
                                              <?php }   ?>
                                            </tr> 
                                            
        
        <?php 
 }
 
?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
   <?php include 'footerlayer.php' ; ?>
            </div>
        </div>

 


<?php include 'footer.php'; ?>
    </body>
</html>
