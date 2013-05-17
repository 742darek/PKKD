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
                <th>Cena</th>
                <th>Ilość</th>
                <th>Edycja</th>
                    <th>Usuwanie</th>
               
                
                </tr>
                     <?php foreach($id as $ids){ ?>
                   
                       <tr>
                        <td>
                        <?php echo $ids['id'] ?>
                        <input type = "hidden" name = "id" value = "<?php echo $ids['id'] ?>"/>
                        </td>
                        <td>
                        <?php echo $ids['description'] ?>
                        <input type = "hidden" name = "description" value = "<?php echo $ids['description'] ?>"/>
                        </td>
                        <td>
                        <?php echo $ids['price'] ?>
                        <input type = "hidden" name = "price" value = "<?php echo $ids['price'] ?>"/>zł
                        </td>
                        
                         <td>
                        <?php echo $ids['qty'] ?>
                        <input type = "hidden" name = "qty" value = "<?php echo $ids['qty'] ?>"/>
                        </td>
                        
                               

                            <td><a href="<?php echo site_url('get/edit/'.$ids['id']) ?>" class="button">Edytuj</a></td>  
                           <td><a href="<?php echo site_url('get/delete/'.$ids['id']) ?>" class="button">Usuń</a>   </td>  

                            


                          


                            
</tr>


                     
                        
                                        
   <?php } ?>  
 
 </table>




        
        

</div>
