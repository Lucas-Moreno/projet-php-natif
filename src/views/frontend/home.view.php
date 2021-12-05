<pre>
  <h1>Accueil</h1>
  <?php foreach ($articles as $article) :?>
    <div>
      <h1><?= $article->getTitle(); ?></h1>
      <p>Écrit par : <?= $article->getAuthor(); ?></p>
      <p><?= $article->getExcerpt(); ?></p>
      <button>Lire plus</button>
    </div>
  <?php  endforeach; ?>
</pre>