<?php

namespace ContainerUMX2eJN;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera016c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer69625 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb238b = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        if ($this->valueHoldera016c === $returnValue = $this->valueHoldera016c->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer69625 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHoldera016c) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHoldera016c = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, '__get', ['name' => $name], $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        if (isset(self::$publicPropertiesb238b[$name])) {
            return $this->valueHoldera016c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera016c;

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

        $targetObject = $this->valueHoldera016c;
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
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera016c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera016c;
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
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, '__isset', array('name' => $name), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera016c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera016c;
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
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, '__unset', array('name' => $name), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera016c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera016c;
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
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, '__clone', array(), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        $this->valueHoldera016c = clone $this->valueHoldera016c;
    }

    public function __sleep()
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, '__sleep', array(), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return array('valueHoldera016c');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer69625 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer69625;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'initializeProxy', array(), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera016c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera016c;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
