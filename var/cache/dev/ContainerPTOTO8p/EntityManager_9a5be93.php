<?php

namespace ContainerPTOTO8p;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera016c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer69625 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb238b = [
        
    ];

    public function getConnection()
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'getConnection', array(), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'getMetadataFactory', array(), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'getExpressionBuilder', array(), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'beginTransaction', array(), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'getCache', array(), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'transactional', array('func' => $func), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'commit', array(), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->commit();
    }

    public function rollback()
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'rollback', array(), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'getClassMetadata', array('className' => $className), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'createQuery', array('dql' => $dql), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'createNamedQuery', array('name' => $name), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'createQueryBuilder', array(), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'flush', array('entity' => $entity), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'clear', array('entityName' => $entityName), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->clear($entityName);
    }

    public function close()
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'close', array(), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->close();
    }

    public function persist($entity)
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'persist', array('entity' => $entity), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'remove', array('entity' => $entity), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'refresh', array('entity' => $entity), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'detach', array('entity' => $entity), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'merge', array('entity' => $entity), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'contains', array('entity' => $entity), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'getEventManager', array(), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'getConfiguration', array(), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'isOpen', array(), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'getUnitOfWork', array(), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'getProxyFactory', array(), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'initializeObject', array('obj' => $obj), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'getFilters', array(), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'isFiltersStateClean', array(), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'hasFilters', array(), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return $this->valueHoldera016c->hasFilters();
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

        $instance->initializer69625 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldera016c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera016c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera016c->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, '__get', ['name' => $name], $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        if (isset(self::$publicPropertiesb238b[$name])) {
            return $this->valueHoldera016c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera016c;

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

        $targetObject = $this->valueHoldera016c;
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
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera016c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera016c;
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
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, '__isset', array('name' => $name), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera016c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera016c;
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
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, '__unset', array('name' => $name), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera016c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera016c;
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
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, '__clone', array(), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        $this->valueHoldera016c = clone $this->valueHoldera016c;
    }

    public function __sleep()
    {
        $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, '__sleep', array(), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;

        return array('valueHoldera016c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer69625 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer69625;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer69625 && ($this->initializer69625->__invoke($valueHoldera016c, $this, 'initializeProxy', array(), $this->initializer69625) || 1) && $this->valueHoldera016c = $valueHoldera016c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera016c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera016c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
