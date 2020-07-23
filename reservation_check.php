<?php 
session_start();
$link = mysqli_connect('localhost','root','','rms2');
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
    $fname = $_POST['fname'];    
    $email = $_POST['email']; 
	$phone = $_POST['phone'];
	$rdate = $_POST['rdate'];  
	$rtime = $_POST['rtime']; 
    $person = $_POST['people'];
    

    $Feetchi = "SELECT sum(person)  FROM 'reservation' where Date = '2020-06-06' ";
    $result1 = mysqli_query($link,$Feetchi);
    $r2=mysqli_fetch_array($result1,MYSQLI_NUM);

    if($r2['0']<10)
    {
    $sql= "INSERT INTO reservation (Name, phone,email,date,time, person) VALUES ('$fname','$phone','$email','$rdate','$rtime', '$person')";
    if ($link->query($sql)==TRUE)
    {
    echo "<script> alert('Reservation requested!');
            window.location.href='/Ayesha/index.php';  
            </script>";
    }
   }
    else
    {
        echo "<script> alert('Reservation is full');
            window.location.href='reservation.php';
            </script>";
    }

// if ($link->query($sql)==TRUE)
// {
//     echo "<script> alert('Reservation requested!');
//             window.location.href='/project/index.php';  
//             </script>";
// }else
// {
//     echo "<script> alert('Error requesting reservation. Please try again');
//             window.location.href='reservation.php';
//             </script>";
// }

$link->close();


?>