<pre>
  <?php foreach ($articles as $article) :?>
    <div>
      <h1><?= $article->getTitle(); ?></h1>
      <p>Écrit par : <?= $article->getAuthor(); ?></p>
      <p>Le : <?= $article->getDate(); ?></p>
      <img src="<?= $article->getImgUrl(); ?>" alt="Image de l\'article">
      <p><?= $article->getContent(); ?></p>
    </div>
  <?php  endforeach; ?>
</pre>