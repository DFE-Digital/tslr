<?php ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<?php include("../includes/head.php"); ?>

<?php include("../includes/variables.php"); ?>

<body>
    <!-- Masthead -->
    <!--  <?php include("../includes/masthead.php"); ?> -->

    <!-- Alpha banner -->
    <!--  <?php include("../includes/alpha-banner.php"); ?> -->


    <div class="grid-container">
        <div id="main-content-area" class="grid-x grid-padding-x grid-margin-x">
            <div class="cell">
                <h3>Email</h3>
            </div>
            <div id="main-content-left-only" class="large-8 cell callout secondary">


                <h2 class="govuk-heading-s">Subject</h2>
                <p class="govuk-body">Jane Jones: claim for retention payment</p>
                <h2 class="govuk-heading-s">Body</h2>
                <p class="govuk-body"><span style="color: red;">Dear</span> [name]</p>
                <p class="govuk-body">Jane Jones has applied to claim a retention payment.</p>
                <p class="govuk-body">To process the claim, we need you to check:</p>
                <ul class="govuk-list govuk-list--bullet">
                    <?php include("../includes/admin-c-criteria.php"); ?>
                </ul>
                <p class="govuk-body">Confirm this information within the next two weeks. If you cannot, {do something}.</p>
                <p class="govuk-body"><a href="admin-sign-in.php">Sign in to DfE</a> to check Jane Jones’s details.</p>
                <p class="govuk-body">Kind regards</p>
                <p class="govuk-body">{Service name}</p>


            </div>
        </div>
    </div>


    <!-- Footer -->
    <!-- <?php include("../includes/footer.php"); ?> -->

    <?php include("../includes/javascript.php"); ?>
</body>

</html>
