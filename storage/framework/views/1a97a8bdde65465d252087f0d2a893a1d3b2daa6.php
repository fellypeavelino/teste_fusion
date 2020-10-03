
 
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('motoristas.create')); ?>"> Cadastrar novo Motorista</a>
            </div>
        </div>
    </div>
   
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nome</th>
            <th>Cpf</th>
            <th>Email</th>
            <th>Situação</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        <?php $__currentLoopData = $motoristas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $motorista): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($motorista->nome); ?></td>
            <td><?php echo e($motorista->cpf); ?></td>
            <td><?php echo e($motorista->email); ?></td>
            <?php switch($motorista->situacao):
                case ('L'): ?>
                    <td>Livre</td>
                    <?php break; ?>

                <?php case ('C'): ?>
                    <td>Em Curso</td>
                    <?php break; ?>
                <?php case ('R'): ?>
                    <td>Retornando</td>
                    <?php break; ?>
                <?php default: ?>
                    <td><?php echo e($motorista->situacao); ?></td>
            <?php endswitch; ?>
            <?php if($motorista->status == 'A'): ?>
                <td>Ativo</td>
            <?php else: ?>
                <td></td>
            <?php endif; ?>
            <td>
                <form action="<?php echo e(route('motoristas.destroy',$motorista->id)); ?>" method="POST">
   
                    <a class="btn btn-info" href="<?php echo e(route('motoristas.show',$motorista->id)); ?>">Show</a>
    
                    <a class="btn btn-primary" href="<?php echo e(route('motoristas.edit',$motorista->id)); ?>">Edit</a>
   
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
  
    <?php echo $motoristas->links(); ?>

      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('motoristas.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/c/xampp/htdocs/projeto_grow/teste_fusion/resources/views/motoristas/index.blade.php ENDPATH**/ ?>