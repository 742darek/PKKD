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
 &nbsp;<h2>Produkty</h2>


        <table border = "1">

                <tr>
                <th>ID</th>
                <th>Nazwa</th>
                <th>Cena</th>
                <th>Ilość</th>
                </tr>
                     <?php foreach($get as $gets){ ?>
                   
                        <tr>
                        <td>
                        <?php echo $gets['id'] ?>
                        <input type = "hidden" name = "id" value = "<?php echo $gets['id'] ?>"/>
                        </td>
                        <td>
                        <?php echo $gets['description'] ?>
                        <input type = "hidden" name = "description" value = "<?php echo $gets['description'] ?>"/>
                        </td>
                        <td>
                        <?php echo $gets['price'] ?>
                        <input type = "hidden" name = "price" value = "<?php echo $gets['price'] ?>"/>zł
                        </td>
                        
                         <td>
                        <?php echo $gets['qty'] ?>
                        <input type = "hidden" name = "qty" value = "<?php echo $gets['qty'] ?>"/>
                        </td>

                        
                      
                       
                        
                         
                       
                        </tr>
                             
                        


         <?php } ?>
        </table>




        
        

</div>
