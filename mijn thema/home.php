<?php
include 'connect.php';

$sql = "SELECT id, Name, price, description FROM test_database1 ORDER BY `test_database1`.`id` ASC;";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    echo "<div id='container_items'>";
    while ($row = mysqli_fetch_assoc($result)) {
?>
        <div class='items'>
            <div class='id_items'>
                <?php echo $row['id'] ?>
            </div>
            <a href='detail_page.php?id=<?php echo $row['id'] ?>'>
                <div class='name_items'>
                    Name: <?php echo $row['Name'] ?>
                </div>
                <div class='price_items'>
                    €<?php echo  $row['price'] ?>
                </div>
                <div class='description_items'>
                    <?php echo $row['description'] ?>
                </div>
            </a>
        </div>
    <?php
    }
    echo "</div>";
} else {
    echo "0 results";
}
mysqli_close($conn);

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
        <?php the_content() ?>
<?php
    endwhile;
else :
    echo 'There are no posts!';
endif;
?>

<body>
    <?php
    get_header();
    get_footer();
    ?>
</body>