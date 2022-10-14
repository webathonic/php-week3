
<?php 
$name=$_POST['name'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$country=$_POST['country'];

print_r( 'Name: '.$name. '<br>');
print_r('Email: '.$email. '<br>');
print_r('Date Of Birth: '.$dob. '<br>');
print_r( 'Gender: '.$gender. '<br>');
print_r( 'Country: '.$country. '<br>');
?>

<?php
$filename='./userdata.csv';
$handle=fopen($filename, 'a');
fwrite($handle, "$name, $email, $dob ,$gender,$country \n");
fclose($handle);
?>