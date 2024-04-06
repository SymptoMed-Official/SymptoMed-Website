<?php

$text = $api;
$image = $text['url'];
$image = base64_encode(file_get_contents($image));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .button{
            background-color: #0D6EFD;
            border: none;
            color: white;
            padding: 10px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 10%;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cover</title>
</head>
<body>
    <p><?php echo "version: " . $text['version'] ?></p>
    <?php echo '<img src="data:image/png;base64,'.$image.'" width="auto" height="200">';?><br>
    <br>
    <br>
    <br>
    <form action="Cover.php">
        <input type="file" id="cover" name="cover"  accept="image/png, image/gif, image/jpeg">
        <input type="submit" class="button">
    </form>
    
</body>
</html>