<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname(dirname($vendorDir));

return array(
    'App\\AppManager' => $baseDir . '/app/app/AppManager.php',
    'App\\BaseException' => $baseDir . '/app/app/BaseException.php',
    'App\\Config' => $baseDir . '/app/app/Config.php',
    'App\\Database' => $baseDir . '/app/app/Database.php',
    'App\\Exceptions\\Contract\\ExceptionContract' => $baseDir . '/app/app/Exceptions/Contract/ExceptionContract.php',
    'App\\Exceptions\\ControllerNotFoundException' => $baseDir . '/app/app/Exceptions/ControllerNotFoundException.php',
    'App\\Exceptions\\MethodNotFoundException' => $baseDir . '/app/app/Exceptions/MethodNotFoundException.php',
    'App\\Finder' => $baseDir . '/app/app/Finder.php',
    'Kit\\Cache\\CacheManager' => $vendorDir . '/phoxphp/cache/src/CacheManager.php',
    'Kit\\Cache\\Configuration' => $vendorDir . '/phoxphp/cache/src/Configuration.php',
    'Kit\\Cache\\Contract\\CacheDriverContract' => $vendorDir . '/phoxphp/cache/src/Contract/CacheDriverContract.php',
    'Kit\\Cache\\Drivers\\Apc' => $vendorDir . '/phoxphp/cache/src/Drivers/Apc.php',
    'Kit\\Cache\\Drivers\\File' => $vendorDir . '/phoxphp/cache/src/Drivers/File.php',
    'Kit\\Cache\\Exceptions\\InvalidCacheDriverException' => $vendorDir . '/phoxphp/cache/src/Exceptions/InvalidCacheDriverException.php',
    'Kit\\DependencyInjection\\AccessBag' => $vendorDir . '/phoxphp/dependency-injection/src/AccessBag.php',
    'Kit\\DependencyInjection\\Bag' => $vendorDir . '/phoxphp/dependency-injection/src/Bag.php',
    'Kit\\DependencyInjection\\Builder' => $vendorDir . '/phoxphp/dependency-injection/src/Builder.php',
    'Kit\\DependencyInjection\\ConfigLoader' => $vendorDir . '/phoxphp/dependency-injection/src/ConfigLoader.php',
    'Kit\\DependencyInjection\\Exceptions\\InvalidServiceCallbackTypeException' => $vendorDir . '/phoxphp/dependency-injection/src/Exceptions/InvalidServiceCallbackTypeException.php',
    'Kit\\DependencyInjection\\Exceptions\\ServiceNotAllowedException' => $vendorDir . '/phoxphp/dependency-injection/src/Exceptions/ServiceNotAllowedException.php',
    'Kit\\DependencyInjection\\Exceptions\\ServiceNotFoundException' => $vendorDir . '/phoxphp/dependency-injection/src/Exceptions/ServiceNotFoundException.php',
    'Kit\\DependencyInjection\\Factory' => $vendorDir . '/phoxphp/dependency-injection/src/Factory.php',
    'Kit\\DependencyInjection\\Injector\\InjectorBridge' => $vendorDir . '/phoxphp/dependency-injection/src/Injector/InjectorBridge.php',
    'Kit\\DependencyInjection\\MethodBag' => $vendorDir . '/phoxphp/dependency-injection/src/MethodBag.php',
    'Kit\\DependencyInjection\\ParameterBag' => $vendorDir . '/phoxphp/dependency-injection/src/ParameterBag.php',
    'Kit\\FileSystem\\Directory\\DirectoryManager' => $vendorDir . '/phoxphp/filesystem/src/Directory/DirectoryManager.php',
    'Kit\\FileSystem\\Exceptions\\BadPermissionException' => $vendorDir . '/phoxphp/filesystem/src/Exceptions/BadPermissionException.php',
    'Kit\\FileSystem\\Exceptions\\FileNotFoundException' => $vendorDir . '/phoxphp/filesystem/src/Exceptions/FileNotFoundException.php',
    'Kit\\FileSystem\\File\\FileManager' => $vendorDir . '/phoxphp/filesystem/src/File/FileManager.php',
    'Kit\\FileSystem\\File\\Reader' => $vendorDir . '/phoxphp/filesystem/src/File/Reader.php',
    'Kit\\FileSystem\\File\\Writer' => $vendorDir . '/phoxphp/filesystem/src/File/Writer.php',
    'Kit\\FileSystem\\Manager' => $vendorDir . '/phoxphp/filesystem/src/Manager.php',
    'Kit\\FileSystem\\Permission\\Contracts\\Permittable' => $vendorDir . '/phoxphp/filesystem/src/Permission/Contracts/Permittable.php',
    'Kit\\FileSystem\\Permission\\PermissionMaker' => $vendorDir . '/phoxphp/filesystem/src/Permission/PermissionMaker.php',
    'Kit\\Glider\\ClassLoader' => $vendorDir . '/phoxphp/glider/src/ClassLoader.php',
    'Kit\\Glider\\Configurator' => $vendorDir . '/phoxphp/glider/src/Configurator.php',
    'Kit\\Glider\\Connection\\ActiveConnection' => $vendorDir . '/phoxphp/glider/src/Connection/ActiveConnection.php',
    'Kit\\Glider\\Connection\\ConnectionLoader' => $vendorDir . '/phoxphp/glider/src/Connection/ConnectionLoader.php',
    'Kit\\Glider\\Connection\\ConnectionManager' => $vendorDir . '/phoxphp/glider/src/Connection/ConnectionManager.php',
    'Kit\\Glider\\Connection\\Contract\\ConnectionInterface' => $vendorDir . '/phoxphp/glider/src/Connection/Contract/ConnectionInterface.php',
    'Kit\\Glider\\Connection\\Domain' => $vendorDir . '/phoxphp/glider/src/Connection/Domain.php',
    'Kit\\Glider\\Connection\\PlatformResolver' => $vendorDir . '/phoxphp/glider/src/Connection/PlatformResolver.php',
    'Kit\\Glider\\Connection\\QueuedConnections' => $vendorDir . '/phoxphp/glider/src/Connection/QueuedConnections.php',
    'Kit\\Glider\\Connectors\\Contract\\ConnectorProvider' => $vendorDir . '/phoxphp/glider/src/Connectors/Contract/ConnectorProvider.php',
    'Kit\\Glider\\Connectors\\Mysqli\\MysqliConnector' => $vendorDir . '/phoxphp/glider/src/Connectors/Mysqli/MysqliConnector.php',
    'Kit\\Glider\\Connectors\\Pdo\\PdoConnector' => $vendorDir . '/phoxphp/glider/src/Connectors/Pdo/PdoConnector.php',
    'Kit\\Glider\\Contract\\ConfiguratorInterface' => $vendorDir . '/phoxphp/glider/src/Contract/ConfiguratorInterface.php',
    'Kit\\Glider\\Events\\Contract\\Subscriber' => $vendorDir . '/phoxphp/glider/src/Events/Contract/Subscriber.php',
    'Kit\\Glider\\Events\\EventManager' => $vendorDir . '/phoxphp/glider/src/Events/EventManager.php',
    'Kit\\Glider\\Events\\Subscribers\\BuildEventsSubscriber' => $vendorDir . '/phoxphp/glider/src/Events/Subscribers/BuildEventsSubscriber.php',
    'Kit\\Glider\\Events\\Subscribers\\ConnectionAttemptSubscriber' => $vendorDir . '/phoxphp/glider/src/Events/Subscribers/ConnectionAttemptSubscriber.php',
    'Kit\\Glider\\Exceptions\\ConnectionFailedException' => $vendorDir . '/phoxphp/glider/src/Exceptions/ConnectionFailedException.php',
    'Kit\\Glider\\Platform\\Contract\\PlatformProvider' => $vendorDir . '/phoxphp/glider/src/Platform/Contract/PlatformProvider.php',
    'Kit\\Glider\\Platform\\Mysqli\\MysqliProvider' => $vendorDir . '/phoxphp/glider/src/Platform/Mysqli/MysqliProvider.php',
    'Kit\\Glider\\Platform\\Pdo\\PdoProvider' => $vendorDir . '/phoxphp/glider/src/Platform/Pdo/PdoProvider.php',
    'Kit\\Glider\\Processor\\AbstractProcessorProvider' => $vendorDir . '/phoxphp/glider/src/Processor/AbstractProcessorProvider.php',
    'Kit\\Glider\\Processor\\Contract\\ProcessorProvider' => $vendorDir . '/phoxphp/glider/src/Processor/Contract/ProcessorProvider.php',
    'Kit\\Glider\\Processor\\Exceptions\\QueryException' => $vendorDir . '/phoxphp/glider/src/Processor/Exceptions/QueryException.php',
    'Kit\\Glider\\Processor\\Mysqli\\MysqliProcessor' => $vendorDir . '/phoxphp/glider/src/Processor/Mysqli/MysqliProcessor.php',
    'Kit\\Glider\\Processor\\Pdo\\PdoProcessor' => $vendorDir . '/phoxphp/glider/src/Processor/Pdo/PdoProcessor.php',
    'Kit\\Glider\\Query\\Builder\\Contract\\QueryBuilderProvider' => $vendorDir . '/phoxphp/glider/src/Query/Builder/Contract/QueryBuilderProvider.php',
    'Kit\\Glider\\Query\\Builder\\QueryBinder' => $vendorDir . '/phoxphp/glider/src/Query/Builder/QueryBinder.php',
    'Kit\\Glider\\Query\\Builder\\QueryBuilder' => $vendorDir . '/phoxphp/glider/src/Query/Builder/QueryBuilder.php',
    'Kit\\Glider\\Query\\Builder\\SqlGenerator' => $vendorDir . '/phoxphp/glider/src/Query/Builder/SqlGenerator.php',
    'Kit\\Glider\\Query\\Builder\\Type' => $vendorDir . '/phoxphp/glider/src/Query/Builder/Type.php',
    'Kit\\Glider\\Query\\Exceptions\\InvalidParameterCountException' => $vendorDir . '/phoxphp/glider/src/Query/Exceptions/InvalidParameterCountException.php',
    'Kit\\Glider\\Query\\Exceptions\\ParameterNotFoundException' => $vendorDir . '/phoxphp/glider/src/Query/Exceptions/ParameterNotFoundException.php',
    'Kit\\Glider\\Query\\Parameters' => $vendorDir . '/phoxphp/glider/src/Query/Parameters.php',
    'Kit\\Glider\\Repository' => $vendorDir . '/phoxphp/glider/src/Repository.php',
    'Kit\\Glider\\Result\\Collection' => $vendorDir . '/phoxphp/glider/src/Result/Collection.php',
    'Kit\\Glider\\Result\\Contract\\CollectionContract' => $vendorDir . '/phoxphp/glider/src/Result/Contract/CollectionContract.php',
    'Kit\\Glider\\Result\\Contract\\PlatformResultContract' => $vendorDir . '/phoxphp/glider/src/Result/Contract/PlatformResultContract.php',
    'Kit\\Glider\\Result\\Contract\\ResultMapperContract' => $vendorDir . '/phoxphp/glider/src/Result/Contract/ResultMapperContract.php',
    'Kit\\Glider\\Result\\Exceptions\\FunctionNotFoundException' => $vendorDir . '/phoxphp/glider/src/Result/Exceptions/FunctionNotFoundException.php',
    'Kit\\Glider\\Result\\Exceptions\\InvalidPropertyAccessException' => $vendorDir . '/phoxphp/glider/src/Result/Exceptions/InvalidPropertyAccessException.php',
    'Kit\\Glider\\Result\\Mappers\\DataResultMapper' => $vendorDir . '/phoxphp/glider/src/Result/Mappers/DataResultMapper.php',
    'Kit\\Glider\\Result\\Platforms\\MysqliResult' => $vendorDir . '/phoxphp/glider/src/Result/Platforms/MysqliResult.php',
    'Kit\\Glider\\Result\\ResultMapper' => $vendorDir . '/phoxphp/glider/src/Result/ResultMapper.php',
    'Kit\\Glider\\Schema\\Column\\Contract\\ColumnContract' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Contract/ColumnContract.php',
    'Kit\\Glider\\Schema\\Column\\Index\\Contract\\IndexContract' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Index/Contract/IndexContract.php',
    'Kit\\Glider\\Schema\\Column\\Index\\MysqliIndex' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Index/MysqliIndex.php',
    'Kit\\Glider\\Schema\\Column\\Platform\\MysqliColumn' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Platform/MysqliColumn.php',
    'Kit\\Glider\\Schema\\Column\\Type' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type.php',
    'Kit\\Glider\\Schema\\Column\\Type\\BaseType' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type/BaseType.php',
    'Kit\\Glider\\Schema\\Column\\Type\\BigInt' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type/BigInt.php',
    'Kit\\Glider\\Schema\\Column\\Type\\Bit' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type/Bit.php',
    'Kit\\Glider\\Schema\\Column\\Type\\Blob' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type/Blob.php',
    'Kit\\Glider\\Schema\\Column\\Type\\Char' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type/Char.php',
    'Kit\\Glider\\Schema\\Column\\Type\\Contract\\TypeContract' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type/Contract/TypeContract.php',
    'Kit\\Glider\\Schema\\Column\\Type\\Decimal' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type/Decimal.php',
    'Kit\\Glider\\Schema\\Column\\Type\\Double' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type/Double.php',
    'Kit\\Glider\\Schema\\Column\\Type\\Integer' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type/Integer.php',
    'Kit\\Glider\\Schema\\Column\\Type\\LongBlob' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type/LongBlob.php',
    'Kit\\Glider\\Schema\\Column\\Type\\LongText' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type/LongText.php',
    'Kit\\Glider\\Schema\\Column\\Type\\MediumBlob' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type/MediumBlob.php',
    'Kit\\Glider\\Schema\\Column\\Type\\MediumInt' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type/MediumInt.php',
    'Kit\\Glider\\Schema\\Column\\Type\\MediumText' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type/MediumText.php',
    'Kit\\Glider\\Schema\\Column\\Type\\SmallInt' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type/SmallInt.php',
    'Kit\\Glider\\Schema\\Column\\Type\\Text' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type/Text.php',
    'Kit\\Glider\\Schema\\Column\\Type\\TinyInt' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type/TinyInt.php',
    'Kit\\Glider\\Schema\\Column\\Type\\TinyText' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type/TinyText.php',
    'Kit\\Glider\\Schema\\Column\\Type\\Varchar' => $vendorDir . '/phoxphp/glider/src/Schema/Column/Type/Varchar.php',
    'Kit\\Glider\\Schema\\Contract\\BaseTableContract' => $vendorDir . '/phoxphp/glider/src/Schema/Contract/BaseTableContract.php',
    'Kit\\Glider\\Schema\\Contract\\SchemaManagerContract' => $vendorDir . '/phoxphp/glider/src/Schema/Contract/SchemaManagerContract.php',
    'Kit\\Glider\\Schema\\Expressions' => $vendorDir . '/phoxphp/glider/src/Schema/Expressions.php',
    'Kit\\Glider\\Schema\\Platforms\\MysqliSchemaManager' => $vendorDir . '/phoxphp/glider/src/Schema/Platforms/MysqliSchemaManager.php',
    'Kit\\Glider\\Schema\\Platforms\\PdoSchemaManager' => $vendorDir . '/phoxphp/glider/src/Schema/Platforms/PdoSchemaManager.php',
    'Kit\\Glider\\Schema\\SchemaManager' => $vendorDir . '/phoxphp/glider/src/Schema/SchemaManager.php',
    'Kit\\Glider\\Schema\\Scheme' => $vendorDir . '/phoxphp/glider/src/Schema/Scheme.php',
    'Kit\\Glider\\Schema\\Table' => $vendorDir . '/phoxphp/glider/src/Schema/Table.php',
    'Kit\\Glider\\Statements\\Contract\\StatementContract' => $vendorDir . '/phoxphp/glider/src/Statements/Contract/StatementContract.php',
    'Kit\\Glider\\Statements\\Exceptions\\QueryException' => $vendorDir . '/phoxphp/glider/src/Statements/Exceptions/QueryException.php',
    'Kit\\Glider\\Statements\\Platforms\\MysqliStatement' => $vendorDir . '/phoxphp/glider/src/Statements/Platforms/MysqliStatement.php',
    'Kit\\Glider\\Transactions\\Contract\\TransactionProvider' => $vendorDir . '/phoxphp/glider/src/Transactions/Contract/TransactionProvider.php',
    'Kit\\Glider\\Transactions\\Mysqli\\MysqliTransaction' => $vendorDir . '/phoxphp/glider/src/Transactions/Mysqli/MysqliTransaction.php',
    'Kit\\Glider\\Transactions\\Pdo\\PdoTransaction' => $vendorDir . '/phoxphp/glider/src/Transactions/Pdo/PdoTransaction.php',
    'Kit\\Http\\Controller' => $vendorDir . '/phoxphp/http/src/Controller.php',
    'Kit\\Http\\Cookie' => $vendorDir . '/phoxphp/http/src/Cookie.php',
    'Kit\\Http\\Request\\Exceptions\\InvalidAuthenticationTypeException' => $vendorDir . '/phoxphp/http/src/Request/Exceptions/InvalidAuthenticationType.php',
    'Kit\\Http\\Request\\ProxyManager' => $vendorDir . '/phoxphp/http/src/Request/ProxyManager.php',
    'Kit\\Http\\Request\\RequestManager' => $vendorDir . '/phoxphp/http/src/Request/RequestManager.php',
    'Kit\\Http\\Response' => $vendorDir . '/phoxphp/http/src/Response.php',
    'Kit\\Http\\Router\\Alias' => $vendorDir . '/phoxphp/http/src/Router/Alias.php',
    'Kit\\Http\\Router\\Bag' => $vendorDir . '/phoxphp/http/src/Router/Bag.php',
    'Kit\\Http\\Router\\Builder' => $vendorDir . '/phoxphp/http/src/Router/Builder.php',
    'Kit\\Http\\Router\\Config' => $vendorDir . '/phoxphp/http/src/Router/Config.php',
    'Kit\\Http\\Router\\Dispatcher' => $vendorDir . '/phoxphp/http/src/Router/Dispatcher.php',
    'Kit\\Http\\Router\\Exceptions\\InvalidParameterMatchException' => $vendorDir . '/phoxphp/http/src/Router/Exceptions/InvalidParameterMatchException.php',
    'Kit\\Http\\Router\\Exceptions\\InvalidValidatorSizeException' => $vendorDir . '/phoxphp/http/src/Router/Exceptions/InvalidValidatorSizeException.php',
    'Kit\\Http\\Router\\Exceptions\\RouteNotFoundException' => $vendorDir . '/phoxphp/http/src/Router/Exceptions/RouteNotFoundException.php',
    'Kit\\Http\\Router\\Factory' => $vendorDir . '/phoxphp/http/src/Router/Factory.php',
    'Kit\\Http\\Router\\Interfaces\\Dispatchable' => $vendorDir . '/phoxphp/http/src/Router/Interfaces/Dispatchable.php',
    'Kit\\Http\\Router\\Interfaces\\DispatcherInterface' => $vendorDir . '/phoxphp/http/src/Router/Interfaces/DispatcherInterface.php',
    'Kit\\Http\\Router\\Interfaces\\RouterInterface' => $vendorDir . '/phoxphp/http/src/Router/Interfaces/RouterInterface.php',
    'Kit\\Http\\Router\\QueryStringConnector' => $vendorDir . '/phoxphp/http/src/Router/QueryStringConnector.php',
    'Kit\\Http\\Router\\Validators\\Bag' => $vendorDir . '/phoxphp/http/src/Router/Validators/Bag.php',
    'Kit\\Http\\Router\\Validators\\Interfaces\\ValidatorInterface' => $vendorDir . '/phoxphp/http/src/Router/Validators/Interfaces/ValidatorInterface.php',
    'Kit\\Http\\Router\\Validators\\RouteCallbackTypeValidator' => $vendorDir . '/phoxphp/http/src/Router/Validators/RouteCallbackTypeValidator.php',
    'Kit\\Http\\Router\\Validators\\RouteParameterValidator' => $vendorDir . '/phoxphp/http/src/Router/Validators/RouteParameterValidator.php',
    'Kit\\Http\\Session\\Drivers\\Interfaces\\DriverInterface' => $vendorDir . '/phoxphp/http/src/Session/Drivers/Interfaces/DriverInterface.php',
    'Kit\\Http\\Session\\Drivers\\NativeDriver' => $vendorDir . '/phoxphp/http/src/Session/Drivers/NativeDriver.php',
    'Kit\\Http\\Session\\Drivers\\NativeDriverCommand' => $vendorDir . '/phoxphp/http/src/Session/Drivers/NativeDriver.php',
    'Kit\\Http\\Session\\Factory' => $vendorDir . '/phoxphp/http/src/Session/Factory.php',
    'Kit\\Log\\Adapters\\FileLogger' => $vendorDir . '/phoxphp/log/src/Adapters/FileLogger.php',
    'Kit\\Log\\Contract\\LogContract' => $vendorDir . '/phoxphp/log/src/Contract/LogContract.php',
    'Kit\\Log\\Formats\\Contract\\AbstractFormatContract' => $vendorDir . '/phoxphp/log/src/Formats/Contract/AbstractFormatContract.php',
    'Kit\\Log\\Formats\\JsonFormat' => $vendorDir . '/phoxphp/log/src/Formats/JsonFormat.php',
    'Kit\\Log\\Formats\\TextFormat' => $vendorDir . '/phoxphp/log/src/Formats/TextFormat.php',
    'Kit\\Log\\LogLevel' => $vendorDir . '/phoxphp/log/src/LogLevel.php',
    'Kit\\Log\\Logger' => $vendorDir . '/phoxphp/log/src/Logger.php',
    'Kit\\Prop\\ClassLoader' => $vendorDir . '/phoxphp/prop/src/ClassLoader.php',
    'Kit\\Translation\\Exceptions\\BadConfigurationSourceException' => $vendorDir . '/phoxphp/translation/src/Exceptions/BadConfigurationSourceException.php',
    'Kit\\Translation\\Exceptions\\MissingParameterException' => $vendorDir . '/phoxphp/translation/src/Exceptions/MissingParameterException.php',
    'Kit\\Translation\\Exceptions\\ResourceNotFoundException' => $vendorDir . '/phoxphp/translation/src/Exceptions/ResourceNotFoundException.php',
    'Kit\\Translation\\Factory' => $vendorDir . '/phoxphp/translation/src/Factory.php',
    'Kit\\Translation\\Locale\\Interfaces\\LocaleInterface' => $vendorDir . '/phoxphp/translation/src/Locale/Interfaces/LocaleInterface.php',
    'Kit\\Translation\\Locale\\Interfaces\\MessageInterface' => $vendorDir . '/phoxphp/translation/src/Locale/Interfaces/MessageInterface.php',
    'Kit\\Translation\\Locale\\Interfaces\\ResourceParserInterface' => $vendorDir . '/phoxphp/translation/src/Locale/Interfaces/ResourceParserInterface.php',
    'Kit\\Translation\\Locale\\LocaleManager' => $vendorDir . '/phoxphp/translation/src/Locale/LocaleManager.php',
    'Kit\\Translation\\Locale\\Message' => $vendorDir . '/phoxphp/translation/src/Locale/Message.php',
    'Kit\\Translation\\Locale\\ResourceParser' => $vendorDir . '/phoxphp/translation/src/Locale/ResourceParser.php',
    'Kit\\View\\ArgResolver' => $vendorDir . '/phoxphp/view/src/ArgResolver.php',
    'Kit\\View\\Engines\\PHView\\Config' => $vendorDir . '/phoxphp/view/src/Engines/PHView/Config.php',
    'Kit\\View\\Engines\\PHView\\Contracts\\PHViewContract' => $vendorDir . '/phoxphp/view/src/Engines/PHView/Contracts/PHViewContract.php',
    'Kit\\View\\Engines\\PHView\\Exceptions\\FileNotFoundException' => $vendorDir . '/phoxphp/view/src/Engines/PHView/Exceptions/FileNotFoundException.php',
    'Kit\\View\\Engines\\PHView\\Layout' => $vendorDir . '/phoxphp/view/src/Engines/PHView/Layout.php',
    'Kit\\View\\Engines\\PHView\\Repository' => $vendorDir . '/phoxphp/view/src/Engines/PHView/Repository.php',
    'Kit\\View\\Engines\\PHView\\View' => $vendorDir . '/phoxphp/view/src/Engines/PHView/View.php',
    'Kit\\View\\Manager' => $vendorDir . '/phoxphp/view/src/Manager.php',
);
