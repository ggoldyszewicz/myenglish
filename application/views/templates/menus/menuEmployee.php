<div class="menu">                
        
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

    <ul class="navigation">            
        <li <?php if(isset($current) && $current == 'graphics') { echo 'class="active"'; } ?>>
            <a href="<?php echo Kohana::$config->load('globals.base_url') ?>graphics">
                <span class="isw-grid"></span><span class="text"><?php echo __('Graphics') ?></span>
            </a>
        </li> 
        <li <?php if(isset($current) && $current == 'vacations') { echo 'class="active"'; } ?>>
            <a href="<?php echo Kohana::$config->load('globals.base_url') ?>vacations">
                <span class="isw-chat"></span><span class="text"><?php echo __('Vacations') ?></span>
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