<?php

namespace ContainerXM8vaWy;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera510b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5a03e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties868e8 = [
        
    ];

    public function getConnection()
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'getConnection', array(), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'getMetadataFactory', array(), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'getExpressionBuilder', array(), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'beginTransaction', array(), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'getCache', array(), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'transactional', array('func' => $func), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'commit', array(), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->commit();
    }

    public function rollback()
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'rollback', array(), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'getClassMetadata', array('className' => $className), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'createQuery', array('dql' => $dql), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'createNamedQuery', array('name' => $name), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'createQueryBuilder', array(), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'flush', array('entity' => $entity), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'clear', array('entityName' => $entityName), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->clear($entityName);
    }

    public function close()
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'close', array(), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->close();
    }

    public function persist($entity)
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'persist', array('entity' => $entity), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'remove', array('entity' => $entity), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'refresh', array('entity' => $entity), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'detach', array('entity' => $entity), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'merge', array('entity' => $entity), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'contains', array('entity' => $entity), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'getEventManager', array(), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'getConfiguration', array(), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'isOpen', array(), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'getUnitOfWork', array(), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'getProxyFactory', array(), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'initializeObject', array('obj' => $obj), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'getFilters', array(), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'isFiltersStateClean', array(), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'hasFilters', array(), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return $this->valueHoldera510b->hasFilters();
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

        $instance->initializer5a03e = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldera510b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera510b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera510b->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, '__get', ['name' => $name], $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        if (isset(self::$publicProperties868e8[$name])) {
            return $this->valueHoldera510b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera510b;

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

        $targetObject = $this->valueHoldera510b;
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
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera510b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera510b;
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
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, '__isset', array('name' => $name), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera510b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera510b;
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
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, '__unset', array('name' => $name), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera510b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera510b;
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
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, '__clone', array(), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        $this->valueHoldera510b = clone $this->valueHoldera510b;
    }

    public function __sleep()
    {
        $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, '__sleep', array(), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;

        return array('valueHoldera510b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5a03e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5a03e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5a03e && ($this->initializer5a03e->__invoke($valueHoldera510b, $this, 'initializeProxy', array(), $this->initializer5a03e) || 1) && $this->valueHoldera510b = $valueHoldera510b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera510b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera510b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
