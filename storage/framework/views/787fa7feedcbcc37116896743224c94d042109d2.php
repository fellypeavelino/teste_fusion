
  
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Motorista</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="<?php echo e(route('motoristas.index')); ?>"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <?php echo e($motorista->nome); ?>

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cpf:</strong>
                    <?php echo e($motorista->cpf); ?>

                </div>
            </div>        
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <?php echo e($motorista->email); ?>

                </div>
            </div>         
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Situação:</strong>
                    <?php switch($motorista->situacao):
                        case ('L'): ?>
                            Livre
                            <?php break; ?>

                        <?php case ('C'): ?>
                            Em Curso
                            <?php break; ?>
                        <?php case ('R'): ?>
                            Retornando
                            <?php break; ?>
                        <?php default: ?>
                            <?php echo e($motorista->situacao); ?>

                    <?php endswitch; ?>
                </div>
            </div>        
            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group form-check">
                    <strong>Status:</strong>
                    <?php if($motorista->status == 'A'): ?>
                        Ativo
                    <?php endif; ?>
                </div>
            </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('motoristas.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/c/xampp/htdocs/projeto_grow/projeto_grow/resources/views/motoristas/show.blade.php ENDPATH**/ ?>