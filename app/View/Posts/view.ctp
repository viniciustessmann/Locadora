<h1>Post - ViEw</h1>
<h2><?= $post['Post']['name'] ?></h2>
<p><?=$post['Post']['password']?></p>

<?=$this->Html->link('listar POst', array('controller' => 'posts', 'action' => 'index'));