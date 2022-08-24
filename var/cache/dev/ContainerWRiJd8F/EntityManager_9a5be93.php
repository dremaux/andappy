<?php

namespace ContainerWRiJd8F;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3231a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer743ff = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiescf0dc = [
        
    ];

    public function getConnection()
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'getConnection', array(), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'getMetadataFactory', array(), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'getExpressionBuilder', array(), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'beginTransaction', array(), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'getCache', array(), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'transactional', array('func' => $func), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'commit', array(), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->commit();
    }

    public function rollback()
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'rollback', array(), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'getClassMetadata', array('className' => $className), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'createQuery', array('dql' => $dql), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'createNamedQuery', array('name' => $name), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'createQueryBuilder', array(), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'flush', array('entity' => $entity), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'clear', array('entityName' => $entityName), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->clear($entityName);
    }

    public function close()
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'close', array(), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->close();
    }

    public function persist($entity)
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'persist', array('entity' => $entity), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'remove', array('entity' => $entity), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'refresh', array('entity' => $entity), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'detach', array('entity' => $entity), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'merge', array('entity' => $entity), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'contains', array('entity' => $entity), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'getEventManager', array(), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'getConfiguration', array(), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'isOpen', array(), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'getUnitOfWork', array(), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'getProxyFactory', array(), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'initializeObject', array('obj' => $obj), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'getFilters', array(), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'isFiltersStateClean', array(), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'hasFilters', array(), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return $this->valueHolder3231a->hasFilters();
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

        $instance->initializer743ff = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder3231a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3231a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3231a->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, '__get', ['name' => $name], $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        if (isset(self::$publicPropertiescf0dc[$name])) {
            return $this->valueHolder3231a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3231a;

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

        $targetObject = $this->valueHolder3231a;
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
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3231a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3231a;
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
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, '__isset', array('name' => $name), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3231a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3231a;
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
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, '__unset', array('name' => $name), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3231a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3231a;
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
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, '__clone', array(), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        $this->valueHolder3231a = clone $this->valueHolder3231a;
    }

    public function __sleep()
    {
        $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, '__sleep', array(), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;

        return array('valueHolder3231a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer743ff = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer743ff;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer743ff && ($this->initializer743ff->__invoke($valueHolder3231a, $this, 'initializeProxy', array(), $this->initializer743ff) || 1) && $this->valueHolder3231a = $valueHolder3231a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3231a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3231a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
