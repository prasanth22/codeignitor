<body>
    <div class="container">
        <div class="col-lg-8">
		<br />
		  <h3 align="center">User Login</h3>
		 <br />
        <div class="panel panel-default">
            <div class="panel-body">
                <?php
                if($this->session->flashdata('message'))
                {
                    echo '
                    <div class="alert alert-success">
                        '.$this->session->flashdata("message").'
                    </div>
                    ';
                }
                ?>
                <form method="post" action="<?php echo base_url(); ?>login/validation">
                    <div class="form-group">
                        <label>Enter Email Address</label>
                        <input type="text" name="user_email" class="form-control" value="<?php echo set_value('user_email'); ?>" />
                        <span class="text-danger"><?php echo form_error('user_email'); ?></span>
                    </div>
                    <div class="form-group">
                        <label>Enter Password</label>
                        <input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>" />
                        <span class="text-danger"><?php echo form_error('user_password'); ?></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="login" value="Login" class="btn btn-info" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url(); ?>register">Register</a>
                    </div>
                </form>
            </div>
        </div>
	  </div>	
    </div>
</body>