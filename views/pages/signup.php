<div class="container">


      <div  class="form">
        <form action="" id="contactform" method="POST" > 
          <p class="contact"><label for="name">Name</label></p> 
          <input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text" value="<?php if(isset($_POST['signup'])) { echo $_POST['name']; } ?>"> 
           
          <p class="contact"><label for="email">Email</label></p> 
          <input id="email" name="email" placeholder="example@domain.com" required="" type="email" value="<?php if(isset($_POST['signup'])) { echo $_POST['email']; } ?>"> 
                
                <p class="contact"><label for="username">Create a username</label></p> 
          <input id="username" name="username" placeholder="username" required="" tabindex="2" type="text" value="<?php if(isset($_POST['signup'])) { echo $_POST['username']; } ?>"> 
           
                <p class="contact"><label for="password">Create a password</label></p> 
          <input type="password" id="password" name="password" required=""> 
                <p class="contact"><label for="repassword">Confirm your password</label></p> 
          <input type="password" id="repassword" name="repassword" required=""> 
        
            <p class="contact"><label for="gender">Gender </label></p> 
            <select class="select-style gender" name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            </select><br><br>
                       
            <input class="buttom" name="signup" id="submit" tabindex="5" value="Sign me up!" type="submit">    
   </form> 
</div>      
</div>