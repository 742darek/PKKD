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
&nbsp;<h2>Zamówienia</h2>

<div class="table"><table border = "1">

                <tr>
                <th>ID</th>
                <th>Nazwa</th>
                <th>Cena</th>
                <th>Ilość</th>
                
                <th>Razem</th>
                <th>Nick</th>
                <th>Adres</th>
                
                
                </tr>
                     <?php foreach($orders as $order){ ?>
                    
                        <tr>
                        <td>
                        <?php echo $order['id'] ?>
                        <input type = "hidden" name = "id" value = "<?php echo $order['id'] ?>"/>
                        </td>
                        <!-- <td>
                        <?php echo $order['product_id'] ?>
                        <input type = "hidden" name = "product_id" value = "<?php echo $order['product_id'] ?>"/>
                        </td> -->
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
                        <td><?php echo $order['qty_ordered']*$order['price'] ?> zł</td>
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
