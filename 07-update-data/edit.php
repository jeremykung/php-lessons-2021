<?php
    // Store id in var to pass into URL
    $id = $_GET['id']
?>

<form action=<?php echo "update.php?id=$id" ?> method="POST">
    <input type="hidden" name="id" value="<?php $id ?>" />
    <input type="text" name="name" placeholder="name">
    <textarea name="message" placeholder="message"></textarea>
    <input type="submit" value="Update">
</form>
