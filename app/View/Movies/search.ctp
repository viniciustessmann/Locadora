<h1 class="page-header">
    Buscar filmes <small><?php echo $term; ?></small>
</h1>

<div class="col-lg-6">
    <h2>Filmes</h2>
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Ano</th>
                        <th>Cópias</th>
                        <th>Data de criação</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($movies as $movie){ ?>
                    <tr>
                        <td><?php echo $movie['Movie']['id']; ?></td>
                        <td><?php echo $movie['Movie']['name']; ?></td>
                        <td><?php echo $movie['Movie']['year']; ?></td>
                        <td><?php echo $movie['Movie']['copy']; ?></td>
                        <td>
                            <?php 
                                $data = $movie['Movie']['created'];
                                $data = explode('-', $data);
                                echo $data['2']."/".$data['1']."/".$data['0'];
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $this->Html->link(' Alugar', array(
                                    'controller'=>'movies', 
                                    'action'=>'rent',
                                    $movie['Movie']['id']
                                ));
                                echo $this->Html->link(' Editar', array(
                                    'controller'=>'movies', 
                                    'action'=>'edit', 
                                    $movie['Movie']['id']
                                ));
                                echo $this->Html->link(' Deletar', array(
                                    'controller'=>'movies', 
                                    'action'=>'del',
                                    $movie['Movie']['id']
                                ));
                            ?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
 </div>