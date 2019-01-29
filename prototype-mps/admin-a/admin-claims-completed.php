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

                <h1 class="govuk-heading-xl">
                    Check claims from teachers at Moorside High School
                </h1>

                <p class="govuk-body">These teachers have applied to claim a retention payment.</p>
                <p class="govuk-body">To process the claims, we need you to check:
                </p>

                <ul class="govuk-list govuk-list--bullet">
                    <?php include("../includes/admin-a-criteria.php"); ?>
                </ul>

                <p class="govuk-body">The teachers listed have given us permission to check these details with you.</p>

                <br/>

                <form action="admin-claim" method="POST" role="form">
                    <div class="govuk-form-group">
                        <fieldset class="govuk-fieldset" role="group" aria-describedby="tbc">

                            <ul class="app-task-list">
                                <!--   <li>
                                    <h2 class="app-task-list__section">To be completed (1)</h2>
                                    <ul class="app-task-list__items">
                                        <li class="app-task-list__item">
                                            <button type="submit" class="button-as-link" formaction="admin-claim-teacher-1.php" name="claim-id" value="1">Jane Jones<span class="date-applied">Due by 11 Feb 2019</span></button>
                                            <strong class="govuk-tag incomplete app-task-list__task-completed">To do</strong>
                                        </li>
                                    </ul>
                                </li> -->
                                <li>
                                    <h2 class="app-task-list__section">Completed claims (2)</h2>
                                    <ul class="app-task-list__items">
                                        <li class="app-task-list__item">
                                            <button type="submit" class="button-as-link" formaction="admin-claim-teacher-1.php" name="claim-id" value="1">Jane Jones<span class="date-applied"><?php 
  
echo "Completed on:"; 
$today = date("d/m/Y"); 
echo $today; 
  
?></span></button>
                                            <strong class="govuk-tag app-task-list__task-completed" id="company-information-completed">Completed</strong>
                                        </li>
                                        <li class="app-task-list__item">
                                            Ian Roberts <span class="date-applied">Completed on 05 Dec 2018</span>
                                            <strong class="govuk-tag app-task-list__task-completed" id="company-information-completed">Completed</strong>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                        </fieldset>
                    </div>
                </form>

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
