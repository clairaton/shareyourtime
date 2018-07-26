<?php

use Illuminate\Database\Seeder;

class ActionsTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actions_types')->insert([
          'slug'=>'sociale',
          'name'=>'Actions Sociales'
        ]);
        DB::table('actions_types')->insert([
          'slug'=>'environnement',
          'name'=>'Actions Environnementales'
        ]);
        DB::table('actions_types')->insert([
          'slug'=>'civil',
          'name'=>'Actions civiles'
        ]);
    }
}
