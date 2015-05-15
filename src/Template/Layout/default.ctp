<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Réeducation
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('elements.css') ?>
    
    <?= $this->Html->script('jquery.min.js') ?>
    <?= $this->Html->script('jquery.scrollex.min.js') ?>
    <?= $this->Html->script('jquery.scrolly.min.js') ?>
    <?= $this->Html->script('skel.min.js') ?>
    <?= $this->Html->script('init.js') ?>
    <?= $this->Html->script('nicolas.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body  class="landing kine">
    <!-- Header -->
        <header id="header" class="alt">
            <h1><?= $this->Html->link('#Nom Kine', '/');?></h1>
            <nav id="nav">
                <ul>
                    <li class="special">
                        <a href="#" class="menuToggle"><span>Menu</span></a>
                        <div id="menu">
                            <ul>
                                <li><?= $this->Html->link('Accueil', '/');?></li>
                                <li><?= $this->Html->link('Generic', ['action'=>'generic', 'controller'=>'pages']);?></li>
                                <li><?= $this->Html->link('Elements', ['action'=>'elements', 'controller'=>'pages']);?></li>
                                <li><?= $this->Html->link('Inscription', ['action'=>'signup', 'controller'=>'users']);?></li>
                                <li><?= $this->Html->link('Connexion', '/');?></li>
                                <li><?= $this->Html->link('Gestion', ['prefix' => 'admin', 'action'=>'gestion', 'controller'=>'admins']);?></li>
                                <?php if($this->request->session()->read('Auth.User')){ echo '<li>'.$this->Html->link(__('Se déconnecter'),['action'=>'logout', 'controller'=>'users']).'</li>'; } ?>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </header>
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>

    </div>
</body>
</html>
