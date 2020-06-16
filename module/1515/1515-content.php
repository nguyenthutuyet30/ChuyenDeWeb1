<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1515">
    <div class="container-custom p-5">
        <h3>
            <span class="line-text position-relative">
                <span class="text-active">100% Free</span>
                <svg viewBox="0 0 500 150" preserveAspectRatio="none">
                    <path
                        d="M3,146.1c17.1-8.8,33.5-17.8,51.4-17.8c15.6,0,17.1,18.1,30.2,18.1c22.9,0,36-18.6,53.9-18.6 c17.1,0,21.3,18.5,37.5,18.5c21.3,0,31.8-18.6,49-18.6c22.1,0,18.8,18.8,36.8,18.8c18.8,0,37.5-18.6,49-18.6c20.4,0,17.1,19,36.8,19 c22.9,0,36.8-20.6,54.7-18.6c17.7,1.4,7.1,19.5,33.5,18.8c17.1,0,47.2-6.5,61.1-15.6">
                    </path>
                </svg>
            </span>
            <span class="text-color">Online Courses</span>
        </h3>
        <div class="boxitem">
            <h2 class="title-main">Get Tomorrow’s Skills Today!</h2>
            <div class="button-application">
                <a href=""><i class="fa fa-graduation-cap" aria-hidden="true"></i> Browse courses</a>
                <a href=""><i class="fa fa-info-circle" aria-hidden="true"></i> About our project</a>
            </div>
        </div>
    </div>

    <div class="shape-bottom position-relative">
        <svg viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path class="shapefill" opacity="0.33"
                d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z">
            </path>
            <path class="shapefill" opacity="0.66"
                d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z">
            </path>
            <path class="shapefill"
                d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z">
            </path>
        </svg>
    </div>
    <div class="row list-icon bg-white d-md-flex justify-content-md-between m-0 pl-5 pr-5">
        <div class="col-md-2 col-4">
            <div class="  d-lg-flex">
                <i class="fa fa-comments mr-3 fa-2x" aria-hidden="true"></i>
                <h3 class="text-ulitities font-weight-normal ">Online support <br> 24/7</h3>
            </div>
        </div>
        <div class="col-md-2 col-4">
            <div class="  d-lg-flex">
                <i class="fa fa-black-tie mr-3 fa-2x" aria-hidden="true"></i>
                <h3 class="text-ulitities font-weight-normal ">Experienced <br> instructors</h3>
            </div>
        </div>
        <div class="col-md-2 col-4">
            <div class="  d-lg-flex">
                <i class="fa fa-play-circle mr-3 fa-2x" aria-hidden="true"></i>
                <h3 class="text-ulitities font-weight-normal ">Easy to use <br> interface</h3>
            </div>
        </div>
        <div class="col-md-2 col-4">
            <div class="  d-lg-flex ">
                <i class="fa fa-certificate mr-3 fa-2x" aria-hidden="true"></i>
                <h3 class="text-ulitities font-weight-normal ">International <br> certificates</h3>
            </div>
        </div>
        <div class="col-md-2 col-4">
            <div class="  d-lg-flex">
                <i class="fa fa-book mr-3 fa-2x" aria-hidden="true"></i>
                <h3 class="text-ulitities font-weight-normal ">Free online <br> library</h3>
            </div>
        </div>
    </div>
</div>