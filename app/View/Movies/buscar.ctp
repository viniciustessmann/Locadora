<h1 class="page-header">
    Buscar filmes <small></small>


</h1>

<div class="col-lg-12">
    <div class="alert alert-info alert-dismissable">
            <?php
                echo $this->form->create('Movie', array('controller'=>'movies', 'action'=>'search'));
                echo $this->form->input('name', array('label'=>'Nome do Filme', 'class'=>'form-control'));
                echo $this->form->end('Buscar');
            ?>
    </div>
</div>