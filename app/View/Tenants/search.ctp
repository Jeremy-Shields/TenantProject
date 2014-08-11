<div class = "row">
  <div class = "span8">
    <h1>Search by Name</h1>
  </div>
</div>
<div class = "row">
    <div span = "8">
        <?php
            echo $this->Form->create('Tenant', array ('action' => 'search'));
            echo $this->Form->input('first_name', array('type' => 'text', 'class' => 'input-medium nameValidation'));
            echo $this->Form->input('last_name', array('type' => 'text', 'class' => 'input-medium nameValidation'));
        ?>
    </div>
</div>