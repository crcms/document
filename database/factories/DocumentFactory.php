<?php
/**
 * @author simon <crcms@crcms.cn>
 * @datetime 2018-05-01 11:48
 * @link http://crcms.cn/
 * @copyright Copyright &copy; 2018 Rights Reserved CRCMS
 */

use Faker\Generator as Faker;
use CrCms\Document\Models\DocumentModel;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/



$factory->define(DocumentModel::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'content' => $faker->text,
//        'created_at' => $faker->dateTime,
//        'updated_at' => $faker->dateTime,
//        'deleted_at' => null,
    ];
});