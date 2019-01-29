<?php 

 // starting the session
 session_start();
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<?php include("../includes/head.php"); ?>

<?php include("../includes/variables.php"); ?>

<?php $_SESSION['teacher-school-name'] = $_POST['teacher-school-name']; ?>

<?php $_SESSION['teacher-contact-method'] = $_POST['teacher-contact-method']; ?>

<?php $_SESSION['teacher-email-address'] = $_POST['teacher-email-address']; ?>

<?php $_SESSION['teacher-mobile-number'] = $_POST['teacher-mobile-number']; ?>

<body class="govuk-template__body js-enabled">
    <!-- Masthead -->
    <?php include("../includes/masthead.php"); ?>

    <!-- Alpha banner -->
    <?php include("../includes/alpha-banner.php"); ?>

    <div class="grid-container">
        <div id="main-content-area" class="grid-x grid-padding-x grid-margin-x">
            <div id="main-content-left-only" class="large-8 cell">

                <form action="teacher-check-send.php" method="POST" role="form" onsubmit="get_action(this);" data-abide novalidate>

                    <input type="hidden" name="teacher-school-name" value="<?=htmlspecialchars($_POST[ 'teacher-school-name']);?>" />

                    <div class="govuk-form-group ">
                        <fieldset class="govuk-fieldset" role="group" aria-describedby="bank-hint">

                            <legend class="govuk-fieldset__legend govuk-fieldset__legend--xl">
                                <h1 class="govuk-fieldset__heading">
                                    How do you want us to contact you?
                                </h1>
                            </legend>
                            <span id="changed-name-hint" class="govuk-hint">
              We'll only use these details to update you about your claim.
            </span>

                            <div class="govuk-radios govuk-radios--conditional" data-module="radios">

                                <div class="govuk-radios__item">

                                    <input class="govuk-radios__input" id="contact-method-conditional-email" name="teacher-contact-method" type="radio" value="email" aria-controls="conditional-contact-method-conditional-email" aria-expanded="false" onchange="showSelect();">

                                    <label class="govuk-label govuk-radios__label" for="contact-method-conditional-email">Email</label>
                                </div>
                                <div class="govuk-radios__conditional govuk-radios__conditional--hidden hide" id="conditional-contact-method-conditional-email">

                                    <div class="govuk-form-group  govuk-radios__conditional">
                                        <label class="govuk-label" for="teacher-email-address">Enter email address</label>

                                        <input class="govuk-input govuk-!-width-two-thirds" id="teacher-email-address" name="teacher-email-address" type="email" value="" pattern="email">
                                    </div>

                                </div>

                                <div class="govuk-radios__item">

                                    <input class="govuk-radios__input" id="contact-method-conditional-mobile" name="teacher-contact-method" type="radio" value="mobile" aria-controls="conditional-contact-method-conditional-mobile" aria-expanded="true" onchange="showSelect2();">

                                    <label class="govuk-label govuk-radios__label" for="contact-method-conditional-mobile">Text message</label>
                                </div>
                                <div class="govuk-radios__conditional govuk-radios__conditional--hidden hide" id="conditional-contact-method-conditional-mobile">

                                    <div class="govuk-form-group govuk-radios__conditional">
                                        <label class="govuk-label " for="teacher-mobile-number ">Enter mobile number</label>

                                        <input class="govuk-input govuk-!-width-two-thirds " id="teacher-mobile-number " name="teacher-mobile-number" type="number " value=" " pattern="number ">
                                    </div>

                                </div>

                            </div>

                        </fieldset>
                    </div>

                    <button type="submit " class="govuk-button ">Continue</button>

                </form>

            </div>
            <!--      <div id="sidebar " class="large-4 cell no-top-border ">
               <button type="submit " name="skip-verify " value="yes " class="govuk-button hidden-button ">Skip Verify</button> 
            </div> -->
        </div>
    </div>

    <!-- Footer -->
    <?php include("../includes/footer.php"); ?>

    <script type="text/javascript ">
        function get_action(form) {
            form.action = document.querySelector('input[name = "x "]:checked').value;
        }

    </script>
    <script type="text/javascript ">
        function showSelect() {
            var select = document.getElementById('conditional-contact-method-conditional-email');
            select.className = 'show';
        }

        function hide() {
            document.getElementById("conditional-contact-method-conditional-email ").style.display = 'none';
        }

    </script>
    <script type="text/javascript ">
        function showSelect2() {
            var select = document.getElementById('conditional-contact-method-conditional-mobile');
            select.className = 'show';
        }

        function hide() {
            document.getElementById("conditional-contact-method-conditional-mobile ").style.display = 'none';
        }

    </script>

    <?php include("../includes/javascript.php "); ?>
</body>

</html>
