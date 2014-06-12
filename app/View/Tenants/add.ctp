<div class = "row">
    <div class = "span12">
        <h1> Add new Tenant</h1>
    </div>
</div>
<div class = 'row'>
    <div class = 'span6'>
        <?php
            echo $this->Form->create('Tenant');
            echo $this->Form->input('first_name', array('type' => 'text', 'class' => 'input-medium nameValidation'));
            echo $this->Form->input('last_name', array('type' => 'text', 'class' => 'input-medium nameValidation'));
            echo $this->Form->input('address', array('type' => 'text', 'class' => 'input-large addrValidation'));
        ?>
    </div>
    <div class = "span6">
        <?php
            echo $this->Form->input('address_cont', array('type' => 'text', 'class' => 'input-large'));
            echo $this->Form->input('city', array('type' => 'text', 'class' => 'input-small nameValidation'));
            echo $this->Form->input('state' ,array( 'type'=>'select', 'options'=>array(
                'AL'=>"Alabama",
                'AK'=>"Alaska", 
                'AZ'=>"Arizona", 
                'AR'=>"Arkansas", 
                'CA'=>"California", 
                'CO'=>"Colorado", 
                'CT'=>"Connecticut", 
                'DE'=>"Delaware", 
                'DC'=>"District Of Columbia", 
                'FL'=>"Florida", 
                'GA'=>"Georgia", 
                'HI'=>"Hawaii", 
                'ID'=>"Idaho", 
                'IL'=>"Illinois", 
                'IN'=>"Indiana", 
                'IA'=>"Iowa", 
                'KS'=>"Kansas", 
                'KY'=>"Kentucky", 
                'LA'=>"Louisiana", 
                'ME'=>"Maine", 
                'MD'=>"Maryland", 
                'MA'=>"Massachusetts", 
                'MI'=>"Michigan", 
                'MN'=>"Minnesota", 
                'MS'=>"Mississippi", 
                'MO'=>"Missouri", 
                'MT'=>"Montana",
                'NE'=>"Nebraska",
                'NV'=>"Nevada",
                'NH'=>"New Hampshire",
                'NJ'=>"New Jersey",
                'NM'=>"New Mexico",
                'NY'=>"New York",
                'NC'=>"North Carolina",
                'ND'=>"North Dakota",
                'OH'=>"Ohio", 
                'OK'=>"Oklahoma", 
                'OR'=>"Oregon", 
                'PA'=>"Pennsylvania", 
                'RI'=>"Rhode Island", 
                'SC'=>"South Carolina", 
                'SD'=>"South Dakota",
                'TN'=>"Tennessee", 
                'TX'=>"Texas", 
                'UT'=>"Utah", 
                'VT'=>"Vermont", 
                'VA'=>"Virginia", 
                'WA'=>"Washington", 
                'WV'=>"West Virginia", 
                'WI'=>"Wisconsin", 
                'WY'=>"Wyoming"), )); 
            ?>	
        
    </div>
</div>
<div class = "row">
    <div class = "span6">
        <?php
            echo $this->Form->input('start_date', array('type' => 'date', 'class' => 'input-small'));
            echo $this->Form->input('end_date', array('type' => 'date', 'class' => 'input-small'));
            echo $this->Form->input('phone_number', array('type' => 'text', 'class' => 'input-medium phoneMask'));
        ?>
    </div>
    <div class = "span2">
        <?php
            echo $this->Form->input('condition_desc', array('type' => 'textarea', 'class' => 'xxlarge'));
            echo $this->Form->input('yard_kept', array('type' => 'checkbox', 'class' => 'checkbox'));
            echo $this->Form->input('rent_on_time', array('type' => 'checkbox', 'class' => 'checkbox'));
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