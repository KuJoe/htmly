<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<style>.error-message ul {margin:0;padding:0;}</style>
<?php if (isset($error)) { ?>
    <div class="error-message"><?php echo $error ?></div>
<?php } ?>
<h1><?php echo i18n('Login');?></h1>
<form method="POST" action="login-mfa">
    <input type="hidden" name="csrf_token" value="<?php echo get_csrf() ?>">
    <input type="hidden" name="user" value="<?php echo $username; ?>">
    <input type="hidden" name="password" value="<?php echo $password; ?>">
    <label><?php echo i18n('MFACode');?></label>
    <input type="text" class="form-control" name="mfacode" placeholder="<?php echo i18n('verify_code'); ?>"/>
    <br>
    <input type="submit" class="btn btn-primary" name="submit" value="<?php echo i18n('Login');?>"/>
</form>