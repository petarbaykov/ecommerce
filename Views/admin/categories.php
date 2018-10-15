<?php require 'Views/admin/templates/nav.php'; ?>

    <div class="container-fluid">
      <div class="row">
       
          
        <?php  require 'Views/admin/templates/sidebar.php'; ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class=" pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Категории</h1>
                <form action="<?= url('admin/addCategory'); ?>" method="post">
                    <?= csrf_field(); ?>
                    
                    <div class="form-group">
                        <label>Име на категория</label>
                        <input type="text" class="form-control" name="name"/>
                    </div>
                    
                    <div class="form-group">
                        <label>Описание на категория</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Запази</button>
                    </div>
                </form>

            </div>
        </main>
      </div>
    </div>