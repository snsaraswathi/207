	<!DOCTYPE html>
	<html>
	<head>
		<title>View Images | SocketSnipers</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="main1.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<style type="text/css">
 body
{   top: 0;
    overflow-x:auto;
    overflow-y:auto;
	background-image: url("cover.jpg");
    background-color: #1e73bc;
    width:100vw;
    height: 100vw;
	background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: top;
    background-clip: inherit;
    background-size: cover;

}
	  .photo {
		float: left;
		margin: 0.5em;
		border: 1px solid #ccc;
		padding: 1em;
		font-size: 15px;
		text-align: center;
		overflow-x:auto;
		overflow-y:auto;
		
	  }

	</style>
	</head>
	<body> 
	<section class="signin">
			<div>
			<center class= "logo">Socket Snipers</center>
			       </div>
				   <div class ="container" id="password_form">
           <div class="row">
               <div class="col-md-4">
        <form method="post" action="viewimage1.php">
                        <div class="form-group" id="form_spacing">
                            <input type="text" class="form-control input-lg" name="search" id="searchimg" placeholder="Type here to search your image....">
                       </div>
                       <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10" id="button">
                            <button type="submit" class="btn btn-default" name="search1" id="button_heading">Search</button>
                            </div></div></div></div>
	<?php
	$search=$_POST['search'];
	
	if($search==""){
	$search="*";

	}

	$images =glob("uploads/$search.*");
	if (count($images) > 0){
	foreach($images as $image) {
	echo "<div class=\"photo\">";
	echo "<a href='".$image."'><img src='".$image."' width='200' height='200' /></a>";
	echo "<br><br>";
	echo "<input type='checkbox' name='foo' value='".basename($image)."'>"." "." <a href='". $image . "' download>".basename($image)."</a>";
	echo "<br>";
	echo "<input type='submit' value='Download' id='submit' name='download'/>";
	echo "</div>\n";
	}

}
else {
echo "<h1><font color='#FFFFF'>File not found</font><h1>";
}
	?>
	</body>
	</html>