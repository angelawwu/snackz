<?php

//Step1
 $db = mysqli_connect('localhost','root','123','feedback_form')
 or die('Error connecting to MySQL server.');
?>

<html>
 <head>
 </head>
 <body>
 <h1>PHP connecting to MySQL</h1>

<?php
   
//Step2
$query = "SELECT * FROM sheet1
WHERE A='chips'";
mysqli_query($db, $query) or die('Error querying database.');

//Step3
$result = mysqli_query($db, $query);

while ($row = mysqli_fetch_array($result)) {
 echo $row['A'] . ' ' . $row['B'] . ': ' . $row['C'] . ' ' . $row['D'] .'<br />';
 echo $row['E'] . ' ' . $row['F'] . ': ' . $row['G'] . ' ' . $row['H'] .'<br />';
}

//Step 4
mysqli_close($db);
?>

</body>
</html>