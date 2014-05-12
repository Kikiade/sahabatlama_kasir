<div class="users form">
    <?php
        echo $this->Form->create('User');
    ?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
        <?php
                echo $this->Form->input('name');
                echo $this->Form->input('username');
                echo $this->Form->input('password');
                echo $this->Form->input('status', array(
                'options' => array('0' => 'Not Active', '1' => 'Active')
            ));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('submit'));?>
</div>