<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Desafio RH';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <!-- <//?= $this->Html->css('base.css') ?-->

    <?= $this->Html->css(['bootstrap.min.css']) ?>
    <?= $this->Html->script(['jquery-2.1.3.min.js','jquery.mask.min.js','popper.min.js','bootstrap.min.js','funcionario.js']) ?>

    <?= $this->Html->css('bootstrap-multiselect.css') ?>
    <?= $this->Html->script('bootstrap-multiselect.js')?>



    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

   <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Desafio RH</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <?= $this->Html->link(__('Funcionário'), ['controller' => 'funcionario', 'action'=>'index'],['class'=>'nav-link']) ?>
      </li>
      <li class="nav-item">
        <?= $this->Html->link(__('Vagas'), ['controller' => 'vagas', 'action'=>'index'],['class'=>'nav-link']) ?>
      </li>
    </ul>
  </div>
</nav>

    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
