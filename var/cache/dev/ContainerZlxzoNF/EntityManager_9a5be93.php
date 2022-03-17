<?php

namespace ContainerZlxzoNF;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder75811 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer78620 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9da08 = [
        
    ];

    public function getConnection()
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'getConnection', array(), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'getMetadataFactory', array(), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'getExpressionBuilder', array(), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'beginTransaction', array(), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'getCache', array(), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->getCache();
    }

    public function transactional($func)
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'transactional', array('func' => $func), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'wrapInTransaction', array('func' => $func), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'commit', array(), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->commit();
    }

    public function rollback()
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'rollback', array(), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'getClassMetadata', array('className' => $className), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'createQuery', array('dql' => $dql), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'createNamedQuery', array('name' => $name), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'createQueryBuilder', array(), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'flush', array('entity' => $entity), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'clear', array('entityName' => $entityName), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->clear($entityName);
    }

    public function close()
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'close', array(), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->close();
    }

    public function persist($entity)
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'persist', array('entity' => $entity), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'remove', array('entity' => $entity), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'refresh', array('entity' => $entity), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'detach', array('entity' => $entity), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'merge', array('entity' => $entity), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'getRepository', array('entityName' => $entityName), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'contains', array('entity' => $entity), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'getEventManager', array(), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'getConfiguration', array(), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'isOpen', array(), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'getUnitOfWork', array(), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'getProxyFactory', array(), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'initializeObject', array('obj' => $obj), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'getFilters', array(), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'isFiltersStateClean', array(), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'hasFilters', array(), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return $this->valueHolder75811->hasFilters();
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

        $instance->initializer78620 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder75811) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder75811 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder75811->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, '__get', ['name' => $name], $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        if (isset(self::$publicProperties9da08[$name])) {
            return $this->valueHolder75811->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder75811;

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

        $targetObject = $this->valueHolder75811;
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
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder75811;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder75811;
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
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, '__isset', array('name' => $name), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder75811;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder75811;
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
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, '__unset', array('name' => $name), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder75811;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder75811;
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
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, '__clone', array(), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        $this->valueHolder75811 = clone $this->valueHolder75811;
    }

    public function __sleep()
    {
        $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, '__sleep', array(), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;

        return array('valueHolder75811');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer78620 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer78620;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer78620 && ($this->initializer78620->__invoke($valueHolder75811, $this, 'initializeProxy', array(), $this->initializer78620) || 1) && $this->valueHolder75811 = $valueHolder75811;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder75811;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder75811;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
