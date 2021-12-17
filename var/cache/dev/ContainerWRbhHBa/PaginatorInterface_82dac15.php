<?php

namespace ContainerWRbhHBa;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfd197 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera8343 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdf579 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        if ($this->valueHolderfd197 === $returnValue = $this->valueHolderfd197->paginate($target, $page, $limit, $options)) {
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

        $instance->initializera8343 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderfd197) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolderfd197 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, '__get', ['name' => $name], $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        if (isset(self::$publicPropertiesdf579[$name])) {
            return $this->valueHolderfd197->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd197;

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

        $targetObject = $this->valueHolderfd197;
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
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd197;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfd197;
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
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, '__isset', array('name' => $name), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd197;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfd197;
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
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, '__unset', array('name' => $name), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd197;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfd197;
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
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, '__clone', array(), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        $this->valueHolderfd197 = clone $this->valueHolderfd197;
    }

    public function __sleep()
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, '__sleep', array(), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return array('valueHolderfd197');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera8343 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera8343;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'initializeProxy', array(), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfd197;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfd197;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
