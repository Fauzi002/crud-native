<!-- edit_process.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["edit"])) {
    include 'connection.php';

    $id = $_POST["id"];
    $name = $_POST["name"];

    $sql = "UPDATE data SET name='$name' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
