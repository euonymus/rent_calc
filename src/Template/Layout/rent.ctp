<? $cakeDescription = 'CakePHP: the rapid development php framework'; ?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?//= $this->Html->css('cake.css') ?>

    <!-- Bootstrap -->
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('bootstrap-theme.min.css') ?>

    <!-- Original -->
    <?= $this->Html->css('generic.css') ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js does not work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
</head>
<body>
    <header>
        <div class="header-title">
            <span><?= $this->fetch('title') ?></span>
        </div>
<? /*
        <div class="header-help">
            <span><a target="_blank" href="http://book.cakephp.org/3.0/">Documentation</a></span>
            <span><a target="_blank" href="http://api.cakephp.org/3.0/">API</a></span>
        </div>
*/ ?>
    </header>
    <div id="container">

        <div id="content">
            <?= $this->Flash->render() ?>

            <div class="row">
                <?= $this->fetch('content') ?>

                <div class="actions columns col-md-2">
                    <h3><?= __('Actions') ?></h3>
                </div>
            </div>
        </div>
        <footer>
        </footer>
    </div>

    <!-- jQuery (necessary for JavaScript plugins for Bootstrap) -->
    <?= $this->Html->script('//code.jquery.com/jquery-1.11.1.min.js') ?>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <?= $this->Html->script('bootstrap.min.js') ?>
    <?= $this->fetch('script') ?>

</body>
</html>
