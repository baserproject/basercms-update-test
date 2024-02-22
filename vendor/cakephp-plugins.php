<?php
$baseDir = dirname(dirname(__FILE__));

return [
    'plugins' => [
        'Authentication' => $baseDir . '/vendor/cakephp/authentication/',
        'Bake' => $baseDir . '/vendor/cakephp/bake/',
        'BaserCore' => $baseDir . '/vendor/baserproject/baser-core/',
        'BcAdminThird' => $baseDir . '/vendor/baserproject/bc-admin-third/',
        'BcBlog' => $baseDir . '/vendor/baserproject/bc-blog/',
        'BcContentLink' => $baseDir . '/vendor/baserproject/bc-content-link/',
        'BcCustomContent' => $baseDir . '/vendor/baserproject/bc-custom-content/',
        'BcEditorTemplate' => $baseDir . '/vendor/baserproject/bc-editor-template/',
        'BcFavorite' => $baseDir . '/vendor/baserproject/bc-favorite/',
        'BcFront' => $baseDir . '/vendor/baserproject/bc-front/',
        'BcInstaller' => $baseDir . '/vendor/baserproject/bc-installer/',
        'BcMail' => $baseDir . '/vendor/baserproject/bc-mail/',
        'BcPluginSample' => $baseDir . '/plugins/BcPluginSample/',
        'BcSearchIndex' => $baseDir . '/vendor/baserproject/bc-search-index/',
        'BcThemeConfig' => $baseDir . '/vendor/baserproject/bc-theme-config/',
        'BcThemeFile' => $baseDir . '/vendor/baserproject/bc-theme-file/',
        'BcThemeSample' => $baseDir . '/plugins/BcThemeSample/',
        'BcUploader' => $baseDir . '/vendor/baserproject/bc-uploader/',
        'BcWidgetArea' => $baseDir . '/vendor/baserproject/bc-widget-area/',
        'Cake/TwigView' => $baseDir . '/vendor/cakephp/twig-view/',
        'CakephpFixtureFactories' => $baseDir . '/vendor/vierge-noire/cakephp-fixture-factories/',
        'CakephpTestSuiteLight' => $baseDir . '/vendor/vierge-noire/cakephp-test-suite-light/',
        'DebugKit' => $baseDir . '/vendor/cakephp/debug_kit/',
        'Migrations' => $baseDir . '/vendor/cakephp/migrations/',
        'SoftDelete' => $baseDir . '/vendor/imo-tikuwa/cakephp-soft-delete/',
    ],
];
