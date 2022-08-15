<?php

namespace Container2TxYCoD;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5ee06 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeraf05b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties266b9 = [
        
    ];

    public function getConnection()
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'getConnection', array(), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'getMetadataFactory', array(), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'getExpressionBuilder', array(), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'beginTransaction', array(), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->beginTransaction();
    }

    public function getCache()
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'getCache', array(), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->getCache();
    }

    public function transactional($func)
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'transactional', array('func' => $func), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'wrapInTransaction', array('func' => $func), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'commit', array(), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->commit();
    }

    public function rollback()
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'rollback', array(), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'getClassMetadata', array('className' => $className), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'createQuery', array('dql' => $dql), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'createNamedQuery', array('name' => $name), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'createQueryBuilder', array(), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'flush', array('entity' => $entity), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'clear', array('entityName' => $entityName), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->clear($entityName);
    }

    public function close()
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'close', array(), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->close();
    }

    public function persist($entity)
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'persist', array('entity' => $entity), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'remove', array('entity' => $entity), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'refresh', array('entity' => $entity), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'detach', array('entity' => $entity), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'merge', array('entity' => $entity), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'getRepository', array('entityName' => $entityName), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'contains', array('entity' => $entity), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'getEventManager', array(), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'getConfiguration', array(), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'isOpen', array(), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'getUnitOfWork', array(), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'getProxyFactory', array(), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'initializeObject', array('obj' => $obj), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'getFilters', array(), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'isFiltersStateClean', array(), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'hasFilters', array(), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return $this->valueHolder5ee06->hasFilters();
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

        $instance->initializeraf05b = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder5ee06) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5ee06 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5ee06->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, '__get', ['name' => $name], $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        if (isset(self::$publicProperties266b9[$name])) {
            return $this->valueHolder5ee06->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ee06;

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

        $targetObject = $this->valueHolder5ee06;
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
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ee06;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5ee06;
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
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, '__isset', array('name' => $name), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ee06;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5ee06;
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
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, '__unset', array('name' => $name), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ee06;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5ee06;
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
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, '__clone', array(), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        $this->valueHolder5ee06 = clone $this->valueHolder5ee06;
    }

    public function __sleep()
    {
        $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, '__sleep', array(), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;

        return array('valueHolder5ee06');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeraf05b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeraf05b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeraf05b && ($this->initializeraf05b->__invoke($valueHolder5ee06, $this, 'initializeProxy', array(), $this->initializeraf05b) || 1) && $this->valueHolder5ee06 = $valueHolder5ee06;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5ee06;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5ee06;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
