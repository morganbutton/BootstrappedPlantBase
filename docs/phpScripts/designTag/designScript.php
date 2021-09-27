<main class="main pt-4">

<div class="container">

  <div class="row">
    <div class="col-md-9">

      <div class="text-center">
        <span class="text-muted">Category:</span>
        <h2>Design</h2>
        <hr />
      </div>

      <div class="row">
        <div class="col-md-6">

          
         
       
           
         

    
<?php   
ob_start();
include 'phpScripts/home/homeScript.php';
ob_end_clean();



$arrSize = sizeOf($designCategoryTitleArr);

for($i = 0; $i < $arrSize; ++$i){ ?> 
    <article class="card mb-4">
    <div class="card-img">
        <a href ="<?php echo 'collection/' .str_replace(' ', '', $designCategoryTitleArr[$i]) .'.php'  ?>"> <img src="<?php echo 'images/'  .$designCategoryImageArr[$i] ?>"> </a> <br>
    </div>
    <div class="card-body">
        <p class="card-text">
            <?php 
                echo '<b>'. htmlspecialchars($designCategoryTitleArr[$i]) . ' (' .htmlspecialchars($designCategoryYearArr[$i]) .')' .'</b>'  .'<br>';
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
            <a class="btn btn-light btn-sm mb-1" href="home.php">All</a>
            <a class="btn btn-light btn-sm mb-1" href="inspirationcategory.php">Inspiration</a>
            
          </div>
        </div><!-- /.card -->
        
      </aside>

    </div>
  </div>
</div>

</main>