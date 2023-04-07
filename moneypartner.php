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
 
  $u_id = $_POST['s_name'];
     $u_name = $_POST['u_name'];
     $reason = $_POST['reason'];
     $taka = $_POST['taka'];
 
    include 'api/apiforpartershipmoney.php';

   echo AddMoney( $conn ,$u_id, $u_name, $reason, $taka);
}


if(isset($_POST['delete'])){
    $id = $_POST['id'];
  
    include 'api/apiforpartershipmoney.php';

    DeleteUser($id, $conn);
}

?>>Add New Waste</button>
 
 

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
      <label for="s_name" class="col-form-label">Name:</label>
      <select class="form-select" name="s_name" id="s_name" aria-label="Default select example">
    
</select> </div>
         
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Reason:</label>
            <input type="text"  name="reason" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Taka:</label>
            <input type="text"  name="taka" class="form-control" id="recipient-name">
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
                                            <th>Reason</th>
                                            <th>Taka</th>
                                        
                                        
                                        </tr>
                                    </thead>
                                 
                                    <tbody>



                                    <?php 

 require 'conn.php';
 $imei2array = array();
 $loadData = "SELECT * FROM `moneyspent` INNER JOIN users ON moneyspent.u_id=users.u_id;  ";
 $result = mysqli_query($conn, $loadData);
 while ($row = mysqli_fetch_assoc($result)) {
  
     $u_name = $row['u_name'];
      $reason = $row['reason'];
      $taka = $row['taka'];
    
                                    
               ?>
        
             
    
                                            <td><?php echo $u_name ; ?></td>
                                         
                                            <td><?php echo $reason ; ?></td>
                                            <td><?php echo $taka ; ?></td>
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

<script>

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      selectAdd(xhttp.responseText)

    }
};
xhttp.open("GET", "api/api.php?get_users", true);
xhttp.send();

function selectAdd(get){

  var parseData = JSON.parse(get);
  parseData.map((e)=>{
    valueselect = e.u_id;
$("#s_name").append('<option value='+valueselect +'>'+e.u_name+'</option>  ');
 
});
  
}

</script>

    </body>
</html>
