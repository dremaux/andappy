<?php

namespace ContainerDEUxb7B;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder587a0 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerdefe4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd6f97 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        if ($this->valueHolder587a0 === $returnValue = $this->valueHolder587a0->paginate($target, $page, $limit, $options)) {
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

        $instance->initializerdefe4 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder587a0) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder587a0 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, '__get', ['name' => $name], $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        if (isset(self::$publicPropertiesd6f97[$name])) {
            return $this->valueHolder587a0->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder587a0;

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

        $targetObject = $this->valueHolder587a0;
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
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder587a0;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder587a0;
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
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, '__isset', array('name' => $name), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder587a0;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder587a0;
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
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, '__unset', array('name' => $name), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder587a0;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder587a0;
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
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, '__clone', array(), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        $this->valueHolder587a0 = clone $this->valueHolder587a0;
    }

    public function __sleep()
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, '__sleep', array(), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return array('valueHolder587a0');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdefe4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdefe4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'initializeProxy', array(), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder587a0;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder587a0;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
