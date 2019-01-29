<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<?php include("../includes/head.php"); ?>

<?php include("../includes/variables.php"); ?>

<body>
    <!-- Masthead -->
    <?php include("../includes/masthead.php"); ?>

    <!-- Alpha banner -->
    <?php include("../includes/alpha-banner.php"); ?>


    <div class="grid-container">
        <div id="main-content-area" class="grid-x grid-padding-x grid-margin-x">
            <div id="main-content-left-only" class="large-8 cell">

                <!--     <form name="quoted" method="POST" onsubmit="get_action(this);">
                    <div class="form-group">
                        <fieldset>

                            <legend>
                                <h1 class="heading-medium">Where do you live?</h1>
                            </legend>

                            <div class="multiple-choice">
                                <label for="x"><input type="radio" name="x" value="results-page-1.php" id = "x" checked="checked" />    <span>1</span></label>
                            </div>
                            <div class="multiple-choice">
                                <label for="x"><input type="radio" name="x" value="results-page-2.php" id = "x" /> <span>2</span>    </label>
                            </div>
                            <p class="form-block">or</p>
                            <div class="multiple-choice">
                                <input id="example-contact-by-email" type="radio" name="radio-contact-group" value="results-page-2.php">
                                <label for="example-contact-by-email">Email</label>
                            </div>
                            <input id="submit1" type="submit"><br>

                        </fieldset>
                    </div>
                </form>

                <script type="text/javascript">
                    function get_action(form) {
                        form.action = document.querySelector('input[name = "x"]:checked').value;
                    }

                </script> -->

                <form method="POST" role="form" onsubmit="get_action(this);">
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

                                    <input class="govuk-radios__input" aria-controls="conditional-contact-method-conditional-email" aria-expanded="false" name="x" type="radio" value="results-page-1.php" id="x">

                                    <label class="govuk-label govuk-radios__label" for="contact-method-conditional-email">Email</label>
                                </div>


                                <div class="govuk-radios__item">

                                    <input class="govuk-radios__input" aria-controls="conditional-contact-method-conditional-email" aria-expanded="false" name="x" type="radio" value="results-page-2.php" id="x">

                                    <label class="govuk-label govuk-radios__label" for="contact-method-conditional-mobile">Text message</label>
                                </div>


                            </div>

                        </fieldset>
                    </div>


                    <button type="submit" class="govuk-button">Continue</button>


                </form>

                <script type="text/javascript">
                    function get_action(form) {
                        form.action = document.querySelector('input[name = "x"]:checked').value;
                    }

                </script>

            </div>
            <div id="sidebar" class="large-4 cell no-top-border">
                <button type="submit" name="skip-verify" value="yes" class="govuk-button hidden-button">Skip Verify</button>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <?php include("../includes/footer.php"); ?>

    <?php include("../includes/javascript.php"); ?>
</body>

</html>
