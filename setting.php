
<?php require  'session.php'; ?><?php require 'conn.php';
include 'modules/logo.php';
 ?>
 
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Settings</title>
    	<link href="assets/css/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<!-- <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" /> -->
        <?php include 'header.php'; ?>
    </head>
    <body class="sb-nav-fixed">
        <?php include 'navbar.php' ; ?>
        <div id="layoutSidenav">
    <?php include 'sidebar.php'; ?>
            <div id="layoutSidenav_content">
			<div class="container-fluid px-4">

 
			<div class=" container-fluid px-4 row justify-content-center">
                    <div class="col-md-6">

<!-- form -->
<form action="" method="POST">
  <div class="row mb-3">
    <label for="sitetitle" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="sitetitle">
    </div>
  </div>
  <div class="row mb-3">
    <label for="siteurl" class="col-sm-2 col-form-label">Site URL</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="siteurl">
    </div>
  </div>





<!-- 
<div class="row mb-3">
    <label for="logohere" class="col-sm-2 col-form-label">Upload LOGO</label>
    <div class="col-sm-10">
	<input id="logohere" type="file" class="form-control"  onchange='document.getElementById("preview").src = window.URL.createObjectURL(this.files[0]); ' name="banner_image" >
    </div>
  </div> -->



<div class="row">
<div class="col-md-6">
<div class="mb-3">
  <label for="logohere" class="form-label">Upload LOGO</label>
  <input id="logohere" type="file" class="form-control"  onchange='document.getElementById("preview").src = window.URL.createObjectURL(this.files[0]); ' name="banner_image" >
</div>
</div>


<div class="col-md-6">
<img style="width: 250px;height:100PX;" id="preview" src="<?php echo  $logo_url ; ?>" alt="">
</div>

</div>

 


  <!-- <input id="logohere" type="file" class="form-control"  onchange='document.getElementById("preview").src = window.URL.createObjectURL(this.files[0]); ' name="banner_image" > -->
 
  
  <button id="savesettings" type="button" class="btn btn-primary">Sign in</button>
</form>

<!-- form -->

 

		
            <!-- <form action="uploadaphoto.php" method="post" enctype="multipart/form-data">
 <input id="logo" type="file"  onchange='document.getElementById("preview").src = window.URL.createObjectURL(this.files[0]); ' name="banner_image" >
 
 <button id="uploadPicture" type="button">Upload</button>
 </form> -->

 </div> </div>
 </div>
                <footer class="py-4 footerbg t mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
			
            </div>
        </div>
        




<?php include 'footer.php'; ?>

<script>
    

$(document).ready(function(){

    $("preview").src=document.getElementById('logohere').files[0];

     $("#savesettings").click(function(){
         
		var form_data = new FormData();
		if($("#logohere")[0].value!=""){
			console.log("se");
		 	form_data.append("banner_image", document.getElementById('logohere').files[0]);
		}
		if($("#sitetitle")[0].value!=""){
			form_data.append("title", document.getElementById('sitetitle').value);
		}

		if($("#siteurl")[0].value!=""){
			form_data.append("url", document.getElementById('siteurl').value);
		}


 


$.ajax({
 url: 'api/changesettings.php', 
 type: 'post',
 data: form_data,
 dataType: 'json',
 contentType: false,
 processData: false,
 success: function (response){
  

   console.log(response);
 }
});
     })
})



</script>


    </body>
</html>
