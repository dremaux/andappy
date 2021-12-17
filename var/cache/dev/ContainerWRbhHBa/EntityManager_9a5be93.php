<?php

namespace ContainerWRbhHBa;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfd197 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera8343 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdf579 = [
        
    ];

    public function getConnection()
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'getConnection', array(), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'getMetadataFactory', array(), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'getExpressionBuilder', array(), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'beginTransaction', array(), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'getCache', array(), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->getCache();
    }

    public function transactional($func)
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'transactional', array('func' => $func), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'wrapInTransaction', array('func' => $func), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'commit', array(), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->commit();
    }

    public function rollback()
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'rollback', array(), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'getClassMetadata', array('className' => $className), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'createQuery', array('dql' => $dql), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'createNamedQuery', array('name' => $name), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'createQueryBuilder', array(), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'flush', array('entity' => $entity), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'clear', array('entityName' => $entityName), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->clear($entityName);
    }

    public function close()
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'close', array(), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->close();
    }

    public function persist($entity)
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'persist', array('entity' => $entity), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'remove', array('entity' => $entity), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'refresh', array('entity' => $entity), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'detach', array('entity' => $entity), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'merge', array('entity' => $entity), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'getRepository', array('entityName' => $entityName), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'contains', array('entity' => $entity), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'getEventManager', array(), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'getConfiguration', array(), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'isOpen', array(), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'getUnitOfWork', array(), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'getProxyFactory', array(), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'initializeObject', array('obj' => $obj), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'getFilters', array(), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'isFiltersStateClean', array(), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'hasFilters', array(), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return $this->valueHolderfd197->hasFilters();
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

        $instance->initializera8343 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderfd197) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfd197 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfd197->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, '__get', ['name' => $name], $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        if (isset(self::$publicPropertiesdf579[$name])) {
            return $this->valueHolderfd197->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd197;

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

        $targetObject = $this->valueHolderfd197;
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
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd197;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfd197;
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
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, '__isset', array('name' => $name), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd197;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfd197;
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
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, '__unset', array('name' => $name), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd197;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfd197;
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
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, '__clone', array(), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        $this->valueHolderfd197 = clone $this->valueHolderfd197;
    }

    public function __sleep()
    {
        $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, '__sleep', array(), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;

        return array('valueHolderfd197');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera8343 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera8343;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera8343 && ($this->initializera8343->__invoke($valueHolderfd197, $this, 'initializeProxy', array(), $this->initializera8343) || 1) && $this->valueHolderfd197 = $valueHolderfd197;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfd197;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfd197;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
