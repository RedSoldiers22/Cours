<?php

namespace ContainerFBN6iAX;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd1770 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer67fe7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties97b80 = [
        
    ];

    public function getConnection()
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'getConnection', array(), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'getMetadataFactory', array(), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'getExpressionBuilder', array(), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'beginTransaction', array(), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'getCache', array(), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->getCache();
    }

    public function transactional($func)
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'transactional', array('func' => $func), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'wrapInTransaction', array('func' => $func), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'commit', array(), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->commit();
    }

    public function rollback()
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'rollback', array(), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'getClassMetadata', array('className' => $className), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'createQuery', array('dql' => $dql), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'createNamedQuery', array('name' => $name), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'createQueryBuilder', array(), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'flush', array('entity' => $entity), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'clear', array('entityName' => $entityName), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->clear($entityName);
    }

    public function close()
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'close', array(), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->close();
    }

    public function persist($entity)
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'persist', array('entity' => $entity), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'remove', array('entity' => $entity), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'refresh', array('entity' => $entity), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'detach', array('entity' => $entity), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'merge', array('entity' => $entity), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'getRepository', array('entityName' => $entityName), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'contains', array('entity' => $entity), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'getEventManager', array(), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'getConfiguration', array(), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'isOpen', array(), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'getUnitOfWork', array(), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'getProxyFactory', array(), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'initializeObject', array('obj' => $obj), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'getFilters', array(), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'isFiltersStateClean', array(), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'hasFilters', array(), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return $this->valueHolderd1770->hasFilters();
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

        $instance->initializer67fe7 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd1770) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd1770 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd1770->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, '__get', ['name' => $name], $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        if (isset(self::$publicProperties97b80[$name])) {
            return $this->valueHolderd1770->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd1770;

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

        $targetObject = $this->valueHolderd1770;
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
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd1770;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd1770;
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
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, '__isset', array('name' => $name), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd1770;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd1770;
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
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, '__unset', array('name' => $name), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd1770;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd1770;
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
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, '__clone', array(), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        $this->valueHolderd1770 = clone $this->valueHolderd1770;
    }

    public function __sleep()
    {
        $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, '__sleep', array(), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;

        return array('valueHolderd1770');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer67fe7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer67fe7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer67fe7 && ($this->initializer67fe7->__invoke($valueHolderd1770, $this, 'initializeProxy', array(), $this->initializer67fe7) || 1) && $this->valueHolderd1770 = $valueHolderd1770;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd1770;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd1770;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
