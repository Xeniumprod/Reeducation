<section class="wrapper style6">
    <div class="inner">
        
        <?= $this->Form->create() ?>
        <section class="import_file">
            <span class="icon circulaire color_perso plein fa-file-excel-o">
                <div class="info_text">
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
        
    </div>
</section>
        