<html>
<head>
<title>Shopping Cart |BizjobFinder</title>
</head>
<body>
<h2>My Shopping Cart</h2>
<div>                             
                        <?php if(isset($this->session->userdata['user'])){?>
                        <div>
                        <?php echo $this->session->userdata['user']['msg'];
                                        $this->session->unset_userdata('user');
                        ?>
                        </div>
                        <?php } ?>
                        <form method='post' action="<?php echo base_url()?>save-shopping-cart">
                        <table border = "1">
                        <tr>
                                        <th>ID</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Qty</th>
                        </tr>
                        <?php
                                        foreach($products as $product){ ?>               
                                        <tr>
                                        <td>
                                        <?php echo $product['id'] ?>
                                        <input type = "hidden" name = "id[]" value = "<?php echo $product['id'] ?>"/>
                                        </td>
                                        <td>
                                        <?php echo $product['name'] ?>
                                        <input type = "hidden" name = "name[]" value = "<?php echo $product['name'] ?>"/>
                                        </td>
                                        <td>
                                        <?php echo $product['price'] ?>
                                        <input type = "hidden" name = "price[]" value = "<?php echo $product['price'] ?>"/>
                                        </td>
                                        <td>
                                        <?php echo $product['qty'] ?>
                        <input type = "hidden"  name ="qty[]" style ="width:50px;" value = "<?php echo $product['qty']?>"/>
                                        </td>
                                        </tr>
                                        <? } ?>  
                                        </table>
                                        <input type = "submit" value = "Save Cart"/>
                        </form>
                        <div>
                                        <a href = "<?php base_url()?>products">Go back Products</a>
                        </div>
</div>
</body>
</html>