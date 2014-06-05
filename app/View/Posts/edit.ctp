<!-- File: /app/View/Posts/edit.ctp -->
<div class = "row">
    <div class = "span12">
        <h1>Edit Post</h1>
        <?php
        echo $this->Form->create('Post', array('class' => 'form-vertical'));
        echo $this->Form->input('title');
        echo $this->Form->input('body', array('rows' => '3'));
        echo $this->Form->input('id', array('type' => 'hidden'));
        $btnOpt = array(
            'label' => 'Save Post',
            'class' => 'btn-primary'
        );
        echo $this->Form->end($btnOpt);
        ?>
    </div>
</div>
