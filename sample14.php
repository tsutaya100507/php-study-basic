<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
  <?php
    $news = file_get_contents('../../news_data/news.txt');
    $news .= "2018-08-09 ニュースを追加しました";
    print($news);
    // readfile('../../news_data/news.txt');
  ?>
</pre>
</main>
</body>    
</html>