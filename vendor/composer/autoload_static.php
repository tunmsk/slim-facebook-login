<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit09feeaa7a90fe2652d661b1ae4fb6b71
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
        '72579e7bd17821bb1321b87411366eae' => __DIR__ . '/..' . '/illuminate/support/helpers.php',
        'c65d09b6820da036953a371c8c73a9b1' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/polyfills.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Translation\\' => 30,
            'Slim\\' => 5,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Container\\' => 14,
        ),
        'I' => 
        array (
            'Interop\\Container\\' => 18,
            'Illuminate\\Support\\' => 19,
            'Illuminate\\Database\\' => 20,
            'Illuminate\\Contracts\\' => 21,
            'Illuminate\\Container\\' => 21,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
            'Facebook\\' => 9,
        ),
        'C' => 
        array (
            'Carbon\\' => 7,
        ),
        'A' => 
        array (
            'App\\Route\\' => 10,
            'App\\Model\\' => 10,
            'App\\Database\\' => 13,
            'App\\Controller\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'Slim\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/slim/Slim',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
        'Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/support',
        ),
        'Illuminate\\Database\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/database',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'Illuminate\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/container',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
        'Facebook\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook',
        ),
        'Carbon\\' => 
        array (
            0 => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon',
        ),
        'App\\Route\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'App\\Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Model',
        ),
        'App\\Database\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Config',
        ),
        'App\\Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Controller',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
        'H' => 
        array (
            'Hybrid' => 
            array (
                0 => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth',
            ),
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/inflector/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Hybrid_Auth' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Auth.php',
        'Hybrid_Endpoint' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Endpoint.php',
        'Hybrid_Error' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Error.php',
        'Hybrid_Exception' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Exception.php',
        'Hybrid_Logger' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Logger.php',
        'Hybrid_Provider_Adapter' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Provider_Adapter.php',
        'Hybrid_Provider_Model' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Provider_Model.php',
        'Hybrid_Provider_Model_OAuth1' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Provider_Model_OAuth1.php',
        'Hybrid_Provider_Model_OAuth2' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Provider_Model_OAuth2.php',
        'Hybrid_Provider_Model_OpenID' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Provider_Model_OpenID.php',
        'Hybrid_Providers_AOL' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Providers/AOL.php',
        'Hybrid_Providers_Facebook' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Providers/Facebook.php',
        'Hybrid_Providers_Foursquare' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Providers/Foursquare.php',
        'Hybrid_Providers_Google' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Providers/Google.php',
        'Hybrid_Providers_LinkedIn' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Providers/LinkedIn.php',
        'Hybrid_Providers_Live' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Providers/Live.php',
        'Hybrid_Providers_OpenID' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Providers/OpenID.php',
        'Hybrid_Providers_Twitter' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Providers/Twitter.php',
        'Hybrid_Providers_Yahoo' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Providers/Yahoo.php',
        'Hybrid_Storage' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/Storage.php',
        'Hybrid_Storage_Interface' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/StorageInterface.php',
        'Hybrid_User' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/User.php',
        'Hybrid_User_Activity' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/User_Activity.php',
        'Hybrid_User_Contact' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/User_Contact.php',
        'Hybrid_User_Profile' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/User_Profile.php',
        'LightOpenID' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/thirdparty/OpenID/LightOpenID.php',
        'LinkedIn' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/thirdparty/LinkedIn/LinkedIn.php',
        'LinkedInException' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/thirdparty/LinkedIn/LinkedIn.php',
        'OAuth1Client' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/thirdparty/OAuth/OAuth1Client.php',
        'OAuth2Client' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/thirdparty/OAuth/OAuth2Client.php',
        'OAuthConsumer' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/thirdparty/OAuth/OAuth.php',
        'OAuthDataStore' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/thirdparty/OAuth/OAuth.php',
        'OAuthException' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/thirdparty/OAuth/OAuth.php',
        'OAuthRequest' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/thirdparty/OAuth/OAuth.php',
        'OAuthServer' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/thirdparty/OAuth/OAuth.php',
        'OAuthSignatureMethod' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/thirdparty/OAuth/OAuth.php',
        'OAuthSignatureMethod_HMAC_SHA1' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/thirdparty/OAuth/OAuth.php',
        'OAuthSignatureMethod_PLAINTEXT' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/thirdparty/OAuth/OAuth.php',
        'OAuthSignatureMethod_RSA_SHA1' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/thirdparty/OAuth/OAuth.php',
        'OAuthToken' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/thirdparty/OAuth/OAuth.php',
        'OAuthUtil' => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth/Hybrid/thirdparty/OAuth/OAuth.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit09feeaa7a90fe2652d661b1ae4fb6b71::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit09feeaa7a90fe2652d661b1ae4fb6b71::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit09feeaa7a90fe2652d661b1ae4fb6b71::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit09feeaa7a90fe2652d661b1ae4fb6b71::$classMap;

        }, null, ClassLoader::class);
    }
}
