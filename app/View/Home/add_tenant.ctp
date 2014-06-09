<div class = "row">
    <div class = "span12">
        <h1> Add new Tenant</h1>
    </div>
</div>
<div class = 'row'>
    <div class = 'span6'>
        <?php
            echo $this->Form->create('Tenant', array('action' => 'addTenant'));
            echo $this->Form->input('First Name', array('type' => 'text', 'class' => 'input-medium'));
            echo $this->Form->input('Last Name', array('type' => 'text', 'class' => 'input-medium'));
            echo $this->Form->input('Address', array('type' => 'text', 'class' => 'input-large'));
        ?>
    </div>
    <div class = "span6">
        <?php
            echo $this->Form->input('Address Cont', array('type' => 'text', 'class' => 'input-large'));
            echo $this->Form->input('City', array('type' => 'text', 'class' => 'input-small'));
            echo $this->Form->input('State', array('type' => 'text', 'class' => 'input-mini'));
        ?>
    </div>
</div>
<div class = "row">
    <div class = "span6">
        <?php
            echo $this->Form->input('Start Date', array('type' => 'date', 'class' => 'input-mini'));
            echo $this->Form->input('End Date', array('type' => 'date', 'class' => 'input-mini'));
            echo $this->Form->input('Phone', array('type' => 'number', 'class' => 'input-medium'));
        ?>
    </div>
    <div class = "span2">
        <?php
            echo $this->Form->input('Condition after occupancy', array('type' => 'textarea', 'class' => 'xxlarge'));
            echo $this->Form->input('Yard Kept', array('type' => 'checkbox', 'class' => 'checkbox'));
            echo $this->Form->input('Rent on Time', array('type' => 'checkbox', 'class' => 'checkbox'));
            ?>
    </div>
    <div class = "span8">
    </div>
</div>
<div class = "row">

    <div class = "span12" >
            <input type = "submit" class = "btn-large"/>
            <?php
            echo $this->Form->end();
            ?>
    </div>
 
</div>

        
        
        
        
        


