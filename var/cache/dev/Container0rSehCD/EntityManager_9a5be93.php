<?php

namespace Container0rSehCD;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderda2ed = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercf43d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2e5c3 = [
        
    ];

    public function getConnection()
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'getConnection', array(), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'getMetadataFactory', array(), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'getExpressionBuilder', array(), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'beginTransaction', array(), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->beginTransaction();
    }

    public function getCache()
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'getCache', array(), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->getCache();
    }

    public function transactional($func)
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'transactional', array('func' => $func), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'wrapInTransaction', array('func' => $func), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'commit', array(), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->commit();
    }

    public function rollback()
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'rollback', array(), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'getClassMetadata', array('className' => $className), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'createQuery', array('dql' => $dql), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'createNamedQuery', array('name' => $name), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'createQueryBuilder', array(), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'flush', array('entity' => $entity), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'clear', array('entityName' => $entityName), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->clear($entityName);
    }

    public function close()
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'close', array(), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->close();
    }

    public function persist($entity)
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'persist', array('entity' => $entity), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'remove', array('entity' => $entity), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'refresh', array('entity' => $entity), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'detach', array('entity' => $entity), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'merge', array('entity' => $entity), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'getRepository', array('entityName' => $entityName), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'contains', array('entity' => $entity), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'getEventManager', array(), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'getConfiguration', array(), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'isOpen', array(), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'getUnitOfWork', array(), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'getProxyFactory', array(), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'initializeObject', array('obj' => $obj), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'getFilters', array(), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'isFiltersStateClean', array(), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'hasFilters', array(), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return $this->valueHolderda2ed->hasFilters();
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

        $instance->initializercf43d = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderda2ed) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderda2ed = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderda2ed->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, '__get', ['name' => $name], $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        if (isset(self::$publicProperties2e5c3[$name])) {
            return $this->valueHolderda2ed->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderda2ed;

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

        $targetObject = $this->valueHolderda2ed;
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
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderda2ed;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderda2ed;
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
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, '__isset', array('name' => $name), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderda2ed;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderda2ed;
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
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, '__unset', array('name' => $name), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderda2ed;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderda2ed;
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
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, '__clone', array(), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        $this->valueHolderda2ed = clone $this->valueHolderda2ed;
    }

    public function __sleep()
    {
        $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, '__sleep', array(), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;

        return array('valueHolderda2ed');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercf43d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercf43d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializercf43d && ($this->initializercf43d->__invoke($valueHolderda2ed, $this, 'initializeProxy', array(), $this->initializercf43d) || 1) && $this->valueHolderda2ed = $valueHolderda2ed;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderda2ed;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderda2ed;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
