<h1>View</h1>
<p><?php echo $post['SalesLog']['staff_id']; ?></p>
<p><?php echo $post['SalesLog']['vehicle_id']; ?></p>
<p><?php echo $post['SalesLog']['user_id']; ?></p>
<p><?php echo $post['SalesLog']['transaction_time'];?> </p>
<p><?php echo $post['SalesLog']['created'];?></p>
<p><?php echo $this->Html->link('Back', array('cotroller' => 'sales_logs', 'action' => 'index')); ?></p>