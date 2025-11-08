<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('questions')->delete();
        
        \DB::table('questions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'stage_id' => 1,
                'text' => 'Apakah Anda sedang melanjutkan studi di perguruan tinggi?',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-01 10:34:17',
                'updated_at' => '2025-09-01 10:34:17',
            ),
            1 => 
            array (
                'id' => 2,
                'stage_id' => 1,
                'text' => 'Dalam seminggu terakhir, apakah Anda sedang bekerja atau berwirausaha?',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-01 10:37:05',
                'updated_at' => '2025-09-01 10:37:05',
            ),
            2 => 
            array (
                'id' => 3,
                'stage_id' => 1,
                'text' => 'Apa bentuk pekerjaan/kegiatan yang Anda lakukan?',
                'type' => 'radio',
                'parent_question_id' => '2',
                'parent_answer_value' => 'Ya',
                'created_at' => '2025-09-01 10:46:27',
                'updated_at' => '2025-09-01 10:46:27',
            ),
            3 => 
            array (
                'id' => 4,
                'stage_id' => 1,
                'text' => 'Dalam seminggu terakhir, apakah Anda melakukan kegiatan ?1 jam untuk memperoleh penghasilan?',
                'type' => 'radio',
                'parent_question_id' => '2',
                'parent_answer_value' => 'Tidak',
                'created_at' => '2025-09-01 10:56:51',
                'updated_at' => '2025-09-01 10:56:51',
            ),
            4 => 
            array (
                'id' => 5,
                'stage_id' => 1,
                'text' => 'Apa bentuk pekerjaan/kegiatan yang Anda lakukan?',
                'type' => 'radio',
                'parent_question_id' => '4',
                'parent_answer_value' => 'Ya',
                'created_at' => '2025-09-01 11:12:11',
                'updated_at' => '2025-09-01 11:12:11',
            ),
            5 => 
            array (
                'id' => 6,
                'stage_id' => 1,
            'text' => 'Apakah Anda membantu kegiatan usaha atau bisnis keluarga/orang lain (dibayar atau tidak)?',
                'type' => 'radio',
                'parent_question_id' => '4',
                'parent_answer_value' => 'Tidak',
                'created_at' => '2025-09-01 11:23:23',
                'updated_at' => '2025-09-01 11:23:23',
            ),
            6 => 
            array (
                'id' => 7,
                'stage_id' => 1,
                'text' => 'Apa bentuk pekerjaan/kegiatan yang Anda lakukan?',
                'type' => 'radio',
                'parent_question_id' => '6',
                'parent_answer_value' => 'Ya',
                'created_at' => '2025-09-01 11:24:10',
                'updated_at' => '2025-09-01 11:24:10',
            ),
            7 => 
            array (
                'id' => 13,
                'stage_id' => 1,
            'text' => 'Dalam seminggu terakhir, manakah kegiatan berikut yang Anda lakukan? (boleh pilih lebih dari satu)',
                'type' => 'checkbox',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-10 08:59:04',
                'updated_at' => '2025-09-10 09:08:54',
            ),
            8 => 
            array (
                'id' => 14,
                'stage_id' => 1,
            'text' => 'Dalam seminggu terakhir, manakah kegiatan berikut yang Anda lakukan? (boleh pilih lebih dari satu)',
                'type' => 'checkbox',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-10 09:11:31',
                'updated_at' => '2025-09-10 09:11:31',
            ),
            9 => 
            array (
                'id' => 15,
                'stage_id' => 1,
                'text' => 'Apa alasan utama Anda tidak mencari pekerjaan/tidak menyiapkan usaha/wirausaha?',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-10 09:16:42',
                'updated_at' => '2025-09-10 09:16:42',
            ),
            10 => 
            array (
                'id' => 16,
                'stage_id' => 1,
            'text' => 'Sudah berapa lama Anda mencari pekerjaan atau mempersiapkan usaha/wirausaha hingga saat ini? (dalam bulan)',
                'type' => 'text',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-10 09:22:08',
                'updated_at' => '2025-09-10 09:22:08',
            ),
            11 => 
            array (
                'id' => 17,
                'stage_id' => 1,
                'text' => 'Apa alasan Anda mencari pekerjaan atau menyiapkan usaha/wirausaha?',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-10 09:24:51',
                'updated_at' => '2025-09-10 09:24:51',
            ),
            12 => 
            array (
                'id' => 18,
                'stage_id' => 1,
                'text' => 'Apa alasan Anda mencari pekerjaan atau menyiapkan usaha/wirausaha?',
                'type' => 'text',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-10 09:27:02',
                'updated_at' => '2025-09-10 09:27:02',
            ),
            13 => 
            array (
                'id' => 79,
                'stage_id' => 1,
                'text' => 'Dimana lokasi tempat Anda melanjutkan studi?',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-10 19:43:28',
                'updated_at' => '2025-09-10 19:43:28',
            ),
            14 => 
            array (
                'id' => 80,
                'stage_id' => 1,
                'text' => 'Masukan NIM Anda',
                'type' => 'nim',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-10 19:44:34',
                'updated_at' => '2025-09-10 19:44:34',
            ),
            15 => 
            array (
                'id' => 81,
                'stage_id' => 1,
                'text' => 'Negara',
                'type' => 'text',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-10 19:44:49',
                'updated_at' => '2025-09-10 19:44:49',
            ),
            16 => 
            array (
                'id' => 82,
                'stage_id' => 1,
                'text' => 'Jenjang pendidikan apa yang sedang ditempuh?',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-10 19:45:04',
                'updated_at' => '2025-09-10 19:45:47',
            ),
            17 => 
            array (
                'id' => 83,
                'stage_id' => 1,
                'text' => 'Nama Perguruan Tinggi?',
                'type' => 'perguruan_tinggi',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-10 19:45:52',
                'updated_at' => '2025-09-10 19:45:56',
            ),
            18 => 
            array (
                'id' => 84,
                'stage_id' => 1,
                'text' => 'Program studi/bidang keahlian?',
                'type' => 'prodi',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-10 19:45:59',
                'updated_at' => '2025-09-10 19:46:02',
            ),
            19 => 
            array (
                'id' => 85,
                'stage_id' => 1,
                'text' => 'Apakah program studi/bidang keahlian yang Anda tempuh saat ini selaras dengan program/kompetensi keahlian di SMK?',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-10 19:46:06',
                'updated_at' => '2025-09-10 19:46:39',
            ),
            20 => 
            array (
                'id' => 86,
                'stage_id' => 1,
                'text' => 'Kapan Anda mulai studi di Perguruan Tinggi?',
                'type' => 'date',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-10 19:46:42',
                'updated_at' => '2025-09-10 19:46:51',
            ),
            21 => 
            array (
                'id' => 88,
                'stage_id' => 1,
                'text' => 'Apa alasan Anda kuliah sambil berwirausaha?',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-10 19:46:56',
                'updated_at' => '2025-09-10 19:47:57',
            ),
            22 => 
            array (
                'id' => 89,
                'stage_id' => 1,
                'text' => 'Apa alasan Anda kuliah sambil berwirausaha?',
                'type' => 'text',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-10 19:48:17',
                'updated_at' => '2025-09-10 19:48:17',
            ),
            23 => 
            array (
                'id' => 108,
                'stage_id' => 1,
                'text' => 'Dimana lokasi tempat Anda melanjutkan studi?',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-10 20:02:20',
                'updated_at' => '2025-09-10 20:02:31',
            ),
            24 => 
            array (
                'id' => 109,
                'stage_id' => 1,
                'text' => 'Negara',
                'type' => 'text',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-10 20:02:40',
                'updated_at' => '2025-09-10 20:02:40',
            ),
            25 => 
            array (
                'id' => 110,
                'stage_id' => 1,
                'text' => 'Masukan NIM Anda',
                'type' => 'text',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-10 20:02:40',
                'updated_at' => '2025-09-10 20:02:40',
            ),
            26 => 
            array (
                'id' => 111,
                'stage_id' => 1,
                'text' => 'Jenjang pendidikan apa yang sedang ditempuh?',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-10 20:08:39',
                'updated_at' => '2025-09-10 20:08:48',
            ),
            27 => 
            array (
                'id' => 112,
                'stage_id' => 1,
                'text' => 'Nama Perguruan Tinggi?',
                'type' => 'text',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-10 20:08:57',
                'updated_at' => '2025-09-10 20:09:07',
            ),
            28 => 
            array (
                'id' => 113,
                'stage_id' => 1,
                'text' => 'Program studi/bidang keahlian?',
                'type' => 'prodi',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-10 20:09:17',
                'updated_at' => '2025-09-10 20:09:26',
            ),
            29 => 
            array (
                'id' => 114,
                'stage_id' => 1,
                'text' => 'Apakah program studi/bidang keahlian yang Anda tempuh saat ini selaras dengan program/kompetensi keahlian di SMK?',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-10 20:09:32',
                'updated_at' => '2025-09-10 20:09:44',
            ),
            30 => 
            array (
                'id' => 115,
                'stage_id' => 1,
                'text' => 'Kapan Anda mulai studi di Perguruan Tinggi?',
                'type' => 'date',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-10 20:09:53',
                'updated_at' => '2025-09-10 20:10:02',
            ),
            31 => 
            array (
                'id' => 116,
                'stage_id' => 1,
                'text' => 'Apa alasan Anda kuliah sambil berwirausaha?',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-10 20:10:07',
                'updated_at' => '2025-09-10 20:10:15',
            ),
            32 => 
            array (
                'id' => 117,
                'stage_id' => 1,
                'text' => 'Apa alasan Anda kuliah sambil berwirausaha?',
                'type' => 'text',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-10 20:10:21',
                'updated_at' => '2025-09-10 20:10:33',
            ),
            33 => 
            array (
                'id' => 118,
                'stage_id' => 1,
                'text' => 'Dimana lokasi tempat Anda melanjutkan studi?',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-10 20:02:20',
                'updated_at' => '2025-09-10 20:02:31',
            ),
            34 => 
            array (
                'id' => 119,
                'stage_id' => 1,
                'text' => 'Negara',
                'type' => 'text',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-10 20:02:40',
                'updated_at' => '2025-09-10 20:02:40',
            ),
            35 => 
            array (
                'id' => 120,
                'stage_id' => 1,
                'text' => 'Masukan NIM Anda',
                'type' => 'text',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-10 20:02:40',
                'updated_at' => '2025-09-10 20:02:40',
            ),
            36 => 
            array (
                'id' => 121,
                'stage_id' => 1,
                'text' => 'Jenjang pendidikan apa yang sedang ditempuh?',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-10 20:08:39',
                'updated_at' => '2025-09-10 20:08:48',
            ),
            37 => 
            array (
                'id' => 122,
                'stage_id' => 1,
                'text' => 'Nama Perguruan Tinggi?',
                'type' => 'text',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-10 20:08:57',
                'updated_at' => '2025-09-10 20:09:07',
            ),
            38 => 
            array (
                'id' => 123,
                'stage_id' => 1,
                'text' => 'Program studi/bidang keahlian?',
                'type' => 'prodi',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-10 20:09:17',
                'updated_at' => '2025-09-10 20:09:26',
            ),
            39 => 
            array (
                'id' => 124,
                'stage_id' => 1,
                'text' => 'Apakah program studi/bidang keahlian yang Anda tempuh saat ini selaras dengan program/kompetensi keahlian di SMK?',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-10 20:09:32',
                'updated_at' => '2025-09-10 20:09:44',
            ),
            40 => 
            array (
                'id' => 125,
                'stage_id' => 1,
                'text' => 'Kapan Anda mulai studi di Perguruan Tinggi?',
                'type' => 'date',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-10 20:09:53',
                'updated_at' => '2025-09-10 20:10:02',
            ),
            41 => 
            array (
                'id' => 126,
                'stage_id' => 1,
                'text' => 'Apa alasan Anda kuliah sambil berwirausaha?',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-10 20:10:07',
                'updated_at' => '2025-09-10 20:10:15',
            ),
            42 => 
            array (
                'id' => 127,
                'stage_id' => 1,
                'text' => 'Apa alasan Anda kuliah sambil berwirausaha?',
                'type' => 'text',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-10 20:10:21',
                'updated_at' => '2025-09-10 20:10:33',
            ),
            43 => 
            array (
                'id' => 134,
                'stage_id' => 1,
                'text' => 'Dimana lokasi tempat Anda melanjutkan studi?',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 15:28:06',
                'updated_at' => '2025-09-15 15:28:06',
            ),
            44 => 
            array (
                'id' => 135,
                'stage_id' => 1,
                'text' => 'Masukan NIM Anda',
                'type' => 'text',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 15:29:35',
                'updated_at' => '2025-09-15 15:29:35',
            ),
            45 => 
            array (
                'id' => 136,
                'stage_id' => 1,
                'text' => 'Negara',
                'type' => 'text',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 15:29:40',
                'updated_at' => '2025-09-15 15:29:50',
            ),
            46 => 
            array (
                'id' => 137,
                'stage_id' => 1,
                'text' => 'Jenjang pendidikan apa yang sedang ditempuh?',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 15:30:20',
                'updated_at' => '2025-09-15 15:31:04',
            ),
            47 => 
            array (
                'id' => 138,
                'stage_id' => 1,
                'text' => 'Nama Perguruan Tinggi?',
                'type' => 'perguruan_tinggi',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 15:31:10',
                'updated_at' => '2025-09-15 15:31:15',
            ),
            48 => 
            array (
                'id' => 140,
                'stage_id' => 1,
                'text' => 'Program studi/bidang keahlian?',
                'type' => 'prodi',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 15:31:30',
                'updated_at' => '2025-09-15 15:31:36',
            ),
            49 => 
            array (
                'id' => 141,
                'stage_id' => 1,
                'text' => 'Apakah program studi/bidang keahlian yang Anda tempuh saat ini selaras dengan program/kompetensi keahlian di SMK?',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 15:31:39',
                'updated_at' => '2025-09-15 15:37:50',
            ),
            50 => 
            array (
                'id' => 142,
                'stage_id' => 1,
                'text' => 'Kapan Anda mulai studi di Perguruan Tinggi?',
                'type' => 'date',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 15:37:55',
                'updated_at' => '2025-09-15 15:38:04',
            ),
            51 => 
            array (
                'id' => 143,
                'stage_id' => 1,
            'text' => 'Apa alasan Anda kuliah sambil bekerja? (boleh pilih lebih dari satu)',
                'type' => 'checkbox',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 15:38:11',
                'updated_at' => '2025-09-15 15:39:12',
            ),
            52 => 
            array (
                'id' => 144,
                'stage_id' => 1,
                'text' => 'Apa alasan Anda kuliah sambil bekerja?',
                'type' => 'text',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 15:39:52',
                'updated_at' => '2025-09-15 15:40:10',
            ),
            53 => 
            array (
                'id' => 145,
                'stage_id' => 1,
                'text' => 'Dimana lokasi tempat Anda melanjutkan studi?',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 15:28:06',
                'updated_at' => '2025-09-15 15:28:06',
            ),
            54 => 
            array (
                'id' => 146,
                'stage_id' => 1,
                'text' => 'Masukan NIM Anda',
                'type' => 'text',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 15:29:35',
                'updated_at' => '2025-09-15 15:29:35',
            ),
            55 => 
            array (
                'id' => 147,
                'stage_id' => 1,
                'text' => 'Negara',
                'type' => 'text',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 15:29:40',
                'updated_at' => '2025-09-15 15:29:50',
            ),
            56 => 
            array (
                'id' => 148,
                'stage_id' => 1,
                'text' => 'Jenjang pendidikan apa yang sedang ditempuh?',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 15:30:20',
                'updated_at' => '2025-09-15 15:31:04',
            ),
            57 => 
            array (
                'id' => 149,
                'stage_id' => 1,
                'text' => 'Nama Perguruan Tinggi?',
                'type' => 'text',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 15:31:10',
                'updated_at' => '2025-09-15 15:31:15',
            ),
            58 => 
            array (
                'id' => 150,
                'stage_id' => 1,
                'text' => 'Program studi/bidang keahlian?',
                'type' => 'prodi',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 15:31:30',
                'updated_at' => '2025-09-15 15:31:36',
            ),
            59 => 
            array (
                'id' => 151,
                'stage_id' => 1,
                'text' => 'Apakah program studi/bidang keahlian yang Anda tempuh saat ini selaras dengan program/kompetensi keahlian di SMK?',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 15:31:39',
                'updated_at' => '2025-09-15 15:37:50',
            ),
            60 => 
            array (
                'id' => 152,
                'stage_id' => 1,
                'text' => 'Kapan Anda mulai studi di Perguruan Tinggi?',
                'type' => 'date',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 15:37:55',
                'updated_at' => '2025-09-15 15:38:04',
            ),
            61 => 
            array (
                'id' => 153,
                'stage_id' => 1,
            'text' => 'Apa alasan Anda kuliah sambil bekerja? (boleh pilih lebih dari satu)',
                'type' => 'checkbox',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 15:38:11',
                'updated_at' => '2025-09-15 15:39:12',
            ),
            62 => 
            array (
                'id' => 154,
                'stage_id' => 1,
                'text' => 'Apa alasan Anda kuliah sambil bekerja?',
                'type' => 'text',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 15:39:52',
                'updated_at' => '2025-09-15 15:40:10',
            ),
            63 => 
            array (
                'id' => 155,
                'stage_id' => 1,
                'text' => 'Dimana lokasi tempat Anda melanjutkan studi?',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 15:28:06',
                'updated_at' => '2025-09-15 15:28:06',
            ),
            64 => 
            array (
                'id' => 156,
                'stage_id' => 1,
                'text' => 'Masukan NIM Anda',
                'type' => 'text',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 15:29:35',
                'updated_at' => '2025-09-15 15:29:35',
            ),
            65 => 
            array (
                'id' => 157,
                'stage_id' => 1,
                'text' => 'Negara',
                'type' => 'text',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 15:29:40',
                'updated_at' => '2025-09-15 15:29:50',
            ),
            66 => 
            array (
                'id' => 158,
                'stage_id' => 1,
                'text' => 'Jenjang pendidikan apa yang sedang ditempuh?',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 15:30:20',
                'updated_at' => '2025-09-15 15:31:04',
            ),
            67 => 
            array (
                'id' => 159,
                'stage_id' => 1,
                'text' => 'Nama Perguruan Tinggi?',
                'type' => 'text',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 15:31:10',
                'updated_at' => '2025-09-15 15:31:15',
            ),
            68 => 
            array (
                'id' => 160,
                'stage_id' => 1,
                'text' => 'Program studi/bidang keahlian?',
                'type' => 'prodi',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 15:31:30',
                'updated_at' => '2025-09-15 15:31:36',
            ),
            69 => 
            array (
                'id' => 161,
                'stage_id' => 1,
                'text' => 'Apakah program studi/bidang keahlian yang Anda tempuh saat ini selaras dengan program/kompetensi keahlian di SMK?',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 15:31:39',
                'updated_at' => '2025-09-15 15:37:50',
            ),
            70 => 
            array (
                'id' => 162,
                'stage_id' => 1,
                'text' => 'Kapan Anda mulai studi di Perguruan Tinggi?',
                'type' => 'date',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 15:37:55',
                'updated_at' => '2025-09-15 15:38:04',
            ),
            71 => 
            array (
                'id' => 163,
                'stage_id' => 1,
            'text' => 'Apa alasan Anda kuliah sambil bekerja? (boleh pilih lebih dari satu)',
                'type' => 'checkbox',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 15:38:11',
                'updated_at' => '2025-09-15 15:39:12',
            ),
            72 => 
            array (
                'id' => 164,
                'stage_id' => 1,
                'text' => 'Apa alasan Anda kuliah sambil bekerja?',
                'type' => 'text',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 15:39:52',
                'updated_at' => '2025-09-15 15:40:10',
            ),
            73 => 
            array (
                'id' => 166,
                'stage_id' => 1,
                'text' => 'Apakah Anda telah bekerja sebelum lulus SMK?',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 16:27:45',
                'updated_at' => '2025-09-15 16:27:45',
            ),
            74 => 
            array (
                'id' => 167,
                'stage_id' => 1,
                'text' => 'Kapan Anda mendapatkan pekerjaan yang pertama kali setelah lulus SMK?',
                'type' => 'date',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 16:29:17',
                'updated_at' => '2025-09-15 16:29:17',
            ),
            75 => 
            array (
                'id' => 168,
                'stage_id' => 1,
                'text' => 'Dimana lokasi tempat Anda bekerja?',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 16:29:32',
                'updated_at' => '2025-09-15 16:29:48',
            ),
            76 => 
            array (
                'id' => 169,
                'stage_id' => 1,
            'text' => 'Dimana lokasi tempat Anda bekerja? (Provinsi)',
                'type' => 'provinsi',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 16:30:41',
                'updated_at' => '2025-09-15 16:30:41',
            ),
            77 => 
            array (
                'id' => 170,
                'stage_id' => 1,
            'text' => 'Dimana lokasi tempat Anda bekerja? (Kab/Kota)',
                'type' => 'kabupaten',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 16:30:43',
                'updated_at' => '2025-09-15 16:30:56',
            ),
            78 => 
            array (
                'id' => 171,
                'stage_id' => 1,
            'text' => 'Dimana lokasi tempat Anda bekerja? (Negara)',
                'type' => 'text',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 16:31:04',
                'updated_at' => '2025-09-15 16:31:46',
            ),
            79 => 
            array (
                'id' => 172,
                'stage_id' => 1,
                'text' => 'Apa nama pekerjaan/jabatan/posisi Anda di tempat kerja saat ini?',
                'type' => 'text',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 16:32:13',
                'updated_at' => '2025-09-15 16:32:19',
            ),
            80 => 
            array (
                'id' => 173,
                'stage_id' => 1,
                'text' => 'Apa nama tempat Anda bekerja?',
                'type' => 'text',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 16:32:20',
                'updated_at' => '2025-09-15 16:32:28',
            ),
            81 => 
            array (
                'id' => 174,
                'stage_id' => 1,
            'text' => 'Berapa gaji/upah Anda dalam sebulan (dalam rupiah)?
(gaji/upah juga termasuk fasilitas/barang yang dibayarkan oleh tempat kerja)',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 16:32:35',
                'updated_at' => '2025-09-15 16:33:35',
            ),
            82 => 
            array (
                'id' => 175,
                'stage_id' => 1,
            'text' => 'Bagaimana cara Anda mendapatkan pekerjaan yang pertama kali? (boleh pilih lebih dari satu)',
                'type' => 'checkbox',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 16:33:42',
                'updated_at' => '2025-09-15 16:37:47',
            ),
            83 => 
            array (
                'id' => 176,
                'stage_id' => 1,
                'text' => 'Bagaimana cara Anda mendapatkan pekerjaan yang pertama kali?',
                'type' => 'text',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 16:36:02',
                'updated_at' => '2025-09-15 16:36:02',
            ),
            84 => 
            array (
                'id' => 177,
                'stage_id' => 1,
                'text' => 'Bagaimana keselarasan pekerjaan Anda sekarang dengan program/kompetensi keahlian Anda di SMK?',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 16:36:19',
                'updated_at' => '2025-09-15 16:36:47',
            ),
            85 => 
            array (
                'id' => 178,
                'stage_id' => 1,
                'text' => 'Dimana lokasi tempat usaha/wirausaha Anda?',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 16:41:58',
                'updated_at' => '2025-09-15 16:41:58',
            ),
            86 => 
            array (
                'id' => 179,
                'stage_id' => 1,
            'text' => 'Dimana lokasi tempat usaha/wirausaha Anda? (Provinsi)',
                'type' => 'provinsi',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 16:59:35',
                'updated_at' => '2025-09-15 16:59:35',
            ),
            87 => 
            array (
                'id' => 180,
                'stage_id' => 1,
            'text' => 'Dimana lokasi tempat usaha/wirausaha Anda? (Kab/Kota)',
                'type' => 'kabupaten',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 16:59:37',
                'updated_at' => '2025-09-15 16:59:44',
            ),
            88 => 
            array (
                'id' => 181,
                'stage_id' => 1,
            'text' => 'Dimana lokasi tempat usaha/wirausaha Anda? (Negara)',
                'type' => 'text',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 16:59:46',
                'updated_at' => '2025-09-15 16:59:54',
            ),
            89 => 
            array (
                'id' => 182,
                'stage_id' => 1,
                'text' => 'Apa bentuk wirausaha Anda?',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 17:00:01',
                'updated_at' => '2025-09-15 17:00:41',
            ),
            90 => 
            array (
                'id' => 183,
                'stage_id' => 1,
                'text' => 'Apa bidang wirausaha Anda?',
                'type' => 'text',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 17:00:50',
                'updated_at' => '2025-09-15 17:00:55',
            ),
            91 => 
            array (
                'id' => 184,
                'stage_id' => 1,
                'text' => 'Apa produk usaha Anda?',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 17:01:02',
                'updated_at' => '2025-09-15 17:01:50',
            ),
            92 => 
            array (
                'id' => 185,
                'stage_id' => 1,
                'text' => 'Status kepemilikan usaha yang dijalankan',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 17:01:54',
                'updated_at' => '2025-09-15 17:02:09',
            ),
            93 => 
            array (
                'id' => 186,
                'stage_id' => 1,
                'text' => 'Kapan Anda mulai berwirausaha pertama kali setelah lulus SMK?',
                'type' => 'date',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 17:02:15',
                'updated_at' => '2025-09-15 17:02:19',
            ),
            94 => 
            array (
                'id' => 188,
                'stage_id' => 1,
            'text' => 'Berapa rata-rata pendapatan Anda dalam berwirausaha per bulan dalam 6 bulan terakhir? (dalam rupiah)',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 17:02:33',
                'updated_at' => '2025-09-15 17:03:15',
            ),
            95 => 
            array (
                'id' => 189,
                'stage_id' => 1,
            'text' => 'Berapa rata-rata omset bulanan (hasil usaha kotor yang diperoleh dalam satu bulan) wirausaha Anda? (dalam rupiah)',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 17:03:20',
                'updated_at' => '2025-09-15 17:03:56',
            ),
            96 => 
            array (
                'id' => 190,
                'stage_id' => 1,
                'text' => 'Berapa kali Anda berganti usaha sejak Anda lulus dari SMK?',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 17:04:02',
                'updated_at' => '2025-09-15 17:04:25',
            ),
            97 => 
            array (
                'id' => 191,
                'stage_id' => 1,
                'text' => 'Pengembangan kemampuan membaca peluang usaha',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 17:05:09',
                'updated_at' => '2025-09-15 17:05:40',
            ),
            98 => 
            array (
                'id' => 192,
                'stage_id' => 1,
            'text' => 'Pengembangan kemampuan manajemen sumber daya (keuangan, tenaga, waktu)',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 17:05:42',
                'updated_at' => '2025-09-15 17:06:02',
            ),
            99 => 
            array (
                'id' => 193,
                'stage_id' => 1,
                'text' => 'Pengembangan kemampuan menghasilkan inovasi produk usaha',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 17:06:04',
                'updated_at' => '2025-09-15 17:06:11',
            ),
            100 => 
            array (
                'id' => 194,
                'stage_id' => 1,
                'text' => 'Pengembangan kemampuan pemasaran produk usaha',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 17:06:16',
                'updated_at' => '2025-09-15 17:06:19',
            ),
            101 => 
            array (
                'id' => 195,
                'stage_id' => 1,
                'text' => 'Pengembangan pengetahuan tentang perizinan usaha',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 17:06:25',
                'updated_at' => '2025-09-15 17:06:29',
            ),
            102 => 
            array (
                'id' => 196,
                'stage_id' => 1,
                'text' => 'Bagaimana keselarasan wirausaha Anda sekarang dengan program/kompetensi keahlian Anda di SMK?',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 17:06:35',
                'updated_at' => '2025-09-15 17:06:59',
            ),
            103 => 
            array (
                'id' => 197,
                'stage_id' => 1,
            'text' => 'Dalam seminggu terakhir, manakah kegiatan berikut yang Anda lakukan? (boleh pilih lebih dari satu)',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 17:09:25',
                'updated_at' => '2025-09-15 17:09:25',
            ),
            104 => 
            array (
                'id' => 198,
                'stage_id' => 1,
            'text' => 'Dalam seminggu terakhir, manakah kegiatan berikut yang Anda lakukan? (boleh pilih lebih dari satu)',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 17:09:32',
                'updated_at' => '2025-09-15 17:10:12',
            ),
            105 => 
            array (
                'id' => 199,
                'stage_id' => 1,
                'text' => 'Apa alasan utama Anda tidak mencari pekerjaan/tidak menyiapkan usaha/wirausaha?',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 17:12:03',
                'updated_at' => '2025-09-15 17:12:03',
            ),
            106 => 
            array (
                'id' => 200,
                'stage_id' => 1,
            'text' => 'Sudah berapa lama Anda mencari pekerjaan atau mempersiapkan usaha/wirausaha hingga saat ini? (dalam bulan)',
                'type' => 'text',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 17:12:08',
                'updated_at' => '2025-09-15 17:13:40',
            ),
            107 => 
            array (
                'id' => 201,
                'stage_id' => 1,
            'text' => 'Sudah berapa lama Anda mencari pekerjaan atau mempersiapkan usaha/wirausaha hingga saat ini? (dalam bulan)',
                'type' => 'text',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 17:13:43',
                'updated_at' => '2025-09-15 17:13:55',
            ),
            108 => 
            array (
                'id' => 202,
                'stage_id' => 1,
                'text' => 'Apa alasan Anda mencari pekerjaan atau menyiapkan usaha/wirausaha?',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 17:14:02',
                'updated_at' => '2025-09-15 17:14:52',
            ),
            109 => 
            array (
                'id' => 203,
                'stage_id' => 1,
                'text' => 'Apa alasan Anda mencari pekerjaan atau menyiapkan usaha/wirausaha?',
                'type' => 'radio',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 17:14:53',
                'updated_at' => '2025-09-15 17:15:08',
            ),
            110 => 
            array (
                'id' => 204,
                'stage_id' => 1,
                'text' => 'Apa alasan Anda mencari pekerjaan atau menyiapkan usaha/wirausaha?',
                'type' => 'text',
                'parent_question_id' => NULL,
                'parent_answer_value' => NULL,
                'created_at' => '2025-09-15 17:15:49',
                'updated_at' => '2025-09-15 17:15:49',
            ),
        ));
        
        
    }
}