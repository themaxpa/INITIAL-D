<?php
include './header.php';
?>

<div class="f-container" style="
     padding: 0px 100px 0px 100px;
    width: 100%;
    height: 100dvh;
    margin-bottom: 100px;
    border: 1px solid #fff;
 ">

<div class="f-wrapper" style="margin-top: 100px; 
 background-color: #20232b;
  width: 500px;
  padding: 30px;
  border-radius: 10px;
box-shadow:#fff 5px;


">
        <header>
    <h1 class="h1-txt">Reset password</h1>
    <p class="p-txt">Enter your email address </p>
    <form action="./SendPasswordReset.php" method="post">
        <!-- <label for="url"></label> -->
        <input type="email" name="username" class="form-control" placeholder="  email" required style="width:100%;
height:60px;
border-radius: 5px;
font-size: 20px;
padding: 0 17px;
border: 1px solid #ee244e;
margin-bottom: 5px;">
        <button type="submit" class="f-btn" style="width: 100%;
border:none;
outline: none;
color: #fff;
cursor: pointer;
padding: 15px 0;
margin-top: 20px;
border-radius: 5px;
background-color: #ee244e;">Send</button>
    </form>
</header>

</div>


</div>








<?php
include './footer.php'
?>
    
