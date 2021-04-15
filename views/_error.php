<?php /**@var Exception $exception*/?>
<div class="page-wrap d-flex flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <span class="display-6 mt-lg-5 d-block">
                    <?php echo $exception->getCode();?> - <?php echo $exception->getMessage();?>
                </span>
            </div>
        </div>
    </div>
</div>
