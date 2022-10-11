<?php

namespace ContainerQb75Ejz;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_FormDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.form_debug' shared service.
     *
     * @return \Symfony\Component\Form\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DebugCommand.php';

        $container->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($container->privates['form.registry'] ?? $container->load('getForm_RegistryService')), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 3 => 'Vich\\UploaderBundle\\Form\\Type', 4 => 'Liip\\ImagineBundle\\Form\\Type'], [0 => 'App\\Form\\AgenceType', 1 => 'App\\Form\\CAgenceType', 2 => 'App\\Form\\CoinsType', 3 => 'App\\Form\\OptionType', 4 => 'App\\Form\\PropertySearchType', 5 => 'App\\Form\\PropertyType', 6 => 'App\\Form\\QuestionLibreType', 7 => 'App\\Form\\QuestionONType', 8 => 'App\\Form\\QuestionQCMType', 9 => 'App\\Form\\QuestionType', 10 => 'App\\Form\\RegistrationFormType', 11 => 'App\\Form\\ReponseType', 12 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 13 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 14 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 15 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType', 16 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 17 => 'Vich\\UploaderBundle\\Form\\Type\\VichFileType', 18 => 'Vich\\UploaderBundle\\Form\\Type\\VichImageType', 19 => 'Liip\\ImagineBundle\\Form\\Type\\ImageType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($container->privates['debug.file_link_formatter'] ?? $container->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:form');
        $instance->setDescription('Display form type information');

        return $instance;
    }
}
