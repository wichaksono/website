<?php
require 'config.php';

$sql = "SELECT * FROM statistik ORDER BY date_create DESC";
$query = $db->query($sql);

?>
<h3>Daftar User yang pernah mengakses Halaman</h3>
<table border="1">
    <tr>
        <td>IP</td>
        <td>Browser</td>
        <td>OS</td>
        <td>Date</td>
    </tr>
    <?php
    while ($row=$query->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['ip'];?></td>
            <td><?php echo $row['browser'];?></td>
            <td><?php echo $row['os'];?></td>
            <td><?php echo $row['date_create'];?></td>
        </tr>
    <?php } ?>
</table>