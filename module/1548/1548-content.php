<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1548 mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-6 item-agent">
                <div class="w-100 position-relative">
                    <img src="images/hinh1.jpg" alt="" class="w-100">
                    <div class="info-agent text-center w-100 d-flex justify-content-center align-items-center"><i
                            class="fa fa-align-center fa-2x " aria-hidden="true"></i>
                    </div>
                </div>
                <h3 class="pt-3">Tiffany Rose</h3>
                <p>business advisor</p>
            </div>

            <div class="col-lg-4 col-6 item-agent">
                <div class="w-100 position-relative">
                    <img src="images/hinh2.jpg" alt="" class="w-100">
                    <div class="info-agent text-center w-100 d-flex justify-content-center align-items-center"><i
                            class="fa fa-align-center fa-2x " aria-hidden="true"></i>
                    </div>
                </div>
                <h3 class="pt-3">James Jefferson</h3>
                <p>public relations advisor</p>
            </div>

            <div class="col-lg-4 col-6 item-agent">
                <div class="w-100 position-relative">
                    <img src="images/hinh3.jpg" alt="" class="w-100">
                    <div class="info-agent text-center w-100 d-flex justify-content-center align-items-center"><i
                            class="fa fa-align-center fa-2x " aria-hidden="true"></i>
                    </div>
                </div>
                <h3 class="pt-3">Anna Dobrova</h3>
                <p>HR expert</p>
            </div>

            <div class="col-lg-4 col-6 item-agent">
                <div class="w-100 position-relative">
                    <img src="images/hinh4.jpg" alt="" class="w-100">
                    <div class="info-agent text-center w-100 d-flex justify-content-center align-items-center"><i
                            class="fa fa-align-center fa-2x " aria-hidden="true"></i>
                    </div>
                </div>
                <h3 class="pt-3">Jessica Anderson</h3>
                <p>marketing expert</p>
            </div>

            <div class="col-lg-4 col-6 item-agent">
                <div class="w-100 position-relative">
                    <img src="images/hinh5.jpg" alt="" class="w-100">
                    <div class="info-agent text-center w-100 d-flex justify-content-center align-items-center"><i
                            class="fa fa-align-center fa-2x " aria-hidden="true"></i>
                    </div>
                </div>
                <h3 class="pt-3">Tiffany Green</h3>
                <p>business strategy</p>
            </div>

            <div class="col-lg-4 col-6 item-agent">
                <div class="w-100 position-relative">
                    <img src="images/hinh6.jpg" alt="" class="w-100">
                    <div class="info-agent text-center w-100 d-flex justify-content-center align-items-center"><i
                            class="fa fa-align-center fa-2x " aria-hidden="true"></i>
                    </div>
                </div>
                <h3 class="pt-3">Richard Brown</h3>
                <p>business communications expert</p>
            </div>
        </div>
    </div>
</div>