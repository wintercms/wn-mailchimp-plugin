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
}
