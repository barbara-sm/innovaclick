<!DOCTYPE html>
<html lang="pt-br" xmlns:mso="urn:schemas-microsoft-com:office:office" xmlns:msdt="uuid:C2F41010-65B3-11d1-A29F-00AA00C14882">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/resert.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-t/+h9R+giYTPQnp1hZKcv3i+JfB4hJAjW2uMZpgxVD7ymOz28TGl71npFjEJ0p7uGYlJdX7f5F/vbH3eAzNwFw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
    <link rel="stylesheet" href="css/style.css">
    <title>INNOVA CLICK</title>

</head>
<body>
   <header>
      <!--Inicio do cabeçalho -->
      <?php require_once('conteudo/topo.php')?>
   </header>

   <main>
      <!--BANNER-->
      <?php require_once('conteudo/banner.php') ?>
      <!--Serviço -->
       <?php require_once('conteudo/servico.php')?>

       <!--Sobre -->
        <?php require_once('conteudo/sobre.php')?>

        <!--Equipe -->
        <?php require_once('conteudo/equipe.php')?>
   </main>
   <footer>
       <!--Footer-->
       <?php require_once('conteudo/footer.php')?>
   </footer>
   <!-- Jquery-->
   <script src="https://kit.fontawesome.com/115a5f9e3b.js" crossorigin="anonymous"></script>
   <script type="text/javascript" src="//code.jquery.com/jquery-3.7.1.min.js"></script>
   <script type="text/javascript" src="js/code.jquery.com/jquery-migrate-3.4.0.min.js"></script>
   <!--Banner-->
   <script type="text/javascript" src="js/slick.min.js"></script>
   <script src="js/script.js"></script>
</body>
   
</html>