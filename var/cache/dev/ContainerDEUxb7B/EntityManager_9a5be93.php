<?php

namespace ContainerDEUxb7B;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder587a0 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerdefe4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd6f97 = [
        
    ];

    public function getConnection()
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'getConnection', array(), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'getMetadataFactory', array(), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'getExpressionBuilder', array(), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'beginTransaction', array(), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'getCache', array(), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->getCache();
    }

    public function transactional($func)
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'transactional', array('func' => $func), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'wrapInTransaction', array('func' => $func), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'commit', array(), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->commit();
    }

    public function rollback()
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'rollback', array(), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'getClassMetadata', array('className' => $className), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'createQuery', array('dql' => $dql), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'createNamedQuery', array('name' => $name), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'createQueryBuilder', array(), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'flush', array('entity' => $entity), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'clear', array('entityName' => $entityName), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->clear($entityName);
    }

    public function close()
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'close', array(), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->close();
    }

    public function persist($entity)
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'persist', array('entity' => $entity), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'remove', array('entity' => $entity), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'refresh', array('entity' => $entity), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'detach', array('entity' => $entity), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'merge', array('entity' => $entity), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'getRepository', array('entityName' => $entityName), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'contains', array('entity' => $entity), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'getEventManager', array(), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'getConfiguration', array(), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'isOpen', array(), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'getUnitOfWork', array(), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'getProxyFactory', array(), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'initializeObject', array('obj' => $obj), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'getFilters', array(), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'isFiltersStateClean', array(), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'hasFilters', array(), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return $this->valueHolder587a0->hasFilters();
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

        $instance->initializerdefe4 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder587a0) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder587a0 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder587a0->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, '__get', ['name' => $name], $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        if (isset(self::$publicPropertiesd6f97[$name])) {
            return $this->valueHolder587a0->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder587a0;

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

        $targetObject = $this->valueHolder587a0;
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
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder587a0;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder587a0;
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
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, '__isset', array('name' => $name), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder587a0;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder587a0;
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
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, '__unset', array('name' => $name), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder587a0;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder587a0;
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
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, '__clone', array(), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        $this->valueHolder587a0 = clone $this->valueHolder587a0;
    }

    public function __sleep()
    {
        $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, '__sleep', array(), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;

        return array('valueHolder587a0');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdefe4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdefe4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerdefe4 && ($this->initializerdefe4->__invoke($valueHolder587a0, $this, 'initializeProxy', array(), $this->initializerdefe4) || 1) && $this->valueHolder587a0 = $valueHolder587a0;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder587a0;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder587a0;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
