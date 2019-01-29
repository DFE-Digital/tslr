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

    <!-- Breadcrumbs -->
    <div class="grid-container">
        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell">
                <div class="govuk-breadcrumbs">
                    <ol class="govuk-breadcrumbs__list">
                        <li class="govuk-breadcrumbs__list-item" aria-current="page">All claims: Moorside High School</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="grid-container">
        <div id="main-content-area" class="grid-x grid-padding-x grid-margin-x">
            <div id="main-content-left-only" class="large-8 cell">

                <h1 class="govuk-heading-xl">You’ve confirmed their details</h1>
                <p class="govuk-body">Thank you for confirming details for Jane Jones.</p>
                <h2 class="govuk-heading-m">What happens next</h2>
                <p class="govuk-body">We’ll contact Jane Jones within {xx} days to update them about their claim.</p>
                <p class="govuk-body">
                    <a href="admin-claims-completed.php" role="button" draggable="false" class="govuk-button">Continue</a>
                </p>


            </div>

            <div id="sidebar" class="large-4 cell no-top-border">
                &nbsp;
            </div>

        </div>
    </div>


    <!-- Footer -->
    <?php include("../includes/footer.php"); ?>

    <?php include("../includes/javascript.php"); ?>

</body>

</html>
