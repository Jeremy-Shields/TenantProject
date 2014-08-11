<div class = "row">
    <div class = "span12">
        <h1>Tenants</h1>
        <table class = "table-striped">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>

        <!-- Here's where we loop through our $posts array, printing out post info -->

            <?php foreach ($tenants as $tenant): ?>
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
                    <?php
                        echo $this->Form->postLink(
                            'Delete',
                            array('action' => 'delete', $tenant['Tenant']['id']),
                            array('confirm' => 'Are you sure?')
                        );
                    ?>
                    <?php
                        echo $this->Html->link(
                            'Edit', array('action' => 'edit', $tenant['Tenant']['id'])
                        );
                    ?>
                </td>
                <td>
                  
                </td>
            </tr>
            <?php endforeach; ?>

        </table>
    </div>
        
</div>