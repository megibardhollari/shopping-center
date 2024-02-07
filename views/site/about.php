<?php

/** @var yii\web\View $this */

use yii\helpers\Url; // Import the Url helper
// $this->registerCssFile(Url::to('@web/css/about.css'));

$this->registerCssFile(Url::to('@web/css/clothes/progressbar.css'));
$this->registerJsFile(Url::to('@web/js/clothes/jquery.progressbar.js'));


$this->title = 'About';

?>
<!-- <div class="card-demo2"> -->
<div class="card-about">
    <div class="container-fluid">
        <div class="col text-center text-black">
            <h1>About our company</h1>
            <p>
                Discover a world of style, convenience, and endless possibilities at our Shopping Center.
                Nestled in the heart of the city, our shopping destination is designed to elevate your retail experience.
                From fashion-forward boutiques to gourmet dining options, we curate a diverse mix of stores to cater to every taste and preference.
            </p>
        </div>
    </div>
</div>
<!-- </div> -->

<!-- <script>
    document.addEventListener("DOMContentLoaded", function () {
        var tour = introJs();

        tour.setOptions({
            steps: [
                {
                    element: document.querySelector('.card-about'),
                    title: 'About our company',
                    intro: 'These are some short informations about our Shopping Center',
                    position: 'bottom',
                    step: 2
                }
            ]
        });

        var params = new URLSearchParams(window.location.search);
        var continueTour = params.get('tour') === 'continue';
        var startStep = continueTour ? parseInt(params.get('step')) || 2 : 2;

        if (continueTour) {
            setTimeout(function() {
                tour.start().nextStep().goToStepNumber(startStep);
            }, 0);
        } else {
            tour.start();
        }

        tour.oncomplete(function () {
            introJs().setOption('doneLabel','Next page').start().oncomplete(function() {
          window.location.href = 'index.php?r=clothes%2Fall-clothes' // or whatever your original page is
        });
        });
    });
</script> -->


<!-- <script>
    document.addEventListener("DOMContentLoaded", function () {
        var tour = introJs();

        tour.setOptions({
            steps: [
                {
                    element: document.querySelector('.card-about'),
                    title: 'About our company',
                    intro: 'These are some short informations about our Shopping Center',
                    position: 'bottom',
                    step: 2
                }
            ]
        });

        var params = new URLSearchParams(window.location.search);
        var continueTour = params.get('tour') === 'continue';
        var startStep = continueTour ? parseInt(params.get('step')) || 2 : 2;

        if (continueTour) {
            setTimeout(function() {
                tour.start().goToStepNumber(startStep);
            }, 0);
        } else {
            tour.start();
        }

        tour.oncomplete(function () {
            window.location.href = 'index.php?r=clothes/view&id=1'; 
        });
    });
</script> -->



<style>
    #main .container {
        /* background-image: url(<?= Url::to('@web/photos/jimmy-chang-wqBeoCtU_Ic-unsplash.jpg') ?>); */
        background-color: darkgray;
        background-size: cover;
        max-width: 100%;
        margin: 0;
        height: 550px;
    }

    .col {
        background-color: gainsboro;
        padding: 20px;
        border-radius: 10px;
        opacity: 0.8;
        margin-top: 100px;
    }
</style>