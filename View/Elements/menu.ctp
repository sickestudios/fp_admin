<div class="navbar navbar-inverse">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Fullportadas.com</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><?php echo $this->Html->link(__('Home'), array('controller' => 'pages', 'action' => 'home')); ?></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Covers <b class="caret"></b></a>
                <ul class="dropdown-menu">
                <li class="nav-header">Actions for Redactor</li>
                  <li><?php echo $this->Html->link(__('<i class="icon-list"></i> List Covers Spanish'), array('controller' => 'covers', 'action' => 'index',3),array('escape'=>false)); ?></li>
                  <li><?php echo $this->Html->link(__('<i class="icon-list"></i> List Covers Portuguese'), array('controller' => 'covers', 'action' => 'index',2),array('escape'=>false)); ?></li>
                  <li class="divider"></li>
                  <li class="nav-header">Actions for Admin</li>
                  <li><?php echo $this->Html->link(__('<i class="icon-list"></i> List Covers'), array('controller' => 'covers', 'action' => 'index'),array('escape'=>false)); ?></li>
                  <li><?php echo $this->Html->link(__('<i class="icon-file"></i> Add Cover'), array('controller' => 'covers', 'action' => 'add'),array('escape'=>false)); ?></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reviews <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><?php echo $this->Html->link(__('<i class="icon-list"></i> List Reviews'), array('controller' => 'reviews', 'action' => 'index'),array('escape'=>false)); ?></li>
                  <li class="divider"></li>
                  <li><?php echo $this->Html->link(__('<i class="icon-eye-open"></i> Supervise Reviews'), array('controller' => 'reviews', 'action' => 'index','status'=>'waiting-supervision'),array('escape'=>false)); ?></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
</div>