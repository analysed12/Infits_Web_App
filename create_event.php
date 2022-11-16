<?php
require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
		?>
		<script>alert  ("Username cannot be blank")</script>
		<?php
    }
    else{
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken"; 
					?>
		<script>alert ("This username is already taken") </script>
		<?php
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);


// Check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
	?>
		<script>alert ("Password cannot be blank") </script>
		<?php
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
	?>
		<script>alert  ("Password cannot be less than 5 characters")</script>
		<?php
}
else{
    $password = trim($_POST['password']);
}

// Check for confirm password field
if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";
	?>
		<script>alert  ("Passwords should match")</script>
		<?php
}


// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
{
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

        // Set these parameters
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            header("location: signin.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}

?>


<!doctype html>
<html lang="en">

<head>
	<title>SignUp Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style1.css">
</head>
<style>
html {
    overflow-x: hidden;
}

#content {
    display: flex;
    flex-direction: column;
    height: 90%;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 500;
    /* font-size: 35px; */
    padding: 20px;
}

.event-form {
    width: 50%;
    padding: 2%;
    margin-left: 10%;
    /* background-color: palegoldenrod; */
}

.ev-img {
    display: flex;
    justify-content: center;
    align-items: center;
    /* width: 260px;
height: 190px; */
}

.event-image {
    width: 260px;
    height: 190px;
}

.event_title {
    font-size: 15px;
    font-weight: 800;
    margin-bottom: 15px;
}

.eve_form {
    /* background-color: azure; */
    padding: 10px;
    /* width: 60%; */

}

.subject {
    display: block;
    /* font-size: 18px;
    font-weight: bold; */
    width: 100%;
}

.rem-item {
    background: #FFFFFF;
    border: 1px solid #4B9AFB;
    border-radius: 45px;
    padding: 10px;
    margin: 10px;
    font-size: 18px;
}

.rem_icon {
    color: #4B9AFB;
    margin-right: 15px;
}



.content-name {
    position: absolute;
    bottom: 5px;
    left: 0px;
    transition: all 0.3s ease;
}



.form_btn {
    width: 100%;
    background: #4B9AFB;
    border-radius: 10px;
    color: white;
    text-align: center;
    padding: 15px;
    margin-top: 30px;
}

.txt {
    width: 100%;
    margin-bottom: 10px;
    margin-top: 15px;
    cursor: pointer;
}

.txt p {
    padding-left: 15px;
}

.txticon {
    padding: 10px;
}

.input-icons i {
    position: absolute;
}

.input-icons {
    width: 100%;
    margin-bottom: 10px;
    border: none;
}

.icon {
    padding: 10px;
    color: black;
    min-width: 50px;
}

.input-field {
    width: 100%;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 50px;
}

/* POPUP */

.pop-box .button {
    font-size: 18px;
    text-decoration: none;
    color: black;
    border: 1px solid black;
    border-radius: 20px;
    margin-top: 20px;
    padding: 10px 20px;
}

.bg-popContainer {
    display: none;
}

.pop-box {
    width: 100%;
    height: auto;
    background: #FFFFFF;
    border: 1px solid rgba(225, 225, 225, 0.66);
    box-shadow: 0px 11px 25px rgba(0, 0, 0, 0.1);
    padding: 20px;
    position: relative;
}

.cont {
    border-radius: 20px;
}

input {
    width: 50%;
    display: block;
    margin: 15px auto;
    padding: 5px;
}

.closer {
    position: absolute;
    top: 0;
    right: 14px;
    font-size: 30px;
    transform: rotate(45deg);
    cursor: pointer;
}

::placeholder {
    color: black;
    opacity: 1;
    /* Firefox */
}

:-ms-input-placeholder {
    /* Internet Explorer 10-11 */
    color: black;
}

::-ms-input-placeholder {
    /* Microsoft Edge */
    color: black;
}

/* MEDIA QUERY */


@media screen and (min-width: 720px) {

    /* Styles go here */
    .mobile-menu {
        display: none;
    }
}

@media (min-width: 0px) and (max-width: 720px) {
    #content {
        /* padding: 0 !important; */
    }

    .event-form {
        /* height: 100%; */
        margin-left: 0 !important;
        width: 100%;
        display: flex;
        /* justify-content: center; */
        justify-content: space-around;
        align-items: center;
        flex-direction: column;
    }

}
</style>

<body>
	<section class="ftco-section">
		<div class="container main-border ">
			<div class="row justify-content-center ">
				<div class="col-md-12 col-lg-16 ">
					<div class="wrap d-lg-flex">
						<div class="img" style="background-image: url(popcorn.jfif);">
						</div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4">REGISTER HERE</h3>
								</div>

							</div>
							<form action="signup.php" class="signin-form" method = "post">
								<div class="form-group mb-3 ">
									<label class="label " for="name">Username</label>
									<input type="text" class="form-control main " placeholder="Username" name="username" required>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="password">Password</label>
									<input type="password" class="form-control" placeholder="Password" name="password" required>
								</div>
                                <div class="form-group mb-3">
									<label class="label" for="password">Confirm Password</label>
									<input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" required>
								</div>
								<div class="form-group">
									<button type="submit" class="form-control btn button-clr rounded submit px-3">Sign
										Up</button>
								</div>


							</form>
							<p class="text-center">Already have an account? <a data-toggle="tab" href="signin.php">Sign In </a></p>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/bootstrap.min.js"></script>


</body>

</html>