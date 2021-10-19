<!DOCTYPE html>
<html>
    <head>
        <title><?php echo Kohana::$config->load('globals.title') ?></title>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <?php foreach($styles as $file => $type) { echo HTML::style($file, array('media' => $type), NULL, TRUE), "\n"; }?>
        <?php foreach($scripts as $file) { echo HTML::script($file), "\n"; }?> 
        
        <script>
        $(document).ready(function() 
        {
            <?php
            if(isset($parents))
            {
                foreach($parents as $p)
                {
                ?>
                $('#list_<?php echo $p; ?>').toggleClass('mjs-nestedSortable-collapsed').toggleClass('mjs-nestedSortable-expanded');
                <?php
                }
            }
            ?>
        });
        </script>
        
    </head>

    <body>

        <div class="header">
            <a class="logo" href="<?php echo Kohana::$config->load('globals.base_url') ?>"><?php echo Kohana::$config->load('globals.title') ?></a>
            <ul class="header_menu">
                <li class="list_icon"><a href="#">&nbsp;</a></li>
            </ul>    
        </div>