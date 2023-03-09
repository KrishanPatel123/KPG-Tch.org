<?php
$servername='localhost';
$user='root';
$password='';
$database='user_queary';
$conn=mysqli_connect($servername,$user,$password,$database);
if(!$conn){
    echo "Conn Wrong".mysqli_connect_error();
}
else{
    ?>
    <!-- <script>
        alert("Queary Submitted");
    </script> -->
    <?php
}








?>