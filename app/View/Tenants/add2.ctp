<div class = "row">
    <div class = "span12">
        <h1>Add Post</h1>
        <?php
        echo $this->Form->create('Tenant', array('class' => 'form-vertical'));
        echo $this->Form->input('first_name');
        echo $this->Form->input('last_name', array('rows' => '3'));
        $buttonOptions = array(
            'label' => 'Save Post',
            'class' => 'btn-primary'
        );
        echo $this->Form->end($buttonOptions);
        ?>
    </div>
</div>
