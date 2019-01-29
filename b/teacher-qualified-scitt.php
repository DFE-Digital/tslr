<?php ?>
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

                <form action="teacher-location-eligibility.php" method="POST" role="form" data-abide novalidate onsubmit="get_action(this);">

                    <div data-abide-error class="alert callout" style="display: none;">
                        <p><i class="fi-alert"></i>
                            <?php echo $form_generic_error_message ?>
                        </p>
                        <p><a href="#example1Error1">Please enter the subject specialised in during your School-centred initial teacher training?</a></p>
                    </div>

                    <div class="govuk-form-group ">
                        <fieldset class="govuk-fieldset" role="group" aria-describedby="bank-hint">

                            <legend class="govuk-fieldset__legend govuk-fieldset__legend--xl">
                                <h1 class="govuk-fieldset__heading">
                                    What subject did you specialise in during your School-centred initial teacher training?
                                </h1>
                            </legend>

                            <div class="govuk-form-group">

                                <div class="govuk-radios">

                                    <div class="govuk-radios__item">

                                        <input class="govuk-radios__input" name="x" type="radio" value="teacher-location-eligibility.php" id="x">

                                        <label class="govuk-label govuk-radios__label" for="check-still-teaching-yes">Physics</label>
                                    </div>

                                    <div class="govuk-radios__item">

                                        <input class="govuk-radios__input" name="x" type="radio" value="teacher-location-eligibility.php" id="x">

                                        <label class="govuk-label govuk-radios__label" for="check-still-teaching-yes">Maths</label>
                                    </div>

                                    <div class="govuk-radios__item">

                                        <input class="govuk-radios__input" name="x" type="radio" value="teacher-not-eligible.php" id="x">

                                        <label class="govuk-label govuk-radios__label" for="check-still-teaching-yes">Other</label>
                                    </div>

                                </div>
                            </div>

                            <div class="govuk-form-group">

                                <button type="submit" class="govuk-button">Continue</button>

                            </div>

                        </fieldset>
                    </div>

                </form>

                <script type="text/javascript">
                    function get_action(form) {
                        form.action = document.querySelector('input[name = "x"]:checked').value;
                    }

                </script>

            </div>
            <div id="sidebar" class="large-4 cell no-top-border">
            </div>
        </div>
    </div>


    <!-- Footer -->
    <?php include("../includes/footer.php"); ?>

    <?php include("../includes/javascript.php"); ?>
</body>

</html>
