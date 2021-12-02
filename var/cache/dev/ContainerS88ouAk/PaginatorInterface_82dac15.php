<?php

namespace ContainerS88ouAk;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4b384 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere756b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties12355 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        if ($this->valueHolder4b384 === $returnValue = $this->valueHolder4b384->paginate($target, $page, $limit, $options)) {
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

        $instance->initializere756b = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder4b384) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder4b384 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, '__get', ['name' => $name], $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        if (isset(self::$publicProperties12355[$name])) {
            return $this->valueHolder4b384->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4b384;

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

        $targetObject = $this->valueHolder4b384;
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
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4b384;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4b384;
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
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, '__isset', array('name' => $name), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4b384;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4b384;
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
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, '__unset', array('name' => $name), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4b384;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4b384;
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
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, '__clone', array(), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        $this->valueHolder4b384 = clone $this->valueHolder4b384;
    }

    public function __sleep()
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, '__sleep', array(), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return array('valueHolder4b384');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere756b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere756b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'initializeProxy', array(), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4b384;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4b384;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
