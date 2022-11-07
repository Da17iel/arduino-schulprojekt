<?php
include "../auth/config.php"; 
include "../Templates/header.php" ?>
<script>document.title = "Create Post Request";</script>

<h1>Create a post Request</h1>

<div class="logoutButton">
    <form method='post' action="./insertData.php">
        <input type="hidden" value="2022-10-30 00:00:00" name="SchrankAuf">
        <input type="hidden" value="2022-10-30 00:01:19" name="SchrankZu">
        <input type="hidden" value="100" name="SchrankOffenDauer">
        <input type="submit" value="Click here to create a new Post Request">
    </form>
</div>

<?php include "../Templates/footer.php" ?>