<!-- Fixed navbar -->
<div class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <!-- Button for smallest screens -->
            <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button"></button><a class="navbar-brand" href="index.html"><img alt="Techro HTML5 template" src="assets/images/logo.png" /></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right mainNav">
            
                <?php foreach($menu as $menuitem):?>
                <li class="<?php echo $menuitem['class']; ?>">
                    <a href="<?php echo BASE_URL.$menuitem['url']; ?>">
                        <?php echo utf8_encode($menuitem['name']); ?>
                    </a>
                </li>
                <?php endforeach; ?>                    
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>
<!-- /.navbar --><!-- Header -->