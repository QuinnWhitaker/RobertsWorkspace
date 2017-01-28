<!DOCTYPE html>
<!--
All rights reserved. Copyright Robert Roy 2016.
-->
<?php
include_once "util.php";
util::printheader("Robert's Project Portfolio");
//TODO: programatically generate list from some sort of database
//TODO: Responsive images/load images
?>

<div class="centered" style="max-width:1280px;margin-top:15px;">
    <div class="contentdiv projectcontainer">
        <a class='flexFull' href="<?= util::$GITHUB ?>">
            <div class='imagediv'>
                <div class="projectsquare">
                    <div class='contentdiv projectimage'>
                        <div class='flexFull'><h3>RobertsWorkspace.com</h3></div>
                        <p>This website was created to showcase my programming.
                            Code is available on GitHub. Click here to see it.</p>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="contentdiv projectcontainer">
        <a class='flexFull'  href="http://web.archive.org/web/20160312232628/http://mymoneyfees.com/">
            <div class="projectsquare">
                <div class='contentdiv projectimage'>
                    <div class='flexFull'><h3>MyMoneyFees.com</h3></div>
                    <p>I did substantial work on this website before I had
                        researched responsive design. The website was designed
                        on a WordPress platform. The current version has been heavily
                        modified since then. An archived version is linked here courtesy
                        of archive.org.</p>
                </div>
            </div>
        </a>
    </div>
    <div class="contentdiv projectcontainer">
        <a class='flexFull' href="http://www.numbersintowords.com">
            <div class='imagediv'>
                <div class="projectsquare">
                    <div class='contentdiv projectimage'>
                        <div class='flexFull'><h3>NumbersIntoWords.com</h3></div>
                        <p>This website takes (almost) any numerical input and outputs
                            it into words. (10<sup>3007</sup>-1 to -10<sup>3007</sup>+1
                            with support for up to
                        3006 characters after the decimal!</p>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="contentdiv projectcontainer">
        <a class='flexFull' href="http://lightspeed.robertsworkspace.com">
            <div class='imagediv'>
                <div class="projectsquare">
                    <div class='contentdiv projectimage'>
                        <div class='flexFull'><h3>Light Speed!</h3></div>
                        <p>An animation I spent a little while making. It looks like
                            you are cruising through space. Check it out, if you're
                            interested.</p>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="contentdiv projectcontainer">
        <a class='flexFull'href="http://clockpuncher.robertsworkspace.com">
            <div class='imagediv'>
                <div class="projectsquare">
                    <div class='contentdiv projectimage'>
                        <div class='flexFull'><h3>Clock Puncher</h3></div>
                        <p>A website I'm collaborating with some friends on. So far
                        it can handle login sessions for the test user (u: test@test.test p: password)</p>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="contentdiv projectcontainer">
        <a class='flexFull' href="<?= util::$ROBERTSANALYTICS ?>">
            <div class='imagediv'>
                <div class="projectsquare">
                    <div class='contentdiv projectimage'>
                        <div class='flexFull'><h3>Robert's Analytics</h3></div>
                        <p>This page displays analytics information gathered on this website.
                            It is going to supply more information in the very near future.</p>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="contentdiv projectcontainer">
        <a class='flexFull' href="<?= util::$IPDATA ?>">
            <div class='imagediv'>
                <div class="projectsquare">
                    <div class='contentdiv projectimage'>
                        <div class='flexFull'><h3>About You</h3></div>
                        <p>I've been playing around with some IP geolocating APIs.
                            If you're curious what websites can see about you,
                            click here!</p>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
<?php
util::printfooter();
?>