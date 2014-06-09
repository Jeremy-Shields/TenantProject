<div class = "row">
    <div class = "span12">
        <h1> Add new Tenant</h1>
        <?php
            echo $this->Form->create('Tenant', array('action' => 'addTenant'));
            echo $this->Form->input('First Name', array('type' => 'text'));
            echo $this->Form->input('Last Name', array('type' => 'text'));
            echo $this->Form->input('Address', array('type' => 'text'));
            echo $this->Form->input('Address Cont', array('type' => 'text'));
            echo $this->Form->input('City', array('type' => 'text'));
            echo $this->Form->input('State', array('type' => 'text'));
            echo $this->Form->input('Start Date', array('type' => 'date'));
            echo $this->Form->input('End Date', array('type' => 'date'));
            echo $this->Form->input('Phone', array('type' => 'number'));
            echo $this->Form->input('Condition after occupancy', array('type' => 'textarea'));
            echo $this->Form->input('Yard Kept', array('type' => 'checkbox'));
            echo $this->Form->input('Rent on Time', array('type' => 'checkbox'));
            echo $this->Form->end('Add');
            
        
        
        
        
        ?>
    </div>
</div>

