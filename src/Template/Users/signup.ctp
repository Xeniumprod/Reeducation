<section class="wrapper style6">
            <div class="inner">
                <?= $this->Flash->render('signup_login') ?>
                <h2><?= __('Créer un compte') ?></h2>
                <?= $this->Form->create($user) ?>
                <?= $this->Form->input('method', ['type' => 'hidden', 'value' => 'signup']) ?>
                <div class="row uniform">
                    <div class="5u 12u(small)">
                        <div class="row uniform">
                            <div class="12u">
                                <?= $this->Form->input('lastname_login', [
                                    'type'=>'text', 
                                    'required'=>'true', 
                                    'placeholder'=>"Nom", 
                                    'label'=>false
                                ]); ?>
                            </div>

                            <div class="12u">
                                <?= $this->Form->input('firstname_login', [
                                    'type'=>'text', 
                                    'required'=>'true', 
                                    'placeholder'=>"Prénom", 
                                    'label'=>false
                                ]); ?>
                            </div>

                            <div class="12u">
                                <div class="placeholder-icon">
                                    <?= $this->Form->select('activite', ['Administratif', 'Agent de balnéothérapie', 'APA', 'Assistant social', 'Diététicienne', 'Ergothérapeute', 'Kinésithérapeute', 'Médecin',  'Neuropsychologue', 'Orthophoniste', 'Soignant'], ['empty' => 'Activité']); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="5u -2u 12u(small)">
                        <div class="row uniform">    
                            <div class="12u">
                                <?= $this->Form->input('username', ['type' => 'hidden', 'required' => 'true']) ?>
                                <div class="placeholder-icon user">
                                    <?= $this->Form->input('username_fake', [
                                        'type'=>'text',
                                        'required'=>'false', 
                                        'id' => 'login_register', 
                                        'placeholder'=> __("Nom d'utilisateur"),
                                        'readonly'=>true,
                                        'disabled'=>true,
                                        'label'=>false
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
                                        'label'=>false
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
                                        'label'=>false
                                    ]);?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="12u police80 text-align">
                        <p>
                            <?= __('En cliquant sur Inscription, vous indiquez avoir lu et approuvé les') ?> <?php echo $this->Html->link("Conditions d'utilisations",array('action'=>'legal', 'controller'=>'users', 'full_base' => true),array('target' => '_blank'));?> et la <?php echo $this->Html->link("Politique de confidentialité",array('action'=>'privacy_policy', 'controller'=>'users', 'full_base' => true),array('target' => '_blank'));?>
                        </p>
                    </div>
                    
                    <div class="12u">
                        <div class="12u vertical-align">
                        <?= $this->Form->submit('Inscription',['class'=>'special loading', 'id'=>'validIEid', 'disabled'=>'true', 'data-loading-text'=>'Inscription ...']); ?>
                        </div>
                    </div>
                    
                    <div class="12u police80 text-align">
                        <p>
                            <a href="#"> <?= __('Retour à la connexion') ?> </a>
                        </p>
                    </div>
                </div>
            <?php echo $this->Form->end();?>
            </div>
        </section>