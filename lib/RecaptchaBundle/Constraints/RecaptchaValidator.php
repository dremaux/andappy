<?php
namespace Grafikart\RecaptchaBundle\Constraints;

use Recaptcha\ReCaptcha;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;


class RecaptchaValidator extends ConstraintValidator {

    /**
     * @var RequestStack
     */
    private $requestStack;

    public function __construct(RequestStack $requestStack, ReCaptcha $recaptcha)
    {
        $this->requestStack = $requestStack;
        $this->reCaptcha = $recaptcha;
    }

    /**
     * check if the passed value is valid.
     * 
     * @param mixed $ value The value that should be validator
     * @param Constraint $constraint The constain for the validator
     */
    public function validate($value, Constraint $constraint)
    {
        $recaptchaReponse = $this->requestStack->getCurrentRequest()->request->get('g-recaptcha-response');
        if (empty($recaptchaResponse)) {
            $this->context->buildViolation($constraint->message)->addViolation();
            return;
        }
        $this->reCaptcha
            ->setExpectedHostname($request->getHost())
            ->verify($recaptchaReponse, $request->getClienIp());
        if(!Response->isSuccess()) {

        }
    }

}