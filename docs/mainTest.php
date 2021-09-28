<?php include 'phpScripts/universalScripts/head.php'?>

<?php include 'phpScripts/universalScripts/header.php'?>
<form class="form-inline" role="search">
            <input class="search js-search form-control form-control-rounded mr-sm-2" type="text" name="search" title="Enter search query here.." placeholder="Search.." aria-label="Search">
</form>
<?php
      $search = $_GET['search'] ?? '1';;
      
     
      
      
      require_once 'phpinitializelogin/initialize.php';
      $query = "SELECT * FROM books WHERE TITLE LIKE '%$search%'";
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