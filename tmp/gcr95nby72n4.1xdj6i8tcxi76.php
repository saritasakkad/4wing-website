<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  </head>
  <body class="container">
    <h1>traduction page: <?= $pagename ?></h1>
    <!-- onglets -->

    <ul class="nav nav-tabs">
      <li role="presentation" class="<?= $lg == 'fr' ? 'active': '' ?>"><a href="/4wing-website/admin/tradpage/<?= $pagename ?>/fr">FR</a></li>
      <li role="presentation" class="<?= $lg == 'nl' ? 'active': '' ?>"><a href="/4wing-website/admin/tradpage/<?= $pagename ?>/nl">NL</a></li>
      <li role="presentation" class="<?= $lg == 'en' ? 'active': '' ?>"><a href="/4wing-website/admin/tradpage/<?= $pagename ?>/en">EN</a></li>
    </ul>    
    <div class="container">
    <form class="" action="http://localhost/4wing-website/admin/page_trad_changes/<?= $pagename ?>/<?= $lg ?>" method="post">
      <?php foreach (($all_trad?:[]) as $trad): ?>
          <!-- <input type="text" value="<?= $trad['string_origin'] ?>" disabled>
          <input type="text" value="<?= $trad['string_trad'] ?>" name="<?= $trad['id'] ?>" > -->
          <label for="<?= $trad['string_origin'] ?>" ><?= $trad['string_origin'] ?></label>
          <textarea class="form-control" id=""<?= $trad['string_origin'] ?>  name="<?= $trad['id'] ?>" rows="3"><?= $trad['string_trad'] ?></textarea>
          <br/>
      <?php endforeach; ?>
      <input type="submit">
    </form>
    </div>

  </body>
</html>