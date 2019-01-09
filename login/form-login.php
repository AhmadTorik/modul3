<!DOCTYPE html>
<html>
<link rel="stylesheet" href="login.css">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

      <h2>Brother Garok</h2>

    <form action="latihan3.php" method="post">
<div class="imgcontainer">
  <img src="boy.png"  alt="Avatar" class="avatar">
</div>
<div class="container">
  <label for=""> <b>Username</b> </label>
  <input type="text" name="name" placeholder="Input Your Username" value=""><br><br>
  <label for=""> <b>Password</b> </label>
  <input type="password" name="password" placeholder="Input Your Password" value=""><br><br>

   <button type="submit" name="submit" value="submit">Masuk</button>

</div>
<div class="container" style="background-color:rgba(0 ,0 ,0 ,0.2);">
  <button type="button" class="cancelbtn">Cancel</button>
  <span class="psw" >Lupa <a href="#" style="text-decoration:none; color:white;">password?</a></span>
</div>
  </form>
  </body>
</html>
