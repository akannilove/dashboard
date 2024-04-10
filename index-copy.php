<?php

$programmingLanguages = [
  'php'     => [
      'creator'       => 'Rasmus lerdorf',
      'extension'     => '.php',
      'isOpenSource'  => true,
      'website'       => 'wwww.php.net',
      'versions'      => [
        ['version'    => 8, 'releaseDate' => 'Nov 26, 2020'],
        ['version'    => 7.4, 'releaseDate' => 'Nov 28, 2019'],
      ],
  ],
  'python'  => [
      'creator'       => 'Guido van Rossun',
      'extension'     => '.py',
      'isOpenSource'  => true,
      'website'       => 'www.python.org',
      'versions'      => [
        ['version' => 3.9, 'releaseDate' => 'Oct 5, 2020'],
        ['version' => 3.8, 'releaseDate' =>'Oct 14, 2019']
      ]
  ]
];
/*
echo '<pre>';
  print_r ($programmingLanguages);
echo '</pre>';

*/

/*
$x = 'Hello World';
$y = strpos($x, 'H');

$result = $y === false ? ' H is not found boss' : 'H is found at index ' . $y . ' boss';

echo $result;
*/

/*
if ($y === false){
  echo 'H not found';
} else {
  echo 'H found at index ' . $y;
}
*/
?>
<!-- <html>
  <head>

  </head>
  <body>
    <?php $score = 64 ?>
    <?php if ($score >= 90) : ?>
      <strong>A</strong>
    <?php elseif ($score >= 80) : ?>
      <strong>B</strong>
    <?php elseif ($score >= 70) : ?>
      <strong>C</strong>
    <?php elseif ($score >= 60) : ?>
      <strong>D</strong>
      <?php else : ?>
      <strong>F</strong>
    <?php endif ?>
  </body>
</html>

      -->

<?php

// $user = [
//      'name' => 'Gio',
//      'email' => 'dimejiakanni@gmail.com',
//      'skills' => ['php', 'graphql', 'react'],
// ];

foreach ($programmingLanguages as $key => $value) {
     echo $key . ': '. json_encode($value) . '</br>';
     // if (is_array($value)){
     //      foreach ($value as $skill){
     //           echo json_encode($skill) . '</br>';
     //      }
     // }
     //echo $key . ': ' . json_encode($value) . '</br>';
}

?>
 