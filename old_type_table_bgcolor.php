<html>
<head>
</head>
<body>

<table>
<?php
for ($i=1; $i<10; $i++) {
?>
<?php
$bgcolor = "ffffff";
if ( $i % 2 === 0) {
  $bgcolor = "c0c0e0";
}
?>
<tr style="background-color: <?php echo $bgcolor; ?>">
 <td>hoge</td>
 <td>fuga</td>
</tr>
<?php
}
?>
</table>

</body>
</html>
