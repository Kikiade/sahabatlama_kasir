<?php
<p><?php echo $this->Html->link(__("Add Categorie", true), add); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Categorie</th>
        <th>Action</th>
    </tr>

    <?php foreach ($categories as $categorie): ?>
        <tr>
            <td><?php echo $categorie['Categorie']['id']; ?></td>
            <td>
                <?php echo $categorie['Categorie']['venue'];?>
            </td>     
        </tr>
    <?php endforeach; ?>    
</table>    
?>