<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Tabs - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
 
<div id="tabs">
  <ul>
    <li><a id="t1" href="#tabs-1">Categories</a></li>
    <li><a id="t2" href="#tabs-2">Sous categorie</a></li>
  </ul>
  <div id="tabs-1">
        <?php require 'tp1.php';?> 

  </div>
  <div id="tabs-2">
        <?php require 'tp2.php';?> 

  </div>
</div>

</body>
<script src="tp.js"></script>
</html>