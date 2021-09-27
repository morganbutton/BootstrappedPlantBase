<main class="main pt-4">

    <div class="container">

      <div class="row">
        <div class="col-md-9">
        <div class="text-center">
            <span class="text-muted">Category:</span>
            <h2>All</h2>
            <hr />
          </div>
       
          <div class="row">
            <div class="col-md-6">

           

  
        
            <?php
      require_once 'phpinitializelogin/initialize.php';
      $query = 'SELECT * FROM books';
      $result = $connection->query($query);
      if(!$result) die('Fatal Error');
      $rows = $result -> num_rows;
      $urlArr = array();
      $titleArr = array();
      $designCategoryImageArr = array();
      $designCategoryTitleArr = array();
      $designCategoryYearArr = array();
      $designCategoryURLArr = array();
      $designVariable = 'design';
      $inspirationCategoryImageArr = array();
      $inspirationCategoryTitleArr = array();
      $inspirationCategoryYearArr = array();
      $inspirationCategoryURLArr = array();
      $inspirationVariable = 'inspiration';
      
      for($j = 0; $j < $rows; ++$j){
          $row = $result->fetch_array(MYSQLI_ASSOC);
          echo '<br>';
?>
          <br>
          <br>
<?php 
          array_push($urlArr, ($row['url'])); 
          array_push($titleArr, ($row['title'])); 

          if(($row['category']) === $designVariable){
              array_push($designCategoryImageArr, ($row['image'])); 
              array_push($designCategoryTitleArr, ($row['title'])); 
              array_push($designCategoryYearArr, ($row['year'])); 
              array_push($designCategoryURLArr, ($row['url'])); 
          }else if(($row['category']) === $inspirationVariable){
            array_push($inspirationCategoryImageArr, ($row['image'])); 
            array_push($inspirationCategoryTitleArr, ($row['title'])); 
            array_push($inspirationCategoryYearArr, ($row['year'])); 
            array_push($inspirationCategoryURLArr, ($row['url'])); 
        }
        
?>
   <article class="card mb-4">
          <div class="card-img">
              <a href ="<?php echo 'collection/' .str_replace(' ', '', $titleArr[$j]) .'.php'  ?>"> <img src="<?php echo 'images/'  .($row['image']) ?>"> </a> <br>
          </div>
          <div class="card-body">
              <p class="card-text">
                  <?php 
                      echo '<b>'. htmlspecialchars($row['title']) . ' (' .htmlspecialchars($row['year']) .')' .'</b>'  .'<br>';
                  ?>
              </p>
          </div>
      </article>
      <?php } ?>
   
    
        
   

        </div>
        
        <div class="col-md-3 ml-auto">

       

          <aside class="sidebar sidebar-sticky">
            <div class="card mb-4">
              <div class="card-body">
                <h4 class="card-title">Tags</h4>
                <a class="btn btn-light btn-sm mb-1" href="designcategory.php">Design</a>
                <a class="btn btn-light btn-sm mb-1" href="inspirationcategory.php">Inspiration</a>
               
              </div>
            </div><!-- /.card -->
            
          </aside>

        </div>
      </div>
    </div>

  </main>