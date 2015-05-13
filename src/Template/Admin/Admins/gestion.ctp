<section class="wrapper style6">
    <div class="inner">
        <h2>Gestion</h2>
        <!-- code erreur ici <p>erreur</p> -->

        <table class="alt">
                <thead>
                    <?= $this->Html->tableHeaders(['IPP', 'Chambre', 'Nom', 'Prénom', 'Sexe', 'Médecin', 'Kinésithérapeute', 'Ergothérapeute', 'APA', 'Neuropsychologue', 'Orthophonie', 'Diététicienne']); ?>
                </thead>
                <tbody>
                    <?= $this->Html->tableCells([
                        ['', '', '', '', '', '', '', '', '', '', '', ''],
                        ['', '', '', '', '', '', '', '', '', '', '', ''],
                        ['', '', '', '', '', '', '', '', '', '', '', ''],
                        ['', '', '', '', '', '', '', '', '', '', '', '']
                    ]); ?>
                </tbody>
        </table>
        
        <h2>Gestion : Compte</h2>
        <!-- code erreur ici <p>erreur</p> -->

        <table class="alt">
                <thead>
                    <?= $this->Html->tableHeaders(['ID', 'Nom utilisateur', 'Mail', 'Mot de passe', 'Nom', 'Prénom', 'Métier', 'Etage']); ?>
                </thead>
                <tbody>
                    <?= $this->Html->tableCells([
                        ['', '', '', '', '', '', '', ''],
                        ['', '', '', '', '', '', '', '']
                    ]); ?>
                </tbody>
        </table>
        
        <h2>Gestion : Kinesithérapeute</h2>
        <!-- code erreur ici <p>erreur</p> -->

        <table class="alt">
                <thead>
                    <?= $this->Html->tableHeaders(['ID', 'Kinésithérapeute', 'Patient IPP', 'Horaire 1', 'Durée 1', 'Horaire 2', 'Durée 2', 'Horaire 3', 'Durée 3', 'Horaire 4', 'Durée 4', 'Balnéothérapie', 'Groupe Balnéothérapie']); ?>
                </thead>
                <tbody>
                    <?= $this->Html->tableCells([
                        ['', '', '', '', '', '', '', '', '', '', '', '', ''],
                        ['', '', '', '', '', '', '', '', '', '', '', '', '']
                    ]); ?>
                </tbody>
        </table>
    </div>
</section>
        