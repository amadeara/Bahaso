<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article')->insert([
            [
                'judul'=>'Pentingnya Mencuci Tangan',
                'penulis' => 'Aqila Qilda',
                'deskripsi' => 'Kebiasaan mencuci tangan dianggap sepele, namun jika tidak dilakukan akan mengganggu kesehatan manusia. Mencuci tangan merupakan langkah untuk mencegah timbulnya penyakit dan penyebaran kuman kepada orang lain, dengan mencuci tangan yang benar dapat melawan penyebaran berbagai penyakit.',
            ],
            [
                'judul' => 'Makan Sehat Lima Sempurna',
                'penulis' => 'Nadira Putri',
                'deskripsi' => 'Kampanye makan 4 sehat dan 5 sempurna sudah digalakkan dan diperkenalkan oleh pemerintah ke masyarakat sejak era 1950 an. Tujuan dari kampanye makan sehat ini agar nutrisi masyarakat lebih terpenuhi dan dapat terwujud masyarakat Indonesia yang sehat dan kuat. Agar para orangtua lebih mudah dalam mengatur makanan sehat bagi si kecil, berikut adalah panduan nutrisi 4 sehat dan 5 sempurna.'

            ],
            [
                'judul' => 'Bahaya Tidur Larut Malam',
                'penulis' => 'Aditya Triyaswanda',
                'deskripsi' => 'Sering tidur terlalu larut malam tidak hanya bikin pagimu tidak optimal, tetapi juga bisa berdampak pada kesehatan secara keseluruhan. Orang yang punya kebiasaan begadang memiliki risiko lebih tinggi mengidap diabetes dan lebih mungkin mengembangkan penyakit jantung.'
            ],

        ]);
    }
}
