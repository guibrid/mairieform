<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">

  <?php echo $this->element('sidebar'); ?>

</nav>
<div class="diplomas form large-9 medium-8 columns content">
    <?= $this->Form->create($diploma, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Modifier un brevet') ?></legend>
        <?php

            echo $this->Form->control('name', [
                                        'label' => 'Nom']);
            echo $this->Form->control('prenom', [
                                        'label' => 'Prenom']);
            echo $this->Form->control('number', [
                                        'label' => 'Numéro de brevet']);
            $this->Form->templates(['dateWidget' => '{{day}}{{month}}{{year}}{{hour}}{{minute}}{{second}}{{meridian}}']);
            echo $this->Form->control('date', ['label' => 'Date d\'obtention',
                                                'monthNames' => false,
                                                'empty'  => [
                                                      'year' => 'Choisissez l\'année...',
                                                      'month' => 'Choisissez le mois...',
                                                      'day' => 'Choisissez le jour...',
                                                      'hour' => false,
                                                      'minute' => false,
                                                    ],
                                                'minYear' => date('Y') - 100,
                                                'maxYear' => 2017,
                                                 ]);
            $options = [$diploma->type => $diploma->type, 'Brevet d\'état d\'éducateur sportif' => 'Brevet d\'état d\'éducateur sportif', 'Brevet fédéral' => 'Brevet fédéral'];
            echo $this->Form->control('type', ['label'=>'Type de brevet', 'type'=>'select', 'options'=>$options]);
            echo '<table>';
            echo '<tr><td>';
            if (empty($diploma->diploma_doc)) {
              echo $this->Form->control('diploma_doc', [
                                          'label' => 'Photocopie du diplôme (format pdf)',
                                          'type' => 'file']);
            } else {
              echo '<p><b>Diplôme </b><br />'.$this->Html->image('icon_pdf_upload.gif', ['alt' => 'Votre fichier est en ligne']).'</p>';
            }
            echo '</td><td>';
            if (empty($diploma->carte_pro_doc)) {
              echo $this->Form->control('carte_pro_doc', [
                                          'label' => 'Photocopie de la carte professionnelle (format pdf)',
                                          'type'  => 'file']);
            } else {
              echo '<p><b>Carte professionnelle </b><br />'.$this->Html->image('icon_pdf_upload.gif', ['alt' => 'Votre fichier est en ligne']).'</p>';
            }
            echo '</td><td>';
            if (empty($diploma->contrat_doc)) {
              echo $this->Form->control('contrat_doc', [
                                          'label' => 'Photocopie du contrat de travail (format pdf)',
                                          'type'  => 'file']);
            } else {
              echo '<p><b>Contrat de travail </b><br />'.$this->Html->image('icon_pdf_upload.gif', ['alt' => 'Votre fichier est en ligne']).'</p>';
            }
            echo '</td><td>';
            if (empty($diploma->planning_doc)) {
              echo $this->Form->control('planning_doc', [
                                          'label' => 'Planning d\'intervention (format pdf)',
                                          'type'  => 'file']);
            } else {
              echo '<p><b>Planning d\'intervention </b><br />'.$this->Html->image('icon_pdf_upload.gif', ['alt' => 'Votre fichier est en ligne']).'</p>';
            }
            echo '</td></tr></table>';
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enregistrer'), ['id' => 'btnAsso']) ?>
    <?= $this->Form->end() ?>
</div>
