<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "y481w239", "emaeN4ch", "y481w239");

/* check connection */
if ($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$user_id=$_POST['user_id'];
$query = "INSERT INTO Users (user_id) VALUES ('$user_id')";
if($user_id=="")
{
    echo('The username cannot be empty!');
    //exit();
}

  elseif ($mysqli->query($query))
  {
    /* fetch associative array */
    echo('Welcome! You are in!');
    /* free result set */

  }
  else
  {
      echo('Your id was taken, please choose another one.');
  }

$result->free();
/* close connection */
$mysqli->close();
?>
