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
                    <h1 class="govuk-heading-xl">MPS Prototypes</h1>
                </div>
            </div>
        </div>

        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="cell">
                    <h2 class="govuk-heading-l">Latest and archived prototypes</h2>
                    <table class="govuk-table cols-3 unstriped">
                        <thead class="govuk-table__head">
                            <tr class="govuk-table__row">
                                <th class="govuk-table__header col-1" scope="col">Prototype A<br>
                                    <span class="sub-heading">ITT &amp; 50%</span></th>
                                <th class="govuk-table__header col-2" scope="col">Prototype B<br>
                                    <span class="sub-heading">Qualification route &amp; 50%</span></th>
                                <th class="govuk-table__header col-3" scope="col">Prototype C<br><span class="sub-heading">Qualification route only</span></th>
                            </tr>
                        </thead>
                        <tbody class="govuk-table__body">
                            <tr class="govuk-table__row">
                                <td class="govuk-table__cell" valign="top">
                                    <a href="/a/teacher-claim-bursary.php" class="govuk-link">A - Teachers</a><br/>
                                    <a href="/admin-a/admin-claim-received-email.php" class="govuk-link">A - School Business Professionals</a>
                                </td>
                                <td class="govuk-table__cell" valign="top">
                                    <a href="/b/teacher-claim-bursary.php" class="govuk-link">B - Teachers</a><br/>
                                    <a href="/admin-b/admin-claim-received-email.php" class="govuk-link">B - School Business Professionals</a>
                                </td>
                                <td class="govuk-table__cell" valign="top">
                                    <a href="/c/teacher-claim-bursary.php" class="govuk-link">C - Teachers</a><br/>
                                    <a href="/admin-c/admin-claim-received-email.php" class="govuk-link">C - School Business Professionals</a>
                                </td>
                            </tr>
                            <tr>&nbsp;</tr>
                        </tbody>
                    </table>
                    <table class="govuk-table cols-2 unstriped">
                        <thead class="govuk-table__head">
                            <tr class="govuk-table__row">
                                <th class="govuk-table__header col-1" scope="col">Teachers' Benefits Portal<br>
                                    <span class="sub-heading">Initial concepts</span></th>
                                <th class="govuk-table__header col-2" scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="govuk-table__body">
                            <tr class="govuk-table__row">
                                <td class="govuk-table__cell" valign="top">
                                    <a href="/teacher-benefits-portal/dashboard.php" class="govuk-link">Concept A</a>
                                    <ul style="font-size: 80%;">
                                        <li>a portal that displays all available, active, elapsed, and 'future' teacher benefits</li>
                                        <li>All information except current timetable is pulled in automatically</li>
                                        <li>Retention payment is based on assumed policy that requires teacher to declare actually teaching 50%+ in eligibile subject</li>
                                    </ul>
                                </td>
                                <td class="govuk-table__cell" valign="top">

                                </td>
                            </tr>
                            <tr>&nbsp;</tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <?php include("includes/javascript.php"); ?>
    </body>

    </html>
