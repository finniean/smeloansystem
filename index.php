<?php $title='Login' ; include($_SERVER[ 'DOCUMENT_ROOT']. '/required/header.php');?>

<div class="form">
<img src="/img/logo001.png" style="width: 200px; height: 200px;">
<!--CHOICES-->
  <ul class="tab-group">
        <li class="tab active"><a href="#login">Login</a></li>
        <li class="tab"><a href="#signup">Sign up</a></li>
      </ul>
<!--END-->


        <div class="tab-content"> 
        <div id="login">   
     
          
          <form action="/php/login.php" method="post">
          
            <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="username"required autocomplete="off" name="username" />
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="password" />
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>
          </div>

 

        
        <!--SIGN UP-->

        <div id="signup">   
      
          
          <form action="create_process.php" method="POST">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="username"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block"/>Register</button>
          
          </form>

        </div>
      </div><!-- tab-content -->
</div>

<?php include($_SERVER[ 'DOCUMENT_ROOT']. '/required/footer.php');?>