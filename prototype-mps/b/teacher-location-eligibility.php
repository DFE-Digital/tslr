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

                <form action="teacher-employed-intent.php" method="POST" role="form" data-abide novalidate>

                    <div data-abide-error class="alert callout" style="display: none;">
                        <p><i class="fi-alert"></i>
                            <?php echo $form_generic_error_message ?>
                        </p>
                        <p><a href="#example1Error1">Please enter the school name or postcode</a></p>
                    </div>

                    <div class="govuk-form-group">
                        <fieldset class="govuk-fieldset" role="group" aria-describedby="bank-hint">

                            <div>

                                <legend class="govuk-fieldset__legend govuk-fieldset__legend--xl">
                                    <h1 class="govuk-fieldset__heading">
                                        Where did you teach between
                                        <?php echo $academic_year_start_date ?> and
                                        <?php echo $academic_year_end_date ?>?
                                    </h1>
                                </legend>

                                <span id="trn-hint" class="govuk-hint">
                                <details class="govuk-details">
                                <summary class="govuk-details__summary">
                                        <span class="govuk-details__summary-text">You taught at more than one school</span>
                                </summary>
                                <div class="govuk-details__text">
                                    <p class="govuk-body">For now, enter one of the schools you've taught at. You can check another school when you've finished.</p>
                                </div>
                                </details>
                                </span>

                                <div class="govuk-form-group">
                                    <label class="govuk-label" for="teacher-school-name">Enter the school name                                     
                                        <span class="form-error" id="example1Error1" data-form-error-for="teacher-school-name"><br/>
                                   Enter the school name or postcode
                                    </span>
                                    </label>
                                    <input id="teacher-school-name" name="teacher-school-name" class="govuk-input  awesomplete" list="eligible-schools" required aria-errormessage="example1Error1" />
                                    <?php include("../includes/school-list.php"); ?>

                                </div>

                                <div class="govuk-form-group">
                                    <button type="submit" class="govuk-button">Continue</button>
                                </div>

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
