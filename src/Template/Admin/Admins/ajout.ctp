<section class="wrapper style6">
    <div class="inner">
        
        <?= $this->Form->create() ?>
        <section class="import_file">
            <!-- rajout de la class importe lors que le fichier excel est bien importé -->
            <span class="icon circulaire color_perso plein fa-file-excel-o">
                <div class="info_text">
                    <!-- changement du texte "Importer fichier Excel" en "Fichier importé" ou "Erreur lors de l'importation" -->
                    Importer fichier Excel
                
                    <?= $this->Form->input('info_text', [
                                        'type'=>'file', 
                                        'required'=>'true', 
                                        'placeholder'=>"", 
                                        'label'=>''
                                    ]); ?>
                </div>
            </span>
            
        </section>   
        <?php echo $this->Form->end();?>
        
        <section class="comparatif">
            <table class="alt">
                <thead>
                    <?= $this->Html->tableHeaders(['Numéro séjour', 'IPP', 'Nom', 'Nom (fille)', 'Prénom', 'Age', 'Date entrée', 'Date sortie', 'UF medical', 'UF Hebergement', 'lit', 'Medecin']); ?>
                </thead>
                <tbody>
                    <?= $this->Html->tableCells([
                        ['19609859001', '09859', 'RABATEL', '', 'Louis', '84', '12/03/2016 10:00', '', 'SSR_HC_REEF_51A', 'ETG5', '502P', '196FRR'],
                        ['19609859001', '09859', 'RABATEL', '', 'Louis', '84', '12/03/2016 10:00', '', 'SSR_HC_REEF_51A', 'ETG5', '504', '196FRR'],
                        ['19602349001', '02349', 'LIBODOU', 'BIZETTE', 'Jeanne', '59', '21/05/2016 10:00', '', 'SSR_HDJ_RFRN_52A', 'ETG3', '312BF', '196FRS'],
                        ['19602349001', '02349', 'LIBODOU', 'BIZETTE', 'Jeanne', '59', '21/05/2016 10:00', '', 'SSR_HDJ_RFRN_52A', 'ETG3', '305', '196FRS']
                    ]); ?>
                </tbody>
        </table>
        </section>
        

                <h2><?= __('Ajouter un patient') ?></h2>
                <?= $this->Form->create() ?>
                <div class="row uniform">
                    <div class="5u 12u(small)">
                        <div class="row uniform">
                            <div class="12u">
                                <?= $this->Form->input('lastname', [
                                    'type'=>'text', 
                                    'required'=>'true', 
                                    'placeholder'=>"Nom", 
                                    'label'=>false
                                ]); ?>
                            </div>

                            <div class="12u">
                                <?= $this->Form->input('lastname2', [
                                    'type'=>'text', 
                                    'required'=>'false', 
                                    'placeholder'=>"Nom (jeune fille)", 
                                    'label'=>false
                                ]); ?>
                            </div>
                            
                            <div class="12u">
                                <?= $this->Form->input('firstname', [
                                    'type'=>'text', 
                                    'required'=>'true', 
                                    'placeholder'=>"Prénom", 
                                    'label'=>false
                                ]); ?>
                            </div>
                            
                            <div class="12u">
                                <?= $this->Form->input('birth', [
                                    'type'=>'text', 
                                    'required'=>'true', 
                                    'placeholder'=>"Date de naissance", 
                                    'label'=>false
                                ]); ?>
                            </div>
                            
                            <div class="6u">
								<input type="radio" id="demo-copy" name="demo-copy">
								<label for="demo-copy">Homme</label>
				            </div>
                            <div class="6u$">
								<input type="radio" id="demo-copy2" name="demo-copy">
								<label for="demo-copy2">Femme</label>
				            </div>
                        </div>
                    </div>

                    <div class="5u -2u 12u(small)">
                        <div class="row uniform">   
                            <div class="12u">
                                <div class="placeholder-icon">
                                    <?= $this->Form->select('Medecin', 
                                        ['administratif' => 'Administratif', 'balnéothérapie' => 'Agent de balnéothérapie', 'apa' => 'APA', 'assistant_social' => 'Assistant social', 'dieteticien' => 'Diététicien', 'ergotherapeute' => 'Ergothérapeute', 'kinesitherapeute' => 'Kinésithérapeute', 'medecin' => 'Médecin', 'neuropsychologue' => 'Neuropsychologue', 'orthophoniste' => 'Orthophoniste', 'soignant' => 'Soignant'],
                                        ['empty' => 'Médecin']) 
                                    ?>
                                </div>
                            </div>
                            
                            <div class="12u">
                                <div class="placeholder-icon">
                                    <?= $this->Form->select('UF_medical', 
                                        ['administratif' => 'Administratif', 'balnéothérapie' => 'Agent de balnéothérapie', 'apa' => 'APA', 'assistant_social' => 'Assistant social', 'dieteticien' => 'Diététicien', 'ergotherapeute' => 'Ergothérapeute', 'kinesitherapeute' => 'Kinésithérapeute', 'medecin' => 'Médecin', 'neuropsychologue' => 'Neuropsychologue', 'orthophoniste' => 'Orthophoniste', 'soignant' => 'Soignant'],
                                        ['empty' => 'Catégorie médicale']) 
                                    ?>
                                </div>
                            </div>
                            
                            <div class="6u">
                                <div class="placeholder-icon">
                                    <?= $this->Form->select('UF_hebergement', 
                                        ['administratif' => 'Administratif', 'balnéothérapie' => 'Agent de balnéothérapie', 'apa' => 'APA', 'assistant_social' => 'Assistant social', 'dieteticien' => 'Diététicien', 'ergotherapeute' => 'Ergothérapeute', 'kinesitherapeute' => 'Kinésithérapeute', 'medecin' => 'Médecin', 'neuropsychologue' => 'Neuropsychologue', 'orthophoniste' => 'Orthophoniste', 'soignant' => 'Soignant'],
                                        ['empty' => 'Etage / HDJ']) 
                                    ?>
                                </div>
                            </div>
                            <div class="6u$">
                                <div class="placeholder-icon">
                                    <?= $this->Form->select('lit', 
                                        ['administratif' => 'Administratif', 'balnéothérapie' => 'Agent de balnéothérapie', 'apa' => 'APA', 'assistant_social' => 'Assistant social', 'dieteticien' => 'Diététicien', 'ergotherapeute' => 'Ergothérapeute', 'kinesitherapeute' => 'Kinésithérapeute', 'medecin' => 'Médecin', 'neuropsychologue' => 'Neuropsychologue', 'orthophoniste' => 'Orthophoniste', 'soignant' => 'Soignant'],
                                        ['empty' => 'Chambre']) 
                                    ?>
                                </div>
                            </div>
                            
                            <div class="12u">
                                <?= $this->Form->input('date_entree', [
                                    'type'=>'text', 
                                    'required'=>'true', 
                                    'placeholder'=>"Date d'entrée", 
                                    'label'=>false
                                ]); ?>
                            </div>
                        </div>
                    </div>

                    <div class="12u police80 text-align">
                        <p>
                            <?= __('En cliquant sur Ajouter, vous indiquez avoir lu et approuvé les') ?> <?php echo $this->Html->link("Conditions d'utilisations",array('action'=>'legal', 'controller'=>'users', 'full_base' => true),array('target' => '_blank'));?> et la <?php echo $this->Html->link("Politique de confidentialité",array('action'=>'privacy_policy', 'controller'=>'users', 'full_base' => true),array('target' => '_blank'));?>
                        </p>
                    </div>

                    <div class="12u">
                        <div class="12u vertical-align">
                        <?= $this->Form->submit('Ajouter',['class'=>'special loading', 'data-loading-text'=>'Ajout en cours ...']); ?>
                        </div>
                    </div>
                </div>
            <?php echo $this->Form->end();?>
        
    </div>
</section>
        