<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('Akanni', 'Qudus', 'dimejiakanni@gmail.com')";
  // use exec() because no results are returned
  if(!$conn->exec($sql)){
     echo "Record not saved";
  } else{
     echo "New record created successfully";
  }

  $data = "SELECT * FROM myguests";

  $guest = $conn->prepare($data);

  $guest->execute();

  $mad = $guest->fetchAll(PDO::FETCH_ASSOC);



  if (count($mad) > 0){
     echo "<table>";
     echo "<tr><th>S/N</th><th>Firstname</th><th>Lastname</th><th>Email</th></tr>";
  foreach($mad as $each){
    echo "<tr>";
    echo "<td>" . $each["id"] . "</td>";
    echo "<td>" . $each["firstname"] . "</td>";
    echo "<td>" . $each["lastname"] . "</td>";
    echo "<td>" . $each["email"] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
}

  //print_r($mad);
  

$conn = null;