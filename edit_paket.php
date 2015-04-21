<?php
include('inc/header.php');

$content = "";

if(isset($_GET['id']))
{	
	if(isset($_POST['name']))
	{
		$query = <<<END
		UPDATE products
		SET name = "{$_POST['name']}", 
		price = "{$_POST['price']}", 
		description = "{$_POST['description']}"
		orginfo = "{$_POST['orginfo']}"
		included = "{$_POST['included']}"
		img_src = "{$_POST['img_src']}"
		WHERE id = "{$_GET['id']}"
END;
		$mysqli->query($query);	
	}

	$query = <<<END
	SELECT * FROM products
	WHERE id = "{$_GET['id']}"
END;

$res = $mysqli->query($query);
if($res->num_rows > 0)
{
	$row = $res->fetch_object();
$content = <<<END
	<form method="post" action="edit_product.php?id={$row->id}">
	<input type="text" name="name" value="{$row->name}">
	<input type="text" name="price" value="{$row->price}">
	<textarea name="description">{$row->description}</textarea>
	<textarea name="orginfo">{$row->orginfo}</textarea>
	<textarea name="included">{$row->included}</textarea>
	<input type="text" name="img_src" value="{$row->img_src}">
	<input type="submit" Value="Spara">
	</form>
END;
}
}
echo $content;
?>