<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */

?>
<div class="products index content">
    <?= $this->Html->link(__('<span class="icon text-white"><i class="fas fa-plus"></i> New Product</span>'), ['action' => 'add'], ['class' => 'd-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-right','escapeTitle'=>false]) ?>

    <h3><?= __('Product Listing') ?></h3>

    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Search</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <?= $this->Form->create(null,['type'=>'get']) ?>
                <fieldset>
                    <?php
                    echo $this->Form->control('country_of_origin',['style'=>'display:block']);
                    echo $this->Form->control('maximum_sale_price',['type'=>'number','min'=>0,'style'=>'display:block']);
                    echo $this->Form->control('category', ['options'=> $categories, 'empty' => true,'style'=>'display:block']);
                    ?>
                </fieldset>

                <?= $this->Form->button(__('<span class="icon text-white"><i class="fas fa-ban"></i> Reset</span>',['action'=>'index']), ['class' => 'd-none d-sm-inline-block btn btn-sm btn-danger shadow-sm float-right','escapeTitle'=>false]) ?>
                <?= $this->Form->button(__('<span class="icon text-white"><i class="fas fa-search"></i> Search</span>'), ['style'=> 'margin-right:10px','class' => 'd-none d-sm-inline-block btn btn-sm btn-success shadow-sm float-right','escapeTitle'=>false]) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>

    <div class="col-xl-8 col-lg-7">

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
                            <th>Product <?= $this->Paginator->sort('name') ?></th>
                            <th><?= $this->Paginator->sort('sale_price') ?> ($)</th>
                            <th><?= $this->Paginator->sort('country_of_origin') ?></th>
                            <th><?= $this->Paginator->sort('category_id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $product): ?>
                        <tr>
                            <td><?= $this->Number->format($product->id) ?></td>
                            <td><?= h($product->name) ?></td>
                            <td><?= $this->Number->format($product->sale_price) ?></td>
                            <td><?= h($product->country_of_origin) ?></td>
                            <td><?= $product->has('category') ? $this->Html->link($product->category->name, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?></td>
                            <td class="actions" style="text-align: center">
                                <?= $this->Html->link(__('<i class="fa fa-eye fa-lg"></i>'), ['action' => 'view', $product->id], ['escapeTitle'=>false]) ?>
                                <?= $this->Html->link(__('<i class="fa fa-edit fa-lg"></i>'), ['action' => 'edit', $product->id], ['escapeTitle'=>false,'style'=>'padding-left:10px; padding-right:10px;']) ?>
                                <?= $this->Form->postLink(__('<i class="fa fa-trash fa-lg"></i>'), ['action' => 'delete', $product->id], ['escapeTitle'=>false, 'confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?>
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
        <p class="primary" style="text-align: center"><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>

    </div>

    </div>



</div>
