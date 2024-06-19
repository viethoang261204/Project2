<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Popup Login Form Design | CodingNepal</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="center">
         <input type="checkbox" id="show">
         <label for="show" class="show-btn">View Form</label>
         <div class="container">
            <label for="show" class="close-btn fas fa-times" title="close"></label>
            <div class="text">
               Login Form
            </div>
            <form method="post" action="{{route('user.account.signinProcess')}}" enctype="multipart/form-data">
             @csrf               
              <div class="data">
                  <label>Enter your email/label>
                  <input type="text" id="email" name="email" value="{{old('email')}}" required>
               </div>
               <div class="data">
                  <label>Password</label>
                  <input type="password" id="password" name="password" value="{{old('password')}}" required>
               </div>
               <div class="forgot-pass">
                  <a href="#">Forgot Password?</a>
               </div>
               <div class="btn">
                  <div class="inner"></div>
                  <button type="submit">Login</button>
               </div>
               <div class="signup-link">
                  Not a member? <a href="{{route('user.account.signup')}}">Signup now</a>
               </div>
            </form>
         </div>
      </div>
   </body>
</html> 
