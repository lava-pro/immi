<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateFailedJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::getConnection()->statement
        (
            "CREATE TABLE `failed_jobs` (
              `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
              `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
              `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
              `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
              `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
              `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
              PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;"
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::getConnection()->statement
        (
            "DROP TABLE IF EXISTS `failed_jobs`;"
        );
    }
}
