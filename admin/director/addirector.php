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
        <h2 class="text-center">Add Director</h2>
        <div class="form-container">
            <form action="add_process.php" method="post" encytype="multipart/form-data">
                <div class="form-group">
                    <label for="nama">nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="email">email:</label>
                    <textarea class="form-control" id="email" name="email" rows="4" required></textarea>
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