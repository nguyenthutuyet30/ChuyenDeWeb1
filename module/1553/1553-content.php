<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1553">
    <div class="layer-top position-relative">
        <h2>How to imperdiet dignissim convallis vitae nisl</h2>
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
    </div>

    <div class="container mt-5 mb-5">
        <img src="images/hinh1.jpg" alt="" class="w-100">
        <h3 class="mt-5 mb-3">Quisque nec – nunc sed enim</h3>
        <p>Dolor fermentum mattis est. In nulla lacus, ornare vitae vulputate id, placerat eget nunc. Suspendisse a
            feugiat velit, pulvinar convallis diam. Duis pretium neque a vehicula mollis. Vivamus aliquet placerat
            varius. Nunc ligula quam, facilisis ac pretium eu, ornare vitae diam. Nunc consectetur nisl sed laoreet
            ullamcorper.</p>
        <p>Quisque volutpat varius lorem. Vestibulum et ante vitae libero congue dapibus vitae nec sapien. Cras placerat
            in risus et pharetra.</p>
        <h3 class="mt-5 mb-3">Praesent feugiat justo velit, in tempus velit euismod nec</h3>
        <p>Duis dolor ex, ultricies et ligula et, cursus cursus odio. Proin efficitur massa a dolor tincidunt rhoncus.
            Ut efficitur, diam vel malesuada hendrerit, turpis mauris porttitor sem, a laoreet nibh ligula a ex. Nullam
            consectetur molestie fringilla. Cras porttitor ac est quis commodo.</p>
        <p>Nam justo diam, consectetur ut molestie iaculis, hendrerit a erat. Phasellus vitae convallis elit. Etiam ut
            diam ut leo venenatis pretium nec ut dolor. Nunc placerat mattis odio, ut rhoncus ante facilisis nec. Nulla
            facilisi. Suspendisse potenti. Cras venenatis ultricies nulla, et vestibulum nisl aliquet dictum. Maecenas
            volutpat nisl ut malesuada consectetur. Phasellus sodales ante in nisi luctus, eget placerat magna interdum.
        </p>
        <h3 class="mt-5 mb-3">Nullam ut rhoncus nulla</h3>
        <p>fermentum mattis est. In nulla lacus, ornare vitae vulputate id, placerat eget nunc. Suspendisse a feugiat
            velit, pulvinar convallis diam. Duis pretium neque a vehicula mollis. Vivamus aliquet placerat varius. Nunc
            ligula quam, facilisis ac pretium eu, ornare vitae diam. Nunc consectetur nisl sed laoreet ullamcorper.</p>
    </div>
</div>