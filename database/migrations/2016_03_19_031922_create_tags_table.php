<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tag_name')->unique();
            $table->string('tag_group');
            $table->timestamps();
        });

        \Illuminate\Support\Facades\DB::table('tags')->insert(
            [
                [
                    'tag_name' => 'PHP',
                    'tag_group' => 'PHP',
                ],
                [
                    'tag_name' => 'Laravel',
                    'tag_group' => 'PHP',
                ],
                [
                    'tag_name' => 'Composer',
                    'tag_group' => 'PHP',
                ],
                [
                    'tag_name' => '重构',
                    'tag_group' => 'PHP',
                ],
                [
                    'tag_name' => '设计模式',
                    'tag_group' => 'PHP',
                ],
                [
                    'tag_name' => 'Testing',
                    'tag_group' => 'PHP',
                ],
                [
                    'tag_name' => '部署',
                    'tag_group' => 'PHP',
                ],
                [
                    'tag_name' => '开源项目',
                    'tag_group' => 'PHP',
                ],
                [
                    'tag_name' => 'MySQL',
                    'tag_group' => 'Web开发',
                ],
                [
                    'tag_name' => 'Database',
                    'tag_group' => 'Web开发',
                ],
                [
                    'tag_name' => 'Git',
                    'tag_group' => 'Web开发',
                ],
                [
                    'tag_name' => 'Linux',
                    'tag_group' => 'Web开发',
                ],
                [
                    'tag_name' => 'WebServer',
                    'tag_group' => 'Web开发',
                ],
                [
                    'tag_name' => 'iPhone',
                    'tag_group' => 'Mobile',
                ],
                [
                    'tag_name' => 'Android',
                    'tag_group' => 'Mobile',
                ],
                [
                    'tag_name' => 'Ruby',
                    'tag_group' => '开发语言',
                ],
                [
                    'tag_name' => 'JavaScript',
                    'tag_group' => '开发语言',
                ],
                [
                    'tag_name' => 'Python',
                    'tag_group' => '开发语言',
                ],
                [
                    'tag_name' => 'Golang',
                    'tag_group' => '开发语言',
                ],
                [
                    'tag_name' => 'Erlang',
                    'tag_group' => '开发语言',
                ]
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tags');
    }
}
