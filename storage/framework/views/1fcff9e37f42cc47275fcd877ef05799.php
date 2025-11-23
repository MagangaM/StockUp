<!DOCTYPE html>
<html>
<head>
    <title>Welcome to StockUp</title>
</head>
<body style="font-family: Arial; background: #f7f7f7; padding: 20px;">
    <div style="max-width: 600px; margin: 0 auto; background: #ffffff; padding: 30px; border-radius: 8px;">
        <h2 style="color: #2c3e50;">Welcome to StockUp, <?php echo e($user->name); ?>!</h2>

        <p>
            We're excited to have you on board. Your StockUp account has been successfully created.
        </p>

        <p>
            You can now log in, start adding products, tracking stock levels, and managing your inventory easily.
        </p>

        <br>

        <a href="<?php echo e(url('/login')); ?>"
           style="display:inline-block; padding:10px 20px; background:#007bff; color:white; text-decoration:none; border-radius:4px;">
           Login to Your Account
        </a>

        <br><br>

        <p>Regards,<br><strong>StockUp Team</strong></p>
    </div>
</body>
</html>
<?php /**PATH C:\wamp64\www\Stockup\resources\views/emails/welcome.blade.php ENDPATH**/ ?>