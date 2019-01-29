<?php include("../includes/admin-b-session-head.php"); ?>

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
                    <input type="hidden" name="qts" value="<?=htmlspecialchars($_SESSION['qts']);?>" />
                    <input type="hidden" name="split" value="<?=htmlspecialchars($_SESSION['split']);?>" />
                    <input type="hidden" name="intent" value="<?=htmlspecialchars($_SESSION['intent']);?>" />
                    <input type="hidden" name="itt" value="<?=htmlspecialchars($_SESSION['itt']);?>" />

                    <div class="govuk-form-group ">
                        <fieldset class="govuk-fieldset" role="group" aria-describedby="tbc">

                            <legend class="govuk-fieldset__legend govuk-fieldset__legend--xl">
                                <h1 class="govuk-fieldset__heading">
                                    Which subject does Jane Jones have a specialised teaching qualification in?
                                </h1>
                                <br/>
                                <!--    <p class="govuk-body">Did <strong>Jane Jones</strong> teach at Moorside High School for any time between
                                    <?php echo $academic_year_start_date ?> and
                                    <?php echo $academic_year_end_date ?>?</p> -->
                            </legend>



                            <div class="govuk-form-group">

                                <div class="govuk-radios">

                                    <div class="govuk-radios__item">

                                        <input class="govuk-radios__input" name="undergraduate" type="radio" value="Physics" id="x">

                                        <label class="govuk-label govuk-radios__label" for="check-still-teaching-yes">Physics</label>
                                    </div>

                                    <div class="govuk-radios__item">

                                        <input class="govuk-radios__input" name="undergraduate" type="radio" value="Maths" id="x">

                                        <label class="govuk-label govuk-radios__label" for="check-still-teaching-yes">Maths</label>
                                    </div>

                                    <div class="govuk-radios__item">

                                        <input class="govuk-radios__input" name="undergraduate" type="radio" value="Other" id="x">

                                        <label class="govuk-label govuk-radios__label" for="check-still-teaching-yes">Other</label>
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
