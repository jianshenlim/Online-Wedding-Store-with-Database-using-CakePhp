<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<div class="row">
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h3 class="m-0 font-weight-bold text-primary"><?= h($category->name) ?></h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <th><?= __('Name') ?></th>
                            <td><?= h($category->name) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <td><?= $this->Number->format($category->id) ?></td>
                        </tr>
                    </table>
                    <?= $this->Html->link(__('<span class="icon text-white"><i class="fas fa-arrow-left"></i> Return</span>'), ['action' => 'index'], ['class' => 'd-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-right','escapeTitle'=>false]) ?>
                    <?= $this->Form->postLink(__('<span class="icon text-white"><i class="fas fa-trash"></i> Delete</span>'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id),  'style'=>'margin-right:10px','class' => 'd-none d-sm-inline-block btn btn-sm btn-danger shadow-sm float-right','escapeTitle'=>false]) ?>
                    <?= $this->Html->link(__('<span class="icon text-white"><i class="fas fa-edit"></i> Edit</span>'), ['action' => 'edit', $category->id], ['style'=>'margin-right:10px','class' => 'd-none d-sm-inline-block btn btn-sm btn-success shadow-sm float-right','escapeTitle'=>false]) ?>


                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary"><?= __('Related Products') ?></h4>
            </div>
            <?php if (!empty($category->products)) : ?>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Sale Price') ?></th>
                            <th><?= __('Country Of Origin') ?></th>
                            <th><?= __('Category Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($category->products as $products) : ?>
                        <tr>
                            <td><?= h($products->id) ?></td>
                            <td><?= h($products->name) ?></td>
                            <td><?= h($products->sale_price) ?></td>
                            <td><?= h($products->country_of_origin) ?></td>
                            <td><?= h($products->category_id) ?></td>
                            <td class="actions" style="text-align: center">
                                <?= $this->Html->link(__('<i class="fa fa-eye fa-lg"></i>'), ['controller' => 'Products', 'action' => 'view', $products->id],['escapeTitle'=>false]) ?>
                                <?= $this->Html->link(__('<i class="fa fa-edit fa-lg"></i>'), ['controller' => 'Products', 'action' => 'edit', $products->id], ['escapeTitle'=>false,'style'=>'padding-left:10px; padding-right:10px;']) ?>
                                <?= $this->Form->postLink(__('<i class="fa fa-trash fa-lg"></i>'), ['controller' => 'Products', 'action' => 'delete', $products->id], ['escapeTitle'=>false,'confirm' => __('Are you sure you want to delete # {0}?', $products->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            <?php endif; ?>
            </div>
        </div>
    </div>




</div>
