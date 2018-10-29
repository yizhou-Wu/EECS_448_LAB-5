<?php
$post_id=$_POST['del'];
$final= implode(",",$post_id);
$mysqli = new mysqli("mysql.eecs.ku.edu", "y481w239", "emaeN4ch", "y481w239");
if(count($post_id)!=0)
{
  if ($mysqli->connect_errno)
  {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }

  for($i=0;$i<count($post_id);$i++)
  {
    $current=$post_id[$i];
    $query="DELETE FROM Posts WHERE post_id ='$current'";
    if($result=$mysqli->query($query))
    {
      echo "Suceessfully delete the posts:".$current."<br>";
    }
    else
    {
      echo "ERROR";
    }
  }


}
else {
  echo "Please make your choice.";
}
/* close connection */
$mysqli->close();
?>
