<?php

include_once("Templates/header.php");

?>

<main>
    <div id="titulo-secao">
        <h1>Blog Codar</h1>
        <p>O seu blog de programação</p>
    </div>
    <div id="conteudo-post">
      <?php foreach($posts as $post): ?>
        <div class="caixa-post">
          <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
          <h2 class="titulo-post">
            <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a>
          </h2>
          <p class="descricao-post"><?= $post['description'] ?></p>
          <div class="conteudo-tags">
            <?php foreach($post['tags'] as $tag): ?>
              <a href="#"><?= $tag ?></a>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    </div>
</main>    


<?php

include_once("Templates/footer.php");

?>