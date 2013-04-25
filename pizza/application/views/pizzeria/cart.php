<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3c.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>

<meta http-equiv="content-type" content="text/html" charset="utf-8" />

<style type="text/css">
                #cart{
                        
                        padding:4px; margin:8px; float: left;
                        border: 1px; solid #ddd; background-color: #eee;
                        -moz-border-radius: 4px; -webkit-border-radius: 4px;
                        color: black;
                        margin:0 0 0 60px;
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
<link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>application/views/pizzeria/pom.css" />
<div id="avmenu">
<h2 class="hide">Menu:</h2>
<ul>
<li><a href="<?php echo site_url('pizza/index');?>">Strona Główna</a></li>

<?php $this->load->view('pizzeria/leftmenu'); ?>

</ul>
</div>

<div id="extras">
<h3>&nbsp;<br />
  Adres:</h3>
<p>Olsztyn
ul. Jana Paw³a II Hala G³ówna 3/4 tel.798666999</p>




</div>



 <div id="content"><h2><center><p>Produkty</p></center></h2>

<div id="cart">
         <table border = "1">

                <tr>
                <th>ID</th>
                <th>Nazwa</th>
                <th>Cena</th>
                <th>Ilość</th>
                <th>Nick</th>
                <th>Akcja</th>
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
                        
                         
                        <td><input type = "submit" value ="Dodaj do koszyka" /></td> 
                        </tr>
                             
                        

         </form>
         <?php } ?>
        </table>
       

        

        <br/>
       








<!-- =============================================Karta produktow============================
========================================================================================
======================================================================================== -->




<?php if ($cart = $this->cart->contents()): ?>



                          
                        <?php if(isset($this->session->userdata['user'])){?>
                        
                        <?php echo $this->session->userdata['user']['msg'];
                                        $this->session->unset_userdata('user');
                        ?>
                        
                        <?php } ?>
                        <form method='post' action="<?php echo base_url()?>index.php/save-shopping-cart">
                        <table border = "1">
                        <tr>
                                        <!-- <th>ID</th> -->
                                        <th>ID</th>
                                        <th>Nazwa</th>
                                        <th>Ilość</th>
                                        <th>Cena</th>
                                        <th>Nick</th>
                        </tr>

                        <?php foreach ($cart as $product): ?>

                        <tr>
                            <td>
                                        <?php echo $product['id'] ?>
                                        <input type = "hidden" name = "id[]" value = "<?php echo $product['id'] ?>"/>
                                        </td>
                       
                  <!--  <td>
                        <?php if ($this->cart->has_options($item['rowid'])) {
                        foreach ($this->cart->product_options($item['rowid']) as $option => $value) {
                        echo $option . ": <em>" . $value . "</em>";
                        }
                        
                    } ?>
                        </td> -->

                        <td>
                        <?php echo $product['name'] ?>
                        <input type = "hidden"  name ="name[]" style ="width:50px;" value = "<?php echo $product['name']?>"/>
                        </td>

                        <td>
                        <?php echo $product['qty'] ?>
                        <input type = "hidden"  name ="qty[]" style ="width:50px;" value = "<?php echo $product['qty']?>"/>
                        </td>
                         <td>
                        <?php echo $product['price'] ?>
                        <input type = "hidden"  name ="price[]" style ="width:50px;" value = "<?php echo $product['price']?>"/>
                        </td>

                        
                         <td>
                                        <?php echo $this->session->userdata('user_name'); ?>
                                        <input type = "hidden"  name ="imie[]" style ="width:50px;" value = "<?php echo $this->session->userdata('user_name'); ?>"/>
                                        </td>
    
                        <!-- <td>$<?php echo $product['subtotal']; ?></td> -->
                        <td class="remove">
                        <?php echo anchor('products/remove/'.$product['rowid'],'X'); ?>
                        </td>
                        </tr>
                        <?php endforeach; ?>
        
                        <tr class="total">
                        <td colspan="2"><strong>Razem do zapłaty</strong></td>
                        <td><?php echo $this->cart->total(); ?>zł</td>
                        <input type = "submit" value = "Złóż zamówienie"/>
                        </form>
                        </tr>
                        </table>        


                    <?php endif ?></div></div>  





