<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfb3a4de6c50f8f4e22675e159c48cfe4
{
    public static $files = array (
        '6e0964b6067f0d2c3111d0b1361110f6' => __DIR__ . '/../..' . '/src/deprecated.php',
    );

    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 55,
        ),
        'B' => 
        array (
            'Barn2\\Setup_Wizard\\' => 19,
            'Barn2\\Plugin\\Posts_Table_Search_Sort\\' => 37,
            'Barn2\\PTS_Lib\\' => 14,
            'Bamarni\\Composer\\Bin\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 
        array (
            0 => __DIR__ . '/..' . '/dealerdirect/phpcodesniffer-composer-installer/src',
        ),
        'Barn2\\Setup_Wizard\\' => 
        array (
            0 => __DIR__ . '/..' . '/barn2/setup-wizard/src',
        ),
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Barn2\\PTS_Lib\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
        'Bamarni\\Composer\\Bin\\' => 
        array (
            0 => __DIR__ . '/..' . '/bamarni/composer-bin-plugin/src',
        ),
    );

    public static $classMap = array (
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Barn2\\Setup_Wizard\\Api' => __DIR__ . '/../..' . '/dependencies/src/Api.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Barn2\\Setup_Wizard\\Interfaces\\Bootable' => __DIR__ . '/../..' . '/dependencies/src/Interfaces/Bootable.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Barn2\\Setup_Wizard\\Interfaces\\Deferrable' => __DIR__ . '/../..' . '/dependencies/src/Interfaces/Deferrable.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Barn2\\Setup_Wizard\\Interfaces\\Pluggable' => __DIR__ . '/../..' . '/dependencies/src/Interfaces/Pluggable.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Barn2\\Setup_Wizard\\Interfaces\\Restartable' => __DIR__ . '/../..' . '/dependencies/src/Interfaces/Restartable.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Barn2\\Setup_Wizard\\Setup_Wizard' => __DIR__ . '/../..' . '/dependencies/src/Setup_Wizard.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Barn2\\Setup_Wizard\\Starter' => __DIR__ . '/../..' . '/dependencies/src/Starter.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Barn2\\Setup_Wizard\\Step' => __DIR__ . '/../..' . '/dependencies/src/Step.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Barn2\\Setup_Wizard\\Steps\\Cross_Selling' => __DIR__ . '/../..' . '/dependencies/src/Steps/Cross_Selling.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Barn2\\Setup_Wizard\\Steps\\Ready' => __DIR__ . '/../..' . '/dependencies/src/Steps/Ready.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Barn2\\Setup_Wizard\\Steps\\Welcome' => __DIR__ . '/../..' . '/dependencies/src/Steps/Welcome.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Barn2\\Setup_Wizard\\Steps\\Welcome_Free' => __DIR__ . '/../..' . '/dependencies/src/Steps/Welcome_Free.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Barn2\\Setup_Wizard\\Util' => __DIR__ . '/../..' . '/dependencies/src/Util.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'PHPCSUtils\\AbstractSniffs\\AbstractArrayDeclarationSniff' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/AbstractSniffs/AbstractArrayDeclarationSniff.php',
        'PHPCSUtils\\BackCompat\\BCFile' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/BackCompat/BCFile.php',
        'PHPCSUtils\\BackCompat\\BCTokens' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/BackCompat/BCTokens.php',
        'PHPCSUtils\\BackCompat\\Helper' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/BackCompat/Helper.php',
        'PHPCSUtils\\Exceptions\\InvalidTokenArray' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Exceptions/InvalidTokenArray.php',
        'PHPCSUtils\\Exceptions\\TestFileNotFound' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Exceptions/TestFileNotFound.php',
        'PHPCSUtils\\Exceptions\\TestMarkerNotFound' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Exceptions/TestMarkerNotFound.php',
        'PHPCSUtils\\Exceptions\\TestTargetNotFound' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Exceptions/TestTargetNotFound.php',
        'PHPCSUtils\\Fixers\\SpacesFixer' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Fixers/SpacesFixer.php',
        'PHPCSUtils\\Internal\\Cache' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Internal/Cache.php',
        'PHPCSUtils\\Internal\\IsShortArrayOrList' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Internal/IsShortArrayOrList.php',
        'PHPCSUtils\\Internal\\IsShortArrayOrListWithCache' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Internal/IsShortArrayOrListWithCache.php',
        'PHPCSUtils\\Internal\\NoFileCache' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Internal/NoFileCache.php',
        'PHPCSUtils\\TestUtils\\UtilityMethodTestCase' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/TestUtils/UtilityMethodTestCase.php',
        'PHPCSUtils\\Tokens\\Collections' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Tokens/Collections.php',
        'PHPCSUtils\\Tokens\\TokenHelper' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Tokens/TokenHelper.php',
        'PHPCSUtils\\Utils\\Arrays' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/Arrays.php',
        'PHPCSUtils\\Utils\\Conditions' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/Conditions.php',
        'PHPCSUtils\\Utils\\Context' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/Context.php',
        'PHPCSUtils\\Utils\\ControlStructures' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/ControlStructures.php',
        'PHPCSUtils\\Utils\\FunctionDeclarations' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/FunctionDeclarations.php',
        'PHPCSUtils\\Utils\\GetTokensAsString' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/GetTokensAsString.php',
        'PHPCSUtils\\Utils\\Lists' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/Lists.php',
        'PHPCSUtils\\Utils\\MessageHelper' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/MessageHelper.php',
        'PHPCSUtils\\Utils\\Namespaces' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/Namespaces.php',
        'PHPCSUtils\\Utils\\NamingConventions' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/NamingConventions.php',
        'PHPCSUtils\\Utils\\Numbers' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/Numbers.php',
        'PHPCSUtils\\Utils\\ObjectDeclarations' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/ObjectDeclarations.php',
        'PHPCSUtils\\Utils\\Operators' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/Operators.php',
        'PHPCSUtils\\Utils\\Orthography' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/Orthography.php',
        'PHPCSUtils\\Utils\\Parentheses' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/Parentheses.php',
        'PHPCSUtils\\Utils\\PassedParameters' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/PassedParameters.php',
        'PHPCSUtils\\Utils\\Scopes' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/Scopes.php',
        'PHPCSUtils\\Utils\\TextStrings' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/TextStrings.php',
        'PHPCSUtils\\Utils\\UseStatements' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/UseStatements.php',
        'PHPCSUtils\\Utils\\Variables' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/Variables.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfb3a4de6c50f8f4e22675e159c48cfe4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfb3a4de6c50f8f4e22675e159c48cfe4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfb3a4de6c50f8f4e22675e159c48cfe4::$classMap;

        }, null, ClassLoader::class);
    }
}
