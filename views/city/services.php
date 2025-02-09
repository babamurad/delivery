<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/layout/header.php'?>
    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Hot Meals</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
    		<div class="row">

<?php
foreach ($cityList as $city): ?>
    			<div class="col-md-4 text-center ftco-animate">
      			<div class="menu-wrap">
      				<a href="#" class="menu-img img mb-4" style="background-image: url(images/pizza-1.jpg);"></a>
      				<div class="text">
      					<h3><a href="#"><?php echo $city['name']; ?></a></h3>
      					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
      					<p class="price"><span><?php echo 'id - ' . $city['id']; ?></span></p>
      					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
      				</div>
      			</div>
      		</div>
<?php endforeach;?>
    </section>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/layout/footer.php'?>