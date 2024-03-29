<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\User $user
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Associations'), ['controller' => 'Associations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Association'), ['controller' => 'Associations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($user->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Associations') ?></h4>
        <?php if (!empty($user->associations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Licence Moins15') ?></th>
                <th scope="col"><?= __('Licence Moins15Compet') ?></th>
                <th scope="col"><?= __('Licence Plus15') ?></th>
                <th scope="col"><?= __('Licence Doc') ?></th>
                <th scope="col"><?= __('Calendrier Resultats Doc') ?></th>
                <th scope="col"><?= __('List Adherents Doc') ?></th>
                <th scope="col"><?= __('Compte Resultat Doc') ?></th>
                <th scope="col"><?= __('Grand Livre Doc') ?></th>
                <th scope="col"><?= __('Budget Realise Doc') ?></th>
                <th scope="col"><?= __('Budget Previsionnel Doc') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->associations as $associations): ?>
            <tr>
                <td><?= h($associations->id) ?></td>
                <td><?= h($associations->name) ?></td>
                <td><?= h($associations->created) ?></td>
                <td><?= h($associations->modified) ?></td>
                <td><?= h($associations->licence_moins15) ?></td>
                <td><?= h($associations->licence_moins15Compet) ?></td>
                <td><?= h($associations->licence_plus15) ?></td>
                <td><?= h($associations->licence_doc) ?></td>
                <td><?= h($associations->calendrier_resultats_doc) ?></td>
                <td><?= h($associations->list_adherents_doc) ?></td>
                <td><?= h($associations->compte_resultat_doc) ?></td>
                <td><?= h($associations->grand_livre_doc) ?></td>
                <td><?= h($associations->budget_realise_doc) ?></td>
                <td><?= h($associations->budget_previsionnel_doc) ?></td>
                <td><?= h($associations->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Associations', 'action' => 'view', $associations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Associations', 'action' => 'edit', $associations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Associations', 'action' => 'delete', $associations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $associations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
