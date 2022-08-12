<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login </title>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel="stylesheet" type="text/css">


  <link rel="stylesheet" media="screen"
    href="https://cpwebassets.codepen.io/assets/fullpage/fullpage-1580f96ce81ff0a427cf57dda2748ce646c38efc201ae5942a29958cffa6856d.css" />
  <link rel="stylesheet" media="all"
    href="https://cpwebassets.codepen.io/assets/global/global-abb2252980e35f8ec886ee80285f893ef8da837d058a6be9a1bf1706e7caf3a4.css" />
  <link rel="stylesheet" media="screen" href="https://cpwebassets.codepen.io/assets/packs/css/everypage-bc120a53.css" />
  <link rel="stylesheet" href="assets/style.css">
  <link rel="stylesheet" href="assets/css/sweetalert2.min.css">
</head>

<body style="background-image:url('assets/images/background/1.jpg');background-repeat:no-repeat;">

  <div class="container">
    <div class="frame">
      <div class="nav">
        <ul class="links">
          <li class="signin-active"><a class="btn">Sign in</a></li>
          <li class="signup-inactive"><a class="btn">Sign up </a></li>
        </ul>
      </div>
      <div ng-app ng-init="checked = false" style="margin-top: -60px !important;">
        <form class="form-signin"  action="" method="post" name="form">
          <label for="username">Email</label>
          <input class="form-styling" type="text" name="email" placeholder="" />
          <label for="password">Password</label>
          <input class="form-styling" type="text" name="password" placeholder="" />
          <input type="checkbox" id="checkbox" />

          <div class="btn-animate">
            <button
              style="background-color:#1059FF;color:white;float: left;font-weight: 700;text-transform: uppercase;font-size: 13px;text-align: center;padding-top: 4px;width: 100%;height: 35px;border: none;border-radius: 20px;cursor:pointer;"
              type="submit" class="btn-sign">Login</button>
          </div>
        </form>


        

        <form class="form-signup" action="" method="post" name="form">
          <!-- <label for="fullname">First Name</label> -->
          <input class="form-styling" type="text" name="name" placeholder="FULL NAME" />

         
          <!-- <label for="email">Email</label> -->
          <input class="form-styling" type="email" name="email" placeholder="EMAIL" />
          <!-- <label for="email">Phone</label> -->
          <input class="form-styling" type="number" name="phone" placeholder="PHONE" />
          <label for="email">DOB</label>
          <input class="form-styling" type="date" name="dob" placeholder="" />
          <label for="email">Upload Staff Picture</label>
          <input class="form-styling" type="file" name="image" placeholder="" />
          <!-- <label for="password">Password</label> -->
          <input class="form-styling" type="password" name="password" placeholder="PASSWORD" />
          <!-- <label for="confirmpassword">Confirm password</label> -->
          <input class="form-styling" type="password" name="repass" placeholder="COMFIRM PASSWORD" />
          <button class="btn-signup">Sign Up</a>
        </form>

        <div class="success">
          <svg width="270" height="270" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px" y="0px" viewBox="0 0 60 60" id="check" ng-class="checked ? 'checked' : ''">
            <path fill="#ffffff" d="M40.61,23.03L26.67,36.97L13.495,23.788c-1.146-1.147-1.359-2.936-0.504-4.314
                    c3.894-6.28,11.169-10.243,19.283-9.348c9.258,1.021,16.694,8.542,17.622,17.81c1.232,12.295-8.683,22.607-20.849,22.042
                    c-9.9-0.46-18.128-8.344-18.972-18.218c-0.292-3.416,0.276-6.673,1.51-9.578" />
            <div class="successtext">
              <p> Thanks for signing up! Check your email for confirmation.</p>
            </div>
        </div>
      </div>
      <br>
      <div class="forgot">
        <a href="#">Forgot your password?</a>
      </div>

      <!-- <div>
          <div class="cover-photo"></div>
          <div class="profile-photo"></div>
          <h1 class="welcome">Welcome, Chris</h1>
          <a class="btn-goback" value="Refresh" onClick="history.go()">Go back</a>
        </div> -->
    </div>


  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> -->
  <script src="assets/script.js"></script>
  <script src="assets/js/sweetalert2.all.min.js"></script>
  <script src="includes/sender.js"></script>
</body>

</html>