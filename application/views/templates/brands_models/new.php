<div class="content"> 
    <div class="breadLine">
        <ul class="breadcrumb">
            <li><a href="<?php echo Kohana::$config->load('globals.base_url') ?>"><?php echo __('Dashboard'); ?></a> <span class="divider">></span></li>
            <li><?php echo __('The data dictionary') ?> <span class="divider">></span></li>
            <li><?php echo __('Car Brands') ?> <span class="divider">></span></li>
            <li class="active"><?php echo __('Add brand') ?></li>
        </ul>
    </div>
    
    <div class="workplace">

        
        <div class="row-fluid">
                
            <div class="span12">
                <div class="head">
                    <div class="isw-documents"></div>
                    <h1><?php echo __('Add model') ?></h1>
                    <div class="clear"></div>
                </div>
                <div class="block-fluid">                        
                    <?php
                    
                    $selected_brand = isset($brand_id) ? $brand_id : 0;
                    if(isset($item))
                    {
                        $selected_brand = isset($item -> id) && $item -> id > 0 ? $item -> id : 0;
                    }
                    
                    echo Form::open('brands_models/new?brand_id='.$selected_brand, array('method' => 'post', 'enctype' => 'multipart/form-data', 'id' => 'brands_new'));
                    
                    echo Form::hidden('brand_id', $selected_brand);
                    $selected_model = isset($item) ? $item -> id : 0;
                    echo Form::hidden('model_id', $selected_model);
                    ?>
                    <div class="row-form">
                        <div class="span3"><?php echo __('Brand') ?>:</div>
                        <div class="span9"><?php if(isset($selected_brand)) { echo Db_Brand::getName($selected_brand); } ?></div>
                        <div class="clear"></div>
                    </div> 
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
                        <div class="span9"><a style="height: 18px; padding-top: 1px;" class="btn btn-success" href="<?php echo Kohana::$config->load('globals.base_url') ?>brands_models?brand_id=<?php echo $selected_brand; ?>"><?php echo __('Cancel') ?></a> <?php echo Form::submit(NULL, __('Save'), array('class' => 'btn')); ?></div>
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