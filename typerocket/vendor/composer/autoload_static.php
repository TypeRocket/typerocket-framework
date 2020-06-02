<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbba67f953cb39d5f2b0ecb93b1b3ae96
{
    public static $files = array (
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '2bf7fd0087ff13c2aa5e673ea4ea7303' => __DIR__ . '/..' . '/typerocket/core/functions/functions.php',
        '18b840c6eff6cb7ed2b94475f3f1a95a' => __DIR__ . '/..' . '/typerocket/core/functions/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TypeRocket\\' => 11,
            'TypeRocketThemeOptions\\' => 23,
            'TypeRocketSEO\\' => 14,
            'TypeRocketPageBuilder\\' => 22,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Debug\\' => 24,
            'Symfony\\Component\\Console\\' => 26,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TypeRocket\\' => 
        array (
            0 => __DIR__ . '/..' . '/typerocket/core/src',
        ),
        'TypeRocketThemeOptions\\' => 
        array (
            0 => __DIR__ . '/..' . '/typerocket/plugin-theme-options/src',
        ),
        'TypeRocketSEO\\' => 
        array (
            0 => __DIR__ . '/..' . '/typerocket/plugin-seo/src',
        ),
        'TypeRocketPageBuilder\\' => 
        array (
            0 => __DIR__ . '/..' . '/typerocket/plugin-builder/src',
        ),
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Debug\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/debug',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static $classMap = array (
        'Psr\\Log\\AbstractLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/AbstractLogger.php',
        'Psr\\Log\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/log/Psr/Log/InvalidArgumentException.php',
        'Psr\\Log\\LogLevel' => __DIR__ . '/..' . '/psr/log/Psr/Log/LogLevel.php',
        'Psr\\Log\\LoggerAwareInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareInterface.php',
        'Psr\\Log\\LoggerAwareTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareTrait.php',
        'Psr\\Log\\LoggerInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerInterface.php',
        'Psr\\Log\\LoggerTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerTrait.php',
        'Psr\\Log\\NullLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/NullLogger.php',
        'Psr\\Log\\Test\\DummyTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/DummyTest.php',
        'Psr\\Log\\Test\\LoggerInterfaceTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Psr\\Log\\Test\\TestLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/TestLogger.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'Symfony\\Component\\Console\\Application' => __DIR__ . '/..' . '/symfony/console/Application.php',
        'Symfony\\Component\\Console\\CommandLoader\\CommandLoaderInterface' => __DIR__ . '/..' . '/symfony/console/CommandLoader/CommandLoaderInterface.php',
        'Symfony\\Component\\Console\\CommandLoader\\ContainerCommandLoader' => __DIR__ . '/..' . '/symfony/console/CommandLoader/ContainerCommandLoader.php',
        'Symfony\\Component\\Console\\CommandLoader\\FactoryCommandLoader' => __DIR__ . '/..' . '/symfony/console/CommandLoader/FactoryCommandLoader.php',
        'Symfony\\Component\\Console\\Command\\Command' => __DIR__ . '/..' . '/symfony/console/Command/Command.php',
        'Symfony\\Component\\Console\\Command\\HelpCommand' => __DIR__ . '/..' . '/symfony/console/Command/HelpCommand.php',
        'Symfony\\Component\\Console\\Command\\ListCommand' => __DIR__ . '/..' . '/symfony/console/Command/ListCommand.php',
        'Symfony\\Component\\Console\\Command\\LockableTrait' => __DIR__ . '/..' . '/symfony/console/Command/LockableTrait.php',
        'Symfony\\Component\\Console\\ConsoleEvents' => __DIR__ . '/..' . '/symfony/console/ConsoleEvents.php',
        'Symfony\\Component\\Console\\DependencyInjection\\AddConsoleCommandPass' => __DIR__ . '/..' . '/symfony/console/DependencyInjection/AddConsoleCommandPass.php',
        'Symfony\\Component\\Console\\Descriptor\\ApplicationDescription' => __DIR__ . '/..' . '/symfony/console/Descriptor/ApplicationDescription.php',
        'Symfony\\Component\\Console\\Descriptor\\Descriptor' => __DIR__ . '/..' . '/symfony/console/Descriptor/Descriptor.php',
        'Symfony\\Component\\Console\\Descriptor\\DescriptorInterface' => __DIR__ . '/..' . '/symfony/console/Descriptor/DescriptorInterface.php',
        'Symfony\\Component\\Console\\Descriptor\\JsonDescriptor' => __DIR__ . '/..' . '/symfony/console/Descriptor/JsonDescriptor.php',
        'Symfony\\Component\\Console\\Descriptor\\MarkdownDescriptor' => __DIR__ . '/..' . '/symfony/console/Descriptor/MarkdownDescriptor.php',
        'Symfony\\Component\\Console\\Descriptor\\TextDescriptor' => __DIR__ . '/..' . '/symfony/console/Descriptor/TextDescriptor.php',
        'Symfony\\Component\\Console\\Descriptor\\XmlDescriptor' => __DIR__ . '/..' . '/symfony/console/Descriptor/XmlDescriptor.php',
        'Symfony\\Component\\Console\\EventListener\\ErrorListener' => __DIR__ . '/..' . '/symfony/console/EventListener/ErrorListener.php',
        'Symfony\\Component\\Console\\Event\\ConsoleCommandEvent' => __DIR__ . '/..' . '/symfony/console/Event/ConsoleCommandEvent.php',
        'Symfony\\Component\\Console\\Event\\ConsoleErrorEvent' => __DIR__ . '/..' . '/symfony/console/Event/ConsoleErrorEvent.php',
        'Symfony\\Component\\Console\\Event\\ConsoleEvent' => __DIR__ . '/..' . '/symfony/console/Event/ConsoleEvent.php',
        'Symfony\\Component\\Console\\Event\\ConsoleExceptionEvent' => __DIR__ . '/..' . '/symfony/console/Event/ConsoleExceptionEvent.php',
        'Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent' => __DIR__ . '/..' . '/symfony/console/Event/ConsoleTerminateEvent.php',
        'Symfony\\Component\\Console\\Exception\\CommandNotFoundException' => __DIR__ . '/..' . '/symfony/console/Exception/CommandNotFoundException.php',
        'Symfony\\Component\\Console\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/console/Exception/ExceptionInterface.php',
        'Symfony\\Component\\Console\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/symfony/console/Exception/InvalidArgumentException.php',
        'Symfony\\Component\\Console\\Exception\\InvalidOptionException' => __DIR__ . '/..' . '/symfony/console/Exception/InvalidOptionException.php',
        'Symfony\\Component\\Console\\Exception\\LogicException' => __DIR__ . '/..' . '/symfony/console/Exception/LogicException.php',
        'Symfony\\Component\\Console\\Exception\\RuntimeException' => __DIR__ . '/..' . '/symfony/console/Exception/RuntimeException.php',
        'Symfony\\Component\\Console\\Formatter\\OutputFormatter' => __DIR__ . '/..' . '/symfony/console/Formatter/OutputFormatter.php',
        'Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface' => __DIR__ . '/..' . '/symfony/console/Formatter/OutputFormatterInterface.php',
        'Symfony\\Component\\Console\\Formatter\\OutputFormatterStyle' => __DIR__ . '/..' . '/symfony/console/Formatter/OutputFormatterStyle.php',
        'Symfony\\Component\\Console\\Formatter\\OutputFormatterStyleInterface' => __DIR__ . '/..' . '/symfony/console/Formatter/OutputFormatterStyleInterface.php',
        'Symfony\\Component\\Console\\Formatter\\OutputFormatterStyleStack' => __DIR__ . '/..' . '/symfony/console/Formatter/OutputFormatterStyleStack.php',
        'Symfony\\Component\\Console\\Helper\\DebugFormatterHelper' => __DIR__ . '/..' . '/symfony/console/Helper/DebugFormatterHelper.php',
        'Symfony\\Component\\Console\\Helper\\DescriptorHelper' => __DIR__ . '/..' . '/symfony/console/Helper/DescriptorHelper.php',
        'Symfony\\Component\\Console\\Helper\\FormatterHelper' => __DIR__ . '/..' . '/symfony/console/Helper/FormatterHelper.php',
        'Symfony\\Component\\Console\\Helper\\Helper' => __DIR__ . '/..' . '/symfony/console/Helper/Helper.php',
        'Symfony\\Component\\Console\\Helper\\HelperInterface' => __DIR__ . '/..' . '/symfony/console/Helper/HelperInterface.php',
        'Symfony\\Component\\Console\\Helper\\HelperSet' => __DIR__ . '/..' . '/symfony/console/Helper/HelperSet.php',
        'Symfony\\Component\\Console\\Helper\\InputAwareHelper' => __DIR__ . '/..' . '/symfony/console/Helper/InputAwareHelper.php',
        'Symfony\\Component\\Console\\Helper\\ProcessHelper' => __DIR__ . '/..' . '/symfony/console/Helper/ProcessHelper.php',
        'Symfony\\Component\\Console\\Helper\\ProgressBar' => __DIR__ . '/..' . '/symfony/console/Helper/ProgressBar.php',
        'Symfony\\Component\\Console\\Helper\\ProgressIndicator' => __DIR__ . '/..' . '/symfony/console/Helper/ProgressIndicator.php',
        'Symfony\\Component\\Console\\Helper\\QuestionHelper' => __DIR__ . '/..' . '/symfony/console/Helper/QuestionHelper.php',
        'Symfony\\Component\\Console\\Helper\\SymfonyQuestionHelper' => __DIR__ . '/..' . '/symfony/console/Helper/SymfonyQuestionHelper.php',
        'Symfony\\Component\\Console\\Helper\\Table' => __DIR__ . '/..' . '/symfony/console/Helper/Table.php',
        'Symfony\\Component\\Console\\Helper\\TableCell' => __DIR__ . '/..' . '/symfony/console/Helper/TableCell.php',
        'Symfony\\Component\\Console\\Helper\\TableSeparator' => __DIR__ . '/..' . '/symfony/console/Helper/TableSeparator.php',
        'Symfony\\Component\\Console\\Helper\\TableStyle' => __DIR__ . '/..' . '/symfony/console/Helper/TableStyle.php',
        'Symfony\\Component\\Console\\Input\\ArgvInput' => __DIR__ . '/..' . '/symfony/console/Input/ArgvInput.php',
        'Symfony\\Component\\Console\\Input\\ArrayInput' => __DIR__ . '/..' . '/symfony/console/Input/ArrayInput.php',
        'Symfony\\Component\\Console\\Input\\Input' => __DIR__ . '/..' . '/symfony/console/Input/Input.php',
        'Symfony\\Component\\Console\\Input\\InputArgument' => __DIR__ . '/..' . '/symfony/console/Input/InputArgument.php',
        'Symfony\\Component\\Console\\Input\\InputAwareInterface' => __DIR__ . '/..' . '/symfony/console/Input/InputAwareInterface.php',
        'Symfony\\Component\\Console\\Input\\InputDefinition' => __DIR__ . '/..' . '/symfony/console/Input/InputDefinition.php',
        'Symfony\\Component\\Console\\Input\\InputInterface' => __DIR__ . '/..' . '/symfony/console/Input/InputInterface.php',
        'Symfony\\Component\\Console\\Input\\InputOption' => __DIR__ . '/..' . '/symfony/console/Input/InputOption.php',
        'Symfony\\Component\\Console\\Input\\StreamableInputInterface' => __DIR__ . '/..' . '/symfony/console/Input/StreamableInputInterface.php',
        'Symfony\\Component\\Console\\Input\\StringInput' => __DIR__ . '/..' . '/symfony/console/Input/StringInput.php',
        'Symfony\\Component\\Console\\Logger\\ConsoleLogger' => __DIR__ . '/..' . '/symfony/console/Logger/ConsoleLogger.php',
        'Symfony\\Component\\Console\\Output\\BufferedOutput' => __DIR__ . '/..' . '/symfony/console/Output/BufferedOutput.php',
        'Symfony\\Component\\Console\\Output\\ConsoleOutput' => __DIR__ . '/..' . '/symfony/console/Output/ConsoleOutput.php',
        'Symfony\\Component\\Console\\Output\\ConsoleOutputInterface' => __DIR__ . '/..' . '/symfony/console/Output/ConsoleOutputInterface.php',
        'Symfony\\Component\\Console\\Output\\NullOutput' => __DIR__ . '/..' . '/symfony/console/Output/NullOutput.php',
        'Symfony\\Component\\Console\\Output\\Output' => __DIR__ . '/..' . '/symfony/console/Output/Output.php',
        'Symfony\\Component\\Console\\Output\\OutputInterface' => __DIR__ . '/..' . '/symfony/console/Output/OutputInterface.php',
        'Symfony\\Component\\Console\\Output\\StreamOutput' => __DIR__ . '/..' . '/symfony/console/Output/StreamOutput.php',
        'Symfony\\Component\\Console\\Question\\ChoiceQuestion' => __DIR__ . '/..' . '/symfony/console/Question/ChoiceQuestion.php',
        'Symfony\\Component\\Console\\Question\\ConfirmationQuestion' => __DIR__ . '/..' . '/symfony/console/Question/ConfirmationQuestion.php',
        'Symfony\\Component\\Console\\Question\\Question' => __DIR__ . '/..' . '/symfony/console/Question/Question.php',
        'Symfony\\Component\\Console\\Style\\OutputStyle' => __DIR__ . '/..' . '/symfony/console/Style/OutputStyle.php',
        'Symfony\\Component\\Console\\Style\\StyleInterface' => __DIR__ . '/..' . '/symfony/console/Style/StyleInterface.php',
        'Symfony\\Component\\Console\\Style\\SymfonyStyle' => __DIR__ . '/..' . '/symfony/console/Style/SymfonyStyle.php',
        'Symfony\\Component\\Console\\Terminal' => __DIR__ . '/..' . '/symfony/console/Terminal.php',
        'Symfony\\Component\\Console\\Tester\\ApplicationTester' => __DIR__ . '/..' . '/symfony/console/Tester/ApplicationTester.php',
        'Symfony\\Component\\Console\\Tester\\CommandTester' => __DIR__ . '/..' . '/symfony/console/Tester/CommandTester.php',
        'Symfony\\Component\\Debug\\BufferingLogger' => __DIR__ . '/..' . '/symfony/debug/BufferingLogger.php',
        'Symfony\\Component\\Debug\\Debug' => __DIR__ . '/..' . '/symfony/debug/Debug.php',
        'Symfony\\Component\\Debug\\DebugClassLoader' => __DIR__ . '/..' . '/symfony/debug/DebugClassLoader.php',
        'Symfony\\Component\\Debug\\ErrorHandler' => __DIR__ . '/..' . '/symfony/debug/ErrorHandler.php',
        'Symfony\\Component\\Debug\\ExceptionHandler' => __DIR__ . '/..' . '/symfony/debug/ExceptionHandler.php',
        'Symfony\\Component\\Debug\\Exception\\ClassNotFoundException' => __DIR__ . '/..' . '/symfony/debug/Exception/ClassNotFoundException.php',
        'Symfony\\Component\\Debug\\Exception\\FatalErrorException' => __DIR__ . '/..' . '/symfony/debug/Exception/FatalErrorException.php',
        'Symfony\\Component\\Debug\\Exception\\FatalThrowableError' => __DIR__ . '/..' . '/symfony/debug/Exception/FatalThrowableError.php',
        'Symfony\\Component\\Debug\\Exception\\FlattenException' => __DIR__ . '/..' . '/symfony/debug/Exception/FlattenException.php',
        'Symfony\\Component\\Debug\\Exception\\OutOfMemoryException' => __DIR__ . '/..' . '/symfony/debug/Exception/OutOfMemoryException.php',
        'Symfony\\Component\\Debug\\Exception\\SilencedErrorContext' => __DIR__ . '/..' . '/symfony/debug/Exception/SilencedErrorContext.php',
        'Symfony\\Component\\Debug\\Exception\\UndefinedFunctionException' => __DIR__ . '/..' . '/symfony/debug/Exception/UndefinedFunctionException.php',
        'Symfony\\Component\\Debug\\Exception\\UndefinedMethodException' => __DIR__ . '/..' . '/symfony/debug/Exception/UndefinedMethodException.php',
        'Symfony\\Component\\Debug\\FatalErrorHandler\\ClassNotFoundFatalErrorHandler' => __DIR__ . '/..' . '/symfony/debug/FatalErrorHandler/ClassNotFoundFatalErrorHandler.php',
        'Symfony\\Component\\Debug\\FatalErrorHandler\\FatalErrorHandlerInterface' => __DIR__ . '/..' . '/symfony/debug/FatalErrorHandler/FatalErrorHandlerInterface.php',
        'Symfony\\Component\\Debug\\FatalErrorHandler\\UndefinedFunctionFatalErrorHandler' => __DIR__ . '/..' . '/symfony/debug/FatalErrorHandler/UndefinedFunctionFatalErrorHandler.php',
        'Symfony\\Component\\Debug\\FatalErrorHandler\\UndefinedMethodFatalErrorHandler' => __DIR__ . '/..' . '/symfony/debug/FatalErrorHandler/UndefinedMethodFatalErrorHandler.php',
        'Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
        'Symfony\\Polyfill\\Php80\\Php80' => __DIR__ . '/..' . '/symfony/polyfill-php80/Php80.php',
        'TypeRocketPageBuilder\\Plugin' => __DIR__ . '/..' . '/typerocket/plugin-builder/src/Plugin.php',
        'TypeRocketSEO\\Plugin' => __DIR__ . '/..' . '/typerocket/plugin-seo/src/Plugin.php',
        'TypeRocketThemeOptions\\Plugin' => __DIR__ . '/..' . '/typerocket/plugin-theme-options/src/Plugin.php',
        'TypeRocket\\Console\\CanQueryDB' => __DIR__ . '/..' . '/typerocket/core/src/Console/CanQueryDB.php',
        'TypeRocket\\Console\\Command' => __DIR__ . '/..' . '/typerocket/core/src/Console/Command.php',
        'TypeRocket\\Console\\CommandCollection' => __DIR__ . '/..' . '/typerocket/core/src/Console/CommandCollection.php',
        'TypeRocket\\Console\\Commands\\ClearCache' => __DIR__ . '/..' . '/typerocket/core/src/Console/Commands/ClearCache.php',
        'TypeRocket\\Console\\Commands\\DownloadWordPress' => __DIR__ . '/..' . '/typerocket/core/src/Console/Commands/DownloadWordPress.php',
        'TypeRocket\\Console\\Commands\\FlushRewrites' => __DIR__ . '/..' . '/typerocket/core/src/Console/Commands/FlushRewrites.php',
        'TypeRocket\\Console\\Commands\\GenerateSeed' => __DIR__ . '/..' . '/typerocket/core/src/Console/Commands/GenerateSeed.php',
        'TypeRocket\\Console\\Commands\\MakeCommand' => __DIR__ . '/..' . '/typerocket/core/src/Console/Commands/MakeCommand.php',
        'TypeRocket\\Console\\Commands\\MakeController' => __DIR__ . '/..' . '/typerocket/core/src/Console/Commands/MakeController.php',
        'TypeRocket\\Console\\Commands\\MakeMiddleware' => __DIR__ . '/..' . '/typerocket/core/src/Console/Commands/MakeMiddleware.php',
        'TypeRocket\\Console\\Commands\\MakeMigration' => __DIR__ . '/..' . '/typerocket/core/src/Console/Commands/MakeMigration.php',
        'TypeRocket\\Console\\Commands\\MakeModel' => __DIR__ . '/..' . '/typerocket/core/src/Console/Commands/MakeModel.php',
        'TypeRocket\\Console\\Commands\\Migrate' => __DIR__ . '/..' . '/typerocket/core/src/Console/Commands/Migrate.php',
        'TypeRocket\\Console\\Commands\\PublishPlugin' => __DIR__ . '/..' . '/typerocket/core/src/Console/Commands/PublishPlugin.php',
        'TypeRocket\\Console\\Commands\\SQL' => __DIR__ . '/..' . '/typerocket/core/src/Console/Commands/SQL.php',
        'TypeRocket\\Console\\Commands\\UseRoot' => __DIR__ . '/..' . '/typerocket/core/src/Console/Commands/UseRoot.php',
        'TypeRocket\\Console\\Commands\\UseTemplates' => __DIR__ . '/..' . '/typerocket/core/src/Console/Commands/UseTemplates.php',
        'TypeRocket\\Console\\Launcher' => __DIR__ . '/..' . '/typerocket/core/src/Console/Launcher.php',
        'TypeRocket\\Controllers\\Controller' => __DIR__ . '/..' . '/typerocket/core/src/Controllers/Controller.php',
        'TypeRocket\\Controllers\\WPCommentController' => __DIR__ . '/..' . '/typerocket/core/src/Controllers/WPCommentController.php',
        'TypeRocket\\Controllers\\WPOptionController' => __DIR__ . '/..' . '/typerocket/core/src/Controllers/WPOptionController.php',
        'TypeRocket\\Controllers\\WPPostController' => __DIR__ . '/..' . '/typerocket/core/src/Controllers/WPPostController.php',
        'TypeRocket\\Controllers\\WPTermController' => __DIR__ . '/..' . '/typerocket/core/src/Controllers/WPTermController.php',
        'TypeRocket\\Controllers\\WPUserController' => __DIR__ . '/..' . '/typerocket/core/src/Controllers/WPUserController.php',
        'TypeRocket\\Core\\Config' => __DIR__ . '/..' . '/typerocket/core/src/Core/Config.php',
        'TypeRocket\\Core\\Injector' => __DIR__ . '/..' . '/typerocket/core/src/Core/Injector.php',
        'TypeRocket\\Core\\Launcher' => __DIR__ . '/..' . '/typerocket/core/src/Core/Launcher.php',
        'TypeRocket\\Core\\Resolver' => __DIR__ . '/..' . '/typerocket/core/src/Core/Resolver.php',
        'TypeRocket\\Database\\EagerLoader' => __DIR__ . '/..' . '/typerocket/core/src/Database/EagerLoader.php',
        'TypeRocket\\Database\\Query' => __DIR__ . '/..' . '/typerocket/core/src/Database/Query.php',
        'TypeRocket\\Database\\Results' => __DIR__ . '/..' . '/typerocket/core/src/Database/Results.php',
        'TypeRocket\\Database\\ResultsMeta' => __DIR__ . '/..' . '/typerocket/core/src/Database/ResultsMeta.php',
        'TypeRocket\\Database\\ResultsPaged' => __DIR__ . '/..' . '/typerocket/core/src/Database/ResultsPaged.php',
        'TypeRocket\\Database\\ResultsPostMeta' => __DIR__ . '/..' . '/typerocket/core/src/Database/ResultsPostMeta.php',
        'TypeRocket\\Elements\\FieldColumn' => __DIR__ . '/..' . '/typerocket/core/src/Elements/FieldColumn.php',
        'TypeRocket\\Elements\\FieldRow' => __DIR__ . '/..' . '/typerocket/core/src/Elements/FieldRow.php',
        'TypeRocket\\Elements\\Fields\\Builder' => __DIR__ . '/..' . '/typerocket/core/src/Elements/Fields/Builder.php',
        'TypeRocket\\Elements\\Fields\\Checkbox' => __DIR__ . '/..' . '/typerocket/core/src/Elements/Fields/Checkbox.php',
        'TypeRocket\\Elements\\Fields\\Color' => __DIR__ . '/..' . '/typerocket/core/src/Elements/Fields/Color.php',
        'TypeRocket\\Elements\\Fields\\Date' => __DIR__ . '/..' . '/typerocket/core/src/Elements/Fields/Date.php',
        'TypeRocket\\Elements\\Fields\\Editor' => __DIR__ . '/..' . '/typerocket/core/src/Elements/Fields/Editor.php',
        'TypeRocket\\Elements\\Fields\\Field' => __DIR__ . '/..' . '/typerocket/core/src/Elements/Fields/Field.php',
        'TypeRocket\\Elements\\Fields\\File' => __DIR__ . '/..' . '/typerocket/core/src/Elements/Fields/File.php',
        'TypeRocket\\Elements\\Fields\\Gallery' => __DIR__ . '/..' . '/typerocket/core/src/Elements/Fields/Gallery.php',
        'TypeRocket\\Elements\\Fields\\Image' => __DIR__ . '/..' . '/typerocket/core/src/Elements/Fields/Image.php',
        'TypeRocket\\Elements\\Fields\\Items' => __DIR__ . '/..' . '/typerocket/core/src/Elements/Fields/Items.php',
        'TypeRocket\\Elements\\Fields\\Links' => __DIR__ . '/..' . '/typerocket/core/src/Elements/Fields/Links.php',
        'TypeRocket\\Elements\\Fields\\Location' => __DIR__ . '/..' . '/typerocket/core/src/Elements/Fields/Location.php',
        'TypeRocket\\Elements\\Fields\\Matrix' => __DIR__ . '/..' . '/typerocket/core/src/Elements/Fields/Matrix.php',
        'TypeRocket\\Elements\\Fields\\Radio' => __DIR__ . '/..' . '/typerocket/core/src/Elements/Fields/Radio.php',
        'TypeRocket\\Elements\\Fields\\Repeater' => __DIR__ . '/..' . '/typerocket/core/src/Elements/Fields/Repeater.php',
        'TypeRocket\\Elements\\Fields\\ScriptField' => __DIR__ . '/..' . '/typerocket/core/src/Elements/Fields/ScriptField.php',
        'TypeRocket\\Elements\\Fields\\Search' => __DIR__ . '/..' . '/typerocket/core/src/Elements/Fields/Search.php',
        'TypeRocket\\Elements\\Fields\\Select' => __DIR__ . '/..' . '/typerocket/core/src/Elements/Fields/Select.php',
        'TypeRocket\\Elements\\Fields\\Submit' => __DIR__ . '/..' . '/typerocket/core/src/Elements/Fields/Submit.php',
        'TypeRocket\\Elements\\Fields\\Text' => __DIR__ . '/..' . '/typerocket/core/src/Elements/Fields/Text.php',
        'TypeRocket\\Elements\\Fields\\Textarea' => __DIR__ . '/..' . '/typerocket/core/src/Elements/Fields/Textarea.php',
        'TypeRocket\\Elements\\Fields\\Toggle' => __DIR__ . '/..' . '/typerocket/core/src/Elements/Fields/Toggle.php',
        'TypeRocket\\Elements\\Fields\\WordPressEditor' => __DIR__ . '/..' . '/typerocket/core/src/Elements/Fields/WordPressEditor.php',
        'TypeRocket\\Elements\\Form' => __DIR__ . '/..' . '/typerocket/core/src/Elements/Form.php',
        'TypeRocket\\Elements\\Icons' => __DIR__ . '/..' . '/typerocket/core/src/Elements/Icons.php',
        'TypeRocket\\Elements\\Notice' => __DIR__ . '/..' . '/typerocket/core/src/Elements/Notice.php',
        'TypeRocket\\Elements\\Tables' => __DIR__ . '/..' . '/typerocket/core/src/Elements/Tables.php',
        'TypeRocket\\Elements\\Tabs' => __DIR__ . '/..' . '/typerocket/core/src/Elements/Tabs.php',
        'TypeRocket\\Elements\\Traits\\AttributesTrait' => __DIR__ . '/..' . '/typerocket/core/src/Elements/Traits/AttributesTrait.php',
        'TypeRocket\\Elements\\Traits\\ControlsSetting' => __DIR__ . '/..' . '/typerocket/core/src/Elements/Traits/ControlsSetting.php',
        'TypeRocket\\Elements\\Traits\\DefaultSetting' => __DIR__ . '/..' . '/typerocket/core/src/Elements/Traits/DefaultSetting.php',
        'TypeRocket\\Elements\\Traits\\FormConnectorTrait' => __DIR__ . '/..' . '/typerocket/core/src/Elements/Traits/FormConnectorTrait.php',
        'TypeRocket\\Elements\\Traits\\MacroTrait' => __DIR__ . '/..' . '/typerocket/core/src/Elements/Traits/MacroTrait.php',
        'TypeRocket\\Elements\\Traits\\MaxlengthTrait' => __DIR__ . '/..' . '/typerocket/core/src/Elements/Traits/MaxlengthTrait.php',
        'TypeRocket\\Elements\\Traits\\OptionsTrait' => __DIR__ . '/..' . '/typerocket/core/src/Elements/Traits/OptionsTrait.php',
        'TypeRocket\\Exceptions\\ModelException' => __DIR__ . '/..' . '/typerocket/core/src/Exceptions/ModelException.php',
        'TypeRocket\\Exceptions\\ModelNotFoundException' => __DIR__ . '/..' . '/typerocket/core/src/Exceptions/ModelNotFoundException.php',
        'TypeRocket\\Html\\Generator' => __DIR__ . '/..' . '/typerocket/core/src/Html/Generator.php',
        'TypeRocket\\Html\\Tag' => __DIR__ . '/..' . '/typerocket/core/src/Html/Tag.php',
        'TypeRocket\\Html\\TagCollection' => __DIR__ . '/..' . '/typerocket/core/src/Html/TagCollection.php',
        'TypeRocket\\Http\\ApplicationRoutes' => __DIR__ . '/..' . '/typerocket/core/src/Http/ApplicationRoutes.php',
        'TypeRocket\\Http\\Cookie' => __DIR__ . '/..' . '/typerocket/core/src/Http/Cookie.php',
        'TypeRocket\\Http\\CustomRequest' => __DIR__ . '/..' . '/typerocket/core/src/Http/CustomRequest.php',
        'TypeRocket\\Http\\Fields' => __DIR__ . '/..' . '/typerocket/core/src/Http/Fields.php',
        'TypeRocket\\Http\\Handler' => __DIR__ . '/..' . '/typerocket/core/src/Http/Handler.php',
        'TypeRocket\\Http\\Kernel' => __DIR__ . '/..' . '/typerocket/core/src/Http/Kernel.php',
        'TypeRocket\\Http\\Middleware\\AuthAdmin' => __DIR__ . '/..' . '/typerocket/core/src/Http/Middleware/AuthAdmin.php',
        'TypeRocket\\Http\\Middleware\\AuthRead' => __DIR__ . '/..' . '/typerocket/core/src/Http/Middleware/AuthRead.php',
        'TypeRocket\\Http\\Middleware\\BaseVerify' => __DIR__ . '/..' . '/typerocket/core/src/Http/Middleware/BaseVerify.php',
        'TypeRocket\\Http\\Middleware\\CanManageCategories' => __DIR__ . '/..' . '/typerocket/core/src/Http/Middleware/CanManageCategories.php',
        'TypeRocket\\Http\\Middleware\\CanManageOptions' => __DIR__ . '/..' . '/typerocket/core/src/Http/Middleware/CanManageOptions.php',
        'TypeRocket\\Http\\Middleware\\IsUserOrCanEditUsers' => __DIR__ . '/..' . '/typerocket/core/src/Http/Middleware/IsUserOrCanEditUsers.php',
        'TypeRocket\\Http\\Middleware\\Middleware' => __DIR__ . '/..' . '/typerocket/core/src/Http/Middleware/Middleware.php',
        'TypeRocket\\Http\\Middleware\\OwnsCommentOrCanEditComments' => __DIR__ . '/..' . '/typerocket/core/src/Http/Middleware/OwnsCommentOrCanEditComments.php',
        'TypeRocket\\Http\\Middleware\\OwnsPostOrCanEditPosts' => __DIR__ . '/..' . '/typerocket/core/src/Http/Middleware/OwnsPostOrCanEditPosts.php',
        'TypeRocket\\Http\\Redirect' => __DIR__ . '/..' . '/typerocket/core/src/Http/Redirect.php',
        'TypeRocket\\Http\\Request' => __DIR__ . '/..' . '/typerocket/core/src/Http/Request.php',
        'TypeRocket\\Http\\Responders\\CommentsResponder' => __DIR__ . '/..' . '/typerocket/core/src/Http/Responders/CommentsResponder.php',
        'TypeRocket\\Http\\Responders\\Hook' => __DIR__ . '/..' . '/typerocket/core/src/Http/Responders/Hook.php',
        'TypeRocket\\Http\\Responders\\PostsResponder' => __DIR__ . '/..' . '/typerocket/core/src/Http/Responders/PostsResponder.php',
        'TypeRocket\\Http\\Responders\\ResourceResponder' => __DIR__ . '/..' . '/typerocket/core/src/Http/Responders/ResourceResponder.php',
        'TypeRocket\\Http\\Responders\\Responder' => __DIR__ . '/..' . '/typerocket/core/src/Http/Responders/Responder.php',
        'TypeRocket\\Http\\Responders\\TaxonomiesResponder' => __DIR__ . '/..' . '/typerocket/core/src/Http/Responders/TaxonomiesResponder.php',
        'TypeRocket\\Http\\Responders\\UsersResponder' => __DIR__ . '/..' . '/typerocket/core/src/Http/Responders/UsersResponder.php',
        'TypeRocket\\Http\\Response' => __DIR__ . '/..' . '/typerocket/core/src/Http/Response.php',
        'TypeRocket\\Http\\Rewrites\\Builder' => __DIR__ . '/..' . '/typerocket/core/src/Http/Rewrites/Builder.php',
        'TypeRocket\\Http\\Rewrites\\Matrix' => __DIR__ . '/..' . '/typerocket/core/src/Http/Rewrites/Matrix.php',
        'TypeRocket\\Http\\Rewrites\\Rest' => __DIR__ . '/..' . '/typerocket/core/src/Http/Rewrites/Rest.php',
        'TypeRocket\\Http\\Rewrites\\WpRestApi' => __DIR__ . '/..' . '/typerocket/core/src/Http/Rewrites/WpRestApi.php',
        'TypeRocket\\Http\\Route' => __DIR__ . '/..' . '/typerocket/core/src/Http/Route.php',
        'TypeRocket\\Http\\RouteCollection' => __DIR__ . '/..' . '/typerocket/core/src/Http/RouteCollection.php',
        'TypeRocket\\Http\\Router' => __DIR__ . '/..' . '/typerocket/core/src/Http/Router.php',
        'TypeRocket\\Http\\Routes' => __DIR__ . '/..' . '/typerocket/core/src/Http/Routes.php',
        'TypeRocket\\Http\\SSL' => __DIR__ . '/..' . '/typerocket/core/src/Http/SSL.php',
        'TypeRocket\\Http\\Stack' => __DIR__ . '/..' . '/typerocket/core/src/Http/Stack.php',
        'TypeRocket\\Models\\Contract\\Formable' => __DIR__ . '/..' . '/typerocket/core/src/Models/Contract/Formable.php',
        'TypeRocket\\Models\\Meta\\WPCommentMeta' => __DIR__ . '/..' . '/typerocket/core/src/Models/Meta/WPCommentMeta.php',
        'TypeRocket\\Models\\Meta\\WPPostMeta' => __DIR__ . '/..' . '/typerocket/core/src/Models/Meta/WPPostMeta.php',
        'TypeRocket\\Models\\Meta\\WPTermMeta' => __DIR__ . '/..' . '/typerocket/core/src/Models/Meta/WPTermMeta.php',
        'TypeRocket\\Models\\Meta\\WPUserMeta' => __DIR__ . '/..' . '/typerocket/core/src/Models/Meta/WPUserMeta.php',
        'TypeRocket\\Models\\Model' => __DIR__ . '/..' . '/typerocket/core/src/Models/Model.php',
        'TypeRocket\\Models\\Traits\\MetaData' => __DIR__ . '/..' . '/typerocket/core/src/Models/Traits/MetaData.php',
        'TypeRocket\\Models\\Traits\\Searchable' => __DIR__ . '/..' . '/typerocket/core/src/Models/Traits/Searchable.php',
        'TypeRocket\\Models\\WPAttachment' => __DIR__ . '/..' . '/typerocket/core/src/Models/WPAttachment.php',
        'TypeRocket\\Models\\WPComment' => __DIR__ . '/..' . '/typerocket/core/src/Models/WPComment.php',
        'TypeRocket\\Models\\WPOption' => __DIR__ . '/..' . '/typerocket/core/src/Models/WPOption.php',
        'TypeRocket\\Models\\WPPost' => __DIR__ . '/..' . '/typerocket/core/src/Models/WPPost.php',
        'TypeRocket\\Models\\WPTerm' => __DIR__ . '/..' . '/typerocket/core/src/Models/WPTerm.php',
        'TypeRocket\\Models\\WPTermTaxonomy' => __DIR__ . '/..' . '/typerocket/core/src/Models/WPTermTaxonomy.php',
        'TypeRocket\\Models\\WPUser' => __DIR__ . '/..' . '/typerocket/core/src/Models/WPUser.php',
        'TypeRocket\\Register\\BaseWidget' => __DIR__ . '/..' . '/typerocket/core/src/Register/BaseWidget.php',
        'TypeRocket\\Register\\MetaBox' => __DIR__ . '/..' . '/typerocket/core/src/Register/MetaBox.php',
        'TypeRocket\\Register\\Page' => __DIR__ . '/..' . '/typerocket/core/src/Register/Page.php',
        'TypeRocket\\Register\\PostType' => __DIR__ . '/..' . '/typerocket/core/src/Register/PostType.php',
        'TypeRocket\\Register\\Registrable' => __DIR__ . '/..' . '/typerocket/core/src/Register/Registrable.php',
        'TypeRocket\\Register\\Registry' => __DIR__ . '/..' . '/typerocket/core/src/Register/Registry.php',
        'TypeRocket\\Register\\Resourceful' => __DIR__ . '/..' . '/typerocket/core/src/Register/Resourceful.php',
        'TypeRocket\\Register\\Taxonomy' => __DIR__ . '/..' . '/typerocket/core/src/Register/Taxonomy.php',
        'TypeRocket\\Template\\TemplateEngine' => __DIR__ . '/..' . '/typerocket/core/src/Template/TemplateEngine.php',
        'TypeRocket\\Template\\TwigTemplateEngine' => __DIR__ . '/..' . '/typerocket/core/src/Template/TwigTemplateEngine.php',
        'TypeRocket\\Template\\View' => __DIR__ . '/..' . '/typerocket/core/src/Template/View.php',
        'TypeRocket\\Updates\\PluginUpdater' => __DIR__ . '/..' . '/typerocket/core/src/Updates/PluginUpdater.php',
        'TypeRocket\\Updates\\ThemeUpdater' => __DIR__ . '/..' . '/typerocket/core/src/Updates/ThemeUpdater.php',
        'TypeRocket\\Utility\\Buffer' => __DIR__ . '/..' . '/typerocket/core/src/Utility/Buffer.php',
        'TypeRocket\\Utility\\File' => __DIR__ . '/..' . '/typerocket/core/src/Utility/File.php',
        'TypeRocket\\Utility\\Http' => __DIR__ . '/..' . '/typerocket/core/src/Utility/Http.php',
        'TypeRocket\\Utility\\ImageSizer' => __DIR__ . '/..' . '/typerocket/core/src/Utility/ImageSizer.php',
        'TypeRocket\\Utility\\Inflect' => __DIR__ . '/..' . '/typerocket/core/src/Utility/Inflect.php',
        'TypeRocket\\Utility\\Nil' => __DIR__ . '/..' . '/typerocket/core/src/Utility/Nil.php',
        'TypeRocket\\Utility\\Sanitize' => __DIR__ . '/..' . '/typerocket/core/src/Utility/Sanitize.php',
        'TypeRocket\\Utility\\Str' => __DIR__ . '/..' . '/typerocket/core/src/Utility/Str.php',
        'TypeRocket\\Utility\\Url' => __DIR__ . '/..' . '/typerocket/core/src/Utility/Url.php',
        'TypeRocket\\Utility\\Validator' => __DIR__ . '/..' . '/typerocket/core/src/Utility/Validator.php',
        'TypeRocket\\Utility\\Value' => __DIR__ . '/..' . '/typerocket/core/src/Utility/Value.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbba67f953cb39d5f2b0ecb93b1b3ae96::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbba67f953cb39d5f2b0ecb93b1b3ae96::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbba67f953cb39d5f2b0ecb93b1b3ae96::$classMap;

        }, null, ClassLoader::class);
    }
}
