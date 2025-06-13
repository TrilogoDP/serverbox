<div style="margin-top: 15px;">
<?php if($advanced_settings){ ?>



    <?php foreach($advanced_settings as $type_data_general_setting_name => $type_data_general_setting){ ?>
           
    
        
    
        <h4 style="margin-bottom: 10px;"><?php echo $title_advanced_settings_row; ?></h4>
    
        <div class="well">
            
            <table class="table table-bordered table-hover" style="margin-bottom: 0px;">
          <tbody>
                
    
            <?php foreach($type_data_general_setting as $additional){ ?>
            
            <?php if(isset($additional['hide_this_additinal_data']) && $additional['hide_this_additinal_data']){ ?>

            <tr style='display:none' >

            <?php }else{ ?>
            
            <tr>
            
            <?php } ?>

            
            
            
                    <td class="text-left">
                        <?php echo $additional['placeholder'] ?>
                    </td>
                    <td style="width:35%;">
                        <?php if($additional['element']=='input'){ ?>

                            <input style='margin-top:5px;' type="<?php echo $additional['type'] ?>" name="<?php echo $additional['name'] ?>" value="<?php echo $additional['value'] ?>" placeholder="<?php echo $additional['placeholder'] ?>" class='form-control' />

                        <?php }elseif($additional['element']=='select'){ ?>

                        <select <?php if(isset($additional['multiple']) && $additional['multiple']){ ?> multiple="multiple" <?php } ?> name="<?php echo $additional['name'] ?>" class="form-control" onchange="<?php echo $additional['onchange'] ?>" style="margin-top: 5px;<?php echo $additional['style'] ?>">

                                <?php $optiongroup = ''; ?>

                                <?php foreach($additional['options'] as $option){ ?>

                                    <?php if(isset($option['optiongroup']) && $optiongroup!=$option['optiongroup']){ ?>
                                        <?php $optiongroup = $option['optiongroup']; ?>
                                        <optgroup label="<?php echo $option['optiongroup'] ?>">
                                    <?php } ?>

                                        <option value="<?php echo $option['value'] ?>" <?php echo $option['selected'] ?> ><?php echo $option['text'] ?></option>

                                    <?php if(isset($option['optiongroup']) && $optiongroup!=$option['optiongroup']){ ?>
                                        <?php $optiongroup = $option['optiongroup']; ?>
                                        </optgroup>
                                        <optgroup label="<?php echo $option['optiongroup'] ?>">
                                    <?php }elseif(!isset($option['optiongroup']) && $optiongroup){ ?>
                                        </optgroup>
                                    <?php } ?>

                                <?php } ?>

                                    <?php if($optiongroup){ ?>
                                        </optgroup>
                                    <?php } ?>

                            </select>

                        <?php } ?>
                        
                        <?php if(isset($additional['advanced_setting']) && $additional['advanced_setting']){ ?>
                        
                        <div>
                            
                            <?php echo $additional['advanced_setting']; ?>
                            
                        </div>
                        
                        <?php } ?>
                        
                    </td>
            </tr>
            
                        <?php } ?>
          </tbody></table>
        </div>   
            
            
    <?php } ?>
    
    <script type="text/javascript"><!--
    
    $(document).ready(function() {
        updateSaveButton('<?php echo $type_process ?>');
    });
    
//--></script> 
    
<?php } ?>

</div>