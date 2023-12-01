<!DOCTYPE html>
<html>

<head>
    <title>New Item</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .form-container {
            max-width: 750px;
            margin: 0 auto;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="text-center">Add Movie</h2>
        <div class="form-container">
            <form action="add_process.php" method="post" encytype="multipart/form-data">
                <div class="form-group">
                    <label for="judul">Judul:</label>
                    <input type="text" class="form-control" id="judul" name="judul" required>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi:</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="cover_image">Cover Image:</label>
                    <input type="file" class="form-control" id="cover_image" name="cover_image" required>
                </div>
                <div class="form-group">
                    <label for="actor">Actor:</label>
                    <input type="text" class="form-control" id="actor" name="actor" required>
                </div>
                <div class="form-group">
                    <label for="durasi">Durasi :</label>
                    <input type="text" class="form-control" id="durasi" name="durasi" required>
                </div>

                <td></td>
                <td>
                    <button type="submit" class="btn btn-primary">Add</button>
                </td>
                </tr>
                </table>
            </form>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>