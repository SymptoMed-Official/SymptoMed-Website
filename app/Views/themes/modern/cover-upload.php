<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload file</title>
</head>
<body>
    <form action="/uploadFileController.php" method="post" enctype="multipart/form-data">
        <input type="file" id="uploadfile" name="filename">
        <input type="submit" value="Upload">
    </form>
    
</body>
</html>