<?php
$x = $_POST['id'];
//echo $x;

$d = file_get_contents('data.json');
$d = json_decode($d, true);

//print_r( $d[$x] );

$d[$x]['fn']= $_POST['fn'];
$d[$x]['em']= $_POST['em'];

//echo '<br>';
//print_r( $d[$x] );

$t = $_FILES['ph']['tmp_name'];
$i = 'users/'.$x.'.jpg';

move_uploaded_file($t, $i);

$d = json_encode($d);
file_put_contents('data.json', $d);

header('location:result.php');
?>