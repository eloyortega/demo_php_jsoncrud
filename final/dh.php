<?php
//print_r( $_POST );
//echo '<br>'.$_POST["em"];
//echo '<br>';

//print_r( $_FILES['ph'] );
//echo '<br>'.$_POST["em"];

$d = file_get_contents('data.json');
$d = json_decode($d, true);

//echo '<br>';
//print_r( $d );
//echo '<br>';
$x = count($d);
++$x;
//echo $x;

$t = $_FILES['ph']['tmp_name'];
$i = 'users/'.$x.'.jpg';

//echo '<br>';
//echo $i;

move_uploaded_file( $t, $i );

//array_unshift($d, $_POST);
$d[$x] = $_POST;
$d[$x]['ph'] = $i;

//echo '<br>';
//print_r($d);

$d = json_encode($d);
file_put_contents('data.json', $d);

?>