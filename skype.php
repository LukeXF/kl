<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="1;url=skype:<?php echo $_GET['user'] ?>?chat">
        <script type="text/javascript">
            window.location.href = "skype:<?php echo $_GET['user'] ?>?chat"
        </script>
        <title>Page Redirection</title>
    </head>
    <body>
        <!-- Note: don't tell people to `click` the link, just tell them that it is a link. -->
        Loading up the Skype account of <?php echo $_GET['user'] ?>?chat click <a href='skype:<?php echo $_GET['user'] ?>?chat'>here</a> if it is not working
    </body>
</html>