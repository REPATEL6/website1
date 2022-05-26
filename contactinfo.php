<?php

$con = mysqli_connect('localhost', 'root');

if($con){
    echo "Connection Successfull";
}else{
    echo "Connection Failed";
}

mysqli_select_db($con , 'website-1');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$event = $_POST['event'];
$NOG = $_POST['NOG'];
$venueaddress = $_POST['venueaddress'];
$state = $_POST['state'];
$country = $_POST['country'];
$date = $_POST['date'];
$time = $_POST['time'];
$package = $_POST['package'];

if(isset($_POST['submit'])){

    $event = $_POST['event'];
    $package = $_POST['package'];

$query = "insert into userdata (user, email, mobile, event, NOG, venueaddress, state, country, date, time, package) 
values ('$user', '$email', '$mobile', '$event', '$NOG', '$venueaddress', '$state', '$country', '$date', '$time', '$package')";

mysqli_query($con, $query);

}

?>





?>
