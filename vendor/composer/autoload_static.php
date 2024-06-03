<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfb3a4de6c50f8f4e22675e159c48cfe4
{
    public static $files = array (
        '6e0964b6067f0d2c3111d0b1361110f6' => __DIR__ . '/../..' . '/src/deprecated.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPTRT\\AdminNotices\\' => 19,
        ),
        'D' => 
        array (
            'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 55,
        ),
        'B' => 
        array (
            'Barn2\\Setup_Wizard\\' => 19,
            'Barn2\\Plugin\\Posts_Table_Search_Sort\\' => 37,
            'Barn2\\Lib\\' => 10,
            'Bamarni\\Composer\\Bin\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPTRT\\AdminNotices\\' => 
        array (
            0 => __DIR__ . '/..' . '/wptrt/admin-notices/src',
        ),
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
        'Barn2\\Lib\\' => 
        array (
            0 => __DIR__ . '/..' . '/barn2/barn2-lib/src',
        ),
        'Bamarni\\Composer\\Bin\\' => 
        array (
            0 => __DIR__ . '/..' . '/bamarni/composer-bin-plugin/src',
        ),
    );

    public static $classMap = array (
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Admin\\Abstract_Plugin_Promo' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Admin/Abstract_Plugin_Promo.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Admin\\Notices' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Admin/Notices.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Admin\\Plugin_Promo' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Admin/Plugin_Promo.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Admin\\Settings_API_Helper' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Admin/Settings_API_Helper.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Admin\\Settings_Scripts' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Admin/Settings_Scripts.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Admin\\Settings_Util' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Admin/Settings_Util.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\CSS_Util' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/CSS_Util.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Cache' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Cache.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Conditional' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Conditional.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Plugin\\Admin\\Admin_Links' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Plugin/Admin/Admin_Links.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Plugin\\Admin\\Notice_Provider' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Plugin/Admin/Notice_Provider.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Plugin\\Admin\\Plugin_Updater' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Plugin/Admin/Plugin_Updater.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Plugin\\I18n' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Plugin/I18n.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Plugin\\License\\Admin\\License_Key_Setting' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Plugin/License/Admin/License_Key_Setting.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Plugin\\License\\Admin\\License_Notices' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Plugin/License/Admin/License_Notices.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Plugin\\License\\Admin\\License_Setting' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Plugin/License/Admin/License_Setting.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Plugin\\License\\EDD_Licensing' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Plugin/License/EDD_Licensing.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Plugin\\License\\License' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Plugin/License/License.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Plugin\\License\\License_API' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Plugin/License/License_API.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Plugin\\License\\License_Checker' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Plugin/License/License_Checker.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Plugin\\License\\License_Summary' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Plugin/License/License_Summary.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Plugin\\License\\Plugin_License' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Plugin/License/Plugin_License.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Plugin\\Licensed_Plugin' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Plugin/Licensed_Plugin.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Plugin\\Plugin' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Plugin/Plugin.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Plugin\\Plugin_Activation_Listener' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Plugin/Plugin_Activation_Listener.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Plugin\\Plugin_Data' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Plugin/Plugin_Data.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Plugin\\Premium_Plugin' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Plugin/Premium_Plugin.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Plugin\\Requirements' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Plugin/Requirements.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Plugin\\Simple_Plugin' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Plugin/Simple_Plugin.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Registerable' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Registerable.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Rest\\Base_Route' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Rest/Base_Route.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Rest\\Base_Server' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Rest/Base_Server.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Rest\\Rest_Server' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Rest/Rest_Server.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Rest\\Route' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Rest/Route.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Schedulable' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Schedulable.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Scheduled_Task' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Scheduled_Task.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Service\\Core_Service' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Service/Core_Service.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Service\\Includes_Files' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Service/Includes_Files.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Service\\Premium_Service' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Service/Premium_Service.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Service\\Service' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Service/Service.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Service\\Service_Container' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Service/Service_Container.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Service\\Service_Provider' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Service/Service_Provider.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Service\\Standard_Service' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Service/Standard_Service.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Template_Loader' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Template_Loader.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Traits\\Plugin_Aware' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Traits/Plugin_Aware.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Translatable' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Translatable.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\Util' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/Util.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\WP_Scoped_Hooks' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/WP_Scoped_Hooks.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\WooCommerce\\Admin\\Custom_Settings_Fields' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/WooCommerce/Admin/Custom_Settings_Fields.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\WooCommerce\\Admin\\Navigation' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/WooCommerce/Admin/Navigation.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\WooCommerce\\Admin\\Plugin_Promo' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/WooCommerce/Admin/Plugin_Promo.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\WooCommerce\\Admin\\Settings_Util' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/WooCommerce/Admin/Settings_Util.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\WooCommerce\\Compatibility' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/WooCommerce/Compatibility.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Lib\\WooCommerce\\Templates' => __DIR__ . '/../..' . '/dependencies/barn2/barn2-lib/src/WooCommerce/Templates.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Setup_Wizard\\Api' => __DIR__ . '/../..' . '/dependencies/barn2/setup-wizard/src/Api.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Setup_Wizard\\Interfaces\\Bootable' => __DIR__ . '/../..' . '/dependencies/barn2/setup-wizard/src/Interfaces/Bootable.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Setup_Wizard\\Interfaces\\Deferrable' => __DIR__ . '/../..' . '/dependencies/barn2/setup-wizard/src/Interfaces/Deferrable.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Setup_Wizard\\Interfaces\\Pluggable' => __DIR__ . '/../..' . '/dependencies/barn2/setup-wizard/src/Interfaces/Pluggable.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Setup_Wizard\\Interfaces\\Restartable' => __DIR__ . '/../..' . '/dependencies/barn2/setup-wizard/src/Interfaces/Restartable.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Setup_Wizard\\Setup_Wizard' => __DIR__ . '/../..' . '/dependencies/barn2/setup-wizard/src/Setup_Wizard.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Setup_Wizard\\Starter' => __DIR__ . '/../..' . '/dependencies/barn2/setup-wizard/src/Starter.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Setup_Wizard\\Step' => __DIR__ . '/../..' . '/dependencies/barn2/setup-wizard/src/Step.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Setup_Wizard\\Steps\\Cross_Selling' => __DIR__ . '/../..' . '/dependencies/barn2/setup-wizard/src/Steps/Cross_Selling.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Setup_Wizard\\Steps\\Ready' => __DIR__ . '/../..' . '/dependencies/barn2/setup-wizard/src/Steps/Ready.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Setup_Wizard\\Steps\\Welcome' => __DIR__ . '/../..' . '/dependencies/barn2/setup-wizard/src/Steps/Welcome.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Setup_Wizard\\Steps\\Welcome_Free' => __DIR__ . '/../..' . '/dependencies/barn2/setup-wizard/src/Steps/Welcome_Free.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\Setup_Wizard\\Util' => __DIR__ . '/../..' . '/dependencies/barn2/setup-wizard/src/Util.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\WPTRT\\AdminNotices\\Dismiss' => __DIR__ . '/../..' . '/dependencies/wptrt/admin-notices/src/Dismiss.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\WPTRT\\AdminNotices\\Notice' => __DIR__ . '/../..' . '/dependencies/wptrt/admin-notices/src/Notice.php',
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\Dependencies\\WPTRT\\AdminNotices\\Notices' => __DIR__ . '/../..' . '/dependencies/wptrt/admin-notices/src/Notices.php',
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
        'PHPCSUtils\\Internal\\StableCollections' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Internal/StableCollections.php',
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
