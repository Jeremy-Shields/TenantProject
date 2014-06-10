<div class = "row">
    <div class = "span12">
        <h1> Add new Tenant</h1>
    </div>
</div>
<div class = 'row'>
    <div class = 'span6'>
        <?php
            echo $this->Form->create('Tenant');
            echo $this->Form->input('First Name', array('type' => 'text', 'class' => 'input-medium nameValidation'));
            echo $this->Form->input('Last Name', array('type' => 'text', 'class' => 'input-medium nameValidation'));
            echo $this->Form->input('Address', array('type' => 'text', 'class' => 'input-large addrValidation'));
        ?>
    </div>
    <div class = "span6">
        <?php
            echo $this->Form->input('Address Cont', array('type' => 'text', 'class' => 'input-large'));
            echo $this->Form->input('City', array('type' => 'text', 'class' => 'input-small nameValidation'));
            ?>
        <select class = "form-control">
	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select>	
        
    </div>
</div>
<div class = "row">
    <div class = "span6">
        <?php
            echo $this->Form->input('Start Date', array('type' => 'date', 'class' => 'input-small'));
            echo $this->Form->input('End Date', array('type' => 'date', 'class' => 'input-small'));
            echo $this->Form->input('Phone', array('type' => 'text', 'class' => 'input-medium phoneMask'));
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
<?php echo $this->Html->script('addTenant.js');?>