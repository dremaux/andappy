<?php

namespace ContainerS88ouAk;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4b384 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere756b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties12355 = [
        
    ];

    public function getConnection()
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'getConnection', array(), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'getMetadataFactory', array(), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'getExpressionBuilder', array(), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'beginTransaction', array(), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'getCache', array(), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->getCache();
    }

    public function transactional($func)
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'transactional', array('func' => $func), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'wrapInTransaction', array('func' => $func), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'commit', array(), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->commit();
    }

    public function rollback()
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'rollback', array(), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'getClassMetadata', array('className' => $className), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'createQuery', array('dql' => $dql), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'createNamedQuery', array('name' => $name), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'createQueryBuilder', array(), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'flush', array('entity' => $entity), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'clear', array('entityName' => $entityName), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->clear($entityName);
    }

    public function close()
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'close', array(), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->close();
    }

    public function persist($entity)
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'persist', array('entity' => $entity), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'remove', array('entity' => $entity), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'refresh', array('entity' => $entity), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'detach', array('entity' => $entity), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'merge', array('entity' => $entity), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'getRepository', array('entityName' => $entityName), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'contains', array('entity' => $entity), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'getEventManager', array(), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'getConfiguration', array(), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'isOpen', array(), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'getUnitOfWork', array(), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'getProxyFactory', array(), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'initializeObject', array('obj' => $obj), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'getFilters', array(), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'isFiltersStateClean', array(), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'hasFilters', array(), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return $this->valueHolder4b384->hasFilters();
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

        $instance->initializere756b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4b384) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4b384 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4b384->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, '__get', ['name' => $name], $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        if (isset(self::$publicProperties12355[$name])) {
            return $this->valueHolder4b384->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4b384;

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

        $targetObject = $this->valueHolder4b384;
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
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4b384;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4b384;
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
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, '__isset', array('name' => $name), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4b384;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4b384;
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
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, '__unset', array('name' => $name), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4b384;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4b384;
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
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, '__clone', array(), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        $this->valueHolder4b384 = clone $this->valueHolder4b384;
    }

    public function __sleep()
    {
        $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, '__sleep', array(), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;

        return array('valueHolder4b384');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere756b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere756b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere756b && ($this->initializere756b->__invoke($valueHolder4b384, $this, 'initializeProxy', array(), $this->initializere756b) || 1) && $this->valueHolder4b384 = $valueHolder4b384;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4b384;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4b384;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
