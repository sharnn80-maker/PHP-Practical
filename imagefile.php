
<?php
if (isset($_POST["submit"])) {
    $file = $_FILES["myfile"];

    $allowed = array("txt", "jpg", "jpeg", "png");
    $ext = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));

    if (in_array($ext, $allowed) &&
        $file["error"] == 0 &&
        $file["size"] <= 2 * 1024 * 1024) {

        if (!is_dir("uploads")) {
            mkdir("uploads", 0755);
        }

        $filename = uniqid() . "." . $ext;

        if (move_uploaded_file(
            $file["tmp_name"],
            "uploads/" . $filename
        )) {
            echo "File uploaded successfully.";
        } else {
            echo "Upload failed.";
        }
    } else {
        echo "Invalid file or file exceeds 2 MB.";
    }
}
?>

<form method="post" enctype="multipart/form-data">
    Select a text or image file:
    <input type="file" name="myfile" required>
    <br><br>
    <input type="submit" name="submit" value="Upload">
</form>
