<div class="content"> 
    <div class="breadLine">
        <ul class="breadcrumb">
            <li><a href="<?php echo Kohana::$config->load('globals.base_url') ?>"><?php echo __('Dashboard'); ?></a> <span class="divider">></span></li>
            <li><?php echo __('The data dictionary') ?> <span class="divider">></span></li>
            <li><?php echo __('Fuel types') ?> <span class="divider">></span></li>
            <li class="active"><?php echo __('Delete fuel type') ?></li>
        </ul>
    </div>
    
    <div class="workplace">

        
        <div class="row-fluid">
                
            <div class="span12">
                <div class="head">
                    <div class="isw-documents"></div>
                    <h1><?php echo __('Delete fuel type') ?></h1>
                    <div class="clear"></div>
                </div>
                <div class="block-fluid">                        
                    <?php
                    echo Form::open('fuel_types/delete', array('method' => 'post', 'enctype' => 'multipart/form-data', 'id' => 'fuel_types_delete'));
                    $selected_fuel_type = isset($fuel_type_id) ? $fuel_type_id : 0;
                    echo Form::hidden('fuel_type_id', $selected_fuel_type);
                    ?>
                    <div class="row-form">
                        <div class="span3"></div>
                        
                        <div class="span9">
                            <?php
                            echo __('Do you want to delete the entry in the database')."?";
                            echo '<br/>';
                            echo __('The operation is irreversible').'!';
                            ?>
                        </div>
                        <div class="clear"></div>
                    </div> 

                    <div class="row-form">
                        <div class="span3"></div>
                        <div class="span9"><a style="height: 18px; padding-top: 1px;" class="btn btn-success" href="<?php echo Kohana::$config->load('globals.base_url') ?>fuel_types"><?php echo __('Cancel') ?></a> <?php echo Form::submit(NULL, __('Delete'), array('class' => 'btn btn-danger')); ?></div>
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