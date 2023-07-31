<?php
    session_start();
    if(isset($_SESSION['id'])){
        require_once './db/configUserUpdate.php';
        if(isset($_POST["user_profile_update"])){
        $sql_update_basic = "UPDATE `user_details` SET `f_name`=:f_name,`l_name`=:l_name,`email`=:email,`contact`=:contact WHERE id = :id";

        $sql_update_full = "UPDATE `user_full_details` SET `city`=:city,`district`=:district,`state`=:state,`pin_code`=:pin_code,`aadhar_card`=:aadhar_card,`dob`=:dob,`gender`=:gender,`tehsil`=:tehsil WHERE u_id=:id ";

        $prepared_basic = $pdo->prepare($sql_update_basic);
        $prepared_basic->bindParam(':f_name', $_POST['f_name']);
        $prepared_basic->bindParam(':l_name', $_POST['l_name']);
        $prepared_basic->bindParam(':email', $_POST['email']);
        $prepared_basic->bindParam(':contact', $_POST['contact']);
        $prepared_basic->bindParam(':id', $_SESSION['id']);
        $executed_basic= $prepared_basic->execute();

        $prepared_full = $pdo->prepare($sql_update_full);
        $prepared_full->bindParam(':city', $_POST['city']);
        $prepared_full->bindParam(':district', $_POST['district']);
        $prepared_full->bindParam(':state', $_POST['state']);
        $prepared_full->bindParam(':pin_code', $_POST['pin'],PDO::PARAM_INT);
        $prepared_full->bindParam(':aadhar_card', $_POST['aadhar_card']);
        $prepared_full->bindParam(':dob', $_POST['dob']);
        $prepared_full->bindParam(':gender', $_POST['gender'],PDO::PARAM_INT);
        $prepared_full->bindParam(':tehsil', $_POST['tehsil']);
        $prepared_full->bindParam(':id', $_SESSION['id'],PDO::PARAM_INT);
        $executed_full= $prepared_full->execute();

        if($executed_full && $executed_basic){
            echo "<script>alert('profile updated')</script>";
          
                 header("refresh:0;url='user_details_.php'");
        }
        else{
            echo "<script>alert('profile not updated')</script>";
                 header("refresh:0;url='user_details_edit.php'");
        }        
    }
    else{
        
        echo "failed";
        header("refresh:0;url='user_details_edit.php'");
        }
    }
    else{
        echo "log out";
    }
?>