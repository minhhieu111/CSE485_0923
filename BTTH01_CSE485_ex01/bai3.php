<?php
     $arrs = ['PHP', 'HTML', 'CSS', 'JS']

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table style="border: 1px solid;">
  <thead>
    <tr>
      <th style="border-bottom: 1px solid ;">Tên Khóa học</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th style="border-bottom: 1px solid ;"><?=$arrs[0]?></th>

    </tr>
    <tr>
      <th style="border-bottom: 1px solid ;"><?=$arrs[1]?></th>

    </tr>
    <tr>
      <th style="border-bottom: 1px solid ;"><?=$arrs[2]?></th>
 
    </tr>
    <tr>
      <th><?=$arrs[3]?></th>
 
    </tr>

  </tbody>
</table>
</body>
</html>
