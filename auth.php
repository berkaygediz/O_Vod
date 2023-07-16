<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Auth - O Vod</title>
  <link rel="icon" type="image/x-icon" href="img/o_favicon.png">
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>

<body>
  <?php include 'nav.php'; ?>

  <section class="content_index">
    <div style="text-align: center;">
      <h1 class="context">Login</h1>
      <img src="img/auth_login.png" style="max-width: 10%; padding-bottom: 5%; user-select: none;">
      <br>
      <label style="font-weight: bolder; user-select: none;">ID:</label><br>
      <input id="authbox" type="text"><br><br>
      <label style="font-weight: bolder; user-select: none;">Password:</label><br>
      <input id="authbox" type="text"><br><br>
      <a href="index.php"><button id="authbutton">Login</button></a>
      <br><br>
      <a href="register.php" style="text-decoration: none; color: red; font-weight: bold;">Sign Up</a><br>
      <img src="img/auth_secure.png" style="max-width: 2%; padding-top: 5%; user-select: none;"><b
        style="user-select: none;">End-to-end encrypted</b>
    </div>
  </section>

  <?php include 'footer.php'; ?>
</body>

</html>