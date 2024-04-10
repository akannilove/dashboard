<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <title>Document</title>
     <style>
          .form-text{
               color: red;
          }
     </style>
</head>
<?php

$fullNameErr = $emailErr = $passwordConfirmErr = $genderErr = '';
$fullName = $email = $password = $passwordConfirm = $gender = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

     /* full name input for validation to check 
     if the form input is empty and if empty it should
     assign error message to the varriable created for 
     the error variable for full name

     */
     if(empty($_POST['fullName'])){
          $fullNameErr = 'Name field cannot be empty';
     }else {
          $fullName = test_input($_POST['fullName']);

          /* if the form input has been filled, this check
          if there are unwated character in the input filled
          and if there are, it assign an arror to the variable
          created for error for the name field also */
          
          if (!preg_match("/^[a-zA-Z-' ]*$/",$fullName)){

               $fullNameErr = 'Name field should only contain letter, hypen and white spaces';
          }
     }

     // checks if the email field is not empty

     if(empty($_POST['email'])){
          $emailErr = 'email field cannot be empty';
     }else {
          $email = test_input($_POST['email']);

          /* if the form input has been filled, this check
          if there are charcter that are suppose to be in the an email
          is not in the input filled
          and if there are not, it assign an arror to the variable
          created for error for the email field */
          
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)){

               $emailErr = 'Invalid Email';
          }
     }

     // checks if the password filed is not empty

     if(empty($_POST['password'])){
          $passwordErr = 'Password Field cannot be empty';
     }elseif (strlen($password) < 8){
          
               $passwordErr = 'Password lenghth should not be less than 8 character';
          }else {$password = $_POST['passwordConfirm'];}
          
     

     // checks if the passwordConfirmed filed is not empty

     if (empty($_POST['password'])){
          $passwordConfirmErr = 'Password field cannot be empty';
     }else{

          $password = test_input($_POST['password']);

          if (strlen($password) < 8){
               $passwordConfirmErr = 'password field should not be less than 8 characters';
          }else{
               if ($password !== test_input($_POST['passwordConfirm'])){
                    $passwordConfirmErr = 'Password do not match';
               }else{
                    $passwordConfirm = test_input($_POST['password']);
                    $password = $passwordConfirm;
               }
               
          }
     }


     if(empty($_POST['gender'])){
          $genderErr = 'please select gender';
     }else {
          $gender = test_input($_POST['gender']);

          /* if the form input has been filled, this check
          if there are charcter that are suppose to be in the an email
          is not in the input filled
          and if there are not, it assign an arror to the variable
          created for error for the email field */
          
          $gender = test_input($_POST['gender']);
     }


}

function test_input($data){

  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  $data = trim($data);
  return $data;

}


?>


<body>
<div class="container mt-5">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" autocomplete="off">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Full Name</label>
    <input name="fullName" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $fullName ?>" aria-describedby="nameHelp">
    <div id="nameHelp" class="form-text"><?php echo $fullNameErr ?></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" value="<?php echo $email ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"><?php echo $emailErr ?></div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input name="password" type="password" class="form-control" id="password">
  </div>
  <div class="mb-3">
    <label for="passwordConfirm" class="form-label">Confirm Password</label>
    <input name="passwordConfirm" type="password" class="form-control" id="passwordConfirm" aria-describedby="passwordHelp">
    <div id="passwordHelp" class="form-text"><?php echo $passwordConfirmErr ?></div>
  </div>
    <div class="mb-0">
    <label class="form-label" for="female">Gender</label>
  </div>
  <div class="form-check form-check-inline">
  <input name="gender" class="form-check-input" type="checkbox" id="inlineCheckbox1" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">
  <label class="form-check-label" for="inlineCheckbox1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input name="gender" class="form-check-input" type="checkbox" id="inlineCheckbox2" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">
  <label class="form-check-label" for="inlineCheckbox2">Female</label>
</div>
<div class="form-text"><p><?php echo $genderErr ?></p></div>
<div class="mb-3">
    <input name="submit" type="submit" class="btn btn-primary" id="password" value="Submit Form">
  </div>
</form>
</div>

<h1>Test inputs <?php date_default_timezone_set("Africa/Lagos"); echo date('Y:m:l-h:i:sa');  ?></h1>
<p><?php echo $fullName ?></p>
<p><?php echo $email ?></p>
<p><?php echo $passwordConfirm ?></p>
<p><?php echo $gender ?></p>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
