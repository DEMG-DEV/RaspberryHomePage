<?php
$db_host = '192.168.0.16'; // Host
$db_user = 'root'; // Username
$db_pass = 'root'; // Password
$db_name = 'temperature'; // Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
    die("Can't connect to MySQL: " . mysqli_connect_error());
}

$sql = 'SELECT * from temperatureData';

$query = mysqli_query($conn, $sql);

if (!$query) {
    die('SQL Error: ' . mysqli_error($conn));
}
?>
<!doctype html>
<html lang="en">

<?php include "./Body/head.php";?>

<body>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

    <?php include "./Body/navbar.php";?>

<div class="container" style="margin-top: 70px">

    <?php
echo '<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Id</th>
            <th>Temperature</th>
            <th>Date Time</th>
        </tr>
        <tbody>';

while ($row = mysqli_fetch_array($query)) {
    echo '<tr>
                <td>' . $row['temperature_id'] . '</td>
                <td>' . $row['temperature_data'] . '</td>
                <td>' . $row['temperature_datetime'] . '</td>
            </tr>';
}
echo '
        </tbody>
    </table>';

// Should we need to run this? read section VII
mysqli_free_result($query);

// Should we need to run this? read section VII
mysqli_close($conn);
?>

    <?php include "./Body/footer.php"?>
</div>
</body>

</html>