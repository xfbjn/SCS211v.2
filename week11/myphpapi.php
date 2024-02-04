<?php
$movies_obj = json_decode(file_get_contents("https://reactnative.dev/movies.json"), true);
$movies = $movies_obj["movies"];
?>

<?php foreach ($movies as $row) { ?>
    <div><?php echo $row["title"] ?> | <?= $row["releaseYear"] ?></div>
<?php } ?>