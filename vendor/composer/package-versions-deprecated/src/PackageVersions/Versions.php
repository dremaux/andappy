<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'cocur/slugify' => 'v4.1.0@2611e6081dbbb05837a16ed339c0451923d4046e',
  'composer/package-versions-deprecated' => '1.11.99.4@b174585d1fe49ceed21928a945138948cb394600',
  'doctrine/annotations' => '1.13.2@5b668aef16090008790395c02c893b1ba13f7e08',
  'doctrine/cache' => '2.1.1@331b4d5dbaeab3827976273e9356b3b453c300ce',
  'doctrine/collections' => '1.6.8@1958a744696c6bb3bb0d28db2611dc11610e78af',
  'doctrine/common' => '3.2.2@295082d3750987065912816a9d536c2df735f637',
  'doctrine/data-fixtures' => '1.5.2@51c1890e8c5467c421c7cab4579f059ebf720278',
  'doctrine/dbal' => '3.3.3@82331b861727c15b1f457ef05a8729e508e7ead5',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/doctrine-bundle' => '2.5.7@1e0d1d7a5982eeebc37dcb4d77bb1a5c5961d96d',
  'doctrine/doctrine-fixtures-bundle' => '3.4.1@31ba202bebce0b66fe830f49f96228dcdc1503e7',
  'doctrine/doctrine-migrations-bundle' => '3.2.2@3393f411ba25ade21969c33f2053220044854d01',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.4@8b7ff3e4b7de6b2c84da85637b59fd2880ecaa89',
  'doctrine/instantiator' => '1.4.1@10dcfce151b967d20fde1b34ae6640712c3891bc',
  'doctrine/lexer' => '1.2.3@c268e882d4dbdd85e36e4ad69e02dc284f89d229',
  'doctrine/migrations' => '3.4.1@e7df670aa9565b435ffec636cebdb4d0a1987f10',
  'doctrine/orm' => '2.11.2@9c351e044478135aec1755e2c0c0493a4b6309db',
  'doctrine/persistence' => '2.4.0@e7c8edcf98e819638af00e7b3cbbbd7734b9b2fb',
  'doctrine/sql-formatter' => '1.1.2@20c39c2de286a9d3262cc8ed282a4ae60e265894',
  'egulias/email-validator' => '3.1.2@ee0db30118f661fb166bcffbf5d82032df484697',
  'friendsofphp/proxy-manager-lts' => 'v1.0.7@c828ced1f932094ab79e4120a106a666565e4d9c',
  'fzaninotto/faker' => 'v1.5.0@d0190b156bcca848d401fb80f31f504f37141c8d',
  'imagine/imagine' => '1.3.1@fc3e477a15907e8f2a11c32f1aecb07101c0bd31',
  'jms/metadata' => '2.6.1@c3a3214354b5a765a19875f7b7c5ebcd94e462e5',
  'knplabs/knp-components' => 'v3.3.0@03e8ad16261dd8a70a8c6e01f18eb3852437546e',
  'knplabs/knp-paginator-bundle' => 'v5.8.0@216b9d5708001788321916c5b7632da9fb9ef6ca',
  'laminas/laminas-code' => '4.5.1@6fd96d4d913571a2cd056a27b123fa28cb90ac4e',
  'liip/imagine-bundle' => '2.7.6@9baad226c7cbc85e7cd751d2bc587c35b0ad0325',
  'monolog/monolog' => '2.4.0@d7fd7450628561ba697b7097d86db72662f54aef',
  'nelmio/cors-bundle' => '2.2.0@0ee5ee30b0ee08ea122d431ae6e0ddeb87f035c0',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.3.0@622548b623e81ca6d78b721c5e029f4ce664f170',
  'phpdocumentor/type-resolver' => '1.6.0@93ebd0014cab80c4ea9f5e297ea48672f1b87706',
  'psr/cache' => '2.0.0@213f9dbc5b9bfbc4f8db86d2838dc968752ce13b',
  'psr/container' => '1.1.2@513e0666f7216c7459170d56df27dfcefe1689ea',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/link' => '1.1.1@846c25f58a1f02b93a00f2404e3626b6bf9b7807',
  'psr/log' => '2.0.0@ef29f6d262798707a9edd554e2b82517ef3a9376',
  'sensio/framework-extra-bundle' => 'v6.2.6@6bd976c99ef3f78e31c9490a10ba6dd8901076eb',
  'symfony/apache-pack' => 'v1.0.1@3aa5818d73ad2551281fc58a75afd9ca82622e6c',
  'symfony/asset' => 'v5.3.14@fb60377bfa717aef01de9dfe0ce1c371f546de21',
  'symfony/cache' => 'v5.3.14@ea6de0cb6fef5e3d5c145bbd665ba35b43b4d11b',
  'symfony/cache-contracts' => 'v2.5.0@ac2e168102a2e06a2624f0379bde94cd5854ced2',
  'symfony/config' => 'v5.3.14@04695656c462fcadad350d5d82f5be81440fb4b2',
  'symfony/console' => 'v5.3.16@2e322c76cdccb302af6b275ea2207169c8355328',
  'symfony/dependency-injection' => 'v5.3.14@b9de28b341247a92fa576315022b850c315ef82a',
  'symfony/deprecation-contracts' => 'v2.5.0@6f981ee24cf69ee7ce9736146d1c57c2780598a8',
  'symfony/doctrine-bridge' => 'v5.3.14@b71eb1d7c7520c75f8905f6cff092d5400105222',
  'symfony/dotenv' => 'v5.3.14@f0408446200edf1a363b01d7ed75a279985c389d',
  'symfony/error-handler' => 'v5.3.14@8f93f4532c28cfe0488a9517bcd7f6169306ebb2',
  'symfony/event-dispatcher' => 'v5.3.14@6dc2d5b31cdf84fa6344f44056c32f939fcb8c4a',
  'symfony/event-dispatcher-contracts' => 'v2.5.0@66bea3b09be61613cd3b4043a65a8ec48cfa6d2a',
  'symfony/expression-language' => 'v5.3.14@af6a88b8986d5a20d75fd0cc384e362adbade93d',
  'symfony/filesystem' => 'v5.3.14@1c11c4846dff1b62c869a47d45fa5ed5e93faea2',
  'symfony/finder' => 'v5.3.14@5ab1855ebe36c381ccde572f110f3280f88babf5',
  'symfony/flex' => 'v1.18.5@10e438f53a972439675dc720706f0cd5c0ed94f1',
  'symfony/form' => 'v5.3.14@bda43cb6c7a94a65266c0d74bdffb3e500aa2696',
  'symfony/framework-bundle' => 'v5.3.15@fef224d1904da67120fdfe9de3d070f8ba607742',
  'symfony/http-client' => 'v5.3.14@692eace552581e33f05969180289c93c43911d8e',
  'symfony/http-client-contracts' => 'v2.5.0@ec82e57b5b714dbb69300d348bd840b345e24166',
  'symfony/http-foundation' => 'v5.3.14@f1ac8067e60bca740dc51160788c8e91fc9de75a',
  'symfony/http-kernel' => 'v5.3.16@a126e33084ed0ed2bf3251942911f26078b8c559',
  'symfony/intl' => 'v5.3.14@a97d73f5aa7578c1a0838d83216f7b2ffdce99e2',
  'symfony/mailer' => 'v5.3.14@8ff0b648d030a7bd79cefe05104cc1d3853523d2',
  'symfony/mime' => 'v5.3.14@2769b338f999a7c53a88e3c124a3d69d7d3feb49',
  'symfony/monolog-bridge' => 'v5.3.14@b3cb93cf917abf826d45d85514fea3b07e629335',
  'symfony/monolog-bundle' => 'v3.7.1@fde12fc628162787a4e53877abadc30047fd868b',
  'symfony/notifier' => 'v5.3.14@39635b9c8b8e6b024a4292cdded4c3406ead4f3c',
  'symfony/options-resolver' => 'v5.3.14@dba9d6614e7ecf9369267e00ea9418083baf4e78',
  'symfony/password-hasher' => 'v5.3.14@2c138dae2c63cc7cca9f86fac424b501e46ad831',
  'symfony/polyfill-intl-grapheme' => 'v1.25.0@81b86b50cf841a64252b439e738e97f4a34e2783',
  'symfony/polyfill-intl-icu' => 'v1.25.0@c023a439b8551e320cc3c8433b198e408a623af1',
  'symfony/polyfill-intl-idn' => 'v1.25.0@749045c69efb97c70d25d7463abba812e91f3a44',
  'symfony/polyfill-intl-normalizer' => 'v1.25.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.25.0@0abb51d2f102e00a4eefcf46ba7fec406d245825',
  'symfony/polyfill-php73' => 'v1.25.0@cc5db0e22b3cb4111010e48785a97f670b350ca5',
  'symfony/polyfill-php80' => 'v1.25.0@4407588e0d3f1f52efb65fbe92babe41f37fe50c',
  'symfony/polyfill-php81' => 'v1.25.0@5de4ba2d41b15f9bd0e19b2ab9674135813ec98f',
  'symfony/process' => 'v5.3.14@8bbae08c19308b9493ad235386144cbefec83cb0',
  'symfony/property-access' => 'v5.3.14@327235376dda28e00c0d96cb030c7d66c62b071b',
  'symfony/property-info' => 'v5.3.14@db50c58877e6e4087bb83abe99404e7f69dd143e',
  'symfony/proxy-manager-bridge' => 'v5.3.14@2b8e3c489432564fe64dfbf3c5c878355b46dbb0',
  'symfony/routing' => 'v5.3.14@eddd14a04a9f34a9f5fe0b87961aca580d6dfa6c',
  'symfony/runtime' => 'v5.3.14@affdf1847e37a16dce3667988fc8494ac8bdf92c',
  'symfony/security-bundle' => 'v5.3.14@548b841c02facf4282a1928eb4ebde9aeb9779ba',
  'symfony/security-core' => 'v5.3.14@e364dfa20f5f9a18fe6c6f69c846bc157d0dc988',
  'symfony/security-csrf' => 'v5.3.14@272fd6365ba8353aab949a287118351303b7d68f',
  'symfony/security-guard' => 'v5.3.14@164159b6798d71bf9d10a144d05dd92f57fa9384',
  'symfony/security-http' => 'v5.3.14@7262100e4f401544e9f3cce2b00ef5184298eca2',
  'symfony/serializer' => 'v5.3.14@5d58faa7fa1350aa3d11502cdd80ae2f242404aa',
  'symfony/service-contracts' => 'v2.5.0@1ab11b933cd6bc5464b08e81e2c5b07dec58b0fc',
  'symfony/stopwatch' => 'v5.3.14@fec0d6b81afabfdf3d2db5c1e4c2107b59699a4a',
  'symfony/string' => 'v5.3.14@006fadf2d23b7b1a0ec5f3a0a5a80e1da2819c94',
  'symfony/translation' => 'v5.3.14@945066809dc18f6e26123098e1b6e1d7a948660b',
  'symfony/translation-contracts' => 'v2.5.0@d28150f0f44ce854e942b671fc2620a98aae1b1e',
  'symfony/twig-bridge' => 'v5.3.14@5830022728b73b3a28877b3e2c03332a28294fe7',
  'symfony/twig-bundle' => 'v5.3.14@0bc86c3f5cf7354423a9256dace9fcaeb52bd1ed',
  'symfony/validator' => 'v5.3.14@450191bff1b2a1b01b9b6d3e3a289ac211eb7343',
  'symfony/var-dumper' => 'v5.3.14@daf799d0fbad76a40f2d4691d732641793103700',
  'symfony/var-exporter' => 'v5.3.14@1ca85c38c0c70201c599264923b86e588ddf8878',
  'symfony/web-link' => 'v5.3.14@4dee73740953a0233c648b9e5c4db1053dbeb88a',
  'symfony/yaml' => 'v5.3.14@c441e9d2e340642ac8b951b753dea962d55b669d',
  'twbs/bootstrap' => 'v5.1.3@1a6fdfae6be09b09eaced8f0e442ca6f7680a61e',
  'twig/extra-bundle' => 'v3.3.8@2e58256b0e9fe52f30149347c0547e4633304765',
  'twig/twig' => 'v3.3.8@972d8604a92b7054828b539f2febb0211dd5945c',
  'vich/uploader-bundle' => '1.19.0@56aeadb1365de714f54f4a7c3b6757e8662f4f29',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'myclabs/deep-copy' => '1.11.0@14daed4296fae74d9e3201d2c4925d1acb7aa614',
  'nikic/php-parser' => 'v4.13.2@210577fe3cf7badcc5814d99455df46564f3c077',
  'phar-io/manifest' => '2.0.3@97803eca37d319dfa7826cc2437fc020857acb53',
  'phar-io/version' => '3.2.1@4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
  'phpspec/prophecy' => 'v1.15.0@bbcd7380b0ebf3961ee21409db7b38bc31d69a13',
  'phpunit/php-code-coverage' => '9.2.15@2e9da11878c4202f97915c1cb4bb1ca318a63f5f',
  'phpunit/php-file-iterator' => '3.0.6@cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.4@5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
  'phpunit/php-timer' => '5.0.3@5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
  'phpunit/phpunit' => '9.5.19@35ea4b7f3acabb26f4bb640f8c30866c401da807',
  'sebastian/cli-parser' => '1.0.1@442e7c7e687e42adc03470c7b668bc4b2402c0b2',
  'sebastian/code-unit' => '1.0.8@1fc9f64c0927627ef78ba436c9b17d967e68e120',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.6@55f4261989e546dc112258c7a75935a81a7ce382',
  'sebastian/complexity' => '2.0.2@739b35e53379900cc9ac327b2147867b8b6efd88',
  'sebastian/diff' => '4.0.4@3461e3fccc7cfdfc2720be910d3bd73c69be590d',
  'sebastian/environment' => '5.1.3@388b6ced16caa751030f6a69e588299fa09200ac',
  'sebastian/exporter' => '4.0.4@65e8b7db476c5dd267e65eea9cab77584d3cfff9',
  'sebastian/global-state' => '5.0.5@0ca8db5a5fc9c8646244e629625ac486fa286bf2',
  'sebastian/lines-of-code' => '1.0.3@c1c2e997aa3146983ed888ad08b15470a2e22ecc',
  'sebastian/object-enumerator' => '4.0.4@5c9eeac41b290a3712d88851518825ad78f45c71',
  'sebastian/object-reflector' => '2.0.4@b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
  'sebastian/recursion-context' => '4.0.4@cd9d8cf3c5804de4341c283ed787f099f5506172',
  'sebastian/resource-operations' => '3.0.3@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '3.0.0@b233b84bc4465aff7b57cf1c4bc75c86d00d6dad',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'symfony/browser-kit' => 'v5.3.14@84d0dc472df8dc05b0fa92e39272255fe42fc5d0',
  'symfony/css-selector' => 'v5.3.14@9e3a9e99095fd55fb68c0ffe2f7e10ae13ac66ee',
  'symfony/debug-bundle' => 'v5.3.14@249ceb22eecad97bc1044c9519651777abf2474c',
  'symfony/dom-crawler' => 'v5.3.14@076dd4b4de41d060b1397319dfbed8cd56a6a484',
  'symfony/maker-bundle' => 'v1.38.0@143024ab0e426285d3d9b7f6a3ce51e12a9d8ec5',
  'symfony/phpunit-bridge' => 'v5.4.3@216b07b05644607c81afd89a208e52641c1ce6b8',
  'symfony/web-profiler-bundle' => 'v5.3.14@d0bf5f7ecf8c49594ddc53e5cdb7929f9b401988',
  'theseer/tokenizer' => '1.2.1@34a41e998c2183e22995f158c581e7b5e755ab9e',
  'symfony/polyfill-ctype' => '*@4e891d84837e7e9261870071ff4b75d257eb16c9',
  'symfony/polyfill-iconv' => '*@4e891d84837e7e9261870071ff4b75d257eb16c9',
  'symfony/polyfill-php72' => '*@4e891d84837e7e9261870071ff4b75d257eb16c9',
  '__root__' => 'dev-main@4e891d84837e7e9261870071ff4b75d257eb16c9',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
