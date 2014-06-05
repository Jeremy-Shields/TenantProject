
<!-- File: /app/View/Posts/add.ctp -->
<div class = "row">
    <div class = "span12">
        <h1>Add Post</h1>
        <?php
        echo $this->Form->create('Post', array('class' => 'form-vertical'));
        echo $this->Form->input('title');
        echo $this->Form->input('body', array('rows' => '3'));
        $buttonOptions = array(
            'label' => 'Save Post',
            'class' => 'btn-primary'
        );
        echo $this->Form->end($buttonOptions);
        ?>
    </div>
</div>

