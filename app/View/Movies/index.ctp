<h1 class="page-header">
    Lista de filmes <small>listagem</small>
</h1>

<div class="col-lg-3 col-md-6">
    <div class="panel panel-green">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-tasks fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge"><?php echo $nr; ?></div>
                    <div>Filmes</div>
                </div>
            </div>
        </div>
        <a href="#">
            <div class="panel-footer">
                <span class="pull-left">
                    <?php echo $this->Html->link('Ver todos', array(
                        'controller'=>'movies',
                        'action' => 'all'
                        )); 
                    ?>
                </span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>

<div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $nrAlugados ?></div>
                                        <div>Alugados</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">
                                        <?php echo $this->Html->link('Ver todos', array(
                                            'controller'=>'rents',
                                            'action' => 'all'
                                            )); 
                                        ?>
                                    </span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

<div class="col-lg-12">
   	<div class="alert alert-info alert-dismissable">
        <i class="fa fa-info-circle"></i>  
        	<strong>
        		<?php echo $this->Html->link('Aqui aqui para adicionar um filme', array(
        				'controller'=>'movies',
        				'action' => 'add'
        			)); 
        		?>
        	</strong> 
   	</div>
</div>



