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
  'cocur/slugify' => 'v4.0.0@3f1ffc300f164f23abe8b64ffb3f92d35cec8307',
  'composer/package-versions-deprecated' => '1.11.99.4@b174585d1fe49ceed21928a945138948cb394600',
  'doctrine/annotations' => '1.13.2@5b668aef16090008790395c02c893b1ba13f7e08',
  'doctrine/cache' => '2.1.1@331b4d5dbaeab3827976273e9356b3b453c300ce',
  'doctrine/collections' => '1.6.8@1958a744696c6bb3bb0d28db2611dc11610e78af',
  'doctrine/common' => '3.2.0@6d970a11479275300b5144e9373ce5feacfa9b91',
  'doctrine/data-fixtures' => '1.5.1@f18adf13f6c81c67a88360dca359ad474523f8e3',
  'doctrine/dbal' => '3.2.0@5d54f63541d7bed1156cb5c9b79274ced61890e4',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/doctrine-bundle' => '2.5.2@5b77477ba2981a00b423d1bb17084b87eb57a4a5',
  'doctrine/doctrine-fixtures-bundle' => '3.4.1@31ba202bebce0b66fe830f49f96228dcdc1503e7',
  'doctrine/doctrine-migrations-bundle' => '3.2.1@c1b10bc1466e08bba82640e49c7bbcce0c9853c2',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.4@8b7ff3e4b7de6b2c84da85637b59fd2880ecaa89',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.3.2@b6e43bb5815f4dbb88c79a0fef1c669dfba52d58',
  'doctrine/orm' => '2.10.3@7b242753466508e1dd10f67c1baee95785f845c1',
  'doctrine/persistence' => '2.2.3@5e7bdbbfe9811c06e1f745d1c166647d5c47d6ee',
  'doctrine/sql-formatter' => '1.1.2@20c39c2de286a9d3262cc8ed282a4ae60e265894',
  'egulias/email-validator' => '3.1.2@ee0db30118f661fb166bcffbf5d82032df484697',
  'friendsofphp/proxy-manager-lts' => 'v1.0.5@006aa5d32f887a4db4353b13b5b5095613e0611f',
  'fzaninotto/faker' => 'v1.5.0@d0190b156bcca848d401fb80f31f504f37141c8d',
  'imagine/imagine' => '1.2.4@d2e18be6e930ca169e4f921ef73ebfc061bf55d8',
  'jms/metadata' => '2.6.1@c3a3214354b5a765a19875f7b7c5ebcd94e462e5',
  'knplabs/knp-components' => 'v3.3.0@03e8ad16261dd8a70a8c6e01f18eb3852437546e',
  'knplabs/knp-paginator-bundle' => 'v5.8.0@216b9d5708001788321916c5b7632da9fb9ef6ca',
  'laminas/laminas-code' => '4.5.0@c99ef8e5629c33bfaa3a8f1df773e916af564cd6',
  'liip/imagine-bundle' => '2.7.3@25098c758380933ba4f2d4ffc68614c4c1c90a72',
  'monolog/monolog' => '2.3.5@fd4380d6fc37626e2f799f29d91195040137eba9',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.3.0@622548b623e81ca6d78b721c5e029f4ce664f170',
  'phpdocumentor/type-resolver' => '1.5.1@a12f7e301eb7258bb68acd89d4aefa05c2906cae',
  'psr/cache' => '2.0.0@213f9dbc5b9bfbc4f8db86d2838dc968752ce13b',
  'psr/container' => '1.1.2@513e0666f7216c7459170d56df27dfcefe1689ea',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/link' => '1.1.1@846c25f58a1f02b93a00f2404e3626b6bf9b7807',
  'psr/log' => '2.0.0@ef29f6d262798707a9edd554e2b82517ef3a9376',
  'sensio/framework-extra-bundle' => 'v6.2.1@7fd1d54c1b27f094a68ae15a99b7fc815857255f',
  'symfony/apache-pack' => 'v1.0.1@3aa5818d73ad2551281fc58a75afd9ca82622e6c',
  'symfony/asset' => 'v5.3.11@547d3d91c759bae8e302630e68f6c4d415715bc3',
  'symfony/cache' => 'v5.3.12@fe05bcb21c1287401d96d066ada7ed881418c6a1',
  'symfony/cache-contracts' => 'v2.5.0@ac2e168102a2e06a2624f0379bde94cd5854ced2',
  'symfony/config' => 'v5.3.11@f080af00c441f1df40cf5c269707fdebe5740557',
  'symfony/console' => 'v5.3.11@3e7ab8f5905058984899b05a4648096f558bfeba',
  'symfony/dependency-injection' => 'v5.3.11@3793617321eb39b2e8e708f6fd61f875ec5f0ed6',
  'symfony/deprecation-contracts' => 'v2.5.0@6f981ee24cf69ee7ce9736146d1c57c2780598a8',
  'symfony/doctrine-bridge' => 'v5.3.11@9b220ebc6fb4d5f15a8b74887c059b4d57ba85f8',
  'symfony/dotenv' => 'v5.3.10@97ffd3846f8a782086e82c1b5fdefb3f3ad078db',
  'symfony/error-handler' => 'v5.3.11@eec73dd7218713f48a7996583a741b3bae58c8d3',
  'symfony/event-dispatcher' => 'v5.3.11@661a7a6e085394f8513945669e31f7c1338a7e69',
  'symfony/event-dispatcher-contracts' => 'v2.5.0@66bea3b09be61613cd3b4043a65a8ec48cfa6d2a',
  'symfony/expression-language' => 'v5.3.11@652b72882caddcbfa68754a31b7baf0e4a84cddd',
  'symfony/filesystem' => 'v5.3.4@343f4fe324383ca46792cae728a3b6e2f708fb32',
  'symfony/finder' => 'v5.3.7@a10000ada1e600d109a6c7632e9ac42e8bf2fb93',
  'symfony/flex' => 'v1.17.6@7a79135e1dc66b30042b4d968ecba0908f9374bc',
  'symfony/form' => 'v5.3.11@a5dbc8238db2b56057b293920c4b67879b50566b',
  'symfony/framework-bundle' => 'v5.3.11@f463eb8252f675a51330b1a28c982739cb9005f2',
  'symfony/http-client' => 'v5.3.11@3f55da60fc3c3d6e6a4144ee65a37d23a637107e',
  'symfony/http-client-contracts' => 'v2.5.0@ec82e57b5b714dbb69300d348bd840b345e24166',
  'symfony/http-foundation' => 'v5.3.11@d1e7059ebeb0b8f9fe5eb5b26eacd2e3c1f371cc',
  'symfony/http-kernel' => 'v5.3.12@f53025cd1d91b1af85d6d9e17eefa98e31ee953b',
  'symfony/intl' => 'v5.3.11@6025b5307045b2fdcd844c1dfa2b02873b1d856c',
  'symfony/mailer' => 'v5.3.9@c1f83da2296741110be35dd779f2a9e412cec466',
  'symfony/mime' => 'v5.3.11@dffc0684f10526db12c52fcd6238c64695426d61',
  'symfony/monolog-bridge' => 'v5.3.7@4ace41087254f099b6743333155071438bfb12c3',
  'symfony/monolog-bundle' => 'v3.7.1@fde12fc628162787a4e53877abadc30047fd868b',
  'symfony/notifier' => 'v5.3.11@9cf5ae2ae6838f8866f63826721671e7066275a4',
  'symfony/options-resolver' => 'v5.3.7@4b78e55b179003a42523a362cc0e8327f7a69b5e',
  'symfony/password-hasher' => 'v5.3.8@4bdaa0cca1fb3521bc1825160f3b5490c130bbda',
  'symfony/polyfill-intl-grapheme' => 'v1.23.1@16880ba9c5ebe3642d1995ab866db29270b36535',
  'symfony/polyfill-intl-icu' => 'v1.23.0@4a80a521d6176870b6445cfb469c130f9cae1dda',
  'symfony/polyfill-intl-idn' => 'v1.23.0@65bd267525e82759e7d8c4e8ceea44f398838e65',
  'symfony/polyfill-intl-normalizer' => 'v1.23.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.23.1@9174a3d80210dca8daa7f31fec659150bbeabfc6',
  'symfony/polyfill-php73' => 'v1.23.0@fba8933c384d6476ab14fb7b8526e5287ca7e010',
  'symfony/polyfill-php80' => 'v1.23.1@1100343ed1a92e3a38f9ae122fc0eb21602547be',
  'symfony/polyfill-php81' => 'v1.23.0@e66119f3de95efc359483f810c4c3e6436279436',
  'symfony/process' => 'v5.3.12@e498803a6e95ede78e9d5646ad32a2255c033a6a',
  'symfony/property-access' => 'v5.3.8@2fbab5f95ddb6b8e85f38a6a8a04a17c0acc4d66',
  'symfony/property-info' => 'v5.3.8@39de5bed8c036f76ec0457ec52908e45d5497947',
  'symfony/proxy-manager-bridge' => 'v5.3.11@c774a6a852fd702154414e76f8dcd4e96086c2a8',
  'symfony/routing' => 'v5.3.11@fcbc2b81d55984f04bb704c2269755fa5aaf5cca',
  'symfony/runtime' => 'v5.3.11@0345ba5dbfc06a878bc48a7ec18ebc144cc60800',
  'symfony/security-bundle' => 'v5.3.12@be52715f4a7fd490937e4f881dc00ff5c0dcfeb3',
  'symfony/security-core' => 'v5.3.11@48c8ed9f4789439427917f0023f86895d64b73a7',
  'symfony/security-csrf' => 'v5.3.4@94b533195cf7fb21f3fae8ce349861c6401d969e',
  'symfony/security-guard' => 'v5.3.7@25f8d2a206505514a0ff14b16c4fb4e17a10cf18',
  'symfony/security-http' => 'v5.3.11@c25090783bd4209a42f9c43a235280fd23315a62',
  'symfony/serializer' => 'v5.3.12@bf570839e289e0bdde69c9fa867d3a42f5e8fde1',
  'symfony/service-contracts' => 'v2.5.0@1ab11b933cd6bc5464b08e81e2c5b07dec58b0fc',
  'symfony/stopwatch' => 'v5.3.4@b24c6a92c6db316fee69e38c80591e080e41536c',
  'symfony/string' => 'v5.3.10@d70c35bb20bbca71fc4ab7921e3c6bda1a82a60c',
  'symfony/translation' => 'v5.3.11@17a965c8f3b1b348cf15d903ac53942984561f8a',
  'symfony/translation-contracts' => 'v2.5.0@d28150f0f44ce854e942b671fc2620a98aae1b1e',
  'symfony/twig-bridge' => 'v5.3.11@90e2f25b2a5b1a6d626c26cafcb00da9583fcd66',
  'symfony/twig-bundle' => 'v5.3.10@70157db4357eadf33f38e4e7efa5da4b294e17de',
  'symfony/validator' => 'v5.3.12@379ca8939ebcab78d835e188673396a9f8d6eee8',
  'symfony/var-dumper' => 'v5.3.11@a029b3a11b757f9cc8693040339153b4745a913f',
  'symfony/var-exporter' => 'v5.3.11@b16fcf355b810bcbccc2c6eac1d016725dbf9002',
  'symfony/web-link' => 'v5.3.4@0075c9949c30a61d9b9e7483686d72d261480ef1',
  'symfony/yaml' => 'v5.3.11@226638aa877bc4104e619a15f27d8141cd6b4e4a',
  'twbs/bootstrap' => 'v5.1.3@1a6fdfae6be09b09eaced8f0e442ca6f7680a61e',
  'twig/extra-bundle' => 'v3.3.4@1fe52d84aa22b7891c7717ef904b1551c8d70100',
  'twig/twig' => 'v3.3.4@65cb6f0b956485e1664f13d023c55298a4bb59ca',
  'vich/uploader-bundle' => '1.18.0@c5250c8d6a072960250ce5130e68a5693b3b48dd',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'myclabs/deep-copy' => '1.10.2@776f831124e9c62e1a2c601ecc52e776d8bb7220',
  'nikic/php-parser' => 'v4.13.2@210577fe3cf7badcc5814d99455df46564f3c077',
  'phar-io/manifest' => '2.0.3@97803eca37d319dfa7826cc2437fc020857acb53',
  'phar-io/version' => '3.1.0@bae7c545bef187884426f042434e561ab1ddb182',
  'phpspec/prophecy' => 'v1.15.0@bbcd7380b0ebf3961ee21409db7b38bc31d69a13',
  'phpunit/php-code-coverage' => '9.2.10@d5850aaf931743067f4bfc1ae4cbd06468400687',
  'phpunit/php-file-iterator' => '3.0.6@cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.4@5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
  'phpunit/php-timer' => '5.0.3@5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
  'phpunit/phpunit' => '9.5.10@c814a05837f2edb0d1471d6e3f4ab3501ca3899a',
  'sebastian/cli-parser' => '1.0.1@442e7c7e687e42adc03470c7b668bc4b2402c0b2',
  'sebastian/code-unit' => '1.0.8@1fc9f64c0927627ef78ba436c9b17d967e68e120',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.6@55f4261989e546dc112258c7a75935a81a7ce382',
  'sebastian/complexity' => '2.0.2@739b35e53379900cc9ac327b2147867b8b6efd88',
  'sebastian/diff' => '4.0.4@3461e3fccc7cfdfc2720be910d3bd73c69be590d',
  'sebastian/environment' => '5.1.3@388b6ced16caa751030f6a69e588299fa09200ac',
  'sebastian/exporter' => '4.0.4@65e8b7db476c5dd267e65eea9cab77584d3cfff9',
  'sebastian/global-state' => '5.0.3@23bd5951f7ff26f12d4e3242864df3e08dec4e49',
  'sebastian/lines-of-code' => '1.0.3@c1c2e997aa3146983ed888ad08b15470a2e22ecc',
  'sebastian/object-enumerator' => '4.0.4@5c9eeac41b290a3712d88851518825ad78f45c71',
  'sebastian/object-reflector' => '2.0.4@b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
  'sebastian/recursion-context' => '4.0.4@cd9d8cf3c5804de4341c283ed787f099f5506172',
  'sebastian/resource-operations' => '3.0.3@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '2.3.4@b8cd8a1c753c90bc1a0f5372170e3e489136f914',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'symfony/browser-kit' => 'v5.3.4@c1e3f64fcc631c96e2c5843b666db66679ced11c',
  'symfony/css-selector' => 'v5.3.4@7fb120adc7f600a59027775b224c13a33530dd90',
  'symfony/debug-bundle' => 'v5.3.4@356c7d2acb6bc93b1c091255068ccfb9ad55a3e0',
  'symfony/dom-crawler' => 'v5.3.7@c7eef3a60ccfdd8eafe07f81652e769ac9c7146c',
  'symfony/maker-bundle' => 'v1.36.4@716eee9c8b10b33e682df1b7d80b9061887e9691',
  'symfony/phpunit-bridge' => 'v5.4.0@59bbd98ee7aa15b9f75c0fc088c7a5cbf7aa9b5c',
  'symfony/web-profiler-bundle' => 'v5.3.8@9ba1e05fdc7a46979047ba6c8949bd35e3a386a5',
  'theseer/tokenizer' => '1.2.1@34a41e998c2183e22995f158c581e7b5e755ab9e',
  'symfony/polyfill-ctype' => '*@50138953878fb6006318444179cf8bb2a78e3382',
  'symfony/polyfill-iconv' => '*@50138953878fb6006318444179cf8bb2a78e3382',
  'symfony/polyfill-php72' => '*@50138953878fb6006318444179cf8bb2a78e3382',
  '__root__' => 'dev-main@50138953878fb6006318444179cf8bb2a78e3382',
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
