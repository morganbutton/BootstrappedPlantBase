<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Magazine/Blog Theme">
	<meta name="author" content="Bootlab">

  <title>Milo - Magazine/Blog Theme</title>

  <link href="css/app.css" rel="stylesheet">
</head>
<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-light bg-white absolute-top">
      <div class="container">

        <button class="navbar-toggler order-2 order-md-1" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-left navbar-right" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3 order-md-2" id="navbar-left">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="home-onecolumn.html">One column</a>
                <a class="dropdown-item" href="home-twocolumn.html">Two column</a>
                <a class="dropdown-item" href="home-threecolumn.html">Three column</a>
                <a class="dropdown-item" href="home-fourcolumn.html">Four column</a>
                <a class="dropdown-item" href="home-featured.html">Featured posts</a>
                <a class="dropdown-item" href="home-fullwidth.html">Full width</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Posts</a>
              <div class="dropdown-menu" aria-labelledby="dropdown02">
                <a class="dropdown-item" href="post-image.html">Image</a>
                <a class="dropdown-item" href="post-video.html">Video</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Components</a>
              <div class="dropdown-menu" aria-labelledby="dropdown03">
                <a class="dropdown-item" href="doc-alerts.html">Alerts</a>
                <a class="dropdown-item" href="doc-buttons.html">Buttons</a>
                <a class="dropdown-item" href="doc-cards.html">Cards</a>
                <a class="dropdown-item" href="doc-forms.html">Forms</a>
                <a class="dropdown-item" href="doc-icons.html">Icons</a>
                <a class="dropdown-item" href="doc-pagination.html">Pagination</a>
                <a class="dropdown-item" href="doc-tables.html">Tables</a>
                <a class="dropdown-item" href="doc-typography.html">Typography</a>
              </div>
            </li>
          </ul>
        </div>

        <a class="navbar-brand mx-auto order-1 order-md-3" href="index.html">Milø</a>

        <div class="collapse navbar-collapse order-4 order-md-4" id="navbar-right">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="page-about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="page-contact.html">Contact</a>
            </li>
          </ul>
          <form class="form-inline" role="search">
            <input class="search js-search form-control form-control-rounded mr-sm-2" type="text" title="Enter search query here.." placeholder="Search.." aria-label="Search">
          </form>
        </div>
      </div>
    </nav>
  </header>

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
    include '../index.php';
    ob_end_clean();



    $arrSize = sizeOf($designCategoryTitleArr);
   
   for($i = 0; $i < $arrSize; ++$i){ ?> 
        <article class="card mb-4">
        <div class="card-img">
            <a href ="<?php echo 'collection/' .str_replace(' ', '', $designCategoryTitleArr[$i]) .'.php'  ?>"> <img src="<?php echo '../images/'  .$designCategoryImageArr[$i] ?>"> </a> <br>
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

          <aside class="sidebar">
            <div class="card mb-4">
              <div class="card-body">
                <h4 class="card-title">About</h4>
                <p class="card-text">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam <a href="#">semper libero</a>, sit amet adipiscing sem neque sed ipsum. </p>
              </div>
            </div><!-- /.card -->
          </aside>

          <aside class="sidebar sidebar-sticky">
            <div class="card mb-4">
              <div class="card-body">
                <h4 class="card-title">Tags</h4>
                <a class="btn btn-light btn-sm mb-1" href="page-category.php">Design</a>
                <a class="btn btn-light btn-sm mb-1" href="page-category.html">Work</a>
                <a class="btn btn-light btn-sm mb-1" href="page-category.html">Lifestype</a>
                <a class="btn btn-light btn-sm mb-1" href="page-category.html">Photography</a>
                <a class="btn btn-light btn-sm mb-1" href="page-category.html">Food & Drinks</a>
              </div>
            </div><!-- /.card -->
            <div class="card mb-4">
              <div class="card-body">
                <h4 class="card-title">Popular stories</h4>

                <a href="post-image.html" class="d-inline-block">
                  <h4 class="h6">The blind man</h4>
                  <img class="card-img" src="img/articles/2.jpg" alt="" />
                </a>
                <time class="timeago" datetime="2019-10-03 20:00">3 october 2019</time> in Lifestyle

                <a href="post-image.html" class="d-inline-block mt-3">
                  <h4 class="h6">Crying on the news</h4>
                  <img class="card-img" src="img/articles/22.jpg" alt="" />
                </a>
                <time class="timeago" datetime="2019-07-16 20:00">16 july 2019</time> in Work

              </div>
            </div><!-- /.card -->
          </aside>

        </div>
      </div>
    </div>

  </main>

  <div class="site-newsletter">
    <div class="container">
      <div class="text-center">
        <h3 class="h4 mb-2">Subscribe to our newsletter</h3>
        <p class="text-muted">Join our monthly newsletter and never miss out on new stories and promotions.</p>

        <div class="row">
          <div class="col-xs-12 col-sm-9 col-md-7 col-lg-5 ml-auto mr-auto">
            <div class="input-group mb-3 mt-3">
              <input type="text" class="form-control" placeholder="Email address" aria-label="Email address">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Subscribe</button>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-instagram">
    <div class="action">
      <a class="btn btn-light" href="#">
        Follow us @ Instagram
      </a>
    </div>
    <div class="row no-gutters">
      <div class="col-sm-6">
        <div class="row no-gutters">
          <div class="col-3">
            <a class="photo" href="#">
              <img class="img-fluid" src="img/instagram/1.jpg" alt="" />
            </a>
          </div>
          <div class="col-3">
            <a class="photo" href="#">
              <img class="img-fluid" src="img/instagram/2.jpg" alt="" />
            </a>
          </div>
          <div class="col-3">
            <a class="photo" href="#">
              <img class="img-fluid" src="img/instagram/3.jpg" alt="" />
            </a>
          </div>
          <div class="col-3">
            <a class="photo" href="#">
              <img class="img-fluid" src="img/instagram/4.jpg" alt="" />
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="row no-gutters">
          <div class="col-3">
            <a class="photo" href="#">
              <img class="img-fluid" src="img/instagram/5.jpg" alt="" />
            </a>
          </div>
          <div class="col-3">
            <a class="photo" href="#">
              <img class="img-fluid" src="img/instagram/6.jpg" alt="" />
            </a>
          </div>
          <div class="col-3">
            <a class="photo" href="#">
              <img class="img-fluid" src="img/instagram/7.jpg" alt="" />
            </a>
          </div>
          <div class="col-3">
            <a class="photo" href="#">
              <img class="img-fluid" src="img/instagram/8.jpg" alt="" />
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="site-footer bg-darkest">
    <div class="container">

      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link" href="#">Privacy policy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Terms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Feedback</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Advertise</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="page-contact.html">Contact</a>
        </li>
      </ul>
      <div class="copy">
        &copy; Milo 2019<br />
        All rights reserved
      </div>
    </div>
  </footer>

  <script src="js/app.js"></script>
</body>
</html>