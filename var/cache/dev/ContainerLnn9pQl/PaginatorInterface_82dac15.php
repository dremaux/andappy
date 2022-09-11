<?php

namespace ContainerLnn9pQl;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolderda2ed = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercf43d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2e5c3 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        if ($this->valueHolderda2ed === $returnValue = $this->valueHolderda2ed->paginate($target, $page, $limit, $options)) {
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

        $instance->initializercf43d = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderda2ed) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolderda2ed = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, '__get', ['name' => $name], $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        if (isset(self::$publicProperties2e5c3[$name])) {
            return $this->valueHolderda2ed->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderda2ed;

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

        $targetObject = $this->valueHolderda2ed;
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
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderda2ed;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderda2ed;
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
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, '__isset', array('name' => $name), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderda2ed;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderda2ed;
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
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, '__unset', array('name' => $name), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderda2ed;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderda2ed;
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
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, '__clone', array(), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        $this->valueHolderda2ed = clone $this->valueHolderda2ed;
    }

    public function __sleep()
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, '__sleep', array(), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return array('valueHolderda2ed');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercf43d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercf43d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'initializeProxy', array(), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderda2ed;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderda2ed;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
