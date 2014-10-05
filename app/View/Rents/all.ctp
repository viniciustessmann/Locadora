<h1 class="page-header">
    Filmes Alugados<small>todos</small>
</h1>



<div class="col-lg-6">
    <h2>Filmes</h2>
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Data de alocação</th>
                        <th>Cópias</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                	<?php foreach($rents as $rent){ ?>
                    <tr>
                        <td><?php echo $rent['Rent']['id']; ?></td>
                        <td><?php echo $rent['Rent']['movie_name']; ?></td>
                        <td>
                            <?php 
                                $data = $rent['Rent']['created'];
                                $data = explode('-', $data);
                                echo $data['2']."/".$data['1']."/".$data['0'];
                            ?>
                        </td>
                        <td><?php echo $rent['Rent']['qt']; ?></td>
                        <td>
                        	<?php
                                echo $this->Html->link(' Devolver', array(
                                    'controller'=>'rents', 
                                    'action'=>'receives',
                                    $rent['Rent']['id']
                                ));
                        	?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
 </div>