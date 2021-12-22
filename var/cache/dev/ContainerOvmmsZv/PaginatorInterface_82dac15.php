<?php

namespace ContainerOvmmsZv;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1f32c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4d2bf = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6471f = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer4d2bf && ($this->initializer4d2bf->__invoke($valueHolder1f32c, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer4d2bf) || 1) && $this->valueHolder1f32c = $valueHolder1f32c;

        if ($this->valueHolder1f32c === $returnValue = $this->valueHolder1f32c->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer4d2bf = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder1f32c) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder1f32c = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer4d2bf && ($this->initializer4d2bf->__invoke($valueHolder1f32c, $this, '__get', ['name' => $name], $this->initializer4d2bf) || 1) && $this->valueHolder1f32c = $valueHolder1f32c;

        if (isset(self::$publicProperties6471f[$name])) {
            return $this->valueHolder1f32c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1f32c;

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

        $targetObject = $this->valueHolder1f32c;
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
        $this->initializer4d2bf && ($this->initializer4d2bf->__invoke($valueHolder1f32c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4d2bf) || 1) && $this->valueHolder1f32c = $valueHolder1f32c;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1f32c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1f32c;
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
        $this->initializer4d2bf && ($this->initializer4d2bf->__invoke($valueHolder1f32c, $this, '__isset', array('name' => $name), $this->initializer4d2bf) || 1) && $this->valueHolder1f32c = $valueHolder1f32c;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1f32c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1f32c;
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
        $this->initializer4d2bf && ($this->initializer4d2bf->__invoke($valueHolder1f32c, $this, '__unset', array('name' => $name), $this->initializer4d2bf) || 1) && $this->valueHolder1f32c = $valueHolder1f32c;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1f32c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1f32c;
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
        $this->initializer4d2bf && ($this->initializer4d2bf->__invoke($valueHolder1f32c, $this, '__clone', array(), $this->initializer4d2bf) || 1) && $this->valueHolder1f32c = $valueHolder1f32c;

        $this->valueHolder1f32c = clone $this->valueHolder1f32c;
    }

    public function __sleep()
    {
        $this->initializer4d2bf && ($this->initializer4d2bf->__invoke($valueHolder1f32c, $this, '__sleep', array(), $this->initializer4d2bf) || 1) && $this->valueHolder1f32c = $valueHolder1f32c;

        return array('valueHolder1f32c');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4d2bf = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4d2bf;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4d2bf && ($this->initializer4d2bf->__invoke($valueHolder1f32c, $this, 'initializeProxy', array(), $this->initializer4d2bf) || 1) && $this->valueHolder1f32c = $valueHolder1f32c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1f32c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1f32c;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
