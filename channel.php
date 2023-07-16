<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>OVOD - O Vod</title>
  <link rel="icon" type="image/x-icon" href="img/o_favicon.png">
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>

<body>
  <?php include 'nav.php'; ?>

  <section class="content_index">
    <section id="o_content">

      <div id="details"
        style="background: linear-gradient(45deg, purple, rgb(128, 0, 167), rgb(149, 0, 194), yellow); color: black;">
        <div class="channel-item"><img src="img/o_channel.png">OVOD</div>
        <div id="viddescription" style="clear:both; padding-top:2%;position:relative; float: left; color: white;">The
          channel of o, the main content provider cluster.</div>
        <div id="vidproperties">
          <div style="clear:both; padding-left:1%;padding-top: 1%; color: wheat;"><b>Network:</b> mainnode.o.local
          </div>
        </div>
        <div class="context" style="margin-top: 2%;">Shared</div>

        <?php
        $videos = array(
          array(
            'thumbnail' => 'bigbuckthumb.png',
            'title' => 'Super Bunny',
            'channel' => 'OVOD',
            'channel_image' => 'o_channel.png',
            'views' => '32678 views'
          )
        );

        foreach ($videos as $video) {
          echo '<a href="content.php">';
          echo '<div class="content" style="margin-left: 1%;">';
          echo '<img class="thumbnail" src="img/video/' . $video['thumbnail'] . '">';
          echo '<div class="title">' . $video['title'] . '</div>';
          echo '<div class="channel"><img class="channelimage" src="img/channel/' . $video['channel_image'] . '">' . $video['channel'] . '</div>';
          echo '<div class="views">' . $video['views'] . '</div>';
          echo '</div>';
          echo '</a>';
        }
        ?>

        <div style="clear: both;"></div>
    </section>
    <div style="clear: both;"></div>

  </section>
  </div>

  <?php include 'footer.php'; ?>

</body>

</html>