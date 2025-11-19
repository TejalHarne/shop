<?php
if (!file_exists('uploads')) mkdir('uploads', 0777, true);
$file = $_FILES['reel'];
$filename = "reel_" . time() . "_" . $file['name'];
$destination = "uploads/" . $filename;
if (move_uploaded_file($file['tmp_name'], $destination)) {
    echo "<h2>Upload Successful!</h2>";
    echo "<a href='uploads/$filename'>View Reel</a><br>";
} else { echo "<h2>Upload Failed!</h2>"; }
echo "<br><a href='index.php'>Back</a>";
?>