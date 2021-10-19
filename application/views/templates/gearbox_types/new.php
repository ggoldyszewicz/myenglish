<div class="content"> 
    <div class="breadLine">
        <ul class="breadcrumb">
            <li><a href="<?php echo Kohana::$config->load('globals.base_url') ?>"><?php echo __('Dashboard'); ?></a> <span class="divider">></span></li>
            <li><?php echo __('The data dictionary') ?> <span class="divider">></span></li>
            <li><?php echo __('Gearbox types') ?> <span class="divider">></span></li>
            <li class="active"><?php echo __('Add gearbox type') ?></li>
        </ul>
    </div>
    
    <div class="workplace">

        
        <div class="row-fluid">
                
            <div class="span12">
                <div class="head">
                    <div class="isw-documents"></div>
                    <h1><?php echo __('Add gearbox type') ?></h1>
                    <div class="clear"></div>
                </div>
                <div class="block-fluid">                        
                    <?php
                    echo Form::open('gearbox_types/new', array('method' => 'post', 'enctype' => 'multipart/form-data', 'id' => 'gearbox_type_new'));
                    $selected_gearbox_type = isset($item) ? $item -> id : 0;
                    echo Form::hidden('gearbox_type_id', $selected_gearbox_type);
                    ?>
                    <div class="row-form">
                        <div class="span3"><?php echo __('Name') ?>:</div>
                        <?php
                        $selected_name = isset($item) ? $item -> name : null;
                        ?>
                        <div class="span9"><?php echo Form::input('name', $selected_name); ?></div>
                        <div class="clear"></div>
                    </div> 

                    <div class="row-form">
                        <div class="span3"></div>
                        <div class="span9"><a style="height: 18px; padding-top: 1px;" class="btn btn-success" href="<?php echo Kohana::$config->load('globals.base_url') ?>gearbox_types"><?php echo __('Cancel') ?></a> <?php echo Form::submit(NULL, __('Save'), array('class' => 'btn')); ?></div>
                        <div class="clear"></div>
                    </div>                         
                    <?php
                    echo Form::close();
                    ?>
                                                                   

                </div>
            </div>

        </div>

    </div>

</div>