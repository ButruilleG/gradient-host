<!doctype html>
<html>
  <head>
    <title>Your Title Here</title>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.$
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="stylesheet.css">
  </head>
  <body onResize="floatFunction()">
    <div class="wrapper">
      <div class="searchbox resizeMiddle">
        <form method="post" action="<?php echo 'pages/searchpage.php';?>">
          <input type="text" onblur="if (this.value=='') this.value=this.defaultValue"$
          <input type="submit">
        </form>
      </div>
      <div class="nav resizeMiddle">
        <a href="index.php"><div class="navbutton">NAV1</div></a>
        <a href="index.php"><div class="navbutton">NAV2</div></a>
        <a href="index.php"><div class="navbutton">NAV3</div></a>
        <a href="index.php"><div class="navbutton">NAV4</div></a>
      </div>
      <div class="content centerDiv resizeMiddle">
