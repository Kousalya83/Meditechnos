<style>
    .get-demo {
        background: url("<?php echo base_url('assets/img/contact/get-demo.png'); ?>");
        background-size: cover;
        margin-top: 95px;
    }

    .get-demo h5 {
        font-family: Montserrat-SemiBold;
        color: #00252D;
        text-align: center;
    }

    .form-bg {
        background: #FFFFFF 0% 0% no-repeat padding-box;
        box-shadow: 6px 8px 6px #00000017;
        border-radius: 13px;
    }

    ::placeholder {
        font-family: Excon-Regular;
        color: #666666;
    }

    textarea::placeholder {
        padding-top: 15px;
    }

    .form-check-input[type=checkbox] {
        border: 2px solid #3EACE5;
    }

    .form-check-label {
        font-family: Excon-Regular;
        letter-spacing: 0px;
        color: #666666;
        opacity: 1;
    }

    .bg-pad {
        padding: 40px 15px;
    }

    .form-control,
    .form-select {
        font-family: Excon-Regular;
        box-shadow: 0px 3px 6px #00000029;
        border: 2px solid #3EACE5;
        border-radius: 8px;
        opacity: 1;
    }

    .form-select {
        color: #666666;
    }

    .form-control:focus,
    .form-select:focus {
        box-shadow: 0px 3px 6px #00000029;
        border: 2px solid #3EACE5;
        border-radius: 8px;
        opacity: 1
    }

    .but-prop {
        font-family: Excon-Medium;
        padding: 10px 85px;
        background: transparent linear-gradient(99deg, #0FABEC 0%, #34BE82 100%) 0% 0% no-repeat padding-box;
        border-radius: 2px;
        opacity: 1;
        color: #FFFFFF;
        border: none;
    }

    .form-select,
    .form-control-lg {
        font-size: 15px;
    }

    .form-select option {
        font-family: Excon-Regular;
        color: #666666;
    }

    .form-sty {
        padding-top: 8%;
    }

    .form-sty p {
        margin-bottom: 0;
        color: #fff;
        float: right;
    }

    .error input {
        border-color: red;
        border-width: 2px;
    }

    .success input {
        border-color: green;
        border-width: 2px;
    }

    .error span {
        color: red;
    }

    .success span {
        color: green;
    }

    span.error {
        color: red;
    }

    @media only screen and (max-width: 600px) {
        .get-demo {
            margin-top: 75px;
        }
    }
</style>
<?php
$id = $this->uri->segment('3');
$referral_code = $this->uri->segment('4');
?>
<div class="row text-center my-2 <?php if ($referral_code == "") { ?> d-none <?php } ?>">
    <a class="navbar-brand"><img classs="img-responsive" class="img-pad" width="200px" height="" src="<?php echo base_url('assets/img/Meditechnos-logo.png'); ?>" alt="Meditechnos-logo"></a>
</div>
<div class="row get-demo <?php if (isset($referral_code) && $referral_code != "") { ?> mt-0<?php } ?>">
    <div class="col-md-12 mt-5 mb-4">
        <div class="row">
            <div class="col-md-5 text-center">
                <h5>QuaT User Guide</h5>
                <div class="my-4">
                    <video width="80%" controls>
                        <source src="<?php echo base_url('assets/tutorial/quat_tutorial.webm'); ?>" type="video/webm">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <h5>Request a Demo</h5>
                <form action="<?php echo base_url('contact/registerSubmit'); ?>" method="POST" class="my-4 form-bg bg-pad" id="myform">
                    <div class="mb-4">
                        <input type="text" name="username" id="username" class="form-control form-control-md" placeholder="Enter your name">
                        <span class="error" id="username_err"> </span>
                    </div>
                    <div class="mb-4">
                        <input type="text" name="companyname" id="companyname" class="form-control form-control-md" placeholder="Company name">
                        <span class="error" id="companyname_err"> </span>
                    </div>
                    <div class="mb-4">
                        <input type="tel" name="mobile" id="mobile" class="form-control form-control-md" placeholder="Company phone" required>
                        <span id="valid-msg" class="hide">✓</span>
                        <span id="error-msg" class="hide"></span>
                        <span class="error" id="mobile_err"> </span>
                    </div>
                    <div class="mb-4">
                        <input type="email" name="email" id="email" class="form-control form-control-md" placeholder="Company email">
                        <span class="error" id="email_err"> </span>
                    </div>
                    <div class="mb-4">
                        <select class="form-select" name="practicename" id="practicename" required <?php if (isset($id)) { ?> disabled  <?php
                            } ?> >
                            <option value="" hidden>Select a product</option>
                            <option <?php if (isset($id) && $id == 1) { ?> selected  <?php }?> >QuaT</option>
                            <!-- <option <?php if (isset($id) && $id == 2) { ?> selected  <?php }?> >ProdT</option>
                            <option <?php if (isset($id) && $id == 3) { ?> selected <?php } ?> >VeriT</option>
                            <option <?php if (isset($id) && $id == 4) { ?> selected <?php } ?> >DoaT</option>
                            <option <?php if (isset($id) && $id == 5) { ?> selected <?php } ?> >ClaisT</option> -->
                        </select>
                        <span class="error" id="practicename_err"> </span>
                    </div>
                    <?php if (isset($referral_code) && $referral_code != "") { ?>
                        <input type="hidden" name="referral_code" value="<?= $referral_code ?>">
                    <?php } else { ?>
                        <input type="hidden" name="referral_code" value="">
                    <?php } ?>

                    <input type="hidden" name="democontent" value="Product">
                    <input type="hidden" name="recaptcha_token" value="" id="recaptcha_token_input">
                    <input type="hidden" name="company_number" value="" id="company_number">
                    <div class="mb-4">
                        <textarea class="form-control form-control-md" name="textarea" id="textarea" placeholder="Enter your message" rows="6"></textarea>
                        <span class="error" id="textarea_err"> </span>
                    </div>
                    <div class="mb-4 form-check">
                        <input type="checkbox" class="form-check-input" id="terms">
                        <label class="form-check-label" for="terms">I Accept the <a href="<?php echo base_url('policies/terms_conditions'); ?>" target="_blank">Terms of Service</a></label>
                    </div>
                    <div class="text-center submit-sty">
                        <button type="submit" id="submitbtn" class="but-prop">SUBMIT</button>
                    </div>
                </form>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<script>
    var input = document.querySelector("#mobile"),
        errorMsg = document.querySelector("#error-msg"),
        validMsg = document.querySelector("#valid-msg");

    // Error messages based on the code returned from getValidationError
    var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

    // Initialise plugin
    var intl = window.intlTelInput(input, {
        initialCountry: "auto",
        preferredCountries: ["in", "us"],
        geoIpLookup: function(success) {
            $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                var countryCode = (resp && resp.country) ? resp.country : "in";
                success(countryCode);
            });
        },
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });

    var reset = function() {
        input.classList.remove("error");
        errorMsg.innerHTML = "";
        errorMsg.classList.add("hide");
        validMsg.classList.add("hide");
    };

    // Validate on blur event
    input.addEventListener('keyup', function() {
        reset();
        if (input.value.trim()) {
            if (intl.isValidNumber()) {
                validMsg.classList.remove("hide");
                const phoneNumber = intl.getNumber();
                document.getElementById('company_number').value = phoneNumber;
                console.log(phoneNumber);
            } else {
                input.classList.add("error");
                var errorCode = intl.getValidationError();
                errorMsg.innerHTML = errorMap[errorCode];
                errorMsg.classList.remove("hide");
            }
        }
    });

    // Reset on keyup/change event
    input.addEventListener('change', reset);
    // input.addEventListener('keyup', reset);
    var input = document.querySelector("#mobile");
</script>

<script src='<?php echo base_url('assets/js/validation.js'); ?>'></script>
<script src="https://www.google.com/recaptcha/api.js?render=<?= $this->config->item('recaptcha_site_key') ?>"></script>
<script>
    function recaptcha() {
        grecaptcha.ready(function() {
            grecaptcha.execute('<?= $this->config->item('recaptcha_site_key') ?>', {
                action: 'submit'
            }).then(function(token) {
                document.getElementById('recaptcha_token_input').value = token;
                document.getElementById('practicename').disabled = false;
                document.getElementById('myform').submit();
            });
        });
    }
</script>

<style>
    .error input {
        border-color: red;
        border-width: 2px;
    }

    .success input {
        border-color: green;
        border-width: 2px;
    }

    .error span {
        color: red;
    }

    .success span {
        color: green;
    }

    span.error {
        color: red;
    }

    #error-msg {
        color: red;
    }

    #valid-msg {
        color: #00C900;
    }

    .hide {
        display: none;
    }

    .iti {
        width: 100%;
    }

    .iti-mobile .iti--container {
        top: 75px;
        bottom: 30px;
        left: 20px;
    }

    .iti-mobile .iti__country-list {
        width: 90%;
    }
</style>