<?php

namespace ContainerYzXRx7x;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder35f51 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb2ec0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb1c78 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'getConnection', array(), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'getMetadataFactory', array(), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'getExpressionBuilder', array(), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'beginTransaction', array(), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'getCache', array(), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'transactional', array('func' => $func), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'commit', array(), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->commit();
    }

    public function rollback()
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'rollback', array(), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'getClassMetadata', array('className' => $className), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'createQuery', array('dql' => $dql), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'createNamedQuery', array('name' => $name), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'createQueryBuilder', array(), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'flush', array('entity' => $entity), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'clear', array('entityName' => $entityName), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->clear($entityName);
    }

    public function close()
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'close', array(), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->close();
    }

    public function persist($entity)
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'persist', array('entity' => $entity), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'remove', array('entity' => $entity), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'refresh', array('entity' => $entity), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'detach', array('entity' => $entity), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'merge', array('entity' => $entity), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'contains', array('entity' => $entity), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'getEventManager', array(), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'getConfiguration', array(), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'isOpen', array(), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'getUnitOfWork', array(), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'getProxyFactory', array(), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'initializeObject', array('obj' => $obj), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'getFilters', array(), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'isFiltersStateClean', array(), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'hasFilters', array(), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return $this->valueHolder35f51->hasFilters();
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

        $instance->initializerb2ec0 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder35f51) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder35f51 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder35f51->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, '__get', ['name' => $name], $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        if (isset(self::$publicPropertiesb1c78[$name])) {
            return $this->valueHolder35f51->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder35f51;

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

        $targetObject = $this->valueHolder35f51;
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
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder35f51;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder35f51;
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
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, '__isset', array('name' => $name), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder35f51;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder35f51;
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
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, '__unset', array('name' => $name), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder35f51;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder35f51;
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
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, '__clone', array(), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        $this->valueHolder35f51 = clone $this->valueHolder35f51;
    }

    public function __sleep()
    {
        $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, '__sleep', array(), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;

        return array('valueHolder35f51');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb2ec0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb2ec0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb2ec0 && ($this->initializerb2ec0->__invoke($valueHolder35f51, $this, 'initializeProxy', array(), $this->initializerb2ec0) || 1) && $this->valueHolder35f51 = $valueHolder35f51;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder35f51;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder35f51;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
