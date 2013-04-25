<!DOCTYPE HTML>
<html lang="en-US">

<head>
	<title>Shop</title>
	<meta charset="UTF-8">
	
	<style type="text/css">
		body {
			font:13px Arial;
		}
		#products {
			text-align:center; float:left;
		}
		#products ul {
			list-style-type: none; margin: 0px;
		}
		#products li{
			width: 400px; padding: 4px; margin 8px;
			border: 1px; solid #ddd; background-color: #eee;
			-moz-border-radius: 4px; -webkit-border-radius: 4px;
		}
		#products .name {
			font-size:15px; margin: 5px;
		}
		#products .price {
			margin: 5px;
		}
		#products .option {
			margin: 5px;
		}
		
		#cart{
			padding:4px; margin:8px; float: left;
			border: 1px; solid #ddd; background-color: #eee;
			-moz-border-radius: 4px; -webkit-border-radius: 4px;
		}
		#cart table {
			width: 320px; border-collapse: collapse;
			text-align: left;
		}
		#cart th{
			border-bottom: 1px solid #aaa;
		}
		#cart caption {
			font-size: 15px; height: 30px; text-align: left;
		}
		#cart .total {
			height 40px;
		}
		#cart .remove a {
			color: red;
		}
		#cart .dodaj a{
			color: red;
	}
		</style>
	
</head>
<body>
	
	<div id="products">
	<ul>
	<?php foreach ($products as $product): ?>
		<li>
			<?php echo form_open('shop/add'); ?>
			<caption>Produkty</caption>
			<div class="name"><?php echo $product->name; ?></div>
			<div class="thumb">
			<?php echo img(array(
			
				'src' => 'images/' . $product->image,
				'class' => 'thumb',	
				'alt' => $product->name
			)); ?>
			</div>
			<div class="price">$<?php echo $product->price;?></div>
			<div class="option">
				<?php if ($product->option_name):?>
					<?php echo form_label($product->option_name, 'option_'. $product->id); ?>
					<?php echo form_dropdown(
					$product->option_name,
					$product->option_values,
					NULL,
					'id="option_'. $product->id.'"'
					); ?>
				
				<?php endif; ?>

				<td>
                        <input type = "text"  name ="qty" style ="width:50px;" value = "1"/>
                        </td>
			
			</div>
			
			<?php echo form_hidden('id', $product->id); ?>
			<?php echo form_submit('action', 'Dodaj do koszyka'); ?>
			<?php echo form_close(); ?>
		
		</li>
		<?php endforeach;?>
	</ul>
	</div>
	
	








	
	
</body>
</html>
















