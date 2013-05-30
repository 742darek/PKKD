<div id="avmenu">
<h2 class="hide">Menu:</h2>
<ul>
<?php $this->load->view('pizzeria/leftmenu'); ?>
</ul>
</div>

<div id="extras">
<?php $this->load->view('pizzeria/extras'); ?>
</div>

<div id="content">

<div class="dodawanie">
    

       <?php $this->load->helper('form'); ?>
        <?php echo form_open('dodawanie'); ?>
    <ul>

            <li>
                <label for="description">Podaj nazwę pizzy</label><br>
                <input type="text" name="description" value="<?php echo set_value('description'); ?>" />
                <?php echo form_error('description'); ?>
           </li>



             <li>
                <label for="opis">Podaj opis(składniki)</label><br>
                <input type="text" name="opis" value="<?php echo set_value('opis'); ?>" />
                <?php echo form_error('opis'); ?>
           </li>

           <li>
                <label for="qty">Podaj ilość (ile na stanie)</label><br>
                <input type="text" name="qty" value="<?php echo set_value('qty'); ?>" />
                <?php echo form_error('qty'); ?>
            </li>
           <li>
                <label for="price">Podaj cenę za szt.</label><br>
                <input type="price" name="price" value="<?php echo set_value('price'); ?>" />
                <?php echo form_error('price'); ?>
            </li>

        
            
        
                 <button type="submit" name="submit" class="button">Dodaj</button>


            </ul>
            
        
    
<?php echo form_close(); ?>

</div>
    
        
     
        


			


</div>
