<div class="content" style="<?php if(isset($_COOKIE['menu-width'])) { echo 'margin-left:'.$_COOKIE['menu-width'].'px;'; } ?>"> 
    <div class="breadLine">
        <ul class="breadcrumb">
            <li><a href="<?php echo Kohana::$config->load('globals.base_url') ?>"><?php echo __('Dashboard'); ?></a> <span class="divider">></span></li>
            <li class="active"><?php echo __('Tests') ?></li>
        </ul>
    </div>
    <div class="workplace">

        <div class="row-fluid">
            <div class="span12">                    
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1><?php echo __('Tests') ?></h1>                               
                    <div class="clear"></div>
                </div>
                <div class="block-fluid table-sorting">

                    <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable_5">
                        <thead>
                            <th style="width: 30px;">
                                <?php
                                echo __('L.p.');
                                ?>
                            </th>		
                            <th>
                                <?php
                                echo __('Name');
                                ?>
                            </th>
                            <th>
                                <?php
                                echo __('Number of students');
                                ?>
                            </th>
                            <th>
                                <?php
                                echo __('Number of words / sentences');
                                ?>
                            </th>
                            <th>
                                <?php
                                echo __('Link');
                                ?>
                            </th>
                            <th>
                                <?php
                                echo __('Key');
                                ?>
                            </th>
                            <th style="width: 300px;">
                                <?php
                                    echo __('Actions');
                                ?>
                            </th>		
                        </thead>

                        <?php
                        if(isset($tests))
                        {	
                            $counter = 1;
                            foreach($tests as $item)
                            {
                                echo '<tr>';
                                echo '<td>';
                                    echo $counter;
                                echo '</td>';
                                echo '<td>';
                                    if((isset($admin) && $admin == true) || $user_id == $item -> created_by || (isset($editing) && $editing == true))
                                    {
                                        echo '<a title="'.$item -> description.'" href="'.Kohana::$config->load('globals.base_url').'tests/new/'.$item->id.'">'.$item -> name.'</a> ';
                                    }
                                    else
                                    {
                                        echo '<a title="'.$item -> description.'" href="">'.$item -> name.'</a> ';
                                    }
                                echo '</td>';
                                echo '<td>';
                                    echo $item -> students;
                                echo '</td>';
                                echo '<td>';
                                    echo $item -> words;
                                echo '</td>';
                                echo '<td>';
                                    echo '<a class="btn btn-success" target="_blank" title="'.$item -> description.'" href="'.Kohana::$config->load('globals.base_url').'files/'.$item -> file.'.pdf">'.$item -> file.'.pdf</a>';
                                echo '</td>';
                                echo '<td>';
                                    if(file_exists('files/'.$item -> file.'_key.pdf'))
                                    {
                                        echo '<a class="btn" target="_blank" title="'.$item -> description.'" href="'.Kohana::$config->load('globals.base_url').'files/'.$item -> file.'_key.pdf">'.$item -> file.'_key.pdf</a>';
                                    }
                                echo '</td>';
                                echo '<td>';
                                    if((isset($admin) && $admin == true) || $user_id == $item -> created_by || (isset($editing) && $editing == true))
                                    echo '<a href="'.Kohana::$config->load('globals.base_url').'tests/new/'.$item->id.'" class="btn btn-success">'.__('Edit').'</a> ';
                                    if((isset($admin) && $admin == true) || $user_id == $item -> created_by || (isset($deleting) && $deleting == true))
                                    echo '<a href="'.Kohana::$config->load('globals.base_url').'tests/delete/'.$item->id.'" class="btn btn-danger">'.__('Delete').'</a> ';
                                echo '</td>';		
                                echo '</tr>';

                                $counter++;
                            }
                        }
                        ?>
                    </table>
                    <div class="clear"></div>
                </div>
            </div>                                

        </div>
        

    </div>

</div>                    