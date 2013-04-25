<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3c.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>

        <title>Shop</title>
        <meta charset="UTF-8">
        
        <style type="text/css">
                #cart{
                        padding:4px; margin:8px; float: left;
                        border: 1px; solid #ddd; background-color: #eee;
                        -moz-border-radius: 4px; -webkit-border-radius: 4px;
                        color: black;
                }
               #cart table{
                width: 320px; border-collapse: collapse;
                        text-align: left;
                }
                #cart th{
                        border-bottom: 1px solid #aaa;
                }
                #cart .total {
                        height 10px;
                        text-align: right;
                }
                    
                

                </style>


<body>


<!-- <ul>


        <?php foreach ($products as $product): ?>
        <li>
            <?php echo form_open('products/addtocart'); ?>
            <div class="name"><?php echo $product->name; ?></div>
            
            <div class="price">$<?php echo $product->price; ?></div>


            <?php echo form_hidden('id', $product->id); ?>
            <?php echo form_submit('action', 'Add to Cart'); ?>
            <?php echo form_close(); ?>
            </li>
            <?php endforeach; ?>
        </ul> -->






<h2>Products</h2>
<div id="cart">
    <table border = "1">
                <tr>
                <th>ID</th>
                <th>Description</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Imie</th>
                <th>Action</th>
                </tr>
                     <?php foreach($products as $product){ ?>
                     <form method='post' action="<?php base_url()?>product-add-to-cart"> 
                        <tr>
                        <td>
                        <?php echo $product['id'] ?>
                        <input type = "hidden" name = "id" value = "<?php echo $product['id'] ?>"/>
                        </td>
                        <td>
                        <?php echo $product['description'] ?>
                        <input type = "hidden" name = "description" value = "<?php echo $product['description'] ?>"/>
                        </td>
                        <td>
                        <?php echo $product['price'] ?>
                        <input type = "hidden" name = "price" value = "<?php echo $product['price'] ?>"/>
                        </td>
                        <td>
                        <input type = "text" name ="qty" style ="background-color:#eee; width:30px;" value = "1"/>
                        </td>
                        
                      
                        <td><?php echo $this->session->userdata('user_name'); ?></td>
                        
                         
                        <td><input type = "submit" value ="Add to cart" /></td> 
                        </tr>
                             
                        

         </form>
         <?php } ?>
        </table>
       

        

        <br/>
       
</div>



<!-- =============================================Karta produktow============================
========================================================================================
======================================================================================== -->




<?php if ($cart = $this->cart->contents()): ?>


<h2>My Shopping Cart</h2>
                          
                        <?php if(isset($this->session->userdata['user'])){?>
                        <div>
                        <?php echo $this->session->userdata['user']['msg'];
                                        $this->session->unset_userdata('user');
                        ?>
                        </div>
                        <?php } ?>
                        <form method='post' action="<?php echo base_url()?>index.php/save-shopping-cart">
                        <table border = "1">
                        <tr>
                                        <!-- <th>ID</th> -->
                                        <th>Description</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                        </tr>

                        <?php foreach ($cart as $product): ?>
                        <tr>
                        <td><?php echo $product['name']; ?></td>
                  <!--  <td>
                        <?php if ($this->cart->has_options($item['rowid'])) {
                        foreach ($this->cart->product_options($item['rowid']) as $option => $value) {
                        echo $option . ": <em>" . $value . "</em>";
                        }
                        
                    } ?>
                        </td> -->
                        <td>
                        <?php echo $product['qty'] ?>
                        <input type = "hidden"  name ="qty[]" style ="width:50px;" value = "<?php echo $product['qty']?>"/>
                        </td>
    
                        <td>$<?php echo $product['subtotal']; ?></td>
                        <td class="remove">
                        <?php echo anchor('products/remove/'.$product['rowid'],'X'); ?>
                        </td>
                        </tr>
                        <?php endforeach; ?>
        
                        <tr class="total">
                        <td colspan="2"><strong>Total</strong></td>
                        <td>$<?php echo $this->cart->total(); ?></td>
                        <input type = "submit" value = "Złóż zamówienie"/>
                        </form>
                        </tr>
                        </table>        


                    <?php endif ?>


</body>
</html>