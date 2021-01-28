<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Annotations\\Json\\JsonDeclare' => $baseDir . '/core/annotations/jsonDeclare.php',
    'Annotations\\MER\\Coluna' => $baseDir . '/core/annotations/coluna.php',
    'Annotations\\MER\\Id' => $baseDir . '/core/annotations/id.php',
    'Annotations\\MER\\Tabela' => $baseDir . '/core/annotations/tabela.php',
    'Controllers\\ControllerTemplate' => $baseDir . '/core/controllers/controllertemplate.php',
    'Controllers\\Pessoa' => $baseDir . '/core/controllers/pessoa.php',
    'DI\\Annotation\\Inject' => $vendorDir . '/php-di/php-di/src/Annotation/Inject.php',
    'DI\\Annotation\\Injectable' => $vendorDir . '/php-di/php-di/src/Annotation/Injectable.php',
    'DI\\CompiledContainer' => $vendorDir . '/php-di/php-di/src/CompiledContainer.php',
    'DI\\Compiler\\Compiler' => $vendorDir . '/php-di/php-di/src/Compiler/Compiler.php',
    'DI\\Compiler\\ObjectCreationCompiler' => $vendorDir . '/php-di/php-di/src/Compiler/ObjectCreationCompiler.php',
    'DI\\Compiler\\RequestedEntryHolder' => $vendorDir . '/php-di/php-di/src/Compiler/RequestedEntryHolder.php',
    'DI\\Container' => $vendorDir . '/php-di/php-di/src/Container.php',
    'DI\\ContainerBuilder' => $vendorDir . '/php-di/php-di/src/ContainerBuilder.php',
    'DI\\Definition\\ArrayDefinition' => $vendorDir . '/php-di/php-di/src/Definition/ArrayDefinition.php',
    'DI\\Definition\\ArrayDefinitionExtension' => $vendorDir . '/php-di/php-di/src/Definition/ArrayDefinitionExtension.php',
    'DI\\Definition\\AutowireDefinition' => $vendorDir . '/php-di/php-di/src/Definition/AutowireDefinition.php',
    'DI\\Definition\\DecoratorDefinition' => $vendorDir . '/php-di/php-di/src/Definition/DecoratorDefinition.php',
    'DI\\Definition\\Definition' => $vendorDir . '/php-di/php-di/src/Definition/Definition.php',
    'DI\\Definition\\Dumper\\ObjectDefinitionDumper' => $vendorDir . '/php-di/php-di/src/Definition/Dumper/ObjectDefinitionDumper.php',
    'DI\\Definition\\EnvironmentVariableDefinition' => $vendorDir . '/php-di/php-di/src/Definition/EnvironmentVariableDefinition.php',
    'DI\\Definition\\Exception\\InvalidAnnotation' => $vendorDir . '/php-di/php-di/src/Definition/Exception/InvalidAnnotation.php',
    'DI\\Definition\\Exception\\InvalidDefinition' => $vendorDir . '/php-di/php-di/src/Definition/Exception/InvalidDefinition.php',
    'DI\\Definition\\ExtendsPreviousDefinition' => $vendorDir . '/php-di/php-di/src/Definition/ExtendsPreviousDefinition.php',
    'DI\\Definition\\FactoryDefinition' => $vendorDir . '/php-di/php-di/src/Definition/FactoryDefinition.php',
    'DI\\Definition\\Helper\\AutowireDefinitionHelper' => $vendorDir . '/php-di/php-di/src/Definition/Helper/AutowireDefinitionHelper.php',
    'DI\\Definition\\Helper\\CreateDefinitionHelper' => $vendorDir . '/php-di/php-di/src/Definition/Helper/CreateDefinitionHelper.php',
    'DI\\Definition\\Helper\\DefinitionHelper' => $vendorDir . '/php-di/php-di/src/Definition/Helper/DefinitionHelper.php',
    'DI\\Definition\\Helper\\FactoryDefinitionHelper' => $vendorDir . '/php-di/php-di/src/Definition/Helper/FactoryDefinitionHelper.php',
    'DI\\Definition\\InstanceDefinition' => $vendorDir . '/php-di/php-di/src/Definition/InstanceDefinition.php',
    'DI\\Definition\\ObjectDefinition' => $vendorDir . '/php-di/php-di/src/Definition/ObjectDefinition.php',
    'DI\\Definition\\ObjectDefinition\\MethodInjection' => $vendorDir . '/php-di/php-di/src/Definition/ObjectDefinition/MethodInjection.php',
    'DI\\Definition\\ObjectDefinition\\PropertyInjection' => $vendorDir . '/php-di/php-di/src/Definition/ObjectDefinition/PropertyInjection.php',
    'DI\\Definition\\Reference' => $vendorDir . '/php-di/php-di/src/Definition/Reference.php',
    'DI\\Definition\\Resolver\\ArrayResolver' => $vendorDir . '/php-di/php-di/src/Definition/Resolver/ArrayResolver.php',
    'DI\\Definition\\Resolver\\DecoratorResolver' => $vendorDir . '/php-di/php-di/src/Definition/Resolver/DecoratorResolver.php',
    'DI\\Definition\\Resolver\\DefinitionResolver' => $vendorDir . '/php-di/php-di/src/Definition/Resolver/DefinitionResolver.php',
    'DI\\Definition\\Resolver\\EnvironmentVariableResolver' => $vendorDir . '/php-di/php-di/src/Definition/Resolver/EnvironmentVariableResolver.php',
    'DI\\Definition\\Resolver\\FactoryResolver' => $vendorDir . '/php-di/php-di/src/Definition/Resolver/FactoryResolver.php',
    'DI\\Definition\\Resolver\\InstanceInjector' => $vendorDir . '/php-di/php-di/src/Definition/Resolver/InstanceInjector.php',
    'DI\\Definition\\Resolver\\ObjectCreator' => $vendorDir . '/php-di/php-di/src/Definition/Resolver/ObjectCreator.php',
    'DI\\Definition\\Resolver\\ParameterResolver' => $vendorDir . '/php-di/php-di/src/Definition/Resolver/ParameterResolver.php',
    'DI\\Definition\\Resolver\\ResolverDispatcher' => $vendorDir . '/php-di/php-di/src/Definition/Resolver/ResolverDispatcher.php',
    'DI\\Definition\\SelfResolvingDefinition' => $vendorDir . '/php-di/php-di/src/Definition/SelfResolvingDefinition.php',
    'DI\\Definition\\Source\\AnnotationBasedAutowiring' => $vendorDir . '/php-di/php-di/src/Definition/Source/AnnotationBasedAutowiring.php',
    'DI\\Definition\\Source\\Autowiring' => $vendorDir . '/php-di/php-di/src/Definition/Source/Autowiring.php',
    'DI\\Definition\\Source\\DefinitionArray' => $vendorDir . '/php-di/php-di/src/Definition/Source/DefinitionArray.php',
    'DI\\Definition\\Source\\DefinitionFile' => $vendorDir . '/php-di/php-di/src/Definition/Source/DefinitionFile.php',
    'DI\\Definition\\Source\\DefinitionNormalizer' => $vendorDir . '/php-di/php-di/src/Definition/Source/DefinitionNormalizer.php',
    'DI\\Definition\\Source\\DefinitionSource' => $vendorDir . '/php-di/php-di/src/Definition/Source/DefinitionSource.php',
    'DI\\Definition\\Source\\MutableDefinitionSource' => $vendorDir . '/php-di/php-di/src/Definition/Source/MutableDefinitionSource.php',
    'DI\\Definition\\Source\\NoAutowiring' => $vendorDir . '/php-di/php-di/src/Definition/Source/NoAutowiring.php',
    'DI\\Definition\\Source\\ReflectionBasedAutowiring' => $vendorDir . '/php-di/php-di/src/Definition/Source/ReflectionBasedAutowiring.php',
    'DI\\Definition\\Source\\SourceCache' => $vendorDir . '/php-di/php-di/src/Definition/Source/SourceCache.php',
    'DI\\Definition\\Source\\SourceChain' => $vendorDir . '/php-di/php-di/src/Definition/Source/SourceChain.php',
    'DI\\Definition\\StringDefinition' => $vendorDir . '/php-di/php-di/src/Definition/StringDefinition.php',
    'DI\\Definition\\ValueDefinition' => $vendorDir . '/php-di/php-di/src/Definition/ValueDefinition.php',
    'DI\\DependencyException' => $vendorDir . '/php-di/php-di/src/DependencyException.php',
    'DI\\FactoryInterface' => $vendorDir . '/php-di/php-di/src/FactoryInterface.php',
    'DI\\Factory\\RequestedEntry' => $vendorDir . '/php-di/php-di/src/Factory/RequestedEntry.php',
    'DI\\Invoker\\DefinitionParameterResolver' => $vendorDir . '/php-di/php-di/src/Invoker/DefinitionParameterResolver.php',
    'DI\\Invoker\\FactoryParameterResolver' => $vendorDir . '/php-di/php-di/src/Invoker/FactoryParameterResolver.php',
    'DI\\NotFoundException' => $vendorDir . '/php-di/php-di/src/NotFoundException.php',
    'DI\\Proxy\\ProxyFactory' => $vendorDir . '/php-di/php-di/src/Proxy/ProxyFactory.php',
    'Doctrine\\Common\\Annotations\\Annotation' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation.php',
    'Doctrine\\Common\\Annotations\\AnnotationException' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationException.php',
    'Doctrine\\Common\\Annotations\\AnnotationReader' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationReader.php',
    'Doctrine\\Common\\Annotations\\AnnotationRegistry' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationRegistry.php',
    'Doctrine\\Common\\Annotations\\Annotation\\Attribute' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation/Attribute.php',
    'Doctrine\\Common\\Annotations\\Annotation\\Attributes' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation/Attributes.php',
    'Doctrine\\Common\\Annotations\\Annotation\\Enum' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation/Enum.php',
    'Doctrine\\Common\\Annotations\\Annotation\\IgnoreAnnotation' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation/IgnoreAnnotation.php',
    'Doctrine\\Common\\Annotations\\Annotation\\Required' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation/Required.php',
    'Doctrine\\Common\\Annotations\\Annotation\\Target' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation/Target.php',
    'Doctrine\\Common\\Annotations\\CachedReader' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/CachedReader.php',
    'Doctrine\\Common\\Annotations\\DocLexer' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/DocLexer.php',
    'Doctrine\\Common\\Annotations\\DocParser' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/DocParser.php',
    'Doctrine\\Common\\Annotations\\FileCacheReader' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/FileCacheReader.php',
    'Doctrine\\Common\\Annotations\\ImplicitlyIgnoredAnnotationNames' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/ImplicitlyIgnoredAnnotationNames.php',
    'Doctrine\\Common\\Annotations\\IndexedReader' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/IndexedReader.php',
    'Doctrine\\Common\\Annotations\\NamedArgumentConstructorAnnotation' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/NamedArgumentConstructorAnnotation.php',
    'Doctrine\\Common\\Annotations\\PhpParser' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/PhpParser.php',
    'Doctrine\\Common\\Annotations\\Reader' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/Reader.php',
    'Doctrine\\Common\\Annotations\\SimpleAnnotationReader' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/SimpleAnnotationReader.php',
    'Doctrine\\Common\\Annotations\\TokenParser' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/TokenParser.php',
    'Doctrine\\Common\\Lexer\\AbstractLexer' => $vendorDir . '/doctrine/lexer/lib/Doctrine/Common/Lexer/AbstractLexer.php',
    'Invoker\\CallableResolver' => $vendorDir . '/php-di/invoker/src/CallableResolver.php',
    'Invoker\\Exception\\InvocationException' => $vendorDir . '/php-di/invoker/src/Exception/InvocationException.php',
    'Invoker\\Exception\\NotCallableException' => $vendorDir . '/php-di/invoker/src/Exception/NotCallableException.php',
    'Invoker\\Exception\\NotEnoughParametersException' => $vendorDir . '/php-di/invoker/src/Exception/NotEnoughParametersException.php',
    'Invoker\\Invoker' => $vendorDir . '/php-di/invoker/src/Invoker.php',
    'Invoker\\InvokerInterface' => $vendorDir . '/php-di/invoker/src/InvokerInterface.php',
    'Invoker\\ParameterResolver\\AssociativeArrayResolver' => $vendorDir . '/php-di/invoker/src/ParameterResolver/AssociativeArrayResolver.php',
    'Invoker\\ParameterResolver\\Container\\ParameterNameContainerResolver' => $vendorDir . '/php-di/invoker/src/ParameterResolver/Container/ParameterNameContainerResolver.php',
    'Invoker\\ParameterResolver\\Container\\TypeHintContainerResolver' => $vendorDir . '/php-di/invoker/src/ParameterResolver/Container/TypeHintContainerResolver.php',
    'Invoker\\ParameterResolver\\DefaultValueResolver' => $vendorDir . '/php-di/invoker/src/ParameterResolver/DefaultValueResolver.php',
    'Invoker\\ParameterResolver\\NumericArrayResolver' => $vendorDir . '/php-di/invoker/src/ParameterResolver/NumericArrayResolver.php',
    'Invoker\\ParameterResolver\\ParameterResolver' => $vendorDir . '/php-di/invoker/src/ParameterResolver/ParameterResolver.php',
    'Invoker\\ParameterResolver\\ResolverChain' => $vendorDir . '/php-di/invoker/src/ParameterResolver/ResolverChain.php',
    'Invoker\\ParameterResolver\\TypeHintResolver' => $vendorDir . '/php-di/invoker/src/ParameterResolver/TypeHintResolver.php',
    'Invoker\\Reflection\\CallableReflection' => $vendorDir . '/php-di/invoker/src/Reflection/CallableReflection.php',
    'Models\\LegalPerson' => $baseDir . '/core/models/legalperson.php',
    'Models\\ModelTemplate' => $baseDir . '/core/models/modelTemplate.php',
    'Models\\Pessoa' => $baseDir . '/core/models/pessoa.php',
    'Models\\PessoaFisica' => $baseDir . '/core/models/pessoafisica.php',
    'Monolog\\DateTimeImmutable' => $vendorDir . '/monolog/monolog/src/Monolog/DateTimeImmutable.php',
    'Monolog\\ErrorHandler' => $vendorDir . '/monolog/monolog/src/Monolog/ErrorHandler.php',
    'Monolog\\Formatter\\ChromePHPFormatter' => $vendorDir . '/monolog/monolog/src/Monolog/Formatter/ChromePHPFormatter.php',
    'Monolog\\Formatter\\ElasticaFormatter' => $vendorDir . '/monolog/monolog/src/Monolog/Formatter/ElasticaFormatter.php',
    'Monolog\\Formatter\\ElasticsearchFormatter' => $vendorDir . '/monolog/monolog/src/Monolog/Formatter/ElasticsearchFormatter.php',
    'Monolog\\Formatter\\FlowdockFormatter' => $vendorDir . '/monolog/monolog/src/Monolog/Formatter/FlowdockFormatter.php',
    'Monolog\\Formatter\\FluentdFormatter' => $vendorDir . '/monolog/monolog/src/Monolog/Formatter/FluentdFormatter.php',
    'Monolog\\Formatter\\FormatterInterface' => $vendorDir . '/monolog/monolog/src/Monolog/Formatter/FormatterInterface.php',
    'Monolog\\Formatter\\GelfMessageFormatter' => $vendorDir . '/monolog/monolog/src/Monolog/Formatter/GelfMessageFormatter.php',
    'Monolog\\Formatter\\HtmlFormatter' => $vendorDir . '/monolog/monolog/src/Monolog/Formatter/HtmlFormatter.php',
    'Monolog\\Formatter\\JsonFormatter' => $vendorDir . '/monolog/monolog/src/Monolog/Formatter/JsonFormatter.php',
    'Monolog\\Formatter\\LineFormatter' => $vendorDir . '/monolog/monolog/src/Monolog/Formatter/LineFormatter.php',
    'Monolog\\Formatter\\LogglyFormatter' => $vendorDir . '/monolog/monolog/src/Monolog/Formatter/LogglyFormatter.php',
    'Monolog\\Formatter\\LogmaticFormatter' => $vendorDir . '/monolog/monolog/src/Monolog/Formatter/LogmaticFormatter.php',
    'Monolog\\Formatter\\LogstashFormatter' => $vendorDir . '/monolog/monolog/src/Monolog/Formatter/LogstashFormatter.php',
    'Monolog\\Formatter\\MongoDBFormatter' => $vendorDir . '/monolog/monolog/src/Monolog/Formatter/MongoDBFormatter.php',
    'Monolog\\Formatter\\NormalizerFormatter' => $vendorDir . '/monolog/monolog/src/Monolog/Formatter/NormalizerFormatter.php',
    'Monolog\\Formatter\\ScalarFormatter' => $vendorDir . '/monolog/monolog/src/Monolog/Formatter/ScalarFormatter.php',
    'Monolog\\Formatter\\WildfireFormatter' => $vendorDir . '/monolog/monolog/src/Monolog/Formatter/WildfireFormatter.php',
    'Monolog\\Handler\\AbstractHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/AbstractHandler.php',
    'Monolog\\Handler\\AbstractProcessingHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/AbstractProcessingHandler.php',
    'Monolog\\Handler\\AbstractSyslogHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/AbstractSyslogHandler.php',
    'Monolog\\Handler\\AmqpHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/AmqpHandler.php',
    'Monolog\\Handler\\BrowserConsoleHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/BrowserConsoleHandler.php',
    'Monolog\\Handler\\BufferHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/BufferHandler.php',
    'Monolog\\Handler\\ChromePHPHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/ChromePHPHandler.php',
    'Monolog\\Handler\\CouchDBHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/CouchDBHandler.php',
    'Monolog\\Handler\\CubeHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/CubeHandler.php',
    'Monolog\\Handler\\Curl\\Util' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/Curl/Util.php',
    'Monolog\\Handler\\DeduplicationHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/DeduplicationHandler.php',
    'Monolog\\Handler\\DoctrineCouchDBHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/DoctrineCouchDBHandler.php',
    'Monolog\\Handler\\DynamoDbHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/DynamoDbHandler.php',
    'Monolog\\Handler\\ElasticaHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/ElasticaHandler.php',
    'Monolog\\Handler\\ElasticsearchHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/ElasticsearchHandler.php',
    'Monolog\\Handler\\ErrorLogHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/ErrorLogHandler.php',
    'Monolog\\Handler\\FallbackGroupHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/FallbackGroupHandler.php',
    'Monolog\\Handler\\FilterHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/FilterHandler.php',
    'Monolog\\Handler\\FingersCrossedHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/FingersCrossedHandler.php',
    'Monolog\\Handler\\FingersCrossed\\ActivationStrategyInterface' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/FingersCrossed/ActivationStrategyInterface.php',
    'Monolog\\Handler\\FingersCrossed\\ChannelLevelActivationStrategy' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/FingersCrossed/ChannelLevelActivationStrategy.php',
    'Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/FingersCrossed/ErrorLevelActivationStrategy.php',
    'Monolog\\Handler\\FirePHPHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/FirePHPHandler.php',
    'Monolog\\Handler\\FleepHookHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/FleepHookHandler.php',
    'Monolog\\Handler\\FlowdockHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/FlowdockHandler.php',
    'Monolog\\Handler\\FormattableHandlerInterface' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/FormattableHandlerInterface.php',
    'Monolog\\Handler\\FormattableHandlerTrait' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/FormattableHandlerTrait.php',
    'Monolog\\Handler\\GelfHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/GelfHandler.php',
    'Monolog\\Handler\\GroupHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/GroupHandler.php',
    'Monolog\\Handler\\Handler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/Handler.php',
    'Monolog\\Handler\\HandlerInterface' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/HandlerInterface.php',
    'Monolog\\Handler\\HandlerWrapper' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/HandlerWrapper.php',
    'Monolog\\Handler\\IFTTTHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/IFTTTHandler.php',
    'Monolog\\Handler\\InsightOpsHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/InsightOpsHandler.php',
    'Monolog\\Handler\\LogEntriesHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/LogEntriesHandler.php',
    'Monolog\\Handler\\LogglyHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/LogglyHandler.php',
    'Monolog\\Handler\\LogmaticHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/LogmaticHandler.php',
    'Monolog\\Handler\\MailHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/MailHandler.php',
    'Monolog\\Handler\\MandrillHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/MandrillHandler.php',
    'Monolog\\Handler\\MissingExtensionException' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/MissingExtensionException.php',
    'Monolog\\Handler\\MongoDBHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/MongoDBHandler.php',
    'Monolog\\Handler\\NativeMailerHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/NativeMailerHandler.php',
    'Monolog\\Handler\\NewRelicHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/NewRelicHandler.php',
    'Monolog\\Handler\\NoopHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/NoopHandler.php',
    'Monolog\\Handler\\NullHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/NullHandler.php',
    'Monolog\\Handler\\OverflowHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/OverflowHandler.php',
    'Monolog\\Handler\\PHPConsoleHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/PHPConsoleHandler.php',
    'Monolog\\Handler\\ProcessHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/ProcessHandler.php',
    'Monolog\\Handler\\ProcessableHandlerInterface' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/ProcessableHandlerInterface.php',
    'Monolog\\Handler\\ProcessableHandlerTrait' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/ProcessableHandlerTrait.php',
    'Monolog\\Handler\\PsrHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/PsrHandler.php',
    'Monolog\\Handler\\PushoverHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/PushoverHandler.php',
    'Monolog\\Handler\\RedisHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/RedisHandler.php',
    'Monolog\\Handler\\RedisPubSubHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/RedisPubSubHandler.php',
    'Monolog\\Handler\\RollbarHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/RollbarHandler.php',
    'Monolog\\Handler\\RotatingFileHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/RotatingFileHandler.php',
    'Monolog\\Handler\\SamplingHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/SamplingHandler.php',
    'Monolog\\Handler\\SendGridHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/SendGridHandler.php',
    'Monolog\\Handler\\SlackHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/SlackHandler.php',
    'Monolog\\Handler\\SlackWebhookHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/SlackWebhookHandler.php',
    'Monolog\\Handler\\Slack\\SlackRecord' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/Slack/SlackRecord.php',
    'Monolog\\Handler\\SocketHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/SocketHandler.php',
    'Monolog\\Handler\\SqsHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/SqsHandler.php',
    'Monolog\\Handler\\StreamHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/StreamHandler.php',
    'Monolog\\Handler\\SwiftMailerHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/SwiftMailerHandler.php',
    'Monolog\\Handler\\SyslogHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/SyslogHandler.php',
    'Monolog\\Handler\\SyslogUdpHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/SyslogUdpHandler.php',
    'Monolog\\Handler\\SyslogUdp\\UdpSocket' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/SyslogUdp/UdpSocket.php',
    'Monolog\\Handler\\TelegramBotHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/TelegramBotHandler.php',
    'Monolog\\Handler\\TestHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/TestHandler.php',
    'Monolog\\Handler\\WebRequestRecognizerTrait' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/WebRequestRecognizerTrait.php',
    'Monolog\\Handler\\WhatFailureGroupHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/WhatFailureGroupHandler.php',
    'Monolog\\Handler\\ZendMonitorHandler' => $vendorDir . '/monolog/monolog/src/Monolog/Handler/ZendMonitorHandler.php',
    'Monolog\\Logger' => $vendorDir . '/monolog/monolog/src/Monolog/Logger.php',
    'Monolog\\Processor\\GitProcessor' => $vendorDir . '/monolog/monolog/src/Monolog/Processor/GitProcessor.php',
    'Monolog\\Processor\\HostnameProcessor' => $vendorDir . '/monolog/monolog/src/Monolog/Processor/HostnameProcessor.php',
    'Monolog\\Processor\\IntrospectionProcessor' => $vendorDir . '/monolog/monolog/src/Monolog/Processor/IntrospectionProcessor.php',
    'Monolog\\Processor\\MemoryPeakUsageProcessor' => $vendorDir . '/monolog/monolog/src/Monolog/Processor/MemoryPeakUsageProcessor.php',
    'Monolog\\Processor\\MemoryProcessor' => $vendorDir . '/monolog/monolog/src/Monolog/Processor/MemoryProcessor.php',
    'Monolog\\Processor\\MemoryUsageProcessor' => $vendorDir . '/monolog/monolog/src/Monolog/Processor/MemoryUsageProcessor.php',
    'Monolog\\Processor\\MercurialProcessor' => $vendorDir . '/monolog/monolog/src/Monolog/Processor/MercurialProcessor.php',
    'Monolog\\Processor\\ProcessIdProcessor' => $vendorDir . '/monolog/monolog/src/Monolog/Processor/ProcessIdProcessor.php',
    'Monolog\\Processor\\ProcessorInterface' => $vendorDir . '/monolog/monolog/src/Monolog/Processor/ProcessorInterface.php',
    'Monolog\\Processor\\PsrLogMessageProcessor' => $vendorDir . '/monolog/monolog/src/Monolog/Processor/PsrLogMessageProcessor.php',
    'Monolog\\Processor\\TagProcessor' => $vendorDir . '/monolog/monolog/src/Monolog/Processor/TagProcessor.php',
    'Monolog\\Processor\\UidProcessor' => $vendorDir . '/monolog/monolog/src/Monolog/Processor/UidProcessor.php',
    'Monolog\\Processor\\WebProcessor' => $vendorDir . '/monolog/monolog/src/Monolog/Processor/WebProcessor.php',
    'Monolog\\Registry' => $vendorDir . '/monolog/monolog/src/Monolog/Registry.php',
    'Monolog\\ResettableInterface' => $vendorDir . '/monolog/monolog/src/Monolog/ResettableInterface.php',
    'Monolog\\SignalHandler' => $vendorDir . '/monolog/monolog/src/Monolog/SignalHandler.php',
    'Monolog\\Test\\TestCase' => $vendorDir . '/monolog/monolog/src/Monolog/Test/TestCase.php',
    'Monolog\\Utils' => $vendorDir . '/monolog/monolog/src/Monolog/Utils.php',
    'Opis\\Closure\\Analyzer' => $vendorDir . '/opis/closure/src/Analyzer.php',
    'Opis\\Closure\\ClosureContext' => $vendorDir . '/opis/closure/src/ClosureContext.php',
    'Opis\\Closure\\ClosureScope' => $vendorDir . '/opis/closure/src/ClosureScope.php',
    'Opis\\Closure\\ClosureStream' => $vendorDir . '/opis/closure/src/ClosureStream.php',
    'Opis\\Closure\\ISecurityProvider' => $vendorDir . '/opis/closure/src/ISecurityProvider.php',
    'Opis\\Closure\\ReflectionClosure' => $vendorDir . '/opis/closure/src/ReflectionClosure.php',
    'Opis\\Closure\\SecurityException' => $vendorDir . '/opis/closure/src/SecurityException.php',
    'Opis\\Closure\\SecurityProvider' => $vendorDir . '/opis/closure/src/SecurityProvider.php',
    'Opis\\Closure\\SelfReference' => $vendorDir . '/opis/closure/src/SelfReference.php',
    'Opis\\Closure\\SerializableClosure' => $vendorDir . '/opis/closure/src/SerializableClosure.php',
    'PhpDocReader\\AnnotationException' => $vendorDir . '/php-di/phpdoc-reader/src/PhpDocReader/AnnotationException.php',
    'PhpDocReader\\PhpDocReader' => $vendorDir . '/php-di/phpdoc-reader/src/PhpDocReader/PhpDocReader.php',
    'PhpDocReader\\PhpParser\\TokenParser' => $vendorDir . '/php-di/phpdoc-reader/src/PhpDocReader/PhpParser/TokenParser.php',
    'PhpDocReader\\PhpParser\\UseStatementParser' => $vendorDir . '/php-di/phpdoc-reader/src/PhpDocReader/PhpParser/UseStatementParser.php',
    'Psr\\Container\\ContainerExceptionInterface' => $vendorDir . '/psr/container/src/ContainerExceptionInterface.php',
    'Psr\\Container\\ContainerInterface' => $vendorDir . '/psr/container/src/ContainerInterface.php',
    'Psr\\Container\\NotFoundExceptionInterface' => $vendorDir . '/psr/container/src/NotFoundExceptionInterface.php',
    'Psr\\Log\\AbstractLogger' => $vendorDir . '/psr/log/Psr/Log/AbstractLogger.php',
    'Psr\\Log\\InvalidArgumentException' => $vendorDir . '/psr/log/Psr/Log/InvalidArgumentException.php',
    'Psr\\Log\\LogLevel' => $vendorDir . '/psr/log/Psr/Log/LogLevel.php',
    'Psr\\Log\\LoggerAwareInterface' => $vendorDir . '/psr/log/Psr/Log/LoggerAwareInterface.php',
    'Psr\\Log\\LoggerAwareTrait' => $vendorDir . '/psr/log/Psr/Log/LoggerAwareTrait.php',
    'Psr\\Log\\LoggerInterface' => $vendorDir . '/psr/log/Psr/Log/LoggerInterface.php',
    'Psr\\Log\\LoggerTrait' => $vendorDir . '/psr/log/Psr/Log/LoggerTrait.php',
    'Psr\\Log\\NullLogger' => $vendorDir . '/psr/log/Psr/Log/NullLogger.php',
    'Psr\\Log\\Test\\DummyTest' => $vendorDir . '/psr/log/Psr/Log/Test/DummyTest.php',
    'Psr\\Log\\Test\\LoggerInterfaceTest' => $vendorDir . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
    'Psr\\Log\\Test\\TestLogger' => $vendorDir . '/psr/log/Psr/Log/Test/TestLogger.php',
    'Services\\DAOService' => $baseDir . '/core/services/daoservice.php',
    'Services\\JsonService' => $baseDir . '/core/services/jsonservice.php',
    'Services\\PDOService' => $baseDir . '/core/services/pdoservice.php',
    'Services\\PessoaDAO' => $baseDir . '/core/services/PessoaDAO.php',
    'Services\\QueryService' => $baseDir . '/core/services/queryservice.php',
    'Services\\RouteService' => $baseDir . '/core/services/routeservice.php',
);
