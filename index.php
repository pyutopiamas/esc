
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable=0" />
    <title>BGIMI ESPORTS - OFFICIAL TOURNAMENT</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Teko&display=swap');

            @font-face {
                font-family: pubg;
                src: url('pubg.ttf');
            }

            @font-face {
                font-family: frank;
                src: url('Frank-Regular.ttf')
            }

            @font-face {
                font-family: brixton;
                src: url('Brixton_Wood-Vector.ttf')
            }

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                width: 100%;
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                background: url('https://i.ibb.co/L0H1md7/Picsart-23-07-02-00-48-40-745.jpg') no-repeat;
                touch-action: pan-x pan-y;
            }

            .wrap {
                position: relative;
                width: 100%;
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                background: url('https://i.ibb.co/L0H1md7/Picsart-23-07-02-00-48-40-745.jpg') no-repeat;
                background-size: cover;
                padding: 0 0 120px 0;
            }

            .wrap .headers {
                position: fixed;
                top: 0;
                left: 50%;
                transform: translate(-50%);
                width: 100%;
                height: 50px;
                background: #000;
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding-left: 10px;
                z-index: 999;
                border-bottom: 1px solid #999;
            }

            .headers .logo {
                position: relative;
                width: 120px;
                height: 100%;
            }

            .logo img {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }

            .headers .utils {
                position: relative;
                width: 100%;
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: flex-end;
                gap: 20px;
            }

            .utils .socialmedia {
                position: relative;
            }

            .socialmedia ul {
                position: relative;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 20px;
            }

            .socialmedia ul li {
                list-style: none;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .socialmedia ul li i {
                color: #fff;
                font-size: 20px;
            }

            .utils .menu {
                position: relative;
                width: 50px;
                height: 100%;
                background: #0000;
                display: flex;
                align-items: flex-end;
                justify-content: center;
                flex-direction: column;
                padding: 0 13px;
                gap: 5px;
            }

            .menu .bar {
                width: 100%;
                height: 2px;
                background: #fff;
            }

            .menu .bar:nth-child(2) {
                width: 50%;
            }

            .wrap .banner {
                position: relative;
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
            }

            .banner .logo {
                max-width: 180px;
                filter: invert(1);
            }
            .banner .ba-text {
                margin-top: 5px;
                color: #00000;
                font-family: 'frank';
                font-size: 13px;
            }

            .banner h1 {
                font-family: 'brixton';
                color: #000;
                font-size: 3rem;
                letter-spacing: 1.5px;
            }

            .wrap .id-form {
                margin-top: 10px;
                position: relative;
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                padding: 10px;
            }

            .id-form input {
                width: 70%;
                background: rgba(255, 255, 255, .255);
                border: none;
                outline: none;
                padding: 10px;
                font-family: 'frank';
                color: #fff;
            }

            .id-form input::placeholder {
                color: #fff;
            }

            .id-form .check {
                margin-top: 15px;
                position: relative;
                padding: 8PX 10PX;
                background: #00000;
                font-family: 'frank';
                color: #fff;
                font-size: 20px;
                border: none;
            }


            .id-form .alert {
                margin-top: 10px;
                font-family: 'Teko';
                display: none;
                width: 100%;
                padding: 0 10px;
                text-align: center;
            }

            .id-form .alert.wrong,
            .id-form .alert.banned {
                color: red;
            }

            .id-form .alert.valid {
                color: lime;
            }

            .wrap .footer {
                position: absolute;
                bottom: 0;
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                gap: 5px;
                padding: 20px 5px;
                background: #000;
                border-top: 1px solid #999;
            }

            .footer ul {
                position: relative;
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 20px;
            }

            .footer ul li {
                position: relative;
                list-style: none;
            }

            .footer ul li:first-child::before {
                content: '';
                position: absolute;
                top: 3px;
                left: 80px;
                width: 2px;
                height: 15px;
                background: #fff;
            }

            .footer ul li .p-logo {
                width: 70px;
            }

            .footer ul li .k-logo {
                width: 80px;
            }

            .footer .f-desc {
                color: #999;
                font-family: 'Teko';
                font-size: 15px;
            }

            .footer .tos {
                color: #999;
                font-family: 'Teko';
                font-size: 14px;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 10px;
                font-weight: bold;
            }

            @media(min-width: 600px) {

                .wrap,
                .wrap .headers {
                    width: 400px;
                }
            }
        </style>
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
                        <li style="display:none;"
                            onclick="window.location='https://instagram.com/battlegroundsmobilein_official?igshid=YmMyMTA2M2Y='">
                            <i class="fa fa-instagram" aria-hidden="true"></i></li>
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
            <h1>REGISTER NOW!</h1>
            <span class="ba-text">OPPORTUNITIES DON'T KNOCK TWICE</span>
        </div>

        <div class="id-form">
        <form action="register.php" method="POST">
        <center>
            <button type="submit" class="check">JOIN NOW</button>
        </center>
        </form>
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
            <p class="f-desc"> &copy; 2023 KRAFTON, Inc. All rights reserved.</p>
            <div class="tos">
                <span class="ptos">Privacy Policy</span>
                <span class="split">|</span>
                <span class="ptos">Terms of Service</span>
            </div>
        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>
</html>