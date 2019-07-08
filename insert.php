<?php
	include 'header_admin.php';
?>
<?php
$mysqli = new mysqli('localhost','root','','property');
if($mysqli->connect_error)
{
  printf("Can not  connect database %s\n",$mysqli->connect_error);
  exit();
}

if(isset($_POST['submit'])){

	$name=$_POST['name'];
  $charge=$_POST['charge'];
	$address=$_POST['address'];
	$access=$_POST['access'];
	$floor=$_POST['floor'];
	$utility=$_POST['utility'];
	//$descrip=$_POST['descrip'];
	$descrip=mysqli_real_escape_string($mysqli ,$_POST['descrip']);

	$target_dir="images/";
	$target_file=$target_dir.basename($_FILES["images"]["name"]);
	$temp_file=$_FILES["images"]["name"];
	move_uploaded_file($_FILES["images"]["tmp_name" ],$target_file);
 
	$query="INSERT into property_t (name,charge,address,access,floor,utility,descrip,images) values('$name','$charge','$address','$access','$floor','$utility','$descrip','$temp_file')"; 

	$insert=$mysqli->query($query);
    
  /*if($insert)
    echo "Inserted!";
  else
    echo "failed!";*/

	$last_id = $mysqli->insert_id;
	$c = count($_FILES['img']['name']);
	if($insert)
	{
		if($c < 10)
		{
			for ($i=0; $i < $c ; $i++) { 
				$img_name = $_FILES['img']['name'][$i];
				move_uploaded_file($_FILES['img']['tmp_name'][$i],"uploads/".$img_name);
				$query_multi = "INSERT INTO details(images,proid) VALUES ('$img_name','$last_id')";
				$ins = $mysqli->query($query_multi);}
		}
		else
		{
			echo "MAX LIMIT EXCEED";
		}
	}
}

?> 

<div class="container">

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
  <fieldset>
    <legend>Add a Property</legend><hr>
    <div class="form-group row">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Name of Property</label>
      <input class="form-control" name="name" placeholder="Name of property" type="text">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Address</label>
      <textarea class="form-control" name="address" id="exampleTextarea" rows="3"></textarea>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Access</label>
      <input class="form-control" name="access" placeholder="Access" type="text">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Floor space</label>
      <input class="form-control" name="floor" placeholder="floor space" type="text">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Utility</label>
      <input class="form-control" name="utility" placeholder="Utility" type="text">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Monthly charge</label>
      <input class="form-control" name="charge" placeholder="Monthly charge" type="text">
    </div>
 
    <div class="form-group">
      <label for="exampleTextarea">Description</label>
      <textarea class="form-control" name="descrip" id="exampleTextarea" rows="3"></textarea>
    </div>

    <div class="form-group">
      <label for="exampleInputFile">Featured Images</label>
      <input class="form-control-file" name="images" id="exampleInputFile" aria-describedby="fileHelp" type="file">
    </div>

    <div class="form-group">
      <label for="exampleInputFile">Room Images</label>
      <input class="form-control-file" name="img[]" multiple id="exampleInputFile" aria-describedby="fileHelp" type="file">
    </div>

    <div class="form-group">
    	<div class="col-lg-10 col-lg-offset-2">
    		<button type="reset" class="btn btn-danger">Cancel</button>
    		<button type="submit" name="submit" class="btn btn-primary">Submit</button>
    	</div>
    </div>
    
</form>

</div>

<?php
	include 'footer.php';
?>