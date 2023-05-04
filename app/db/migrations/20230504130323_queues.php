<?php
declare(strict_types=1);

use Phinx\Db\Adapter\MysqlAdapter;
use Phinx\Migration\AbstractMigration;

final class Queues extends AbstractMigration
{
    public function up()
    {
        $this->table('queues')
            ->addColumn('token', 'string')
            ->addColumn('user_id', 'integer')
            ->addColumn('notification_id', 'integer')
            ->addColumn('status', 'string')
            ->create();
    }

    public function down()
    {
        $this->table('queues')->drop();
    }
}