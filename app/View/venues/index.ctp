<?php
<p><?php echo $this->Html->link(__("Add Venue", true), add); ?></p>
<table>
    <tr>
        <th>Id Venue</th>
        <th>Venue</th>
        <th>Action</th>
    </tr>

    <?php foreach ($venues as $venue): ?>
        <tr>
            <td><?php echo $venue['Venue']['id']; ?></td>
            <td>
                <?php echo $venue['Venue']['venue'];?>
            </td>     
        </tr>
    <?php endforeach; ?>    
</table>    
?>