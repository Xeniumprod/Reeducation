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
                                <li><?= $this->Html->link('Generic', ['prefix' => false, 'action'=>'generic', 'controller'=>'pages']);?></li>
                                <li><?= $this->Html->link('Elements', ['prefix' => false, 'action'=>'elements', 'controller'=>'pages']);?></li>
                                <li><?= $this->Html->link('Inscription', ['prefix' => false, 'action'=>'signup', 'controller'=>'users']);?></li>
                                <li><?= $this->Html->link('Connexion', '/');?></li>
                                <li><?= $this->Html->link('Gestion', ['prefix' => 'admin', 'action'=>'gestion']);?></li>
                                <?php if($this->request->session()->read('Auth.User')){ echo '<li>'.$this->Html->link(__('Se déconnecter'),['prefix' => false, 'action'=>'logout', 'controller'=>'users']).'</li>'; } ?>
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