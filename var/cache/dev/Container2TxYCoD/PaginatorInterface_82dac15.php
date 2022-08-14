<?php

namespace Container2TxYCoD;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5ee06 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeraf05b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties266b9 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        if ($this->valueHolder5ee06 === $returnValue = $this->valueHolder5ee06->paginate($target, $page, $limit, $options)) {
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

        $instance->initializeraf05b = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder5ee06) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder5ee06 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, '__get', ['name' => $name], $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        if (isset(self::$publicProperties266b9[$name])) {
            return $this->valueHolder5ee06->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ee06;

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

        $targetObject = $this->valueHolder5ee06;
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
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ee06;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5ee06;
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
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, '__isset', array('name' => $name), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ee06;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5ee06;
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
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, '__unset', array('name' => $name), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ee06;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5ee06;
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
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, '__clone', array(), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        $this->valueHolder5ee06 = clone $this->valueHolder5ee06;
    }

    public function __sleep()
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, '__sleep', array(), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return array('valueHolder5ee06');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeraf05b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeraf05b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'initializeProxy', array(), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5ee06;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5ee06;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
