<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Search - O Vod</title>
  <link rel="icon" type="image/x-icon" href="img/o_favicon.png">
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>

<body>
  <?php include 'nav.php'; ?>

  <section class="content_index">
    <div class="context">Search Results:</div>
    <?php
    $searchResults = [
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
        'title' => 'Memories of Mountain Climb',
        'channel' => 'Julia',
        'views' => '32678 views'
      ],
      [
        'thumbnail' => 'img/video/413-536x354.jpg',
        'title' => 'Walking 5000 Steps Every',
        'channel' => 'Joseph',
        'views' => '32678 views'
      ],
      [
        'thumbnail' => 'img/video/416-536x354.jpg',
        'title' => 'Mastering Self-Discipline',
        'channel' => 'Angelina',
        'views' => '32678 views'
      ],
      [
        'thumbnail' => 'img/video/460-536x354.jpg',
        'title' => 'Neighborhoods in Japan',
        'channel' => 'Michael',
        'views' => '32678 views'
      ]
    ];

    foreach ($searchResults as $result) {
      echo '<a href="content.html">';
      echo '<div class="content">';
      echo '<img class="thumbnail" src="' . $result['thumbnail'] . '">';
      echo '<div class="title">' . $result['title'] . '</div>';
      echo '<div class="channel"><img class="channelimage" src="img/channel/1.jpg">' . $result['channel'] . '</div>';
      echo '<div class="views">' . $result['views'] . '</div>';
      echo '</div>';
      echo '</a>';
    }
    ?>
    <div style="clear: both;"></div>
  </section>

  <?php include 'footer.php'; ?>
</body>

</html>