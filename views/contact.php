<?php
/**@var $this \talhaouy\phpmvc\View*/
$this->title = 'contact';
/** @var $model \app\modesl\ContactForm */
?>

<?php $form =  \talhaouy\phpmvc\form\Form::begin('',"post")?>
<?php  echo $form->field($model,'subject','input')?>
<?php  echo $form->field($model,'email','input')?>
<?php  echo $form->field($model,'body','textarea')?>
    <button class="btn btn-primary" type="submit">Send</button>
<?php \talhaouy\phpmvc\form\Form::end() ?>
