<?php

namespace ContainerRnb5HuC;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd1804 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer42a24 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd4639 = [
        
    ];

    public function getConnection()
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'getConnection', array(), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'getMetadataFactory', array(), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'getExpressionBuilder', array(), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'beginTransaction', array(), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'getCache', array(), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->getCache();
    }

    public function transactional($func)
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'transactional', array('func' => $func), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'wrapInTransaction', array('func' => $func), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'commit', array(), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->commit();
    }

    public function rollback()
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'rollback', array(), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'getClassMetadata', array('className' => $className), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'createQuery', array('dql' => $dql), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'createNamedQuery', array('name' => $name), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'createQueryBuilder', array(), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'flush', array('entity' => $entity), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'clear', array('entityName' => $entityName), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->clear($entityName);
    }

    public function close()
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'close', array(), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->close();
    }

    public function persist($entity)
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'persist', array('entity' => $entity), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'remove', array('entity' => $entity), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'refresh', array('entity' => $entity), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'detach', array('entity' => $entity), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'merge', array('entity' => $entity), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'getRepository', array('entityName' => $entityName), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'contains', array('entity' => $entity), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'getEventManager', array(), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'getConfiguration', array(), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'isOpen', array(), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'getUnitOfWork', array(), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'getProxyFactory', array(), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'initializeObject', array('obj' => $obj), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'getFilters', array(), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'isFiltersStateClean', array(), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'hasFilters', array(), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return $this->valueHolderd1804->hasFilters();
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

        $instance->initializer42a24 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd1804) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd1804 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd1804->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, '__get', ['name' => $name], $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        if (isset(self::$publicPropertiesd4639[$name])) {
            return $this->valueHolderd1804->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd1804;

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

        $targetObject = $this->valueHolderd1804;
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
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd1804;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd1804;
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
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, '__isset', array('name' => $name), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd1804;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd1804;
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
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, '__unset', array('name' => $name), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd1804;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd1804;
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
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, '__clone', array(), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        $this->valueHolderd1804 = clone $this->valueHolderd1804;
    }

    public function __sleep()
    {
        $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, '__sleep', array(), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;

        return array('valueHolderd1804');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer42a24 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer42a24;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer42a24 && ($this->initializer42a24->__invoke($valueHolderd1804, $this, 'initializeProxy', array(), $this->initializer42a24) || 1) && $this->valueHolderd1804 = $valueHolderd1804;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd1804;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd1804;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
