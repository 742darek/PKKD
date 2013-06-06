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

<ul>
            <ul>

   
            <?php echo form_open('get/edit_ingr/'.$id); ?>
           <li>
                <label for="name">Podaj nazwę</label><br>
                <input type="text" name="name" value="<?php echo set_value('name',$name); ?>" />
                <?php echo form_error('name'); ?>
           </li>


           <li>
                <label for="qty">Podaj ilość składników w magazynie</label><br>
                <input type="text" name="qty" value="<?php echo set_value('qty',$qty); ?>" />
                <?php echo form_error('qty'); ?>
            </li>
           <li>
                <label for="price">Podaj cenę za szt.</label><br>
                <input type="price" name="price" value="<?php echo set_value('price',$price); ?>" />
                <?php echo form_error('price'); ?>
            </li>
        <ul>
            <h3 class="submit">
                <input type="submit" value="Zapisz" />
            </h3>
        </ul>
    </ul>
<?php echo form_close(); ?>

</div>
