<?php

namespace ContainerRnb5HuC;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd1804 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer42a24 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd4639 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        if ($this->valueHolderd1804 === $returnValue = $this->valueHolderd1804->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer42a24 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderd1804) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolderd1804 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, '__get', ['name' => $name], $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        if (isset(self::$publicPropertiesd4639[$name])) {
            return $this->valueHolderd1804->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd1804;

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

        $targetObject = $this->valueHolderd1804;
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
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd1804;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd1804;
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
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, '__isset', array('name' => $name), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd1804;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd1804;
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
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, '__unset', array('name' => $name), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd1804;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd1804;
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
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, '__clone', array(), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        $this->valueHolderd1804 = clone $this->valueHolderd1804;
    }

    public function __sleep()
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, '__sleep', array(), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return array('valueHolderd1804');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer42a24 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer42a24;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'initializeProxy', array(), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd1804;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd1804;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
