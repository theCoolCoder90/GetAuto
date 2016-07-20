<?php require("header.php");?>
<h2>Fill the form below to post product on the product page.</h2>
<form action="form.php" method="POST" ENCTYPE="multipart/form-data" class="uploadForm">
	<div class="formGroup">
		<label for="porduct">Product</label>
		<input type="text" name="product" placeholder="Enter Product Name" maxlength="25">
	</div>
	<div class="formGroup">
		<label for="price" style="margin-right: 20px;">Price</label>
		<input type="text" name="price" placeholder="Enter Product Price" maxlength="20">
	</div>
	<div class="formGroup">
		<input type="file" name="upload">
	</div>
	<div class="description">
		Description of the product.
		<textarea name="description" name="description" cols="40" rows="10"></textarea>
	</div>
	<input type="submit" value="Submit">
</form>
<?php require("footer.php");?>