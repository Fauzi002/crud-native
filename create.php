<!-- create.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Create Data</title>
</head>
<body>

<div class="container mt-5">
    <h2>Tambah Data</h2>
    <form action="create_process.php" method="post">
        <div class="form-group">
            <label for="name">Nama:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-primary" name="add">Tambah</button>
    </form>
</div>

</body>
</html>
