<h1>View</h1>
<table>
	<tr>
		<th>Id</th>
    	<th>Name</th>
    	<th>Vehicle Number</th>
        <th>Vehicle Category</th>
    	<th>Status</th>
        <th>Created</th>
        <th>Modified</th>
    </tr>
    <tr>
		<td> <?php echo $post['Customer']['id']?> </td>
		<td> <?php echo $post['Customer']['name'] ?> </td>
		<td> <?php echo $post['Customer']['vehicle_number'] ?> </td>
        <td> <?php echo $post['Customer']['vehicle_category_id'] ?> </td>
		<td> <?php echo $post['Customer']['status'] ?> </td>
        <td> <?php echo $post['Customer']['created'] ?> </td>
        <td> <?php echo $post['Customer']['modified'] ?> </td>
     </tr>
</table>