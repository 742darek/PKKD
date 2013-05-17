<style type="text/css">
                #cart{
                        
                        padding:4px; margin:8px; float: left;
                        border: 1px; solid #ddd; background-color: #eee;
                        -moz-border-radius: 4px; -webkit-border-radius: 4px;
                        color: black;
                        margin:20px 0 40px 60px;
                }
               #cart table{
                width: 320px; border-collapse: collapse ;
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
<div id="avmenu">
<h2 class="hide">Menu:</h2>
<ul>


<?php $this->load->view('pizzeria/leftmenu'); ?>

</ul>
</div>

<div id="extras">
<?php $this->load->view('pizzeria/extras'); ?>
</div>



 <div id="content"><h2><center><p>Produkty</p></center></h2>

<div id="cart">

   
         <table border = "1">

               
                <th>ID</th>
                <th>Nazwa</th>
                <th>Cena</th>
                <th>Ilość</th>
                <!-- <th>Opcje wyboru</th> -->
                <th>Akcja</th>
               
               
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
                        <input type = "hidden" name = "price" value = "<?php echo $product['price'] ?>"/>zł
                        </td>
                        <td>
                        <input type = "text" name ="qty" style ="background-color:#eee; width:30px;" value = "1"/>
                        </td> 
                        
                     <!--    <td><?php  echo form_dropdown('shirts', $product, 'large'); ?></td> -->
                          
                        
                
           

                        

                     

                        
        
                        <td><input type = "submit" value ="Dodaj do koszyka" /></td> 
                        </tr>
                             
                         </div>

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
                                     
                                        <th>ID</th>
                                        <th>Nazwa</th>
                                        <th>Ilość</th>
                                        <th>Cena</th>
                                        <th>Nick</th>
                                        <th>Adres</th>
                        </tr>

                        <?php foreach ($cart as $product): ?>

                        <tr>
                            <td>
                                        <?php echo $product['id'] ?>
                                        <input type = "hidden" name = "id[]" value = "<?php echo $product['id'] ?>"/>
                                        </td>
                       
                 

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
                        <input type = "hidden"  name ="price[]" style ="width:50px;" value = "<?php echo $product['price']?>"/>zł
                        </td>

                        
                         <td>
                        <?php echo $this->session->userdata('user_name'); ?>
                        <input type = "hidden"  name ="imie[]" style ="width:50px;" value = "<?php echo $this->session->userdata('user_name'); ?>"/>
                        </td>
                        <td><?php echo $this->session->userdata('a_dres'); ?>
                        <input type = "hidden"  name ="adres[]" style ="width:50px;" value = "<?php echo $this->session->userdata('a_dres'); ?>"/>
                        </td>
    
                       
                        <td class="remove">
                        <?php echo anchor('products/remove/'.$product['rowid'],'X'); ?>
                        </td>
                        </tr>
                        <?php endforeach; ?>
        
                        <tr class="total">
                        <td colspan="2"><strong>Razem do zapłaty</strong></td>
                        <td><?php echo $this->cart->total(); ?>&nbsp;zł</td>
                        <input type = "submit" value = "Złóż zamówienie"/>
                        </form>
                        </tr>
                        </table>        


                    <?php endif ?></div></div>  





