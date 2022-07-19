<?php

namespace ContainerHpgwuQp;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6b021 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer49fe4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb238f = [
        
    ];

    public function getConnection()
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'getConnection', array(), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'getMetadataFactory', array(), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'getExpressionBuilder', array(), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'beginTransaction', array(), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'getCache', array(), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->getCache();
    }

    public function transactional($func)
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'transactional', array('func' => $func), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'wrapInTransaction', array('func' => $func), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'commit', array(), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->commit();
    }

    public function rollback()
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'rollback', array(), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'getClassMetadata', array('className' => $className), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'createQuery', array('dql' => $dql), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'createNamedQuery', array('name' => $name), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'createQueryBuilder', array(), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'flush', array('entity' => $entity), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'clear', array('entityName' => $entityName), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->clear($entityName);
    }

    public function close()
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'close', array(), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->close();
    }

    public function persist($entity)
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'persist', array('entity' => $entity), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'remove', array('entity' => $entity), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'refresh', array('entity' => $entity), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'detach', array('entity' => $entity), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'merge', array('entity' => $entity), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'getRepository', array('entityName' => $entityName), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'contains', array('entity' => $entity), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'getEventManager', array(), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'getConfiguration', array(), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'isOpen', array(), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'getUnitOfWork', array(), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'getProxyFactory', array(), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'initializeObject', array('obj' => $obj), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'getFilters', array(), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'isFiltersStateClean', array(), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'hasFilters', array(), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return $this->valueHolder6b021->hasFilters();
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

        $instance->initializer49fe4 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6b021) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6b021 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6b021->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, '__get', ['name' => $name], $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        if (isset(self::$publicPropertiesb238f[$name])) {
            return $this->valueHolder6b021->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6b021;

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

        $targetObject = $this->valueHolder6b021;
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
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6b021;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6b021;
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
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, '__isset', array('name' => $name), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6b021;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6b021;
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
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, '__unset', array('name' => $name), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6b021;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6b021;
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
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, '__clone', array(), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        $this->valueHolder6b021 = clone $this->valueHolder6b021;
    }

    public function __sleep()
    {
        $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, '__sleep', array(), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;

        return array('valueHolder6b021');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer49fe4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer49fe4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer49fe4 && ($this->initializer49fe4->__invoke($valueHolder6b021, $this, 'initializeProxy', array(), $this->initializer49fe4) || 1) && $this->valueHolder6b021 = $valueHolder6b021;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6b021;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6b021;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
