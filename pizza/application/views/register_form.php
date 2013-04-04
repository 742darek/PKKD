<?php $this->load->helper('form'); ?>
<?php echo form_open('register'); ?>
    <ul id="register">
        <ul>
            <h3>Account information</h3>
            <li>
                <label for="username">Choose a username</label>
                <input type="text" name="username" value="<?php echo set_value('username'); ?>" />
                <span class="desc">The name you'd like to be known by</span>
                <?php echo form_error('username'); ?>
            </li>
            <li>
                <label for="password">Pick a password</label>
                <input type="password" name="password" />
                <span class="desc">The best passwords are random and more than 6 characters long</span>
                <?php echo form_error('password'); ?>
            </li>
            <li>
                <label for="email">Enter your valid email address</label>
                <input type="text" name="email" value="<?php echo set_value('email'); ?>" />
                <span class="desc">We'll send you an activation email</span>
                <?php echo form_error('email'); ?>
            </li>
        </ul>
        <ul>
            <h3>About you</h3>
            <li>
                <label for="band">Who's your favorite artist?</label>
                <input type="text" name="artist" value="<?php echo set_value('artist'); ?>" />
                <span class="desc">Don't put Lady GaGa.</span>
                <?php echo form_error('artist'); ?>
            </li>
        </ul>
        <ul>
        <ul>
            <h3 class="submit">
                <input type="submit" value="Register" />
            </h3>
        </ul>
    </ul>
<?php echo form_close(); ?>