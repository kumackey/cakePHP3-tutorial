<?php
$this->assign('title', 'Blog Detail');
?>

<h1>
<?= $this->Html->link('Back', ['action'=>'index'], ['class'=>['pull-right', 'fs12']]); ?>
<?= h($post->title); ?>
</h1>
<p><?= nl2br(h($post->body)); ?></p>

<h2>New Commnet</h2>
<?= $this->Form->create(null, [
  'url' => ['controller'=>'Commnents', 'action'=>'add']
]); ?>
<?= $this->Form->input('body'); ?>
<?= $this->Form->hidden('post_id', ['value'=>$post->id]); ?>
<?= $this->Form->button('Add'); ?>
<?= $this->Form->end(); ?>