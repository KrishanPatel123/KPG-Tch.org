<?php
if(isset($_POST['submit'])){
$name=$_POST['U-Name'];
$email=$_POST['U-Email'];
$text_aeria=$_POST['textaerea_U'];
$query="INSERT INTO u_queary(Name,Email,textarea)VALUES('$name','$email','$text_aeria')";
$quer=mysqli_query($conn,$query);
if(!$quer){
    ?>
    <script>
        alert("Data Is Not Submit");
    </script>
    <?php
}else{
    echo "Data Submit";

}   






}





?>