<?php
if (isset($_POST['submit'])) {
    $U_F_Name = $_POST['F-name'];
    $U_L_Name = $_POST['L-name'];
    $U_Email = $_POST['Email'];
    $U_Password = $_POST['Password'];
    $U_C_Password = $_POST['C_Password'];
    $U_Select_Country = $_POST['selection'];
    if( $U_Password==$U_C_Password){
        // echo "Data Insert";
        // header("location:C:\new_xampp\htdocs\new Project\index.php");
        ?>
        <script>
            location.replace('./index.php');

        </script>
    
        <?php
    }
    elseif($U_Password!=$U_C_Password){
        ?>
        <script>
            alert("Not Match Confrom Password");
        </script>
        <?php
        $insert = "INSERT INTO curd(First_name,Last_name,Email,Password,C_Password,Selection) VALUES('$U_F_Name','$U_L_Name','$U_Email','$U_Password','$U_C_Password','$U_Select_Country')";
        $data = mysqli_query($conn, $insert);
        ?>

        <?php
    }else{
        return;
    }
    
}
?>