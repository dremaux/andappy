<?php

namespace ContainerE1axBtx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb8a95 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc4d71 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesad575 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'getConnection', array(), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'getMetadataFactory', array(), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'getExpressionBuilder', array(), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'beginTransaction', array(), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'getCache', array(), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'transactional', array('func' => $func), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'commit', array(), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->commit();
    }

    public function rollback()
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'rollback', array(), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'getClassMetadata', array('className' => $className), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'createQuery', array('dql' => $dql), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'createNamedQuery', array('name' => $name), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'createQueryBuilder', array(), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'flush', array('entity' => $entity), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'clear', array('entityName' => $entityName), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->clear($entityName);
    }

    public function close()
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'close', array(), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->close();
    }

    public function persist($entity)
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'persist', array('entity' => $entity), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'remove', array('entity' => $entity), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'refresh', array('entity' => $entity), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'detach', array('entity' => $entity), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'merge', array('entity' => $entity), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'contains', array('entity' => $entity), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'getEventManager', array(), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'getConfiguration', array(), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'isOpen', array(), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'getUnitOfWork', array(), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'getProxyFactory', array(), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'initializeObject', array('obj' => $obj), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'getFilters', array(), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'isFiltersStateClean', array(), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'hasFilters', array(), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return $this->valueHolderb8a95->hasFilters();
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

        $instance->initializerc4d71 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb8a95) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb8a95 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb8a95->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, '__get', ['name' => $name], $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        if (isset(self::$publicPropertiesad575[$name])) {
            return $this->valueHolderb8a95->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb8a95;

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

        $targetObject = $this->valueHolderb8a95;
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
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb8a95;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb8a95;
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
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, '__isset', array('name' => $name), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb8a95;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb8a95;
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
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, '__unset', array('name' => $name), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb8a95;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb8a95;
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
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, '__clone', array(), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        $this->valueHolderb8a95 = clone $this->valueHolderb8a95;
    }

    public function __sleep()
    {
        $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, '__sleep', array(), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;

        return array('valueHolderb8a95');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc4d71 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc4d71;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc4d71 && ($this->initializerc4d71->__invoke($valueHolderb8a95, $this, 'initializeProxy', array(), $this->initializerc4d71) || 1) && $this->valueHolderb8a95 = $valueHolderb8a95;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb8a95;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb8a95;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
