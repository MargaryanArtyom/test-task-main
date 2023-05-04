<?php
declare(strict_types=1);

use Phinx\Db\Adapter\MysqlAdapter;
use Phinx\Migration\AbstractMigration;

final class PushNotifications extends AbstractMigration
{
    public function up()
    {
        $this->table('push_notifications')
            ->addColumn('title', 'string')
            ->addColumn('message', 'text')
            ->addColumn('country_id', 'integer')
            ->create();
    }

    public function down()
    {
        $this->table('push_notifications')->drop();
    }
}