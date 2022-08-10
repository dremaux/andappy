<?php

namespace ContainerGSYLalI;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0f838 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0ee9a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa99e2 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer0ee9a && ($this->initializer0ee9a->__invoke($valueHolder0f838, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer0ee9a) || 1) && $this->valueHolder0f838 = $valueHolder0f838;

        if ($this->valueHolder0f838 === $returnValue = $this->valueHolder0f838->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer0ee9a = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder0f838) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder0f838 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer0ee9a && ($this->initializer0ee9a->__invoke($valueHolder0f838, $this, '__get', ['name' => $name], $this->initializer0ee9a) || 1) && $this->valueHolder0f838 = $valueHolder0f838;

        if (isset(self::$publicPropertiesa99e2[$name])) {
            return $this->valueHolder0f838->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0f838;

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

        $targetObject = $this->valueHolder0f838;
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
        $this->initializer0ee9a && ($this->initializer0ee9a->__invoke($valueHolder0f838, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0ee9a) || 1) && $this->valueHolder0f838 = $valueHolder0f838;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0f838;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0f838;
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
        $this->initializer0ee9a && ($this->initializer0ee9a->__invoke($valueHolder0f838, $this, '__isset', array('name' => $name), $this->initializer0ee9a) || 1) && $this->valueHolder0f838 = $valueHolder0f838;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0f838;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0f838;
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
        $this->initializer0ee9a && ($this->initializer0ee9a->__invoke($valueHolder0f838, $this, '__unset', array('name' => $name), $this->initializer0ee9a) || 1) && $this->valueHolder0f838 = $valueHolder0f838;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0f838;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0f838;
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
        $this->initializer0ee9a && ($this->initializer0ee9a->__invoke($valueHolder0f838, $this, '__clone', array(), $this->initializer0ee9a) || 1) && $this->valueHolder0f838 = $valueHolder0f838;

        $this->valueHolder0f838 = clone $this->valueHolder0f838;
    }

    public function __sleep()
    {
        $this->initializer0ee9a && ($this->initializer0ee9a->__invoke($valueHolder0f838, $this, '__sleep', array(), $this->initializer0ee9a) || 1) && $this->valueHolder0f838 = $valueHolder0f838;

        return array('valueHolder0f838');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0ee9a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0ee9a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0ee9a && ($this->initializer0ee9a->__invoke($valueHolder0f838, $this, 'initializeProxy', array(), $this->initializer0ee9a) || 1) && $this->valueHolder0f838 = $valueHolder0f838;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0f838;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0f838;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
