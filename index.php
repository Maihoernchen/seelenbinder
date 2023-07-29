<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/gif/png" href="portrait.png"> 
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <title>Werner Seelenbinder</title>
  <meta name="description" content="Werner Seelenbinder">
  <meta name="author" content="SitePoint">
  <meta property="og:title" content="Werner Seelenbinder">
  <meta property="og:description" content="Werner Seelenbinder">
  <link rel="stylesheet" href="main_style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">

</head>

<body>
  <div class="top">
    <div class="sidenav">
      <button class="dropbtn"><span class="material-symbols-outlined">menu</span> Menü</button>
      <div class="dropdown-content">
        <a class="active" href="index.html"><span class="material-symbols-outlined">home</span> Startseite</a>
        <a class="af" href="treffen.html"><span class="material-symbols-outlined">groups</span> Treffen</a>
        <a class="af" href="bio.html"><span class="material-symbols-outlined">person_book</span> Biographie</a>
        <a class ="af" title="Click to submit material." href="submit.php"><span class="material-symbols-outlined">mail</span> Material einsenden</a>
        <a class="af" title="Click to log in." href="login.php"><span class="material-symbols-outlined">login</span> Einloggen</a>
      </div>
    </div>
    <h1 style="font-family: 'Special Elite', cursive;">Werner Seelenbinder</h1>
  </div>
  <div id="timeline">
  <?php
  for ($x = 0; $x <= 100; $x++) {
    echo "-----------------------------------|<br>";
  }
  ?>
  </div>
  <img id="wsro" src="werner_seelenbinder_ringer_outfit.jpg">
  <div class="main_text">
    Content
  </div>

  <script src="main_scripts.js"></script>
</body>
</html>