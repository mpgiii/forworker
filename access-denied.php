<?php
ob_start();
include("header.html");
$buffer = ob_get_contents();
ob_end_clean();

$buffer = str_replace("%TITLE%", "403 Error", $buffer);
$buffer = str_replace("%DESC%", "You shouldn't have reached this page!", $buffer);

echo $buffer;
?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/temp.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">Access denied.</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                class="ion-ios-arrow-forward"></i></a></span></p>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.html'; ?>