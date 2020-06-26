<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1558">
    <div class="container">
        <div class="input-group pt-3 pb-3 border-0">
            <div class="input-group-prepend">
                <span class="input-group-text">$</span>
            </div>
            <input class="pl-2 pr-2" type="tel" placeholde value="1.00" autocomplete="off" data-amount="1">
        </div>

        <div>
            <button class="button-grey mr-1 mb-1">$1.00</button>
            <button class="button-grey mr-1 mb-1">$5.00</button>
            <button class="button-grey mr-1 mb-1">$10.00</button>
            <button class="button-grey mr-1 mb-1">$25.00</button>
            <button class="button-grey">Other</button>
        </div>

        <div class="select-payment font-weight-bold pt-1 pb-1">Select Payment Method </div>
        <!-- Test radio  -->
        <form>
            <div class="form-check-inline" onclick="myClick(false)">
                <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>
                <label class="form-check-label" for="radio1"> PayPal
                </label>
            </div>
            <div class="form-check-inline" onclick="myClick(true)">
                <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">
                <label class="form-check-label" for="radio2"> Offline Donation
                </label>
            </div>
        </form>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="select-payment font-weight-bold pt-1 pb-1">Personal Info</div>
                <form>
                    <div class="row">
                        <div class="col-lg-6 col-12 mt-3 mb-3">
                            <label for=""> First Name <span class="text-danger">*</span> <span
                                    class="fa fa-question-circle-o" hieuung="Tooltip"
                                    title="First Name is used to personalize your donation record."></span></label> <br>
                            <input type="text" placeholder="First Name" class="p-2 w-100">
                        </div>

                        <div class="col-lg-6 col-12 mt-3 mb-3">
                            <label for=""> Last Name <span class="fa fa-question-circle-o" hieuung="Tooltip"
                                    title="Last Name is used to personalize your donation record."></span></label> <br>
                            <input type="text" placeholder="Last Name" class="p-2 w-100">
                        </div>

                        <div class="col-12 mb-3">
                            <label for=""> Email Adrress <span class="text-danger">*</span> <span
                                    class="fa fa-question-circle-o" hieuung="Tooltip"
                                    title="Last Name is used to personalize your donation record."></span></label> <br>
                            <input type="email" placeholder="Email Address" class="p-2 w-100">
                        </div>

                        <div class="col-12">
                            <input type="checkbox" checked> Make this an anonymous donation.
                        </div>
                    </div>
                </form>
                <div class="mt-3" id="content">
                    <p>In order to make an offline donation we ask that you please follow these instructions: </p>
                    <ol class="pl-4">
                        <li>Make a check payable to "The7: Online Courses"</li>
                        <li>On the memo line of the check, please indicate that the donation is for "The7: Online
                            Courses"</li>
                        <li>Please mail your check to:</li>
                    </ol>
                </div>
                <div class="input-group pt-3 pb-3 border-0">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> Donation Total: </span>
                    </div>
                    <input class="pl-2 pr-2" type="tel" placeholde value="1.00" autocomplete="off" data-amount="1">
                </div>

                <div class="button-green">
                    <input type="submit" value="Donate Now" class="border-0 text-white">
                </div>

            </div>
        </div>
    </div>
</div>
<script>
function myClick(val) {
    if (val) {
        document.getElementById("content").style.display = "block";
    } else {
        document.getElementById("content").style.display = "none";
    }
}
</script>