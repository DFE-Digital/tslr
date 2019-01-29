<?php session_start(); ?>

<?php $_SESSION['teacher-school-name'] = $_POST['teacher-school-name']; ?>

<?php $_SESSION['teacher-contact-method'] = $_POST['teacher-contact-method']; ?>

<?php $_SESSION['teacher-email-address'] = $_POST['teacher-email-address']; ?>

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

                <form action="teacher-contact-method.php" method="POST" role="form" novalidate data-abide>

                    <input type="hidden" name="teacher-school-name" value="<?=htmlspecialchars($_POST[ 'teacher-school-name']);?>" />

                    <div data-abide-error class="alert callout" style="display: none;">
                        <p><i class="fi-alert"></i>
                            <?php echo $form_generic_error_message ?>
                        </p>
                    </div>

                    <div class="govuk-form-group ">
                        <fieldset class="govuk-fieldset" role="group" aria-describedby="tbc">

                            <legend class="govuk-fieldset__legend govuk-fieldset__legend--xl">
                                <h1 class="govuk-fieldset__heading">
                                    Your account details
                                </h1>
                            </legend>

                            <div class="govuk-form-group">
                                <h2 class="govuk-heading-m">Enter your account details</h2>
                                <div class="govuk-form-group">
                                    <label class="govuk-label" for="bank-account-name">Name of account holder</label>
                                    <span class="form-error" id="example1Error1" data-form-error-for="bank-account-name"><br/>
                                   Enter the name of the account holder
                                    </span>
                                    <input class="govuk-input govuk-!-width-two-thirds " id="teacher-bank-account-name" name="teacher-bank-account-name" type="text" value="" required>
                                </div>
                                <div class="govuk-form-group">
                                    <label class="govuk-label" for="bank-account-number">Account number</label>
                                    <span class="form-error" id="example1Error1" data-form-error-for="bank-account-number"><br/>
                                   Enter the  bank account number
                                    </span>
                                    <input class="govuk-input govuk-!-width-two-thirds " id="teacher-bank-account-number" name="teacher-bank-account-number" type="number" value="" required pattern="number">
                                </div>
                                <div class="govuk-form-group">
                                    <label class="govuk-label" for="#">Sort code</label>
                                    <span class="form-error" id="example1Error1" data-form-error-for="teacher-bank-sortcode-1"><br/>
                                   Enter the sort code
                                    </span>
                                    <input class="govuk-input govuk-input--width-2 dis-inline" id="#" name="teacher-bank-sortcode-1" type="text" value="" required pattern="number">
                                    <input class="govuk-input govuk-input--width-2 dis-inline " id="#" name="teacher-bank-sortcode-2" type="text" value="" required pattern="number">
                                    <input class="govuk-input govuk-input--width-2 dis-inline " id="#" name="teacher-bank-sortcode-3" type="text" value="" required pattern="number">
                                </div>
                            </div>

                        </fieldset>
                    </div>


                    <button type="submit" class="govuk-button">Continue</button>


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
