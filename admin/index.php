<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admissions</title>
    <link rel="stylesheet" href="./css/form-style.css" />
  </head>
  <body>
    <div class="container1">
      <h4>Saudi Electronic University login As Admin</h4>
    </div>
    <div class="form-div">
      <form
        action="validation.php"
        name="formOne"
        class="form-1"
        onsubmit="return formValid()"
        method="post"
      >
        <p>username</p>
        <input type="text" name="username" id="" />
        <p>password</p>
        <input type="password" name="password" id="studentphone" />
        <input type="submit" name="submit" value="submit" />
        <p><a href="home.html">Go to Homepage</a></p>
      </form>
    </div>
    
//including the database connection file

    <script src="./js/form-script.js"></script>
  </body>
</html>
