<?php
include 'connect.php';
wp_head();
get_header();

if (!empty($_SERVER['ID'])) {
    if ($_GET['ID'] == "ID") {
        echo 'gelukt';
    }
}

$sql = "SELECT id, Name, price, description FROM test_database1 WHERE id=" . $_GET['id'] . "";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    echo "<div id='container_items'>";
    while ($row = mysqli_fetch_assoc($result)) {
?>
        <div class='items'>
            <div class='id_items'>
                <?php echo $row['id'] ?>
            </div>
            <?php echo $row['id'] ?>
            <div class='name_items'>
                Name: <?php echo $row['Name'] ?>
            </div>
            <div class='price_items'>
                €<?php echo  $row['price'] ?>
            </div>
            <div class='description_items'>
                <?php echo $row['description'] ?>
            </div>
        </div>
<?php
    }
    echo "</div>";
} else {
    var_dump($sql);
    echo "0 results";
}
mysqli_close($conn);
get_footer();
