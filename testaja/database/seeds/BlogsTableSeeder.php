<?php

use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            'judul' => 'Hallo bandung',
            'deskripsi' => 'hallo bandung hallo bandunghallo bandunghallo bandunghallo bandung'
        ]);

        DB::table('blogs')->insert([
            'judul' => 'Halo makasar',
            'deskripsi' => 'Halo makasarHalo makasarHalo makasarHalo makasarHalo makasarHalo makasarHalo makasar'
        ]);

        DB::table('blogs')->insert([
            'judul' => 'Hallo lombok',
            'deskripsi' => 'Hallo lombokHallo lombokHallo lombokHallo lombokHallo lombokHallo lombokHallo lombok'
        ]);
    }
}
