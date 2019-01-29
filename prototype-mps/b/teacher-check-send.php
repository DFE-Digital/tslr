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

<body>
    <!-- Masthead -->
    <?php include("../includes/masthead.php"); ?>

    <!-- Alpha banner -->
    <?php include("../includes/alpha-banner.php"); ?>


    <div class="grid-container">
        <div id="main-content-area" class="grid-x grid-padding-x grid-margin-x">
            <div id="main-content-left-only" class="large-8 cell">
                <h1 class="govuk-heading-xl">Check your answers</h1>

                <form action="teacher-success.php" method="POST" role="form">
                    <div class="govuk-form-group">

                        <input id="teacher-check-send" name="teacher-check-send" type="hidden" value="true">

                        <!-- use additional modifier class to change column widths for multiple groups of questions and answers: -->
                        <!--   * `app-check-your-answers--short` for short questions -->
                        <!--   * `app-check-your-answers__questions-long` for long questions -->
                        <!--   * none for single group of q&a -->
                        <dl class="app-check-your-answers app-check-your-answers--short">

                            <div class="app-check-your-answers__contents">
                                <dt class="app-check-your-answers__question">School</dt>
                                <dd class="app-check-your-answers__answer">
                                    <?php echo $_SESSION["teacher-school-name"]; ?>
                                </dd>
                                <dd class="app-check-your-answers__change">
                                    <button type="submit" class="button-as-link" value="location" name="teacher-check-send-edit" formaction="teacher-location-eligibility.php">Change<span class="govuk-visually-hidden"> school eligibility</span></button>
                                </dd>
                            </div>


                            <div class="app-check-your-answers__contents">
                                <dt class="app-check-your-answers__question">How we'll contact you</dt>

                                <dd class="app-check-your-answers__answer">By
                                    <?php echo $_SESSION["teacher-contact-method"]; ?>:<br>
                                    <?php echo $_SESSION["teacher-email-address"]; ?>
                                    <?php echo $_SESSION["teacher-mobile-number"]; ?>

                                </dd>

                                <dd class="app-check-your-answers__change">
                                    <button type="submit" class="button-as-link" formaction="teacher-contact-method.php">Change<span class="govuk-visually-hidden"> contact method</span></button>
                                </dd>
                            </div>

                        </dl>

                    </div>

                </form>

                <h2 class="govuk-heading-m">Confirm your claim</h2>
                <p>By submitting this claim you are confirming that, to the best of your knowledge, the details you are providing are correct.</p>
                <form action="teacher-success.php" method="POST" role="form">
                    <div class="govuk-form-group ">
                        <fieldset class="govuk-fieldset" role="group" aria-describedby="bank-hint">

                            <button type="submit" class="govuk-button" formaction="teacher-success.php">Confirm and send</button>

                        </fieldset>
                    </div>
                </form>
            </div>
            <!--    <div id="sidebar" class="large-4 cell">
                &nbsp;
            </div> -->
        </div>
    </div>

    <!-- Footer -->
    <?php include("../includes/footer.php"); ?>

    <?php include("../includes/javascript.php"); ?>
</body>

</html>
