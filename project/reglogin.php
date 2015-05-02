<!DOCTYPE html>
<html>
<head>
    <title>SignUp | SocketSnipers</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="main1.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
</head>
<body> 
    <section class="signin">
        <div>
        <center class= "logo">Socket Snipers</center>
<?php
	include 'connection.php';
	$FN=$_POST['inputFN'];
	$LN=$_POST['inputLN'];
	$EA=$_POST['inputEA'];
	$PW=md5($_POST['inputPW1']);
	
	if ($FN==NULL or $LN==NULL or $EA==NULL or $PW==NULL){
		?>
		<div class="container"><br/><h2>Form Incomplete!! Go Back To Enrollment Page</h2></div>
		<?php header('Location:signup.php');
	} else {
		mysql_query("INSERT INTO Login(`FirstName`,`LastName`,`EmailId`,`Password`)
					VALUES('$FN','$LN','$EA','$PW')") or die(mysql_error());?>
	<div class="container"><br/><h2>Registration Success!!</h2></div>
	<?php }?>
       
        </div>
        <div class ="container" id="reglogin_form">
           <div class="row">
              <div class="col-lg-4">
              <form method="post" action="query.php">
                    <div class="form-group" id="email">
                        <label for="exampleInputEmail1" class="heading">EMAIL ADDRESS</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1 emailid" placeholder ="Enter email">
                    </div>
                    <div class="form-group" id="password">
                        <label for="exampleInputPassword1" class="heading">PASSWORD</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-default" id="submit">LOG IN</button>
                </form>
                <p id="signUp">Not a Member?  <a href="signup.php"><span class ="link_signin">SIGN UP</span></a><p>
            </div>
        </div>
    </div>
    </section>
</body>
</html>
              
