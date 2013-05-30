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
 &nbsp;<h2>Produkty</h2>


        <table border = "1">

                <tr>
                <th>ID</th>
                <th>Nazwa</th>
                <th>Wielkość</th>
                <th>Cena</th>
                <th>Ilość</th>
                <th>Edycja</th>
                <th>Usuwanie</th>
               
                
                </tr>
                     <?php foreach($id as $idse){ ?>
                   
                       <tr>
                        <td>
                        <?php echo $idse['id'] ?>
                        <input type = "hidden" name = "id" value = "<?php echo $idse['id'] ?>"/>
                        </td>
                        <td>
                        <?php echo $idse['name'] ?>
                        <input type = "hidden" name = "name" value = "<?php echo $idse['name'] ?>"/>
                        </td>
                        <td>
                        <?php echo $idse['wielkosc'] ?>
                        <input type = "hidden" name = "wielkosc" value = "<?php echo $idse['wielkosc'] ?>"/>
                        </td>
                        <td>
                        <?php echo $idse['price'] ?>
                        <input type = "hidden" name = "price" value = "<?php echo $idse['price'] ?>"/>zł
                        </td>
                        
                         <td>
                        <?php echo $idse['qty'] ?>
                        <input type = "hidden" name = "qty" value = "<?php echo $idse['qty'] ?>"/>
                        </td>
                        
                               

                           <td><a href="<?php echo site_url('get/edit_ingr/'.$idse['id']) ?>" class="button">Edytuj</a></td>  
                           <td><a href="<?php echo site_url('get/delete/'.$idse['id']) ?>" class="button">Usuń</a></td>  

                            


                          


                            
</tr>


                     
                        
                                        
   <?php } ?>  
 
 </table>




        
        

</div>
