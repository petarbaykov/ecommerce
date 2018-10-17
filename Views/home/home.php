<?php 
 require 'Views/layouts/header.php'; 


?>


<link href="<?= url('assets/plugins/owlcarousel/assets/owl.carousel.min.css'); ?>" rel="stylesheet">
<link href="<?= url("assets/plugins/owlcarousel/assets/owl.theme.default.css"); ?>" rel="stylesheet">



<section class="bg2">
<div class="container">
<div class="row no-gutters">
	<div class="col-lg-9 offset-lg-5-24">
<nav class="navbar navbar-expand-lg navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="main_nav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#"> Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">New arrival</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Populars</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Deals</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Last viewed</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</a>
          <div class="dropdown-menu" aria-labelledby="dropdown07">
            <a class="dropdown-item" href="#">Foods and Drink</a>
            <a class="dropdown-item" href="#">Home interior</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Category 1</a>
            <a class="dropdown-item" href="#">Category 2</a>
            <a class="dropdown-item" href="#">Category 3</a>
          </div>
        </li>
      </ul>
    </div> <!-- collapse .// -->
</nav>
	</div> <!-- col.// -->
</div> <!-- row.// -->
</div> <!-- container .// -->
</section>

<!-- ========================= SECTION MAIN ========================= -->
<section class="section-main bg padding-bottom">
<div class="container">
<div class="row no-gutters border border-top-0 bg-white">
<aside class="col-lg-5-24">
<nav>
	<div class="title-category bg-secondary white d-none d-lg-block" style="margin-top:-53px">
		<span>Categories</span>
	</div>
	<ul class="menu-category">
		
		<?php foreach($categories as $category): ?>
                    <li> <a href="<?= url('categories/show/'.$category['id']); ?>"><?= $category["name"]; ?></a></li>
                <?php endforeach; ?>
	</ul>
</nav>
</aside> <!-- col.// -->
<main class="col-lg-19-24">
<!-- ========= intro aside ========= -->
<div class="row no-gutters">
	<div class="col-lg-9 col-md-8">
<!-- ================= main slide ================= -->

<div class="owl-init slider-main owl-carousel" data-items="1" data-margin="1" data-nav="true" data-dots="false">
	<div class="item-slide">
		<img src="<?= url('assets/images/slide1.jpg'); ?>">
	</div>
	<div class="item-slide">
		<img src="<?= url('assets/images/slide2.jpg'); ?>">
	</div>
	<div class="item-slide">
		<img src="<?= url('assets/images/slide3.jpg'); ?>">
	</div>
</div>

<!-- ============== main slidesow .end // ============= -->
	</div> <!-- col.// -->
	<div class="col-lg-3 col-md-4">
<ul class="list-group list-group-flush">
    <li class="list-group-item">
		<h6>Group of items goes here</h6>
		<a href="#" class="btn btn-primary btn-sm btn-round"> View all </a>
    </li>
    <li class="list-group-item">
		<h6>Group of items goes here</h6>
		<a href="#" class="btn btn-primary btn-sm btn-round"> View all </a>
    </li>
    <li class="list-group-item">
		<h6>Group of items goes here</h6>
		<a href="#" class="btn btn-primary btn-sm btn-round"> View all </a>
    </li>
  </ul>
	</div> <!-- col.// -->
</div> <!-- row.// -->
<!-- ======== intro aside ========= .// -->
</main> <!-- col.// -->
</div> <!-- row.// -->
</div> <!-- container .//  -->
</section>



<script src="<?= url('assets/scripts/jquery-2.0.0.min.js'); ?>"></script>
<script src="<?= url('assets/plugins/owlcarousel/owl.carousel.min.js'); ?>"></script>

<script src="<?= url('assets/scripts/main.js'); ?>"></script>