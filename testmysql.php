<?php
$mysqli = new mysqli('66.147.242.186', 'urcscon3_philly', 'coffee1N', 'urcscon3_philly');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
echo '<p>Connection OK '. $mysqli->host_info.'</p>';
echo '<p>Server '.$mysqli->server_info.'</p>';
$mysqli->close();
?>