<?php
declare(strict_types=1);

use BaserCore\Database\Migration\BcSeed;

/**
 * PasswordRequests seed.
 */
class PasswordRequestsSeed extends BcSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
        ];

        $table = $this->table('password_requests');
        $table->insert($data)->save();
    }
}
