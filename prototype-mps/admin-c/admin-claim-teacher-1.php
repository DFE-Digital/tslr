<?php include("../includes/admin-c-session-head.php"); ?>

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
                    Retention payment claim details:
                </h1>

                <br/>

                <form action="admin-confirmation.php" method="POST" role="form">
                    <div class="govuk-form-group">

                        <input id="admin-claim" name="admin-claim" type="hidden" value="true">

                        <!-- only add a heading for a list if there is more than one list -->
                        <h2 class="govuk-heading-m">Teacher details</h2>


                        <dl class="app-check-your-answers app-check-your-answers--short">

                            <div class="app-check-your-answers__contents">
                                <dt class="app-check-your-answers__question">Teacher name</dt>
                                <dd class="app-check-your-answers__answer">Jane Jones</dd>
                                <dd class="app-check-your-answers__change">&nbsp;</dd>
                            </div>

                            <div class="app-check-your-answers__contents">
                                <dt class="app-check-your-answers__question">Teacher reference number (TRN)</dt>
                                <dd class="app-check-your-answers__answer">2316748</dd>
                                <dd class="app-check-your-answers__change">&nbsp;</dd>
                            </div>

                            <div class="app-check-your-answers__contents">
                                <dt class="app-check-your-answers__question">School</dt>
                                <dd class="app-check-your-answers__answer">Moorside High School</dd>
                                <dd class="app-check-your-answers__change">&nbsp;</dd>
                            </div>

                        </dl>

                    </div>

                    <div class="govuk-form-group ">

                        <h2 class="govuk-heading-m">Claim details for Jane Jones</h2>



                        <dl class="app-check-your-answers wider-titles app-check-your-answers--short">


                            <div class="app-check-your-answers__contents">


                                <dt class="app-check-your-answers__question">Did they qualify as a teacher on or after 
                                        <?php echo $qualification_date  ?>?</dt>

                                <?php 
    if (!empty($_SESSION["qts"])) {
  ?>
                                <dd class="app-check-your-answers__answer">
                                    <?php echo $qts ?>
                                </dd>
                                <?php } else { ?>
                                <dd class="app-check-your-answers__answer answer-incomplete">
                                    Incomplete
                                </dd>
                                <?php } ?>


                                <dd class="app-check-your-answers__change">
                                    <a class="button-as-link" href="admin-confirm-qts.php">Update</a>
                                </dd>

                            </div>

                            <div class="app-check-your-answers__contents">


                                <dt class="app-check-your-answers__question">Did they work at the school between                                         <?php echo $academic_year_start_date ?> and
                                        <?php echo $academic_year_end_date ?>?</dt>

                                <?php 
    if (!empty($_SESSION["worked"])) {
  ?>
                                <dd class="app-check-your-answers__answer">
                                    <?php echo $worked ?>
                                </dd>
                                <?php } else { ?>
                                <dd class="app-check-your-answers__answer answer-incomplete">
                                    Incomplete
                                </dd>
                                <?php } ?>


                                <dd class="app-check-your-answers__change">
                                    <a class="button-as-link" href="admin-confirm-worked.php">Update</a>
                                </dd>

                            </div>


                            <div class="app-check-your-answers__contents">

                                <dt class="app-check-your-answers__question">Which subject were they originally employed to teach at Moorside High School?</dt>


                                <?php 
    if (!empty($_SESSION["intent"])) {
  ?>
                                <dd class="app-check-your-answers__answer">
                                    <?php echo $intent ?>
                                </dd>
                                <?php } else { ?>
                                <dd class="app-check-your-answers__answer answer-incomplete">
                                    Incomplete
                                </dd>
                                <?php } ?>

                                <dd class="app-check-your-answers__change">
                                    <a class="button-as-link" href="admin-employed-intent.php">Update</a>
                                </dd>

                            </div>

                            <div class="app-check-your-answers__contents">

                                <dt class="app-check-your-answers__question">Which route they took to qualify as a teacher?</dt>

                                <?php 
    if (!empty($_SESSION["itt"])) {
  ?>
                                <dd class="app-check-your-answers__answer">
                                    <?php echo $itt ?>
                                </dd>
                                <?php } else { ?>
                                <dd class="app-check-your-answers__answer answer-incomplete">
                                    Incomplete
                                </dd>
                                <?php } ?>

                                <dd class="app-check-your-answers__change">
                                    <a class="button-as-link" href="admin-confirm-itt.php">Update</a>
                                </dd>

                            </div>

                            <div class="app-check-your-answers__contents">

                                <dt class="app-check-your-answers__question">Which subject they have a specialised qualification in?</dt>


                                <?php 
    if (!empty($_SESSION["undergraduate"])) {
  ?>
                                <dd class="app-check-your-answers__answer">
                                    <?php echo $undergraduate ?>
                                </dd>
                                <?php } else { ?>
                                <dd class="app-check-your-answers__answer answer-incomplete">
                                    Incomplete
                                </dd>
                                <?php } ?>

                                <dd class="app-check-your-answers__change">
                                    <a class="button-as-link" href="admin-confirm-undergraduate.php">Update</a>
                                </dd>

                            </div>

                        </dl>

                    </div>

                    <h2 class="govuk-heading-m">Confirm the claim</h2>
                    <p>By submitting this form you are confirming that, to the best of your knowledge, the details you are providing are correct.</p>
                    <p class="govuk-body">
                        <button type="submit" class="govuk-button" name="update-claim" value="update">Confirm and send</button>
                    </p>

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
