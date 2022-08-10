<?php

namespace Container5fLfsQ1;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere47c6 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercc4cf = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc54fc = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializercc4cf && ($this->initializercc4cf->__invoke($valueHoldere47c6, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializercc4cf) || 1) && $this->valueHoldere47c6 = $valueHoldere47c6;

        if ($this->valueHoldere47c6 === $returnValue = $this->valueHoldere47c6->paginate($target, $page, $limit, $options)) {
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

        $instance->initializercc4cf = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHoldere47c6) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHoldere47c6 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializercc4cf && ($this->initializercc4cf->__invoke($valueHoldere47c6, $this, '__get', ['name' => $name], $this->initializercc4cf) || 1) && $this->valueHoldere47c6 = $valueHoldere47c6;

        if (isset(self::$publicPropertiesc54fc[$name])) {
            return $this->valueHoldere47c6->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere47c6;

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

        $targetObject = $this->valueHoldere47c6;
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
        $this->initializercc4cf && ($this->initializercc4cf->__invoke($valueHoldere47c6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercc4cf) || 1) && $this->valueHoldere47c6 = $valueHoldere47c6;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere47c6;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere47c6;
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
        $this->initializercc4cf && ($this->initializercc4cf->__invoke($valueHoldere47c6, $this, '__isset', array('name' => $name), $this->initializercc4cf) || 1) && $this->valueHoldere47c6 = $valueHoldere47c6;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere47c6;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere47c6;
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
        $this->initializercc4cf && ($this->initializercc4cf->__invoke($valueHoldere47c6, $this, '__unset', array('name' => $name), $this->initializercc4cf) || 1) && $this->valueHoldere47c6 = $valueHoldere47c6;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere47c6;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere47c6;
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
        $this->initializercc4cf && ($this->initializercc4cf->__invoke($valueHoldere47c6, $this, '__clone', array(), $this->initializercc4cf) || 1) && $this->valueHoldere47c6 = $valueHoldere47c6;

        $this->valueHoldere47c6 = clone $this->valueHoldere47c6;
    }

    public function __sleep()
    {
        $this->initializercc4cf && ($this->initializercc4cf->__invoke($valueHoldere47c6, $this, '__sleep', array(), $this->initializercc4cf) || 1) && $this->valueHoldere47c6 = $valueHoldere47c6;

        return array('valueHoldere47c6');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercc4cf = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercc4cf;
    }

    public function initializeProxy() : bool
    {
        return $this->initializercc4cf && ($this->initializercc4cf->__invoke($valueHoldere47c6, $this, 'initializeProxy', array(), $this->initializercc4cf) || 1) && $this->valueHoldere47c6 = $valueHoldere47c6;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere47c6;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere47c6;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
