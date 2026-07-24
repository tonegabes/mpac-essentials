<?php declare(strict_types = 1);

// osfsl-E:/codes/mpac-essentials/vendor/composer/../pestphp/pest/src/Expectations/HigherOrderExpectation.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pest\Expectations\HigherOrderExpectation
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-fb9ab7189e4189f38e3c44c5a236c588335bae104e2054e57c2ea517e42628c5-8.4.20-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pest\\Expectations\\HigherOrderExpectation',
        'filename' => 'E:/codes/mpac-essentials/vendor/composer/../pestphp/pest/src/Expectations/HigherOrderExpectation.php',
      ),
    ),
    'namespace' => 'Pest\\Expectations',
    'name' => 'Pest\\Expectations\\HigherOrderExpectation',
    'shortName' => 'HigherOrderExpectation',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 32,
    'docComment' => '/**
 * @internal
 *
 * @template TOriginalValue
 * @template TValue
 *
 * @mixin Expectation<TOriginalValue>
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 19,
    'endLine' => 189,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Pest\\Concerns\\Retrievable',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'expectation' => 
      array (
        'declaringClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'implementingClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'name' => 'expectation',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'Pest\\Expectation',
                  'isIdentifier' => false,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'Pest\\Expectations\\EachExpectation',
                  'isIdentifier' => false,
                ),
              ),
            ),
          ),
        ),
        'default' => NULL,
        'docComment' => '/**
 * @var Expectation<TValue>|EachExpectation<TValue>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 26,
        'endLine' => 26,
        'startColumn' => 5,
        'endColumn' => 53,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'opposite' => 
      array (
        'declaringClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'implementingClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'name' => 'opposite',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 31,
            'endLine' => 31,
            'startTokenPos' => 66,
            'startFilePos' => 527,
            'endTokenPos' => 66,
            'endFilePos' => 531,
          ),
        ),
        'docComment' => '/**
 * Indicates if the expectation is the opposite.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 31,
        'endLine' => 31,
        'startColumn' => 5,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'shouldReset' => 
      array (
        'declaringClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'implementingClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'name' => 'shouldReset',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 36,
            'endLine' => 36,
            'startTokenPos' => 79,
            'startFilePos' => 643,
            'endTokenPos' => 79,
            'endFilePos' => 647,
          ),
        ),
        'docComment' => '/**
 * Indicates if the expectation should reset the value.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 36,
        'endLine' => 36,
        'startColumn' => 5,
        'endColumn' => 38,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'original' => 
      array (
        'declaringClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'implementingClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'name' => 'original',
        'modifiers' => 132,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Expectation',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 44,
        'endLine' => 44,
        'startColumn' => 33,
        'endColumn' => 70,
        'isPromoted' => true,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
    ),
    'immediateMethods' => 
    array (
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'original' => 
          array (
            'name' => 'original',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Pest\\Expectation',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 44,
            'endLine' => 44,
            'startColumn' => 33,
            'endColumn' => 70,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 44,
            'endLine' => 44,
            'startColumn' => 73,
            'endColumn' => 84,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Creates a new higher order expectation.
 *
 * @param  Expectation<TOriginalValue>  $original
 * @param  TValue  $value
 */',
        'startLine' => 44,
        'endLine' => 47,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest\\Expectations',
        'declaringClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'implementingClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'currentClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'aliasName' => NULL,
      ),
      'not' => 
      array (
        'name' => 'not',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Creates the opposite expectation for the value.
 *
 * @return self<TOriginalValue, TValue>
 */',
        'startLine' => 54,
        'endLine' => 59,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest\\Expectations',
        'declaringClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'implementingClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'currentClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'aliasName' => NULL,
      ),
      'expect' => 
      array (
        'name' => 'expect',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 69,
            'endLine' => 69,
            'startColumn' => 28,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Expectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Creates a new Expectation.
 *
 * @template TExpectValue
 *
 * @param  TExpectValue  $value
 * @return Expectation<TExpectValue>
 */',
        'startLine' => 69,
        'endLine' => 72,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest\\Expectations',
        'declaringClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'implementingClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'currentClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'aliasName' => NULL,
      ),
      'and' => 
      array (
        'name' => 'and',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 82,
            'endLine' => 82,
            'startColumn' => 25,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Expectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Creates a new expectation.
 *
 * @template TExpectValue
 *
 * @param  TExpectValue  $value
 * @return Expectation<TExpectValue>
 */',
        'startLine' => 82,
        'endLine' => 85,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest\\Expectations',
        'declaringClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'implementingClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'currentClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'aliasName' => NULL,
      ),
      'scoped' => 
      array (
        'name' => 'scoped',
        'parameters' => 
        array (
          'expectation' => 
          array (
            'name' => 'expectation',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Closure',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 94,
            'endLine' => 94,
            'startColumn' => 28,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Scope an expectation callback to the current value in
 * the HigherOrderExpectation chain.
 *
 * @param  Closure(Expectation<TValue>): void  $expectation
 * @return HigherOrderExpectation<TOriginalValue, TOriginalValue>
 */',
        'startLine' => 94,
        'endLine' => 99,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest\\Expectations',
        'declaringClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'implementingClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'currentClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'aliasName' => NULL,
      ),
      'json' => 
      array (
        'name' => 'json',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Creates a new expectation with the decoded JSON value.
 *
 * @return self<TOriginalValue, array<string|int, mixed>|bool>
 */',
        'startLine' => 106,
        'endLine' => 109,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest\\Expectations',
        'declaringClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'implementingClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'currentClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'aliasName' => NULL,
      ),
      '__call' => 
      array (
        'name' => '__call',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 117,
            'endLine' => 117,
            'startColumn' => 28,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'arguments' => 
          array (
            'name' => 'arguments',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 117,
            'endLine' => 117,
            'startColumn' => 42,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Dynamically calls methods on the class with the given arguments.
 *
 * @param  array<int, mixed>  $arguments
 * @return self<TOriginalValue, mixed>|self<TOriginalValue, TValue>
 */',
        'startLine' => 117,
        'endLine' => 125,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest\\Expectations',
        'declaringClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'implementingClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'currentClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'aliasName' => NULL,
      ),
      '__get' => 
      array (
        'name' => '__get',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 132,
            'endLine' => 132,
            'startColumn' => 27,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Accesses properties in the value or in the expectation.
 *
 * @return self<TOriginalValue, mixed>|self<TOriginalValue, TValue>
 */',
        'startLine' => 132,
        'endLine' => 146,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest\\Expectations',
        'declaringClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'implementingClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'currentClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'aliasName' => NULL,
      ),
      'expectationHasMethod' => 
      array (
        'name' => 'expectationHasMethod',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 151,
            'endLine' => 151,
            'startColumn' => 43,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the original expectation has the given method name.
 */',
        'startLine' => 151,
        'endLine' => 161,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Pest\\Expectations',
        'declaringClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'implementingClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'currentClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'aliasName' => NULL,
      ),
      'getValue' => 
      array (
        'name' => 'getValue',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'mixed',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieve the applicable value based on the current reset condition.
 *
 * @return TOriginalValue|TValue
 */',
        'startLine' => 168,
        'endLine' => 171,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Pest\\Expectations',
        'declaringClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'implementingClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'currentClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'aliasName' => NULL,
      ),
      'performAssertion' => 
      array (
        'name' => 'performAssertion',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 179,
            'endLine' => 179,
            'startColumn' => 39,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'arguments' => 
          array (
            'name' => 'arguments',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 179,
            'endLine' => 179,
            'startColumn' => 53,
            'endColumn' => 68,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Performs the given assertion with the current expectation.
 *
 * @param  array<int, mixed>  $arguments
 * @return self<TOriginalValue, TValue>
 */',
        'startLine' => 179,
        'endLine' => 188,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Pest\\Expectations',
        'declaringClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'implementingClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'currentClassName' => 'Pest\\Expectations\\HigherOrderExpectation',
        'aliasName' => NULL,
      ),
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
      ),
      'modifiers' => 
      array (
      ),
      'precedences' => 
      array (
      ),
      'hashes' => 
      array (
      ),
    ),
  ),
));