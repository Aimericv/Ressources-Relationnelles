<?php

namespace Container75T4bG8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwigService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Cache'.\DIRECTORY_SEPARATOR.'CacheInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Cache'.\DIRECTORY_SEPARATOR.'FilesystemCache.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'ExtensionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'AbstractExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'CoreExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'EscaperExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'OptimizerExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'StagingExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ExtensionSet.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Template.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'TemplateWrapper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Environment.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'LoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'FilesystemLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'CsrfExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'ProfilerExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'ProfilerExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Profiler'.\DIRECTORY_SEPARATOR.'Profile.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'TranslationExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'AssetExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset'.\DIRECTORY_SEPARATOR.'Packages.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset'.\DIRECTORY_SEPARATOR.'PackageInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset'.\DIRECTORY_SEPARATOR.'Package.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset'.\DIRECTORY_SEPARATOR.'PathPackage.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset'.\DIRECTORY_SEPARATOR.'VersionStrategy'.\DIRECTORY_SEPARATOR.'VersionStrategyInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset'.\DIRECTORY_SEPARATOR.'VersionStrategy'.\DIRECTORY_SEPARATOR.'EmptyVersionStrategy.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset'.\DIRECTORY_SEPARATOR.'Context'.\DIRECTORY_SEPARATOR.'ContextInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset'.\DIRECTORY_SEPARATOR.'Context'.\DIRECTORY_SEPARATOR.'RequestStackContext.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'CodeExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'RoutingExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'YamlExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'StopwatchExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'HttpKernelExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'HttpFoundationExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'UrlHelper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'FormExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'LogoutUrlExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'SecurityExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Impersonate'.\DIRECTORY_SEPARATOR.'ImpersonateUrlGenerator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'DoctrineExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'DebugExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'GlobalsInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'EasyAdminTwigExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'AppVariable.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'RuntimeLoader'.\DIRECTORY_SEPARATOR.'RuntimeLoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'RuntimeLoader'.\DIRECTORY_SEPARATOR.'ContainerRuntimeLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bundle'.\DIRECTORY_SEPARATOR.'DependencyInjection'.\DIRECTORY_SEPARATOR.'Configurator'.\DIRECTORY_SEPARATOR.'EnvironmentConfigurator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Debug'.\DIRECTORY_SEPARATOR.'FileLinkFormatter.php';

        $a = new \Twig\Loader\FilesystemLoader([], \dirname(__DIR__, 4));
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle/Resources/views'), 'Doctrine');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle/Resources/views'), '!Doctrine');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-migrations-bundle/Resources/views'), 'DoctrineMigrations');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-migrations-bundle/Resources/views'), '!DoctrineMigrations');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle/Resources/views'), 'Security');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle/Resources/views'), '!Security');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/views'), 'EasyAdmin');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/views'), '!EasyAdmin');
        $a->addPath((\dirname(__DIR__, 4).'/templates'));
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge/Resources/views/Email'), 'email');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge/Resources/views/Email'), '!email');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge/Resources/views/Form'));

        $container->privates['twig'] = $instance = new \Twig\Environment($a, ['autoescape' => 'name', 'cache' => ($container->targetDir.''.'/twig'), 'charset' => 'UTF-8', 'debug' => true, 'strict_variables' => true]);

        $b = ($container->privates['debug.stopwatch'] ??= new \Symfony\Component\Stopwatch\Stopwatch(true));
        $c = ($container->services['translator'] ?? $container->load('getTranslatorService'));
        $d = ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack());
        $e = ($container->privates['router.request_context'] ?? self::getRouter_RequestContextService($container));
        $f = ($container->services['router'] ?? self::getRouterService($container));
        $g = ($container->privates['security.token_storage'] ?? self::getSecurity_TokenStorageService($container));
        $h = new \Symfony\Bridge\Twig\AppVariable();
        $h->setEnvironment('dev');
        $h->setDebug(true);
        $h->setTokenStorage($g);
        if ($container->has('request_stack')) {
            $h->setRequestStack($d);
        }
        $h->setLocaleSwitcher(($container->privates['translation.locale_switcher'] ?? $container->load('getTranslation_LocaleSwitcherService')));

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CsrfExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(new \Twig\Profiler\Profile(), $b));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($c));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), new \Symfony\Component\Asset\Context\RequestStackContext($d, $e->getBaseUrl(), $e->isSecure())), new RewindableGenerator(function () use ($container) {
            yield 'easyadmin.assets.package' => ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Asset\\AssetPackage'] ?? $container->load('getAssetPackageService'));
        }, 1))));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(($container->privates['debug.file_link_formatter'] ??= new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter($container->getEnv('default::SYMFONY_IDE'))), \dirname(__DIR__, 4), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($f));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($b, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension(new \Symfony\Component\HttpFoundation\UrlHelper($d, $f)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension($c));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($container->privates['security.logout_url_generator'] ?? self::getSecurity_LogoutUrlGeneratorService($container))));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(($container->privates['security.authorization_checker'] ?? self::getSecurity_AuthorizationCheckerService($container)), new \Symfony\Component\Security\Http\Impersonate\ImpersonateUrlGenerator($d, ($container->privates['security.firewall.map'] ?? self::getSecurity_Firewall_MapService($container)), $g)));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Twig\Extension\DebugExtension());
        $instance->addExtension(new \EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator' => [false, 'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator', 'getAdminUrlGeneratorService', false],
        ], [
            'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator' => '?',
        ]), ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? self::getAdminContextProviderService($container)), ($container->privates['security.csrf.token_manager'] ?? self::getSecurity_Csrf_TokenManagerService($container)), NULL));
        $instance->addGlobal('app', $h);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => ['privates', 'twig.runtime.security_csrf', 'getTwig_Runtime_SecurityCsrfService', true],
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService', true],
            'Symfony\\Component\\Form\\FormRenderer' => ['privates', 'twig.form.renderer', 'getTwig_Form_RendererService', true],
        ], [
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => '?',
            'Symfony\\Component\\Form\\FormRenderer' => '?',
        ])));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }
}
