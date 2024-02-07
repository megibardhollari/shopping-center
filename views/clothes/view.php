<?php

use yii\helpers\Html;
use yii\web\View;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var app\models\Clothes $model */


$this->registerCssFile('@web/style/css/allstyles.css');
$this->registerJsFile('@web/style/js/allscripts.js');

?>

<div class="card-view">
<div class="card__body" data-title="Farewell!" data-intro="Check this out!">
<div class="container">
    <div class="card">
        <div class="row">
            <!-- <div class="col"> -->
            <!-- Imazhi kryesor-->
            <!-- <div class="col-md-6 text-center align-self-center">
                    <img class="main-img" src="https://i.imgur.com/7a9V4yw.png">
                </div> -->

                
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="hero featured-carousel owl-carousel">
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-center justify-content-center" style="background-image: url('<?= Url::to('@web/photos/jimmy-chang-wqBeoCtU_Ic-unsplash.jpg') ?>');">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-center justify-content-center" style="background-image: url('<?= Url::to('@web/photos/joshua-lawrence-HEeMAEpZW5g-unsplash.jpg') ?>');">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-center justify-content-center" style="background-image: url('<?= Url::to('@web/photos/wesley-shen-7hCMDJWaWA0-unsplash.jpg') ?>');">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Imazhet e tjera -->
                            <div class="small-images">
                                <img class="img-fluid-small" src="<?= Url::to('@web/photos/jimmy-chang-wqBeoCtU_Ic-unsplash.jpg') ?>" alt="Small Image 1" onclick="changeMainImage('<?= Url::to('@web/photos/small_image1.jpg') ?>')">
                                <img class="img-fluid-small" src="<?= Url::to('@web/photos/joshua-lawrence-HEeMAEpZW5g-unsplash.jpg') ?>" alt="Small Image 2" onclick="changeMainImage('<?= Url::to('@web/photos/joshua-lawrence-HEeMAEpZW5g-unsplash.jpg') ?>')">
                                <img class="img-fluid-small" src="<?= Url::to('@web/photos/zhang-kaiyv-BTfGXBXMik0-unsplash.jpg') ?>" alt="Small Image 3" onclick="changeMainImage('<?= Url::to('@web/photos/zhang-kaiyv-BTfGXBXMik0-unsplash.jpg') ?>')">
                            </div>
                        </div>
                        <!-- Te dhena -->
                        <div class="col-md-6 info">
                            <div class="row title">
                                <div class="col"><h2>Pantallona</h2></div>
                            </div>
                            <br>
                            <div class="row price">
                                <div class="col"><p>Lek 2,190.00</p></div>
                            </div>
                            <div class="row code">
                                <div><p> <b> KODI </b> 18788 </p></div>
                                <div>
                                    <button type="button" class="btn btn-outline-dark" id="codeButton" style="width: 80px;">18788</button>
                                </div>
                            </div>
                            <div class="row color">
                                <div class="col"><p>NGJYRA E BARDHE</p></div>
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-2" role="group" aria-label="First group">
                                        <button type="button" class="btn btn-outline-secondary nohover" onclick="changeButtonStyle(this, 'color')">E bardhe</button>
                                    </div>
                                    <div class="btn-group me-2" role="group" aria-label="Second group">
                                        <button type="button" class="btn btn-outline-secondary nohover" onclick="changeButtonStyle(this, 'color')">E zeze</button>
                                    </div>
                                    <div class="btn-group" role="group" aria-label="Third group">
                                        <button type="button" class="btn btn-outline-secondary nohover" onclick="changeButtonStyle(this, 'color')">Roze</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row masa">
                                <div class="col"><p>MASA 36</p></div>
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-2" role="group" aria-label="First group">
                                        <button type="button" class="btn btn-outline-secondary nohover" onclick="changeButtonStyle(this, 'masa')">34</button>
                                    </div>
                                    <div class="btn-group me-2" role="group" aria-label="Second group">
                                        <button type="button" class="btn btn-outline-secondary nohover" onclick="changeButtonStyle(this, 'masa')">36</button>
                                    </div>
                                    <div class="btn-group me-2" role="group" aria-label="Third group">
                                        <button type="button" class="btn btn-outline-secondary nohover" onclick="changeButtonStyle(this, 'masa')">38</button>
                                    </div>
                                    <div class="btn-group me-2" role="group" aria-label="Third group">
                                        <button type="button" class="btn btn-outline-secondary nohover" onclick="changeButtonStyle(this, 'masa')">40</button>
                                    </div>
                                    <div class="btn-group me-2" role="group" aria-label="Third group">
                                        <button type="button" class="btn btn-outline-secondary nohover" onclick="changeButtonStyle(this, 'masa')">42</button>
                                    </div>
                                    <div class="btn-group me-2" role="group" aria-label="Third group">
                                        <button type="button" class="btn btn-outline-secondary nohover" onclick="changeButtonStyle(this, 'masa')">44</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row quantity">
                                <div class="col">
                                    <p>Sasia</p>
                                </div>
                            </div>
                            <div class="col text-center align-self-center" style="width: 150px">
                                <div class="input-group">
                                    <button type="button" class="btn btn-outline-dark" onclick="decrementQuantity()">-</button>
                                        <input type="text" id="quantityInput" class="form-control text-center" value="1" readonly>
                                    <button type="button" class="btn btn-outline-dark" onclick="incrementQuantity()">+</button>
                                </div>
                            </div>
                            <br> <br>

                            <div class="col text-center align-self-center">
                                <button type="button" class="btn btn-outline-dark" style="width: 600px">Buy now</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            </section>

        </div>
    </div>
</div>
<div class="card-about">


<!-- <script>
        document.addEventListener("DOMContentLoaded", function () {
        var tour = introJs();

        tour.setOptions({
            steps: [
                {
                    element: document.querySelector('.card-view'),
                    title: 'Check this out',
                    intro: 'This is our latest collection',
                    position: 'bottom',
                    step: 3
                }
            ]
        });
    });

</script> -->

