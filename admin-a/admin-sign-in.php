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

                <form action="admin-claims.php" method="POST" role="form" novalidate data-abide>

                    <div data-abide-error class="alert callout" style="display: none;">
                        <p><i class="fi-alert"></i>
                            <?php echo $form_generic_error_message ?>
                        </p>
                    </div>

                    <div class="govuk-form-group ">
                        <fieldset class="govuk-fieldset" role="group" aria-describedby="tbc">

                            <legend class="govuk-fieldset__legend govuk-fieldset__legend--xl">
                                <h1 class="govuk-fieldset__heading">
                                    DfE Sign-in
                                </h1>
                                <p class="govuk-body"><br/>DfE Sign-in is the new way to access some education sector services.</p>
                            </legend>

                            <div class="govuk-form-group">
                                <h2 class="govuk-heading-m">Sign-in</h2>
                                <div class="govuk-form-group">
                                    <label class="govuk-label" for="bank-account-name">Email address</label>
                                    <span class="form-error" id="example1Error1" data-form-error-for="bank-account-name"><br/>
                                   Enter your email address
                                    </span>
                                    <input class="govuk-input govuk-!-width-two-thirds " id="teacher-bank-account-name" name="teacher-bank-account-name" type="email" value="" required pattern="email">
                                </div>
                                <div class="govuk-form-group">
                                    <label class="govuk-label" for="bank-account-number">Password</label>
                                    <span class="form-error" id="example1Error1" data-form-error-for="bank-account-number"><br/>
                                   Enter your password
                                    </span>
                                    <input class="govuk-input govuk-!-width-two-thirds " id="teacher-bank-account-number" name="teacher-bank-account-number" type="password" value="" required>
                                    <p class="govuk-body-s"><a href="#">I've forgotten my password</a></p>
                                </div>

                            </div>

                        </fieldset>
                    </div>


                    <button type="submit" class="govuk-button">Sign in</button>

                    <div class="govuk-form-group">
                        <div class="govuk-inset-text">
                            <p>By continuing you accept the <a href="#">terms and conditions</a>.</p>
                        </div>
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
