<?php

namespace ContainerFoqyMdy;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7d081 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer37d94 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1b589 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        if ($this->valueHolder7d081 === $returnValue = $this->valueHolder7d081->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer37d94 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder7d081) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder7d081 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, '__get', ['name' => $name], $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        if (isset(self::$publicProperties1b589[$name])) {
            return $this->valueHolder7d081->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7d081;

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

        $targetObject = $this->valueHolder7d081;
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
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7d081;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7d081;
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
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, '__isset', array('name' => $name), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7d081;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7d081;
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
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, '__unset', array('name' => $name), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7d081;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7d081;
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
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, '__clone', array(), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        $this->valueHolder7d081 = clone $this->valueHolder7d081;
    }

    public function __sleep()
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, '__sleep', array(), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return array('valueHolder7d081');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer37d94 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer37d94;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'initializeProxy', array(), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7d081;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7d081;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
