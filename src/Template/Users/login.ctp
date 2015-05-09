<!-- Page Wrapper -->
	<div id="page-wrapper">

		<!-- Banner -->
        <section class="wrapper style4">
            <div class="inner">
                <?= $this->Flash->render('signup_login') ?>
                <div class="row uniform">
                    <div class="5u 12u(small)">
                        <h2><?= __('Se connecter') ?></h2>
                        <?= $this->Form->create($user) ?>
                        <?= $this->Form->input('method', ['type' => 'hidden', 'value' => 'login']) ?>
                        <div class="row uniform">
                            <div class="12u">
                                <div class="placeholder-icon user">
                                    <?= $this->Form->input('username_login', [
                                        'type'=>'text', 
                                        'required'=>'true', 
                                        'placeholder'=>"Nom d'utilisateur ou email", 
                                        'label'=>''
                                    ]); ?>
                                </div>
                            </div>

                            <div class="12u">
                                <div class="placeholder-icon password">
                                    <?= $this->Form->input('password_login', [
                                        'type'=>'password', 
                                        'required'=>'true', 
                                        'placeholder'=> __('Mot de passe'), 
                                        'label'=>''
                                    ]); ?>
                                </div>
                            </div>

                            <div class="12u">
                                <?= $this->Form->checkbox('rememberme', ['hiddenField' => false, 'id' => 'rememberme']); ?>
                                <label for="rememberme"><?= __(' Se souvenir de moi') ?></label>
                            </div>

                            <div class="6u 12u(medium) vertical-align">
                                <?= $this->Form->submit('Se connecter',['class'=>'special loading', 'data-loading-text'=>'Connexion ...']); ?>
                            </div>

                            <div class="6u 12u(medium) police80 vertical-align">
                                <p>
                                    <a href="#" id="forget"> <?= __('Mot de passe oublié ?') ?> </a>
                                </p>
                            </div>
                        </div>
                        <?php echo $this->Form->end();?>
                    </div>

                    <div class="5u -2u 12u(small)">
                        <h2><?= __('Créer un compte') ?></h2>
                        <?= $this->Form->create($user) ?>
                        <?= $this->Form->input('method', ['type' => 'hidden', 'value' => 'signup']) ?>
                        <div class="row uniform">    
                            <div class="12u">
                                <div class="placeholder-icon user">
                                    <?= $this->Form->input('username', [
                                        'type'=>'text',
                                        'required'=>'true', 
                                        'id' => 'login_register', 
                                        'placeholder'=> __("Nom d'utilisateur"), 
                                        'label'=>''
                                    ]); ?>
                                </div>
                            </div>

                            <div class="12u">
                                <div class="placeholder-icon mail">
                                    <?= $this->Form->input('email', [
                                        'type'=>'email', 
                                        'required'=>'true', 
                                        'id' => 'email_register', 
                                        'placeholder'=> __('Email'), 
                                        'label'=>''
                                    ]); ?>
                                </div>
                            </div>

                            <div class="12u">
                                <div class="placeholder-icon password">
                                    <?= $this->Form->input('password', ['
                                        type'=>'password', 
                                        'required'=>'true', 
                                        'id' => 'passA_register', 
                                        'placeholder'=> __('Mot de passe'), 
                                        'label'=>''
                                    ]); ?>
                                </div>
                            </div>

                            <div class="12u">
                                <div class="placeholder-icon password">
                                    <?= $this->Form->input('repassword', [
                                        'type'=>'password', 
                                        'required'=>'true', 
                                        'id' => 'passB_register',
                                        'placeholder'=> __('Répéter le mot de passe'), 
                                        'label'=>''
                                    ]);?>
                                </div>
                            </div>

                            <div class="12u vertical-align">
                                <div class="g-recaptcha" data-sitekey="6LdJRf8SAAAAAHq9_n1YYD-w6rOT14BO9Wvs7dWb" data-callback="recaptcha_callback"></div>
                            </div>

                            <div class="12u vertical-align">
                                <div class="12u vertical-align">
                                <?= $this->Form->submit('Inscription',['class'=>'special loading', 'id'=>'validIEid', 'disabled'=>'true', 'data-loading-text'=>'Inscription ...']); ?>
                                </div>
                            </div>

                            <div class="12u vertical-align police80 text-align">
                                <p>
                                    <?= __('En cliquant sur Inscription, vous indiquez avoir lu et approuvé les') ?> <?php echo $this->Html->link("Conditions d'utilisations",array('action'=>'legal', 'controller'=>'users', 'full_base' => true),array('target' => '_blank'));?> et la <?php echo $this->Html->link("Politique de confidentialité",array('action'=>'privacy_policy', 'controller'=>'users', 'full_base' => true),array('target' => '_blank'));?>
                                </p>
                            </div>
                        </div>
                        <?php echo $this->Form->end();?>
                    </div>
                </div>
            </div>
        </section>
        
	</div>