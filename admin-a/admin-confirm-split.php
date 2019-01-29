<?php include("../includes/admin-a-session-head.php"); ?>


<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<?php include("../includes/head.php"); ?>

<?php include("../includes/variables.php"); ?>

<body class="govuk-template__body js-enabled">
    <!-- Masthead -->
    <?php include("../includes/masthead.php"); ?>

    <!-- Alpha banner -->
    <?php include("../includes/alpha-banner.php"); ?>


    <div class="grid-container">
        <div id="main-content-area" class="grid-x grid-padding-x grid-margin-x">
            <div id="main-content-left-only" class="large-8 cell">

                <form action="admin-claim-teacher-1.php" method="POST" role="form" onsubmit="get_action(this);" data-abide novalidate>

                    <input type="hidden" name="worked" value="<?=htmlspecialchars($_SESSION['worked']);?>" />
                    <input type="hidden" name="intent" value="<?=htmlspecialchars($_SESSION['intent']);?>" />
                    <input type="hidden" name="undergraduate" value="<?=htmlspecialchars($_SESSION['undergraduate']);?>" />
                    <input type="hidden" name="itt" value="<?=htmlspecialchars($_SESSION['itt']);?>" />
                    <input type="hidden" name="qts" value="<?=htmlspecialchars($_SESSION['qts']);?>" />

                    <div class="govuk-form-group ">
                        <fieldset class="govuk-fieldset" role="group" aria-describedby="tbc">

                            <legend class="govuk-fieldset__legend govuk-fieldset__legend--xl">
                                <h1 class="govuk-fieldset__heading">
                                    Between
                                    <?php echo $academic_year_start_date ?> and
                                    <?php echo $academic_year_end_date ?>, did <strong>Jane Jones</strong> spend more than 50% of their time teaching Physics or Maths?
                                </h1>
                            </legend>

                            <div class="govuk-form-group">

                                <div class="govuk-radios">

                                    <div class="govuk-radios__item">

                                        <input class="govuk-radios__input" name="split" type="radio" id="x" value="Yes">

                                        <label class="govuk-label govuk-radios__label" for="check-still-teaching-yes">Yes</label>
                                    </div>

                                    <div class="govuk-radios__item">

                                        <input class="govuk-radios__input" name="split" type="radio" id="x" value="No">

                                        <label class="govuk-label govuk-radios__label" for="check-still-teaching-no">No</label>
                                    </div>

                                </div>
                            </div>

                            <div class="govuk-form-group">
                                <button type="submit" class="govuk-button">Continue</button>
                            </div>

                            <p class="govuk-body">
                                <button type="submit" class="button-as-link" name="admin-claim-teacher-1.php" value="cancel">Skip for now</button>
                            </p>

                        </fieldset>
                    </div>
                </form>

            </div>
            <div id="sidebar" class="large-4 cell no-top-border">
                <!--    <button type="submit" name="skip-verify" value="yes" class="govuk-button hidden-button">Skip Verify</button> -->
            </div>
        </div>
    </div>


    <!-- Footer -->
    <?php include("../includes/footer.php"); ?>

    <?php include("../includes/javascript.php"); ?>
</body>

</html>
