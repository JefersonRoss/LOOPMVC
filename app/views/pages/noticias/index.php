<h1>Posts</h1>

<?php foreach ($data as $post) : ?>
    <h2><?php echo $post['titulo']; ?></h2>
    <p><?php echo $post['texto']; ?></p>
    <hr>
<?php endforeach; ?>
