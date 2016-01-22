<div class="row">
    <div class="message">
    
        <?php
            if(is_array($messages)){
                foreach ($messages as $key => $value) {
                    echo "<li>".$value."</li>";
                }
            }
        ?>
    </div>
</div>
<div class="row">
    <?php echo $form;?>
</div>
