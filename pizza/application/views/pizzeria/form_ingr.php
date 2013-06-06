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
        <?php echo form_open('dodawanie/ingr'); ?>
    <ul>

            <li>
                <label for="name">Podaj nazwę składnika</label><br>
                <input type="text" name="name" value="<?php echo set_value('name'); ?>" />
                <?php echo form_error('name'); ?>
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
