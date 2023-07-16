<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register - O Vod</title>
  <link rel="icon" type="image/x-icon" href="img/o_favicon.png">
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>

<body>
  <?php include 'nav.php'; ?>

  <section class="content_index">
    <div style="text-align: center;">
      <h1 class="context">Register</h1>
      <img src="img/auth_register.png" style="max-width: 10%; padding-bottom: 5%; user-select: none;">
      <br>
      <label style="font-weight: bolder; user-select: none;">ID:</label><br>
      <input id="authbox" type="text"><br><br>
      <label style="font-weight: bolder; user-select: none;">Password:</label><br>
      <input id="authbox" type="text"><br><br>
      <label style="font-weight: bolder; user-select: none;">Verify Password:</label><br>
      <input id="authbox" type="text"><br>
      <br>
      <p><input type="checkbox"> I accept the <a style="color: red; font-weight: bolder;" href="terms-of-use.php">Terms
          of Use</a> and <a style="color: red; font-weight: bolder;" href="privacy-policy.php">Privacy Policy</a>.</p>
      <br>
      <a href="auth.php"><button id="authbutton">Register</button></a>
      <br><br>
      <a href="auth.php" style="text-decoration: none; color: red; font-weight: bold;">Login</a><br>
      <img src="img/auth_secure.png" style="max-width: 2%; padding-top: 5%; user-select: none;"><b
        style="user-select: none;">End-to-end encrypted</b>
    </div>
  </section>

  <?php include 'footer.php'; ?>
</body>

</html>