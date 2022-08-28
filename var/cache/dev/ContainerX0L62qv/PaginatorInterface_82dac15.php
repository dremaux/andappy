<?php

namespace ContainerX0L62qv;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfd7a2 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer682ce = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties694b3 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer682ce && ($this->initializer682ce->__invoke($valueHolderfd7a2, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer682ce) || 1) && $this->valueHolderfd7a2 = $valueHolderfd7a2;

        if ($this->valueHolderfd7a2 === $returnValue = $this->valueHolderfd7a2->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer682ce = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderfd7a2) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolderfd7a2 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer682ce && ($this->initializer682ce->__invoke($valueHolderfd7a2, $this, '__get', ['name' => $name], $this->initializer682ce) || 1) && $this->valueHolderfd7a2 = $valueHolderfd7a2;

        if (isset(self::$publicProperties694b3[$name])) {
            return $this->valueHolderfd7a2->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd7a2;

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

        $targetObject = $this->valueHolderfd7a2;
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
        $this->initializer682ce && ($this->initializer682ce->__invoke($valueHolderfd7a2, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer682ce) || 1) && $this->valueHolderfd7a2 = $valueHolderfd7a2;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd7a2;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfd7a2;
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
        $this->initializer682ce && ($this->initializer682ce->__invoke($valueHolderfd7a2, $this, '__isset', array('name' => $name), $this->initializer682ce) || 1) && $this->valueHolderfd7a2 = $valueHolderfd7a2;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd7a2;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfd7a2;
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
        $this->initializer682ce && ($this->initializer682ce->__invoke($valueHolderfd7a2, $this, '__unset', array('name' => $name), $this->initializer682ce) || 1) && $this->valueHolderfd7a2 = $valueHolderfd7a2;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd7a2;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfd7a2;
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
        $this->initializer682ce && ($this->initializer682ce->__invoke($valueHolderfd7a2, $this, '__clone', array(), $this->initializer682ce) || 1) && $this->valueHolderfd7a2 = $valueHolderfd7a2;

        $this->valueHolderfd7a2 = clone $this->valueHolderfd7a2;
    }

    public function __sleep()
    {
        $this->initializer682ce && ($this->initializer682ce->__invoke($valueHolderfd7a2, $this, '__sleep', array(), $this->initializer682ce) || 1) && $this->valueHolderfd7a2 = $valueHolderfd7a2;

        return array('valueHolderfd7a2');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer682ce = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer682ce;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer682ce && ($this->initializer682ce->__invoke($valueHolderfd7a2, $this, 'initializeProxy', array(), $this->initializer682ce) || 1) && $this->valueHolderfd7a2 = $valueHolderfd7a2;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfd7a2;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfd7a2;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
