<?php

namespace ContainerV0m7Q38;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera7f3b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd865d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties40151 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        if ($this->valueHoldera7f3b === $returnValue = $this->valueHoldera7f3b->paginate($target, $page, $limit, $options)) {
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

        $instance->initializerd865d = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHoldera7f3b) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHoldera7f3b = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, '__get', ['name' => $name], $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        if (isset(self::$publicProperties40151[$name])) {
            return $this->valueHoldera7f3b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera7f3b;

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

        $targetObject = $this->valueHoldera7f3b;
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
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera7f3b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera7f3b;
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
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, '__isset', array('name' => $name), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera7f3b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera7f3b;
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
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, '__unset', array('name' => $name), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera7f3b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera7f3b;
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
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, '__clone', array(), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        $this->valueHoldera7f3b = clone $this->valueHoldera7f3b;
    }

    public function __sleep()
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, '__sleep', array(), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return array('valueHoldera7f3b');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd865d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd865d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'initializeProxy', array(), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera7f3b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera7f3b;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
