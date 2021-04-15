<?php
/** @var $model \app\modesl\User */
?>
<section class="col-md-6 mx-auto my-5">
    <div class="card border border-2 border-start border-primary">
        <div class="card-header">
            <div class="card-title"><h1 class="text-center text-black-50 mt-3 mb-5">Register</h1>
            </div>
        </div>
        <div class="card-body">
            <?php $form =  \talhaouy\phpmvc\form\Form::begin('',"post")?>
            <div class="row">
                <div class="col">
                    <?php  echo $form->field($model,'firstname','input')?>
                </div>
                <div class="col">
                    <?php  echo $form->field($model,'lastname','input')?>
                </div>
            </div>
            <?php  echo $form->field($model,'email','input')?>
            <?php  echo $form->field($model,'password','input')->passwordField()?>
            <?php  echo $form->field($model,'confirmPassword','input')->passwordField()?>

            <button class="btn btn-primary" type="submit">Register</button>
            <?php \talhaouy\phpmvc\form\Form::end() ?>

        </div>
    </div>
</section>