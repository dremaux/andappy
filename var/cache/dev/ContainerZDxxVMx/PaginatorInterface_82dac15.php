<?php

namespace ContainerZDxxVMx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolderbc618 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerccf8d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1d1bc = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        if ($this->valueHolderbc618 === $returnValue = $this->valueHolderbc618->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        $instance->initializerccf8d = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderbc618) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolderbc618 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, '__get', ['name' => $name], $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        if (isset(self::$publicProperties1d1bc[$name])) {
            return $this->valueHolderbc618->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc618;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbc618;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc618;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbc618;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, '__isset', array('name' => $name), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc618;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderbc618;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, '__unset', array('name' => $name), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc618;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderbc618;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, '__clone', array(), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        $this->valueHolderbc618 = clone $this->valueHolderbc618;
    }

    public function __sleep()
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, '__sleep', array(), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return array('valueHolderbc618');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerccf8d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerccf8d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'initializeProxy', array(), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbc618;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbc618;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
