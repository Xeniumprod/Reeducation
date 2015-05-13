<!-- Page Wrapper -->
	<div id="page-wrapper">

		<!-- Banner -->
        <section class="wrapper style4">
            <div class="inner">
                <?= $this->Flash->render() ?>
                <div class="row uniform">
                    <div class="6u -3u">
                        <h2><?= __('Se connecter') ?></h2>
                        <?= $this->Form->create($user) ?>
                        <div class="row uniform">
                            <div class="12u">
                                <div class="placeholder-icon user">
                                    <?= $this->Form->input('username', [
                                        'type'=>'text', 
                                        'required'=>'true', 
                                        'placeholder'=>"Nom d'utilisateur", 
                                        'label'=>''
                                    ]); ?>
                                </div>
                            </div>

                            <div class="12u">
                                <div class="placeholder-icon password">
                                    <?= $this->Form->input('password', [
                                        'type'=>'password', 
                                        'required'=>'true', 
                                        'placeholder'=> __('Mot de passe'), 
                                        'label'=>''
                                    ]); ?>
                                </div>
                            </div>

                            <div class="12u">
                                <?= $this->Form->checkbox('remember_me', ['hiddenField' => false, 'id' => 'remember_me']); ?>
                                <label for="remember_me"><?= __(' Se souvenir de moi') ?></label>
                            </div>

                            <div class="6u 12u(medium) vertical-align">
                                <?= $this->Form->submit('Se connecter',['class'=>'special loading', 'data-loading-text'=>'Connexion ...']); ?>
                            </div>

                            <div class="6u 12u(medium) police80 vertical-align">
                                <p>
                                    <a href="#" id="forget"> <?= __('Mot de passe oublié ?') ?> </a>
                                </p>
                            </div>

                            <div class="12u police80 text-align">
                            <p>
                                <?= $this->Html->link("Retour à l'inscription", ['action'=>'signup', 'controller'=>'users']);?>
                            </p>
                        </div>
                        </div>
                        <?php echo $this->Form->end();?>
                    </div>
                </div>
            </div>
        </section>
        
	</div>