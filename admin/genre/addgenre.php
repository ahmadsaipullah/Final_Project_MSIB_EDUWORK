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
        <h2 class="text-center">Add Genre</h2>
        <div class="form-container">
            <form action="add_process.php" method="post">
                <div class="form-group">
                    <label for="genre">genre:</label>
                    <input type="text" class="form-control" id="genre" name="genre" required>
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