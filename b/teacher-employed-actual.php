<?php session_start(); ?>

<?php $_SESSION['teacher-school-name'] = $_POST['teacher-school-name']; ?>

<?php $_SESSION['teacher-contact-method'] = $_POST['teacher-contact-method']; ?>

<?php $_SESSION['teacher-email-address'] = $_POST['teacher-email-address']; ?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<?php include("../includes/head.php"); ?>

<?php include("../includes/variables.php"); ?>

<body>
    <!-- Masthead -->
    <?php include("../includes/masthead.php"); ?>

    <!-- Alpha banner -->
    <?php include("../includes/alpha-banner.php"); ?>

    <div class="grid-container">
        <div id="main-content-area" class="grid-x grid-padding-x grid-margin-x">
            <div id="main-content-left-only" class="large-8 cell">

                <!--   <div class="govuk-inset-text">You have successfully confirmed your identity.</div> -->


                <form action="teacher-enter-trn.php" method="POST" role="form" onsubmit="get_action(this);" data-abide novalidate>

                    <div data-abide-error class="alert callout" style="display: none;">
                        <p><i class="fi-alert"></i>
                            <?php echo $form_generic_error_message ?>
                        </p>
                        <p><a href="#example1Error1">Please enter the subject you were employed to teach</a></p>
                    </div>

                    <fieldset class="govuk-fieldset" role="group" aria-describedby="bank-hint">

                        <legend class="govuk-fieldset__legend govuk-fieldset__legend--xl">
                            <h1 class="govuk-fieldset__heading">
                                What subject was at least 50% of your time spent teaching at
                                <?php echo $_POST['teacher-school-name']; ?>?
                            </h1>
                        </legend>

                        <div class="govuk-form-group ">
                            <br/>
                            <div class="govuk-radios govuk-radios--conditional" data-module="radios">

                                <input type="hidden" name="teacher-school-name" value="<?=htmlspecialchars($_POST[ 'teacher-school-name']);?>" />

                                <div class="govuk-radios__item">

                                    <input class="govuk-radios__input" id="contact-method-conditional-email" name="x" type="radio" value="teacher-enter-trn.php" aria-controls="conditional-contact-method-conditional-email" aria-expanded="false" onchange="showSelect();">

                                    <label class="govuk-label govuk-radios__label" for="contact-method-conditional-email">Science (physics, chemistry or biology)</label>
                                </div>
                                <div class="govuk-radios__conditional govuk-radios__conditional--hidden hide" id="conditional-contact-method-conditional-email">

                                    <div class="govuk-form-group govuk-radios__conditional">
                                        <label class="govuk-label" for="teacher-email-address">Which science subject did you teach the most?</label>

                                        <div class="govuk-radios__item">

                                            <input class="govuk-radios__input" id="check-teaching-conditional-physics" name="x" type="radio" value="teacher-enter-trn.php" data-aria-controls="conditional-check-teaching-conditional-physics">

                                            <label class="govuk-label govuk-radios__label" for="check-teaching-conditional-physics">
                    Physics
                  </label>
                                        </div>
                                        <div class="govuk-radios__item">

                                            <input class="govuk-radios__input" id="check-teaching-conditional-chemistry" name="x" type="radio" value="teacher-not-eligible.php" data-aria-controls="conditional-check-teaching-conditional-chemistry">

                                            <label class="govuk-label govuk-radios__label" for="check-teaching-conditional-chemistry">
                    Chemistry
                  </label>
                                        </div>
                                        <div class="govuk-radios__item">

                                            <input class="govuk-radios__input" id="check-teaching-conditional-biology" name="x" type="radio" value="teacher-not-eligible.php" data-aria-controls="conditional-check-teaching-conditional-biology">

                                            <label class="govuk-label govuk-radios__label" for="check-teaching-conditional-biology">
                    Biology
                  </label>
                                        </div>
                                        <div class="govuk-radios__item">

                                            <input class="govuk-radios__input" id="check-teaching-conditional-science-as-one" name="x" type="radio" value="teacher-not-eligible.php" data-aria-controls="conditional-check-teaching-conditional-science-as-one">

                                            <label class="govuk-label govuk-radios__label" for="check-teaching-conditional-science-as-one">
                    Combined sciences
                  </label>
                                        </div>
                                        <br/>
                                    </div>

                                </div>

                                <div class="govuk-radios__item">

                                    <input class="govuk-radios__input" id="check-teaching-conditional-compscience" name="x" type="radio" value="teacher-enter-trn.php" data-aria-controls="conditional-check-teaching-conditional-compscience">

                                    <label class="govuk-label govuk-radios__label" for="check-teaching-conditional-compscience">
                    Maths
                  </label>
                                </div>

                                <!--    <div class="govuk-radios__item">

                                    <input class="govuk-radios__input" id="check-teaching-conditional-languages" name="x" type="radio" value="teacher-not-eligible.php" data-aria-controls="conditional-check-teaching-conditional-languages">

                                    <label class="govuk-label govuk-radios__label" for="check-teaching-conditional-languages">
                    Languages (not including English)
                  </label>
                                </div> -->


                                <div class="govuk-radios__item">

                                    <input class="govuk-radios__input" id="check-teaching-conditional-other" name="x" type="radio" value="teacher-not-eligible.php" aria-controls="conditional-subject" aria-expanded="false">

                                    <label class="govuk-label govuk-radios__label" for="check-teaching-conditional-other">
                    Other
                  </label>
                                </div>



                            </div>

                            <div class="govuk-form-group">
                                <br/><br/>
                                <button type="submit" class="govuk-button">Continue</button>

                            </div>

                        </div>
                    </fieldset>
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

    <script>
        function showSelect() {
            var select = document.getElementById('conditional-contact-method-conditional-email');
            select.className = 'show';
        }

        function hide() {
            document.getElementById("conditional-contact-method-conditional-email").style.display = 'none';
        }

    </script>


    <!-- Footer -->
    <?php include("../includes/footer.php"); ?>

    <?php include("../includes/javascript.php"); ?>
</body>

</html>
