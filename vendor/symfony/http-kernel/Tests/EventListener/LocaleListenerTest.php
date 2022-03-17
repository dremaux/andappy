<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\Tests\EventListener;

use PHPUnit\Framework\TestCase;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\Event\FinishRequestEvent;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\EventListener\LocaleListener;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Router;

class LocaleListenerTest extends TestCase
{
    private $requestStack;

    protected function setUp(): void
    {
        $this->requestStack = $this->createMock(RequestStack::class);
    }

    public function testIsAnEventSubscriber()
    {
        $this->assertInstanceOf(EventSubscriberInterface::class, new LocaleListener($this->requestStack));
    }

    public function testRegisteredEvent()
    {
        $this->assertEquals(
            [
                KernelEvents::REQUEST => [['setDefaultLocale', 100], ['onKernelRequest', 16]],
                KernelEvents::FINISH_REQUEST => [['onKernelFinishRequest', 0]],
            ],
            LocaleListener::getSubscribedEvents()
        );
    }

    public function testDefaultLocale()
    {
        $listener = new LocaleListener($this->requestStack, 'fr');
        $event = $this->getEvent($request = Request::create('/'));

        $listener->setDefaultLocale($event);
        $this->assertEquals('fr', $request->getLocale());
    }

    public function testLocaleFromRequestAttribute()
    {
        $request = Request::create('/');
        $request->cookies->set(session_name(), 'value');

        $request->attributes->set('_locale', 'es');
        $listener = new LocaleListener($this->requestStack, 'fr');
        $event = $this->getEvent($request);

        $listener->onKernelRequest($event);
        $this->assertEquals('es', $request->getLocale());
    }

    public function testLocaleSetForRoutingContext()
    {
        // the request context is updated
        $context = $this->createMock(RequestContext::class);
        $context->expects($this->once())->method('setParameter')->with('_locale', 'es');

        $router = $this->getMockBuilder(Router::class)->setMethods(['getContext'])->disableOriginalConstructor()->getMock();
        $router->expects($this->once())->method('getContext')->willReturn($context);

        $request = Request::create('/');

        $request->attributes->set('_locale', 'es');
        $listener = new LocaleListener($this->requestStack, 'fr', $router);
        $listener->onKernelRequest($this->getEvent($request));
    }

    public function testRouterResetWithParentRequestOnKernelFinishRequest()
    {
        // the request context is updated
        $context = $this->createMock(RequestContext::class);
        $context->expects($this->once())->method('setParameter')->with('_locale', 'es');

        $router = $this->getMockBuilder(Router::class)->setMethods(['getContext'])->disableOriginalConstructor()->getMock();
        $router->expects($this->once())->method('getContext')->willReturn($context);

        $parentRequest = Request::create('/');
        $parentRequest->setLocale('es');

        $this->requestStack->expects($this->once())->method('getParentRequest')->willReturn($parentRequest);

        $event = new FinishRequestEvent($this->createMock(HttpKernelInterface::class), new Request(), HttpKernelInterface::MAIN_REQUEST);

        $listener = new LocaleListener($this->requestStack, 'fr', $router);
        $listener->onKernelFinishRequest($event);
    }

    public function testRequestLocaleIsNotOverridden()
    {
        $request = Request::create('/');
        $request->setLocale('de');
        $listener = new LocaleListener($this->requestStack, 'fr');
        $event = $this->getEvent($request);

        $listener->onKernelRequest($event);
        $this->assertEquals('de', $request->getLocale());
    }

    private function getEvent(Request $request): RequestEvent
    {
        return new RequestEvent($this->createMock(HttpKernelInterface::class), $request, HttpKernelInterface::MAIN_REQUEST);
    }
}
