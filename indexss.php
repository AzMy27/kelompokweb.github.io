<html>
    <h1>Pengenalan Tulisan PHP</h1>
    <? 
    echo ("<p>1. ini sangat simple, pada SGML proses instruksi\n");?>
    <?php echo("<p>2. jika mau ke server XML docs, lakukan seperti ini\n");?>

    <script language="php">
      echo(
        "<p>3.  some editors (like FrontPage) don't like proccesing instruction"\n
      );
    </script>

    <% echo("
    <p>4. you may optionally use ASP-style tags\n"); %></p>
    <%=$variable;#This is a shortcut for"<"%echo..."%>

