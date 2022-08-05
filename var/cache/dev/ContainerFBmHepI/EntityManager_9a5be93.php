<?php

namespace ContainerFBmHepI;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc3854 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer13302 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb6241 = [
        
    ];

    public function getConnection()
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'getConnection', array(), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'getMetadataFactory', array(), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'getExpressionBuilder', array(), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'beginTransaction', array(), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'getCache', array(), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->getCache();
    }

    public function transactional($func)
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'transactional', array('func' => $func), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'wrapInTransaction', array('func' => $func), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'commit', array(), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->commit();
    }

    public function rollback()
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'rollback', array(), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'getClassMetadata', array('className' => $className), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'createQuery', array('dql' => $dql), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'createNamedQuery', array('name' => $name), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'createQueryBuilder', array(), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'flush', array('entity' => $entity), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'clear', array('entityName' => $entityName), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->clear($entityName);
    }

    public function close()
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'close', array(), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->close();
    }

    public function persist($entity)
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'persist', array('entity' => $entity), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'remove', array('entity' => $entity), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'refresh', array('entity' => $entity), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'detach', array('entity' => $entity), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'merge', array('entity' => $entity), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'getRepository', array('entityName' => $entityName), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'contains', array('entity' => $entity), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'getEventManager', array(), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'getConfiguration', array(), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'isOpen', array(), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'getUnitOfWork', array(), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'getProxyFactory', array(), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'initializeObject', array('obj' => $obj), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'getFilters', array(), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'isFiltersStateClean', array(), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'hasFilters', array(), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return $this->valueHolderc3854->hasFilters();
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

        $instance->initializer13302 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc3854) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc3854 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc3854->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, '__get', ['name' => $name], $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        if (isset(self::$publicPropertiesb6241[$name])) {
            return $this->valueHolderc3854->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc3854;

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

        $targetObject = $this->valueHolderc3854;
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
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc3854;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc3854;
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
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, '__isset', array('name' => $name), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc3854;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc3854;
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
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, '__unset', array('name' => $name), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc3854;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc3854;
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
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, '__clone', array(), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        $this->valueHolderc3854 = clone $this->valueHolderc3854;
    }

    public function __sleep()
    {
        $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, '__sleep', array(), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;

        return array('valueHolderc3854');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer13302 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer13302;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer13302 && ($this->initializer13302->__invoke($valueHolderc3854, $this, 'initializeProxy', array(), $this->initializer13302) || 1) && $this->valueHolderc3854 = $valueHolderc3854;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc3854;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc3854;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
