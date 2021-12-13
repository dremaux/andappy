<?php

namespace ContainerKYGyYvf;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2329f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer00f47 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties52519 = [
        
    ];

    public function getConnection()
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'getConnection', array(), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'getMetadataFactory', array(), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'getExpressionBuilder', array(), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'beginTransaction', array(), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'getCache', array(), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'transactional', array('func' => $func), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'commit', array(), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->commit();
    }

    public function rollback()
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'rollback', array(), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'getClassMetadata', array('className' => $className), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'createQuery', array('dql' => $dql), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'createNamedQuery', array('name' => $name), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'createQueryBuilder', array(), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'flush', array('entity' => $entity), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'clear', array('entityName' => $entityName), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->clear($entityName);
    }

    public function close()
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'close', array(), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->close();
    }

    public function persist($entity)
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'persist', array('entity' => $entity), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'remove', array('entity' => $entity), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'refresh', array('entity' => $entity), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'detach', array('entity' => $entity), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'merge', array('entity' => $entity), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'contains', array('entity' => $entity), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'getEventManager', array(), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'getConfiguration', array(), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'isOpen', array(), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'getUnitOfWork', array(), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'getProxyFactory', array(), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'initializeObject', array('obj' => $obj), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'getFilters', array(), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'isFiltersStateClean', array(), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'hasFilters', array(), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return $this->valueHolder2329f->hasFilters();
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

        $instance->initializer00f47 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder2329f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2329f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2329f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, '__get', ['name' => $name], $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        if (isset(self::$publicProperties52519[$name])) {
            return $this->valueHolder2329f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2329f;

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

        $targetObject = $this->valueHolder2329f;
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
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2329f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2329f;
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
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, '__isset', array('name' => $name), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2329f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2329f;
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
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, '__unset', array('name' => $name), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2329f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2329f;
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
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, '__clone', array(), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        $this->valueHolder2329f = clone $this->valueHolder2329f;
    }

    public function __sleep()
    {
        $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, '__sleep', array(), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;

        return array('valueHolder2329f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer00f47 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer00f47;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer00f47 && ($this->initializer00f47->__invoke($valueHolder2329f, $this, 'initializeProxy', array(), $this->initializer00f47) || 1) && $this->valueHolder2329f = $valueHolder2329f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2329f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2329f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
