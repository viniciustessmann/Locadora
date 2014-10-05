<h1 class="page-header">
    Lista de gênero <small>listagem</small>
</h1>

<div class="col-lg-12">
   	<div class="alert alert-info alert-dismissable">
        <i class="fa fa-info-circle"></i>  
        	<strong>
        		<?php echo $this->Html->link('Aqui aqui para adicionar um gênero', array(
        				'controller'=>'genders',
        				'action' => 'add'
        			)); 
        		?>
        	</strong> 
   	</div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="panel panel-green">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-tasks fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge"><?php echo $nr; ?></div>
                    <div>Gêneros</div>
                </div>
        	</div>
        </div>
        <a href="#">
            <div class="panel-footer">
                <span class="pull-left">
					<?php echo $this->Html->link('Ver todos', array(
        				'controller'=>'genders',
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