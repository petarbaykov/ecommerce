<?php require 'Views/admin/templates/nav.php'; ?>

    <div class="container-fluid">
      <div class="row">
       
          
        <?php  require 'Views/admin/templates/sidebar.php'; ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class=" pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <?php if(sessionHas('admin-msg')): ?>
                <div class="alert alert-success"><?= sessionFlash('admin-msg') ?> </div>
            <?php endif; ?>
            <?php if(sessionHas('admin-err')): ?>
                <div class="alert alert-danger"><?= sessionFlash('admin-err') ?> </div>
            <?php endif; ?>
                <form action="admin/add_product" method="post" enctype="multipart/form-data">
                 <?= csrf_field(); ?>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" /> 
                </div>
                <div class="form-group">
                     <label>Price</label>
                    <input type="text" name="price" class="form-control" /> 
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="description"></textarea>
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="category_id">
                        <?php foreach( $categories as $cat): ?>

                            <option value="<?= $cat['id']; ?>"><?= $cat['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Изображение</label>
                    <input type="file" name="image" class="form-control"/>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Добави</button>
                </div>
            </form>
          </div>

         
          
        </main>
      </div>
    </div>