<h1 class="page-header">
    Gênero <small>todos</small>
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

<div class="col-lg-6">
    <h2>Gêneros</h2>
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Gênero</th>
                        <th>Data de criação</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                	<?php foreach($genders as $gender){ ?>
                    <tr>
                        <td><?php echo $gender['Gender']['id']; ?></td>
                        <td><?php echo $gender['Gender']['name']; ?></td>
                        <td>
                        	<?php 
                        		$data = $gender['Gender']['created'];
                        		$data = explode('-', $data);
                        		echo $data['2']."/".$data['1']."/".$data['0'];
                        	?>
                        </td>
                        <td>
                        	<?php
                                echo $this->Html->link(' Ver todos filmes', array(
                                    'controller'=>'genders', 
                                    'action'=>'search', 
                                    $gender['Gender']['id']
                                ));
                        		echo $this->Html->link(' Editar', array(
                        			'controller'=>'genders', 
                        			'action'=>'edit', 
                        			$gender['Gender']['id']
                        		));
                        		echo $this->Html->link(' Deletar', array(
                        			'controller'=>'genders', 
                        			'action'=>'del',
                        			$gender['Gender']['id']
                        		));
                        	?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
 </div>