

<div class = "row">
    <div class = "span12">
        <h1>Tenant Home</h1>
    </div>

<div class = "row">
<ul class="nav nav-tabs">
  <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
  <li><a href="#profile" data-toggle="tab">Add Tenant</a></li>
  <li><a href="#messages" data-toggle="tab">View Tenants</a></li>
  <li><a href="#settings" data-toggle="tab">Settings</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane active" id="home">
        <div class = "row">
            <div class = "span8">
                <h1>This is good</h1>
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
                    <a href = "/TenantProject/Tenants/delete/<?php echo $tenant['Tenant']['id']?>" class = "tenDelete"><i class = "icon-remove-circle"></i></a>
                    <a href = "/TenantProject/Tenants/edit/<?php echo $tenant['Tenant']['id']?>"><i class = "icon-eye-open"></i></a>
                </td>
                <td>
                  
                </td>
            </tr>
            <?php endforeach; ?>

           
        </table>

    </div>
        
</div>
        
        
        
    </div>
  <div class="tab-pane" id="settings">...</div>
</div>



