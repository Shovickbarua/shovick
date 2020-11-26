
<?php
	if(isset($_POST['btn'])){
		$type =array('jpeg','jpg');
		$imageName = $_FILES['image']['name'];
		$imgType = pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
		$imageSize= $_FILES['image']['size'];
		$imgTmp = $_FILES['image']['tmp_name'];
		$directory = 'images/';
		$imgUrl = $directory.$imageName;
		
		if($imageName  != null){
			if(file_exists($imgUrl)){
				$imgErr = 'File already  Exists';
			}
			elseif($imageSize > 1000000){
				$imgErr = 'Image should not be greater than 1 MB';
			}elseif(!in_array($imageType,$type){
				$imgErr = 'Image should jpg & jpeg extension';
			}else{
				move_uploaded_file($imageTmp,$imgUrl);
				$imgok = 'Image uploaded successfully';
			}
		}else{
			$imgErr = 'Please Select an image file';
		}
	}
?>


<!doctype html>


<html lang="en">
  <head>
  </head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <div class="container mt-3">
		<h2>Image Upload</h2>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
			<p>Custom file: </p>
		<div class="custom-file mb-3">
			<input type="file" class="custom-file-input" id="customFile" name="image" accept="images/*">
			<label class="custom-file-label" for="customFile">Choose file</label>
		</div>
		<div class="mt-3">
			<button type="submit" class="btn btn-primary" name="btn">Submit</button>
		</div>
	</div>
	
	<div class="container mt-3">
		<div class="row">
		<?php
		$dirname ="images/";
		$images = glob($dirname."*.{jpg,jpeg,png}",GLOB_BRACE);
		foreach($images as $image){
			?>
			<div class="col-md-4">
				<?php 
				echo '<img class="" src="'.$image.'"alt="Chania" width="100%" height="250px">';
				echo pathinfo($image, PATHINFO_FILENAME);
			?>
			</div>
		<?php
		}
		?>
	
	
	
	
	
	
	
	
	
	
  </body>
</html>