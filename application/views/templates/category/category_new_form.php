<div class="content" style="<?php if(isset($_COOKIE['menu-width'])) { echo 'margin-left:'.$_COOKIE['menu-width'].'px;'; } ?>"> 
    <div class="breadLine">
        <ul class="breadcrumb">
            <li><a href="<?php echo Kohana::$config->load('globals.base_url') ?>"><?php echo __('Dashboard'); ?></a> <span class="divider">></span></li>            
            <li class="active">
                <?php
                    if(isset($item))
                    {
                        echo __('Edit category');
                    }
                    else
                    {
                        echo __('Add a category');
                    }
                ?>
            </li>
        </ul>
    </div>
    
    <div class="workplace">
        <div class="row-fluid">
            <div class="span12">
                <div class="head">
                    <div class="isw-documents"></div>
                    <h1>
                        <?php
                        if(isset($item))
                        {
                            echo __('Edit category');
                        }
                        else
                        {
                            echo __('Add a category');
                        }
                        ?>
                    </h1>
                    <div class="clear"></div>
                </div>
                <div class="block-fluid">                        
                    <?php
                    echo Form::open('category/new', array('method' => 'post', 'enctype' => 'multipart/form-data', 'id' => 'content_new'));
                    $selected_content_id = isset($item) ? $item -> category_id : 0;
                    echo Form::hidden('category_id', $selected_content_id);
                    ?>
                    <div class="row-form">
                        <div class="span3">
                            <?php 
                            echo __('Parent').':'; 
                            ?>
                        </div>
                        <div class="span9">
                            <?php 
                            if(isset($item) || isset($parent_id))
                            {
                                if(isset($item))
                                {
                                    $selected = $item -> parent_id;
                                    $category_id = $item -> category_id;
                                }
                                else
                                {
                                    $selected = $parent_id;
                                    $category_id = $selected;
                                }    
                            }
                            else
                            {
                                    $selected = null;
                            }
                            echo Form::select('parent', $tree, $selected, array( 'class' => 'input_parent'));
                            ?>
                        </div>
                        <div class="clear"></div>
                    </div>                    
                    <div class="row-form row-form-content">
                        <div class="span3">
                        <?php 
                            $selected_name = isset($item) ? $item -> title : null;
                            echo __('Name (designation)').'*:<br>';
                        ?>
                        </div>
                        <div class="span9">
                            <?php 
                            echo Form::input('name', $selected_name, array('class' => 'required'));
                            ?>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <?php
                    if((isset($admin) && $admin == true) || (isset($haveprivate) && $haveprivate == true  && !isset($item)) || (isset($haveprivate) && $haveprivate == true  && isset($item) && $item -> owner == $user_id))
                    {
                    ?>
                    <div class="row-form row-form-content">
                        <div class="span3">
                        <?php 
                            $selected_name = isset($item) ? (bool)$item -> private : null;
                            echo __('Private category').':<br>';
                        ?>
                        </div>
                        <div class="span9">
                            <?php 
                            echo Form::checkbox('private', 1, $selected_name);
                            ?>
                        </div>
                        <div class="clear"></div>
                    </div>                    
                    <?php
                    }
                    ?>
                    <div class="row-form row-form-content">
                        <div class="span3">
                        <?php 
                            $selected_name = isset($item) ? $item -> title : null;
                            echo __('Description').':<br>';
                        ?>
                        </div>
                        <div class="span9">
                            <?php 
                            if(isset($item))
                            {
                                    $desc = $item -> description;
                            }
                            else
                            {
                                    $desc = null;
                            }		
                            echo Form:: textarea('description', $desc,  array('rows' => 3));
                            ?>
                        </div>
                        <div class="clear"></div>
                    </div>                    
                    <div class="row-form">
                        <div class="span3"></div>
                        <div class="span9">
                            <?php
                            if(isset($category_id) || isset($parent_id))
                            {
                            ?>
                            <a style="height: 18px; padding-top: 1px;" class="btn btn-success" href="<?php echo Kohana::$config->load('globals.base_url') ?>category/index/<?php echo $category_id; ?>"><?php echo __('Cancel') ?></a> 
                            <?php
                            }
                            else
                            {
                            ?>
                            <a style="height: 18px; padding-top: 1px;" class="btn btn-success" href="<?php echo Kohana::$config->load('globals.base_url') ?>"><?php echo __('Cancel') ?></a> 
                            <?php
                            }
                            echo Form::submit(NULL, __('Save'), array('class' => 'btn')); ?></div>
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
<script>
$(document).ready(function() 
{   
    $('#content_new').submit(function() 
    { 
        if(validate() == false)
        {
            alert("<?php echo __('Please fill in all fields') ?>");
            return false;
        }
        else
        {        
            return true;
        }
        
    });
});

function validate() 
{
    var error = false;
    $('#content_new select').each(function(){
        
        if($(this).hasClass('required') && $(this).val() == 0)
        {
            $(this).addClass('error');
            error = true;
        }
        else
        {
            $(this).removeClass('error');
        }
    });
    
    $('#content_new input').each(function(){
        
        if($(this).hasClass('required') && $(this).val() == '')
        {
            $(this).addClass('error');
            error = true;
        }
        else
        {
            $(this).removeClass('error');
        }
    }); 
    
    if(error == true)
    {
        return false;
    }
    else
    {
        return true;
    }
}
</script>