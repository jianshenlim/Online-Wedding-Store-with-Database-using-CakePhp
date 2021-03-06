<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category[]|\Cake\Collection\CollectionInterface $categories
 */
?>
<div class="categories index content">
    <?= $this->Html->link(__('<span class="icon text-white"><i class="fas fa-plus"></i> New Category</span>'), ['action' => 'add'], ['class' => 'd-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-right','escapeTitle'=>false]) ?>

    <h3><?= __('Category Listing') ?></h3>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Listings</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('name') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($categories as $category): ?>
                            <tr>
                                <td><?= $this->Number->format($category->id) ?></td>
                                <td><?= h($category->name) ?></td>
                                <td class="actions" style="text-align: center">
                                    <?= $this->Html->link(__('<i class="fa fa-eye fa-lg"></i>'), ['action' => 'view', $category->id], ['escapeTitle'=>false]) ?>
                                    <?= $this->Html->link(__('<i class="fa fa-edit fa-lg"></i>'), ['action' => 'edit', $category->id], ['escapeTitle'=>false,'style'=>'padding-left:10px; padding-right:10px;']) ?>
                                    <?= $this->Form->postLink(__('<i class="fa fa-trash fa-lg"></i>'), ['action' => 'delete', $category->id], ['escapeTitle'=>false,'confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="paginator" >
            <ul class="pagination" style="justify-content: center;">
                <?= $this->Paginator->first('<< ' . __('first')) ?>
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('next') . ' >') ?>
                <?= $this->Paginator->last(__('last') . ' >>') ?>
            </ul>
        </div>


    </div>
</div>
