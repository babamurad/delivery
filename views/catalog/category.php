<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/layout/header.php'?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Category</h2>
                    <div class="panel-group category-products" id="accordian">
                        <!--category-productsr-->
                        <?php foreach ($categories as $categoryItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/category/<?php echo $categoryItem['id']; ?>"
<!--                                        class="--><?php //if ($categoryId == $categoryItem['id']) echo 'active'; ?><!--"-->

                                            <span class="badge pull-right <?php if ($categoryId == $categoryItem['id']) echo 'active'; ?>">
                                                <?php echo $categoryItem['name'];?>
                                            </span>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <!--/category-products-->

                    <div class="brands_products"><!--brands_products-->
                        <h2>Brands</h2>
                        <div class="brands-name">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
                                <li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
                                <li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
                                <li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
                                <li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
                                <li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
                                <li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
                            </ul>
                        </div>
                    </div><!--/brands_products-->

                    <div class="price-range"><!--price-range-->
                        <h2>Price Range</h2>
                        <div class="well text-center">
                            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                            <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                        </div>
                    </div><!--/price-range-->

                    <div class="shipping text-center"><!--shipping-->
                        <img src="/template/images/home/shipping.jpg" alt="" />
                    </div><!--/shipping-->

                </div>
            </div>
            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <!--features_items-->
                    <h2 class="title text-center">Features Items</h2>
                    <?php foreach ($categoryProducts as $product): ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="/template/images/home/product1.jpg" alt="" />
                                        <h2><?php echo $product['price'] . '$'; ?></h2>
                                        <p><a href="/product/<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a> </p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
<!--                                    <div class="product-overlay">-->
<!--                                        <div class="overlay-content">-->
<!--                                            <h2>--><?php //echo $product['price']; ?><!--</h2>-->
<!--                                            <p><a href="/product/--><?php //echo $product['id']; ?><!--">--><?php //echo $product['name']; ?><!--</a> </p>-->
<!--                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>-->
<!--                                        </div>-->
<!--                                    </div>-->

                                    <?php if ($product['is_new']): ?>
                                        <img src="/template/images/home/new.png" class="new" alt="" />
                                    <?php endif; ?>

                                    <?php if ($product['is_sale']): ?>
                                        <img src="/template/images/home/sale.png" class="new" alt="" />
                                    <?php endif; ?>

                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>

                <!--features_items-->


            </div>

            <?php 
                echo $pagination->get();
            
            ?>
<!--            <ul class="pagination">-->
<!--                <li class="active"><a href="">1</a></li>-->
<!--                <li><a class="" href="">2</a></li>-->
<!--                <li><a class="" href="">3</a></li>-->
<!--                <li><a class="" href="">&raquo;</a></li>-->
<!--            </ul>-->
        </div>
    </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/layout/footer.php'?>
