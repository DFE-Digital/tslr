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
                <h1 class="govuk-heading-xl">Consent to us contacting your school</h1>
                <p class="govuk-body">To claim your retention payment we will contact the school you tell us about in this claim to confirm:</p>
                <ul class="govuk-list govuk-list--bullet">
                    <li>that you taught there</li>
                    <li>the subject you were employed to teach</li>
                    <li>you have a qualification specialising in either Physics or Maths</li>
                </ul>
                <p class="govuk-body">We cannot process your claim without doing this.</p>
                <p class="govuk-body">By applying you are confirming that you consent to us contacting the school.</p>
                <form action="teacher-check-qts.php" method="POST" role="form">
                    <div class="govuk-form-group">
                        <fieldset class="govuk-fieldset" role="group">
                            <button type="submit" class="govuk-button">Agree and continue</button>
                        </fieldset>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <!-- Footer -->
    <?php include("../includes/footer.php"); ?>

    <?php include("../includes/javascript.php"); ?>
</body>

</html>
