<?php

namespace ContainerNh90UGj;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7fa91 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb218c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9234a = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        if ($this->valueHolder7fa91 === $returnValue = $this->valueHolder7fa91->paginate($target, $page, $limit, $options)) {
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

        $instance->initializerb218c = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder7fa91) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder7fa91 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, '__get', ['name' => $name], $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        if (isset(self::$publicProperties9234a[$name])) {
            return $this->valueHolder7fa91->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7fa91;

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

        $targetObject = $this->valueHolder7fa91;
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
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7fa91;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7fa91;
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
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, '__isset', array('name' => $name), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7fa91;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7fa91;
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
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, '__unset', array('name' => $name), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7fa91;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7fa91;
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
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, '__clone', array(), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        $this->valueHolder7fa91 = clone $this->valueHolder7fa91;
    }

    public function __sleep()
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, '__sleep', array(), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return array('valueHolder7fa91');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb218c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb218c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'initializeProxy', array(), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7fa91;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7fa91;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
