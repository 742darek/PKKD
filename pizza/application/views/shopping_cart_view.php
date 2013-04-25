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
<h2>My Shopping Cart</h2>
<div id="cart">                             
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
                                        <th>ID</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Qty</th>
                                        <th>Imie</th>
                        </tr>
                        <?php
                                        foreach($products as $product){ ?>  
                                         <form method='post' action="<?php base_url()?>product-add-to-cart">              
                                        <tr>
                                        <td>
                                        <?php echo $product['id'] ?>
                                        <input type = "hidden" name = "id[]" value = "<?php echo $product['id'] ?>"/>
                                        </td>
                                        <td>
                                        <?php echo $product['description'] ?>
                                        <input type = "hidden" name = "name[]" value = "<?php echo $product['description'] ?>"/>
                                        </td>
                                        <td>
                                        <?php echo $product['price'] ?>
                                        <input type = "hidden" name = "price[]" value = "<?php echo $product['price'] ?>"/>
                                        </td>
                                        <td>
                                        <?php echo $product['qty'] ?>
                                        <input type = "hidden"  name ="qty[]" style ="width:50px;" value = "<?php echo $product['qty']?>"/>
                                        </td>
                                        









                                        <td>
                                        <?php echo $this->session->userdata('user_name'); ?>
                                        <input type = "hidden"  name ="imie[]" style ="width:50px;" value = "<?php echo $this->session->userdata('user_name'); ?>"/>
                                        </td>
                                        </tr>
                                       <!--  <tr class="total"><td colspan="2"><strong>Total</strong></td>
                                        <td>$<?php echo $this->cart->total(); ?></td></tr> -->
                                      
                                        
                                        </tr>
                                        <?php } ?>  
                                        </table>
                                        <tr class="total"><td colspan="2"><strong>Total</strong></td>
                                        <td>$<?php echo $this->cart->total(); ?></td></tr>
                                        <input type = "submit" value = "Złóż zamówienie"/>
                        </form>

                        <div>
                                        <a href = "<?php base_url()?>products">Go back Products</a>
                                       
                        </div>
</div>
</body>
</head>
</html>