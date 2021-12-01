<?php

namespace Container946lzgU;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc0ec9 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9ae82 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesaca5f = [
        
    ];

    public function getConnection()
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'getConnection', array(), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'getMetadataFactory', array(), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'getExpressionBuilder', array(), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'beginTransaction', array(), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'getCache', array(), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'transactional', array('func' => $func), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->transactional($func);
    }

    public function commit()
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'commit', array(), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->commit();
    }

    public function rollback()
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'rollback', array(), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'getClassMetadata', array('className' => $className), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'createQuery', array('dql' => $dql), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'createNamedQuery', array('name' => $name), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'createQueryBuilder', array(), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'flush', array('entity' => $entity), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'clear', array('entityName' => $entityName), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->clear($entityName);
    }

    public function close()
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'close', array(), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->close();
    }

    public function persist($entity)
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'persist', array('entity' => $entity), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'remove', array('entity' => $entity), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'refresh', array('entity' => $entity), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'detach', array('entity' => $entity), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'merge', array('entity' => $entity), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'contains', array('entity' => $entity), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'getEventManager', array(), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'getConfiguration', array(), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'isOpen', array(), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'getUnitOfWork', array(), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'getProxyFactory', array(), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'initializeObject', array('obj' => $obj), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'getFilters', array(), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'isFiltersStateClean', array(), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'hasFilters', array(), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return $this->valueHolderc0ec9->hasFilters();
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

        $instance->initializer9ae82 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc0ec9) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc0ec9 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc0ec9->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, '__get', ['name' => $name], $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        if (isset(self::$publicPropertiesaca5f[$name])) {
            return $this->valueHolderc0ec9->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc0ec9;

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

        $targetObject = $this->valueHolderc0ec9;
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
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc0ec9;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc0ec9;
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
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, '__isset', array('name' => $name), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc0ec9;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc0ec9;
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
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, '__unset', array('name' => $name), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc0ec9;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc0ec9;
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
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, '__clone', array(), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        $this->valueHolderc0ec9 = clone $this->valueHolderc0ec9;
    }

    public function __sleep()
    {
        $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, '__sleep', array(), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;

        return array('valueHolderc0ec9');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9ae82 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9ae82;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9ae82 && ($this->initializer9ae82->__invoke($valueHolderc0ec9, $this, 'initializeProxy', array(), $this->initializer9ae82) || 1) && $this->valueHolderc0ec9 = $valueHolderc0ec9;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc0ec9;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc0ec9;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
