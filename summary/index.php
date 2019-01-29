<?php
    session_start();
    $_SESSION = array();
    session_destroy();
?>
    <!doctype html>
    <html class="no-js" lang="en" dir="ltr">

    <?php include("includes/head.php"); ?>

    <?php include("includes/variables.php"); ?>

    <body>
        <!-- Masthead -->
        <?php include("includes/masthead.php"); ?>

        <!-- Alpha banner 
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell">
                <div class="govuk-phase-banner">
                    <p class="govuk-phase-banner__content"><strong class="govuk-tag govuk-phase-banner__content__tag ">
  alpha
</strong>
                        <span class="govuk-phase-banner__text">
      This is a new service - your <a href="#" class="govuk-link">feedback</a> will help us to improve it.
    </span>
                    </p>
                </div>
            </div>
        </div>
    </div> -->

        <div id="h1-title" class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="cell">
                    <h1 class="govuk-heading-xl">The teacher payments service alpha summary now lives <a href="https://dfe-tslr-alpha-summary.herokuapp.com">here</a></h1>
                </div>
            </div>
        </div>

        <?php include("includes/javascript.php"); ?>
    </body>

    </html>
