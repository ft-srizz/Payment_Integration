<?php

// Include Requests only if not already defined
if (class_exists('Requests') === false)
{
    require_once __DIR__.'/libs/Requests-1.8.0/library/Requests.php';
}

try
{
    Requests::register_autoloader();

    if (version_compare(Requests::VERSION, '1.6.0') === -1)
    {
        throw new Exception('Requests class found but did not match');
    }
}
catch (\Exception $e)
{
    throw new Exception('Requests class found but did not match');
}

spl_autoload_register(function ($class)
{
    // project-specific namespace prefix
    $prefix = 'Razorpay\Api';

    // base directory for the namespace prefix
    $base_dir = __DIR__ . '/src/';

    // does the class use the namespace prefix?
    $len = strlen($prefix);

    if (strncmp($prefix, $class, $len) !== 0)
    {
        // no, move to the next registered autoloader
        return;
    }

    // get the relative class name
    $relative_class = substr($class, $len);

    //
    // replace the namespace prefix with the base directory,
    // replace namespace separators with directory separators
    // in the relative class name, append with .php
    //
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // if the file exists, require it
    if (file_exists($file))
    {
        require $file;
    }
});

//recieving data

$name = $_POST['name'];
$mobno = $_POST['mobile'];
$email = $_POST['email'];
$amount = $_POST['amount'];

use Razorpay\Api\Api;
$keyid='rzp_live_FvXsPfyVzOrp3s';
$secretkey='whhDrtB4DboH3q8jm2alUEOn';

$api = new Api($keyid, $secretkey);
$order= $api->order->create(array('amount'=>$amount*100,'payment_capture'=>1,'currency'=>'INR',));
?>
<style>
.razorpay-payment-button{
	display: none;
}
</style>
<form action="" method="post">
<script src="https://checkout.razorpay.com/v1/checkout.js"
data-key="<?php echo $keyid ;?>"
data-amount="<?php echo $order->amount;?>"
data-currency="INR"
data-buttontext="Pay with Razorpay"
data-name="<?php echo $name;?>"
data-description="Payment Integration"
data-image=""
data-prefill.name="<?php echo $name;?>"
data-prefill.email="<?php echo $email;?>"
data-prefill.contact="<?php echo $mobno;?>"
data.theme.color="#black"
></script>
</form>
<script>document.querySelector(".razorpay-payment-button").click();</script>