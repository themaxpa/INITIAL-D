<?php
include './UserHeader.php';
?>
<style>
    /* NAV */
/* From Uiverse.io by javierBarroso */ 
.social-login-icons {
  display: flex;
  align-items: center;
  gap: 10px;
  -webkit-box-reflect: below 5px linear-gradient(transparent, #00000055);
}
.social-login-icons svg {
  width: 40px;
}

.social-icon-1,
.social-icon-1-1,
.social-icon-2,
.social-icon-2-2,
.social-icon-3,
.social-icon-3-3,
.social-icon-4,
.social-icon-4-4 {
  width: 50px;
  height: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50px;
  margin: 20px 0 0px 0;
}

.icon svg {
  fill: #111;
}

.socialcontainer {
  height: 80px;
  overflow: hidden;
}
.social-icon-1 {
  transition-duration: 0.4s;
  background-color: rgb(0, 0, 0);
  transition-timing-function: cubic-bezier(0.46, -0.78, 0.5, 1.56);
}
.social-icon-1 svg,
.social-icon-2 svg,
.social-icon-3 svg,
.social-icon-4 svg {
  opacity: 0;
  transition-duration: 0.5s;
  transition-delay: 0.2s;
}
.social-icon-1-1 {
  transition-duration: 0.4s;
  background-color: rgb(0, 0, 0, 0);
}
.socialcontainer:hover .social-icon-1 {
  transform: translateY(-70px);
}
.socialcontainer:hover .social-icon-1 svg,
.socialcontainer:hover .social-icon-2 svg,
.socialcontainer:hover .social-icon-3 svg,
.socialcontainer:hover .social-icon-4 svg {
  opacity: 1;
}
.social-icon-2 {
  transition-duration: 0.4s;
  transition-timing-function: cubic-bezier(0.46, -0.78, 0.5, 1.56);
  background: linear-gradient(
    72.44deg,
    #ff7a00 11.92%,
    #ff0169 51.56%,
    #d300c5 85.69%
  );
}
.socialcontainer:hover .social-icon-2 {
  transform: translateY(-70px);
}
.social-icon-3 {
  transition-duration: 0.4s;
  transition-timing-function: cubic-bezier(0.46, -0.78, 0.5, 1.56);
  background: #316ff6;
}

.socialcontainer:hover .social-icon-3 {
  transform: translateY(-70px);
}
.social-icon-4 {
  transition-duration: 0.4s;
  transition-timing-function: cubic-bezier(0.46, -0.78, 0.5, 1.56);

  background: linear-gradient(
    180deg,
    rgba(129, 34, 144, 1) 0%,
    rgba(77, 34, 124, 1) 91%
  );
}

.socialcontainer:hover .social-icon-4 {
  transform: translateY(-70px);
}

    /* END  */
    .halfBg {
        width: 100%;
        height: 75vh;
        background-color: gray;
    }

    .whitebg {
        display: flex;
        width: 100%;
        height: 50vh;
        background-color: #fff;
    }

    .whitebgAgain {
        width:100%;
        height:100vh;
        background-color: #fff;
    }

    .hrx {
        background-size: cover;
        width: 30%;
        margin-top: 120px;
        margin-left: 150px;
        height: 1px;
    }

    .gmail {
        color: gray;
    }

    .link {
        margin-top: 180px;
        margin-bottom: 20px;
    }



    .gmail:hover {
        color: gray;
        text-decoration: underline;
    }

    .contactus {
        width: 50%;
    }

    .emailUs {
        width: 50%;
    }

</style>

<div class="halfBg">
    <h1 class="h1-txt" style="color: #fff;  padding-top: 215px; margin-left: 120px; font-size: 70px;">GET IN<br>TOUCh</h1>
    <h4 style="    font-size: 15px;margin-top: 60px;margin-left: 800px;color: #fff; font-weight:200">YOU ARE WELCOME TO CONTACT US WITH GENERAL INQUIRIES<br>THROUGH THE CHANNELS BELOW.</h4>
</div>
<div class="whitebg">
    <div class="contactus">
        <img class="hrx" src="../assets/img/hr.png"></img>
        <h2 style="margin-left: 165px;margin-top: 50px; width:20%">Contact<br> information</h2>
    </div>
    <div class="emailUs" >
        <div class="link"><a href="#" class="gmail">alwinea69@gmail.com</a>
    </div>
    <a class="gmail"> T: +91 62-38-55-97-80</a>
    </div>
</div>
<div class="whitebgAgain">
    <img class="hrx" style="width:80%" src="../assets/img/hr.png">

    <h1 style="color:gray;margin-top:150px;margin-left:120px; font-size:60px;"> THE SHOW<br>&nbsp;&nbsp;&nbsp;&nbsp;MUST<br>&nbsp;&nbsp;GO ON</h1>
<div class="social-login-icons" style="    margin-left: 165px;">
  <div class="socialcontainer">
    <div class="icon social-icon-1-1">
      <svg
        viewBox="0 0 512 512"
        height="1.7em"
        xmlns="http://www.w3.org/2000/svg"
        class="svgIcontwit"
        fill="white"
      >
        <path
          d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"
        ></path>
      </svg>
    </div>
    <div class="social-icon-1">
      <svg
        viewBox="0 0 512 512"
        height="1.7em"
        xmlns="http://www.w3.org/2000/svg"
        class="svgIcontwit"
        fill="white"
      >
        <path
          d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"
        ></path>
      </svg>
    </div>
  </div>
  <div class="socialcontainer">
    <div class="icon social-icon-2-2">
      <svg
        fill="white"
        class="svgIcon"
        viewBox="0 0 448 512"
        height="1.5em"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
        ></path>
      </svg>
    </div>
    <div class="social-icon-2">
      <svg
        fill="white"
        class="svgIcon"
        viewBox="0 0 448 512"
        height="1.5em"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
        ></path>
      </svg>
    </div>
  </div>
  <div class="socialcontainer">
    <div class="icon social-icon-3-3">
      <svg
        viewBox="0 0 384 512"
        fill="white"
        height="1.6em"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z"
        ></path>
      </svg>
    </div>
    <div class="social-icon-3">
      <svg
        viewBox="0 0 384 512"
        fill="white"
        height="1.6em"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z"
        ></path>
      </svg>
    </div>
  </div>
  <div class="socialcontainer">
    <div class="icon social-icon-4-4">
      <svg fill="white" viewBox="0 0 496 512" height="1.6em">
        <path
          d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"
        ></path>
      </svg>
    </div>
    <div class="social-icon-4">
      <svg fill="white" viewBox="0 0 496 512" height="1.6em">
        <path
          d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"
        ></path>
      </svg>
    </div>
  </div>
</div>

</div>

