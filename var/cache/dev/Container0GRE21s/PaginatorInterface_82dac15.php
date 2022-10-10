<?php

namespace Container0GRE21s;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9ae19 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbe6c5 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties169fc = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        if ($this->valueHolder9ae19 === $returnValue = $this->valueHolder9ae19->paginate($target, $page, $limit, $options)) {
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

        $instance->initializerbe6c5 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder9ae19) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder9ae19 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, '__get', ['name' => $name], $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        if (isset(self::$publicProperties169fc[$name])) {
            return $this->valueHolder9ae19->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ae19;

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

        $targetObject = $this->valueHolder9ae19;
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
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ae19;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9ae19;
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
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, '__isset', array('name' => $name), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ae19;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9ae19;
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
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, '__unset', array('name' => $name), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ae19;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9ae19;
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
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, '__clone', array(), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        $this->valueHolder9ae19 = clone $this->valueHolder9ae19;
    }

    public function __sleep()
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, '__sleep', array(), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return array('valueHolder9ae19');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbe6c5 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbe6c5;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'initializeProxy', array(), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9ae19;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9ae19;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
