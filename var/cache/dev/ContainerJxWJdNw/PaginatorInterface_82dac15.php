<?php

namespace ContainerJxWJdNw;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4719a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeraae2c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese12f9 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        if ($this->valueHolder4719a === $returnValue = $this->valueHolder4719a->paginate($target, $page, $limit, $options)) {
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

        $instance->initializeraae2c = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder4719a) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder4719a = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, '__get', ['name' => $name], $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        if (isset(self::$publicPropertiese12f9[$name])) {
            return $this->valueHolder4719a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4719a;

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

        $targetObject = $this->valueHolder4719a;
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
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4719a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4719a;
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
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, '__isset', array('name' => $name), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4719a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4719a;
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
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, '__unset', array('name' => $name), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4719a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4719a;
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
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, '__clone', array(), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        $this->valueHolder4719a = clone $this->valueHolder4719a;
    }

    public function __sleep()
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, '__sleep', array(), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return array('valueHolder4719a');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeraae2c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeraae2c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'initializeProxy', array(), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4719a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4719a;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
