<!-- Page Wrapper -->
	<div id="page-wrapper" class="vertical-align" style="height:100vh">

		<!-- Banner -->
        <section class="wrapper style4">
            <div class="inner">
                <?= $this->Flash->render() ?>
                <div class="row uniform">
                    <div class="6u -3u 8u(medium) -2u(medium) 10u(small) -1u(small) 12u(xsmall) text-align">
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
                            
                            <div class="12u error">
                                <p><?= __('Le nom de compte et/ou le mot de passe sont incorrects') ?></p>
                            </div>

                            <div class="12u text-align">
                                <?= $this->Form->submit('Se connecter',['class'=>'special loading', 'data-loading-text'=>'Connexion ...']); ?>
                            </div>
                        </div>
                        <?php echo $this->Form->end();?>
                    </div>
                </div>
            </div>
        </section>
        
	</div>