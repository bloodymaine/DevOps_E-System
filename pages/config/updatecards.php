<?php
include "dbcon.php";
if (isset($_POST['submit'])) {
   $title = $_POST['title'];
   $caption = $_POST['caption'];
   $id = $_GET['id'];

    $sql = "UPDATE tb_cards SET title = '$title', caption = '$caption' WHERE card_id= '$id'";

    if ($conn->query($sql) === TRUE) {
        $_SESSION["updatecover"] = "success";
        header('Location: ../dashboardcontent/dashboard.php');
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
