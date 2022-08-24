<?php

namespace ContainerWRiJd8F;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3231a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer743ff = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiescf0dc = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        if ($this->valueHolder3231a === $returnValue = $this->valueHolder3231a->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer743ff = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder3231a) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder3231a = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, '__get', ['name' => $name], $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        if (isset(self::$publicPropertiescf0dc[$name])) {
            return $this->valueHolder3231a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3231a;

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

        $targetObject = $this->valueHolder3231a;
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
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3231a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3231a;
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
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, '__isset', array('name' => $name), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3231a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3231a;
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
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, '__unset', array('name' => $name), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3231a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3231a;
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
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, '__clone', array(), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        $this->valueHolder3231a = clone $this->valueHolder3231a;
    }

    public function __sleep()
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, '__sleep', array(), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return array('valueHolder3231a');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer743ff = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer743ff;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'initializeProxy', array(), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3231a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3231a;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
