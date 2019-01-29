<?php 

 // starting the session
 session_start();
?>
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

    <div class="grid-container">
        <div id="main-content-area" class="grid-x grid-padding-x grid-margin-x">
            <div id="main-content-left-only" class="large-8 cell">

                <!--   <div class="govuk-inset-text">You have successfully confirmed your identity.</div> -->

                <form action="teacher-employed-actual.php" method="POST" role="form" data-abide novalidate>

                    <div data-abide-error class="alert callout" style="display: none;">
                        <p><i class="fi-alert"></i>
                            <?php echo $form_generic_error_message ?>
                        </p>
                        <p><a href="#example1Error1">Please enter the subject you were employed to teach</a></p>
                    </div>

                    <div class="govuk-form-group ">
                        <fieldset class="govuk-fieldset" role="group" aria-describedby="bank-hint">

                            <legend class="govuk-fieldset__legend govuk-fieldset__legend--xl">
                                <h1 class="govuk-fieldset__heading">
                                    Which subject were you originally employed to teach at
                                    <?php echo $_POST["teacher-school-name"]; ?>?
                                </h1>
                            </legend>

                            <div class="govuk-form-group">
                                <br/>
                                <!--  <label class="govuk-label" for="teacher-intent">Enter the subject you were employed to teach at</label>
                                <span class="form-error" id="example1Error1" data-form-error-for="teacher-school-name"><br/>
                                   Enter the subject were you employed to teach at <?php echo $_POST["teacher-school-name"]; ?>
                                    </span>
                                <span id="teacher-trn-hint" class="govuk-hint">If you've been off on long-term leave or sick, include the time you were scheduled to teach these subjects.</span>

                                <input class="govuk-input " id="teacher-trn" name="teacher-intent" type="text" value="" required>
                                <div class="govuk-form-group">

                                    <span id="check-teaching-hint" class="govuk-hint">
                If you've been off on long-term leave or sick, include the time you were scheduled to teach these subjects.
              </span>  -->

                                <div class="govuk-radios govuk-radios--conditional" data-module="radios">

                                    <input type="hidden" name="teacher-school-name" value="<?=htmlspecialchars($_POST[ 'teacher-school-name']);?>" />

                                    <div class="govuk-radios__item">

                                        <input class="govuk-radios__input" id="check-teaching-conditional-science" name="x" type="radio" value="science" data-aria-controls="conditional-check-teaching-conditional-science">

                                        <label class="govuk-label govuk-radios__label" for="check-teaching-conditional-science">
                    Science (physics, chemistry or biology)
                  </label>
                                    </div>

                                    <div class="govuk-radios__item">

                                        <input class="govuk-radios__input" id="check-teaching-conditional-compscience" name="x" type="radio" value="compscience" data-aria-controls="conditional-check-teaching-conditional-compscience">

                                        <label class="govuk-label govuk-radios__label" for="check-teaching-conditional-compscience">
                    Maths
                  </label>
                                    </div>

                                    <!--    <div class="govuk-radios__item">

                                        <input class="govuk-radios__input" id="check-teaching-conditional-languages" name="check-teaching" type="radio" value="languages" data-aria-controls="conditional-check-teaching-conditional-languages">

                                        <label class="govuk-label govuk-radios__label" for="check-teaching-conditional-languages">
                    Languages (not including English)
                  </label>
                                    </div> -->




                                    <div class="govuk-radios__item">

                                        <input class="govuk-radios__input" id="check-teaching-conditional-other" name="x" type="radio" value="teacher-not-eligible.php" aria-controls="conditional-subject" aria-expanded="false" onchange="showSelect2();">

                                        <label class="govuk-label govuk-radios__label" for="check-teaching-conditional-other">
                    Other
                  </label>
                                    </div>

                                    <div class="govuk-radios__conditional govuk-radios__conditional--hidden hide" id="conditional-subject">

                                        <div class="govuk-form-group govuk-radios__conditional">

                                            <label class="govuk-label" for="teacher-ni">Please specify</label>

                                            <!-- <span id="teacher-trn-hint" class="govuk-hint">This is on the certificate you got when you qualified as a teacher, or your school can tell you.</span> -->

                                            <input class="govuk-input " id="teacher-ni" name="teacher-ni" type="text" value="" pattern="alpha_numeric">

                                            <br/>
                                        </div>

                                    </div>
                                </div>

                            </div>


                            <div class="govuk-form-group">
                                <br/>
                                <button type="submit" class="govuk-button">Continue</button>

                            </div>

                        </fieldset>
                    </div>

                </form>

                <script type="text/javascript">
                    function get_action(form) {
                        form.action = document.querySelector('input[name = "x"]:checked').value;
                    }

                </script>


            </div>
            <div id="sidebar" class="large-4 cell no-top-border">
            </div>
        </div>
    </div>


    <!-- Footer -->
    <?php include("../includes/footer.php"); ?>

    <?php include("../includes/javascript.php"); ?>
    <script>
        function showSelect2() {
            var select = document.getElementById('conditional-subject');
            select.className = 'show';
        }

        function hide() {
            document.getElementById("conditional-subject").style.display = 'none';
        }

    </script>
</body>

</html>
