<!-- File: /app/View/Posts/view.ctp -->
<div class = "row">
    <div class = "span12">
        <h1><?php echo h($post['Post']['title']); ?></h1>

        <p><small>Created: <?php echo $post['Post']['created']; ?></small></p>

        <p><?php echo h($post['Post']['body']); ?></p>
    </div>
</div>