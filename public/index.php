<?php

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};

if(isset($_POST['submitpost'])){
    if(isset($_POST['g-recaptcha-response'])){
        $recaptcha = new \ReCaptcha\ReCaptcha('6LfnmLYdAAAAAN8R-5HYQVoI8c9dlAZ2XEf84Oqf');
        $resp = $recaptcha->verify($_POST['g-recaptcha-response']);
        if ($resp->isSuccess()) {
            // Verified!
        } else {
            $errors = $resp->getErrorCodes();
        }
    } else {
        var_dump('Captcha non rempli');
    }
}

?>