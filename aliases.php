<?php

use Winter\Storm\Support\ClassLoader;

/**
 * To allow compatibility with plugins that extend the original RainLab.MailChimp plugin, this will alias those classes to
 * use the new Winter.MailChimp classes.
 */
$aliases = [
    // Regular aliases
    Winter\MailChimp\Plugin::class              => 'RainLab\MailChimp\Plugin',
    Winter\MailChimp\Components\Signup::class   => 'RainLab\MailChimp\Components\Signup',
    Winter\MailChimp\Models\Settings::class     => 'RainLab\MailChimp\Models\Settings',
];

app(ClassLoader::class)->addAliases($aliases);
