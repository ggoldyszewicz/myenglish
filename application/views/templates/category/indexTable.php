<div class="content" style="<?php if(isset($_COOKIE['menu-width'])) { echo 'margin-left:'.$_COOKIE['menu-width'].'px;'; } ?>">
    <div class="breadLine">
        <ul class="breadcrumb">
            <li><a href="<?php echo Kohana::$config->load('globals.base_url') ?>"><?php echo __('Dashboard'); ?></a> <span class="divider">></span></li>
            <li class="active"><?php echo Db_Category::getName($id); ?></li>
        </ul>
    </div>
    <div class="workplace">
        <a class="btn" href="<?php echo Kohana::$config->load('globals.base_url') ?>content/new?category_id=<?php echo $id; ?>"><?php echo __('Add a word / phrase') ?></a>
        <a class="btn" href="<?php echo Kohana::$config->load('globals.base_url') ?>category/generateTest?category_id=<?php echo $id; ?>"><?php echo __('Generate test') ?></a>
        
        <div class="row-fluid">
            <div class="span12">                    
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1><?php echo Db_Category::getName($id) ?></h1>                               
                    <div class="clear"></div>
                </div>
                <div class="block-fluid table-sorting">

                    <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable_2">
                        <thead>
                            <th style="width: 30px;">
                                <?php
                                echo __('L.p.');
                                ?>
                            </th>		
                            <th>
                                <?php
                                echo __('Word / sentence (en)');
                                ?>
                            </th>
                            <th>
                                <?php
                                echo __('Translation (pl)');
                                ?>
                            </th>		
                            <th style="width: 300px;">
                                <?php
                                    echo __('Actions');
                                ?>
                            </th>		
                        </thead>

                        <?php
                        if(isset($table))
                        {	
                            $counter = 1;
                            foreach($table as $item)
                            {
                                echo '<tr>';
                                echo '<td>';
                                    echo $counter;
                                echo '</td>';
                                echo '<td>';
                                    echo $item -> word;
                                echo '</td>';
                                echo '<td>';
                                    echo $item -> translation;
                                echo '</td>';
                                echo '<td>';
                                    echo '<a href="'.Kohana::$config->load('globals.base_url').'content/new/'.$item->id.'" class="btn btn-success">'.__('Edit').'</a> ';
                                    if($admin || $deleting || $user_id == $item -> owner)
                                    {
                                        echo '<a href="'.Kohana::$config->load('globals.base_url').'content/delete/'.$item->id.'" class="btn btn-danger">'.__('Delete').'</a> ';
                                    }
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