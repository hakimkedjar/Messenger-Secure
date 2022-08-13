<?php

namespace ContainerR2smRWz;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4b269 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4c5fe = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesee42b = [
        
    ];

    public function getConnection()
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'getConnection', array(), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'getMetadataFactory', array(), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'getExpressionBuilder', array(), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'beginTransaction', array(), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'getCache', array(), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'transactional', array('func' => $func), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'commit', array(), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->commit();
    }

    public function rollback()
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'rollback', array(), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'getClassMetadata', array('className' => $className), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'createQuery', array('dql' => $dql), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'createNamedQuery', array('name' => $name), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'createQueryBuilder', array(), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'flush', array('entity' => $entity), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'clear', array('entityName' => $entityName), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->clear($entityName);
    }

    public function close()
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'close', array(), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->close();
    }

    public function persist($entity)
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'persist', array('entity' => $entity), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'remove', array('entity' => $entity), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'refresh', array('entity' => $entity), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'detach', array('entity' => $entity), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'merge', array('entity' => $entity), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'contains', array('entity' => $entity), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'getEventManager', array(), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'getConfiguration', array(), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'isOpen', array(), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'getUnitOfWork', array(), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'getProxyFactory', array(), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'initializeObject', array('obj' => $obj), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'getFilters', array(), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'isFiltersStateClean', array(), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'hasFilters', array(), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return $this->valueHolder4b269->hasFilters();
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

        $instance->initializer4c5fe = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4b269) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4b269 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4b269->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, '__get', ['name' => $name], $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        if (isset(self::$publicPropertiesee42b[$name])) {
            return $this->valueHolder4b269->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4b269;

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

        $targetObject = $this->valueHolder4b269;
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
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4b269;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4b269;
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
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, '__isset', array('name' => $name), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4b269;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4b269;
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
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, '__unset', array('name' => $name), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4b269;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4b269;
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
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, '__clone', array(), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        $this->valueHolder4b269 = clone $this->valueHolder4b269;
    }

    public function __sleep()
    {
        $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, '__sleep', array(), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;

        return array('valueHolder4b269');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4c5fe = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4c5fe;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4c5fe && ($this->initializer4c5fe->__invoke($valueHolder4b269, $this, 'initializeProxy', array(), $this->initializer4c5fe) || 1) && $this->valueHolder4b269 = $valueHolder4b269;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4b269;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4b269;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
