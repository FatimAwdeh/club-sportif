<?php
session_start();
if ($_SESSION['is_loggedin'] != 1) {
    header("location: admin-login.php");
} else {
    require_once 'connection.php';
    echo "<h5>VIEW CALENDAR</h5>";
    $query1 = "SELECT * FROM calendar";
    $result1 = mysqli_query($con, $query1);
    $nb = mysqli_num_rows($result1);
    ?>
    <table border='3'>
        <tr>
            <th>Event ID</th>
            <th>Event Title</th>
            <th>Start Date and Time</th>
            <th>End Date and Time</th>
            <th>Drop</th>
        </tr>
        <?php
        for ($i = 0; $i < $nb; $i++) {
            $row = mysqli_fetch_assoc($result1);
            echo "<tr>";
            echo "<td>" . $row['Event ID'] . "</td>";
            echo "<td>" . $row['Event Title'] . "</td>";
            echo "<td>" . $row['Start Date and Time'] . "</td>";
            echo "<td>" . $row['End Date and Time'] . "</td>";
            echo "<td>" . $row['Drop'] . " <a href='delete.php'><img src='./assets/drop.png.png' alt='delete'></a></td>";
            echo "</tr>";
        }
        echo "</table>";
    }

?>
