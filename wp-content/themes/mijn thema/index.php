<?php
if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
        <?php the_content() ?>
<?php endwhile;
else :
    echo '<p>There are no posts!</p>';
endif;
?>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <p>test</p>
    <?php get_header(); ?>
    <p>test2</p>
    <?php get_footer(); ?>
    <p>het werkt denk ik</p>
</body>