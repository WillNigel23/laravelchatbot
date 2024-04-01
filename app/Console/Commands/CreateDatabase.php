<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use PDO;
use PDOException;

class CreateDatabase extends Command
{
    protected $signature = 'db:create {name?}';
    protected $description = 'Create new Postgres database';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $database = $this->argument('name') ?: config('database.connections.pgsql.database');
        $username = config('database.connections.pgsql.username');
        $password = config('database.connections.pgsql.password');

        try {
            $pdo = new PDO("pgsql:host=localhost;port=5432;", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $pdo->exec("CREATE DATABASE \"$database\"");
            $this->info("Successfully created database named {$database}");
        } catch (PDOException $exception) {
            $this->error("Failed to create database: " . $exception->getMessage());
        }
    }
}
