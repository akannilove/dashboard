<?php
require 'UserValidator.php';

$errors = [];

if(isset($_POST['submit'])){
     $validation = new UserValidator($_POST);
     $errors = $validation->validateForm();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PHP OOP Tutorial</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>
     
     <div class="new-user">
          <h2>Create new user</h2>

          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
          
               <label>Username</label>
               <input type="text" name="username" value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>">
               <div class="error">
                    <?php echo $errors['username'] ?? '' ?>
               </div>

               <label>Email</label>
               <input type="text" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
               <div class="error">
                    <?php echo $errors['email'] ?? '' ?>
               </div>

               <input type="submit" value="submit" name="submit">
          
          </form>
     </div>

</body>
</html>