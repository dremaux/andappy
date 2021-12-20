<?php

namespace ContainerH2hRj3J;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7a709 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfea96 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7f8d4 = [
        
    ];

    public function getConnection()
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'getConnection', array(), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'getMetadataFactory', array(), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'getExpressionBuilder', array(), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'beginTransaction', array(), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'getCache', array(), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->getCache();
    }

    public function transactional($func)
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'transactional', array('func' => $func), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'wrapInTransaction', array('func' => $func), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'commit', array(), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->commit();
    }

    public function rollback()
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'rollback', array(), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'getClassMetadata', array('className' => $className), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'createQuery', array('dql' => $dql), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'createNamedQuery', array('name' => $name), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'createQueryBuilder', array(), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'flush', array('entity' => $entity), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'clear', array('entityName' => $entityName), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->clear($entityName);
    }

    public function close()
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'close', array(), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->close();
    }

    public function persist($entity)
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'persist', array('entity' => $entity), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'remove', array('entity' => $entity), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'refresh', array('entity' => $entity), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'detach', array('entity' => $entity), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'merge', array('entity' => $entity), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'contains', array('entity' => $entity), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'getEventManager', array(), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'getConfiguration', array(), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'isOpen', array(), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'getUnitOfWork', array(), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'getProxyFactory', array(), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'initializeObject', array('obj' => $obj), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'getFilters', array(), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'isFiltersStateClean', array(), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'hasFilters', array(), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return $this->valueHolder7a709->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerfea96 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7a709) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7a709 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7a709->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, '__get', ['name' => $name], $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        if (isset(self::$publicProperties7f8d4[$name])) {
            return $this->valueHolder7a709->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7a709;

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

        $targetObject = $this->valueHolder7a709;
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
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7a709;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7a709;
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
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, '__isset', array('name' => $name), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7a709;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7a709;
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
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, '__unset', array('name' => $name), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7a709;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7a709;
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
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, '__clone', array(), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        $this->valueHolder7a709 = clone $this->valueHolder7a709;
    }

    public function __sleep()
    {
        $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, '__sleep', array(), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;

        return array('valueHolder7a709');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfea96 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfea96;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerfea96 && ($this->initializerfea96->__invoke($valueHolder7a709, $this, 'initializeProxy', array(), $this->initializerfea96) || 1) && $this->valueHolder7a709 = $valueHolder7a709;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7a709;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7a709;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
