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
        <div class="grid-x grid-padding-x grid-x grid-padding-x grid-margin-x">
            <div class="cell">
                <h1 class="govuk-heading-xl">
                    <?php echo $service_name  ?>
                </h1>
            </div>
        </div>
    </div>

    <div class="grid-container">
        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="large-8 cell">
                <nav class="tslr-contents-list" role="navigation">
                    <h2 class="govuk-heading-m">Contents</h2>
                    <ul class="govuk-list">
                        <li>&mdash; About this scheme</li>
                        <li>&mdash; <a class="govuk-link" href="teacher-check-eligibility.php">Check if you’re eligible</a></li>
                        <li>&mdash; <a class="govuk-link" href="teacher-apply.php">Make a claim</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class="grid-container">
        <div id="main-content-area" class="grid-x grid-padding-x grid-margin-x">
            <div id="main-content-left" class="large-8 cell">
                <h2 class="govuk-heading-l">About this scheme</h2>

                <p class="govuk-body">From
                    <?php echo $policy_criteria_start_date  ?>, teachers can claim a retention payment of
                    <?php echo $total_retention_payment  ?>.</p>
                <p class="govuk-body">The scheme is for teachers in certain subjects and is only running in certain areas of England – areas that have fewer teachers in these subjects at the moment.</p>
                <p class="govuk-body">The payments will be made as a lump sum of £2000 in the Autumn term of 2018/19. You will not have to pay tax or National Insurance on it.</p>

                <nav class="tslr-pagination" role="navigation">
                    <ul>
                        <li class="next">
                            <a href="teacher-check-eligibility.php">
              <span class="text"><span class="arrow">⇢</span>Next</span>
              <span class="label">Check if you’re eligible</span>
            </a>
                        </li>
                    </ul>
                </nav>
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
