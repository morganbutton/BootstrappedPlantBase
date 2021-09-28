<?php include 'phpScripts/universalScripts/head.php'?>

<?php include 'phpScripts/universalScripts/header.php'?>
 
<?php
      require_once 'phpinitializelogin/initialize.php';
      $query = "SELECT * FROM books WHERE TITLE LIKE '%Euclid%'";
      $result = $connection->query($query);
      if(!$result) die('Fatal Error');
      $rows = $result -> num_rows;
      for($j = 0; $j < $rows; ++$j){
        $row = $result->fetch_array(MYSQLI_ASSOC);
        echo '<b>'. htmlspecialchars($row['title']) . ' (' .htmlspecialchars($row['year']) .')' .'</b>'  .'<br>';
      }

?>
//

<?php include 'phpScripts/universalScripts/footer.php' ?>