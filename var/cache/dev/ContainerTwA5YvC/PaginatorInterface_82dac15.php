<?php

namespace ContainerTwA5YvC;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera4eee = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2df84 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2655e = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        if ($this->valueHoldera4eee === $returnValue = $this->valueHoldera4eee->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer2df84 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHoldera4eee) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHoldera4eee = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, '__get', ['name' => $name], $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        if (isset(self::$publicProperties2655e[$name])) {
            return $this->valueHoldera4eee->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera4eee;

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

        $targetObject = $this->valueHoldera4eee;
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
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera4eee;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera4eee;
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
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, '__isset', array('name' => $name), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera4eee;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera4eee;
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
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, '__unset', array('name' => $name), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera4eee;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera4eee;
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
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, '__clone', array(), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        $this->valueHoldera4eee = clone $this->valueHoldera4eee;
    }

    public function __sleep()
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, '__sleep', array(), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return array('valueHoldera4eee');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2df84 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2df84;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'initializeProxy', array(), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera4eee;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera4eee;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
