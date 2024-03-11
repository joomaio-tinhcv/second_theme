<?php if ($this->message) { ?>
    <div class="d-flex mt3 mb0 message-body alert <?php echo (0 === strpos($this->message, 'Error')) ? 'alert-danger' : 'alert-success'; ?>">
        <?php echo $this->message;?>
    </div>
<?php
}
?>
