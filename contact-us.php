<?php
// define variables and set to empty values
$name = $email = $contact = $company = $message = $nameErr = $emailErr = $msg ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["cosyName"]);
  $email = test_input($_POST["cosyEmail"]);
  $contact = test_input($_POST["cosyContactNo"]);
  $company = test_input($_POST["cosyCompanyName"]);
  $message = test_input($_POST["cosyMessage"]);
  if(!$name){
    $nameErr = "Name is Required";
  }
  elseif(!$email){
    $emailErr = "Email is Required";
  }else{
    send_mail($name, $email, $contact, $company, $message);
  }
}
function send_mail($name, $email, $contact, $company, $message){
  $to = "contact@cosytech.in";
  $subject = "Contact From Website";
  // $msg = "Message sent successfully.";
  $message = "<p><b>Name:</b> ".$name."</p>";
  $message .= "<p><b>Email:</b> ".$email."</p>";
  $message .= "<p><b>Contact:</b> ".$contact."</p>";
  $message .= "<p><b>Company:</b> ".$company."</p>";
  $message .= "<p><b>Message:</b> ".$message."</p>";

  $header = 'From:contact@cosytech.in'. "\r\n";
  $header .= "MIME-Version: 1.0"."\r\n";
  $header .= "Content-type: text/html;charset=iso-8859-1" ."\r\n";

  $retval = mail ($to,$subject,$message,$header);
 
  if( $retval == true ) {
    $msg = "Message sent successfully.";
  }else {
    $msg = "Message could not be sent.";
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cosytech</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/bootsnav.css"> -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/overwrite.css">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
</head>
<body class="cosybody">
  <?php include 'header.php'; ?>
  <div class="container inner-content">
    <div class="row">
      <div class="col-sm-8 border-righ">
        <h3>Contact us</h3>
        <hr>
        
        <form id="contact_form" class="rw">
          <div class="text-success" id="show_msg"></div>
          <div class="row">
            <div class="form-group col-sm-6 <?php echo $nameErr?'has-error':''?>"">
              <label for="cosyName">Your Name<span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="cosyName" name="cosyName" placeholder="Name">
              <span class="text-danger"><?php echo $nameErr;?></span>
            </div>
            <div class="form-group col-sm-6 <?php echo $emailErr?'has-error':''?>">
              <label for="cosyEmail">Your Email<span class="text-danger">*</span></label>
              <input type="email" class="form-control" id="cosyEmail" name="cosyEmail" placeholder="Email">
              <span class="text-danger"><?php echo $emailErr;?></span>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-sm-6">
              <label for="cosyContactNo">Contact No</label>
              <input type="text" class="form-control" id="cosyContactNo" name="cosyContactNo"  placeholder="Contact No">
            </div>
            <div class="form-group col-sm-6">
              <label for="cosyCompanyName">Company Name</label>
              <input type="text" class="form-control" id="cosyCompanyName" name="cosyCompanyName" placeholder="Comapny Name">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-sm-12">
              <label for="cosyMessage">Your Message</label>
              <textarea class="form-control" rows=8 id="cosyMessage" name="cosyMessage" placeholder="Your Message..."></textarea>
            </div>
            <div class="form-group col-sm-12">
              <input type="submit" id="contact_submit" name="submit" value="Submit" class="btn btn-primary pull-right">
            </div>
          </div>
        </form>
      </div>
      <div class="col-sm-4">
        <h3>Adress</h3>
        <hr>
        <address>
          Abhisek Circle, Mysore<br>
          Karnatak, India, Pin- 570017.<br>
          Write to us <a href="mailto:contact@cosytech.in">contact@cosytech.in</a>.<br> 
        </address>
      </div>
    </div>
  </div>
  <?php include 'footer.php'; ?>
</body>
</html>
