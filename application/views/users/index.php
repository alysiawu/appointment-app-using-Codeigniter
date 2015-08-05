<html>
  <head>
    <title>Test App: Login</title>
<!--    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css"> -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">

    <style>
    html {
    font-family: GillSans, Calibri, Trebuchet, sans-serif;
  }
      p.error {
        color: red;
      }
      .container{
        margin-left: 20px
      }
      div {
        display: inline-block;
        vertical-align: top
      }
    </style>
  </head>
  <body>
    <div class = "container">
      <div class = "row">
        <div class="col s5 offset-s1 pink lighten-2">        
          <h1>Register</h1>
          <?php 
            if($this->session->flashdata('reg_errors')){
              echo($this->session->flashdata('reg_errors')[0]);
            }
          ?>
          <form class = 'col s12' action="/users/register" method='post'>
            Name: <input type="text" name='name'><br>
           
            Email: <input type="text" name='email'><br>
            Password: <input type="text" name='password'><br>
            <p>*Password should be at least 8 characters</p><br>
            Confirm PW: <input type="text" name='confirm_pw'><br>
      <!--       Date of Birth: <input type="text" id="datepicker"><br> -->
            Date of Birth: <input type="date" name = "date"><br>
            <input class="btn waves-effect waves-light" type="submit" value='Register'>
          </form>  
          
          </div>


        <div class= "col s5 offset-s1 orange lighten-2">
          <h1>Log In</h1>
          <?php 
            if($this->session->flashdata('log_errors')){
              echo($this->session->flashdata('log_errors'));
            }
          ?>
          <form class = 'col s12' action="/users/login" method='post'>
            <div class="input-field col s6">
              Email: <input type="text" name='email'><br>
            </div>
            <div class="input-field col s6">
              Password: <input type="text" name='password'>
            </div>
            <input class="btn waves-effect waves-light" type="submit" value='Login'>
          </form>
        </div>
      </div>  
  </div>
  </body>
</html>