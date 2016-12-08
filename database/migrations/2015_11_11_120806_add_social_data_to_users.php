<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSocialDataToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('social_name')->nullable()->after('password');
            $table->string('social_avatar')->nullable()->after('password');
            $table->string('social_username')->nullable()->after('password');
            $table->string('social_provider')->nullable()->after('password');
            $table->string('social_provider_id')->nullable()->after('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'social_name',
                'social_avatar',
                'social_username',
                'social_provider',
                'social_provider_id'
            ]);
        });
    }
}
