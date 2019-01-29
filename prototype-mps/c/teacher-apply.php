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

    <div id="h1-title" class="grid-container">
        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell">
                <h1 class="govuk-heading-xl">Make a claim</h1>
            </div>
        </div>
    </div>

    <div class="grid-container">
        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="large-8 cell">
                <nav class="tslr-contents-list" role="navigation">
                    <h2 class="govuk-heading-m">Contents</h2>
                    <ul class="govuk-list">
                        <li>&mdash; <a class="govuk-link" href="teacher-claim-bursary.php">About this scheme</a></li>
                        <li>&mdash; <a class="govuk-link" href="teacher-check-eligibility.php">Check if you’re eligible</a></li>
                        <li>&mdash; Make a claim</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class="grid-container">
        <div id="main-content-area" class="grid-x grid-padding-x grid-margin-x">
            <div id="main-content-left" class="large-8 cell">

                <h3 class="govuk-heading-m">Before you start</h3>
                <p class="govuk-body">You will need:</p>
                <ul class="govuk-list govuk-list--bullet">
                    <li>your teacher reference number – you can get this from your school, the certificate you got when you qualified as a teacher or from the <a href="https://www.gov.uk/guidance/individual-teacher-records-information-for-teachers#contact">teacher qualifications helpdesk</a></li>
                    <li>sign in details for ‘Verify’ (the government’s secure way of proving who you are) – if you do not have a Verify account, you will need your passport or photocard driving licence to sign up</li>
                    <li>your bank account details</li>
                </ul>

                <!--   <h3 class="govuk-heading-m">We'll check your information</h3>
                <p class="govuk-body">After you send your claim, we’ll ask your school to confirm:</p>
                <ul class="govuk-list govuk-list--bullet">
                    <li>that you worked there in the last academic year</li>
                    <li>that you taught one of the qualifying subjects for more than half of your time there, if applicable</li>
                </ul> -->

                <h3 class="govuk-heading-m">You've worked at more than one school</h3>
                <p class="govuk-body">If you've worked at more than one school since
                    <?php echo $academic_year_start_date ?>, apply for each school separately.</p>
                <form action="teacher-consent.php" method="POST" role="form">
                    <div class="govuk-form-group">
                        <fieldset class="govuk-fieldset" role="group">
                            <button type="submit" class="govuk-button govuk-button--start">Start now</button>
                        </fieldset>
                    </div>
                </form>
                <h3 class="govuk-heading-m">Other ways to apply</h3>
                <p class="govuk-body">If you cannot apply online, you can apply by post. The address to send your application to is at the end of the form.</p>

                <nav class="tslr-pagination" role="navigation">
                    <ul>
                        <li class="prev">
                            <a href="teacher-check-eligibility.php">
              <span class="text"><span class="arrow">⇠</span>Previous</span>
              <span class="label">Check if you’re eligible</span>
            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!--   <div id="sidebar" class="large-4 cell">
                &nbsp;
            </div> -->
        </div>
    </div>

    <!-- Footer -->
    <?php include("../includes/footer.php"); ?>

    <?php include("../includes/javascript.php"); ?>
</body>

</html>
