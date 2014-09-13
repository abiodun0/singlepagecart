<?php

define('INCLUDE_CHECK',1);
require "../include/connect.php";

if(!$_POST['img']) die("There is no such product!");
$List = explode('/',$_POST['img']);
$img = mysqli_real_escape_string($conn,end($List));

$result = mysqli_query($conn,"SELECT * FROM featured_products WHERE img='".$img."'");

$row = mysqli_fetch_assoc($result);


echo json_encode(array(
	'status' => 1,
	'id' => $row['id'],
	'price' => (float)$row['price'],
	'txt' => '<table width="100%" id="table_'.$row['id'].'">
  <tr>
    <td width="60%">'.$row['name'].'</td>
    <td width="10%">$'.$row['price'].'</td>
    <td width="15%"><select name="'.$row['id'].'_cnt" id="'.$row['id'].'_cnt" onchange="change('.$row['id'].');">
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option></slect>
	
	</td>
	<td width="15%"><a href="#" onclick="window.remove('.$row['id'].');return false;" class="remove">remove</a></td>
  </tr>
</table>'
));

?>
