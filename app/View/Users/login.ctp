<<<<<<< HEAD
<div class = "row">
    <div class = "span12">
        <?php echo print_r($post)?>
    </div>
</div>
=======


<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>
            <?php echo __('Please enter your username and password'); ?>
        </legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>
>>>>>>> 8c1167ec4fffcf8695c2a887753caf26190fcb4c
