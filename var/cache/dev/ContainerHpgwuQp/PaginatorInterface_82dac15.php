<?php

namespace ContainerHpgwuQp;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6b021 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer49fe4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb238f = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        if ($this->valueHolder6b021 === $returnValue = $this->valueHolder6b021->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer49fe4 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder6b021) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder6b021 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, '__get', ['name' => $name], $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        if (isset(self::$publicPropertiesb238f[$name])) {
            return $this->valueHolder6b021->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6b021;

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

        $targetObject = $this->valueHolder6b021;
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
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6b021;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6b021;
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
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, '__isset', array('name' => $name), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6b021;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6b021;
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
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, '__unset', array('name' => $name), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6b021;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6b021;
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
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, '__clone', array(), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        $this->valueHolder6b021 = clone $this->valueHolder6b021;
    }

    public function __sleep()
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, '__sleep', array(), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return array('valueHolder6b021');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer49fe4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer49fe4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'initializeProxy', array(), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6b021;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6b021;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
