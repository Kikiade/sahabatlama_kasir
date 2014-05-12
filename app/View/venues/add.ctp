<h1>Add Venue</h1>
<?php
echo $this->Form->Create('Venue');
echo $this->Form->input('Title');
echo $this->Form->end('Save Post');
?>