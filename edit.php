<!-- edit.php -->
<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM data WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['name'];
    } else {
        echo "Data not found.";
        exit();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Edit Data</title>
</head>
<body>

<div class="container mt-5">
    <h2>Edit Data</h2>
    <form action="edit_process.php" method="post">
        <input type="hidden" name="id" value="<?= $id; ?>">
        <div class="form-group">
            <label for="name">Nama:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= $name; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary" name="edit">Simpan Perubahan</button>
    </form>
</div>

</body>
</html>
