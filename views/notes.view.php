<?php require "partials/head.php"?>
<?php require "partials/nav.php"?>

<?php require "partials/common.php"?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        <?php foreach($notes as $note): ?>
                <li><?php echo $note['body'] ?></li>
            <?php endforeach; ?>
        
    </div>
</main>
<?php require "partials/footer.php"?>