<?php
////////////////the firt thing require  Dashboard Page
require('top.inc.php');
if($_SESSION['ROLE']!=1){
	header('location:add_employee.php?id='.$_SESSION['USER_ID']);
	die();
}
//////// declaration des variables 
$Service='';
$id='';
if(isset($_GET['id'])){
	$id=mysqli_real_escape_string($con,$_GET['id']);
	$res=mysqli_query($con,"select * from Service where id='$id'");
	$row=mysqli_fetch_assoc($res);
	$Service=$row['Service'];
}
if(isset($_POST['Service'])){
	$Service=mysqli_real_escape_string($con,$_POST['Service']);
	if($id>0){
		$sql="update Service set Service='$Service' where id='$id'";
	}else{
		$sql="insert into Service(Service) values('$Service')";
	}
	mysqli_query($con,$sql);
	header('location:index.php');
	die();
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Service</strong><small> Form</small></div>
                        <div class="card-body card-block">
                           <form method="post">
							   <div class="form-group">
								<label for="Service" class=" form-control-label">Service Name</label>
								<input type="text" value="<?php echo $Service?>" name="Service" placeholder="Enter your Service name" class="form-control" required></div>
							   
							   <button  type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   </button>
							  </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
                  
<?php
require('footer.inc.php');
?>