
  
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Cadastrar Novo Motorista</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo e(route('motoristas.index')); ?>"> Voltar</a>
        </div>
    </div>
</div>
   
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <strong>Alerta!</strong> Existe algum problema com o campo.<br><br>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
   
<form action="<?php echo e(route('motoristas.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="nome" class="form-control" placeholder="Nome">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cpf:</strong>
                <input type="text" name="cpf" maxlength="16" class="form-control" placeholder="Cpf">
            </div>
        </div>        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="mail" name="email" class="form-control" placeholder="Email">
            </div>
        </div>         
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Situação:</strong>
                <select name="situacao" class="form-control" required="required">
                    <option value=""></option>
                    <option value="L">Livre</option>
                    <option value="C">Em Curso</option>
                    <option value="R">Retornando</option>
                </select>
            </div>
        </div>        
        <div class="col-xs-2 col-sm-2 col-md-2">
            <div class="form-group form-check">
                <strong>Status:</strong>
                <br/>
                <label class="form-check-label">
                    <input type="checkbox" name="status" value="A" class="form-check-input"/> Ativo
                </label>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('motoristas.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/c/xampp/htdocs/projeto_grow/projeto_grow/resources/views/motoristas/create.blade.php ENDPATH**/ ?>