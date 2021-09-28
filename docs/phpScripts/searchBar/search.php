<main class="main pt-4">

    <div class="container">

      <div class="row">
        <div class="col-md-9">
        <div class="text-center">
            <span class="text-muted">Category:</span>
            <h2>Search</h2>
            <hr />
            <form class="form-inline" role="search">
            <input class="search js-search form-control form-control-rounded mr-sm-2" type="text" name="search" title="Enter search query here.." placeholder="Search.." aria-label="Search">
            
            </form>
          </div>
        

          <div class="row">
            <div class="col-md-6">

           

  
        
            
          <br>
          <br>
<?php 
       $titleArr = array();
        $search = $_GET['search'] ?? '1';;
        
       
        
        
        require_once 'phpinitializelogin/initialize.php';
        $query = "SELECT * FROM books WHERE TITLE LIKE '%$search%'";
        $result = $connection->query($query);
        if(!$result) die('Fatal Error');
        $rows = $result -> num_rows;
         
        
        for($j = 0; $j < $rows; ++$j){
          $row = $result->fetch_array(MYSQLI_ASSOC);
          array_push($titleArr, ($row['title'])); 
          
        
  
  
  ?>
        

   <article class="card mb-4">
          <div class="card-img">
              <a href ="<?php echo 'bookEmbed/' .str_replace(' ', '', $titleArr[$j]) .'.php'  ?>"> <img src="<?php echo 'images/'  .($row['image']) ?>"> </a> <br>
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
