<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<h3><?= __('Viewing Product') ?></h3>

<div class="row">
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?= h($product->name) ?></h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <table>
                    <tr>
                        <th><?= __('Product Name: ') ?></th>
                        <td><?= h($product->name) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Country Of Origin: ') ?></th>
                        <td><?= h($product->country_of_origin) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Category: ') ?></th>
                        <td><?= $product->has('category') ? $this->Html->link($product->category->name, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Id: ') ?></th>
                        <td><?= $this->Number->format($product->id) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Sale Price($): ') ?></th>
                        <td>$<?= $this->Number->format($product->sale_price) ?></td>
                    </tr>
                </table>
                <?= $this->Html->link(__('<span class="icon text-white"><i class="fas fa-arrow-left"></i> Return</span>'),['controller'=>'products','action'=>'index'], ['class' => 'd-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-right','escapeTitle'=>false]) ?>
                <?= $this->Form->postLink(__('<span class="icon text-white"><i class="fas fa-trash"></i> Delete</span>'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id), 'style'=>'margin-right:10px','class' => 'd-none d-sm-inline-block btn btn-sm btn-danger shadow-sm float-right','escapeTitle'=>false]) ?>
                <?= $this->Html->link(__('<span class="icon text-white"><i class="fas fa-edit"></i> Edit</span>'), ['action' => 'edit', $product->id], ['style'=>'margin-right:10px','class' => 'd-none d-sm-inline-block btn btn-sm btn-success shadow-sm float-right','escapeTitle'=>false]) ?>

            </div>


        </div>
    </div>

</div>
