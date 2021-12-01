<?php

namespace ContainerKLPey3R;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc1167 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf2ddb = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7ab2e = [
        
    ];

    public function getConnection()
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'getConnection', array(), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'getMetadataFactory', array(), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'getExpressionBuilder', array(), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'beginTransaction', array(), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'getCache', array(), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'transactional', array('func' => $func), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'commit', array(), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->commit();
    }

    public function rollback()
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'rollback', array(), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'getClassMetadata', array('className' => $className), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'createQuery', array('dql' => $dql), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'createNamedQuery', array('name' => $name), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'createQueryBuilder', array(), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'flush', array('entity' => $entity), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'clear', array('entityName' => $entityName), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->clear($entityName);
    }

    public function close()
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'close', array(), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->close();
    }

    public function persist($entity)
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'persist', array('entity' => $entity), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'remove', array('entity' => $entity), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'refresh', array('entity' => $entity), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'detach', array('entity' => $entity), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'merge', array('entity' => $entity), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'contains', array('entity' => $entity), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'getEventManager', array(), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'getConfiguration', array(), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'isOpen', array(), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'getUnitOfWork', array(), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'getProxyFactory', array(), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'initializeObject', array('obj' => $obj), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'getFilters', array(), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'isFiltersStateClean', array(), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'hasFilters', array(), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return $this->valueHolderc1167->hasFilters();
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

        $instance->initializerf2ddb = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc1167) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc1167 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc1167->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, '__get', ['name' => $name], $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        if (isset(self::$publicProperties7ab2e[$name])) {
            return $this->valueHolderc1167->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc1167;

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

        $targetObject = $this->valueHolderc1167;
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
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc1167;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc1167;
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
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, '__isset', array('name' => $name), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc1167;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc1167;
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
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, '__unset', array('name' => $name), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc1167;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc1167;
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
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, '__clone', array(), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        $this->valueHolderc1167 = clone $this->valueHolderc1167;
    }

    public function __sleep()
    {
        $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, '__sleep', array(), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;

        return array('valueHolderc1167');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf2ddb = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf2ddb;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf2ddb && ($this->initializerf2ddb->__invoke($valueHolderc1167, $this, 'initializeProxy', array(), $this->initializerf2ddb) || 1) && $this->valueHolderc1167 = $valueHolderc1167;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc1167;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc1167;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
