<?php

namespace ContainerZCiGNvg;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6ab74 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer65516 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa6ebe = [
        
    ];

    public function getConnection()
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'getConnection', array(), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'getMetadataFactory', array(), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'getExpressionBuilder', array(), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'beginTransaction', array(), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'getCache', array(), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->getCache();
    }

    public function transactional($func)
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'transactional', array('func' => $func), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'wrapInTransaction', array('func' => $func), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'commit', array(), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->commit();
    }

    public function rollback()
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'rollback', array(), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'getClassMetadata', array('className' => $className), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'createQuery', array('dql' => $dql), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'createNamedQuery', array('name' => $name), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'createQueryBuilder', array(), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'flush', array('entity' => $entity), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'clear', array('entityName' => $entityName), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->clear($entityName);
    }

    public function close()
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'close', array(), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->close();
    }

    public function persist($entity)
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'persist', array('entity' => $entity), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'remove', array('entity' => $entity), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'refresh', array('entity' => $entity), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'detach', array('entity' => $entity), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'merge', array('entity' => $entity), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'getRepository', array('entityName' => $entityName), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'contains', array('entity' => $entity), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'getEventManager', array(), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'getConfiguration', array(), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'isOpen', array(), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'getUnitOfWork', array(), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'getProxyFactory', array(), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'initializeObject', array('obj' => $obj), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'getFilters', array(), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'isFiltersStateClean', array(), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'hasFilters', array(), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return $this->valueHolder6ab74->hasFilters();
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

        $instance->initializer65516 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder6ab74) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6ab74 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6ab74->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, '__get', ['name' => $name], $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        if (isset(self::$publicPropertiesa6ebe[$name])) {
            return $this->valueHolder6ab74->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6ab74;

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

        $targetObject = $this->valueHolder6ab74;
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
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6ab74;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6ab74;
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
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, '__isset', array('name' => $name), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6ab74;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6ab74;
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
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, '__unset', array('name' => $name), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6ab74;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6ab74;
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
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, '__clone', array(), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        $this->valueHolder6ab74 = clone $this->valueHolder6ab74;
    }

    public function __sleep()
    {
        $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, '__sleep', array(), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;

        return array('valueHolder6ab74');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer65516 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer65516;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer65516 && ($this->initializer65516->__invoke($valueHolder6ab74, $this, 'initializeProxy', array(), $this->initializer65516) || 1) && $this->valueHolder6ab74 = $valueHolder6ab74;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6ab74;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6ab74;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
