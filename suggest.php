<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){

	$name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
	$email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
	$suggestion =  trim(filter_input(INPUT_POST, "suggestion", FILTER_SANITIZE_SPECIAL_CHARS));

	$emailBody = "";
	$emailBody .= "Name: $name" . "\n";
	$emailBody .= "Email: $email". "\n"; 
	$emailBody .= "Suggestion: $suggestion";
	//To Do: Send email

	if($name == "" || $email == "" || $suggestion == ""){
		echo "Please fill in the required fields: Name, email, and details";
		exit;
	}

	if($_POST["address"]){
		echo "Bad form input";
		exit;
	}

	header("location:suggest.php?status=thanks");
}

 $pageTitle = "Suggest a Media Item"; 
 $section = "Suggest";

 include('includes/header.php'); ?>
 	<?php if(isset($_GET["status"]) && $_GET["status"] == "thanks"){
 		echo "<h1>Thank you for the suggestion, I'll reply shortly</h1>";
 	} else {?>
	<section class="suggest-form">
		<h1>Suggest a media item!</h1>
		<p>If you think there's somthing I'm missing, let me know!</p>
		<div class="form-wrapper">
			<form action="suggest.php" method="POST">
				<div style="display: none;">
					<label for="address">Your address</label>
					<input type="address" name="address" id="address">
					<p>Please leave this field blank</p>
				</div>

				<label for="name">Your name</label>
				<input type="text" name="name" id="name">

				<label for="email">Your email</label>
				<input type="email" name="email" id="email">

				<label for="suggestion">Suggest Item Details</label>
				<textarea name="suggestion" id="suggestion" cols="30" rows="10"></textarea>

				<input type="submit" value="Send">
			</form>
		</div>
	</section>
	<?php } ?>
<?php include('includes/footer.php'); ?>
