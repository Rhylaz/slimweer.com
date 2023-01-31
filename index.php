<!DOCTYPE html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>SlimWeer&trade;</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>

  <!-- Add your site or application content here -->
  <header>

    <div class="wrapper">
      <div class="logo">
        <img src="/img/icon_cloud.png" height="36px" width="42px">
        <h1>SlimWeer&trade;</h1>
        <nav>
          <a href="/">Het weerbericht</a>
          <a href="/">Over ons</a>
          <a href="/">Contact</a>
        </nav>
      </div>
    </div>

  </header>

  <main>
    <div class="wrapper">
      <div class="container">
        <h1>"<?php echo file_get_contents('C:/laragon/www/herslimweer/prediction.txt');?>"</h1>
        <div class="vinkje_icon">
          <img src="../img/icon_down.png" width="82px" height="52px">
        </div>
        <h2>Over SlimWeer&trade;</h2>
        <div class="weather_icon">
          <p>SlimWeer is het weerbureau van Smart City. Onze voorspelling is iedere dag weer superslim, dankzij de
            supercomputers en onze weermannen en -vrouwen die nog ouderwets naar buiten kijken!</p>
          <img src="../img/icon_cloud.png" width="121px" height="111px">
        </div>

        <div class="form">
        <h2>Contact met SlimWeer&trade;</h2>
        <p>Stel uw weervraag via het formulier hieronder!</p>

          <form action="backend/questionController.php" method="post">

            <div class="form-group">
              <label for="name">Naam:</label>
              <input type="text" name="">
            </div>

            <div class="form-group">
              <label for="email">E-mailadres:</label>
              <input type="text" name="">
            </div>

            <div class="form-group">
              <label for="name">Weervraag:</label>
              <textarea cols="60" rows="8" id="name" name="weervraag"></textarea>
            </div>

            <div class="form-group">
              <a href=""><input type="submit" name="Verzenden" value="Verzenden"></a>
            </div>

          </form>
        </div>
      </div>
    </div>
  </main>


</body>

</html>