

<div class = "row">
    <div class = "span12">
        <h1>Tenant Home</h1>
    </div>

<div class = "row">
<ul class="nav nav-tabs">
    <li class="active" ><a href="#settings" data-toggle="tab">Search</a></li>
  <li><a href="#messages" data-toggle="tab">View Tenants</a></li>
  <li><a href="#profile" data-toggle="tab">Add Tenant</a></li>
 
  
</ul>

<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane active" id="home">
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
    </div>
    <div class="tab-pane" id="profile">
            <div class = "row">
                <div class = "span8">
                    <h1> Add new Tenant</h1>
                </div>
            </div>
            <div class = 'row'>
                <div class = 'span4'>
                    <?php
                        echo $this->Form->create('Tenant');
                        echo $this->Form->input('first_name', array('type' => 'text', 'class' => 'input-medium nameValidation'));
                        echo $this->Form->input('last_name', array('type' => 'text', 'class' => 'input-medium nameValidation'));
                        echo $this->Form->input('address', array('type' => 'text', 'class' => 'input-large addrValidation'));
                    ?>
                </div>
                <div class = "span4">
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
            <div class = "span2">
                <?php
                    echo $this->Form->input('start_date', array('type' => 'date', 'class' => 'input-small'));
                    echo $this->Form->input('end_date', array('type' => 'date', 'class' => 'input-small'));
                    echo $this->Form->input('phone_number', array('type' => 'text', 'class' => 'input-medium phoneMask'));
                ?>
            </div>
            <div class = "span4">
                <?php
                    echo $this->Form->input('condition_desc', array('type' => 'textarea', 'class' => 'xxlarge'));
                    echo $this->Form->input('yard_kept', array('type' => 'checkbox', 'class' => 'checkbox'));
                    echo $this->Form->input('rent_on_time', array('type' => 'checkbox', 'class' => 'checkbox'));
                    ?>
            </div>
            <div class = "span2">
            </div>
        </div>
        <div class = "row">

            <div class = "span8" >
                    <input type = "submit" class = "btn-large"/>
                    <?php
                    echo $this->Form->end();
                    ?>
            </div>

        </div>
        <?php echo $this->Html->script('addTenant.js');?>

        
    </div>
    <div class="tab-pane" id="messages">
        <?php echo $this->Html->script('ViewTenant.js');?>
        
        
        <div class = "row">
    <div class = "span8">
        <h1>Tenants</h1>
    </div>
     <div class = "span8">
        <table class = "table-striped table-bordered">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>

        <!-- Here's where we loop through our $posts array, printing out post info -->

            <?php 
            

            
            foreach ($tenants as $tenant): ?>
            <tr>
                <td><?php echo $tenant['Tenant']['id']; ?></td>
                <td>
                    <?php
                        echo $this->Html->link(
                            $tenant['Tenant']['first_name']." ".$tenant['Tenant']['last_name'],
                            array('action' => 'view', $tenant['Tenant']['id'])
                        );
                    ?>
                </td>
                <td>
                    <a  href = "/TenantProject/Tenants/delete/<?php echo $tenant['Tenant']['id']?>" class = "tenDelete"><i class = "icon-remove-circle"></i></a>
                    <a  href = "/TenantProject/Tenants/edit/<?php echo $tenant['Tenant']['id']?>"><i class = "icon-eye-open"></i></a>
                </td>
                <td>
                  
                </td>
            </tr>
            <?php endforeach; ?>

           
        </table>

    </div>
        
</div>
        
        
       
    </div>
    <div class="tab-pane" id="settings">
        <div class = "row">
            <div class = "span8">
                <h1>Tenant Search</h1>
            </div>
        </div>
        <div class = "row">
            <div class = "span8">
            </div>
        </div>
        
        
        
        
        
        
    </div>
</div>



