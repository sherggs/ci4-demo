<h2><?= esc($title) ?></h2>
<p><a class="btn btn-outline-primary mb-4 mt-4" href="<?=base_url()?>/news/create">create article</a></p>


<?php if (! empty($news) && is_array($news)): ?>

    <?php foreach ($news as $news_item): ?>
        <div class="card" style="width: 18rem;">
        <div class="card-body " >
        <h3 class="card-title" ><?= esc($news_item['title']) ?></h3>

        <div class="main" class="card-text mb-3">
            <?= esc($news_item['body']) ?>
        </div>
        <p><a class="btn btn-outline-primary mb-4 mt-4" href="<?=base_url()?>/news/<?= esc($news_item['slug'], 'url') ?>">View article</a></p>
        </div>
        </div>
    <?php endforeach ?>

<?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>