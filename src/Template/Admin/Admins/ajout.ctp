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
        
    </div>
</section>
        