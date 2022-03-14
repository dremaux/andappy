<?php

namespace ContainerUJwOXXe;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8679f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercd1b3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdcc21 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        if ($this->valueHolder8679f === $returnValue = $this->valueHolder8679f->paginate($target, $page, $limit, $options)) {
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

        $instance->initializercd1b3 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder8679f) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder8679f = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, '__get', ['name' => $name], $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        if (isset(self::$publicPropertiesdcc21[$name])) {
            return $this->valueHolder8679f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8679f;

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

        $targetObject = $this->valueHolder8679f;
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
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8679f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8679f;
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
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, '__isset', array('name' => $name), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8679f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8679f;
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
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, '__unset', array('name' => $name), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8679f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8679f;
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
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, '__clone', array(), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        $this->valueHolder8679f = clone $this->valueHolder8679f;
    }

    public function __sleep()
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, '__sleep', array(), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return array('valueHolder8679f');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercd1b3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercd1b3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'initializeProxy', array(), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8679f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8679f;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
