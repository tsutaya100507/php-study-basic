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
  $week = ['日', '月', '火', '水', '木', '金', '土'];
  for ($i=0; $i<31; $i++) {
    print ($week[$i%7] . "\n");
  }
?>
</pre>
</main>
</body>    
</html>