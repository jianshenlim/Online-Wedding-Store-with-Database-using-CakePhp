<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<div class="row">

    <div class="col-lg-8 col-md-7">
        <div class="card shadow mb-4">

            <!-- Card Body -->
            <div class="card-body">
                <?= $this->Form->create($category) ?>
                <fieldset>
                    <legend><?= __('Add Category') ?></legend>
                    <?php
                    echo $this->Form->control('name',['style'=>'display:block']);
                    ?>
                </fieldset>
                <div>
                    <?= $this->Html->link(__('<i class="fas fa-ban"></i> Cancel'), ['action' => 'index'], ['class' => 'd-none d-sm-inline-block btn btn-sm btn-danger shadow-sm float-right','escapeTitle'=>false]) ?>
                    <?= $this->Form->button('<span class="icon text-white"><i class="fas fa-plus"></i> Add</span>', ['style'=>'margin-right:10px','class' => 'd-none d-sm-inline-block btn btn-sm btn-success shadow-sm float-right','escapeTitle'=>false]);?>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>

</div>
