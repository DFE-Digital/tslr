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

                <!--   <div class="govuk-inset-text">You have successfully confirmed your identity.</div> -->

                <!--       <form action="teacher-enter-location-confirm.php" method="POST" role="form" data-abide novalidate>

                    <div data-abide-error class="alert callout" style="display: none;">
                        <p><i class="fi-alert"></i>
                            <?php echo $form_generic_error_message ?>
                        </p>
                        <p><a href="#example1Error1">Please enter your Teacher Reference Number</a></p>
                    </div>
                    
                    <div class="govuk-form-group">
              <label class="govuk-label" for="teacher-trn">Teacher reference number</label>
              <span id="teacher-trn-hint" class="govuk-hint">This is on the certificate you got when you qualified as a teacher, or your school can tell you.</span>
              
              <input class="govuk-input " id="teacher-trn" name="teacher-trn" type="text" value="">
            </div>

                    <div class="govuk-form-group">
              
              <button type="submit" class="govuk-button">Continue</button>
              
            </div>

                </form> -->

                <form action="teacher-location-eligibility.php" method="POST" role="form" data-abide novalidate>

                    <div data-abide-error class="alert callout" style="display: none;">
                        <p><i class="fi-alert"></i>
                            <?php echo $form_generic_error_message ?>
                        </p>
                        <p><a href="#example1Error1">Please enter the subject specialised in during initial teacher training</a></p>
                    </div>

                    <div class="govuk-form-group ">
                        <fieldset class="govuk-fieldset" role="group" aria-describedby="bank-hint">

                            <legend class="govuk-fieldset__legend govuk-fieldset__legend--xl">
                                <h1 class="govuk-fieldset__heading">
                                    What subject did you specialise in during your initial teacher training?
                                </h1>
                            </legend>

                            <div class="govuk-form-group">
                                <label class="govuk-label" for="teacher-trn">Enter the subject you specialised in</label>
                                <span class="form-error" id="example1Error1" data-form-error-for="teacher-school-name"><br/>
                                   Enter the subject you specialised in
                                    </span>
                                <!-- <span id="teacher-trn-hint" class="govuk-hint">This is on the certificate you got when you qualified as a teacher, or your school can tell you.</span> -->

                                <input class="govuk-input " id="teacher-trn" name="teacher-trn" type="text" value="" required>
                            </div>

                            <div class="govuk-form-group">

                                <button type="submit" class="govuk-button">Continue</button>

                            </div>

                        </fieldset>
                    </div>

                </form>


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
