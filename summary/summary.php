<?php ?>

<?php include ('includes/summary-head.php'); ?>

<style>
    body {
        background: white;
        color: #444;
    }

    h3 {
        font-weight: bold;
    }

    .access-icon {
        font-size: 48px;
        color: #3D9AD9;
    }

    .scrollToTop {
        width: auto;
        height: auto;
        padding: 10px;
        text-align: center;
        border-radius: 5px;
        font-weight: bold;
        color: #fff;
        text-decoration: none;
        position: fixed;
        bottom: 10px;
        right: 10px;
        display: none;
        background: #CCDEF1;
        z-index: 999;
        font-size: 10px;
    }

    .scrollToTop:hover {
        text-decoration: none;
        color: #fcfcfc;
        background: #CCDEF1;
    }

</style>

<body>

    <div class="grid-container">

        <ol class="vertical menu sticky scrollToTop" data-magellan>
            <li><a href="#summary">Overview</a></li>
            <li><a href="#what-weve-done">What we've done</a></li>
            <li><a href="#what-weve-learned-2">What we've learned</a>
            </li>
        </ol>

        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell wow fadeIn" style="text-align: center; margin-top: 120px;" wow-duration="1s">
                <span style="font-size: 8vmax; font-weight: bold;">Teacher payment service</span>
            </div>
            <div class="cell wow fadeIn" style="text-align: center; padding-bottom: 40px; margin-bottom: 50vh;" wow-duration="2s">
                <ul id="main-menu" class="menu vertical" data-magellan>
                    <li>
                        <a href="#summary">
                            <h4>1. Overview</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#what-weve-done">
                            <h4>2. What we've done</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#what-weve-learned-2">
                            <h4>3. What we've learned</h4>
                        </a>
                        <p>
                            <a href="#what-weve-learned-2">- Teachers: claim back your student loan repayments</a>
                            <a href="#what-weve-learned-mpr">- Maths and physics retention payments</a>
                        </p>
                    </li>
                </ul>
            </div>
            <div id="summary" class="cell" data-magellan-target="summary">
                <div class="grid-x grid-padding-x">
                    <div class="cell wow fadeInLeft" data-wow-duration="1s">
                        <H2 style="font-size: 15vmin; color: #0072C6;">Overview</H2>
                    </div>
                    <div id="intro" class="large-6 medium-12 cell small-order-2 medium-order-2 large-order-1 wow fadeInLeft" style="z-index: 1;">
                        <h4>Recruiting and retaining high-quality teachers is central to achieving the DfE mission of giving young people the education they need to have the the best opportunities in life</h4>
                        <br/>
                        <p><strong>But</strong>, teacher applications are decreasing. Last year the figure decreased by 29%.</p>
                        <p>To encourage recruitment and retention, the DfE has commissioned a 10 year pilot that reimburses the student loan repayments of new teachers.</p>

                        <p>We conducted an 'alpha' on the scheme from October 2018 to January 2019.</p>
                        <p>In parallel, we extended our scope to conduct a 'mini-discovery' into the proposed <span data-tooltip tabindex="1" title="An annual, tax-free payment to specialist maths or physics teachers with the aim of retaining them as teachers">maths and physics retention payments</span> scheme.</p>
                    </div>
                    <div class="large-6 medium-12 cell small-order-1 medium-order-1 large-order-2 wow fadeInRight" style="text-align: center; padding-bottom: 40px;" data-wow-duration="1s">
                        <img src="img/macbook.png"><br>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-x grid-padding-x grid-margin-x" style="margin-top: 50vh;">
            <div id="what-weve-done" class="cell wow fadeIn" data-magellan-target="what-weve-done" wow-duration="1s">
                <span style="color: #0072C6 !important;">What we've done</span><br/>
                <h2 style="color: #0072C6 !important;">in 7 sprints</h2>
            </div>
        </div>

        <div class="grid-x grid-padding-x grid-margin-x">
            <div id="tasks" class="cell" style="margin-top: 20px;">
                <div class="timeline">

                    <div class="timeline-item wow fadeInRight" data-wow-duration="1s">
                        <div class="timeline-icon">
                            <i id="torso" class="fi-torsos-all zurb-icon"></i>
                        </div>
                        <div class="timeline-content">
                            <div class="grid-x grid-padding-x timeline-content-not-icon wow fadeInRight" data-equalizer="fooB">
                                <div class="large-6 medium-6 cell text-center" data-equalizer-watch="fooB"><img src="img/group.svg" style="height: 100%;"><br/></div>
                                <div class="large-6 medium-6 cell" data-equalizer-watch="fooB"><span class="really-really-big">111</span>
                                    <h4 class="big-icon-bg padd-top">users interviewed</h4>
                                    <a href="https://drive.google.com/open?id=1Ll8tq3b288UN_37wNyEHPfo40kSmH6y-" target="_blank">View the insights</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-item wow fadeInLeft" data-wow-duration="1s">
                        <div class="timeline-icon">
                            <i id="torso" class="fi-torsos-all-female zurb-icon"></i>
                        </div>
                        <div class="timeline-content">
                            <div class="grid-x grid-padding-x timeline-content-not-icon" data-equalizer="fooC">
                                <div class="large-6 medium-6 cell text-center small-order-1 medium-order-2" data-equalizer-watch="fooC" style="padding: 2vmax 10vmax;"><img src="img/interview.svg" class="big-icon-bg"><br/></div>
                                <div class="large-6 medium-6 cell text-right small-order-2 medium-order-1" data-equalizer-watch="fooC"><span class="really-really-big big-icon-bg">77</span>
                                    <h4 class="big-icon-bg padd-top">hours of interviews</h4>
                                    <a href="https://drive.google.com/open?id=16IrA5d83_0WhiI5ZaKA_hr0pq2WDa6dvUdstgVGuWek" target="_blank">View the most recent interview summaries</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-item wow fadeInRight" data-wow-duration="1s">
                        <div class="timeline-icon">
                            <i id="torso" class="fi-results-demographics zurb-icon"></i>
                        </div>
                        <div class="timeline-content">
                            <div class="grid-x grid-padding-x timeline-content-not-icon" data-equalizer="fooO">
                                <div class="large-6 medium-6 cell text-center" data-equalizer-watch="fooO">
                                    <img src="img/event.svg" style="height: 100%;">
                                </div>
                                <div class="large-6 medium-6 cell" data-equalizer-watch="fooO"><span class="really-really-big">6</span>
                                    <h4 class="big-icon-bg padd-top">research methodologies used</h4>
                                    <p>Face-to-face in school<br/> Lab-based<br/>Remote moderated<br/> Remote unmoderated<br/> Guerillia
                                        <br/> Card sorting</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-item wow fadeInLeft" data-wow-duration="1s">
                        <div class="timeline-icon">
                            <i id="torso" class="fi-torsos-all-female zurb-icon"></i>
                        </div>
                        <div class="timeline-content">
                            <div class="grid-x grid-padding-x timeline-content-not-icon" data-equalizer="fooC">
                                <div class="large-6 medium-6 cell text-center small-order-1 medium-order-2" data-equalizer-watch="fooC" style="padding: 1vmax;"><img src="img/teacher-persona.svg" class="big-icon-bg" style="height: 100%;"><br/></div>
                                <div class="large-6 medium-6 cell text-right small-order-2 medium-order-1" data-equalizer-watch="fooC"><span class="really-really-big big-icon-bg">7</span>
                                    <h4 class="big-icon-bg padd-top">user personas created for two user groups</h4>
                                    <a href="https://drive.google.com/open?id=1ImSp6ykhZWtw4TbPp0o3VOsmaVz_dl-T" target="_blank">View the personas</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-item wow fadeInRight" data-wow-duration="1s">
                        <div class="timeline-icon">
                            <i id="torso" class="fi-results-demographics zurb-icon"></i>
                        </div>
                        <div class="timeline-content">
                            <div class="grid-x grid-padding-x timeline-content-not-icon" data-equalizer="fooO">
                                <div class="large-6 medium-6 cell text-center" data-equalizer-watch="fooO" style="padding: 2vmax 10vmax;">
                                    <img src="img/prototype-mac.svg">
                                </div>
                                <div class="large-6 medium-6 cell" data-equalizer-watch="fooO"><span class="really-really-big">19</span>
                                    <h4 class="big-icon-bg padd-top">prototypes usability tested</h4>
                                    <a href="https://dfe-tslr.herokuapp.com/launch" target="_blank">View the TSLR prototypes</a><br/>
                                    <a href="https://drive.google.com/open?id=19pVyPkSsi6UUmT1Q816r0h-_fT6H70-M" target="_blank">View the paper TSLR prototype</a><br/>
                                    <a href="https://dfe-rps.herokuapp.com" target="_blank">View the MPR prototypes</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div class="grid-x grid-padding-x grid-margin-x" style="margin-top: 50vh;">
            <div id="what-weve-learned" class="cell wow fadeIn" data-magellan-target="what-weve-learned" wow-duration="1s">
                <span style="color: #0072C6 !important;">The start of alpha...</span>
            </div>
        </div>

        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell wow fadeIn" style="text-align: center; margin-top: 120px;" wow-duration="2s">
                <br/><br/>
                <h2>Our first task was to define the <a href="https://drive.google.com/open?id=1wcR7HjW_hTX2sdVLORQ_NCwm9xcw64_cB3IX3T9ERKU" target="_blank" title="View the full problem statement with links to evidence">problem</a></h2><br/><br/>
                <br/><br/>
                <h4 class="standout wow fadeIn">"Schools in more challenging areas are finding it harder to recruit and retain teachers, particularly in the subjects of languages (excluding English), science and computer science."</h4><br/><br/><br/><br/><br/><br/><br/>
                <h2>We then gave ourselves the following <a href="https://drive.google.com/open?id=1c3uXEKQnV6ypkOqr8OgoBTu6i_5maARfdMiVoMVzbDw" target="_blank" title="View the earlier iterations of the mission statement">mission</a>:</h2>
                <br/><br/><br/><br/>
                <h4 class="standout wow fadeIn">"Make it quick and easy for teachers to receive a student loan repayment, if they teach a priority subject in an area of greatest need."</h4><br/><br/><br/><br/><br/><br/><br/>
                <h2>We then prioritised our assumptions, used research insights to prove or disprove them and formed <a href="https://docs.google.com/document/d/1AIMLw1goyOBPy4K2ZbnxjLa31nfJDHPzS_8ljeDAmDw/edit" target="_blank">hypotheses</a> to test our proposed solutions in beta</h2><br/><br/>
                <br/><br/><br/><br/><br/><br/><br/>
            </div>
        </div>

        <div class="grid-x grid-padding-x grid-margin-x" style="margin-top: 50vh;">
            <div id="what-weve-learned-2" class="cell wow fadeIn" data-magellan-target="what-weve-learned-2" wow-duration="1s">
                <span style="color: #0072C6 !important;">What we've learned about 'teachers: claim back your student loan repayments'</span>
            </div>
        </div>

        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell wow fadeIn" style="text-align: center; margin-top: 80px; margin-bottom: 80px;" wow-duration="1s">
                <h2>Policy:</h2>
            </div>
        </div>

        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell wow fadeIn">
                <div class="grid-x grid-padding-x grid-margin-x">
                    <div class="large-6 medium-6 cell theme-cell wow fadeInLeft" style="text-align: center;" wow-duration="1s">
                        <h4 style="text-align: center;">Policy aim</h4>
                        <p style="text-align: left;">The Department for Education (DfE) wants to encourage new teachers to remain in the profession, teaching certain subjects in particular locations.</p>
                        <p style="text-align: left;">To do this, DfE want to reimburse teachers any student loan payments that were made through their wages between 6 April 2018 and 5 April 2019. To be eligible, they need to teach the following subjects for over 50% of their time: languages (excluding English), physics, chemistry, biology and computer science.</p>
                        <p style="text-align: left;">The belief is this will increase education standards in these locations and encourage future teachers to take up posts in particular locations teaching these subjects.</p>
                        <div class="grid-x grid-padding-x">
                            <div class="cell" style="padding: 0%;">
                                <span class="emoji">🎯</span>
                            </div>
                        </div>
                    </div>
                    <div class="large-6 medium-6 cell theme-cell wow fadeInRight" style="text-align: center;" wow-duration="1s">
                        <h4 style="text-align: center;">Eligibility</h4>
                        <p style="text-align: left;">The eligibility criteria can be quite complex, depending on the circumstances of the teacher. We did <a href="https://docs.google.com/document/d/1QGIFMGfhHFRo-BUlZTHYYR5b8t2-joqyVKXrRZU_eL8/edit?ts=5c07b8d2#heading=h.l4gz2ca6rm52" target="_blank">extensive research</a> to make sure our service met the intent of the policy. For example:</p>
                        <p style="text-align: left;">Currently the policy states that a teacher must have been teaching an eligible subject for at least 50% of their time.</p>
                        <p style="text-align: left;"> Our research suggests asking the teacher what they were employed to teach during the previous tax year instead. This allows us to understand their intent, and thus target the right teachers to align better with the policy's objective.
                        </p>
                        <div class="grid-x grid-padding-x">
                            <div class="cell" style="padding: 0%;">
                                <span class="emoji">👩🏻‍🏫</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell wow fadeIn" style="text-align: center; margin-top: 80px; margin-bottom: 80px;" wow-duration="1s">
                <h2>Discovering the service:</h2>
            </div>
        </div>

        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell wow fadeIn">
                <div class="grid-x grid-padding-x grid-margin-x">
                    <div class="large-6 medium-6 cell theme-cell wow fadeInLeft" style="text-align: center;" wow-duration="1s">
                        <h4 style="text-align: center;">Hearing about it</h4>
                        <p style="text-align: left;">Teachers will likely find out about the scheme from their school, mailing lists, or via teacher Facebook or WhatsApp groups</p>
                        <div class="grid-x grid-padding-x">
                            <div class="large-12 medium-12 cell"><br>
                                <img src="img/social-icons.svg" style="text-align: center; height: 90%;  margin-bottom: 10%;">
                            </div>
                        </div>
                    </div>
                    <div class="large-6 medium-6 cell theme-cell wow fadeInRight" style="text-align: center;" wow-duration="1s">
                        <h4 style="text-align: center;">Service name</h4>
                        <p style="text-align: left;">Teachers said the title of the service makes sense, but all the eligibility critera aren't explicit in the title
                        </p>
                        <div class="grid-x grid-padding-x">
                            <div class="cell">
                                <img src="img/name.png" style="text-align: center; padding-top: 10%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell wow fadeIn" style="text-align: center; margin-top: 100px; margin-bottom: 80px;">
                <h2>Making a claim:</h2>
            </div>
        </div>

        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell">
                <div class="grid-x grid-padding-x grid-margin-x">
                    <div class="large-4 medium-6 cell theme-cell wow fadeInLeft" style="text-align: center;">
                        <h4 style="text-align: center;">Getting data from HMRC</h4>
                        <p style="text-align: left;">Unfortunately we cannot get data from HMRC in our first year. </p>
                        <p style="text-align: left;">So, our latest design of the service requires the school to check the teacher's information (but, the service still asks for tax years so that it could work with HMRC in future).</p>
                        <div class="grid-x grid-padding-x">
                            <div class="cell" style="padding: 5% 20%;">
                                <img src="img/hmrc.svg">
                            </div>
                        </div>
                    </div>
                    <div class="large-4 medium-6 cell theme-cell wow fadeIn" style="text-align: center;">
                        <h4 style="text-align: center;">Teachers submitting their data</h4>
                        <p style="text-align: left;">We’ve seen and heard teachers say they could complete an application fairly easily and would gather the needed information before starting
                        </p>
                        <div class="grid-x grid-padding-x">
                            <div class="cell" style="padding: 0%;">
                                <span class="emoji">👨🏻‍🏫</span>
                            </div>
                        </div>
                    </div>
                    <div class="large-4 medium-6 cell theme-cell wow fadeInRight" style="text-align: center;">
                        <h4 style="text-align: center;">Filtering applicants</h4>
                        <p style="text-align: left;">
                            We've learnt that some teachers:</p>
                        <ul style="text-align: left;">
                            <li>will not read the eligibility criteria</li>
                            <li>do not know what local authority area their school is in</li>
                        </ul>
                        <p style="text-align: left;">So, we've built an <a href="https://dfe-tslr.herokuapp.com/z/check-intro" target="_blank">eligibility checker</a> which we believe will allow teachers to check if they're eligible, quickly. We recommend more research into this in beta, and, if it meets user needs, including it in the beta service.</p>

                        <div class="grid-x grid-padding-x">
                            <div class="cell" style="padding: 10%;">
                                <img src="img/eligibility-checker.png">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell wow fadeIn" style="text-align: center; margin-top: 100px; margin-bottom: 80px;">
                <h2>Verifying a claim:</h2>
            </div>
        </div>

        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell">
                <div class="grid-x grid-padding-x grid-margin-x">

                    <div class="large-4 medium-6 cell theme-cell wow fadeIn" style="text-align: center;">
                        <h4 style="text-align: center;">Who to send claims to</h4>
                        <p style="text-align: left;">
                            More research is needed in beta to decide how we can help eligible schools prepare for the service. We need to know the best way to:</p>
                        <ul style="text-align: left;">
                            <li>contact the school</li>
                            <li>contact the most appropriate person in the school</li>
                        </ul>
                        <p style="text-align: left;">
                            We learnt that this differs between schools.
                        </p>
                        <div class="grid-x grid-padding-x">
                            <div class="cell" style="padding: 0%;">
                                <span class="emoji">📨</span>
                            </div>
                        </div>
                    </div>
                    <div class="large-4 medium-6 cell theme-cell wow fadeInLeft" style="text-align: center;">
                        <h4 style="text-align: center;">Who checks claims</h4>
                        <p style="text-align: left;">We learnt that there is no single role that can check all the information needed – for example, many schools have a separate finance department to the team that can access teachers' timetables. </p>
                        <p style="text-align: left;">
                            Ultimately the headteacher is responsible for making sure the checks are accurate, so we'd recommend undertaking more research with headmasters to decide the best way to design this part of the service.</p>
                        <div class="grid-x grid-padding-x">
                            <div class="cell" style="padding: 0%;">
                                <span class="emoji">✅</span>
                            </div>
                        </div>
                    </div>
                    <div class="large-4 medium-6 cell theme-cell wow fadeIn" style="text-align: center;">
                        <h4 style="text-align: center;">Fraud</h4>
                        <p style="text-align: left;">We've documented the <a href="https://drive.google.com/drive/u/0/folders/1jVgb8h9CVZg56zmY14tPP8hwtiaLAe0p" target="_blank">fraud risks</a>, and developed <a href="https://drive.google.com/open?id=1U-aVDF77knCVt7b38aLgPnZWGEp5ljXXWpFQRysrodU" target="_blank">anti-personas</a> to mitigate against those risks.<br/></p>
                        <div class="grid-x grid-padding-x">
                            <div class="cell" style="padding: 0%;">
                                <span class="emoji">🕵🏻‍♀️</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell wow fadeIn" style="text-align: center; margin-top: 100px; margin-bottom: 80px;">
                <h2>Other findings:</h2>
            </div>
        </div>

        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell wow fadeIn">
                <div class="grid-x grid-padding-x grid-margin-x">

                    <div class="large-4 medium-6 cell theme-cell wow fadeInLeft" style="text-align: center;">
                        <h4 style="text-align: center;">Verify</h4>
                        <p style="text-align: left;">Teachers were unaware of GOV.UK Verify but thought some kind of identity process was needed and found Verify useable</p>
                        <div class="grid-x grid-padding-x">
                            <div class="cell" style="padding: 0%;">
                                <img src="img/verify.png">
                            </div>
                        </div>
                    </div>
                    <div class="large-4 medium-6 cell theme-cell wow fadeIn" style="text-align: center;">
                        <h4 style="text-align: center;">Contact preferences</h4>
                        <p style="text-align: left;">Preference was for DfE to contact teachers via email rather than other means
                        </p>
                        <div class="grid-x grid-padding-x">
                            <div class="cell" style="padding: 0%;">
                                <span class="emoji">📧</span>
                            </div>
                        </div>
                    </div>
                    <div class="large-4 medium-6 cell theme-cell wow fadeInRight" style="text-align: center;">
                        <h4 style="text-align: center;">Digital confidence</h4>
                        <p style="text-align: left;">We found all our users to be confident or expert when scoring against the assisted digital scale. Teachers and school support staff regularly use a computer during their working week as part of their role</p>
                        <div class="grid-x grid-padding-x">
                            <div class="cell" style="padding: 0%;">
                                <span class="emoji">💪🏻</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell" style="text-align: center; margin-top: 100px; margin-bottom: 80px;">
                <h2>User quotes:</h2>
            </div>
        </div>

        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="callout cell primary wow fadeIn">
                <div class="grid-x grid-padding-x grid-margin-x">
                    <div class="large-8 medium-12 cell small-order-2 medium-order-2 large-order-1 wow fadeInLeft" style="z-index: 1;">
                        <h5>"Very user friendly and actually the process has been really quick. Questions have been asked well".<br/><br/>"It's quite easy, user friendly and straightforward. The process was very simple"</h5>

                        <p>- Teachers</p>
                    </div>
                    <div class="large-4 medium-12 cell small-order-1 medium-order-1 large-order-2 wow fadeInRight" style="text-align: center;" data-wow-duration="1s">
                        <img src="img/teacher-2.svg" style="height: 100%;">
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-x grid-padding-x grid-margin-x" style="margin-top: 5vmax;">
            <div class="callout cell primary wow fadeIn">
                <div class="grid-x grid-padding-x grid-margin-x">
                    <div class="large-4 medium-12 cell small-order-1 medium-order-1 large-order-1 wow fadeInRight" style="text-align: center;" data-wow-duration="1s">
                        <img src="img/sbp-2.svg" style="height: 100%;">
                    </div>
                    <div id="intro" class="large-8 medium-12 cell small-order-2 medium-order-2 large-order-2 wow fadeInLeft" style="z-index: 1;">
                        <h5>"It makes me feel at ease if this is the process. It’s a very simple, I think people would be happy with this"<br/><br/>"Anything that can help retain and recruit will be helpful. It’ll be a good incentive."<br/><br/>"It’s great for the teachers if they're going to get the reimbursement"</h5>

                        <p>- School Support Staff</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell" style="text-align: center; margin-top: 100px; margin-bottom: 80px;">
                <h2>The plan for beta...</h2>
            </div>
        </div>

        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="large-6 medium-6 cell theme-cell wow fadeInRight" style="text-align: center;">
                <h3>Communication plan</h3>
                <p style="text-align: left;">There are 2 types of communication we need to do:</p>
                <ol style="text-align: left;">
                    <li>Targeted communication to the people and schools we think will be eligible – this should tell them that the service exists and help them prepare</li>
                    <li>Wider marketing of the service to:
                        <ul style="text-align: left;">
                            <li>potential teachers</li>
                            <li>teachers of non-eligible subjects</li>
                            <li>teachers of eligible subjects in other schools in the area and surrounding areas</li>
                        </ul>
                    </li>
                </ol>
                <p style="text-align: left;"><a href="https://docs.google.com/document/d/1QGIFMGfhHFRo-BUlZTHYYR5b8t2-joqyVKXrRZU_eL8/edit#heading=h.70ly8v5iuguf" target="_blank">View the communication plan</a></p>
                <div class="grid-x grid-padding-x">
                    <div class="cell" style="padding: 0%;">
                        <span class="emoji">🗣</span>
                    </div>
                </div>
            </div>
            <div class="large-6 medium-6 cell theme-cell wow fadeInRight" style="text-align: center;">
                <h3>Design and research plan</h3>
                <p style="text-align: left;">Design and test:</p>
                <ul style="text-align: left;">
                    <li>an effective onboarding process for both teachers and admins</li>
                    <li> unhappy paths </li>
                    <li>'appeal decision' process</li>
                    <li>content to explain how making a claim will affect a user’s benefits entitlement / payments</li>
                </ul>
                <p style="text-align: left;"><a href="https://docs.google.com/document/d/1AIMLw1goyOBPy4K2ZbnxjLa31nfJDHPzS_8ljeDAmDw/edit" target="_blank">View the beta hypotheses</a></p>
                <div class="grid-x grid-padding-x">
                    <div class="cell" style="padding: 0%;">
                        <span class="emoji">🧪</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-x grid-padding-x grid-margin-x" style="margin-top: 50vh;">
            <div id="what-weve-learned-mpr" class="cell" data-magellan-target="what-weve-learned-mpr">
                <span style="color: #0072C6 !important;">What we've learned about 'maths and physics retention payments'</span>
                <h2 style="color: #0072C6 !important;">in 4 weeks</h2>
            </div>
        </div>

        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell" style="text-align: center; margin-top: 80px; margin-bottom: 80px;">
                <h2>Policy:</h2>
            </div>
        </div>

        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell">
                <div class="grid-x grid-padding-x grid-margin-x">
                    <div class="large-6 medium-6 cell theme-cell" style="text-align: center;">
                        <h4 style="text-align: center;">Policy aim</h4>
                        <p style="text-align: left;">The aim of the policy is to use retention payments to keep early years specialist maths and physics teachers in the profession. </p>
                        <p style="text-align: left;">This is because these teachers are leaving the profession at a higher rate compared to other subjects.</p>
                        <div class="grid-x grid-padding-x">
                            <div class="cell" style="padding: 0%;">
                                <span class="emoji">🎯</span>
                            </div>
                        </div>
                    </div>
                    <div class="large-6 medium-6 cell theme-cell" style="text-align: center;">
                        <h4 style="text-align: center;">Eligibility</h4>
                        <p style="text-align: left;">Currently the draft policy states that a teacher must have been teaching an eligible subject for at least 50% of their time.</p>
                        <p style="text-align: left;"> Whilst this is straightforward for maths teachers, physics is more complicated due to the nature of how Science is taught within the curriculum, how teachers are contracted, and the strategies of school science departments.</p>
                        <div class="grid-x grid-padding-x">
                            <div class="cell" style="padding: 10%;">
                                <img src="img/physics.png" style="max-height: 200px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell" style="text-align: center; margin-top: 80px; margin-bottom: 80px;">
                <h2>The difference between maths and physics:</h2>
            </div>
        </div>

        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell">
                <div class="grid-x grid-padding-x grid-margin-x">
                    <div class="large-6 medium-6 cell theme-cell" style="text-align: center;">
                        <h4 style="text-align: center;">Maths</h4>
                        <p style="text-align: left;">It is relatively straightforward using a school timetable for eligible maths teachers to prove that they spent 50% of their time teaching the subject.</p>
                        <p style="text-align: left;">It is also easy for school business professionals to verify these teachers’ 50% teaching time claims the via school timetables</p>
                        <div class="grid-x grid-padding-x">
                            <div class="cell" style="padding: 0%;">
                                <span class="emoji">🧮 🙂</span>
                            </div>
                        </div>
                    </div>
                    <div class="large-6 medium-6 cell theme-cell" style="text-align: center;">
                        <h4 style="text-align: center;">Physics</h4>
                        <p style="text-align: left;">Proving that 50% of a teachers time was spent teaching physics isn't an easy task as it's taught as part of Combined Sciences for KS3 and KS4, and teachers are usually employed and contracted as "Teacher of Science".</p>
                        <p style="text-align: left;">There's also the risk of a number of <a href="https://docs.google.com/document/d/1QGIFMGfhHFRo-BUlZTHYYR5b8t2-joqyVKXrRZU_eL8/edit#heading=h.37vsrlgnqv6" title="View more details on the potential unintended consequences of the policy" target="_blank">unintended and unwanted consequences</a> of that policy criteria, namely:</p>

                        <ul style="text-align: left;">
                            <li>verification delays</li>
                            <li>violation of the policy’s intent</li>
                            <li>departmental conflict</li>
                            <li>gaming the service</li>
                        </ul>

                        <div class="grid-x grid-padding-x">
                            <div class="cell" style="padding: 0%;">
                                <span class="emoji">🥼😖</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell">
                <div class="grid-x grid-padding-x">
                    <div class="cell wow fadeInLeft" data-wow-duration="1s" style="text-align: center; margin-top: 100px; margin-bottom: 80px;">
                        <H2>User quotes</H2>
                    </div>
                    <div class="grid-x grid-padding-x grid-margin-x">
                        <div class="callout cell primary">
                            <div class="grid-x grid-padding-x grid-margin-x">
                                <div class="large-8 medium-12 cell small-order-2 medium-order-2 large-order-1 wow fadeInLeft" style="z-index: 1;">
                                    <h5>"50% of your time - how would that be assessed? I presume the teacher would have to assign this decision to someone. The only thing is that a teacher might only be doing Year 7-9 (KS 3) so it's hard to judge from a 50% perspective.<br/><br/>Certainly from my perspective - this year I might not be 50% physics but the last two years it probably was - who would be judging that?"</h5>

                                    <p>- Science Teacher</p>
                                </div>
                                <div class="large-4 medium-12 cell small-order-1 medium-order-1 large-order-2 wow fadeInRight" style="text-align: center;" data-wow-duration="1s">
                                    <img src="img/teacher-1.svg" style="height: 100%;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-x grid-padding-x grid-margin-x" style="margin-top: 5vmax;">
                        <div class="callout cell primary">
                            <div class="grid-x grid-padding-x grid-margin-x">
                                <div class="large-4 medium-12 cell small-order-1 medium-order-1 large-order-1 wow fadeInRight" style="text-align: center;" data-wow-duration="1s">
                                    <img src="img/sbp.svg" style="height: 100%;">
                                </div>
                                <div id="intro" class="large-8 medium-12 cell small-order-2 medium-order-2 large-order-2 wow fadeInLeft" style="z-index: 1;">
                                    <h5>"That's a tough one. I'd speak to the head of department again and he would have to check their timetable. Although that's really difficult because they certainly don't specialise for KS3, Year 7, 8, 9. <br/><br/>At KS4 there is specialised science and sometimes combined science."</h5>

                                    <p>- School Business Professional</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell" style="text-align: center; margin-top: 100px; margin-bottom: 80px;">
                <h2>Next steps:</h2>
            </div>
        </div>

        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="large-6 medium-6 cell theme-cell wow fadeInRight" style="text-align: center;">
                <h3>Policy recommendation plan</h3>
                <p style="text-align: left;">
                    We think that using a teacher's <span data-tooltip tabindex="1" title="Teachers who qualified via PGCE, School Direct and SCITT teacher training routes are awarded a specialist teaching qualification">qualification specialism</span> as the eligibility criteria rather than 50% of their time spent teaching will be more effective. This is because this matches the intent of the policy to retain specialist maths and physics teachers.</p>
                <p style="text-align: left;">We'd recommend researching this further.</p>

                <div class="grid-x grid-padding-x">
                    <div class="cell" style="padding: 0%;">
                        <span class="emoji">📜</span>
                    </div>
                </div>
            </div>
            <div class="large-6 medium-6 cell theme-cell wow fadeInRight" style="text-align: center;">
                <h3>Recruit more users</h3>
                <p style="text-align: left;">We plan to recruit more users for research via:</p>
                <ul style="text-align: left;">
                    <li>a mailing list of science teachers - these are teachers who have left their details for research in discovery</li>
                    <li>a sign up form on the 'maths and physics retention payment' gov.uk page - so eligible teachers can express an interest in research</li>
                </ul>

                <p style="text-align: left;">We also believe it would be beneficial to research with:</p>
                <ul style="text-align: left;">
                    <li>heads of science departments</li>
                    <li>head teachers’ personal assistants</li>
                    <li>specialist physics teachers with ‘other’ types of teaching qualifications routes
                    </li>
                </ul>

                <div class="grid-x grid-padding-x">
                    <div class="cell" style="padding: 0%;">
                        <span class="emoji">👥</span>
                    </div>
                </div>

            </div>
        </div>

        <hr>

        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell">
                <br/><br/><a href="index.php">Back to index</a><br/><br/>
            </div>
            <div class="cell">
                <span><a target="_blank" href="http://www.hippodigital.co.uk"><img src="img/hippo-svg.svg" width="18px !important;"></a></span>
            </div>
        </div>

    </div>

    <?php include ('includes/summary-js.php'); ?>

</body>

</html>
