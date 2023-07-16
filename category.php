<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Categories - O Vod</title>
  <link rel="icon" type="image/x-icon" href="img/o_favicon.png">
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>

<body>
  <?php include 'nav.php'; ?>

  <section class="content_index">
    <section class="sponsored">
      <div class="recommend" style="width:100%">
        <div class="context">Categories</div>

        <?php
        $categories = array(
          'Animation' => 'animation.gif',
          'Calm' => 'calm-relax.gif',
          'Game' => 'valve.gif',
          'Action' => 'action.gif',
          'Adventure' => 'adventure.gif',
          'Nature' => 'nature.gif',
          'Cat' => 'cat.gif',
          'Cook' => 'cook.gif',
          'Technology' => 'tech.gif',
          'Art' => 'art.gif'
        );

        foreach ($categories as $category => $image) {
          echo '<a href="index.php">';
          echo '<div class="content">';
          echo '<div class="channel channelsponsored"><img class="channelimage creators" src="img/category/' . $image . '"><br>' . $category . '</div>';
          echo '</div>';
          echo '</a>';
        }
        ?>

      </div>
      <div class="context-best" style="font-size: 1rem; user-select: none;">
        Powered by
        <img src="img/category/api_giphy_logo_sparkle_clear.gif" style="max-width: 2.5rem; padding-right: 2%;">
      </div>
    </section>
    <div style="clear: both;">
  </section>

  <?php include 'footer.php'; ?>

</body>

</html>