<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>O Vod</title>
  <link rel="icon" type="image/x-icon" href="img/o_favicon.png">
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>

<body>
  <?php include 'nav.php'; ?>

  <section class="content_index">
    <section class="sponsored">
      <a href="content.php">
        <div class="content mostviewed">
          <div class="title">Super Rabbit</div>
          <img class="thumbnail" src="img/video/bigbuckthumb.png">
          <div class="channel"><img class="channelimage" src="img/channel/o_channel.png">OVOD</div>
          <div class="views">32678 views</div>
        </div>
      </a>
      <div class="recommend">
        <div class="context">Content Creators</div>
        <?php
        $channelData = array(
          array("img/channel/o_channel.png", "OVOD"),
          array("img/channel/1.jpg", "Johanna"),
          array("img/channel/2.jpg", "Parker"),
          array("img/channel/3.jpg", "Julia"),
          array("img/channel/4.jpg", "Joseph"),
          array("img/channel/5.jpg", "Angelina"),
          array("img/channel/6.jpg", "Michael"),
          array("img/channel/7.jpg", "Wyatt"),
          array("img/channel/8.jpg", "Adrian"),
          array("img/channel/9.jpg", "Isaac"),
          array("img/channel/10.jpg", "Quinn"),
          array("img/channel/11.jpg", "Greyson"),
          array("img/channel/12.jpg", "Jacob"),
          array("img/channel/13.jpg", "Xavier")
        );

        foreach ($channelData as $channel) {
          $image = $channel[0];
          $name = $channel[1];
          ?>
          <a href="channel.php">
            <div class="content">
              <div class="channel channelsponsored"><img class="channelimage creators" src="<?php echo $image; ?>"><br>
                <?php echo $name; ?>
              </div>
            </div>
          </a>
          <?php
        }
        ?>
      </div>
      <div style="clear: both;"></div>
    </section>
    <div class="context context-best">Top Picks</div>
    <?php
    $contentData = array(
      array("img/video/24-536x354.jpg", "Book Recommendations", "img/channel/1.jpg", "Johanna", "32678 views"),
      array("img/video/211-536x354.jpg", "Ship Conversations", "img/channel/2.jpg", "Parker", "32678 views"),
      array("img/video/343-536x354.jpg", "Memories of Mountain Climb", "img/channel/3.jpg", "Julia", "32678 views"),
      array("img/video/413-536x354.jpg", "Walking 5000 Steps a Day", "img/channel/4.jpg", "Joseph", "32678 views"),
      array("img/video/416-536x354.jpg", "Mastering Self-Control", "img/channel/5.jpg", "Angelina", "32678 views"),
      array("img/video/460-536x354.jpg", "Neighborhoods in Japan", "img/channel/6.jpg", "Michael", "32678 views"),
      array("img/video/522-536x354.jpg", "The Deception of Recycling", "img/channel/7.jpg", "Wyatt", "32678 views"),
      array("img/video/542-536x354.jpg", "Respecting Nature", "img/channel/8.jpg", "Adrian", "32678 views"),
      array("img/video/568-536x354.jpg", "Breaking Free from Mediocr", "img/channel/9.jpg", "Isaac", "32678 views"),
      array("img/video/658-536x354.jpg", "What is Perspective?", "img/channel/10.jpg", "Quinn", "32678 views"),
      array("img/video/830-536x354.jpg", "How to Get a Drone License?", "img/channel/11.jpg", "Greyson", "32678 views"),
      array("img/video/883-536x354.jpg", "Traveling by Ships", "img/channel/12.jpg", "Jacob", "32678 views"),
      array("img/video/480-536x354.jpg", "You Will Admire Nature!", "img/channel/13.jpg", "Xavier", "32678 views")
    );

    foreach ($contentData as $content) {
      $thumbnail = $content[0];
      $title = $content[1];
      $channelImage = $content[2];
      $channelName = $content[3];
      $views = $content[4];
      ?>
      <a href="content.php">
        <div class="content">
          <img class="thumbnail" src="<?php echo $thumbnail; ?>">
          <div class="title">
            <?php echo $title; ?>
          </div>
          <div class="channel"><img class="channelimage" src="<?php echo $channelImage; ?>"><?php echo $channelName; ?>
          </div>
          <div class="views">
            <?php echo $views; ?>
          </div>
        </div>
      </a>
      <?php
    }
    ?>
    <div style="clear: both;"></div>
    <div class="context context-yellow">Calm</div>
    <?php
    foreach ($contentData as $content) {
      $thumbnail = $content[0];
      $title = $content[1];
      $channelImage = $content[2];
      $channelName = $content[3];
      $views = $content[4];
      ?>
      <a href="content.php">
        <div class="content">
          <img class="thumbnail" src="<?php echo $thumbnail; ?>">
          <div class="title">
            <?php echo $title; ?>
          </div>
          <div class="channel"><img class="channelimage" src="<?php echo $channelImage; ?>"><?php echo $channelName; ?>
          </div>
          <div class="views">
            <?php echo $views; ?>
          </div>
        </div>
      </a>
      <?php
    }
    ?>
    <div style="clear: both;"></div>
    <div class="context context-green">Nature</div>
    <?php
    foreach ($contentData as $content) {
      $thumbnail = $content[0];
      $title = $content[1];
      $channelImage = $content[2];
      $channelName = $content[3];
      $views = $content[4];
      ?>
      <a href="content.php">
        <div class="content">
          <img class="thumbnail" src="<?php echo $thumbnail; ?>">
          <div class="title">
            <?php echo $title; ?>
          </div>
          <div class="channel"><img class="channelimage" src="<?php echo $channelImage; ?>"><?php echo $channelName; ?>
          </div>
          <div class="views">
            <?php echo $views; ?>
          </div>
        </div>
      </a>
      <?php
    }
    ?>
    <div style="clear: both;"></div>
    <div class="context">Why Choose Us?</div>
    <div class="promotion">
      <div class="landing">
        <img class="landingimage" src="img/carbonneutral.png"><br>
        <b>Carbon Neutral</b><br>
        O Vod aims to address excessive carbon consumption by embracing a decentralized network of servers.
      </div>
      <div class="landing">
        <img class="landingimage" src="img/diversity.png"><br>
        <b>Community</b><br>
        Our platform continues to grow with user-contributed content. Through its open-source nature, it evolves with
        feedback.
      </div>
      <div class="landing">
        <img class="landingimage" src="img/privacy.png"><br>
        <b>Transparent</b><br>
        We prioritize user rights and content ownership, ensuring a say in platform changes through consensus.
      </div>
    </div>
    <div style="clear: both;"></div>
  </section>

  <?php include 'footer.php'; ?>
</body>

</html>