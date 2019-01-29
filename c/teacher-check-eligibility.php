<?php ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<?php include("../includes/head.php"); ?>

<?php include("../includes/variables.php"); ?>

<body class="govuk-template__body js-enabled">
    <!-- Masthead -->
    <?php include("../includes/masthead.php"); ?>

    <!-- Alpha banner -->
    <?php include("../includes/alpha-banner.php"); ?>

    <div id="h1-title" class="grid-container">
        <div class="grid-x grid-padding-x grid-x grid-padding-x grid-margin-x">
            <div class="cell">
                <h1 class="govuk-heading-xl">Check if you’re eligible</h1>
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
                        <li>&mdash; Check if you’re eligible</li>
                        <li>&mdash; <a class="govuk-link" href="teacher-apply.php">Make a claim</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class="grid-container">
        <div id="main-content-area" class="grid-x grid-padding-x grid-margin-x">
            <div id="main-content-left" class="large-8 cell">
                <h2 class="govuk-heading-l">Eligibility</h2>

                <p class="govuk-body">To claim your retention payments you must:</p>
                <ul class="govuk-list govuk-list--bullet">
                    <li>have qualified as a teacher after
                        <?php echo $qualification_date  ?>
                    </li>
                    <li>have a qualification with a specialism in either Physics or Maths</li>
                    <li>still be teaching in a school in the UK</li>
                    <li>have worked in a participating local authority area in England in the last academic year, at either:
                        <ul>
                            <li>a state-funded school or academy</li>
                            <li>in a special school (a school that teaches children who have special educational needs)</li>
                            <li>a 16-19 school (including academies and free schools)</li>
                            <li>a sixth form or further education college</li>
                        </ul>
                </ul>
                <!--     <p class="govuk-body">If you worked in a state-funded school or academy, a 16-19 school, or further education college you must also have taught at least one of these subjects for at least 50% of your time there:</p>
                <?php include("../includes/eligible-subjects.php"); ?>
                <p>If you worked in a special school, you do not need to have taught these subjects.</p> -->

                <h3 class="govuk-heading-m">Potential participating local authority areas</h3>
                <p>You can only claim your retention payment in certain areas in England – areas where there are fewer teachers in these subjects at the moment. To make a claim, you must have taught in one of these local authority areas:</p>
                <?php include("../includes/participating-local-authorities.php"); ?>

                <nav class="tslr-pagination" role="navigation">
                    <ul>
                        <li class="next">
                            <a href="teacher-apply.php">
              <span class="text"><span class="arrow">⇢</span>Next</span>
              <span class="label">Make a claim</span>
            </a>
                        </li>
                        <li class="prev">
                            <a href="teacher-claim-bursary.php">
              <span class="text"><span class="arrow">⇠</span>Previous</span>
              <span class="label">About this scheme</span>
            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div id="sidebar" class="large-4 cell">
                <h4 class="govuk-heading-s">Related content</h4>
                <ul class="govuk-list">
                    <li>Check which local authority area your school is in:</li>
                    <li><a href="https://get-information-schools.service.gov.uk/" class="govuk-link">Get information about schools</a></li>
                </ul>

            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include("../includes/footer.php"); ?>

    <?php include("../includes/javascript.php"); ?>
</body>

</html>
