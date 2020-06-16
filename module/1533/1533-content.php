<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1533">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12 content-intro">
                <h4>Get unique learning experience!</h4>
                <h3>With our online courses you have access to unique educational tools.</h3>
                <div class="line-bottom mt-3 mb-3">
                    <span><i class="fa fa-graduation-cap pr-2" aria-hidden="true"></i>Discover courses</span>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 content-description">
                <div class="icon"><i class="fa fa-life-ring" aria-hidden="true"></i></div>
                <h4>Academic and technical support </h4>
                <p>Nullam eget neque ut tellus - ulla ambco mattis nulla glavrida ege ullamcorper ulla ambco mattis
                    for nulla glavrida.</p>
            </div>

            <div class="col-lg-4 col-md-6 col-12 content-description">
                <div class="icon"><i class="fa fa-users" aria-hidden="true"></i></div>
                <h4>Academic and technical support </h4>
                <p>Nullam eget neque ut tellus - ulla ambco mattis nulla glavrida ege ullamcorper ulla ambco mattis
                    for nulla glavrida.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 content-description">
                <div class="icon"><i class="fa fa-black-tie" aria-hidden="true"></i></div>
                <h4>Support of our experienced specialists</h4>
                <p>Lorem - ulla ambco mattis nulla glavrida ege tellus ornare ullamcorper ulla ambco mattis for nulla
                    glavrida egesed!</p>
            </div>

            <div class="col-lg-4 col-md-6 col-12 content-description">
                <div class="icon"><i class="fa fa-life-ring" aria-hidden="true"></i></div>
                <h4>Academic and technical support </h4>
                <p>Nullam eget neque ut tellus - ulla ambco mattis nulla glavrida ege ullamcorper ulla ambco mattis
                    for nulla glavrida.</p>
            </div>

            <div class="col-lg-4 col-md-6 col-12 content-description">
                <div class="icon"><i class="fa fa-users" aria-hidden="true"></i></div>
                <h4>New friend & business partners</h4>
                <p>Amattis nulla glavrida ege ulla ambco mattis nulla lorem ege dolor ulla ambco mattis nulla glavrida
                    ege ulla ambco amet.</p>
            </div>
        </div>
    </div>
</div>