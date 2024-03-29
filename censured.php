<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
  <link rel="stylesheet" href="./styles/general.css">
</head>
<body>
  <?php
    $defaultParagraphText = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus fuga eum deserunt nisi, est velit qui ducimus dicta aperiam distinctio iusto aspernatur magni laboriosam debitis vitae, fugiat voluptate commodi accusamus facere quo, deleniti voluptates. Cum dolorem, aliquam assumenda hic nemo dignissimos tempora tenetur non a, beatae illo doloremque enim id voluptatem labore est molestiae deleniti reiciendis fuga eum. Rem nostrum, suscipit expedita consectetur animi nesciunt maiores repudiandae aliquam hic totam eveniet nemo, commodi cupiditate quis voluptatem illo minima pariatur nisi libero assumenda fugit, dolores magnam corrupti amet? Numquam ea quos dolorem, omnis laboriosam tempora architecto! Dolorum unde ipsa quisquam adipisci?";
    $defaultWordToCensure = "Lorem";
    $defaultCensureWord = "***";
    
    $paragraphText = isset($_POST["paragraphText"]) && !empty($_POST["paragraphText"]) && !is_null($_POST["paragraphText"]) ? $_POST["paragraphText"] : $defaultParagraphText;
    $wordToCensure = isset($_POST["wordToCensure"]) && !empty($_POST["wordToCensure"]) && !is_null($_POST["wordToCensure"]) ? $_POST["wordToCensure"] : $defaultWordToCensure;

    $censuredParagraphText = str_replace($wordToCensure,$defaultCensureWord,$paragraphText);
  ?>
  <div class="mainContainer p-t-1 d-flex justify-content-center align-items-center flex-column gap-1">
    <h1>PHP Badwords</h1>
    <div class="d-flex justify-content-center align-items-center flex-column gap-1">
      <h2>Paragrafo originale (<?php echo strlen($paragraphText); ?> caratteri)</h2>
      <p><?php echo $paragraphText; ?></p>
    </div>
    <div class="d-flex justify-content-center align-items-center flex-column gap-1">
      <h2>Paragrafo censurato (<?php echo strlen($censuredParagraphText); ?> caratteri)</h2>
      <p><?php echo $censuredParagraphText; ?></p>
    </div>
  </div>
</body>
</html>