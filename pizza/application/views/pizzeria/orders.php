<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3c.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>

<meta http-equiv="content-type" content="text/html" charset="utf-8" />

<link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>application/views/pizzeria/pom.css" />








<div id="avmenu">
<h2 class="hide">Menu:</h2>
<ul>
<li><a href="<?php echo site_url('pizza/index');?>">Strona Główna</a></li>

<?php $this->load->view('pizzeria/leftmenu'); ?>



</ul>
</div>

<div id="extras">

<?php $this->load->view('pizzeria/extras'); ?>

</div>

<div id="content">
&nbsp;<h2>Zamówienia</h2>

<div class="table"><table border = "1">

                <tr>
                <th>ID</th>
                <th>ProductId</th>
                <th>Nazwa</th>
                <th>Cena</th>
                <th>Ilość</th>
                <th>Nick</th>
                <th>Adres</th>
                
                </tr>
                     <?php foreach($orders as $order){ ?>
                    
                        <tr>
                        <td>
                        <?php echo $order['id'] ?>
                        <input type = "hidden" name = "id" value = "<?php echo $order['id'] ?>"/>
                        </td>
                        <td>
                        <?php echo $order['product_id'] ?>
                        <input type = "hidden" name = "product_id" value = "<?php echo $order['product_id'] ?>"/>
                        </td>
                        <td>
                        <?php echo $order['description'] ?>
                        <input type = "hidden" name = "description" value = "<?php echo $order['description'] ?>"/>
                        </td>
                        <td>
                        <?php echo $order['price'] ?>
                        <input type = "hidden" name = "price" value = "<?php echo $order['price'] ?>"/>zł
                        </td>
                        
                         <td>
                        <?php echo $order['qty_ordered'] ?>
                        <input type = "hidden" name = "qty_ordered" value = "<?php echo $order['qty_ordered'] ?>"/>
                        </td>

                        <td>
                        <?php echo $order['imie'] ?>
                        <input type = "hidden" name = "imie" value = "<?php echo $order['imie'] ?>"/>
                        </td>

                        <td>
                        <?php echo $order['adres'] ?>
                        <input type = "hidden" name = "adres" value = "<?php echo $order['adres'] ?>"/>
                        </td>

                         
                        
                           
                        </tr>
                             
                        

        
                             
                        

        
         <?php } ?>
        </table></div>
         





        
        

</div>
