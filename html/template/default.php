<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo (isset($this->title)) ? $this->title : 'The Miner\'s Avatar'; ?> &mdash; Minotar</title>
        <!-- Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A Minotar is a global avatar that pulls your head off of your Minecraft.net skin, and allows it for use on thousands of sites. See some uses below.">
        <meta name="author" content="Axxim, LLC">
        <!-- Style -->
        <link href="/assets/css/style.css" rel="stylesheet">
        <link href="/assets/css/minotar.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="<?php echo URL; ?>avatar/clone1018/128.png">
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-22574465-1']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </head>
    <body>
        <a href="https://github.com/axxim/minotar"><img style="position: absolute; top: 0; left: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_left_darkblue_121621.png" alt="Fork me on GitHub"></a>
        <div class="container">
            <div class="row-fluid">
                <?php $this->yield(); ?>
            </div>
        </div>
    </body>
</html>