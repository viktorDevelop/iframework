<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" href="/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> fsfsd </title>

  </head>
  <body>
    <header>
        <? // $TopMenu->show();?>
        <?  $TopMenu->show() ;?>
    </header>


     <div class="main">
         <aside>
             <? $LeftMenu->show() ;?>

         </aside>
         <?$view->show(); ?>
     </div>

  <footer>
      <?//=$bottomMenu?>
  </footer>

  </body>
</html>
