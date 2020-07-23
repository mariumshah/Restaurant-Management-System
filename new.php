  <?php
 session_start();

     $connection = mysqli_connect('localhost','root','','rms2');
  if($connection)
  {
    echo "connection built ";
    // $address = $_POST['add'];
    // $email = $_POST['e'];
    

    $id="SELECT max(OID) FROM order";
    // $pq="SELECT No_PItems FROM order WHERE OID=$id";
    // $iq="SELECT No_IItems FROM order WHERE OID=$id";
    // $dsq="SELECT No_Deserts FROM order WHERE OID=$id";
    // $drq="SELECT No_Drinks FROM order WHERE OID=$id";
    // $pp="SELECT Price_Pitem FROM order WHERE OID=$id";
    // $ip="SELECT Price_Iitem FROM order WHERE OID=$id";
    // $dsp="SELECT Price_Deserts FROM order WHERE OID=$id";
    // $drp="SELECT Price_Drinks FROM order WHERE OID=$id";
    // $total="SELECT Total FROM order WHERE OID=$id";
    // $day="SELECT Date FROM order WHERE OID=$id";

    $result = mysqli_query($connection, $id);

         if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
               echo "order id: " . $row["OID"]. "<br>";
            }
    // echo $pq;
    // echo $iq;
    // echo $dsq;
    // echo $drq;
    // echo $pp;
    // echo $ip;
    // echo $address;
    // echo $total;
    // echo $email;

    // $insert = "INSERT INTO delivery (No_PItems,No_IItems,No_Deserts,No_Drinks,Price_Pitem,Price_Iitem,Price_Deserts,Price_Drinks,Total,Address,Date,Email) VALUES ($pq,$iq,$dsq,$drq,$pp,$ip,$dsp,$drp,$address, $total,'$email')";
    $insert = "INSERT INTO delivery (No_PItems,No_IItems,No_Deserts,No_Drinks,Price_Pitem,Price_Iitem,Price_Deserts,Price_Drinks,Total,Date) VALUES ($pq,$iq,$dsq,$drq,$pp,$ip,$dsp,$drp, $total)";
    $result = mysqli_query($connection,$insert);
    
    if($result)
      header("Location: http://localhost:8012/Ayesha/orderplaced.php");
    else
    echo "query failed";
  }
}
  else echo "connection failed";

$connection->close();
 
?>