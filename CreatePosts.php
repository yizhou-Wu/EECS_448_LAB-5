<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "y481w239", "emaeN4ch", "y481w239");

/* check connection */
if ($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$user_id=$_POST['user_id'];
$content=$_POST['content'];
$query = "SELECT user_id FROM Users WHERE user_id='$user_id'";
if($user_id==""||$content=="")
{
  echo "Please make sure your input are not empty!";
  exit();
}
else
{
  if ($result = $mysqli->query($query))
  {
    if($result->num_rows>0)
    {
      $query="INSERT INTO Posts(content,author_id) VALUES ('$content','$user_id')";
      if($addpost=$mysqli->query($query))
      {
        echo "Your post is added.";
      }
      else
      {
        echo "ERROR.";
      }
    }
    else
    {
      echo "Sorry.Your ID is not valid.";
    }
  }
  else
  {
    echo "ERROR.";
  }
}
$mysqli->close();
?>
