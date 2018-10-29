<?php
$user_id=$_POST['select'];
$mysqli = new mysqli("mysql.eecs.ku.edu", "y481w239", "emaeN4ch", "y481w239");
if ($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$query="SELECT * FROM Posts WHERE author_id= '$user_id'";
if($result=$mysqli->query($query))
{
  if(mysqli_num_rows($result)==0)
  {
      echo"Empty Posts";
  }
  else
    {
      while($row=$result->fetch_assoc())
      {
        echo"<table>";
        echo"Posts:";
        echo "<tr><td>"."#".$row["post_id"].":".$row["content"]."</td></tr>";
        echo"</table>";
      }
    }
}


/* close connection */
$mysqli->close();
?>
