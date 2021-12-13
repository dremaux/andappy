<?php

namespace ContainerEXZyN0P;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder31a5f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer08e78 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa666b = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer08e78 && ($this->initializer08e78->__invoke($valueHolder31a5f, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer08e78) || 1) && $this->valueHolder31a5f = $valueHolder31a5f;

        if ($this->valueHolder31a5f === $returnValue = $this->valueHolder31a5f->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer08e78 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder31a5f) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder31a5f = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer08e78 && ($this->initializer08e78->__invoke($valueHolder31a5f, $this, '__get', ['name' => $name], $this->initializer08e78) || 1) && $this->valueHolder31a5f = $valueHolder31a5f;

        if (isset(self::$publicPropertiesa666b[$name])) {
            return $this->valueHolder31a5f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder31a5f;

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

        $targetObject = $this->valueHolder31a5f;
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
        $this->initializer08e78 && ($this->initializer08e78->__invoke($valueHolder31a5f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer08e78) || 1) && $this->valueHolder31a5f = $valueHolder31a5f;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder31a5f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder31a5f;
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
        $this->initializer08e78 && ($this->initializer08e78->__invoke($valueHolder31a5f, $this, '__isset', array('name' => $name), $this->initializer08e78) || 1) && $this->valueHolder31a5f = $valueHolder31a5f;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder31a5f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder31a5f;
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
        $this->initializer08e78 && ($this->initializer08e78->__invoke($valueHolder31a5f, $this, '__unset', array('name' => $name), $this->initializer08e78) || 1) && $this->valueHolder31a5f = $valueHolder31a5f;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder31a5f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder31a5f;
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
        $this->initializer08e78 && ($this->initializer08e78->__invoke($valueHolder31a5f, $this, '__clone', array(), $this->initializer08e78) || 1) && $this->valueHolder31a5f = $valueHolder31a5f;

        $this->valueHolder31a5f = clone $this->valueHolder31a5f;
    }

    public function __sleep()
    {
        $this->initializer08e78 && ($this->initializer08e78->__invoke($valueHolder31a5f, $this, '__sleep', array(), $this->initializer08e78) || 1) && $this->valueHolder31a5f = $valueHolder31a5f;

        return array('valueHolder31a5f');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer08e78 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer08e78;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer08e78 && ($this->initializer08e78->__invoke($valueHolder31a5f, $this, 'initializeProxy', array(), $this->initializer08e78) || 1) && $this->valueHolder31a5f = $valueHolder31a5f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder31a5f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder31a5f;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
