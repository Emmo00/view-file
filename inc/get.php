<form action="" method="post">
    <div>
        <input type="text" name="filename" id="filename" placeholder="Enter filename." value="<?= $_SESSION['filename'] ?? '' ?>">
        <br>
        <small style="color: red"><?= $ERROR ?? "" ?></small>
    </div>
    <input type="submit" value="View file">
</form>
