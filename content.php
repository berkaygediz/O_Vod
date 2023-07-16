<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Super Bunny - O Vod</title>
  <link rel="icon" type="image/x-icon" href="img/o_favicon.png">
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>

<body>
  <?php include 'nav.php'; ?>

  <section class="content_index">
    <section id="o_content">
      <div id="player">
        <video controls>
          <source src="vid/bigbuckbunny.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </div>
      <div id="details">
        <div id="vidtitle">Super Bunny</div>
        <div id="viddate" title="December 14, 2022">December 14, 2022</div>
        <div id="viddescription">Big Buck Bunny is a short computer-animated comedy film created by the Blender
          Institute, part of the Blender Foundation. It features forest animals, including three creatures named Gimera,
          Frank, and Rinky, who recently disturbed Bunny Big Buck. When Gimera kills a butterfly, Buck decides to take
          wild revenge on them.</div>
        <div id="vidproperties">
          <div style="font-weight: bolder; font-size: 1.15rem;">👤Channel:</div>
          <a href="channel.php">
            <div class="channel-item"><img src="img/o_channel.png">OVOD</div>
          </a>
          <div style="clear:both; padding-top: 1%;"></div>
          <div style="font-weight: bolder; font-size: 1.15rem;">🔍Category:</div>
          <a href="category.php">
            <div class="category-item">Animation</div>
          </a>
          <a href="category.php">
            <div class="category-item">Adventure</div>
          </a>
          <a href="category.php">
            <div class="category-item">Action</div>
          </a>
          <div style="clear:both; padding-top: 1%;"></div>
          <div style="font-weight: bolder; font-size: 1.15rem;">🟢Connections: </div>
          <div style="float: left;">⬆️20 shares</div>
          <div style="float: left; padding-left: 1%;">⬇️20 views</div>
          <div style="clear:both; padding-top: 1%;"><b>Server:</b> share4393683node.o.local</div>
        </div>
        <div class="context context-best" style="margin-top: 2%;">Recommended Videos</div>
        <?php
        $recommendedVideos = [
          [
            'thumbnail' => 'img/video/24-536x354.jpg',
            'title' => 'Book Recommendations',
            'channel' => 'Johanna',
            'views' => '32678 views'
          ],
          [
            'thumbnail' => 'img/video/211-536x354.jpg',
            'title' => 'Ship Chats',
            'channel' => 'Parker',
            'views' => '32678 views'
          ],
          [
            'thumbnail' => 'img/video/343-536x354.jpg',
            'title' => 'Memories of Mountain Climbing',
            'channel' => 'Julia',
            'views' => '32678 views'
          ],
          [
            'thumbnail' => 'img/video/413-536x354.jpg',
            'title' => 'Walking 5000 Steps Every Day',
            'channel' => 'Joseph',
            'views' => '32678 views'
          ],
          [
            'thumbnail' => 'img/video/416-536x354.jpg',
            'title' => 'Mastering Self-Discipline',
            'channel' => 'Angelina',
            'views' => '32678 views'
          ]
        ];

        foreach ($recommendedVideos as $video) {
          echo '<a href="content.php">';
          echo '<div class="content">';
          echo '<img class="thumbnail" src="' . $video['thumbnail'] . '">';
          echo '<div class="title">' . $video['title'] . '</div>';
          echo '<div class="channel"><img class="channelimage" src="img/channel/1.jpg">' . $video['channel'] . '</div>';
          echo '<div class="views">' . $video['views'] . '</div>';
          echo '</div>';
          echo '</a>';
        }
        ?>
        <div style="clear: both;"></div>
      </div>
    </section>
    <div style="clear: both;"></div>
  </section>

  <?php include 'footer.php'; ?>
</body>

</html>