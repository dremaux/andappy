<?php

namespace ContainerTWx3xM3;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder39ae4 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf062d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8a98e = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        if ($this->valueHolder39ae4 === $returnValue = $this->valueHolder39ae4->paginate($target, $page, $limit, $options)) {
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

        $instance->initializerf062d = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder39ae4) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder39ae4 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, '__get', ['name' => $name], $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        if (isset(self::$publicProperties8a98e[$name])) {
            return $this->valueHolder39ae4->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder39ae4;

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

        $targetObject = $this->valueHolder39ae4;
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
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder39ae4;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder39ae4;
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
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, '__isset', array('name' => $name), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder39ae4;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder39ae4;
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
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, '__unset', array('name' => $name), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder39ae4;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder39ae4;
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
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, '__clone', array(), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        $this->valueHolder39ae4 = clone $this->valueHolder39ae4;
    }

    public function __sleep()
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, '__sleep', array(), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return array('valueHolder39ae4');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf062d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf062d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'initializeProxy', array(), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder39ae4;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder39ae4;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
