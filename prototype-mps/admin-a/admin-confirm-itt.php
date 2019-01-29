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
                    <input type="hidden" name="split" value="<?=htmlspecialchars($_SESSION['split']);?>" />
                    <input type="hidden" name="undergraduate" value="<?=htmlspecialchars($_SESSION['undergraduate']);?>" />
                    <input type="hidden" name="qts" value="<?=htmlspecialchars($_SESSION['qts']);?>" />

                    <div class="govuk-form-group ">
                        <fieldset class="govuk-fieldset" role="group" aria-describedby="tbc">

                            <legend class="govuk-fieldset__legend govuk-fieldset__legend--xl">
                                <h1 class="govuk-fieldset__heading">
                                    Which subject did Jane Jones specialise in during initial teacher training?
                                </h1>
                            </legend>

                            <div class="govuk-form-group">
                                <label class="govuk-label" for="teacher-trn">Enter the subject Jane Jones specialised in</label>
                                <span class="form-error" id="example1Error1" data-form-error-for="itt"><br/>
                                   Enter the subject Jane Jones specialised in
                                    </span>
                                <!-- <span id="teacher-trn-hint" class="govuk-hint">This is on the certificate you got when you qualified as a teacher, or your school can tell you.</span> -->

                                <input class="govuk-input " id="itt" name="itt" type="text" value="" required>
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
