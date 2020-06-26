<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-32">
    <div class="container text-center">
        <div class="title-product">
            <div class="text-opacity">
                <span>Production</span>
                <h5>About company</h5>
                <h3>Quality ceylon tea production</h3>
            </div>
        </div>

        <p class="description">Interger quis tempor orci.Suspendise potenti. Interdum et malesuada fames ac ante ipsum
            primis in
            facibus. Quisque gravida tempor diam id finibus. Duis non mi augue</p>

        <div class="row">
            <div class="col-lg-2 col-6 text-center">
                <div class="incon-product">
                    <i class="fa fa-star fa-3x" aria-hidden="true"></i>
                </div>
                <div class="content-product">
                    <div class="title-content">Highest quality</div>
                    <p>Integer quis tempor orci. <br> Suspendisse potenti.
                    </p>
                </div>
            </div>

            <div class="col-lg-2 col-6 text-center">
                <div class="incon-product">
                    <i class="fa fa-tint fa-3x" aria-hidden="true"></i>
                </div>
                <div class="content-product">
                    <div class="title-content">Pure taste</div>
                    <p>Integer quis tempor orci. <br> Suspendisse potenti.
                    </p>
                </div>
            </div>

            <div class="col-lg-2 col-6 text-center">
                <div class="incon-product">
                    <i class="fa fa-leaf fa-3x" aria-hidden="true"></i>
                </div>
                <div class="content-product">
                    <div class="title-content">Wide assortment</div>
                    <p>Integer quis tempor orci. <br> Suspendisse potenti.
                    </p>
                </div>
            </div>

            <div class="col-lg-2 col-6 text-center">
                <div class="incon-product">
                    <i class="fa fa-archive fa-3x" aria-hidden="true"></i>
                </div>
                <div class="content-product">
                    <div class="title-content">Eco package</div>
                    <p>Integer quis tempor orci. <br> Suspendisse potenti.
                    </p>
                </div>
            </div>

            <div class="col-lg-2 col-6 text-center">
                <div class="incon-product">
                    <i class="fa fa-free-code-camp fa-3x" aria-hidden="true"></i>
                </div>
                <div class="content-product">
                    <div class="title-content">Gluten free</div>
                    <p>Integer quis tempor orci. <br> Suspendisse potenti.
                    </p>
                </div>
            </div>

            <div class="col-lg-2 col-6 text-center">
                <div class="incon-product">
                    <i class="fa fa-flask fa-3x" aria-hidden="true"></i>
                </div>
                <div class="content-product">
                    <div class="title-content">Without GMO</div>
                    <p>Integer quis tempor orci. <br> Suspendisse potenti.
                    </p>
                </div>
            </div>
        </div>

        <button class="custom-btnreadmore">Read more <i class="fa fa-chevron-circle-right"
                aria-hidden="true"></i></button>
    </div>
</div>