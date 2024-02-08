<?php 
    require('config.php');
?>
<div class="mb-4 border rounded-3 p-3 py-4" style="height:300px;overflow-y: scroll;">
    <?php
    $qr = mysqli_query($db_string, "SELECT * FROM messages ORDER BY id DESC");
    while ($row = mysqli_fetch_array($qr)) {
    ?>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <button type="button" class="btn btn-primary btn-sm fw-bold"><?php echo $row['nick_name']; ?></button>
            <button type="button" class="btn btn-danger btn-sm"><?php echo $row['msg']; ?></button>

        </div>&nbsp;<span class="badge bg-secondary"><?php echo $row['time'] . " | " . $row['date']; ?></span>
        <br><br>
    <?php
    }
    ?>
</div>