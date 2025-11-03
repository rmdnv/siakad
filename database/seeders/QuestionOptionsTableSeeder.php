<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuestionOptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('question_options')->delete();
        
        \DB::table('question_options')->insert(array (
            0 => 
            array (
                'id' => 1,
                'question_id' => 1,
                'value' => 'Ya',
                'text' => 'Ya',
                'created_at' => '2025-09-01 10:41:38',
                'updated_at' => '2025-09-01 10:41:38',
            ),
            1 => 
            array (
                'id' => 2,
                'question_id' => 1,
                'value' => 'Tidak',
                'text' => 'Tidak',
                'created_at' => '2025-09-01 10:41:49',
                'updated_at' => '2025-09-01 10:41:49',
            ),
            2 => 
            array (
                'id' => 3,
                'question_id' => 2,
                'value' => 'Ya',
                'text' => 'Ya',
                'created_at' => '2025-09-01 10:43:57',
                'updated_at' => '2025-09-01 10:43:57',
            ),
            3 => 
            array (
                'id' => 4,
                'question_id' => 2,
                'value' => 'Tidak',
                'text' => 'Tidak',
                'created_at' => '2025-09-01 10:44:02',
                'updated_at' => '2025-09-01 10:44:02',
            ),
            4 => 
            array (
                'id' => 11,
                'question_id' => 4,
                'value' => 'Ya',
                'text' => 'Ya',
                'created_at' => '2025-09-01 11:09:05',
                'updated_at' => '2025-09-01 11:09:05',
            ),
            5 => 
            array (
                'id' => 12,
                'question_id' => 4,
                'value' => 'Tidak',
                'text' => 'Tidak',
                'created_at' => '2025-09-01 11:09:27',
                'updated_at' => '2025-09-01 11:09:27',
            ),
            6 => 
            array (
                'id' => 13,
                'question_id' => 5,
                'value' => 'o1',
                'text' => 'Berwirausaha sendiri tanpa dibantu orang lain',
                'created_at' => '2025-09-01 11:12:11',
                'updated_at' => '2025-09-01 11:12:11',
            ),
            7 => 
            array (
                'id' => 14,
                'question_id' => 5,
                'value' => 'o2',
                'text' => 'Berwirausaha dengan dibantu buruh/pekerja tak dibayar',
                'created_at' => '2025-09-01 11:12:11',
                'updated_at' => '2025-09-01 11:12:11',
            ),
            8 => 
            array (
                'id' => 15,
                'question_id' => 5,
                'value' => 'o3',
                'text' => 'Berwirausaha dengan dibantu buruh/pekerja dibayar',
                'created_at' => '2025-09-01 11:12:11',
                'updated_at' => '2025-09-01 11:12:11',
            ),
            9 => 
            array (
                'id' => 16,
                'question_id' => 5,
                'value' => 'o4',
                'text' => 'Membantu menjalankan usaha/wirausaha keluarga',
                'created_at' => '2025-09-01 11:12:11',
                'updated_at' => '2025-09-01 11:12:11',
            ),
            10 => 
            array (
                'id' => 17,
                'question_id' => 5,
                'value' => 'o5',
                'text' => 'Buruh/karyawan/pegawai',
                'created_at' => '2025-09-01 11:12:11',
                'updated_at' => '2025-09-01 11:12:11',
            ),
            11 => 
            array (
                'id' => 18,
                'question_id' => 5,
                'value' => 'o6',
            'text' => 'Pekerja bebas (freelance / tidak punya majikan tetap)',
                'created_at' => '2025-09-01 11:12:12',
                'updated_at' => '2025-09-01 11:12:12',
            ),
            12 => 
            array (
                'id' => 19,
                'question_id' => 6,
                'value' => 'Ya',
                'text' => 'Ya',
                'created_at' => '2025-09-01 11:23:23',
                'updated_at' => '2025-09-01 11:23:23',
            ),
            13 => 
            array (
                'id' => 20,
                'question_id' => 6,
                'value' => 'Tidak',
                'text' => 'Tidak',
                'created_at' => '2025-09-01 11:23:23',
                'updated_at' => '2025-09-01 11:23:23',
            ),
            14 => 
            array (
                'id' => 34,
                'question_id' => 7,
                'value' => 'o1',
                'text' => 'Berwirausaha sendiri tanpa dibantu orang lain',
                'created_at' => '2025-09-01 11:46:02',
                'updated_at' => '2025-09-01 11:46:02',
            ),
            15 => 
            array (
                'id' => 35,
                'question_id' => 7,
                'value' => 'o2',
                'text' => 'Berwirausaha dengan dibantu buruh/pekerja tak dibayar',
                'created_at' => '2025-09-01 11:46:02',
                'updated_at' => '2025-09-01 11:46:02',
            ),
            16 => 
            array (
                'id' => 36,
                'question_id' => 7,
                'value' => 'o4',
                'text' => 'Membantu menjalankan usaha/wirausaha keluarga',
                'created_at' => '2025-09-01 11:46:02',
                'updated_at' => '2025-09-01 11:46:02',
            ),
            17 => 
            array (
                'id' => 37,
                'question_id' => 7,
                'value' => 'o5',
                'text' => 'Buruh/karyawan/pegawai',
                'created_at' => '2025-09-01 11:46:02',
                'updated_at' => '2025-09-01 11:46:02',
            ),
            18 => 
            array (
                'id' => 38,
                'question_id' => 7,
                'value' => 'o6',
            'text' => 'Pekerja bebas (freelance / tidak punya majikan tetap)',
                'created_at' => '2025-09-01 11:46:03',
                'updated_at' => '2025-09-01 11:46:03',
            ),
            19 => 
            array (
                'id' => 43,
                'question_id' => 13,
                'value' => 'o1',
                'text' => 'Mengurus rumah tangga',
                'created_at' => '2025-09-10 09:09:43',
                'updated_at' => '2025-09-10 09:09:43',
            ),
            20 => 
            array (
                'id' => 44,
                'question_id' => 13,
                'value' => 'o2',
                'text' => 'Mengikuti pelatihan/kursus keterampilan',
                'created_at' => '2025-09-10 09:09:43',
                'updated_at' => '2025-09-10 09:09:43',
            ),
            21 => 
            array (
                'id' => 45,
                'question_id' => 13,
                'value' => 'o3',
                'text' => 'Mempersiapkan diri untuk melanjutkan studi',
                'created_at' => '2025-09-10 09:09:43',
                'updated_at' => '2025-09-10 09:09:43',
            ),
            22 => 
            array (
                'id' => 46,
                'question_id' => 13,
                'value' => 'o4',
            'text' => 'Terlibat dalam organisasi sosial/kemasyarakatan (pengurus RT/RW/Dawis, tempat ibadah, atau organisasi/kegiatan sosial lainnya)',
                'created_at' => '2025-09-10 09:09:43',
                'updated_at' => '2025-09-10 09:09:43',
            ),
            23 => 
            array (
                'id' => 47,
                'question_id' => 13,
                'value' => 'o5',
                'text' => 'Tidak termasuk semua pilihan di atas',
                'created_at' => '2025-09-10 09:09:43',
                'updated_at' => '2025-09-10 09:09:43',
            ),
            24 => 
            array (
                'id' => 48,
                'question_id' => 14,
                'value' => 'o1',
                'text' => 'Mempersiapkan/mengirimkan lamaran pekerjaan',
                'created_at' => '2025-09-10 09:11:31',
                'updated_at' => '2025-09-10 09:11:31',
            ),
            25 => 
            array (
                'id' => 49,
                'question_id' => 14,
                'value' => 'o2',
                'text' => 'Mengikuti rangkaian seleksi untuk mendapatkan pekerjaan',
                'created_at' => '2025-09-10 09:11:31',
                'updated_at' => '2025-09-10 09:11:31',
            ),
            26 => 
            array (
                'id' => 50,
                'question_id' => 14,
                'value' => 'o3',
                'text' => 'Menunggu hasil lamaran pekerjaan',
                'created_at' => '2025-09-10 09:11:31',
                'updated_at' => '2025-09-10 09:11:31',
            ),
            27 => 
            array (
                'id' => 51,
                'question_id' => 14,
                'value' => 'o4',
                'text' => 'Mengumpulkan modal/perlengkapan/alat untuk kegiatan usaha/wirausaha',
                'created_at' => '2025-09-10 09:11:31',
                'updated_at' => '2025-09-10 09:11:31',
            ),
            28 => 
            array (
                'id' => 52,
                'question_id' => 14,
                'value' => 'o5',
                'text' => 'Mencari lokasi untuk kegiatan usaha/wirausaha',
                'created_at' => '2025-09-10 09:11:31',
                'updated_at' => '2025-09-10 09:11:31',
            ),
            29 => 
            array (
                'id' => 53,
                'question_id' => 14,
                'value' => 'o6',
                'text' => 'Mengurus izin usaha/wirausaha',
                'created_at' => '2025-09-10 09:11:31',
                'updated_at' => '2025-09-10 09:11:31',
            ),
            30 => 
            array (
                'id' => 54,
                'question_id' => 14,
                'value' => 'o7',
            'text' => 'Tidak melakukan semua kegiatan di atas (tidak mencari kerja/menyiapkan usaha/wirausaha)',
                'created_at' => '2025-09-10 09:11:31',
                'updated_at' => '2025-09-10 09:11:31',
            ),
            31 => 
            array (
                'id' => 60,
                'question_id' => 15,
                'value' => 'o1',
                'text' => 'Sudah diterima bekerja/sudah mempunyai usaha, tetapi saat ini belum mulai bekerja/belum memulai usaha',
                'created_at' => '2025-09-10 09:18:38',
                'updated_at' => '2025-09-10 09:18:38',
            ),
            32 => 
            array (
                'id' => 61,
                'question_id' => 15,
                'value' => 'o2',
                'text' => 'Tidak berani mencoba karena merasa tidak mungkin mendapatkan pekerjaan/memulai usaha',
                'created_at' => '2025-09-10 09:18:38',
                'updated_at' => '2025-09-10 09:18:38',
            ),
            33 => 
            array (
                'id' => 62,
                'question_id' => 15,
                'value' => 'o3',
                'text' => 'Sudah mencoba berulang kali tapi belum berhasil',
                'created_at' => '2025-09-10 09:18:38',
                'updated_at' => '2025-09-10 09:18:38',
            ),
            34 => 
            array (
                'id' => 63,
                'question_id' => 15,
                'value' => 'o4',
                'text' => 'Mengalami cacat fisik',
                'created_at' => '2025-09-10 09:18:38',
                'updated_at' => '2025-09-10 09:18:38',
            ),
            35 => 
            array (
                'id' => 64,
                'question_id' => 15,
                'value' => 'o5',
                'text' => 'Tidak termasuk semua pilihan di atas',
                'created_at' => '2025-09-10 09:18:38',
                'updated_at' => '2025-09-10 09:18:38',
            ),
            36 => 
            array (
                'id' => 65,
                'question_id' => 17,
                'value' => 'o1',
                'text' => 'Pekerjaan sebelumnya kurang sesuai dengan bidang keahlian di SMK',
                'created_at' => '2025-09-10 09:26:10',
                'updated_at' => '2025-09-10 09:26:10',
            ),
            37 => 
            array (
                'id' => 66,
                'question_id' => 17,
                'value' => 'o2',
                'text' => 'Setelah tamat sekolah tidak melanjutkan ke Perguruan Tinggi',
                'created_at' => '2025-09-10 09:26:10',
                'updated_at' => '2025-09-10 09:26:10',
            ),
            38 => 
            array (
                'id' => 67,
                'question_id' => 17,
                'value' => 'o3',
                'text' => 'Upah pekerjaan sebelumnya kurang layak',
                'created_at' => '2025-09-10 09:26:10',
                'updated_at' => '2025-09-10 09:26:10',
            ),
            39 => 
            array (
                'id' => 68,
                'question_id' => 17,
                'value' => 'o4',
            'text' => 'Putus hubungan kerja (PHK)',
                'created_at' => '2025-09-10 09:26:10',
                'updated_at' => '2025-09-10 09:26:10',
            ),
            40 => 
            array (
                'id' => 69,
                'question_id' => 17,
                'value' => 'o5',
            'text' => 'Usaha bangkrut (gulung tikar)',
                'created_at' => '2025-09-10 09:26:10',
                'updated_at' => '2025-09-10 09:26:10',
            ),
            41 => 
            array (
                'id' => 70,
                'question_id' => 17,
                'value' => 'o6',
                'text' => 'Masa kontrak kerja habis',
                'created_at' => '2025-09-10 09:26:10',
                'updated_at' => '2025-09-10 09:26:10',
            ),
            42 => 
            array (
                'id' => 71,
                'question_id' => 17,
                'value' => 'o7',
            'text' => 'Lainnya (tuliskan jawaban di bawah)',
                'created_at' => '2025-09-10 09:26:10',
                'updated_at' => '2025-09-10 09:26:10',
            ),
            43 => 
            array (
                'id' => 270,
                'question_id' => 79,
                'value' => 'o1',
                'text' => 'Dalam Negeri',
                'created_at' => '2025-09-10 19:43:28',
                'updated_at' => '2025-09-10 19:43:28',
            ),
            44 => 
            array (
                'id' => 271,
                'question_id' => 79,
                'value' => 'o2',
                'text' => 'Luar Negeri',
                'created_at' => '2025-09-10 19:43:28',
                'updated_at' => '2025-09-10 19:43:28',
            ),
            45 => 
            array (
                'id' => 274,
                'question_id' => 82,
                'value' => 'o1',
                'text' => 'D-1',
                'created_at' => '2025-09-10 19:45:47',
                'updated_at' => '2025-09-10 19:45:47',
            ),
            46 => 
            array (
                'id' => 275,
                'question_id' => 82,
                'value' => 'o2',
                'text' => 'D-2',
                'created_at' => '2025-09-10 19:45:47',
                'updated_at' => '2025-09-10 19:45:47',
            ),
            47 => 
            array (
                'id' => 276,
                'question_id' => 82,
                'value' => 'o3',
                'text' => 'D-3',
                'created_at' => '2025-09-10 19:45:47',
                'updated_at' => '2025-09-10 19:45:47',
            ),
            48 => 
            array (
                'id' => 277,
                'question_id' => 82,
                'value' => 'o4',
                'text' => 'D-4/Sarjana Terapan',
                'created_at' => '2025-09-10 19:45:47',
                'updated_at' => '2025-09-10 19:45:47',
            ),
            49 => 
            array (
                'id' => 278,
                'question_id' => 82,
                'value' => 'o5',
                'text' => 'S-1',
                'created_at' => '2025-09-10 19:45:47',
                'updated_at' => '2025-09-10 19:45:47',
            ),
            50 => 
            array (
                'id' => 284,
                'question_id' => 85,
                'value' => 'o1',
                'text' => 'Sangat tidak selaras',
                'created_at' => '2025-09-10 19:46:39',
                'updated_at' => '2025-09-10 19:46:39',
            ),
            51 => 
            array (
                'id' => 285,
                'question_id' => 85,
                'value' => 'o2',
                'text' => 'Tidak selaras',
                'created_at' => '2025-09-10 19:46:39',
                'updated_at' => '2025-09-10 19:46:39',
            ),
            52 => 
            array (
                'id' => 286,
                'question_id' => 85,
                'value' => 'o3',
                'text' => 'Selaras',
                'created_at' => '2025-09-10 19:46:39',
                'updated_at' => '2025-09-10 19:46:39',
            ),
            53 => 
            array (
                'id' => 287,
                'question_id' => 85,
                'value' => 'o4',
                'text' => 'Sangat Selaras',
                'created_at' => '2025-09-10 19:46:39',
                'updated_at' => '2025-09-10 19:46:39',
            ),
            54 => 
            array (
                'id' => 296,
                'question_id' => 88,
                'value' => 'o1',
                'text' => 'Menyalurkan minat dan kompetensi berwirausaha',
                'created_at' => '2025-09-10 19:47:57',
                'updated_at' => '2025-09-10 19:47:57',
            ),
            55 => 
            array (
                'id' => 297,
                'question_id' => 88,
                'value' => 'o2',
                'text' => 'Melanjutkan usaha orang tua/keluarga',
                'created_at' => '2025-09-10 19:47:57',
                'updated_at' => '2025-09-10 19:47:57',
            ),
            56 => 
            array (
                'id' => 298,
                'question_id' => 88,
                'value' => 'o3',
                'text' => 'Mencari uang untuk biaya kuliah/hidup',
                'created_at' => '2025-09-10 19:47:57',
                'updated_at' => '2025-09-10 19:47:57',
            ),
            57 => 
            array (
                'id' => 299,
                'question_id' => 88,
                'value' => 'o4',
                'text' => 'Sebagai tambahan uang jajan',
                'created_at' => '2025-09-10 19:47:57',
                'updated_at' => '2025-09-10 19:47:57',
            ),
            58 => 
            array (
                'id' => 300,
                'question_id' => 88,
                'value' => 'o5',
                'text' => 'Meringankan beban orang tua',
                'created_at' => '2025-09-10 19:47:57',
                'updated_at' => '2025-09-10 19:47:57',
            ),
            59 => 
            array (
                'id' => 301,
                'question_id' => 88,
                'value' => 'o6',
                'text' => 'Lainnya',
                'created_at' => '2025-09-10 19:47:57',
                'updated_at' => '2025-09-10 19:47:57',
            ),
            60 => 
            array (
                'id' => 338,
                'question_id' => 108,
                'value' => 'o1',
                'text' => 'Dalam Negeri',
                'created_at' => '2025-09-10 20:02:31',
                'updated_at' => '2025-09-10 20:02:31',
            ),
            61 => 
            array (
                'id' => 339,
                'question_id' => 108,
                'value' => 'o2',
                'text' => 'Luar Negeri',
                'created_at' => '2025-09-10 20:02:31',
                'updated_at' => '2025-09-10 20:02:31',
            ),
            62 => 
            array (
                'id' => 345,
                'question_id' => 111,
                'value' => 'o1',
                'text' => 'D-1',
                'created_at' => '2025-09-10 20:08:48',
                'updated_at' => '2025-09-10 20:08:48',
            ),
            63 => 
            array (
                'id' => 346,
                'question_id' => 111,
                'value' => 'o2',
                'text' => 'D-2',
                'created_at' => '2025-09-10 20:08:48',
                'updated_at' => '2025-09-10 20:08:48',
            ),
            64 => 
            array (
                'id' => 347,
                'question_id' => 111,
                'value' => 'o3',
                'text' => 'D-3',
                'created_at' => '2025-09-10 20:08:48',
                'updated_at' => '2025-09-10 20:08:48',
            ),
            65 => 
            array (
                'id' => 348,
                'question_id' => 111,
                'value' => 'o4',
                'text' => 'D-4/Sarjana Terapan',
                'created_at' => '2025-09-10 20:08:48',
                'updated_at' => '2025-09-10 20:08:48',
            ),
            66 => 
            array (
                'id' => 349,
                'question_id' => 111,
                'value' => 'o5',
                'text' => 'S-1',
                'created_at' => '2025-09-10 20:08:48',
                'updated_at' => '2025-09-10 20:08:48',
            ),
            67 => 
            array (
                'id' => 354,
                'question_id' => 114,
                'value' => 'o1',
                'text' => 'Sangat tidak selaras',
                'created_at' => '2025-09-10 20:09:44',
                'updated_at' => '2025-09-10 20:09:44',
            ),
            68 => 
            array (
                'id' => 355,
                'question_id' => 114,
                'value' => 'o2',
                'text' => 'Tidak selaras',
                'created_at' => '2025-09-10 20:09:44',
                'updated_at' => '2025-09-10 20:09:44',
            ),
            69 => 
            array (
                'id' => 356,
                'question_id' => 114,
                'value' => 'o3',
                'text' => 'Selaras',
                'created_at' => '2025-09-10 20:09:44',
                'updated_at' => '2025-09-10 20:09:44',
            ),
            70 => 
            array (
                'id' => 357,
                'question_id' => 114,
                'value' => 'o4',
                'text' => 'Sangat Selaras',
                'created_at' => '2025-09-10 20:09:44',
                'updated_at' => '2025-09-10 20:09:44',
            ),
            71 => 
            array (
                'id' => 364,
                'question_id' => 116,
                'value' => 'o1',
                'text' => 'Menyalurkan minat dan kompetensi berwirausaha',
                'created_at' => '2025-09-10 20:10:15',
                'updated_at' => '2025-09-10 20:10:15',
            ),
            72 => 
            array (
                'id' => 365,
                'question_id' => 116,
                'value' => 'o2',
                'text' => 'Melanjutkan usaha orang tua/keluarga',
                'created_at' => '2025-09-10 20:10:15',
                'updated_at' => '2025-09-10 20:10:15',
            ),
            73 => 
            array (
                'id' => 366,
                'question_id' => 116,
                'value' => 'o3',
                'text' => 'Mencari uang untuk biaya kuliah/hidup',
                'created_at' => '2025-09-10 20:10:15',
                'updated_at' => '2025-09-10 20:10:15',
            ),
            74 => 
            array (
                'id' => 367,
                'question_id' => 116,
                'value' => 'o4',
                'text' => 'Sebagai tambahan uang jajan',
                'created_at' => '2025-09-10 20:10:15',
                'updated_at' => '2025-09-10 20:10:15',
            ),
            75 => 
            array (
                'id' => 368,
                'question_id' => 116,
                'value' => 'o5',
                'text' => 'Meringankan beban orang tua',
                'created_at' => '2025-09-10 20:10:15',
                'updated_at' => '2025-09-10 20:10:15',
            ),
            76 => 
            array (
                'id' => 369,
                'question_id' => 116,
                'value' => 'o6',
                'text' => 'Lainnya',
                'created_at' => '2025-09-10 20:10:15',
                'updated_at' => '2025-09-10 20:10:15',
            ),
            77 => 
            array (
                'id' => 370,
                'question_id' => 118,
                'value' => 'o1',
                'text' => 'Dalam Negeri',
                'created_at' => '2025-09-10 20:02:31',
                'updated_at' => '2025-09-10 20:02:31',
            ),
            78 => 
            array (
                'id' => 371,
                'question_id' => 118,
                'value' => 'o2',
                'text' => 'Luar Negeri',
                'created_at' => '2025-09-10 20:02:31',
                'updated_at' => '2025-09-10 20:02:31',
            ),
            79 => 
            array (
                'id' => 372,
                'question_id' => 121,
                'value' => 'o1',
                'text' => 'D-1',
                'created_at' => '2025-09-10 20:08:48',
                'updated_at' => '2025-09-10 20:08:48',
            ),
            80 => 
            array (
                'id' => 373,
                'question_id' => 121,
                'value' => 'o2',
                'text' => 'D-2',
                'created_at' => '2025-09-10 20:08:48',
                'updated_at' => '2025-09-10 20:08:48',
            ),
            81 => 
            array (
                'id' => 374,
                'question_id' => 121,
                'value' => 'o3',
                'text' => 'D-3',
                'created_at' => '2025-09-10 20:08:48',
                'updated_at' => '2025-09-10 20:08:48',
            ),
            82 => 
            array (
                'id' => 375,
                'question_id' => 121,
                'value' => 'o4',
                'text' => 'D-4/Sarjana Terapan',
                'created_at' => '2025-09-10 20:08:48',
                'updated_at' => '2025-09-10 20:08:48',
            ),
            83 => 
            array (
                'id' => 376,
                'question_id' => 121,
                'value' => 'o5',
                'text' => 'S-1',
                'created_at' => '2025-09-10 20:08:48',
                'updated_at' => '2025-09-10 20:08:48',
            ),
            84 => 
            array (
                'id' => 377,
                'question_id' => 124,
                'value' => 'o1',
                'text' => 'Sangat tidak selaras',
                'created_at' => '2025-09-10 20:09:44',
                'updated_at' => '2025-09-10 20:09:44',
            ),
            85 => 
            array (
                'id' => 378,
                'question_id' => 124,
                'value' => 'o2',
                'text' => 'Tidak selaras',
                'created_at' => '2025-09-10 20:09:44',
                'updated_at' => '2025-09-10 20:09:44',
            ),
            86 => 
            array (
                'id' => 379,
                'question_id' => 124,
                'value' => 'o3',
                'text' => 'Selaras',
                'created_at' => '2025-09-10 20:09:44',
                'updated_at' => '2025-09-10 20:09:44',
            ),
            87 => 
            array (
                'id' => 380,
                'question_id' => 124,
                'value' => 'o4',
                'text' => 'Sangat Selaras',
                'created_at' => '2025-09-10 20:09:44',
                'updated_at' => '2025-09-10 20:09:44',
            ),
            88 => 
            array (
                'id' => 381,
                'question_id' => 126,
                'value' => 'o1',
                'text' => 'Menyalurkan minat dan kompetensi berwirausaha',
                'created_at' => '2025-09-10 20:10:15',
                'updated_at' => '2025-09-10 20:10:15',
            ),
            89 => 
            array (
                'id' => 382,
                'question_id' => 126,
                'value' => 'o2',
                'text' => 'Melanjutkan usaha orang tua/keluarga',
                'created_at' => '2025-09-10 20:10:15',
                'updated_at' => '2025-09-10 20:10:15',
            ),
            90 => 
            array (
                'id' => 383,
                'question_id' => 126,
                'value' => 'o3',
                'text' => 'Mencari uang untuk biaya kuliah/hidup',
                'created_at' => '2025-09-10 20:10:15',
                'updated_at' => '2025-09-10 20:10:15',
            ),
            91 => 
            array (
                'id' => 384,
                'question_id' => 126,
                'value' => 'o4',
                'text' => 'Sebagai tambahan uang jajan',
                'created_at' => '2025-09-10 20:10:15',
                'updated_at' => '2025-09-10 20:10:15',
            ),
            92 => 
            array (
                'id' => 385,
                'question_id' => 126,
                'value' => 'o5',
                'text' => 'Meringankan beban orang tua',
                'created_at' => '2025-09-10 20:10:15',
                'updated_at' => '2025-09-10 20:10:15',
            ),
            93 => 
            array (
                'id' => 386,
                'question_id' => 126,
                'value' => 'o6',
                'text' => 'Lainnya',
                'created_at' => '2025-09-10 20:10:15',
                'updated_at' => '2025-09-10 20:10:15',
            ),
            94 => 
            array (
                'id' => 391,
                'question_id' => 134,
                'value' => 'o1',
                'text' => 'Dalam Negeri',
                'created_at' => '2025-09-15 15:29:07',
                'updated_at' => '2025-09-15 15:29:07',
            ),
            95 => 
            array (
                'id' => 392,
                'question_id' => 134,
                'value' => 'o2',
                'text' => 'Luar Negeri',
                'created_at' => '2025-09-15 15:29:07',
                'updated_at' => '2025-09-15 15:29:07',
            ),
            96 => 
            array (
                'id' => 395,
                'question_id' => 137,
                'value' => 'o1',
                'text' => 'D-1',
                'created_at' => '2025-09-15 15:31:04',
                'updated_at' => '2025-09-15 15:31:04',
            ),
            97 => 
            array (
                'id' => 396,
                'question_id' => 137,
                'value' => 'o2',
                'text' => 'D-2',
                'created_at' => '2025-09-15 15:31:04',
                'updated_at' => '2025-09-15 15:31:04',
            ),
            98 => 
            array (
                'id' => 397,
                'question_id' => 137,
                'value' => 'o3',
                'text' => 'D-3',
                'created_at' => '2025-09-15 15:31:04',
                'updated_at' => '2025-09-15 15:31:04',
            ),
            99 => 
            array (
                'id' => 398,
                'question_id' => 137,
                'value' => 'o4',
                'text' => 'D-4/Sarjana Terapan',
                'created_at' => '2025-09-15 15:31:04',
                'updated_at' => '2025-09-15 15:31:04',
            ),
            100 => 
            array (
                'id' => 399,
                'question_id' => 137,
                'value' => 'o5',
                'text' => 'S-1',
                'created_at' => '2025-09-15 15:31:04',
                'updated_at' => '2025-09-15 15:31:04',
            ),
            101 => 
            array (
                'id' => 415,
                'question_id' => 141,
                'value' => 'o1',
                'text' => 'Sangat tidak selaras',
                'created_at' => '2025-09-15 15:37:50',
                'updated_at' => '2025-09-15 15:37:50',
            ),
            102 => 
            array (
                'id' => 416,
                'question_id' => 141,
                'value' => 'o2',
                'text' => 'Tidak selaras',
                'created_at' => '2025-09-15 15:37:50',
                'updated_at' => '2025-09-15 15:37:50',
            ),
            103 => 
            array (
                'id' => 417,
                'question_id' => 141,
                'value' => 'o3',
                'text' => 'Selaras',
                'created_at' => '2025-09-15 15:37:50',
                'updated_at' => '2025-09-15 15:37:50',
            ),
            104 => 
            array (
                'id' => 418,
                'question_id' => 141,
                'value' => 'o4',
                'text' => 'Sangat Selaras',
                'created_at' => '2025-09-15 15:37:50',
                'updated_at' => '2025-09-15 15:37:50',
            ),
            105 => 
            array (
                'id' => 434,
                'question_id' => 143,
                'value' => 'o1',
                'text' => 'Melanjutkan pekerjaan yang sudah dijalani sebelum kuliah',
                'created_at' => '2025-09-15 15:39:12',
                'updated_at' => '2025-09-15 15:39:12',
            ),
            106 => 
            array (
                'id' => 435,
                'question_id' => 143,
                'value' => 'o2',
                'text' => 'Ditugaskan oleh lembaga/instansi tempat bekerja',
                'created_at' => '2025-09-15 15:39:12',
                'updated_at' => '2025-09-15 15:39:12',
            ),
            107 => 
            array (
                'id' => 436,
                'question_id' => 143,
                'value' => 'o3',
                'text' => 'Mencari uang untuk biaya kuliah/hidup',
                'created_at' => '2025-09-15 15:39:12',
                'updated_at' => '2025-09-15 15:39:12',
            ),
            108 => 
            array (
                'id' => 437,
                'question_id' => 143,
                'value' => 'o4',
                'text' => 'Mencari tambahan uang jajan',
                'created_at' => '2025-09-15 15:39:12',
                'updated_at' => '2025-09-15 15:39:12',
            ),
            109 => 
            array (
                'id' => 438,
                'question_id' => 143,
                'value' => 'o5',
                'text' => 'Menjalankan minat/hobi',
                'created_at' => '2025-09-15 15:39:12',
                'updated_at' => '2025-09-15 15:39:12',
            ),
            110 => 
            array (
                'id' => 439,
                'question_id' => 143,
                'value' => 'o6',
                'text' => 'Meringankan beban orang tua',
                'created_at' => '2025-09-15 15:39:12',
                'updated_at' => '2025-09-15 15:39:12',
            ),
            111 => 
            array (
                'id' => 440,
                'question_id' => 143,
                'value' => 'o7',
                'text' => 'Lainnya',
                'created_at' => '2025-09-15 15:39:12',
                'updated_at' => '2025-09-15 15:39:12',
            ),
            112 => 
            array (
                'id' => 441,
                'question_id' => 145,
                'value' => 'o1',
                'text' => 'Dalam Negeri',
                'created_at' => '2025-09-15 15:29:07',
                'updated_at' => '2025-09-15 15:29:07',
            ),
            113 => 
            array (
                'id' => 442,
                'question_id' => 145,
                'value' => 'o2',
                'text' => 'Luar Negeri',
                'created_at' => '2025-09-15 15:29:07',
                'updated_at' => '2025-09-15 15:29:07',
            ),
            114 => 
            array (
                'id' => 443,
                'question_id' => 148,
                'value' => 'o1',
                'text' => 'D-1',
                'created_at' => '2025-09-15 15:31:04',
                'updated_at' => '2025-09-15 15:31:04',
            ),
            115 => 
            array (
                'id' => 444,
                'question_id' => 148,
                'value' => 'o2',
                'text' => 'D-2',
                'created_at' => '2025-09-15 15:31:04',
                'updated_at' => '2025-09-15 15:31:04',
            ),
            116 => 
            array (
                'id' => 445,
                'question_id' => 148,
                'value' => 'o3',
                'text' => 'D-3',
                'created_at' => '2025-09-15 15:31:04',
                'updated_at' => '2025-09-15 15:31:04',
            ),
            117 => 
            array (
                'id' => 446,
                'question_id' => 148,
                'value' => 'o4',
                'text' => 'D-4/Sarjana Terapan',
                'created_at' => '2025-09-15 15:31:04',
                'updated_at' => '2025-09-15 15:31:04',
            ),
            118 => 
            array (
                'id' => 447,
                'question_id' => 148,
                'value' => 'o5',
                'text' => 'S-1',
                'created_at' => '2025-09-15 15:31:04',
                'updated_at' => '2025-09-15 15:31:04',
            ),
            119 => 
            array (
                'id' => 448,
                'question_id' => 151,
                'value' => 'o1',
                'text' => 'Sangat tidak selaras',
                'created_at' => '2025-09-15 15:37:50',
                'updated_at' => '2025-09-15 15:37:50',
            ),
            120 => 
            array (
                'id' => 449,
                'question_id' => 151,
                'value' => 'o2',
                'text' => 'Tidak selaras',
                'created_at' => '2025-09-15 15:37:50',
                'updated_at' => '2025-09-15 15:37:50',
            ),
            121 => 
            array (
                'id' => 450,
                'question_id' => 151,
                'value' => 'o3',
                'text' => 'Selaras',
                'created_at' => '2025-09-15 15:37:50',
                'updated_at' => '2025-09-15 15:37:50',
            ),
            122 => 
            array (
                'id' => 451,
                'question_id' => 151,
                'value' => 'o4',
                'text' => 'Sangat Selaras',
                'created_at' => '2025-09-15 15:37:50',
                'updated_at' => '2025-09-15 15:37:50',
            ),
            123 => 
            array (
                'id' => 452,
                'question_id' => 153,
                'value' => 'o1',
                'text' => 'Melanjutkan pekerjaan yang sudah dijalani sebelum kuliah',
                'created_at' => '2025-09-15 15:39:12',
                'updated_at' => '2025-09-15 15:39:12',
            ),
            124 => 
            array (
                'id' => 453,
                'question_id' => 153,
                'value' => 'o2',
                'text' => 'Ditugaskan oleh lembaga/instansi tempat bekerja',
                'created_at' => '2025-09-15 15:39:12',
                'updated_at' => '2025-09-15 15:39:12',
            ),
            125 => 
            array (
                'id' => 454,
                'question_id' => 153,
                'value' => 'o3',
                'text' => 'Mencari uang untuk biaya kuliah/hidup',
                'created_at' => '2025-09-15 15:39:12',
                'updated_at' => '2025-09-15 15:39:12',
            ),
            126 => 
            array (
                'id' => 455,
                'question_id' => 153,
                'value' => 'o4',
                'text' => 'Mencari tambahan uang jajan',
                'created_at' => '2025-09-15 15:39:12',
                'updated_at' => '2025-09-15 15:39:12',
            ),
            127 => 
            array (
                'id' => 456,
                'question_id' => 153,
                'value' => 'o5',
                'text' => 'Menjalankan minat/hobi',
                'created_at' => '2025-09-15 15:39:12',
                'updated_at' => '2025-09-15 15:39:12',
            ),
            128 => 
            array (
                'id' => 457,
                'question_id' => 153,
                'value' => 'o6',
                'text' => 'Meringankan beban orang tua',
                'created_at' => '2025-09-15 15:39:12',
                'updated_at' => '2025-09-15 15:39:12',
            ),
            129 => 
            array (
                'id' => 458,
                'question_id' => 153,
                'value' => 'o7',
                'text' => 'Lainnya',
                'created_at' => '2025-09-15 15:39:12',
                'updated_at' => '2025-09-15 15:39:12',
            ),
            130 => 
            array (
                'id' => 459,
                'question_id' => 155,
                'value' => 'o1',
                'text' => 'Dalam Negeri',
                'created_at' => '2025-09-15 15:29:07',
                'updated_at' => '2025-09-15 15:29:07',
            ),
            131 => 
            array (
                'id' => 460,
                'question_id' => 155,
                'value' => 'o2',
                'text' => 'Luar Negeri',
                'created_at' => '2025-09-15 15:29:07',
                'updated_at' => '2025-09-15 15:29:07',
            ),
            132 => 
            array (
                'id' => 461,
                'question_id' => 158,
                'value' => 'o1',
                'text' => 'D-1',
                'created_at' => '2025-09-15 15:31:04',
                'updated_at' => '2025-09-15 15:31:04',
            ),
            133 => 
            array (
                'id' => 462,
                'question_id' => 158,
                'value' => 'o2',
                'text' => 'D-2',
                'created_at' => '2025-09-15 15:31:04',
                'updated_at' => '2025-09-15 15:31:04',
            ),
            134 => 
            array (
                'id' => 463,
                'question_id' => 158,
                'value' => 'o3',
                'text' => 'D-3',
                'created_at' => '2025-09-15 15:31:04',
                'updated_at' => '2025-09-15 15:31:04',
            ),
            135 => 
            array (
                'id' => 464,
                'question_id' => 158,
                'value' => 'o4',
                'text' => 'D-4/Sarjana Terapan',
                'created_at' => '2025-09-15 15:31:04',
                'updated_at' => '2025-09-15 15:31:04',
            ),
            136 => 
            array (
                'id' => 465,
                'question_id' => 158,
                'value' => 'o5',
                'text' => 'S-1',
                'created_at' => '2025-09-15 15:31:04',
                'updated_at' => '2025-09-15 15:31:04',
            ),
            137 => 
            array (
                'id' => 466,
                'question_id' => 161,
                'value' => 'o1',
                'text' => 'Sangat tidak selaras',
                'created_at' => '2025-09-15 15:37:50',
                'updated_at' => '2025-09-15 15:37:50',
            ),
            138 => 
            array (
                'id' => 467,
                'question_id' => 161,
                'value' => 'o2',
                'text' => 'Tidak selaras',
                'created_at' => '2025-09-15 15:37:50',
                'updated_at' => '2025-09-15 15:37:50',
            ),
            139 => 
            array (
                'id' => 468,
                'question_id' => 161,
                'value' => 'o3',
                'text' => 'Selaras',
                'created_at' => '2025-09-15 15:37:50',
                'updated_at' => '2025-09-15 15:37:50',
            ),
            140 => 
            array (
                'id' => 469,
                'question_id' => 161,
                'value' => 'o4',
                'text' => 'Sangat Selaras',
                'created_at' => '2025-09-15 15:37:50',
                'updated_at' => '2025-09-15 15:37:50',
            ),
            141 => 
            array (
                'id' => 470,
                'question_id' => 163,
                'value' => 'o1',
                'text' => 'Melanjutkan pekerjaan yang sudah dijalani sebelum kuliah',
                'created_at' => '2025-09-15 15:39:12',
                'updated_at' => '2025-09-15 15:39:12',
            ),
            142 => 
            array (
                'id' => 471,
                'question_id' => 163,
                'value' => 'o2',
                'text' => 'Ditugaskan oleh lembaga/instansi tempat bekerja',
                'created_at' => '2025-09-15 15:39:12',
                'updated_at' => '2025-09-15 15:39:12',
            ),
            143 => 
            array (
                'id' => 472,
                'question_id' => 163,
                'value' => 'o3',
                'text' => 'Mencari uang untuk biaya kuliah/hidup',
                'created_at' => '2025-09-15 15:39:12',
                'updated_at' => '2025-09-15 15:39:12',
            ),
            144 => 
            array (
                'id' => 473,
                'question_id' => 163,
                'value' => 'o4',
                'text' => 'Mencari tambahan uang jajan',
                'created_at' => '2025-09-15 15:39:12',
                'updated_at' => '2025-09-15 15:39:12',
            ),
            145 => 
            array (
                'id' => 474,
                'question_id' => 163,
                'value' => 'o5',
                'text' => 'Menjalankan minat/hobi',
                'created_at' => '2025-09-15 15:39:12',
                'updated_at' => '2025-09-15 15:39:12',
            ),
            146 => 
            array (
                'id' => 475,
                'question_id' => 163,
                'value' => 'o6',
                'text' => 'Meringankan beban orang tua',
                'created_at' => '2025-09-15 15:39:12',
                'updated_at' => '2025-09-15 15:39:12',
            ),
            147 => 
            array (
                'id' => 476,
                'question_id' => 163,
                'value' => 'o7',
                'text' => 'Lainnya',
                'created_at' => '2025-09-15 15:39:12',
                'updated_at' => '2025-09-15 15:39:12',
            ),
            148 => 
            array (
                'id' => 477,
                'question_id' => 166,
                'value' => 'o1',
                'text' => 'Ya',
                'created_at' => '2025-09-15 16:27:45',
                'updated_at' => '2025-09-15 16:27:45',
            ),
            149 => 
            array (
                'id' => 478,
                'question_id' => 166,
                'value' => 'o2',
                'text' => 'Tidak',
                'created_at' => '2025-09-15 16:27:45',
                'updated_at' => '2025-09-15 16:27:45',
            ),
            150 => 
            array (
                'id' => 481,
                'question_id' => 168,
                'value' => 'o1',
                'text' => 'Dalam Negeri',
                'created_at' => '2025-09-15 16:29:48',
                'updated_at' => '2025-09-15 16:29:48',
            ),
            151 => 
            array (
                'id' => 482,
                'question_id' => 168,
                'value' => 'o2',
                'text' => 'Luar Negeri',
                'created_at' => '2025-09-15 16:29:48',
                'updated_at' => '2025-09-15 16:29:48',
            ),
            152 => 
            array (
                'id' => 485,
                'question_id' => 174,
                'value' => 'o1',
                'text' => 'Kurang dari Rp. 5.000.000',
                'created_at' => '2025-09-15 16:33:35',
                'updated_at' => '2025-09-15 16:33:35',
            ),
            153 => 
            array (
                'id' => 486,
                'question_id' => 174,
                'value' => 'o2',
                'text' => 'Rp. 5.000.000, s.d Rp. 10.000.000',
                'created_at' => '2025-09-15 16:33:35',
                'updated_at' => '2025-09-15 16:33:35',
            ),
            154 => 
            array (
                'id' => 487,
                'question_id' => 174,
                'value' => 'o3',
                'text' => 'Rp. 11.000.000, s.d Rp. 15.000.000',
                'created_at' => '2025-09-15 16:33:35',
                'updated_at' => '2025-09-15 16:33:35',
            ),
            155 => 
            array (
                'id' => 488,
                'question_id' => 174,
                'value' => 'o4',
                'text' => 'Lebih dari Rp. 15.000.000',
                'created_at' => '2025-09-15 16:33:35',
                'updated_at' => '2025-09-15 16:33:35',
            ),
            156 => 
            array (
                'id' => 511,
                'question_id' => 177,
                'value' => 'o1',
                'text' => 'Sangat tidak selaras',
                'created_at' => '2025-09-15 16:36:47',
                'updated_at' => '2025-09-15 16:36:47',
            ),
            157 => 
            array (
                'id' => 512,
                'question_id' => 177,
                'value' => 'o2',
                'text' => 'Tidak selaras',
                'created_at' => '2025-09-15 16:36:47',
                'updated_at' => '2025-09-15 16:36:47',
            ),
            158 => 
            array (
                'id' => 513,
                'question_id' => 177,
                'value' => 'o3',
                'text' => 'Selaras',
                'created_at' => '2025-09-15 16:36:47',
                'updated_at' => '2025-09-15 16:36:47',
            ),
            159 => 
            array (
                'id' => 514,
                'question_id' => 177,
                'value' => 'o4',
                'text' => 'Sangat selaras',
                'created_at' => '2025-09-15 16:36:47',
                'updated_at' => '2025-09-15 16:36:47',
            ),
            160 => 
            array (
                'id' => 515,
                'question_id' => 175,
                'value' => 'o1',
                'text' => 'Melalui industri yang menjadi mitra SMK',
                'created_at' => '2025-09-15 16:37:47',
                'updated_at' => '2025-09-15 16:37:47',
            ),
            161 => 
            array (
                'id' => 516,
                'question_id' => 175,
                'value' => 'o2',
                'text' => 'Melalui layanan pusat karir/bursa kerja di SMK',
                'created_at' => '2025-09-15 16:37:47',
                'updated_at' => '2025-09-15 16:37:47',
            ),
            162 => 
            array (
                'id' => 517,
                'question_id' => 175,
                'value' => 'o3',
            'text' => 'Melalui tempat magang (Prakerin/PKL) selama di SMK',
                'created_at' => '2025-09-15 16:37:47',
                'updated_at' => '2025-09-15 16:37:47',
            ),
            163 => 
            array (
                'id' => 518,
                'question_id' => 175,
                'value' => 'o4',
                'text' => 'Melalui ikatan alumni',
                'created_at' => '2025-09-15 16:37:47',
                'updated_at' => '2025-09-15 16:37:47',
            ),
            164 => 
            array (
                'id' => 519,
                'question_id' => 175,
                'value' => 'o5',
                'text' => 'Melalui iklan di media cetak/online',
                'created_at' => '2025-09-15 16:37:47',
                'updated_at' => '2025-09-15 16:37:47',
            ),
            165 => 
            array (
                'id' => 520,
                'question_id' => 175,
                'value' => 'o6',
                'text' => 'Melalui bursa kerja/pameran kerja/job fair',
                'created_at' => '2025-09-15 16:37:47',
                'updated_at' => '2025-09-15 16:37:47',
            ),
            166 => 
            array (
                'id' => 521,
                'question_id' => 175,
                'value' => 'o7',
                'text' => 'Melalui dinas ketenagakerjaan setempat',
                'created_at' => '2025-09-15 16:37:47',
                'updated_at' => '2025-09-15 16:37:47',
            ),
            167 => 
            array (
                'id' => 522,
                'question_id' => 175,
                'value' => 'o8',
                'text' => 'Melalui bantuan orang tua/famili/teman',
                'created_at' => '2025-09-15 16:37:47',
                'updated_at' => '2025-09-15 16:37:47',
            ),
            168 => 
            array (
                'id' => 523,
                'question_id' => 175,
                'value' => 'o9',
                'text' => 'Lainnya',
                'created_at' => '2025-09-15 16:37:47',
                'updated_at' => '2025-09-15 16:37:47',
            ),
            169 => 
            array (
                'id' => 530,
                'question_id' => 178,
                'value' => 'o1',
                'text' => 'Dalam Negeri',
                'created_at' => '2025-09-15 16:48:43',
                'updated_at' => '2025-09-15 16:48:43',
            ),
            170 => 
            array (
                'id' => 531,
                'question_id' => 178,
                'value' => 'o2',
                'text' => 'Luar Negeri',
                'created_at' => '2025-09-15 16:48:43',
                'updated_at' => '2025-09-15 16:48:43',
            ),
            171 => 
            array (
                'id' => 534,
                'question_id' => 182,
                'value' => 'o1',
                'text' => 'Usaha perseorangan',
                'created_at' => '2025-09-15 17:00:41',
                'updated_at' => '2025-09-15 17:00:41',
            ),
            172 => 
            array (
                'id' => 535,
                'question_id' => 182,
                'value' => 'o2',
                'text' => 'Koperasi',
                'created_at' => '2025-09-15 17:00:41',
                'updated_at' => '2025-09-15 17:00:41',
            ),
            173 => 
            array (
                'id' => 536,
                'question_id' => 182,
                'value' => 'o3',
                'text' => 'Firma',
                'created_at' => '2025-09-15 17:00:41',
                'updated_at' => '2025-09-15 17:00:41',
            ),
            174 => 
            array (
                'id' => 537,
                'question_id' => 182,
                'value' => 'o4',
                'text' => 'CV',
                'created_at' => '2025-09-15 17:00:41',
                'updated_at' => '2025-09-15 17:00:41',
            ),
            175 => 
            array (
                'id' => 538,
                'question_id' => 182,
                'value' => 'o5',
                'text' => 'PT',
                'created_at' => '2025-09-15 17:00:41',
                'updated_at' => '2025-09-15 17:00:41',
            ),
            176 => 
            array (
                'id' => 539,
                'question_id' => 182,
                'value' => 'o6',
                'text' => 'Lainnya',
                'created_at' => '2025-09-15 17:00:41',
                'updated_at' => '2025-09-15 17:00:41',
            ),
            177 => 
            array (
                'id' => 552,
                'question_id' => 184,
                'value' => 'o1',
                'text' => 'Barang',
                'created_at' => '2025-09-15 17:01:50',
                'updated_at' => '2025-09-15 17:01:50',
            ),
            178 => 
            array (
                'id' => 553,
                'question_id' => 184,
                'value' => 'o2',
                'text' => 'Jasa',
                'created_at' => '2025-09-15 17:01:50',
                'updated_at' => '2025-09-15 17:01:50',
            ),
            179 => 
            array (
                'id' => 554,
                'question_id' => 184,
                'value' => 'o3',
                'text' => 'Barang dan Jasa',
                'created_at' => '2025-09-15 17:01:50',
                'updated_at' => '2025-09-15 17:01:50',
            ),
            180 => 
            array (
                'id' => 558,
                'question_id' => 185,
                'value' => 'o1',
                'text' => 'Milik Sendiri',
                'created_at' => '2025-09-15 17:02:09',
                'updated_at' => '2025-09-15 17:02:09',
            ),
            181 => 
            array (
                'id' => 559,
                'question_id' => 185,
                'value' => 'o2',
                'text' => 'Milik bersama',
                'created_at' => '2025-09-15 17:02:09',
                'updated_at' => '2025-09-15 17:02:09',
            ),
            182 => 
            array (
                'id' => 564,
                'question_id' => 188,
                'value' => 'o1',
                'text' => 'Kurang dari Rp. 5.000.000',
                'created_at' => '2025-09-15 17:03:15',
                'updated_at' => '2025-09-15 17:03:15',
            ),
            183 => 
            array (
                'id' => 565,
                'question_id' => 188,
                'value' => 'o2',
                'text' => 'Rp. 5.000.000, s.d Rp. 10.000.000',
                'created_at' => '2025-09-15 17:03:15',
                'updated_at' => '2025-09-15 17:03:15',
            ),
            184 => 
            array (
                'id' => 566,
                'question_id' => 188,
                'value' => 'o3',
                'text' => 'Rp. 11.000.000, s.d Rp. 15.000.000',
                'created_at' => '2025-09-15 17:03:15',
                'updated_at' => '2025-09-15 17:03:15',
            ),
            185 => 
            array (
                'id' => 567,
                'question_id' => 188,
                'value' => 'o4',
                'text' => 'Lebih dari Rp. 15.000.000',
                'created_at' => '2025-09-15 17:03:15',
                'updated_at' => '2025-09-15 17:03:15',
            ),
            186 => 
            array (
                'id' => 572,
                'question_id' => 189,
                'value' => 'o1',
                'text' => 'Kurang dari Rp. 25.000.000',
                'created_at' => '2025-09-15 17:03:56',
                'updated_at' => '2025-09-15 17:03:56',
            ),
            187 => 
            array (
                'id' => 573,
                'question_id' => 189,
                'value' => 'o2',
                'text' => 'Rp. 25.000.000, s.d Rp. 50.000.000',
                'created_at' => '2025-09-15 17:03:56',
                'updated_at' => '2025-09-15 17:03:56',
            ),
            188 => 
            array (
                'id' => 574,
                'question_id' => 189,
                'value' => 'o3',
                'text' => 'Rp. 51.000.000, s.d Rp. 100.000.000',
                'created_at' => '2025-09-15 17:03:56',
                'updated_at' => '2025-09-15 17:03:56',
            ),
            189 => 
            array (
                'id' => 575,
                'question_id' => 189,
                'value' => 'o4',
                'text' => 'Lebih dari Rp. 100.000.000',
                'created_at' => '2025-09-15 17:03:56',
                'updated_at' => '2025-09-15 17:03:56',
            ),
            190 => 
            array (
                'id' => 580,
                'question_id' => 190,
                'value' => 'o1',
                'text' => 'Belum pernah',
                'created_at' => '2025-09-15 17:04:25',
                'updated_at' => '2025-09-15 17:04:25',
            ),
            191 => 
            array (
                'id' => 581,
                'question_id' => 190,
                'value' => 'o2',
                'text' => 'Satu kali',
                'created_at' => '2025-09-15 17:04:25',
                'updated_at' => '2025-09-15 17:04:25',
            ),
            192 => 
            array (
                'id' => 582,
                'question_id' => 190,
                'value' => 'o3',
                'text' => 'Dua kali',
                'created_at' => '2025-09-15 17:04:25',
                'updated_at' => '2025-09-15 17:04:25',
            ),
            193 => 
            array (
                'id' => 583,
                'question_id' => 190,
                'value' => 'o4',
                'text' => 'Tiga kali atau lebih',
                'created_at' => '2025-09-15 17:04:25',
                'updated_at' => '2025-09-15 17:04:25',
            ),
            194 => 
            array (
                'id' => 588,
                'question_id' => 191,
                'value' => 'o1',
                'text' => 'Belum memenuhi kebutuhan untuk menjadi seorang wirausahawan',
                'created_at' => '2025-09-15 17:05:40',
                'updated_at' => '2025-09-15 17:05:40',
            ),
            195 => 
            array (
                'id' => 589,
                'question_id' => 191,
                'value' => 'o2',
                'text' => 'Mendekati kebutuhan untuk menjadi seorang wirausahawan',
                'created_at' => '2025-09-15 17:05:40',
                'updated_at' => '2025-09-15 17:05:40',
            ),
            196 => 
            array (
                'id' => 590,
                'question_id' => 191,
                'value' => 'o3',
                'text' => 'Memenuhi kebutuhan untuk menjadi seorang wirausahawan',
                'created_at' => '2025-09-15 17:05:40',
                'updated_at' => '2025-09-15 17:05:40',
            ),
            197 => 
            array (
                'id' => 591,
                'question_id' => 191,
                'value' => 'o4',
                'text' => 'Melampaui kebutuhan untuk menjadi seorang wirausahawan',
                'created_at' => '2025-09-15 17:05:40',
                'updated_at' => '2025-09-15 17:05:40',
            ),
            198 => 
            array (
                'id' => 596,
                'question_id' => 192,
                'value' => 'o1',
                'text' => 'Belum memenuhi kebutuhan untuk menjadi seorang wirausahawan',
                'created_at' => '2025-09-15 17:06:02',
                'updated_at' => '2025-09-15 17:06:02',
            ),
            199 => 
            array (
                'id' => 597,
                'question_id' => 192,
                'value' => 'o2',
                'text' => 'Mendekati kebutuhan untuk menjadi seorang wirausahawan',
                'created_at' => '2025-09-15 17:06:02',
                'updated_at' => '2025-09-15 17:06:02',
            ),
            200 => 
            array (
                'id' => 598,
                'question_id' => 192,
                'value' => 'o3',
                'text' => 'Memenuhi kebutuhan untuk menjadi seorang wirausahawan',
                'created_at' => '2025-09-15 17:06:02',
                'updated_at' => '2025-09-15 17:06:02',
            ),
            201 => 
            array (
                'id' => 599,
                'question_id' => 192,
                'value' => 'o4',
                'text' => 'Melampaui kebutuhan untuk menjadi seorang wirausahawan',
                'created_at' => '2025-09-15 17:06:02',
                'updated_at' => '2025-09-15 17:06:02',
            ),
            202 => 
            array (
                'id' => 604,
                'question_id' => 193,
                'value' => 'o1',
                'text' => 'Belum memenuhi kebutuhan untuk menjadi seorang wirausahawan',
                'created_at' => '2025-09-15 17:06:11',
                'updated_at' => '2025-09-15 17:06:11',
            ),
            203 => 
            array (
                'id' => 605,
                'question_id' => 193,
                'value' => 'o2',
                'text' => 'Mendekati kebutuhan untuk menjadi seorang wirausahawan',
                'created_at' => '2025-09-15 17:06:11',
                'updated_at' => '2025-09-15 17:06:11',
            ),
            204 => 
            array (
                'id' => 606,
                'question_id' => 193,
                'value' => 'o3',
                'text' => 'Memenuhi kebutuhan untuk menjadi seorang wirausahawan',
                'created_at' => '2025-09-15 17:06:11',
                'updated_at' => '2025-09-15 17:06:11',
            ),
            205 => 
            array (
                'id' => 607,
                'question_id' => 193,
                'value' => 'o4',
                'text' => 'Melampaui kebutuhan untuk menjadi seorang wirausahawan',
                'created_at' => '2025-09-15 17:06:11',
                'updated_at' => '2025-09-15 17:06:11',
            ),
            206 => 
            array (
                'id' => 612,
                'question_id' => 194,
                'value' => 'o1',
                'text' => 'Belum memenuhi kebutuhan untuk menjadi seorang wirausahawan',
                'created_at' => '2025-09-15 17:06:19',
                'updated_at' => '2025-09-15 17:06:19',
            ),
            207 => 
            array (
                'id' => 613,
                'question_id' => 194,
                'value' => 'o2',
                'text' => 'Mendekati kebutuhan untuk menjadi seorang wirausahawan',
                'created_at' => '2025-09-15 17:06:19',
                'updated_at' => '2025-09-15 17:06:19',
            ),
            208 => 
            array (
                'id' => 614,
                'question_id' => 194,
                'value' => 'o3',
                'text' => 'Memenuhi kebutuhan untuk menjadi seorang wirausahawan',
                'created_at' => '2025-09-15 17:06:19',
                'updated_at' => '2025-09-15 17:06:19',
            ),
            209 => 
            array (
                'id' => 615,
                'question_id' => 194,
                'value' => 'o4',
                'text' => 'Melampaui kebutuhan untuk menjadi seorang wirausahawan',
                'created_at' => '2025-09-15 17:06:19',
                'updated_at' => '2025-09-15 17:06:19',
            ),
            210 => 
            array (
                'id' => 620,
                'question_id' => 195,
                'value' => 'o1',
                'text' => 'Belum memenuhi kebutuhan untuk menjadi seorang wirausahawan',
                'created_at' => '2025-09-15 17:06:29',
                'updated_at' => '2025-09-15 17:06:29',
            ),
            211 => 
            array (
                'id' => 621,
                'question_id' => 195,
                'value' => 'o2',
                'text' => 'Mendekati kebutuhan untuk menjadi seorang wirausahawan',
                'created_at' => '2025-09-15 17:06:29',
                'updated_at' => '2025-09-15 17:06:29',
            ),
            212 => 
            array (
                'id' => 622,
                'question_id' => 195,
                'value' => 'o3',
                'text' => 'Memenuhi kebutuhan untuk menjadi seorang wirausahawan',
                'created_at' => '2025-09-15 17:06:29',
                'updated_at' => '2025-09-15 17:06:29',
            ),
            213 => 
            array (
                'id' => 623,
                'question_id' => 195,
                'value' => 'o4',
                'text' => 'Melampaui kebutuhan untuk menjadi seorang wirausahawan',
                'created_at' => '2025-09-15 17:06:29',
                'updated_at' => '2025-09-15 17:06:29',
            ),
            214 => 
            array (
                'id' => 628,
                'question_id' => 196,
                'value' => 'o1',
                'text' => 'Sangat Tidak Selaras',
                'created_at' => '2025-09-15 17:06:59',
                'updated_at' => '2025-09-15 17:06:59',
            ),
            215 => 
            array (
                'id' => 629,
                'question_id' => 196,
                'value' => 'o2',
                'text' => 'Tidak Selaras',
                'created_at' => '2025-09-15 17:06:59',
                'updated_at' => '2025-09-15 17:06:59',
            ),
            216 => 
            array (
                'id' => 630,
                'question_id' => 196,
                'value' => 'o3',
                'text' => 'Selaras',
                'created_at' => '2025-09-15 17:06:59',
                'updated_at' => '2025-09-15 17:06:59',
            ),
            217 => 
            array (
                'id' => 631,
                'question_id' => 196,
                'value' => 'o4',
                'text' => 'Sangat Selaras',
                'created_at' => '2025-09-15 17:06:59',
                'updated_at' => '2025-09-15 17:06:59',
            ),
            218 => 
            array (
                'id' => 632,
                'question_id' => 197,
                'value' => 'o1',
                'text' => 'Mengurus rumah tangga',
                'created_at' => '2025-09-15 17:09:25',
                'updated_at' => '2025-09-15 17:09:25',
            ),
            219 => 
            array (
                'id' => 633,
                'question_id' => 197,
                'value' => 'o2',
                'text' => 'Mengikuti pelatihan/kursus keterampilan',
                'created_at' => '2025-09-15 17:09:25',
                'updated_at' => '2025-09-15 17:09:25',
            ),
            220 => 
            array (
                'id' => 634,
                'question_id' => 197,
                'value' => 'o3',
                'text' => 'Mempersiapkan diri untuk melanjutkan studi',
                'created_at' => '2025-09-15 17:09:25',
                'updated_at' => '2025-09-15 17:09:25',
            ),
            221 => 
            array (
                'id' => 635,
                'question_id' => 197,
                'value' => 'o4',
            'text' => 'Terlibat dalam organisasi sosial/kemasyarakatan (pengurus RT/RW/Dawis, tempat ibadah, atau organisasi/kegiatan sosial lainnya)',
                'created_at' => '2025-09-15 17:09:25',
                'updated_at' => '2025-09-15 17:09:25',
            ),
            222 => 
            array (
                'id' => 636,
                'question_id' => 197,
                'value' => 'o5',
                'text' => 'Tidak termasuk semua pilihan di atas',
                'created_at' => '2025-09-15 17:09:25',
                'updated_at' => '2025-09-15 17:09:25',
            ),
            223 => 
            array (
                'id' => 642,
                'question_id' => 198,
                'value' => 'o1',
                'text' => 'Mempersiapkan/mengirimkan lamaran pekerjaan',
                'created_at' => '2025-09-15 17:10:12',
                'updated_at' => '2025-09-15 17:10:12',
            ),
            224 => 
            array (
                'id' => 643,
                'question_id' => 198,
                'value' => 'o2',
                'text' => 'Mengikuti rangkaian seleksi untuk mendapatkan pekerjaan',
                'created_at' => '2025-09-15 17:10:12',
                'updated_at' => '2025-09-15 17:10:12',
            ),
            225 => 
            array (
                'id' => 644,
                'question_id' => 198,
                'value' => 'o3',
                'text' => 'Menunggu hasil lamaran pekerjaan',
                'created_at' => '2025-09-15 17:10:12',
                'updated_at' => '2025-09-15 17:10:12',
            ),
            226 => 
            array (
                'id' => 645,
                'question_id' => 198,
                'value' => 'o4',
                'text' => 'Mengumpulkan modal/perlengkapan/alat untuk kegiatan usaha/wirausaha',
                'created_at' => '2025-09-15 17:10:12',
                'updated_at' => '2025-09-15 17:10:12',
            ),
            227 => 
            array (
                'id' => 646,
                'question_id' => 198,
                'value' => 'o5',
                'text' => 'Mencari lokasi untuk kegiatan usaha/wirausaha',
                'created_at' => '2025-09-15 17:10:12',
                'updated_at' => '2025-09-15 17:10:12',
            ),
            228 => 
            array (
                'id' => 647,
                'question_id' => 198,
                'value' => 'o6',
                'text' => 'Mengurus izin usaha/wirausaha',
                'created_at' => '2025-09-15 17:10:12',
                'updated_at' => '2025-09-15 17:10:12',
            ),
            229 => 
            array (
                'id' => 648,
                'question_id' => 198,
                'value' => 'o7',
            'text' => 'Tidak melakukan semua kegiatan di atas (tidak mencari kerja/menyiapkan usaha/wirausaha)',
                'created_at' => '2025-09-15 17:10:12',
                'updated_at' => '2025-09-15 17:10:12',
            ),
            230 => 
            array (
                'id' => 649,
                'question_id' => 199,
                'value' => 'o1',
                'text' => 'Sudah diterima bekerja/sudah mempunyai usaha, tetapi saat ini belum mulai bekerja/belum memulai usaha',
                'created_at' => '2025-09-15 17:12:03',
                'updated_at' => '2025-09-15 17:12:03',
            ),
            231 => 
            array (
                'id' => 650,
                'question_id' => 199,
                'value' => 'o2',
                'text' => 'Tidak berani mencoba karena merasa tidak mungkin mendapatkan pekerjaan/memulai usaha',
                'created_at' => '2025-09-15 17:12:03',
                'updated_at' => '2025-09-15 17:12:03',
            ),
            232 => 
            array (
                'id' => 651,
                'question_id' => 199,
                'value' => 'o3',
                'text' => 'Sudah mencoba berulang kali tapi belum berhasil',
                'created_at' => '2025-09-15 17:12:03',
                'updated_at' => '2025-09-15 17:12:03',
            ),
            233 => 
            array (
                'id' => 652,
                'question_id' => 199,
                'value' => 'o4',
                'text' => 'Mengalami cacat fisik',
                'created_at' => '2025-09-15 17:12:03',
                'updated_at' => '2025-09-15 17:12:03',
            ),
            234 => 
            array (
                'id' => 653,
                'question_id' => 199,
                'value' => 'o5',
                'text' => 'Tidak termasuk semua pilihan di atas',
                'created_at' => '2025-09-15 17:12:03',
                'updated_at' => '2025-09-15 17:12:03',
            ),
            235 => 
            array (
                'id' => 659,
                'question_id' => 202,
                'value' => 'o1',
                'text' => 'Pekerjaan sebelumnya kurang sesuai dengan bidang keahlian di SMK',
                'created_at' => '2025-09-15 17:14:52',
                'updated_at' => '2025-09-15 17:14:52',
            ),
            236 => 
            array (
                'id' => 660,
                'question_id' => 202,
                'value' => 'o2',
                'text' => 'Setelah tamat sekolah tidak melanjutkan ke Perguruan Tinggi',
                'created_at' => '2025-09-15 17:14:52',
                'updated_at' => '2025-09-15 17:14:52',
            ),
            237 => 
            array (
                'id' => 661,
                'question_id' => 202,
                'value' => 'o3',
                'text' => 'Upah pekerjaan sebelumnya kurang layak',
                'created_at' => '2025-09-15 17:14:52',
                'updated_at' => '2025-09-15 17:14:52',
            ),
            238 => 
            array (
                'id' => 662,
                'question_id' => 202,
                'value' => 'o4',
            'text' => 'Putus hubungan kerja (PHK)',
                'created_at' => '2025-09-15 17:14:52',
                'updated_at' => '2025-09-15 17:14:52',
            ),
            239 => 
            array (
                'id' => 663,
                'question_id' => 202,
                'value' => 'o5',
            'text' => 'Usaha bangkrut (gulung tikar)',
                'created_at' => '2025-09-15 17:14:52',
                'updated_at' => '2025-09-15 17:14:52',
            ),
            240 => 
            array (
                'id' => 664,
                'question_id' => 202,
                'value' => 'o6',
                'text' => 'Masa kontrak kerja habis',
                'created_at' => '2025-09-15 17:14:52',
                'updated_at' => '2025-09-15 17:14:52',
            ),
            241 => 
            array (
                'id' => 665,
                'question_id' => 202,
                'value' => 'o7',
                'text' => 'Lainnya',
                'created_at' => '2025-09-15 17:14:52',
                'updated_at' => '2025-09-15 17:14:52',
            ),
            242 => 
            array (
                'id' => 680,
                'question_id' => 203,
                'value' => 'o1',
                'text' => 'Pekerjaan sebelumnya kurang sesuai dengan bidang keahlian di SMK',
                'created_at' => '2025-09-15 17:15:08',
                'updated_at' => '2025-09-15 17:15:08',
            ),
            243 => 
            array (
                'id' => 681,
                'question_id' => 203,
                'value' => 'o2',
                'text' => 'Setelah tamat sekolah tidak melanjutkan ke Perguruan Tinggi',
                'created_at' => '2025-09-15 17:15:08',
                'updated_at' => '2025-09-15 17:15:08',
            ),
            244 => 
            array (
                'id' => 682,
                'question_id' => 203,
                'value' => 'o3',
                'text' => 'Upah pekerjaan sebelumnya kurang layak',
                'created_at' => '2025-09-15 17:15:08',
                'updated_at' => '2025-09-15 17:15:08',
            ),
            245 => 
            array (
                'id' => 683,
                'question_id' => 203,
                'value' => 'o4',
            'text' => 'Putus hubungan kerja (PHK)',
                'created_at' => '2025-09-15 17:15:08',
                'updated_at' => '2025-09-15 17:15:08',
            ),
            246 => 
            array (
                'id' => 684,
                'question_id' => 203,
                'value' => 'o5',
            'text' => 'Usaha bangkrut (gulung tikar)',
                'created_at' => '2025-09-15 17:15:08',
                'updated_at' => '2025-09-15 17:15:08',
            ),
            247 => 
            array (
                'id' => 685,
                'question_id' => 203,
                'value' => 'o6',
                'text' => 'Masa kontrak kerja habis',
                'created_at' => '2025-09-15 17:15:08',
                'updated_at' => '2025-09-15 17:15:08',
            ),
            248 => 
            array (
                'id' => 686,
                'question_id' => 203,
                'value' => 'o7',
                'text' => 'Lainnya',
                'created_at' => '2025-09-15 17:15:08',
                'updated_at' => '2025-09-15 17:15:08',
            ),
            249 => 
            array (
                'id' => 687,
                'question_id' => 3,
                'value' => 'o1',
                'text' => 'Berwirausaha sendiri tanpa dibantu orang lain',
                'created_at' => '2025-09-15 17:20:43',
                'updated_at' => '2025-09-15 17:20:43',
            ),
            250 => 
            array (
                'id' => 688,
                'question_id' => 3,
                'value' => 'o2',
                'text' => 'Berwirausaha dengan dibantu buruh/pekerja tak dibayar',
                'created_at' => '2025-09-15 17:20:43',
                'updated_at' => '2025-09-15 17:20:43',
            ),
            251 => 
            array (
                'id' => 689,
                'question_id' => 3,
                'value' => 'o3',
                'text' => 'Berwirausaha dengan dibantu buruh/pekerja dibayar',
                'created_at' => '2025-09-15 17:20:43',
                'updated_at' => '2025-09-15 17:20:43',
            ),
            252 => 
            array (
                'id' => 690,
                'question_id' => 3,
                'value' => 'o4',
                'text' => 'Membantu menjalankan usaha/wirausaha keluarga',
                'created_at' => '2025-09-15 17:20:43',
                'updated_at' => '2025-09-15 17:20:43',
            ),
            253 => 
            array (
                'id' => 691,
                'question_id' => 3,
                'value' => 'o5',
                'text' => 'Buruh/karyawan/pegawai',
                'created_at' => '2025-09-15 17:20:43',
                'updated_at' => '2025-09-15 17:20:43',
            ),
            254 => 
            array (
                'id' => 692,
                'question_id' => 3,
                'value' => 'o6',
            'text' => 'Pekerja bebas (freelance / tidak punya majikan tetap)',
                'created_at' => '2025-09-15 17:20:43',
                'updated_at' => '2025-09-15 17:20:43',
            ),
        ));
        
        
    }
}