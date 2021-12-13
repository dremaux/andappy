<?php

namespace ContainerVKjBrxR;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder350eb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8f1ae = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese88ac = [
        
    ];

    public function getConnection()
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'getConnection', array(), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'getMetadataFactory', array(), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'getExpressionBuilder', array(), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'beginTransaction', array(), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'getCache', array(), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'transactional', array('func' => $func), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'commit', array(), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->commit();
    }

    public function rollback()
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'rollback', array(), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'getClassMetadata', array('className' => $className), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'createQuery', array('dql' => $dql), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'createNamedQuery', array('name' => $name), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'createQueryBuilder', array(), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'flush', array('entity' => $entity), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'clear', array('entityName' => $entityName), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->clear($entityName);
    }

    public function close()
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'close', array(), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->close();
    }

    public function persist($entity)
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'persist', array('entity' => $entity), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'remove', array('entity' => $entity), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'refresh', array('entity' => $entity), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'detach', array('entity' => $entity), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'merge', array('entity' => $entity), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'contains', array('entity' => $entity), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'getEventManager', array(), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'getConfiguration', array(), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'isOpen', array(), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'getUnitOfWork', array(), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'getProxyFactory', array(), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'initializeObject', array('obj' => $obj), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'getFilters', array(), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'isFiltersStateClean', array(), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'hasFilters', array(), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return $this->valueHolder350eb->hasFilters();
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

        $instance->initializer8f1ae = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder350eb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder350eb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder350eb->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, '__get', ['name' => $name], $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        if (isset(self::$publicPropertiese88ac[$name])) {
            return $this->valueHolder350eb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder350eb;

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

        $targetObject = $this->valueHolder350eb;
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
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder350eb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder350eb;
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
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, '__isset', array('name' => $name), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder350eb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder350eb;
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
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, '__unset', array('name' => $name), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder350eb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder350eb;
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
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, '__clone', array(), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        $this->valueHolder350eb = clone $this->valueHolder350eb;
    }

    public function __sleep()
    {
        $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, '__sleep', array(), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;

        return array('valueHolder350eb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8f1ae = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8f1ae;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8f1ae && ($this->initializer8f1ae->__invoke($valueHolder350eb, $this, 'initializeProxy', array(), $this->initializer8f1ae) || 1) && $this->valueHolder350eb = $valueHolder350eb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder350eb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder350eb;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
