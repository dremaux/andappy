<?php

namespace ContainerZspiMXN;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{

    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5a7f1 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeref933 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd68d6 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializeref933 && ($this->initializeref933->__invoke($valueHolder5a7f1, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializeref933) || 1) && $this->valueHolder5a7f1 = $valueHolder5a7f1;

        if ($this->valueHolder5a7f1 === $returnValue = $this->valueHolder5a7f1->paginate($target, $page, $limit, $options)) {
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

        $instance->initializeref933 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder5a7f1) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder5a7f1 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializeref933 && ($this->initializeref933->__invoke($valueHolder5a7f1, $this, '__get', ['name' => $name], $this->initializeref933) || 1) && $this->valueHolder5a7f1 = $valueHolder5a7f1;

        if (isset(self::$publicPropertiesd68d6[$name])) {
            return $this->valueHolder5a7f1->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a7f1;

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

        $targetObject = $this->valueHolder5a7f1;
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
        $this->initializeref933 && ($this->initializeref933->__invoke($valueHolder5a7f1, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeref933) || 1) && $this->valueHolder5a7f1 = $valueHolder5a7f1;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a7f1;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5a7f1;
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
        $this->initializeref933 && ($this->initializeref933->__invoke($valueHolder5a7f1, $this, '__isset', array('name' => $name), $this->initializeref933) || 1) && $this->valueHolder5a7f1 = $valueHolder5a7f1;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a7f1;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5a7f1;
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
        $this->initializeref933 && ($this->initializeref933->__invoke($valueHolder5a7f1, $this, '__unset', array('name' => $name), $this->initializeref933) || 1) && $this->valueHolder5a7f1 = $valueHolder5a7f1;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a7f1;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5a7f1;
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
        $this->initializeref933 && ($this->initializeref933->__invoke($valueHolder5a7f1, $this, '__clone', array(), $this->initializeref933) || 1) && $this->valueHolder5a7f1 = $valueHolder5a7f1;

        $this->valueHolder5a7f1 = clone $this->valueHolder5a7f1;
    }

    public function __sleep()
    {
        $this->initializeref933 && ($this->initializeref933->__invoke($valueHolder5a7f1, $this, '__sleep', array(), $this->initializeref933) || 1) && $this->valueHolder5a7f1 = $valueHolder5a7f1;

        return array('valueHolder5a7f1');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeref933 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeref933;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeref933 && ($this->initializeref933->__invoke($valueHolder5a7f1, $this, 'initializeProxy', array(), $this->initializeref933) || 1) && $this->valueHolder5a7f1 = $valueHolder5a7f1;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5a7f1;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5a7f1;
    }


}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
