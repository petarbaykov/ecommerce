<?php 
 require 'Views/layouts/header.php'; 


?>
<h1>Hello</h1>
<?= $data; ?>
<form action="post/create" method="post">
    
    <input type="text" name="name" value="" />
    <?= csrf_field(); ?>
    <input type="submit" />
</form>

<?php echo \Ecommerce\App\Session::get('token'); ?>