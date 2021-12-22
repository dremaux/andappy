<?php

namespace ContainerE1axBtx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb8a95 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc4d71 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesad575 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        if ($this->valueHolderb8a95 === $returnValue = $this->valueHolderb8a95->paginate($target, $page, $limit, $options)) {
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

        $instance->initializerc4d71 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderb8a95) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolderb8a95 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, '__get', ['name' => $name], $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        if (isset(self::$publicPropertiesad575[$name])) {
            return $this->valueHolderb8a95->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb8a95;

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

        $targetObject = $this->valueHolderb8a95;
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
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb8a95;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb8a95;
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
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, '__isset', array('name' => $name), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb8a95;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb8a95;
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
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, '__unset', array('name' => $name), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb8a95;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb8a95;
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
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, '__clone', array(), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        $this->valueHolderb8a95 = clone $this->valueHolderb8a95;
    }

    public function __sleep()
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, '__sleep', array(), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return array('valueHolderb8a95');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc4d71 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc4d71;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'initializeProxy', array(), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb8a95;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb8a95;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
