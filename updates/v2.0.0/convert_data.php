<?php namespace Winter\MailChimp\Updates;

use Db;
use Winter\Storm\Database\Updates\Migration;

class ConvertData extends Migration
{
    public function up()
    {
        Db::table('system_settings')->where('item', 'rainlab_mailchimp_settings')->update(['item' => 'winter_mailchimp_settings']);
    }

    public function down()
    {
        Db::table('system_settings')->where('item', 'winter_mailchimp_settings')->update(['item' => 'rainlab_mailchimp_settings']);
    }
}
