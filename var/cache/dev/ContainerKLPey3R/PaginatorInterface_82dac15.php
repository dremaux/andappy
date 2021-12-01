<?php

namespace ContainerKLPey3R;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc1167 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf2ddb = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7ab2e = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        if ($this->valueHolderc1167 === $returnValue = $this->valueHolderc1167->paginate($target, $page, $limit, $options)) {
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

        $instance->initializerf2ddb = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderc1167) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolderc1167 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, '__get', ['name' => $name], $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        if (isset(self::$publicProperties7ab2e[$name])) {
            return $this->valueHolderc1167->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc1167;

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

        $targetObject = $this->valueHolderc1167;
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
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc1167;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc1167;
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
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, '__isset', array('name' => $name), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc1167;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc1167;
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
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, '__unset', array('name' => $name), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc1167;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc1167;
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
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, '__clone', array(), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        $this->valueHolderc1167 = clone $this->valueHolderc1167;
    }

    public function __sleep()
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, '__sleep', array(), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return array('valueHolderc1167');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf2ddb = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf2ddb;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'initializeProxy', array(), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc1167;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc1167;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
