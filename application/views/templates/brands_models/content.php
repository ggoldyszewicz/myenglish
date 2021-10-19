<div class="content"> 
    <div class="breadLine">
        <ul class="breadcrumb">
            <li><a href="<?php echo Kohana::$config->load('globals.base_url') ?>"><?php echo __('Dashboard'); ?></a> <span class="divider">></span></li>
            <li><?php echo __('The data dictionary') ?> <span class="divider">></span></li>
            <li class="active"><?php echo __('Car Brands') ?></li>
        </ul>
    </div>
    
    <div class="workplace">
        <?php
        
        echo Form::open('brands_models', array('method' => 'get', 'enctype' => 'multipart/form-data', 'id' => 'brands_models'));
        $brand_selected = isset($brand_id) ? $brand_id : 0;
        echo '<font class="label-select">'.__('Brand').':</font> '.Form::select('brand_id', $brands, $brand_selected);
        
        echo Form::close();
        if(isset($brand_id) && $brand_id > 0)
        {
        ?>
        
        <a class="btn" href="<?php echo Kohana::$config->load('globals.base_url') ?>brands_models/new?brand_id=<?php echo $brand_id; ?>"><?php echo __('Add model') ?></a>
        
        <div class="row-fluid">
            <div class="span12">                    
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1><?php echo __('Car models of').' '.Db_Brand::getName($brand_id); ?></h1>                               
                    <div class="clear"></div>
                </div>
                <div class="block-fluid table-sorting">
                    <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable_2">
                        <thead>
                            <tr>
                                
                                <th width="20%"><?php echo __('L.p.'); ?></th>
                                <th width="40%"><?php echo __('Name'); ?></th>
                                <th width="30%"><?php echo __('Actions'); ?></th>
                                <th width="10%"><?php echo __('Date create'); ?></th>                                  
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $counter = 1;
                            foreach($brands_models as $v)
                            {
                                ?>
                                <tr>
                                    <td><?php echo $counter; ?></td>
                                    <td><?php echo $v -> name; ?></td>
                                    <td>
                                        <a class="btn btn-success" href="<?php echo Kohana::$config->load('globals.base_url') ?>brands_models/new/<?php echo $v -> id; ?>"><?php echo __('Edit') ?></a>
                                        <a class="btn btn-danger" href="<?php echo Kohana::$config->load('globals.base_url') ?>brands_models/delete/<?php echo $v -> id; ?>"><?php echo __('Delete') ?></a>
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <?php
                                $counter++;
                            }
                            ?>
                        </tbody>
                    </table>
                    <div class="clear"></div>
                </div>
            </div>                                

        </div>
        <?php
        }
        ?>

    </div>

</div>

<script>
$(document).ready(function() 
{
    $('#brands_models').change(function(){
        this.submit();
    });
});
</script>