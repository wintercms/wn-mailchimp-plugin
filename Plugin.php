<?php namespace Winter\MailChimp;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'MailChimp',
            'description' => 'Provides MailChimp integration services.',
            'author'      => 'Winter CMS',
            'icon'        => 'icon-envelope',
            'homepage'    => 'https://github.com/wintercms/wn-mailchimp-plugin',
            'replaces'    => ['RainLab.MailChimp' => '<= 1.0.4'],
        ];
    }

    public function registerComponents()
    {
        return [
            'Winter\MailChimp\Components\Signup' => 'mailSignup'
        ];
    }

    /**
     * Registers administrator permissions for this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'winter.mailchimp.configure' => [
                'tab'   => 'MailChimp',
                'label' => 'Configure MailChimp API access.',
            ],
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'MailChimp',
                'icon'        => 'icon-envelope',
                'description' => 'Configure MailChimp API access.',
                'class'       => 'Winter\MailChimp\Models\Settings',
                'order'       => 600,
                'permissions' => ['winter.mailchimp.configure']
            ]
        ];
    }

    public function registerClassAliases()
    {
        /**
         * To allow compatibility with plugins that extend the original RainLab.MailChimp plugin,
         * this will alias those classes to use the new Winter.MailChimp classes.
         */
        return [
            \Winter\MailChimp\Plugin::class              => \RainLab\MailChimp\Plugin::class,
            \Winter\MailChimp\Components\Signup::class   => \RainLab\MailChimp\Components\Signup::class,
            \Winter\MailChimp\Models\Settings::class     => \RainLab\MailChimp\Models\Settings::class,
        ];
    }
}
