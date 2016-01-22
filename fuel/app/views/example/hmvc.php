<div class="row">
    <h2 class="alert alert-info">day la page vi du ve hmvc</h2>
</div>
<?php

// inclue file tu hmvc
$wiget = \Fuel\Core\Request::forge('example/showhmvc')->execute();

echo $wiget;

