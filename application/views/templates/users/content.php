<div class="content" style="<?php if(isset($_COOKIE['menu-width'])) { echo 'margin-left:'.$_COOKIE['menu-width'].'px;'; } ?>"> 
    <div class="breadLine">
        <ul class="breadcrumb">
            <li><a href="<?php echo Kohana::$config->load('globals.base_url') ?>"><?php echo __('Dashboard'); ?></a> <span class="divider">></span></li>
            <li class="active"><?php echo __('Users') ?></li>
        </ul>
    </div>
    <div class="workplace">

        <div class="row-fluid">
            <div class="span12">                    
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1><?php echo __('Users') ?></h1>                               
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
                                echo __('Login');
                                ?>
                            </th>
                            <th>
                                <?php
                                echo __('Email');
                                ?>
                            </th>		
                            <th style="width: 300px;">
                                <?php
                                    echo __('Actions');
                                ?>
                            </th>		
                        </thead>

                        <?php
                        if(isset($users))
                        {	
                            $counter = 1;
                            foreach($users as $item)
                            {
                                echo '<tr>';
                                echo '<td>';
                                    echo $counter;
                                echo '</td>';
                                echo '<td>';
                                    echo $item -> username;
                                echo '</td>';
                                echo '<td>';
                                    echo $item -> email;
                                echo '</td>';
                                echo '<td>';
                                    echo '<a href="'.Kohana::$config->load('globals.base_url').'users/new/'.$item->id.'" class="btn btn-success">'.__('Edit').'</a> ';
                                    if(!$item -> has('roles', ORM::factory('role', array('name' => 'superadmin'))) && $item->id != $user_id)
                                    {
                                        echo '<a href="'.Kohana::$config->load('globals.base_url').'users/delete/'.$item->id.'" class="btn btn-danger">'.__('Delete').'</a> ';
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