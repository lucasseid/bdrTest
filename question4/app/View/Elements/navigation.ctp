    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php echo $this->Html->link(
            'BDR Question 4',
            '/tasks',
            array('class' => 'navbar-brand', 'target' => '_top')
          );
          ?>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"> 
                <?php echo $this->Html->link(
                    'Tasks',
                    '/tasks',
                    array('target' => '_top')
                );?>
            </li>
            <li>
                <?php echo $this->Html->link(
                    'JSON Client',
                    '/client',
                    array('target' => '_top')
                );?>
          </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>