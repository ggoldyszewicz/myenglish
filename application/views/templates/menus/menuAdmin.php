<div class="menu" style="<?php if(isset($_COOKIE['menu-width'])) { echo 'width:'.$_COOKIE['menu-width'].'px;'; } ?>">                
        
    <div class="breadLine">            
        <div class="arrow"></div>
        <div class="adminControl active">
            <?php echo __('Hi').', ';
            if(isset($user -> username))
            {
                echo $user -> username;
            }
            ?>
        </div>
    </div>

    <div class="admin">
        <div class="image">
            <img src="<?php echo Kohana::$config->load('globals.base_url') ?>media/img/users/aqvatarius.jpg" class="img-polaroid"/>                
        </div>
        <ul class="control">                
            <!-- <li><span class="icon-comment"></span> <a href="messages.html">Messages</a> <a href="messages.html" class="caption red">12</a></li> -->
            <!-- <li><span class="icon-cog"></span> <a href="forms.html">Settings</a></li> -->
            <li><span class="icon-share-alt"></span> <a href="<?php echo Kohana::$config->load('globals.base_url') ?>logout"><?php echo __('Logout'); ?></a></li>
        </ul>
        <div class="info">
            <span><?php echo __('Welcom back! Your last visit:').' ';
            if(isset($user -> last_login))
            {
                echo date('Y-m-d h:i:s', $user -> last_login);
            }
            else
            {
                echo '-';
            }
            ?></span>
        </div>
    </div>

    <div id="tree_menu">
        <?php
        if(isset($adding) && $adding == true)
        {
            echo '<a href="'.Kohana::$config->load('globals.base_url').'category/new" class="btn btn-success">'.__('Add a category').'</a>';
            echo '<br>';
        }
        ?>
        
        <?php
        if(isset($tree_menu))
        {
            echo $tree_menu;
        }
        ?>
        
        <div class="message ui-state-highlight ui-corner-all" style="padding: 0 .7em; display: none; ">
            <p>
                <span class="ui-icon ui-icon-info" style="float: left; margin-right: .3em;"></span>
                <strong></strong>
            </p>
        </div>

        <button id="button" style="display: none;" class="btn">
            <span id="saveTree"><?php echo __('Save');?></span>
        </button> 
    </div>
    <div class="dr"><span></span></div>
    
    <ul class="navigation">            
        <li <?php if(isset($current) && $current == 'tests') { echo 'class="active"'; } ?>>
            <a href="<?php echo Kohana::$config->load('globals.base_url') ?>tests">
                <span class="isw-grid"></span><span class="text"><?php echo __('Tests') ?></span>
            </a>
        </li>
        <li <?php if(isset($current) && $current == 'users') { echo 'class="active"'; } ?>>
            <a href="<?php echo Kohana::$config->load('globals.base_url') ?>users">
                <span class="isw-grid"></span><span class="text"><?php echo __('Users') ?></span>
            </a>
        </li>
        <li <?php if(isset($current) && $current == 'profile') { echo 'class="active"'; } ?>>
            <a href="<?php echo Kohana::$config->load('globals.base_url') ?>profile">
                <span class="isw-chat"></span><span class="text"><?php echo __('Change password') ?></span>
            </a>
        </li> 
        
                                                     
    </ul>
    
    <div class="dr"><span></span></div>
</div>

<script>
$(document).ready(function() 
{
    <?php
    if(isset($active))
    {
        ?>
        $('#list_<?php echo $active; ?>').addClass('active'); 
        $('#list_<?php echo $active; ?>').toggleClass('mjs-nestedSortable-collapsed').toggleClass('mjs-nestedSortable-expanded');
        <?php
    }
    ?>
            
    $('.menu').resizable({
        handles: 'e, w',
        minWidth: 280,
        maxWidth: 900
    });
    
    $('.menu').bind("resize", function(){
        $width = $(this).width();
        $('.content').css( "margin-left", $width );
        $.cookie("menu-width", $width, {
            expires : 10,           //expires in 10 days

            path    : '/',          //The value of the path attribute of the cookie 
                                    //(default: path of page that created the cookie).
            secure  : false          //If set to true the secure attribute of the cookie
                                    //will be set and the cookie transmission will
                                    //require a secure protocol (defaults to false).
         });
    });
    
});
</script>