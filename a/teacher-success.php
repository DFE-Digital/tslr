<?php ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<?php include("../includes/head.php"); ?>

<?php include("../includes/variables.php"); ?>

<?php $_SESSION['teacher-school-name'] = $_POST['teacher-school-name']; ?>

<body>
    <!-- Masthead -->
    <?php include("../includes/masthead.php"); ?>

    <!-- Alpha banner -->
    <?php include("../includes/alpha-banner.php"); ?>

    <div id="h1-title" class="grid-container">
        <div class="grid-x grid-padding-x grid-x grid-padding-x grid-margin-x">
            <div class="cell">
                <h1 class="govuk-heading-xl">
                    Success page (content to follow)
                </h1>
            </div>
        </div>
    </div>


    <div class="grid-container">
        <div id="main-content-area" class="grid-x grid-padding-x grid-margin-x">
            <div id="main-content-left" class="large-8 cell">
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
