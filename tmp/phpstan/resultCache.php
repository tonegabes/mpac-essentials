<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1784901161,
	'meta' => array (
  'cacheVersion' => 'v13-packageDependencies',
  'phpstanVersion' => '2.2.5',
  'fnsr' => false,
  'metaExtensions' => 
  array (
  ),
  'phpVersion' => 80420,
  'projectConfig' => '{conditionalTags: {Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule: {phpstan.rules.rule: %noEnvCallsOutsideOfConfig%}, Larastan\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule: {phpstan.rules.rule: %noUnnecessaryEnumerableToArrayCalls%}, Larastan\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, Larastan\\Larastan\\Rules\\UnusedViewsRule: {phpstan.rules.rule: %checkUnusedViews%}, Larastan\\Larastan\\Rules\\NoMissingTranslationsRule: {phpstan.rules.rule: %checkMissingTranslations%}, Larastan\\Larastan\\Rules\\ModelAppendsRule: {phpstan.rules.rule: %checkModelAppends%}, Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule: {phpstan.rules.rule: %checkModelMethodVisibility%}, Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %generalizeEnvReturnType%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension: {phpstan.broker.dynamicMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension: {phpstan.broker.dynamicStaticMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\Rules\\ConfigCollectionRule: {phpstan.rules.rule: %checkConfigTypes%}, PHPStan\\PhpDoc\\PHPUnit\\MockObjectTypeNodeResolverExtension: {phpstan.phpDoc.typeNodeResolverExtension: %phpunit.convertUnionToIntersectionType%}, PHPStan\\Type\\PHPUnit\\DataProviderReturnTypeIgnoreExtension: {phpstan.ignoreErrorExtension: [%featureToggles.bleedingEdge%, {arguments: [%phpunit.reportMissingDataProviderReturnType%]}]}, PHPStan\\Type\\PHPUnit\\DynamicCallToAssertionIgnoreExtension: {phpstan.ignoreErrorExtension: %featureToggles.bleedingEdge%}, PHPStan\\Rules\\PHPUnit\\AssertEqualsIsDiscouragedRule: {phpstan.rules.rule: [%strictRulesInstalled%, %featureToggles.bleedingEdge%]}, PHPStan\\Rules\\PHPUnit\\DataProviderDataRule: {phpstan.rules.rule: %featureToggles.bleedingEdge%}, PHPStan\\Rules\\PHPUnit\\ClassAttributeRequiresPhpVersionRule: {phpstan.rules.rule: %featureToggles.bleedingEdge%}}, parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Illuminate\\Support\\Optional, PHPUnit\\Framework\\TestCase], earlyTerminatingFunctionCalls: [abort, dd], mixinExcludeClasses: [Eloquent], bootstrapFiles: [bootstrap.php, lazy/Carbon/UnprotectedDatePeriod.php], checkOctaneCompatibility: false, noEnvCallsOutsideOfConfig: true, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], noUnnecessaryEnumerableToArrayCalls: false, squashedMigrationsPath: [], databaseMigrationsPath: [], disableMigrationScan: false, disableSchemaScan: false, configDirectories: [], viewDirectories: [], translationDirectories: [], checkModelProperties: false, checkUnusedViews: false, checkMissingTranslations: false, checkModelAppends: true, checkModelMethodVisibility: false, generalizeEnvReturnType: false, checkConfigTypes: false, checkAuthCallsWhenInRequestScope: false, parseModelCastsMethod: false, enableMigrationCache: false, peststan: {testCaseClass: Tests\\TestCase, pestConfigFiles: [tests/Pest.php]}, scanDirectories: [src], phpunit: {convertUnionToIntersectionType: true, reportMissingDataProviderReturnType: false}, additionalConstructors: [PHPUnit\\Framework\\TestCase::setUp], earlyTerminatingMethodCalls: {PHPUnit\\Framework\\Assert: [fail, markTestIncomplete, markTestSkipped]}, stubFiles: [stubs/Assert.stub, stubs/AssertionFailedError.stub, stubs/ExpectationFailedException.stub, stubs/MockBuilder.stub, stubs/MockObject.stub, stubs/Stub.stub, stubs/TestCase.stub], exceptions: {uncheckedExceptionRegexes: [\'#^PHPUnit\\\\#\', \'#^SebastianBergmann\\\\#\']}, featureToggles: {bleedingEdge: true, checkNonStringableDynamicAccess: true, checkParameterCastableToNumberFunctions: true, skipCheckGenericClasses: {_prevent_merging: true}, stricterFunctionMap: true, reportPreciseLineForUnusedFunctionParameter: true, checkPrintfParameterTypes: true, internalTag: true, newStaticInAbstractClassStaticMethod: true, checkExtensionsForComparisonOperators: true, checkGenericIterableClasses: true, reportTooWideBool: true, rawMessageInBaseline: true, reportNestedTooWideType: false, assignToByRefForeachExpr: true, curlSetOptArrayTypes: true, magicDirInInclude: true, checkDateIntervalConstructor: true, reportMethodPurityOverride: true, checkDynamicConstantNameValues: true, unusedLabel: true, newOnNonObject: true}, paths: [E:\\codes\\mpac-essentials\\src], level: 10, excludePaths: null, tmpDir: E:\\codes\\mpac-essentials\\tmp\\phpstan}, rules: [Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessWithFunctionCallsRule, Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessValueFunctionCallsRule, Larastan\\Larastan\\Rules\\DeferrableServiceProviderMissingProvidesRule, Larastan\\Larastan\\Rules\\ConsoleCommand\\UndefinedArgumentOrOptionRule, PestStan\\Rules\\DisallowedCallInDescribeRule, PestStan\\Rules\\StaticTestClosureRule, PestStan\\Rules\\RepeatWithInvalidValueRule, PestStan\\Rules\\DuplicateTestDescriptionRule, PestStan\\Rules\\ImpossibleExpectationRule, PestStan\\Rules\\RedundantExpectationRule, PestStan\\Rules\\ExpectationValueTypeRule, PestStan\\Rules\\EmptyTestClosureRule, PestStan\\Rules\\BeforeAllThisUsageRule, PestStan\\Rules\\DescribeWithoutTestsRule, PestStan\\Rules\\InvalidGroupNameRule, PestStan\\Rules\\RedundantLocalUseRule, PHPStan\\Rules\\PHPUnit\\AssertSameBooleanExpectedRule, PHPStan\\Rules\\PHPUnit\\AssertSameNullExpectedRule, PHPStan\\Rules\\PHPUnit\\AssertSameWithCountRule, PHPStan\\Rules\\PHPUnit\\ClassCoversExistsRule, PHPStan\\Rules\\PHPUnit\\ClassMethodCoversExistsRule, PHPStan\\Rules\\PHPUnit\\MockMethodCallRule, PHPStan\\Rules\\PHPUnit\\NoMissingSpaceInClassAnnotationRule, PHPStan\\Rules\\PHPUnit\\NoMissingSpaceInMethodAnnotationRule, PHPStan\\Rules\\PHPUnit\\ShouldCallParentMethodsRule], services: {{class: Larastan\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ContractsMethodsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\FacadesMethodsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ManagersMethodsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\AuthsMethodsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ViewWithMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelOnlyDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Support\\CollectionHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\LiteralExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionFilterRejectDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionWhereNotNullDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\FactoryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\StrExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule, arguments: {configDirectories: %configDirectories%}}, {class: Larastan\\Larastan\\Rules\\NoModelMakeRule}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule}, {class: Larastan\\Larastan\\Rules\\ModelAppendsRule}, {class: Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule}, {class: Larastan\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppFacadeEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: Larastan\\Larastan\\Types\\CollectionOf\\CollectionOfTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, disableMigrationScan: %disableMigrationScan%, parser: @migrationsParser, reflectionProvider: @reflectionProvider}}, iamcalSqlParser: {class: Larastan\\Larastan\\SQL\\IamcalSqlParser, autowired: false}, sqlParserFactory: {class: Larastan\\Larastan\\SQL\\SqlParserFactory, arguments: {iamcalSqlParser: @iamcalSqlParser}}, sqlParser: {type: Larastan\\Larastan\\SQL\\SqlParser, factory: [@sqlParserFactory, create]}, {class: Larastan\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%, disableSchemaScan: %disableSchemaScan%}}, {class: Larastan\\Larastan\\Properties\\ModelCastHelper, arguments: {parser: @currentPhpVersionSimpleDirectParser, parseModelCastsMethod: %parseModelCastsMethod%}}, {class: Larastan\\Larastan\\Properties\\MigrationCache, arguments: {cacheDirectory: %tmpDir%, enabled: %enableMigrationCache%}}, {class: Larastan\\Larastan\\Properties\\ModelPropertyHelper}, {class: Larastan\\Larastan\\Rules\\ModelRuleHelper}, {class: Larastan\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: Larastan\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Properties\\Schema\\MySqlDataTypeToPhpTypeConverter}, {class: Larastan\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: Larastan\\Larastan\\Rules\\UnusedViewsRule}, {class: Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedEmailViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewFacadeMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedRouteFacadeViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewInAnotherViewCollector}, {class: Larastan\\Larastan\\Support\\ViewFileHelper, arguments: {viewDirectories: %viewDirectories%}}, {class: Larastan\\Larastan\\Support\\ViewParser, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: Larastan\\Larastan\\Rules\\NoMissingTranslationsRule, arguments: {translationDirectories: %translationDirectories%}}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationTranslatorCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFacadeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationViewCollector}, {class: Larastan\\Larastan\\ReturnTypes\\ApplicationMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\ArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\OptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasOptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TranslatorGetReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\LangGetReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TransHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DoubleUnderscoreHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeHelper}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationResolver}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationHelper}, {class: Larastan\\Larastan\\Support\\HigherOrderCollectionProxyHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension}, {class: Larastan\\Larastan\\Support\\ConfigParser, arguments: {parser: @currentPhpVersionSimpleDirectParser, configPaths: %configDirectories%, treatPhpDocTypesAsCertain: %treatPhpDocTypesAsCertain%}}, {class: Larastan\\Larastan\\Internal\\ConfigHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\FormRequestSafeDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentCollectionMapDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\ConfigCollectionRule}, {class: Illuminate\\Filesystem\\Filesystem, autowired: self}, migrationsParser: {class: PHPStan\\Parser\\CachedParser, arguments: {originalParser: @currentPhpVersionSimpleDirectParser, cachedNodesByStringCountMax: %cache.nodesByStringCountMax%}, autowired: false}, {class: PestStan\\Type\\Pest\\PestFileDiscoverer, arguments: {scanPaths: %paths%, rootDir: %currentWorkingDirectory%}}, {class: PestStan\\Type\\Pest\\PestConfigReader, arguments: {pestConfigFiles: %peststan.pestConfigFiles%}}, {class: PestStan\\Type\\Pest\\PestFunctionReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: PestStan\\Type\\Pest\\ExpectationMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: PestStan\\Type\\Pest\\OppositeExpectationMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: PestStan\\Type\\Pest\\TestClosureThisTypeExtension, arguments: {testCaseClass: %peststan.testCaseClass%}, tags: [phpstan.functionParameterClosureThisExtension]}, {class: PestStan\\Type\\Pest\\TestCasePropertiesExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: PestStan\\Type\\Pest\\ExpectationPropertiesExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: PestStan\\Type\\Pest\\PestHookPropertyReader}, {class: PestStan\\Type\\Pest\\TestCaseDynamicPropertyTypeExtension, tags: [phpstan.broker.expressionTypeResolverExtension]}, {class: PestStan\\Type\\Pest\\HigherOrderExpectationTypeExtension, tags: [phpstan.broker.expressionTypeResolverExtension]}, {class: PestStan\\Type\\Pest\\PestInternalClassAccessIgnoreExtension, tags: [phpstan.ignoreErrorExtension]}, {class: PestStan\\Type\\Pest\\TestCallMethodsClassReflectionExtension, arguments: {testCaseClass: %peststan.testCaseClass%}, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: PestStan\\Type\\Pest\\ProtectedMethodCallIgnoreExtension, arguments: {testCaseClass: %peststan.testCaseClass%}, tags: [phpstan.ignoreErrorExtension]}, {class: PestStan\\Rules\\InvalidThrowsExceptionRule, arguments: {reflectionProvider: @reflectionProvider}, tags: [phpstan.rules.rule]}, {class: PestStan\\Rules\\CoversClassExistsRule, arguments: {reflectionProvider: @reflectionProvider}, tags: [phpstan.rules.rule]}, {class: Carbon\\PHPStan\\MacroExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: PHPStan\\PhpDoc\\PHPUnit\\MockObjectTypeNodeResolverExtension}, {class: PHPStan\\Type\\PHPUnit\\Assert\\AssertFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension]}, {class: PHPStan\\Type\\PHPUnit\\Assert\\AssertMethodTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.methodTypeSpecifyingExtension]}, {class: PHPStan\\Type\\PHPUnit\\Assert\\AssertStaticMethodTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.staticMethodTypeSpecifyingExtension]}, {class: PHPStan\\Type\\PHPUnit\\MockBuilderDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: PHPStan\\Type\\PHPUnit\\MockForIntersectionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension, phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: PHPStan\\Rules\\PHPUnit\\CoversHelper}, {class: PHPStan\\Rules\\PHPUnit\\AnnotationHelper}, {class: PHPStan\\Rules\\PHPUnit\\TestMethodsHelper}, {class: PHPStan\\Rules\\PHPUnit\\PHPUnitVersion, factory: {arguments: []}}, {class: PHPStan\\Rules\\PHPUnit\\PHPUnitVersionDetector}, {class: PHPStan\\Rules\\PHPUnit\\DataProviderHelper, factory: {arguments: []}}, {class: PHPStan\\Rules\\PHPUnit\\DataProviderHelperFactory, arguments: {parser: @defaultAnalysisParser}}, {class: PHPStan\\Type\\PHPUnit\\DataProviderReturnTypeIgnoreExtension}, {class: PHPStan\\Type\\PHPUnit\\DynamicCallToAssertionIgnoreExtension}, {class: PHPStan\\Rules\\PHPUnit\\AttributeVersionRequirementHelper, arguments: {deprecationRulesInstalled: %deprecationRulesInstalled%, bleedingEdge: %featureToggles.bleedingEdge%}}, {class: PHPStan\\Rules\\PHPUnit\\DataProviderDeclarationRule, arguments: {checkFunctionNameCase: %checkFunctionNameCase%, deprecationRulesInstalled: %deprecationRulesInstalled%}, tags: [phpstan.rules.rule]}, {class: PHPStan\\Rules\\PHPUnit\\AttributeRequiresPhpVersionRule, tags: [phpstan.rules.rule]}, {class: PHPStan\\Rules\\PHPUnit\\ClassAttributeRequiresPhpVersionRule}, {class: PHPStan\\Rules\\PHPUnit\\AssertEqualsIsDiscouragedRule}, {class: PHPStan\\Rules\\PHPUnit\\DataProviderDataRule}}}',
  'analysedPaths' => 
  array (
    0 => 'E:\\codes\\mpac-essentials\\src',
  ),
  'scannedFiles' => 
  array (
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Analysis\\Expectation\\ExpectationAssertionResult.php' => '21d4a4d8122bcc5df0dadc091bc1511494e5651bea80d9a0865a012359c09210',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Analysis\\Expectation\\ExpectationChainState.php' => '7499e95f0f62eab161560430ee117061c1f10e5626e6342fe91c7ffb2ff55c9d',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Analysis\\Expectation\\ExpectationChainStateResolver.php' => 'e3a53a578c797fdd200850a078dc3e795e679c2f441d8831d7787833679eebd0',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Analysis\\Expectation\\ExpectationMatcherRegistry.php' => '2cc75f196c30278fee469b920c5bd5ce7c5e7da16843b98074a932c402a28a7c',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Analysis\\Expectation\\ExpectationSemanticAnalyzer.php' => 'b6da93277c02221a1c54070009bc7249148476184cc2262b9ce7fccdafd9cbdb',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Analysis\\Expectation\\ExpectationTypeNarrower.php' => '7dae75449565e8a340a24ecdfcb3865c4ebb43a9a7ab8aad90c509d3b831d791',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Analysis\\Expectation\\MatcherAssertionRegistry.php' => '183f8454525f0655d2395272e26f1c18835d8b5ffe9ff1c65c31658ff724d33c',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Analysis\\Expectation\\MatcherCategoryRegistry.php' => 'b017672202e691743ef5dcc158ad1882c5d82d259cb2c524beec65c567fe624c',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Analysis\\Expectation\\MatcherRequirementRegistry.php' => 'b1dbf159c144e19be1d930f6837dee2e40ad5a46c02fd36cb982731f35b09359',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Analysis\\Expectation\\MatcherSemanticMetadata.php' => '6179651d7cb08e6f50c6623eb7362388fba8579352579ad968f165c579bd877d',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Diagnostics\\PestDiagnostic.php' => '49212896c7487f16f39ab0df366f97a88ddea95ba67ca231d5a3e8bfe94bda4b',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Diagnostics\\PestDiagnosticIdentifiers.php' => 'cbff3f7e4d3ea65917d9923584f6aa8f03bfe337bbc9e2a562102cdedd1e9d69',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Diagnostics\\PestDiagnostics.php' => 'dd77ec54092b320eef5f111ff50de7a9d01d67678594fc95e70e64daaf389e32',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\PestFunctionDetector.php' => '4afe79503cc336cde51707412d18155bbad0300c92c6b56cd681cd40b2e6bc2b',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Rules\\BeforeAllThisUsageRule.php' => 'cec7b90eb25ea57e3ce32cd3d75891296389162694689b69bba78464d3ad6d90',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Rules\\CoversClassExistsRule.php' => 'db672fee46b932069f48778866fc438b57666ad65df4bd681d9e435d6bcbb813',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Rules\\DescribeWithoutTestsRule.php' => '929699226dbfc38a1c304398bac5887d290a15dc3566c6fbd9558e7689bba6d5',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Rules\\DisallowedCallInDescribeRule.php' => 'c020a95f1c97122ad85d656d95a0dd667d47629b2f78f14eedf5acfdd50a5322',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Rules\\DuplicateTestDescriptionRule.php' => '27e57e130db7a76b00b9209db47ff9cc285d00ec534bfd963428bc83730982f3',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Rules\\EmptyTestClosureRule.php' => '7fe387e37d4a4f753b70b018846ab1bb4db26002e0dcbbf628472c11157895db',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Rules\\ExpectationValueTypeRule.php' => 'd60909757155c1d5f2093f49260294dff2af4badd3ba3b563cdac3b344d6ee77',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Rules\\ImpossibleExpectationRule.php' => 'b3e0b3fb03ba825d82e4ed8677177bffbf77b1fc3b85a23f50920c607c996520',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Rules\\InvalidGroupNameRule.php' => 'c792d993d9a1522fa91932a5002c6667e54e2a25c2b65e9b809d69b6e98e2eb2',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Rules\\InvalidThrowsExceptionRule.php' => 'e0473046c56c2cc5565b7580867d8b77e60fe0c119c34e7883a9fa594ef71e13',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Rules\\RedundantExpectationRule.php' => '9b7a661890ab4a62932ac5851bcdd31e52aad089a8ca2f96745329e5c3095e83',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Rules\\RedundantLocalUseRule.php' => '0376001c40272d6e65c7b6977c86fb6aeb69d6485039a7d1f70ced9605487f4b',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Rules\\RepeatWithInvalidValueRule.php' => 'e952bd2958ca6f4bbdc89d7ac7398324d633bdf70fb26e20a9c132f39242eeeb',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Rules\\StaticTestClosureRule.php' => 'be0bbc470b1f850c8faaf917abc19d33d55567301b12d75ca674bf457a5fedf0',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Type\\Pest\\ExpectationMethodReturnTypeExtension.php' => '884e1a325804b62646c3a85ff000d66ce58e8f338c570317cea0e6a3890e33d0',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Type\\Pest\\ExpectationPropertiesExtension.php' => '12e1c0e4bd06d8f8d17d65ab14fa7dd2c30e2ccf961d7c89e712e1c4d0005a9f',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Type\\Pest\\HigherOrderExpectationTypeExtension.php' => 'dca589310b2e1705f479a4b9a69209fd3275124706f7cd8dc62f8d37eefad24d',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Type\\Pest\\OppositeExpectationMethodReturnTypeExtension.php' => '826a24af56d6afbd71b2e1224a40d18f89f7a6c2920ddf8052c5bb428b533667',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Type\\Pest\\PestConfigReader.php' => '2f44ce2e4fc9063d9967b252a7b889fa153e6bd671cc76133c6d7514809cc427',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Type\\Pest\\PestFileDiscoverer.php' => '2a907d12bff7d2f3ecd762ec44e8a9dae5dd3d5ed46a2d46cb20523d1ab4f310',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Type\\Pest\\PestFunctionReturnTypeExtension.php' => '8082a88359c7ee56dd82cd9f1e0cfe7751d8845320d92b70aa88ce01400480c8',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Type\\Pest\\PestHookPropertyReader.php' => 'bffe90b3134de61c03048f8e88a2c68ab1175685ca97681dd9ea489039ee90bc',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Type\\Pest\\PestInternalClassAccessIgnoreExtension.php' => '9554c81fa0c6e38d25427a711b2acc1efd53d90179a394ebc3b4b2e1c6e90200',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Type\\Pest\\PestTestCaseProperty.php' => 'dec84802a3dc1a557237d23c56be97067cfa8c70d97d1889d8383379c991e095',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Type\\Pest\\ProtectedMethodCallIgnoreExtension.php' => 'da4b8ebc1475356e6374507adac46ccc91aa64fea6def05dbf9b347b5fd7d4b3',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Type\\Pest\\TestCallMethodsClassReflectionExtension.php' => '3af9203b53492569b11f736021141f2f7256f67071562e1da0ea8d455a65c456',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Type\\Pest\\TestCaseDynamicPropertyTypeExtension.php' => 'e62f2f820be912744f491626e370ecb6144c962ea8c9aa25ef58b18b3a347d63',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Type\\Pest\\TestCasePropertiesExtension.php' => 'ea3e29748f9dab5666bd3dded468471cc749672c2e9ac056f76fd91264fe446e',
    'E:\\codes\\mpac-essentials\\vendor\\mrpunyapal\\peststan\\src\\Type\\Pest\\TestClosureThisTypeExtension.php' => '13a173c352a026f59b93034dddaf8fd2b3e91e1071ffb1cd19fa25217bd216b2',
  ),
  'composerLocks' => 
  array (
    'E:/codes/mpac-essentials/composer.lock' => 'e91d5cc870658d400852c570165af00f11e01b427f8ec8d587037ba2908208aa',
  ),
  'composerInstalled' => 
  array (
    'E:/codes/mpac-essentials/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'brianium/paratest' => 
        array (
          'pretty_version' => 'v7.8.5',
          'version' => '7.8.5.0',
          'reference' => '9b324c8fc319cf9728b581c7a90e1c8f6361c5e5',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../brianium/paratest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'brick/math' => 
        array (
          'pretty_version' => '0.14.8',
          'version' => '0.14.8.0',
          'reference' => '63422359a44b7f06cae63c3b429b59e8efcc0629',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../brick/math',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'carbonphp/carbon-doctrine-types' => 
        array (
          'pretty_version' => '3.2.0',
          'version' => '3.2.0.0',
          'reference' => '18ba5ddfec8976260ead6e866180bd5d2f71aa1d',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../carbonphp/carbon-doctrine-types',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'clue/ndjson-react' => 
        array (
          'pretty_version' => 'v1.3.0',
          'version' => '1.3.0.0',
          'reference' => '392dc165fce93b5bb5c637b67e59619223c931b0',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../clue/ndjson-react',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'composer/pcre' => 
        array (
          'pretty_version' => '3.4.0',
          'version' => '3.4.0.0',
          'reference' => 'd5a341b3fb61f3001970940afb1d332968a183ed',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/./pcre',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'composer/semver' => 
        array (
          'pretty_version' => '3.4.4',
          'version' => '3.4.4.0',
          'reference' => '198166618906cb2de69b95d7d47e5fa8aa1b2b95',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/./semver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'composer/xdebug-handler' => 
        array (
          'pretty_version' => '3.0.5',
          'version' => '3.0.5.0',
          'reference' => '6c1925561632e83d60a44492e0b344cf48ab85ef',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/./xdebug-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'cordoval/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'davedevelopment/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'dflydev/dot-access-data' => 
        array (
          'pretty_version' => 'v3.0.3',
          'version' => '3.0.3.0',
          'reference' => 'a23a2bf4f31d3518f3ecb38660c95715dfead60f',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../dflydev/dot-access-data',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/deprecations' => 
        array (
          'pretty_version' => '1.1.6',
          'version' => '1.1.6.0',
          'reference' => 'd4fe3e6fd9bb9e72557a19674f44d8ac7db4c6ca',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../doctrine/deprecations',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'doctrine/inflector' => 
        array (
          'pretty_version' => '2.1.0',
          'version' => '2.1.0.0',
          'reference' => '6d6c96277ea252fc1304627204c3d5e6e15faa3b',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../doctrine/inflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/lexer' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => '31ad66abc0fc9e1a1f2d9bc6a42668d2fbbcd6dd',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../doctrine/lexer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dragonmantank/cron-expression' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => 'd61a8a9604ec1f8c3d150d09db6ce98b32675013',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../dragonmantank/cron-expression',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'egulias/email-validator' => 
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'reference' => 'd42c8731f0624ad6bdc8d3e5e9a4524f68801cfa',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../egulias/email-validator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ergebnis/agent-detector' => 
        array (
          'pretty_version' => '1.2.0',
          'version' => '1.2.0.0',
          'reference' => 'e211f17928c8b95a51e06040792d57f5462fb271',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../ergebnis/agent-detector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'evenement/evenement' => 
        array (
          'pretty_version' => 'v3.0.2',
          'version' => '3.0.2.0',
          'reference' => '0a16b0d71ab13284339abb99d9d2bd813640efbc',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../evenement/evenement',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fakerphp/faker' => 
        array (
          'pretty_version' => 'v1.24.1',
          'version' => '1.24.1.0',
          'reference' => 'e0ee18eb1e6dc3cda3ce9fd97e5a0689a88a64b5',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../fakerphp/faker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fidry/cpu-core-counter' => 
        array (
          'pretty_version' => '1.3.0',
          'version' => '1.3.0.0',
          'reference' => 'db9508f7b1474469d9d3c53b86f817e344732678',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../fidry/cpu-core-counter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'filp/whoops' => 
        array (
          'pretty_version' => '2.18.4',
          'version' => '2.18.4.0',
          'reference' => 'd2102955e48b9fd9ab24280a7ad12ed552752c4d',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../filp/whoops',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'friendsofphp/php-cs-fixer' => 
        array (
          'pretty_version' => 'v3.95.16',
          'version' => '3.95.16.0',
          'reference' => '38bf8e3325afef2a4ed0319923957da8f6474d99',
          'type' => 'application',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../friendsofphp/php-cs-fixer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fruitcake/php-cors' => 
        array (
          'pretty_version' => 'v1.4.0',
          'version' => '1.4.0.0',
          'reference' => '38aaa6c3fd4c157ffe2a4d10aa8b9b16ba8de379',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../fruitcake/php-cors',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'graham-campbell/result-type' => 
        array (
          'pretty_version' => 'v1.1.4',
          'version' => '1.1.4.0',
          'reference' => 'e01f4a821471308ba86aa202fed6698b6b695e3b',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../graham-campbell/result-type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/guzzle' => 
        array (
          'pretty_version' => '7.15.1',
          'version' => '7.15.1.0',
          'reference' => '61443dfb33c62f308ee8add20f45b4d6e4bf8d2f',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../guzzlehttp/guzzle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/promises' => 
        array (
          'pretty_version' => '2.5.1',
          'version' => '2.5.1.0',
          'reference' => '9ad1e4fc607446a055b95870c7f668e93b5cff29',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../guzzlehttp/promises',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => 
        array (
          'pretty_version' => '2.13.0',
          'version' => '2.13.0.0',
          'reference' => 'dad89620b7a6edb60c15858442eb2e408b45d8f4',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../guzzlehttp/psr7',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/uri-template' => 
        array (
          'pretty_version' => 'v1.0.10',
          'version' => '1.0.10.0',
          'reference' => 'f6c24c21f42b990e9a58912b332d0874df6ba839',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../guzzlehttp/uri-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'hamcrest/hamcrest-php' => 
        array (
          'pretty_version' => 'v2.1.1',
          'version' => '2.1.1.0',
          'reference' => 'f8b1c0173b22fa6ec77a81fe63e5b01eba7e6487',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../hamcrest/hamcrest-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'iamcal/sql-parser' => 
        array (
          'pretty_version' => 'v0.7',
          'version' => '0.7.0.0',
          'reference' => '610392f38de49a44dab08dc1659960a29874c4b8',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../iamcal/sql-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'illuminate/auth' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/broadcasting' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/bus' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/cache' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/collections' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/concurrency' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/conditionable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/config' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/console' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/container' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/contracts' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/cookie' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/database' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/encryption' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/events' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/filesystem' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/hashing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/http' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/json-schema' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/log' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/macroable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/mail' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/notifications' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/pagination' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/pipeline' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/process' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/queue' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/redis' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/reflection' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/routing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/session' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/support' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/testing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/translation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/validation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'illuminate/view' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.64.0',
          ),
        ),
        'jean85/pretty-package-versions' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '4d7aa5dab42e2a76d99559706022885de0e18e1a',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../jean85/pretty-package-versions',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'kodova/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'larastan/larastan' => 
        array (
          'pretty_version' => 'v3.10.0',
          'version' => '3.10.0.0',
          'reference' => '2970f83398154178a739609c244577267c7ee8eb',
          'type' => 'phpstan-extension',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../larastan/larastan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/framework' => 
        array (
          'pretty_version' => 'v12.64.0',
          'version' => '12.64.0.0',
          'reference' => '727a8ea2949c23ca8b5316b86a00984b6017b7a0',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../laravel/framework',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/pail' => 
        array (
          'pretty_version' => 'v1.2.7',
          'version' => '1.2.7.0',
          'reference' => '2f7d27dada8effc48b8c424445a69cca7007daaa',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../laravel/pail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/pint' => 
        array (
          'pretty_version' => 'v1.29.3',
          'version' => '1.29.3.0',
          'reference' => 'da1d1111a6aa2e082d2a388b194afe1ba0a05d14',
          'type' => 'project',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../laravel/pint',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/prompts' => 
        array (
          'pretty_version' => 'v0.3.21',
          'version' => '0.3.21.0',
          'reference' => '7753c65c281c2550c7c183f14e18062073b7d821',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../laravel/prompts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/serializable-closure' => 
        array (
          'pretty_version' => 'v2.0.15',
          'version' => '2.0.15.0',
          'reference' => 'dccd8bcb851bb03fcc005df650b708b57cc52661',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../laravel/serializable-closure',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/tinker' => 
        array (
          'pretty_version' => 'v2.11.1',
          'version' => '2.11.1.0',
          'reference' => 'c9f80cc835649b5c1842898fb043f8cc098dd741',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../laravel/tinker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'league/commonmark' => 
        array (
          'pretty_version' => '2.8.3',
          'version' => '2.8.3.0',
          'reference' => '1902f60f984235023acbe03db6ad614a37b3c3e7',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../league/commonmark',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/config' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../league/config',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem' => 
        array (
          'pretty_version' => '3.35.2',
          'version' => '3.35.2.0',
          'reference' => 'b277b5dc3d56650b68904117124e79c851e12376',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../league/flysystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem-local' => 
        array (
          'pretty_version' => '3.31.0',
          'version' => '3.31.0.0',
          'reference' => '2f669db18a4c20c755c2bb7d3a7b0b2340488079',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../league/flysystem-local',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/mime-type-detection' => 
        array (
          'pretty_version' => '1.17.0',
          'version' => '1.17.0.0',
          'reference' => 'f5f47eff7c48ed1003069a2ca67f316fb4021c76',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../league/mime-type-detection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri' => 
        array (
          'pretty_version' => '7.8.1',
          'version' => '7.8.1.0',
          'reference' => '08cf38e3924d4f56238125547b5720496fac8fd4',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../league/uri',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri-interfaces' => 
        array (
          'pretty_version' => '7.8.1',
          'version' => '7.8.1.0',
          'reference' => '85d5c77c5d6d3af6c54db4a78246364908f3c928',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../league/uri-interfaces',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mockery/mockery' => 
        array (
          'pretty_version' => '1.6.12',
          'version' => '1.6.12.0',
          'reference' => '1f4efdd7d3beafe9807b08156dfcb176d18f1699',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../mockery/mockery',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'monolog/monolog' => 
        array (
          'pretty_version' => '3.10.0',
          'version' => '3.10.0.0',
          'reference' => 'b321dd6749f0bf7189444158a3ce785cc16d69b0',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../monolog/monolog',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mrpunyapal/peststan' => 
        array (
          'pretty_version' => '0.2.12',
          'version' => '0.2.12.0',
          'reference' => 'a18bf927fcff6dbb5ddb749e20b294486587b35c',
          'type' => 'phpstan-extension',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../mrpunyapal/peststan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'mtdowling/cron-expression' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '^1.0',
          ),
        ),
        'myclabs/deep-copy' => 
        array (
          'pretty_version' => '1.13.4',
          'version' => '1.13.4.0',
          'reference' => '07d290f0c47959fd5eed98c95ee5602db07e0b6a',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nesbot/carbon' => 
        array (
          'pretty_version' => '3.13.1',
          'version' => '3.13.1.0',
          'reference' => '2937ad3d1d2c506fd2bc97d571438a95641f44e2',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../nesbot/carbon',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/schema' => 
        array (
          'pretty_version' => 'v1.3.5',
          'version' => '1.3.5.0',
          'reference' => 'f0ab1a3cda782dbc5da270d28545236aa80c4002',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../nette/schema',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/utils' => 
        array (
          'pretty_version' => 'v4.1.5',
          'version' => '4.1.5.0',
          'reference' => 'b043439dbdf954e6c28b5ea7e34b0100f83165e0',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../nette/utils',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v5.8.0',
          'version' => '5.8.0.0',
          'reference' => '044a6a392ff8ad0d61f14370a5fbbd0a0107152f',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/collision' => 
        array (
          'pretty_version' => 'v8.9.5',
          'version' => '8.9.5.0',
          'reference' => 'fb53eacd509a1d303858e2d20cfebf2d630254ec',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../nunomaduro/collision',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/termwind' => 
        array (
          'pretty_version' => 'v2.4.0',
          'version' => '2.4.0.0',
          'reference' => '712a31b768f5daea284c2169a7d227031001b9a8',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../nunomaduro/termwind',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'orchestra/canvas' => 
        array (
          'pretty_version' => 'v10.2.1',
          'version' => '10.2.1.0',
          'reference' => '1323620d48f2b05bc7dd99eadd0403ef29293d6f',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../orchestra/canvas',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'orchestra/canvas-core' => 
        array (
          'pretty_version' => 'v10.2.0',
          'version' => '10.2.0.0',
          'reference' => '11fdb579f4f2d4bd68a22bd206cabc32e7856e32',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../orchestra/canvas-core',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'orchestra/sidekick' => 
        array (
          'pretty_version' => 'v1.2.20',
          'version' => '1.2.20.0',
          'reference' => '267a71b56cb2fe1a634d69fc99889c671b77ff43',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../orchestra/sidekick',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'orchestra/testbench' => 
        array (
          'pretty_version' => 'v10.11.0',
          'version' => '10.11.0.0',
          'reference' => 'd73b4426dacddd2c1f5e671e0efd7665b16d2b84',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../orchestra/testbench',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'orchestra/testbench-core' => 
        array (
          'pretty_version' => 'v10.14.1',
          'version' => '10.14.1.0',
          'reference' => '6b88b608ba794fcac18094c7d191591c852c286d',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../orchestra/testbench-core',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'orchestra/workbench' => 
        array (
          'pretty_version' => 'v10.2.0',
          'version' => '10.2.0.0',
          'reference' => '01212434bc1e3bd6c2c96f1977d0951b9fb91e97',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../orchestra/workbench',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest' => 
        array (
          'pretty_version' => 'v3.8.7',
          'version' => '3.8.7.0',
          'reference' => 'f108313b52e8c28dc7121ce34303f817a3790202',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../pestphp/pest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin' => 
        array (
          'pretty_version' => 'v3.0.0',
          'version' => '3.0.0.0',
          'reference' => 'e79b26c65bc11c41093b10150c1341cc5cdbea83',
          'type' => 'composer-plugin',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../pestphp/pest-plugin',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-arch' => 
        array (
          'pretty_version' => 'v3.1.1',
          'version' => '3.1.1.0',
          'reference' => 'db7bd9cb1612b223e16618d85475c6f63b9c8daa',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../pestphp/pest-plugin-arch',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-laravel' => 
        array (
          'pretty_version' => 'v3.2.0',
          'version' => '3.2.0.0',
          'reference' => '6801be82fd92b96e82dd72e563e5674b1ce365fc',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../pestphp/pest-plugin-laravel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-mutate' => 
        array (
          'pretty_version' => 'v3.0.5',
          'version' => '3.0.5.0',
          'reference' => 'e10dbdc98c9e2f3890095b4fe2144f63a5717e08',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../pestphp/pest-plugin-mutate',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/manifest' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '54750ef60c58e43759730615a392c31c80e23176',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../phar-io/manifest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/version' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../phar-io/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/reflection-common' => 
        array (
          'pretty_version' => '2.2.0',
          'version' => '2.2.0.0',
          'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../phpdocumentor/reflection-common',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/reflection-docblock' => 
        array (
          'pretty_version' => '6.0.3',
          'version' => '6.0.3.0',
          'reference' => '7bae67520aa9f5ecc506d646810bd40d9da54582',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../phpdocumentor/reflection-docblock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/type-resolver' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => '327a05bbee54120d4786a0dc67aad30226ad4cf9',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../phpdocumentor/type-resolver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpoption/phpoption' => 
        array (
          'pretty_version' => '1.9.5',
          'version' => '1.9.5.0',
          'reference' => '75365b91986c2405cf5e1e012c5595cd487a98be',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../phpoption/phpoption',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpdoc-parser' => 
        array (
          'pretty_version' => '2.3.3',
          'version' => '2.3.3.0',
          'reference' => 'fb19eedd2bb67ff8cf7a5502ad329e701d6398a3',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../phpstan/phpdoc-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '2.2.5',
          'version' => '2.2.5.0',
          'reference' => '909c1e5fef7989ac0d0c1c5c42e32a5c4f6198a0',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpstan/phpstan-deprecation-rules' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '6b5571001a7f04fa0422254c30a0017ec2f2cacc',
          'type' => 'phpstan-extension',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../phpstan/phpstan-deprecation-rules',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpstan/phpstan-phpunit' => 
        array (
          'pretty_version' => '2.0.18',
          'version' => '2.0.18.0',
          'reference' => 'f5dc20ff8082d02339b60cab68ec3eb0d859fb30',
          'type' => 'phpstan-extension',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../phpstan/phpstan-phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '11.0.12',
          'version' => '11.0.12.0',
          'reference' => '2c1ed04922802c15e1de5d7447b4856de949cf56',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../phpunit/php-code-coverage',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => 
        array (
          'pretty_version' => '5.1.1',
          'version' => '5.1.1.0',
          'reference' => '2f3a64888c814fc235386b7387dd5b5ed92ad903',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../phpunit/php-file-iterator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => 
        array (
          'pretty_version' => '5.0.1',
          'version' => '5.0.1.0',
          'reference' => 'c1ca3814734c07492b3d4c5f794f4b0995333da2',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../phpunit/php-invoker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '3e0404dc6b300e6bf56415467ebcb3fe4f33e964',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../phpunit/php-text-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' => 
        array (
          'pretty_version' => '7.0.1',
          'version' => '7.0.1.0',
          'reference' => '3b415def83fbcb41f991d9ebf16ae4ad8b7837b3',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '11.5.56',
          'version' => '11.5.56.0',
          'reference' => '5f83edffa6967c3db468d48a695ec7bcb02e9256',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/clock' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../psr/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/clock-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/container' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../psr/container',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/container-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.1|2.0',
          ),
        ),
        'psr/event-dispatcher' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../psr/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-client' => 
        array (
          'pretty_version' => '1.0.3',
          'version' => '1.0.3.0',
          'reference' => 'bb5906edc1c324c9a05aa0873d40117941e5fa90',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../psr/http-client',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-factory' => 
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'reference' => '2b4765fddfe3b508ac62f829e852b1501d3f6e8a',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../psr/http-factory',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-factory-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-message' => 
        array (
          'pretty_version' => '2.0',
          'version' => '2.0.0.0',
          'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../psr/http-message',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-message-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/log' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../psr/log',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/log-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
            1 => '3.0.0',
          ),
        ),
        'psr/simple-cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../psr/simple-cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/simple-cache-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
          ),
        ),
        'psy/psysh' => 
        array (
          'pretty_version' => 'v0.12.24',
          'version' => '0.12.24.0',
          'reference' => 'ca0fdcf8a7617afa3adfdf1b5fef573dffb69ca1',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../psy/psysh',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'ralouphie/getallheaders' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '120b605dfeb996808c31b6477290a714d356e822',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../ralouphie/getallheaders',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/collection' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '344572933ad0181accbf4ba763e85a0306a8c5e2',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../ramsey/collection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/uuid' => 
        array (
          'pretty_version' => '4.9.3',
          'version' => '4.9.3.0',
          'reference' => '1df15849d00943a67d677dc9cfd80795f038c9f8',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../ramsey/uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'react/cache' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => 'd47c472b64aa5608225f47965a484b75c7817d5b',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../react/cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'react/child-process' => 
        array (
          'pretty_version' => 'v0.6.7',
          'version' => '0.6.7.0',
          'reference' => '970f0e71945556422ee4570ccbabaedc3cf04ad3',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../react/child-process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'react/dns' => 
        array (
          'pretty_version' => 'v1.14.0',
          'version' => '1.14.0.0',
          'reference' => '7562c05391f42701c1fccf189c8225fece1cd7c3',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../react/dns',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'react/event-loop' => 
        array (
          'pretty_version' => 'v1.6.0',
          'version' => '1.6.0.0',
          'reference' => 'ba276bda6083df7e0050fd9b33f66ad7a4ac747a',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../react/event-loop',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'react/promise' => 
        array (
          'pretty_version' => 'v3.3.0',
          'version' => '3.3.0.0',
          'reference' => '23444f53a813a3296c1368bb104793ce8d88f04a',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../react/promise',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'react/socket' => 
        array (
          'pretty_version' => 'v1.17.0',
          'version' => '1.17.0.0',
          'reference' => 'ef5b17b81f6f60504c539313f94f2d826c5faa08',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../react/socket',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'react/stream' => 
        array (
          'pretty_version' => 'v1.4.0',
          'version' => '1.4.0.0',
          'reference' => '1e5b0acb8fe55143b5b426817155190eb6f5b18d',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../react/stream',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'rhumsaa/uuid' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '4.9.3',
          ),
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => '15c5dd40dc4f38794d383bb95465193f5e0ae180',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../sebastian/cli-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '54391c61e4af8078e5b276ab082b6d3c54c9ad64',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../sebastian/code-unit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit-reverse-lookup' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '183a9b2632194febd219bb9246eee421dad8d45e',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../sebastian/code-unit-reverse-lookup',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/comparator' => 
        array (
          'pretty_version' => '6.3.3',
          'version' => '6.3.3.0',
          'reference' => '2c95e1e86cb8dd41beb8d502057d1081ccc8eca9',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../sebastian/comparator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/complexity' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => 'ee41d384ab1906c68852636b6de493846e13e5a0',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../sebastian/complexity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '6.0.2',
          'version' => '6.0.2.0',
          'reference' => 'b4ccd857127db5d41a5b676f24b51371d76d8544',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '7.2.1',
          'version' => '7.2.1.0',
          'reference' => 'a5c75038693ad2e8d4b6c15ba2403532647830c4',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../sebastian/environment',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/exporter' => 
        array (
          'pretty_version' => '6.3.2',
          'version' => '6.3.2.0',
          'reference' => '70a298763b40b213ec087c51c739efcaa90bcd74',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '7.0.2',
          'version' => '7.0.2.0',
          'reference' => '3be331570a721f9a4b5917f4209773de17f747d7',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../sebastian/global-state',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => 'd36ad0d782e5756913e42ad87cb2890f4ffe467a',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../sebastian/lines-of-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => 
        array (
          'pretty_version' => '6.0.1',
          'version' => '6.0.1.0',
          'reference' => 'f5b498e631a74204185071eb41f33f38d64608aa',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../sebastian/object-enumerator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '6e1a43b411b2ad34146dee7524cb13a068bb35f9',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../sebastian/object-reflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => 
        array (
          'pretty_version' => '6.0.3',
          'version' => '6.0.3.0',
          'reference' => 'f6458abbf32a6c8174f8f26261475dc133b3d9dc',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../sebastian/recursion-context',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/type' => 
        array (
          'pretty_version' => '5.1.3',
          'version' => '5.1.3.0',
          'reference' => 'f77d2d4e78738c98d9a68d2596fe5e8fa380f449',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../sebastian/type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/version' => 
        array (
          'pretty_version' => '5.0.2',
          'version' => '5.0.2.0',
          'reference' => 'c687e3387b99f5b03b6caa64c74b63e2936ff874',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/once' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'staabm/side-effects-detector' => 
        array (
          'pretty_version' => '1.0.5',
          'version' => '1.0.5.0',
          'reference' => 'd8334211a140ce329c13726d4a715adbddd0a163',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../staabm/side-effects-detector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/clock' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => '701ef4de9705d6c32292ebee5e8044094a09fbf6',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../symfony/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/console' => 
        array (
          'pretty_version' => 'v7.4.14',
          'version' => '7.4.14.0',
          'reference' => '92f58bc4bf97a92ed1b9f367f0cd44f20bde0e87',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../symfony/console',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/css-selector' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => 'dc0e2be45c9b5588c82414f02ac574b4b986abcd',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../symfony/css-selector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v3.7.1',
          'version' => '3.7.1.0',
          'reference' => 'f3202fa1b5097b0af062dc978b32ecf63404e31d',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/error-handler' => 
        array (
          'pretty_version' => 'v7.4.14',
          'version' => '7.4.14.0',
          'reference' => '4e1a093b481f323e6e326451f9760c3868430673',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../symfony/error-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher' => 
        array (
          'pretty_version' => 'v8.1.1',
          'version' => '8.1.1.0',
          'reference' => 'abd6c11dc468725d1627302ad10f6cd486e9e3d0',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../symfony/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-contracts' => 
        array (
          'pretty_version' => 'v3.7.1',
          'version' => '3.7.1.0',
          'reference' => 'c7de7a00ffb67842132da02ea92988a39ccd9f4e',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../symfony/event-dispatcher-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.0|3.0',
          ),
        ),
        'symfony/filesystem' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => '99aec13b82b4967ec5088222c4a3ecca955949c2',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../symfony/filesystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/finder' => 
        array (
          'pretty_version' => 'v7.4.14',
          'version' => '7.4.14.0',
          'reference' => '13b38720174286f55d1761152b575a8d1436fc25',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../symfony/finder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-foundation' => 
        array (
          'pretty_version' => 'v7.4.14',
          'version' => '7.4.14.0',
          'reference' => '06db5ae1552177bf8572f8908839f12e3c06aed3',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../symfony/http-foundation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-kernel' => 
        array (
          'pretty_version' => 'v7.4.14',
          'version' => '7.4.14.0',
          'reference' => 'e99af79b1e776646eda0e1c23b7b45c184ff99be',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../symfony/http-kernel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mailer' => 
        array (
          'pretty_version' => 'v7.4.14',
          'version' => '7.4.14.0',
          'reference' => 'f88ce03ae73e3edb5c176ce1f337709996e88495',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../symfony/mailer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mime' => 
        array (
          'pretty_version' => 'v7.4.13',
          'version' => '7.4.13.0',
          'reference' => 'a845722765c4f6b2ce88beaf4f4479975b186770',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../symfony/mime',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/options-resolver' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => '88f9c561f678a02d54b897014049fa839e33ff82',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../symfony/options-resolver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/polyfill-ctype' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => '141046a8f9477948ff284fa65be2095baafb94f2',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../symfony/polyfill-ctype',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-grapheme' => 
        array (
          'pretty_version' => 'v1.38.1',
          'version' => '1.38.1.0',
          'reference' => 'e9247d281d694a5120554d9afaf54e070e88a603',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../symfony/polyfill-intl-grapheme',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-idn' => 
        array (
          'pretty_version' => 'v1.38.1',
          'version' => '1.38.1.0',
          'reference' => 'dc21118016c039a66235cf93d96b435ffb282412',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../symfony/polyfill-intl-idn',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' => 
        array (
          'pretty_version' => 'v1.38.0',
          'version' => '1.38.0.0',
          'reference' => '2d446c214bdbe5b71bde5011b060a05fece3ae6b',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../symfony/polyfill-intl-normalizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => 
        array (
          'pretty_version' => 'v1.38.2',
          'version' => '1.38.2.0',
          'reference' => 'd3d318bad5e7a1bfbd026009c8bfb8d8f99ae6b6',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../symfony/polyfill-mbstring',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php80' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => 'dfb55726c3a76ea3b6459fcfda1ec2d80a682411',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../symfony/polyfill-php80',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php81' => 
        array (
          'pretty_version' => 'v1.38.1',
          'version' => '1.38.1.0',
          'reference' => '6bfb9c766cacffbc8e118cb87217d08ed84e5cd7',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../symfony/polyfill-php81',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/polyfill-php83' => 
        array (
          'pretty_version' => 'v1.38.2',
          'version' => '1.38.2.0',
          'reference' => '796a26abb75ce49f3a84433cd81bf1009d73d5f8',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../symfony/polyfill-php83',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php84' => 
        array (
          'pretty_version' => 'v1.38.1',
          'version' => '1.38.1.0',
          'reference' => 'f4e1dfaee5b74aba5964fe1fd4dfc7ba5e3085fa',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../symfony/polyfill-php84',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php85' => 
        array (
          'pretty_version' => 'v1.38.1',
          'version' => '1.38.1.0',
          'reference' => 'ba2ba04f3352cfa2dcbbcb90aee13ed967f505b1',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../symfony/polyfill-php85',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-uuid' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => '26dfec253c4cf3e51b541b52ddf7e42cb0908e94',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../symfony/polyfill-uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/process' => 
        array (
          'pretty_version' => 'v7.4.13',
          'version' => '7.4.13.0',
          'reference' => 'f5804be144caceb570f6747519999636b664f24c',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../symfony/process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/routing' => 
        array (
          'pretty_version' => 'v7.4.13',
          'version' => '7.4.13.0',
          'reference' => '3a162171bb008e5e0f15dce6581373a4c0e8390d',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../symfony/routing',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/service-contracts' => 
        array (
          'pretty_version' => 'v3.7.1',
          'version' => '3.7.1.0',
          'reference' => 'c0a284bab1ed8aa0417e3d69250ab437739563a0',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../symfony/service-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/stopwatch' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => '21c07b026905d596e8379caeb115d87aa479499d',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../symfony/stopwatch',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/string' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => 'afd5944f4005862d961efb85c8bbd5c523c4e3c9',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../symfony/string',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation' => 
        array (
          'pretty_version' => 'v8.1.1',
          'version' => '8.1.1.0',
          'reference' => '342b4218630dc2cf284cedcb2080c80b13404014',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../symfony/translation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-contracts' => 
        array (
          'pretty_version' => 'v3.7.1',
          'version' => '3.7.1.0',
          'reference' => 'ccb206b98faccc511ebae8e5fad50f2dc0b30621',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../symfony/translation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.3|3.0',
          ),
        ),
        'symfony/uid' => 
        array (
          'pretty_version' => 'v7.4.9',
          'version' => '7.4.9.0',
          'reference' => '2676b524340abcfe4d6151ec698463cebafee439',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../symfony/uid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/var-dumper' => 
        array (
          'pretty_version' => 'v7.4.14',
          'version' => '7.4.14.0',
          'reference' => '9a3a56a4a1e65a5cb4f8d13801fe8ab0a170e358',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../symfony/var-dumper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/yaml' => 
        array (
          'pretty_version' => 'v7.4.14',
          'version' => '7.4.14.0',
          'reference' => 'f8f328665ace2370d1e10645b807ba1646dc7dcc',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../symfony/yaml',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'ta-tikoma/phpunit-architecture-test' => 
        array (
          'pretty_version' => '0.8.7',
          'version' => '0.8.7.0',
          'reference' => '1248f3f506ca9641d4f68cebcd538fa489754db8',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../ta-tikoma/phpunit-architecture-test',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '1.3.1',
          'version' => '1.3.1.0',
          'reference' => 'b7489ce515e168639d17feec34b8847c326b0b3c',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../theseer/tokenizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'tijsverkoyen/css-to-inline-styles' => 
        array (
          'pretty_version' => 'v2.4.0',
          'version' => '2.4.0.0',
          'reference' => 'f0292ccf0ec75843d65027214426b6b163b48b41',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../tijsverkoyen/css-to-inline-styles',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'vlucas/phpdotenv' => 
        array (
          'pretty_version' => 'v5.6.4',
          'version' => '5.6.4.0',
          'reference' => '416df702837983f8d5ff48c9c3fee4f5f57b980b',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../vlucas/phpdotenv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'voku/portable-ascii' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '8e1051fe39379367aecf014f41744ce7539a856f',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../voku/portable-ascii',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'webmozart/assert' => 
        array (
          'pretty_version' => '2.4.1',
          'version' => '2.4.1.0',
          'reference' => '2ccb7c2e821038c03a3e6e1700c570c158c55f70',
          'type' => 'library',
          'install_path' => 'E:\\codes\\mpac-essentials\\vendor\\composer/../webmozart/assert',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    'E:\\codes\\mpac-essentials\\vendor\\larastan\\larastan\\bootstrap.php' => '5a3eacbf63b3e41659adfee92facededf8e020a932800f93c9a8b0e67f235805',
    'E:\\codes\\mpac-essentials\\vendor\\nesbot\\carbon\\lazy\\Carbon\\UnprotectedDatePeriod.php' => 'a5aa8ee50d1b999eddced70f94f8d759d7fe0575e7d583d94ea119483a6fc6ae',
    'phar://E:\\codes\\mpac-essentials\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\Attribute85.php' => 'cb8b31e82c61ce197871c9e8a6f122256751f2ab606dd2be90846d4fa5f8933e',
    'phar://E:\\codes\\mpac-essentials\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionAttribute.php' => 'c0068e383717870a304781d462f7e2afe1c6f24e9133851852a2aca96b4fa26f',
    'phar://E:\\codes\\mpac-essentials\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionIntersectionType.php' => '65fe0a8bc6fe285d8ddc8798ab5b9299920af70db5ad74596bc08df823e7c5d9',
    'phar://E:\\codes\\mpac-essentials\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionUnionType.php' => '1e2fe940e4ba4e00d9ee6adb2af3ee1bf333e6f8afe61c61deb038886d293427',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'PDO',
    2 => 'PDO_ODBC',
    3 => 'Phar',
    4 => 'Reflection',
    5 => 'SPL',
    6 => 'SimpleXML',
    7 => 'Zend OPcache',
    8 => 'bcmath',
    9 => 'calendar',
    10 => 'ctype',
    11 => 'curl',
    12 => 'date',
    13 => 'dom',
    14 => 'exif',
    15 => 'fileinfo',
    16 => 'filter',
    17 => 'gd',
    18 => 'hash',
    19 => 'iconv',
    20 => 'intl',
    21 => 'json',
    22 => 'ldap',
    23 => 'libxml',
    24 => 'mbstring',
    25 => 'mysqli',
    26 => 'mysqlnd',
    27 => 'oci8',
    28 => 'openssl',
    29 => 'pcre',
    30 => 'pdo_mysql',
    31 => 'pdo_pgsql',
    32 => 'pdo_sqlite',
    33 => 'random',
    34 => 'readline',
    35 => 'session',
    36 => 'sodium',
    37 => 'sqlite3',
    38 => 'standard',
    39 => 'tokenizer',
    40 => 'xml',
    41 => 'xmlreader',
    42 => 'xmlwriter',
    43 => 'xsl',
    44 => 'zip',
    45 => 'zlib',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => '10',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
); },
	'locallyIgnoredErrorsCallback' => static function (): array { return array (
); },
	'linesToIgnore' => array (
  'E:\\codes\\mpac-essentials\\src\\Traits\\BetterEnum.php' => 
  array (
    'E:\\codes\\mpac-essentials\\src\\Traits\\BetterEnum.php' => 
    array (
      8 => 
      array (
        0 => 
        array (
          'name' => 'trait.unused',
          'comment' => NULL,
        ),
      ),
    ),
  ),
),
	'unmatchedLineIgnores' => array (
),
	'collectedDataCallback' => static function (): array { return array (
  'E:\\codes\\mpac-essentials\\src\\Helpers\\helpers.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\FunctionWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'mpac_only_digits',
        1 => 
        array (
          0 => 'f' . "\0" . 'preg_replace',
        ),
      ),
    ),
  ),
  'E:\\codes\\mpac-essentials\\src\\Support\\Document.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'ToneGabes\\MpacEssentials\\Support\\Document',
        1 => 
        array (
        ),
      ),
    ),
  ),
  'E:\\codes\\mpac-essentials\\src\\Support\\Mask.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'ToneGabes\\MpacEssentials\\Support\\Mask',
        1 => 'apply',
        2 => 'ToneGabes\\MpacEssentials\\Support\\Mask',
        3 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 'ToneGabes\\MpacEssentials\\Support\\Mask',
        1 => 'onlyDigits',
        2 => 'ToneGabes\\MpacEssentials\\Support\\Mask',
        3 => 
        array (
          0 => 'f' . "\0" . 'preg_replace',
        ),
      ),
    ),
  ),
  'E:\\codes\\mpac-essentials\\src\\Support\\Money.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'ToneGabes\\MpacEssentials\\Support\\Money',
        1 => 'toCents',
        2 => 'ToneGabes\\MpacEssentials\\Support\\Money',
        3 => 
        array (
          0 => 'f' . "\0" . 'str_replace',
          1 => 'f' . "\0" . 'preg_replace',
        ),
      ),
      1 => 
      array (
        0 => 'ToneGabes\\MpacEssentials\\Support\\Money',
        1 => 'fromCents',
        2 => 'ToneGabes\\MpacEssentials\\Support\\Money',
        3 => 
        array (
        ),
      ),
      2 => 
      array (
        0 => 'ToneGabes\\MpacEssentials\\Support\\Money',
        1 => 'fallback',
        2 => 'ToneGabes\\MpacEssentials\\Support\\Money',
        3 => 
        array (
        ),
      ),
    ),
  ),
  'E:\\codes\\mpac-essentials\\src\\Traits\\BetterEnum.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 'ToneGabes\\MpacEssentials\\Traits\\BetterEnum',
        1 => 8,
      ),
    ),
  ),
); },
	'dependencies' => array (
  'E:\\codes\\mpac-essentials\\src\\EssentialsServiceProvider.php' => 
  array (
    'fileHash' => 'd1de041002eb1b97ea5083c3a115a4e6ba46c7c699a70ff652a0e0b2618ca181',
    'dependentFiles' => 
    array (
    ),
  ),
  'E:\\codes\\mpac-essentials\\src\\Facades\\DocumentFacade.php' => 
  array (
    'fileHash' => 'fcd732309230ea5ec4d4ba0fd5c2200fde9a3a352673a8ca199afb9d5cc1709d',
    'dependentFiles' => 
    array (
    ),
  ),
  'E:\\codes\\mpac-essentials\\src\\Facades\\MaskFacade.php' => 
  array (
    'fileHash' => '64473ba10ac293d96a79faa7d52f74ae4bc9dedc6b4509b9e2ba32d98dc24a17',
    'dependentFiles' => 
    array (
    ),
  ),
  'E:\\codes\\mpac-essentials\\src\\Facades\\MoneyFacade.php' => 
  array (
    'fileHash' => '6a24f0fce9b190ce1285a52f837445512e148caba037d59bcf780cf9eb6d8dcc',
    'dependentFiles' => 
    array (
    ),
  ),
  'E:\\codes\\mpac-essentials\\src\\Helpers\\helpers.php' => 
  array (
    'fileHash' => '04f004194a93bfc11a967a7d3e2ccef7298f4a97807430fcf2d8c4afef2460b6',
    'dependentFiles' => 
    array (
    ),
  ),
  'E:\\codes\\mpac-essentials\\src\\Support\\Arr.php' => 
  array (
    'fileHash' => '67f0e7aec18784430f9b318ebd4bf9dfe9f61e36b8d2b768b65ee220e6a3a662',
    'dependentFiles' => 
    array (
      0 => 'E:\\codes\\mpac-essentials\\src\\EssentialsServiceProvider.php',
    ),
  ),
  'E:\\codes\\mpac-essentials\\src\\Support\\DateTime.php' => 
  array (
    'fileHash' => '962f31512a7f012938d3fd3464e9c95a0b56bb6e78fd8461712ac6797ab5ab9c',
    'dependentFiles' => 
    array (
      0 => 'E:\\codes\\mpac-essentials\\src\\EssentialsServiceProvider.php',
    ),
  ),
  'E:\\codes\\mpac-essentials\\src\\Support\\Document.php' => 
  array (
    'fileHash' => 'cc8b4bbe7000af4d769e07f882088d153abdaf242351714c6754df76ae7c19b8',
    'dependentFiles' => 
    array (
      0 => 'E:\\codes\\mpac-essentials\\src\\EssentialsServiceProvider.php',
      1 => 'E:\\codes\\mpac-essentials\\src\\Helpers\\helpers.php',
    ),
  ),
  'E:\\codes\\mpac-essentials\\src\\Support\\Mask.php' => 
  array (
    'fileHash' => 'eb32df723bd2329f78cf3f48d18b02f76f383679ab5776cd83810416372b6b5c',
    'dependentFiles' => 
    array (
      0 => 'E:\\codes\\mpac-essentials\\src\\EssentialsServiceProvider.php',
      1 => 'E:\\codes\\mpac-essentials\\src\\Helpers\\helpers.php',
      2 => 'E:\\codes\\mpac-essentials\\src\\Support\\Document.php',
    ),
  ),
  'E:\\codes\\mpac-essentials\\src\\Support\\Money.php' => 
  array (
    'fileHash' => '772d26c46a35f9988ca8b76af6268aeb100394ed9482521eec62968282719499',
    'dependentFiles' => 
    array (
      0 => 'E:\\codes\\mpac-essentials\\src\\EssentialsServiceProvider.php',
      1 => 'E:\\codes\\mpac-essentials\\src\\Helpers\\helpers.php',
    ),
  ),
  'E:\\codes\\mpac-essentials\\src\\Traits\\BetterEnum.php' => 
  array (
    'fileHash' => 'ba25ae01c0f61c1e5a989754e2971022309ed199380b0c2e3285ef3503d388a3',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'packageDependencies' => array (
  'E:\\codes\\mpac-essentials\\src\\EssentialsServiceProvider.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'psr/container',
  ),
  'E:\\codes\\mpac-essentials\\src\\Facades\\DocumentFacade.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'E:\\codes\\mpac-essentials\\src\\Facades\\MaskFacade.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'E:\\codes\\mpac-essentials\\src\\Facades\\MoneyFacade.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'E:\\codes\\mpac-essentials\\src\\Helpers\\helpers.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'E:\\codes\\mpac-essentials\\src\\Support\\Arr.php' => 
  array (
  ),
  'E:\\codes\\mpac-essentials\\src\\Support\\DateTime.php' => 
  array (
    0 => 'nesbot/carbon',
    1 => 'laravel/framework',
  ),
  'E:\\codes\\mpac-essentials\\src\\Support\\Document.php' => 
  array (
  ),
  'E:\\codes\\mpac-essentials\\src\\Support\\Mask.php' => 
  array (
  ),
  'E:\\codes\\mpac-essentials\\src\\Support\\Money.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'E:\\codes\\mpac-essentials\\src\\Traits\\BetterEnum.php' => 
  array (
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  'E:\\codes\\mpac-essentials\\src\\EssentialsServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'ToneGabes\\MpacEssentials\\EssentialsServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register package bindings.
     */',
             'namespace' => 'ToneGabes\\MpacEssentials',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'arr' => 'ToneGabes\\MpacEssentials\\Support\\Arr',
              'datetime' => 'ToneGabes\\MpacEssentials\\Support\\DateTime',
              'document' => 'ToneGabes\\MpacEssentials\\Support\\Document',
              'mask' => 'ToneGabes\\MpacEssentials\\Support\\Mask',
              'money' => 'ToneGabes\\MpacEssentials\\Support\\Money',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap package services.
     */',
             'namespace' => 'ToneGabes\\MpacEssentials',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'arr' => 'ToneGabes\\MpacEssentials\\Support\\Arr',
              'datetime' => 'ToneGabes\\MpacEssentials\\Support\\DateTime',
              'document' => 'ToneGabes\\MpacEssentials\\Support\\Document',
              'mask' => 'ToneGabes\\MpacEssentials\\Support\\Mask',
              'money' => 'ToneGabes\\MpacEssentials\\Support\\Money',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'E:\\codes\\mpac-essentials\\src\\Facades\\DocumentFacade.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'ToneGabes\\MpacEssentials\\Facades\\DocumentFacade',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @method static string formatCpf(?string $value)
 * @method static string formatCnpj(?string $value)
 * @method static bool isValidCpf(?string $value)
 * @method static bool isValidCnpj(?string $value)
 *
 * @see Document
 */',
         'namespace' => 'ToneGabes\\MpacEssentials\\Facades',
         'uses' => 
        array (
          'facade' => 'Illuminate\\Support\\Facades\\Facade',
          'document' => 'ToneGabes\\MpacEssentials\\Support\\Document',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\Facades\\Facade',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getFacadeAccessor',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the registered name of the component.
     */',
             'namespace' => 'ToneGabes\\MpacEssentials\\Facades',
             'uses' => 
            array (
              'facade' => 'Illuminate\\Support\\Facades\\Facade',
              'document' => 'ToneGabes\\MpacEssentials\\Support\\Document',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'E:\\codes\\mpac-essentials\\src\\Facades\\MaskFacade.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'ToneGabes\\MpacEssentials\\Facades\\MaskFacade',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @method static string apply(?string $value, string $pattern)
 * @method static string onlyDigits(?string $value)
 *
 * @see Mask
 */',
         'namespace' => 'ToneGabes\\MpacEssentials\\Facades',
         'uses' => 
        array (
          'facade' => 'Illuminate\\Support\\Facades\\Facade',
          'mask' => 'ToneGabes\\MpacEssentials\\Support\\Mask',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\Facades\\Facade',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getFacadeAccessor',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the registered name of the component.
     */',
             'namespace' => 'ToneGabes\\MpacEssentials\\Facades',
             'uses' => 
            array (
              'facade' => 'Illuminate\\Support\\Facades\\Facade',
              'mask' => 'ToneGabes\\MpacEssentials\\Support\\Mask',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'E:\\codes\\mpac-essentials\\src\\Facades\\MoneyFacade.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'ToneGabes\\MpacEssentials\\Facades\\MoneyFacade',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @method static string format(int|float|string|null $value, ?string $currency = null, ?string $locale = null)
 * @method static int toCents(int|float|string|null $value)
 * @method static float fromCents(?int $cents)
 *
 * @see Money
 */',
         'namespace' => 'ToneGabes\\MpacEssentials\\Facades',
         'uses' => 
        array (
          'facade' => 'Illuminate\\Support\\Facades\\Facade',
          'money' => 'ToneGabes\\MpacEssentials\\Support\\Money',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\Facades\\Facade',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getFacadeAccessor',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the registered name of the component.
     */',
             'namespace' => 'ToneGabes\\MpacEssentials\\Facades',
             'uses' => 
            array (
              'facade' => 'Illuminate\\Support\\Facades\\Facade',
              'money' => 'ToneGabes\\MpacEssentials\\Support\\Money',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'E:\\codes\\mpac-essentials\\src\\Helpers\\helpers.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'mpac_only_digits',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Retorna apenas os dígitos de uma string.
     */',
         'namespace' => NULL,
         'uses' => 
        array (
          'document' => 'ToneGabes\\MpacEssentials\\Support\\Document',
          'mask' => 'ToneGabes\\MpacEssentials\\Support\\Mask',
          'money' => 'ToneGabes\\MpacEssentials\\Support\\Money',
        ),
         'constUses' => 
        array (
        ),
      )),
       'byRef' => false,
       'returnType' => 'string',
       'parameters' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'value',
           'type' => '?string',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
           'phpDoc' => NULL,
           'flags' => 0,
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
    1 => 
    \PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'mpac_mask',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Aplica uma máscara a um valor.
     *
     * Exemplo: mpac_mask(\'12345678901\', \'###.###.###-##\')
     */',
         'namespace' => NULL,
         'uses' => 
        array (
          'document' => 'ToneGabes\\MpacEssentials\\Support\\Document',
          'mask' => 'ToneGabes\\MpacEssentials\\Support\\Mask',
          'money' => 'ToneGabes\\MpacEssentials\\Support\\Money',
        ),
         'constUses' => 
        array (
        ),
      )),
       'byRef' => false,
       'returnType' => 'string',
       'parameters' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'value',
           'type' => '?string',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
           'phpDoc' => NULL,
           'flags' => 0,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'pattern',
           'type' => 'string',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
           'phpDoc' => NULL,
           'flags' => 0,
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
    2 => 
    \PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'mpac_cpf',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Formata um CPF (###.###.###-##).
     */',
         'namespace' => NULL,
         'uses' => 
        array (
          'document' => 'ToneGabes\\MpacEssentials\\Support\\Document',
          'mask' => 'ToneGabes\\MpacEssentials\\Support\\Mask',
          'money' => 'ToneGabes\\MpacEssentials\\Support\\Money',
        ),
         'constUses' => 
        array (
        ),
      )),
       'byRef' => false,
       'returnType' => 'string',
       'parameters' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'value',
           'type' => '?string',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
           'phpDoc' => NULL,
           'flags' => 0,
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
    3 => 
    \PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'mpac_cnpj',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Formata um CNPJ (##.###.###/####-##).
     */',
         'namespace' => NULL,
         'uses' => 
        array (
          'document' => 'ToneGabes\\MpacEssentials\\Support\\Document',
          'mask' => 'ToneGabes\\MpacEssentials\\Support\\Mask',
          'money' => 'ToneGabes\\MpacEssentials\\Support\\Money',
        ),
         'constUses' => 
        array (
        ),
      )),
       'byRef' => false,
       'returnType' => 'string',
       'parameters' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'value',
           'type' => '?string',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
           'phpDoc' => NULL,
           'flags' => 0,
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
    4 => 
    \PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'mpac_money',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Formata um valor monetário.
     */',
         'namespace' => NULL,
         'uses' => 
        array (
          'document' => 'ToneGabes\\MpacEssentials\\Support\\Document',
          'mask' => 'ToneGabes\\MpacEssentials\\Support\\Mask',
          'money' => 'ToneGabes\\MpacEssentials\\Support\\Money',
        ),
         'constUses' => 
        array (
        ),
      )),
       'byRef' => false,
       'returnType' => 'string',
       'parameters' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'value',
           'type' => 'int|float|string|null',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
           'phpDoc' => NULL,
           'flags' => 0,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'currency',
           'type' => '?string',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
           'attributes' => 
          array (
          ),
           'phpDoc' => NULL,
           'flags' => 0,
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'E:\\codes\\mpac-essentials\\src\\Support\\Arr.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'ToneGabes\\MpacEssentials\\Support\\Arr',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'compact',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Remove chaves com valores null, string vazia ou arrays vazios.
     *
     * @param  array<string|int, mixed>  $array
     * @return array<string|int, mixed>
     */',
             'namespace' => 'ToneGabes\\MpacEssentials\\Support',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'array',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'recursive',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'keysToSnake',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Converte chaves do array para snake_case.
     *
     * @param  array<string|int, mixed>  $array
     * @return array<string|int, mixed>
     */',
             'namespace' => 'ToneGabes\\MpacEssentials\\Support',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'array',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'recursive',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'E:\\codes\\mpac-essentials\\src\\Support\\DateTime.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'ToneGabes\\MpacEssentials\\Support\\DateTime',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'formatBr',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Formata uma data no padrão brasileiro (d/m/Y).
     */',
             'namespace' => 'ToneGabes\\MpacEssentials\\Support',
             'uses' => 
            array (
              'carbon' => 'Carbon\\Carbon',
              'carboninterface' => 'Carbon\\CarbonInterface',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'Carbon\\CarbonInterface|string|null',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'format',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'formatBrDateTime',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Formata data e hora no padrão brasileiro (d/m/Y H:i).
     */',
             'namespace' => 'ToneGabes\\MpacEssentials\\Support',
             'uses' => 
            array (
              'carbon' => 'Carbon\\Carbon',
              'carboninterface' => 'Carbon\\CarbonInterface',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'Carbon\\CarbonInterface|string|null',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'now',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Retorna uma instância Carbon no timezone configurado do package.
     */',
             'namespace' => 'ToneGabes\\MpacEssentials\\Support',
             'uses' => 
            array (
              'carbon' => 'Carbon\\Carbon',
              'carboninterface' => 'Carbon\\CarbonInterface',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Carbon\\Carbon',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'E:\\codes\\mpac-essentials\\src\\Support\\Document.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'ToneGabes\\MpacEssentials\\Support\\Document',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'mask',
               'type' => 'ToneGabes\\MpacEssentials\\Support\\Mask',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 68,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'formatCpf',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Formata um CPF no padrão ###.###.###-##.
     */',
             'namespace' => 'ToneGabes\\MpacEssentials\\Support',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'formatCnpj',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Formata um CNPJ no padrão ##.###.###/####-##.
     */',
             'namespace' => 'ToneGabes\\MpacEssentials\\Support',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isValidCpf',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Valida se o CPF é válido (dígitos verificadores).
     */',
             'namespace' => 'ToneGabes\\MpacEssentials\\Support',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isValidCnpj',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Valida se o CNPJ é válido (dígitos verificadores).
     */',
             'namespace' => 'ToneGabes\\MpacEssentials\\Support',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'E:\\codes\\mpac-essentials\\src\\Support\\Mask.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'ToneGabes\\MpacEssentials\\Support\\Mask',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'apply',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Aplica uma máscara a um valor.
     *
     * Caracteres `#` são substituídos pelos dígitos/caracteres do valor.
     * Demais caracteres do padrão são preservados.
     *
     * @param  string|null  $value  Valor a ser mascarado
     * @param  string  $pattern  Padrão da máscara (ex: ###.###.###-##)
     */',
             'namespace' => 'ToneGabes\\MpacEssentials\\Support',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'pattern',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'onlyDigits',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Remove todos os caracteres não numéricos.
     */',
             'namespace' => 'ToneGabes\\MpacEssentials\\Support',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'E:\\codes\\mpac-essentials\\src\\Support\\Money.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'ToneGabes\\MpacEssentials\\Support\\Money',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'format',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Formata um valor monetário conforme locale e moeda configurados.
     *
     * @param  int|float|string|null  $value  Valor numérico
     * @param  string|null  $currency  Código ISO da moeda (ex: BRL)
     * @param  string|null  $locale  Locale BCP 47 (ex: pt_BR)
     */',
             'namespace' => 'ToneGabes\\MpacEssentials\\Support',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'int|float|string|null',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'currency',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'locale',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toCents',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Converte reais (float) para centavos (int).
     */',
             'namespace' => 'ToneGabes\\MpacEssentials\\Support',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'int|float|string|null',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fromCents',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Converte centavos (int) para reais (float).
     */',
             'namespace' => 'ToneGabes\\MpacEssentials\\Support',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'float',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'cents',
               'type' => 'int|null',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'E:\\codes\\mpac-essentials\\src\\Traits\\BetterEnum.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'name' => 'ToneGabes\\MpacEssentials\\Traits\\BetterEnum',
       'phpDoc' => NULL,
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'names',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return string[]
     */',
             'namespace' => 'ToneGabes\\MpacEssentials\\Traits',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'values',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return string[]
     */',
             'namespace' => 'ToneGabes\\MpacEssentials\\Traits',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'options',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, string>
     */',
             'namespace' => 'ToneGabes\\MpacEssentials\\Traits',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'random',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'asArray',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, string>
     */',
             'namespace' => 'ToneGabes\\MpacEssentials\\Traits',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];
