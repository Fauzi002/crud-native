<!-- create_process.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add"])) {
    include 'connection.php';

    $name = $_POST["name"];
    $sql = "INSERT INTO data (name) VALUES ('$name')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
