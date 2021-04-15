<?php
/** @var $model \app\modesl\LoginForm */
?>
<section class="col-md-6 mx-auto my-5">
    <div class="card border border-2 border-start border-primary">
        <div class="card-header">
            <div class="card-title">
                <h1 class="text-center text-black-50 mt-3 mb-5">Login</h1>
            </div>
        </div>
        <div class="card-body">
    <?php $form =  \talhaouy\phpmvc\form\Form::begin('',"post")?>
    <?php  echo $form->field($model,'email','input')?>
    <?php  echo $form->field($model,'password','input')->passwordField()?>
    <button class="btn btn-primary" type="submit">Login</button>
    <?php \talhaouy\phpmvc\form\Form::end() ?>
        </div>
    </div>

</section>
