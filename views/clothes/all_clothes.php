<?php
use yii\web\View;
$this->registerCssFile('@web/css/clothes/clothes.css');
?>

<div class="card_demo3">
<div class="container d-flex justify-content-center mt-100">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach ($searchModel as $value): ?>
            <div class="col">
                <div class="product-wrapper mb-45 text-center">
                    <div class="product-img">
                        <a href="/index.php?r=clothes/view&id=<?php echo $value->id ?>">
                            <img src="<?php echo $value->img; ?>" alt="<?php echo $value->description; ?>" class="img-fluid">
                        </a>
                        <span>$<?php echo $value->price; ?></span>
                        <div class="product-action">
                            <div class="product-action-style">
                                <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#" data-abc="true">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <a class="action-heart" title="Wishlist" href="#" data-abc="true">
                                    <i class="fa fa-heart"></i>
                                </a>
                                <a class="action-cart" title="Add To Cart" href="#" data-abc="true">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</div>

