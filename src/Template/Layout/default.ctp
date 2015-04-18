<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('style.css') ?>
    
    <?= $this->Html->script('jquery.min.js') ?>
    <?= $this->Html->script('jquery.scrollex.min.js') ?>
    <?= $this->Html->script('jquery.scrolly.min.js') ?>
    <?= $this->Html->script('skel.min.js') ?>
    <?= $this->Html->script('init.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body  class="landing kine">
    <div id="container">

        <div id="content">
            <?= $this->fetch('content') ?>
        </div>

    </div>
</body>
</html>
