<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
     
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-desktop"></i> Filmes <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                
                                    <?php
                                        echo $this->Html->link('Cadastrar Filme', array(
                                                'controller'=>'movies',
                                                'action' => 'add'
                                            ));
                                    ?>
                                
                            </li>
                            <li>
                                
                                    <?php
                                        echo $this->Html->link('Listar Filmes', array(
                                                'controller'=>'movies',
                                                'action' => 'all'
                                            ));
                                    ?>
                                </a>
                            </li>
                            <li>
                                
                                    <?php
                                        echo $this->Html->link('Buscar Filmes', array(
                                                'controller'=>'movies',
                                                'action' => 'buscar'
                                            ));
                                    ?>
                                
                            </li>
                            <li>
                                
                                    <?php
                                        echo $this->Html->link('Importar', array(
                                                'controller'=>'movies',
                                                'action' => 'upload'
                                            ));
                                    ?>
                                
                            </li>
                            <li>
                                
                                    <?php
                                        echo $this->Html->link('Gêneros', array(
                                                'controller'=>'genders',
                                                'action' => 'index'
                                            ));
                                    ?>
                                
                            </li>
                            <li>
                                
                                    <?php
                                        echo $this->Html->link('Alugados', array(
                                                'controller'=>'rents',
                                                'action' => 'index'
                                            ));
                                    ?>
                                
                            </li>
                        </ul>
                    </li>


                    

                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>