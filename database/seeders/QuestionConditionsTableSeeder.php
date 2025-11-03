<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuestionConditionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('question_conditions')->delete();
        
        \DB::table('question_conditions')->insert(array (
            0 => 
            array (
                'id' => 3,
                'question_id' => 4,
                'parent_question_id' => 2,
                'parent_answer_value' => 'Tidak',
                'operator' => '=',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'question_id' => 5,
                'parent_question_id' => 4,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 5,
                'question_id' => 6,
                'parent_question_id' => 4,
                'parent_answer_value' => 'Tidak',
                'operator' => '=',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 6,
                'question_id' => 7,
                'parent_question_id' => 6,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 22,
                'question_id' => 13,
                'parent_question_id' => 6,
                'parent_answer_value' => 'Tidak',
                'operator' => '=',
                'created_at' => '2025-09-10 09:09:43',
                'updated_at' => '2025-09-10 09:09:43',
            ),
            5 => 
            array (
                'id' => 23,
                'question_id' => 13,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Tidak',
                'operator' => '=',
                'created_at' => '2025-09-10 09:09:43',
                'updated_at' => '2025-09-10 09:09:43',
            ),
            6 => 
            array (
                'id' => 24,
                'question_id' => 14,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Tidak',
                'operator' => '=',
                'created_at' => '2025-09-10 09:11:31',
                'updated_at' => '2025-09-10 09:11:31',
            ),
            7 => 
            array (
                'id' => 25,
                'question_id' => 14,
                'parent_question_id' => 6,
                'parent_answer_value' => 'Tidak',
                'operator' => '=',
                'created_at' => '2025-09-10 09:11:31',
                'updated_at' => '2025-09-10 09:11:31',
            ),
            8 => 
            array (
                'id' => 28,
                'question_id' => 15,
                'parent_question_id' => 13,
                'parent_answer_value' => 'o5',
                'operator' => '=',
                'created_at' => '2025-09-10 09:18:38',
                'updated_at' => '2025-09-10 09:18:38',
            ),
            9 => 
            array (
                'id' => 29,
                'question_id' => 15,
                'parent_question_id' => 14,
                'parent_answer_value' => 'o7',
                'operator' => '=',
                'created_at' => '2025-09-10 09:18:38',
                'updated_at' => '2025-09-10 09:18:38',
            ),
            10 => 
            array (
                'id' => 32,
                'question_id' => 16,
                'parent_question_id' => 13,
                'parent_answer_value' => 'o5',
                'operator' => '!=',
                'created_at' => '2025-09-10 09:23:51',
                'updated_at' => '2025-09-10 09:23:51',
            ),
            11 => 
            array (
                'id' => 33,
                'question_id' => 16,
                'parent_question_id' => 14,
                'parent_answer_value' => 'o7',
                'operator' => '!=',
                'created_at' => '2025-09-10 09:23:51',
                'updated_at' => '2025-09-10 09:23:51',
            ),
            12 => 
            array (
                'id' => 36,
                'question_id' => 17,
                'parent_question_id' => 13,
                'parent_answer_value' => 'o5',
                'operator' => '!=',
                'created_at' => '2025-09-10 09:26:10',
                'updated_at' => '2025-09-10 09:26:10',
            ),
            13 => 
            array (
                'id' => 37,
                'question_id' => 17,
                'parent_question_id' => 14,
                'parent_answer_value' => 'o7',
                'operator' => '!=',
                'created_at' => '2025-09-10 09:26:10',
                'updated_at' => '2025-09-10 09:26:10',
            ),
            14 => 
            array (
                'id' => 38,
                'question_id' => 18,
                'parent_question_id' => 17,
                'parent_answer_value' => 'o7',
                'operator' => '=',
                'created_at' => '2025-09-10 09:27:02',
                'updated_at' => '2025-09-10 09:27:02',
            ),
            15 => 
            array (
                'id' => 375,
                'question_id' => 79,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-10 19:43:28',
                'updated_at' => '2025-09-10 19:43:28',
            ),
            16 => 
            array (
                'id' => 376,
                'question_id' => 79,
                'parent_question_id' => 3,
                'parent_answer_value' => 'o5',
                'operator' => '!=',
                'created_at' => '2025-09-10 19:43:28',
                'updated_at' => '2025-09-10 19:43:28',
            ),
            17 => 
            array (
                'id' => 377,
                'question_id' => 79,
                'parent_question_id' => 3,
                'parent_answer_value' => 'o6',
                'operator' => '!=',
                'created_at' => '2025-09-10 19:43:28',
                'updated_at' => '2025-09-10 19:43:28',
            ),
            18 => 
            array (
                'id' => 378,
                'question_id' => 80,
                'parent_question_id' => 79,
                'parent_answer_value' => 'o1',
                'operator' => '=',
                'created_at' => '2025-09-10 19:44:34',
                'updated_at' => '2025-09-10 19:44:34',
            ),
            19 => 
            array (
                'id' => 379,
                'question_id' => 81,
                'parent_question_id' => 79,
                'parent_answer_value' => 'o2',
                'operator' => '=',
                'created_at' => '2025-09-10 19:44:49',
                'updated_at' => '2025-09-10 19:44:49',
            ),
            20 => 
            array (
                'id' => 383,
                'question_id' => 82,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-10 19:45:47',
                'updated_at' => '2025-09-10 19:45:47',
            ),
            21 => 
            array (
                'id' => 384,
                'question_id' => 82,
                'parent_question_id' => 3,
                'parent_answer_value' => 'o5',
                'operator' => '!=',
                'created_at' => '2025-09-10 19:45:47',
                'updated_at' => '2025-09-10 19:45:47',
            ),
            22 => 
            array (
                'id' => 385,
                'question_id' => 82,
                'parent_question_id' => 3,
                'parent_answer_value' => 'o6',
                'operator' => '!=',
                'created_at' => '2025-09-10 19:45:47',
                'updated_at' => '2025-09-10 19:45:47',
            ),
            23 => 
            array (
                'id' => 389,
                'question_id' => 83,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-10 19:45:56',
                'updated_at' => '2025-09-10 19:45:56',
            ),
            24 => 
            array (
                'id' => 390,
                'question_id' => 83,
                'parent_question_id' => 3,
                'parent_answer_value' => 'o5',
                'operator' => '!=',
                'created_at' => '2025-09-10 19:45:56',
                'updated_at' => '2025-09-10 19:45:56',
            ),
            25 => 
            array (
                'id' => 391,
                'question_id' => 83,
                'parent_question_id' => 3,
                'parent_answer_value' => 'o6',
                'operator' => '!=',
                'created_at' => '2025-09-10 19:45:56',
                'updated_at' => '2025-09-10 19:45:56',
            ),
            26 => 
            array (
                'id' => 395,
                'question_id' => 84,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-10 19:46:02',
                'updated_at' => '2025-09-10 19:46:02',
            ),
            27 => 
            array (
                'id' => 396,
                'question_id' => 84,
                'parent_question_id' => 3,
                'parent_answer_value' => 'o5',
                'operator' => '!=',
                'created_at' => '2025-09-10 19:46:02',
                'updated_at' => '2025-09-10 19:46:02',
            ),
            28 => 
            array (
                'id' => 397,
                'question_id' => 84,
                'parent_question_id' => 3,
                'parent_answer_value' => 'o6',
                'operator' => '!=',
                'created_at' => '2025-09-10 19:46:02',
                'updated_at' => '2025-09-10 19:46:02',
            ),
            29 => 
            array (
                'id' => 401,
                'question_id' => 85,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-10 19:46:39',
                'updated_at' => '2025-09-10 19:46:39',
            ),
            30 => 
            array (
                'id' => 402,
                'question_id' => 85,
                'parent_question_id' => 3,
                'parent_answer_value' => 'o5',
                'operator' => '!=',
                'created_at' => '2025-09-10 19:46:39',
                'updated_at' => '2025-09-10 19:46:39',
            ),
            31 => 
            array (
                'id' => 403,
                'question_id' => 85,
                'parent_question_id' => 3,
                'parent_answer_value' => 'o6',
                'operator' => '!=',
                'created_at' => '2025-09-10 19:46:39',
                'updated_at' => '2025-09-10 19:46:39',
            ),
            32 => 
            array (
                'id' => 407,
                'question_id' => 86,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-10 19:46:51',
                'updated_at' => '2025-09-10 19:46:51',
            ),
            33 => 
            array (
                'id' => 408,
                'question_id' => 86,
                'parent_question_id' => 3,
                'parent_answer_value' => 'o5',
                'operator' => '!=',
                'created_at' => '2025-09-10 19:46:51',
                'updated_at' => '2025-09-10 19:46:51',
            ),
            34 => 
            array (
                'id' => 409,
                'question_id' => 86,
                'parent_question_id' => 3,
                'parent_answer_value' => 'o6',
                'operator' => '!=',
                'created_at' => '2025-09-10 19:46:51',
                'updated_at' => '2025-09-10 19:46:51',
            ),
            35 => 
            array (
                'id' => 416,
                'question_id' => 88,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-10 19:47:57',
                'updated_at' => '2025-09-10 19:47:57',
            ),
            36 => 
            array (
                'id' => 417,
                'question_id' => 88,
                'parent_question_id' => 3,
                'parent_answer_value' => 'o5',
                'operator' => '!=',
                'created_at' => '2025-09-10 19:47:57',
                'updated_at' => '2025-09-10 19:47:57',
            ),
            37 => 
            array (
                'id' => 418,
                'question_id' => 88,
                'parent_question_id' => 3,
                'parent_answer_value' => 'o6',
                'operator' => '!=',
                'created_at' => '2025-09-10 19:47:57',
                'updated_at' => '2025-09-10 19:47:57',
            ),
            38 => 
            array (
                'id' => 419,
                'question_id' => 89,
                'parent_question_id' => 88,
                'parent_answer_value' => 'o6',
                'operator' => '=',
                'created_at' => '2025-09-10 19:48:17',
                'updated_at' => '2025-09-10 19:48:17',
            ),
            39 => 
            array (
                'id' => 473,
                'question_id' => 108,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-10 20:02:31',
                'updated_at' => '2025-09-10 20:02:31',
            ),
            40 => 
            array (
                'id' => 474,
                'question_id' => 108,
                'parent_question_id' => 5,
                'parent_answer_value' => 'o5',
                'operator' => '!=',
                'created_at' => '2025-09-10 20:02:31',
                'updated_at' => '2025-09-10 20:02:31',
            ),
            41 => 
            array (
                'id' => 475,
                'question_id' => 108,
                'parent_question_id' => 5,
                'parent_answer_value' => 'o6',
                'operator' => '!=',
                'created_at' => '2025-09-10 20:02:31',
                'updated_at' => '2025-09-10 20:02:31',
            ),
            42 => 
            array (
                'id' => 478,
                'question_id' => 109,
                'parent_question_id' => 108,
                'parent_answer_value' => 'o2',
                'operator' => '=',
                'created_at' => '2025-09-10 20:02:51',
                'updated_at' => '2025-09-10 20:02:51',
            ),
            43 => 
            array (
                'id' => 479,
                'question_id' => 110,
                'parent_question_id' => 108,
                'parent_answer_value' => 'o1',
                'operator' => '=',
                'created_at' => '2025-09-10 20:02:56',
                'updated_at' => '2025-09-10 20:02:56',
            ),
            44 => 
            array (
                'id' => 483,
                'question_id' => 111,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-10 20:08:48',
                'updated_at' => '2025-09-10 20:08:48',
            ),
            45 => 
            array (
                'id' => 484,
                'question_id' => 111,
                'parent_question_id' => 5,
                'parent_answer_value' => 'o5',
                'operator' => '!=',
                'created_at' => '2025-09-10 20:08:48',
                'updated_at' => '2025-09-10 20:08:48',
            ),
            46 => 
            array (
                'id' => 485,
                'question_id' => 111,
                'parent_question_id' => 5,
                'parent_answer_value' => 'o6',
                'operator' => '!=',
                'created_at' => '2025-09-10 20:08:48',
                'updated_at' => '2025-09-10 20:08:48',
            ),
            47 => 
            array (
                'id' => 489,
                'question_id' => 112,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-10 20:09:07',
                'updated_at' => '2025-09-10 20:09:07',
            ),
            48 => 
            array (
                'id' => 490,
                'question_id' => 112,
                'parent_question_id' => 5,
                'parent_answer_value' => 'o5',
                'operator' => '!=',
                'created_at' => '2025-09-10 20:09:07',
                'updated_at' => '2025-09-10 20:09:07',
            ),
            49 => 
            array (
                'id' => 491,
                'question_id' => 112,
                'parent_question_id' => 5,
                'parent_answer_value' => 'o6',
                'operator' => '!=',
                'created_at' => '2025-09-10 20:09:07',
                'updated_at' => '2025-09-10 20:09:07',
            ),
            50 => 
            array (
                'id' => 495,
                'question_id' => 113,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-10 20:09:26',
                'updated_at' => '2025-09-10 20:09:26',
            ),
            51 => 
            array (
                'id' => 496,
                'question_id' => 113,
                'parent_question_id' => 5,
                'parent_answer_value' => 'o5',
                'operator' => '!=',
                'created_at' => '2025-09-10 20:09:26',
                'updated_at' => '2025-09-10 20:09:26',
            ),
            52 => 
            array (
                'id' => 497,
                'question_id' => 113,
                'parent_question_id' => 5,
                'parent_answer_value' => 'o6',
                'operator' => '!=',
                'created_at' => '2025-09-10 20:09:26',
                'updated_at' => '2025-09-10 20:09:26',
            ),
            53 => 
            array (
                'id' => 501,
                'question_id' => 114,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-10 20:09:44',
                'updated_at' => '2025-09-10 20:09:44',
            ),
            54 => 
            array (
                'id' => 502,
                'question_id' => 114,
                'parent_question_id' => 5,
                'parent_answer_value' => 'o5',
                'operator' => '!=',
                'created_at' => '2025-09-10 20:09:44',
                'updated_at' => '2025-09-10 20:09:44',
            ),
            55 => 
            array (
                'id' => 503,
                'question_id' => 114,
                'parent_question_id' => 5,
                'parent_answer_value' => 'o6',
                'operator' => '!=',
                'created_at' => '2025-09-10 20:09:44',
                'updated_at' => '2025-09-10 20:09:44',
            ),
            56 => 
            array (
                'id' => 507,
                'question_id' => 115,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-10 20:10:02',
                'updated_at' => '2025-09-10 20:10:02',
            ),
            57 => 
            array (
                'id' => 508,
                'question_id' => 115,
                'parent_question_id' => 5,
                'parent_answer_value' => 'o5',
                'operator' => '!=',
                'created_at' => '2025-09-10 20:10:02',
                'updated_at' => '2025-09-10 20:10:02',
            ),
            58 => 
            array (
                'id' => 509,
                'question_id' => 115,
                'parent_question_id' => 5,
                'parent_answer_value' => 'o6',
                'operator' => '!=',
                'created_at' => '2025-09-10 20:10:02',
                'updated_at' => '2025-09-10 20:10:02',
            ),
            59 => 
            array (
                'id' => 513,
                'question_id' => 116,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-10 20:10:15',
                'updated_at' => '2025-09-10 20:10:15',
            ),
            60 => 
            array (
                'id' => 514,
                'question_id' => 116,
                'parent_question_id' => 5,
                'parent_answer_value' => 'o5',
                'operator' => '!=',
                'created_at' => '2025-09-10 20:10:15',
                'updated_at' => '2025-09-10 20:10:15',
            ),
            61 => 
            array (
                'id' => 515,
                'question_id' => 116,
                'parent_question_id' => 5,
                'parent_answer_value' => 'o6',
                'operator' => '!=',
                'created_at' => '2025-09-10 20:10:15',
                'updated_at' => '2025-09-10 20:10:15',
            ),
            62 => 
            array (
                'id' => 517,
                'question_id' => 117,
                'parent_question_id' => 116,
                'parent_answer_value' => 'o6',
                'operator' => '=',
                'created_at' => '2025-09-10 20:10:33',
                'updated_at' => '2025-09-10 20:10:33',
            ),
            63 => 
            array (
                'id' => 518,
                'question_id' => 118,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-10 20:02:31',
                'updated_at' => '2025-09-10 20:02:31',
            ),
            64 => 
            array (
                'id' => 519,
                'question_id' => 118,
                'parent_question_id' => 7,
                'parent_answer_value' => 'o5',
                'operator' => '!=',
                'created_at' => '2025-09-10 20:02:31',
                'updated_at' => '2025-09-10 20:02:31',
            ),
            65 => 
            array (
                'id' => 520,
                'question_id' => 118,
                'parent_question_id' => 7,
                'parent_answer_value' => 'o6',
                'operator' => '!=',
                'created_at' => '2025-09-10 20:02:31',
                'updated_at' => '2025-09-10 20:02:31',
            ),
            66 => 
            array (
                'id' => 521,
                'question_id' => 119,
                'parent_question_id' => 118,
                'parent_answer_value' => 'o2',
                'operator' => '=',
                'created_at' => '2025-09-10 20:02:51',
                'updated_at' => '2025-09-10 20:02:51',
            ),
            67 => 
            array (
                'id' => 522,
                'question_id' => 120,
                'parent_question_id' => 118,
                'parent_answer_value' => 'o1',
                'operator' => '=',
                'created_at' => '2025-09-10 20:02:56',
                'updated_at' => '2025-09-10 20:02:56',
            ),
            68 => 
            array (
                'id' => 523,
                'question_id' => 121,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-10 20:08:48',
                'updated_at' => '2025-09-10 20:08:48',
            ),
            69 => 
            array (
                'id' => 524,
                'question_id' => 121,
                'parent_question_id' => 7,
                'parent_answer_value' => 'o5',
                'operator' => '!=',
                'created_at' => '2025-09-10 20:08:48',
                'updated_at' => '2025-09-10 20:08:48',
            ),
            70 => 
            array (
                'id' => 525,
                'question_id' => 121,
                'parent_question_id' => 7,
                'parent_answer_value' => 'o6',
                'operator' => '!=',
                'created_at' => '2025-09-10 20:08:48',
                'updated_at' => '2025-09-10 20:08:48',
            ),
            71 => 
            array (
                'id' => 526,
                'question_id' => 122,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-10 20:09:07',
                'updated_at' => '2025-09-10 20:09:07',
            ),
            72 => 
            array (
                'id' => 527,
                'question_id' => 122,
                'parent_question_id' => 7,
                'parent_answer_value' => 'o5',
                'operator' => '!=',
                'created_at' => '2025-09-10 20:09:07',
                'updated_at' => '2025-09-10 20:09:07',
            ),
            73 => 
            array (
                'id' => 528,
                'question_id' => 122,
                'parent_question_id' => 7,
                'parent_answer_value' => 'o6',
                'operator' => '!=',
                'created_at' => '2025-09-10 20:09:07',
                'updated_at' => '2025-09-10 20:09:07',
            ),
            74 => 
            array (
                'id' => 529,
                'question_id' => 123,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-10 20:09:26',
                'updated_at' => '2025-09-10 20:09:26',
            ),
            75 => 
            array (
                'id' => 530,
                'question_id' => 123,
                'parent_question_id' => 7,
                'parent_answer_value' => 'o5',
                'operator' => '!=',
                'created_at' => '2025-09-10 20:09:26',
                'updated_at' => '2025-09-10 20:09:26',
            ),
            76 => 
            array (
                'id' => 531,
                'question_id' => 123,
                'parent_question_id' => 7,
                'parent_answer_value' => 'o6',
                'operator' => '!=',
                'created_at' => '2025-09-10 20:09:26',
                'updated_at' => '2025-09-10 20:09:26',
            ),
            77 => 
            array (
                'id' => 532,
                'question_id' => 124,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-10 20:09:44',
                'updated_at' => '2025-09-10 20:09:44',
            ),
            78 => 
            array (
                'id' => 533,
                'question_id' => 124,
                'parent_question_id' => 7,
                'parent_answer_value' => 'o5',
                'operator' => '!=',
                'created_at' => '2025-09-10 20:09:44',
                'updated_at' => '2025-09-10 20:09:44',
            ),
            79 => 
            array (
                'id' => 534,
                'question_id' => 124,
                'parent_question_id' => 7,
                'parent_answer_value' => 'o6',
                'operator' => '!=',
                'created_at' => '2025-09-10 20:09:44',
                'updated_at' => '2025-09-10 20:09:44',
            ),
            80 => 
            array (
                'id' => 535,
                'question_id' => 125,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-10 20:10:02',
                'updated_at' => '2025-09-10 20:10:02',
            ),
            81 => 
            array (
                'id' => 536,
                'question_id' => 125,
                'parent_question_id' => 7,
                'parent_answer_value' => 'o5',
                'operator' => '!=',
                'created_at' => '2025-09-10 20:10:02',
                'updated_at' => '2025-09-10 20:10:02',
            ),
            82 => 
            array (
                'id' => 537,
                'question_id' => 125,
                'parent_question_id' => 7,
                'parent_answer_value' => 'o6',
                'operator' => '!=',
                'created_at' => '2025-09-10 20:10:02',
                'updated_at' => '2025-09-10 20:10:02',
            ),
            83 => 
            array (
                'id' => 538,
                'question_id' => 126,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-10 20:10:15',
                'updated_at' => '2025-09-10 20:10:15',
            ),
            84 => 
            array (
                'id' => 539,
                'question_id' => 126,
                'parent_question_id' => 7,
                'parent_answer_value' => 'o5',
                'operator' => '!=',
                'created_at' => '2025-09-10 20:10:15',
                'updated_at' => '2025-09-10 20:10:15',
            ),
            85 => 
            array (
                'id' => 540,
                'question_id' => 126,
                'parent_question_id' => 7,
                'parent_answer_value' => 'o6',
                'operator' => '!=',
                'created_at' => '2025-09-10 20:10:15',
                'updated_at' => '2025-09-10 20:10:15',
            ),
            86 => 
            array (
                'id' => 541,
                'question_id' => 127,
                'parent_question_id' => 126,
                'parent_answer_value' => 'o6',
                'operator' => '=',
                'created_at' => '2025-09-10 20:10:33',
                'updated_at' => '2025-09-10 20:10:33',
            ),
            87 => 
            array (
                'id' => 588,
                'question_id' => 134,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-15 15:29:07',
                'updated_at' => '2025-09-15 15:29:07',
            ),
            88 => 
            array (
                'id' => 589,
                'question_id' => 134,
                'parent_question_id' => 3,
                'parent_answer_value' => 'o5',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:29:07',
                'updated_at' => '2025-09-15 15:29:07',
            ),
            89 => 
            array (
                'id' => 590,
                'question_id' => 134,
                'parent_question_id' => 3,
                'parent_answer_value' => 'o6',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:29:07',
                'updated_at' => '2025-09-15 15:29:07',
            ),
            90 => 
            array (
                'id' => 591,
                'question_id' => 135,
                'parent_question_id' => 134,
                'parent_answer_value' => 'o1',
                'operator' => '=',
                'created_at' => '2025-09-15 15:29:35',
                'updated_at' => '2025-09-15 15:29:35',
            ),
            91 => 
            array (
                'id' => 593,
                'question_id' => 136,
                'parent_question_id' => 134,
                'parent_answer_value' => 'o2',
                'operator' => '=',
                'created_at' => '2025-09-15 15:29:50',
                'updated_at' => '2025-09-15 15:29:50',
            ),
            92 => 
            array (
                'id' => 597,
                'question_id' => 137,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-15 15:31:04',
                'updated_at' => '2025-09-15 15:31:04',
            ),
            93 => 
            array (
                'id' => 598,
                'question_id' => 137,
                'parent_question_id' => 3,
                'parent_answer_value' => 'o5',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:31:04',
                'updated_at' => '2025-09-15 15:31:04',
            ),
            94 => 
            array (
                'id' => 599,
                'question_id' => 137,
                'parent_question_id' => 3,
                'parent_answer_value' => 'o6',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:31:04',
                'updated_at' => '2025-09-15 15:31:04',
            ),
            95 => 
            array (
                'id' => 603,
                'question_id' => 138,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-15 15:31:15',
                'updated_at' => '2025-09-15 15:31:15',
            ),
            96 => 
            array (
                'id' => 604,
                'question_id' => 138,
                'parent_question_id' => 3,
                'parent_answer_value' => 'o5',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:31:15',
                'updated_at' => '2025-09-15 15:31:15',
            ),
            97 => 
            array (
                'id' => 605,
                'question_id' => 138,
                'parent_question_id' => 3,
                'parent_answer_value' => 'o6',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:31:15',
                'updated_at' => '2025-09-15 15:31:15',
            ),
            98 => 
            array (
                'id' => 612,
                'question_id' => 140,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-15 15:31:36',
                'updated_at' => '2025-09-15 15:31:36',
            ),
            99 => 
            array (
                'id' => 613,
                'question_id' => 140,
                'parent_question_id' => 3,
                'parent_answer_value' => 'o5',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:31:36',
                'updated_at' => '2025-09-15 15:31:36',
            ),
            100 => 
            array (
                'id' => 614,
                'question_id' => 140,
                'parent_question_id' => 3,
                'parent_answer_value' => 'o6',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:31:36',
                'updated_at' => '2025-09-15 15:31:36',
            ),
            101 => 
            array (
                'id' => 618,
                'question_id' => 141,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-15 15:37:50',
                'updated_at' => '2025-09-15 15:37:50',
            ),
            102 => 
            array (
                'id' => 619,
                'question_id' => 141,
                'parent_question_id' => 3,
                'parent_answer_value' => 'o5',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:37:50',
                'updated_at' => '2025-09-15 15:37:50',
            ),
            103 => 
            array (
                'id' => 620,
                'question_id' => 141,
                'parent_question_id' => 3,
                'parent_answer_value' => 'o6',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:37:50',
                'updated_at' => '2025-09-15 15:37:50',
            ),
            104 => 
            array (
                'id' => 624,
                'question_id' => 142,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-15 15:38:04',
                'updated_at' => '2025-09-15 15:38:04',
            ),
            105 => 
            array (
                'id' => 625,
                'question_id' => 142,
                'parent_question_id' => 3,
                'parent_answer_value' => 'o5',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:38:04',
                'updated_at' => '2025-09-15 15:38:04',
            ),
            106 => 
            array (
                'id' => 626,
                'question_id' => 142,
                'parent_question_id' => 3,
                'parent_answer_value' => 'o6',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:38:04',
                'updated_at' => '2025-09-15 15:38:04',
            ),
            107 => 
            array (
                'id' => 633,
                'question_id' => 143,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-15 15:39:12',
                'updated_at' => '2025-09-15 15:39:12',
            ),
            108 => 
            array (
                'id' => 634,
                'question_id' => 143,
                'parent_question_id' => 3,
                'parent_answer_value' => 'o5',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:39:12',
                'updated_at' => '2025-09-15 15:39:12',
            ),
            109 => 
            array (
                'id' => 635,
                'question_id' => 143,
                'parent_question_id' => 3,
                'parent_answer_value' => 'o6',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:39:12',
                'updated_at' => '2025-09-15 15:39:12',
            ),
            110 => 
            array (
                'id' => 639,
                'question_id' => 144,
                'parent_question_id' => 143,
                'parent_answer_value' => 'o7',
                'operator' => '=',
                'created_at' => '2025-09-15 15:40:10',
                'updated_at' => '2025-09-15 15:40:10',
            ),
            111 => 
            array (
                'id' => 640,
                'question_id' => 145,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-15 15:29:07',
                'updated_at' => '2025-09-15 15:29:07',
            ),
            112 => 
            array (
                'id' => 641,
                'question_id' => 145,
                'parent_question_id' => 5,
                'parent_answer_value' => 'o5',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:29:07',
                'updated_at' => '2025-09-15 15:29:07',
            ),
            113 => 
            array (
                'id' => 642,
                'question_id' => 145,
                'parent_question_id' => 5,
                'parent_answer_value' => 'o6',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:29:07',
                'updated_at' => '2025-09-15 15:29:07',
            ),
            114 => 
            array (
                'id' => 643,
                'question_id' => 146,
                'parent_question_id' => 145,
                'parent_answer_value' => 'o1',
                'operator' => '=',
                'created_at' => '2025-09-15 15:29:35',
                'updated_at' => '2025-09-15 15:29:35',
            ),
            115 => 
            array (
                'id' => 644,
                'question_id' => 147,
                'parent_question_id' => 145,
                'parent_answer_value' => 'o2',
                'operator' => '=',
                'created_at' => '2025-09-15 15:29:50',
                'updated_at' => '2025-09-15 15:29:50',
            ),
            116 => 
            array (
                'id' => 645,
                'question_id' => 148,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-15 15:31:04',
                'updated_at' => '2025-09-15 15:31:04',
            ),
            117 => 
            array (
                'id' => 646,
                'question_id' => 148,
                'parent_question_id' => 5,
                'parent_answer_value' => 'o5',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:31:04',
                'updated_at' => '2025-09-15 15:31:04',
            ),
            118 => 
            array (
                'id' => 647,
                'question_id' => 148,
                'parent_question_id' => 5,
                'parent_answer_value' => 'o6',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:31:04',
                'updated_at' => '2025-09-15 15:31:04',
            ),
            119 => 
            array (
                'id' => 648,
                'question_id' => 149,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-15 15:31:15',
                'updated_at' => '2025-09-15 15:31:15',
            ),
            120 => 
            array (
                'id' => 649,
                'question_id' => 149,
                'parent_question_id' => 5,
                'parent_answer_value' => 'o5',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:31:15',
                'updated_at' => '2025-09-15 15:31:15',
            ),
            121 => 
            array (
                'id' => 650,
                'question_id' => 149,
                'parent_question_id' => 5,
                'parent_answer_value' => 'o6',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:31:15',
                'updated_at' => '2025-09-15 15:31:15',
            ),
            122 => 
            array (
                'id' => 651,
                'question_id' => 150,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-15 15:31:36',
                'updated_at' => '2025-09-15 15:31:36',
            ),
            123 => 
            array (
                'id' => 652,
                'question_id' => 150,
                'parent_question_id' => 5,
                'parent_answer_value' => 'o5',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:31:36',
                'updated_at' => '2025-09-15 15:31:36',
            ),
            124 => 
            array (
                'id' => 653,
                'question_id' => 150,
                'parent_question_id' => 5,
                'parent_answer_value' => 'o6',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:31:36',
                'updated_at' => '2025-09-15 15:31:36',
            ),
            125 => 
            array (
                'id' => 654,
                'question_id' => 151,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-15 15:37:50',
                'updated_at' => '2025-09-15 15:37:50',
            ),
            126 => 
            array (
                'id' => 655,
                'question_id' => 151,
                'parent_question_id' => 5,
                'parent_answer_value' => 'o5',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:37:50',
                'updated_at' => '2025-09-15 15:37:50',
            ),
            127 => 
            array (
                'id' => 656,
                'question_id' => 151,
                'parent_question_id' => 5,
                'parent_answer_value' => 'o6',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:37:50',
                'updated_at' => '2025-09-15 15:37:50',
            ),
            128 => 
            array (
                'id' => 657,
                'question_id' => 152,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-15 15:38:04',
                'updated_at' => '2025-09-15 15:38:04',
            ),
            129 => 
            array (
                'id' => 658,
                'question_id' => 152,
                'parent_question_id' => 5,
                'parent_answer_value' => 'o5',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:38:04',
                'updated_at' => '2025-09-15 15:38:04',
            ),
            130 => 
            array (
                'id' => 659,
                'question_id' => 152,
                'parent_question_id' => 5,
                'parent_answer_value' => 'o6',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:38:04',
                'updated_at' => '2025-09-15 15:38:04',
            ),
            131 => 
            array (
                'id' => 660,
                'question_id' => 153,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-15 15:39:12',
                'updated_at' => '2025-09-15 15:39:12',
            ),
            132 => 
            array (
                'id' => 661,
                'question_id' => 153,
                'parent_question_id' => 5,
                'parent_answer_value' => 'o5',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:39:12',
                'updated_at' => '2025-09-15 15:39:12',
            ),
            133 => 
            array (
                'id' => 662,
                'question_id' => 153,
                'parent_question_id' => 5,
                'parent_answer_value' => 'o6',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:39:12',
                'updated_at' => '2025-09-15 15:39:12',
            ),
            134 => 
            array (
                'id' => 663,
                'question_id' => 154,
                'parent_question_id' => 153,
                'parent_answer_value' => 'o7',
                'operator' => '=',
                'created_at' => '2025-09-15 15:40:10',
                'updated_at' => '2025-09-15 15:40:10',
            ),
            135 => 
            array (
                'id' => 675,
                'question_id' => 150,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-15 15:31:36',
                'updated_at' => '2025-09-15 15:31:36',
            ),
            136 => 
            array (
                'id' => 676,
                'question_id' => 150,
                'parent_question_id' => 5,
                'parent_answer_value' => 'o5',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:31:36',
                'updated_at' => '2025-09-15 15:31:36',
            ),
            137 => 
            array (
                'id' => 677,
                'question_id' => 150,
                'parent_question_id' => 5,
                'parent_answer_value' => 'o6',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:31:36',
                'updated_at' => '2025-09-15 15:31:36',
            ),
            138 => 
            array (
                'id' => 702,
                'question_id' => 150,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-15 15:31:36',
                'updated_at' => '2025-09-15 15:31:36',
            ),
            139 => 
            array (
                'id' => 703,
                'question_id' => 150,
                'parent_question_id' => 7,
                'parent_answer_value' => 'o5',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:31:36',
                'updated_at' => '2025-09-15 15:31:36',
            ),
            140 => 
            array (
                'id' => 704,
                'question_id' => 150,
                'parent_question_id' => 7,
                'parent_answer_value' => 'o6',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:31:36',
                'updated_at' => '2025-09-15 15:31:36',
            ),
            141 => 
            array (
                'id' => 726,
                'question_id' => 150,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-15 15:31:36',
                'updated_at' => '2025-09-15 15:31:36',
            ),
            142 => 
            array (
                'id' => 727,
                'question_id' => 150,
                'parent_question_id' => 7,
                'parent_answer_value' => 'o5',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:31:36',
                'updated_at' => '2025-09-15 15:31:36',
            ),
            143 => 
            array (
                'id' => 728,
                'question_id' => 150,
                'parent_question_id' => 7,
                'parent_answer_value' => 'o6',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:31:36',
                'updated_at' => '2025-09-15 15:31:36',
            ),
            144 => 
            array (
                'id' => 739,
                'question_id' => 155,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-15 15:29:07',
                'updated_at' => '2025-09-15 15:29:07',
            ),
            145 => 
            array (
                'id' => 740,
                'question_id' => 155,
                'parent_question_id' => 7,
                'parent_answer_value' => 'o5',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:29:07',
                'updated_at' => '2025-09-15 15:29:07',
            ),
            146 => 
            array (
                'id' => 741,
                'question_id' => 155,
                'parent_question_id' => 7,
                'parent_answer_value' => 'o6',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:29:07',
                'updated_at' => '2025-09-15 15:29:07',
            ),
            147 => 
            array (
                'id' => 742,
                'question_id' => 156,
                'parent_question_id' => 155,
                'parent_answer_value' => 'o1',
                'operator' => '=',
                'created_at' => '2025-09-15 15:29:35',
                'updated_at' => '2025-09-15 15:29:35',
            ),
            148 => 
            array (
                'id' => 743,
                'question_id' => 157,
                'parent_question_id' => 155,
                'parent_answer_value' => 'o2',
                'operator' => '=',
                'created_at' => '2025-09-15 15:29:50',
                'updated_at' => '2025-09-15 15:29:50',
            ),
            149 => 
            array (
                'id' => 744,
                'question_id' => 158,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-15 15:31:04',
                'updated_at' => '2025-09-15 15:31:04',
            ),
            150 => 
            array (
                'id' => 745,
                'question_id' => 158,
                'parent_question_id' => 7,
                'parent_answer_value' => 'o5',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:31:04',
                'updated_at' => '2025-09-15 15:31:04',
            ),
            151 => 
            array (
                'id' => 746,
                'question_id' => 158,
                'parent_question_id' => 7,
                'parent_answer_value' => 'o6',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:31:04',
                'updated_at' => '2025-09-15 15:31:04',
            ),
            152 => 
            array (
                'id' => 747,
                'question_id' => 159,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-15 15:31:15',
                'updated_at' => '2025-09-15 15:31:15',
            ),
            153 => 
            array (
                'id' => 748,
                'question_id' => 159,
                'parent_question_id' => 7,
                'parent_answer_value' => 'o5',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:31:15',
                'updated_at' => '2025-09-15 15:31:15',
            ),
            154 => 
            array (
                'id' => 749,
                'question_id' => 159,
                'parent_question_id' => 7,
                'parent_answer_value' => 'o6',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:31:15',
                'updated_at' => '2025-09-15 15:31:15',
            ),
            155 => 
            array (
                'id' => 750,
                'question_id' => 160,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-15 15:31:36',
                'updated_at' => '2025-09-15 15:31:36',
            ),
            156 => 
            array (
                'id' => 751,
                'question_id' => 160,
                'parent_question_id' => 7,
                'parent_answer_value' => 'o5',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:31:36',
                'updated_at' => '2025-09-15 15:31:36',
            ),
            157 => 
            array (
                'id' => 752,
                'question_id' => 160,
                'parent_question_id' => 7,
                'parent_answer_value' => 'o6',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:31:36',
                'updated_at' => '2025-09-15 15:31:36',
            ),
            158 => 
            array (
                'id' => 753,
                'question_id' => 161,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-15 15:37:50',
                'updated_at' => '2025-09-15 15:37:50',
            ),
            159 => 
            array (
                'id' => 754,
                'question_id' => 161,
                'parent_question_id' => 7,
                'parent_answer_value' => 'o5',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:37:50',
                'updated_at' => '2025-09-15 15:37:50',
            ),
            160 => 
            array (
                'id' => 755,
                'question_id' => 161,
                'parent_question_id' => 7,
                'parent_answer_value' => 'o6',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:37:50',
                'updated_at' => '2025-09-15 15:37:50',
            ),
            161 => 
            array (
                'id' => 756,
                'question_id' => 162,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-15 15:38:04',
                'updated_at' => '2025-09-15 15:38:04',
            ),
            162 => 
            array (
                'id' => 757,
                'question_id' => 162,
                'parent_question_id' => 7,
                'parent_answer_value' => 'o5',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:38:04',
                'updated_at' => '2025-09-15 15:38:04',
            ),
            163 => 
            array (
                'id' => 758,
                'question_id' => 162,
                'parent_question_id' => 7,
                'parent_answer_value' => 'o6',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:38:04',
                'updated_at' => '2025-09-15 15:38:04',
            ),
            164 => 
            array (
                'id' => 759,
                'question_id' => 163,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-15 15:39:12',
                'updated_at' => '2025-09-15 15:39:12',
            ),
            165 => 
            array (
                'id' => 760,
                'question_id' => 163,
                'parent_question_id' => 7,
                'parent_answer_value' => 'o5',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:39:12',
                'updated_at' => '2025-09-15 15:39:12',
            ),
            166 => 
            array (
                'id' => 761,
                'question_id' => 163,
                'parent_question_id' => 7,
                'parent_answer_value' => 'o6',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 15:39:12',
                'updated_at' => '2025-09-15 15:39:12',
            ),
            167 => 
            array (
                'id' => 762,
                'question_id' => 164,
                'parent_question_id' => 163,
                'parent_answer_value' => 'o7',
                'operator' => '=',
                'created_at' => '2025-09-15 15:40:10',
                'updated_at' => '2025-09-15 15:40:10',
            ),
            168 => 
            array (
                'id' => 763,
                'question_id' => 166,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-15 16:27:45',
                'updated_at' => '2025-09-15 16:27:45',
            ),
            169 => 
            array (
                'id' => 764,
                'question_id' => 166,
                'parent_question_id' => 2,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 16:27:45',
                'updated_at' => '2025-09-15 16:27:45',
            ),
            170 => 
            array (
                'id' => 765,
                'question_id' => 166,
                'parent_question_id' => 4,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 16:27:45',
                'updated_at' => '2025-09-15 16:27:45',
            ),
            171 => 
            array (
                'id' => 766,
                'question_id' => 167,
                'parent_question_id' => 166,
                'parent_answer_value' => 'o2',
                'operator' => '=',
                'created_at' => '2025-09-15 16:29:17',
                'updated_at' => '2025-09-15 16:29:17',
            ),
            172 => 
            array (
                'id' => 770,
                'question_id' => 168,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-15 16:29:48',
                'updated_at' => '2025-09-15 16:29:48',
            ),
            173 => 
            array (
                'id' => 771,
                'question_id' => 168,
                'parent_question_id' => 2,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 16:29:48',
                'updated_at' => '2025-09-15 16:29:48',
            ),
            174 => 
            array (
                'id' => 772,
                'question_id' => 168,
                'parent_question_id' => 4,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 16:29:48',
                'updated_at' => '2025-09-15 16:29:48',
            ),
            175 => 
            array (
                'id' => 773,
                'question_id' => 169,
                'parent_question_id' => 168,
                'parent_answer_value' => 'o1',
                'operator' => '=',
                'created_at' => '2025-09-15 16:30:41',
                'updated_at' => '2025-09-15 16:30:41',
            ),
            176 => 
            array (
                'id' => 775,
                'question_id' => 170,
                'parent_question_id' => 168,
                'parent_answer_value' => 'o1',
                'operator' => '=',
                'created_at' => '2025-09-15 16:30:56',
                'updated_at' => '2025-09-15 16:30:56',
            ),
            177 => 
            array (
                'id' => 777,
                'question_id' => 171,
                'parent_question_id' => 168,
                'parent_answer_value' => 'o2',
                'operator' => '=',
                'created_at' => '2025-09-15 16:31:46',
                'updated_at' => '2025-09-15 16:31:46',
            ),
            178 => 
            array (
                'id' => 781,
                'question_id' => 172,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-15 16:32:19',
                'updated_at' => '2025-09-15 16:32:19',
            ),
            179 => 
            array (
                'id' => 782,
                'question_id' => 172,
                'parent_question_id' => 2,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 16:32:19',
                'updated_at' => '2025-09-15 16:32:19',
            ),
            180 => 
            array (
                'id' => 783,
                'question_id' => 172,
                'parent_question_id' => 4,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 16:32:19',
                'updated_at' => '2025-09-15 16:32:19',
            ),
            181 => 
            array (
                'id' => 787,
                'question_id' => 173,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-15 16:32:28',
                'updated_at' => '2025-09-15 16:32:28',
            ),
            182 => 
            array (
                'id' => 788,
                'question_id' => 173,
                'parent_question_id' => 2,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 16:32:28',
                'updated_at' => '2025-09-15 16:32:28',
            ),
            183 => 
            array (
                'id' => 789,
                'question_id' => 173,
                'parent_question_id' => 4,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 16:32:28',
                'updated_at' => '2025-09-15 16:32:28',
            ),
            184 => 
            array (
                'id' => 793,
                'question_id' => 174,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-15 16:33:35',
                'updated_at' => '2025-09-15 16:33:35',
            ),
            185 => 
            array (
                'id' => 794,
                'question_id' => 174,
                'parent_question_id' => 2,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 16:33:35',
                'updated_at' => '2025-09-15 16:33:35',
            ),
            186 => 
            array (
                'id' => 795,
                'question_id' => 174,
                'parent_question_id' => 4,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 16:33:35',
                'updated_at' => '2025-09-15 16:33:35',
            ),
            187 => 
            array (
                'id' => 803,
                'question_id' => 176,
                'parent_question_id' => 175,
                'parent_answer_value' => 'o9',
                'operator' => '=',
                'created_at' => '2025-09-15 16:36:10',
                'updated_at' => '2025-09-15 16:36:10',
            ),
            188 => 
            array (
                'id' => 807,
                'question_id' => 177,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-15 16:36:47',
                'updated_at' => '2025-09-15 16:36:47',
            ),
            189 => 
            array (
                'id' => 808,
                'question_id' => 177,
                'parent_question_id' => 2,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 16:36:47',
                'updated_at' => '2025-09-15 16:36:47',
            ),
            190 => 
            array (
                'id' => 809,
                'question_id' => 177,
                'parent_question_id' => 4,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 16:36:47',
                'updated_at' => '2025-09-15 16:36:47',
            ),
            191 => 
            array (
                'id' => 810,
                'question_id' => 175,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-15 16:37:47',
                'updated_at' => '2025-09-15 16:37:47',
            ),
            192 => 
            array (
                'id' => 811,
                'question_id' => 175,
                'parent_question_id' => 2,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 16:37:47',
                'updated_at' => '2025-09-15 16:37:47',
            ),
            193 => 
            array (
                'id' => 812,
                'question_id' => 175,
                'parent_question_id' => 4,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 16:37:47',
                'updated_at' => '2025-09-15 16:37:47',
            ),
            194 => 
            array (
                'id' => 823,
                'question_id' => 178,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Tidak',
                'operator' => '=',
                'created_at' => '2025-09-15 16:48:43',
                'updated_at' => '2025-09-15 16:48:43',
            ),
            195 => 
            array (
                'id' => 824,
                'question_id' => 178,
                'parent_question_id' => 2,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 16:48:43',
                'updated_at' => '2025-09-15 16:48:43',
            ),
            196 => 
            array (
                'id' => 825,
                'question_id' => 178,
                'parent_question_id' => 4,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 16:48:43',
                'updated_at' => '2025-09-15 16:48:43',
            ),
            197 => 
            array (
                'id' => 826,
                'question_id' => 178,
                'parent_question_id' => 6,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 16:48:43',
                'updated_at' => '2025-09-15 16:48:43',
            ),
            198 => 
            array (
                'id' => 827,
                'question_id' => 179,
                'parent_question_id' => 178,
                'parent_answer_value' => 'o1',
                'operator' => '=',
                'created_at' => '2025-09-15 16:59:35',
                'updated_at' => '2025-09-15 16:59:35',
            ),
            199 => 
            array (
                'id' => 829,
                'question_id' => 180,
                'parent_question_id' => 178,
                'parent_answer_value' => 'o1',
                'operator' => '=',
                'created_at' => '2025-09-15 16:59:44',
                'updated_at' => '2025-09-15 16:59:44',
            ),
            200 => 
            array (
                'id' => 831,
                'question_id' => 181,
                'parent_question_id' => 178,
                'parent_answer_value' => 'o2',
                'operator' => '=',
                'created_at' => '2025-09-15 16:59:54',
                'updated_at' => '2025-09-15 16:59:54',
            ),
            201 => 
            array (
                'id' => 836,
                'question_id' => 182,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Tidak',
                'operator' => '=',
                'created_at' => '2025-09-15 17:00:41',
                'updated_at' => '2025-09-15 17:00:41',
            ),
            202 => 
            array (
                'id' => 837,
                'question_id' => 182,
                'parent_question_id' => 2,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:00:41',
                'updated_at' => '2025-09-15 17:00:41',
            ),
            203 => 
            array (
                'id' => 838,
                'question_id' => 182,
                'parent_question_id' => 4,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:00:41',
                'updated_at' => '2025-09-15 17:00:41',
            ),
            204 => 
            array (
                'id' => 839,
                'question_id' => 182,
                'parent_question_id' => 6,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:00:41',
                'updated_at' => '2025-09-15 17:00:41',
            ),
            205 => 
            array (
                'id' => 844,
                'question_id' => 183,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Tidak',
                'operator' => '=',
                'created_at' => '2025-09-15 17:00:55',
                'updated_at' => '2025-09-15 17:00:55',
            ),
            206 => 
            array (
                'id' => 845,
                'question_id' => 183,
                'parent_question_id' => 2,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:00:55',
                'updated_at' => '2025-09-15 17:00:55',
            ),
            207 => 
            array (
                'id' => 846,
                'question_id' => 183,
                'parent_question_id' => 4,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:00:55',
                'updated_at' => '2025-09-15 17:00:55',
            ),
            208 => 
            array (
                'id' => 847,
                'question_id' => 183,
                'parent_question_id' => 6,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:00:55',
                'updated_at' => '2025-09-15 17:00:55',
            ),
            209 => 
            array (
                'id' => 852,
                'question_id' => 184,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Tidak',
                'operator' => '=',
                'created_at' => '2025-09-15 17:01:50',
                'updated_at' => '2025-09-15 17:01:50',
            ),
            210 => 
            array (
                'id' => 853,
                'question_id' => 184,
                'parent_question_id' => 2,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:01:50',
                'updated_at' => '2025-09-15 17:01:50',
            ),
            211 => 
            array (
                'id' => 854,
                'question_id' => 184,
                'parent_question_id' => 4,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:01:50',
                'updated_at' => '2025-09-15 17:01:50',
            ),
            212 => 
            array (
                'id' => 855,
                'question_id' => 184,
                'parent_question_id' => 6,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:01:50',
                'updated_at' => '2025-09-15 17:01:50',
            ),
            213 => 
            array (
                'id' => 860,
                'question_id' => 185,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Tidak',
                'operator' => '=',
                'created_at' => '2025-09-15 17:02:09',
                'updated_at' => '2025-09-15 17:02:09',
            ),
            214 => 
            array (
                'id' => 861,
                'question_id' => 185,
                'parent_question_id' => 2,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:02:09',
                'updated_at' => '2025-09-15 17:02:09',
            ),
            215 => 
            array (
                'id' => 862,
                'question_id' => 185,
                'parent_question_id' => 4,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:02:09',
                'updated_at' => '2025-09-15 17:02:09',
            ),
            216 => 
            array (
                'id' => 863,
                'question_id' => 185,
                'parent_question_id' => 6,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:02:09',
                'updated_at' => '2025-09-15 17:02:09',
            ),
            217 => 
            array (
                'id' => 868,
                'question_id' => 186,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Tidak',
                'operator' => '=',
                'created_at' => '2025-09-15 17:02:19',
                'updated_at' => '2025-09-15 17:02:19',
            ),
            218 => 
            array (
                'id' => 869,
                'question_id' => 186,
                'parent_question_id' => 2,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:02:19',
                'updated_at' => '2025-09-15 17:02:19',
            ),
            219 => 
            array (
                'id' => 870,
                'question_id' => 186,
                'parent_question_id' => 4,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:02:19',
                'updated_at' => '2025-09-15 17:02:19',
            ),
            220 => 
            array (
                'id' => 871,
                'question_id' => 186,
                'parent_question_id' => 6,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:02:19',
                'updated_at' => '2025-09-15 17:02:19',
            ),
            221 => 
            array (
                'id' => 880,
                'question_id' => 188,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Tidak',
                'operator' => '=',
                'created_at' => '2025-09-15 17:03:15',
                'updated_at' => '2025-09-15 17:03:15',
            ),
            222 => 
            array (
                'id' => 881,
                'question_id' => 188,
                'parent_question_id' => 2,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:03:15',
                'updated_at' => '2025-09-15 17:03:15',
            ),
            223 => 
            array (
                'id' => 882,
                'question_id' => 188,
                'parent_question_id' => 4,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:03:15',
                'updated_at' => '2025-09-15 17:03:15',
            ),
            224 => 
            array (
                'id' => 883,
                'question_id' => 188,
                'parent_question_id' => 6,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:03:15',
                'updated_at' => '2025-09-15 17:03:15',
            ),
            225 => 
            array (
                'id' => 888,
                'question_id' => 189,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Tidak',
                'operator' => '=',
                'created_at' => '2025-09-15 17:03:56',
                'updated_at' => '2025-09-15 17:03:56',
            ),
            226 => 
            array (
                'id' => 889,
                'question_id' => 189,
                'parent_question_id' => 2,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:03:56',
                'updated_at' => '2025-09-15 17:03:56',
            ),
            227 => 
            array (
                'id' => 890,
                'question_id' => 189,
                'parent_question_id' => 4,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:03:56',
                'updated_at' => '2025-09-15 17:03:56',
            ),
            228 => 
            array (
                'id' => 891,
                'question_id' => 189,
                'parent_question_id' => 6,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:03:56',
                'updated_at' => '2025-09-15 17:03:56',
            ),
            229 => 
            array (
                'id' => 896,
                'question_id' => 190,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Tidak',
                'operator' => '=',
                'created_at' => '2025-09-15 17:04:25',
                'updated_at' => '2025-09-15 17:04:25',
            ),
            230 => 
            array (
                'id' => 897,
                'question_id' => 190,
                'parent_question_id' => 2,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:04:25',
                'updated_at' => '2025-09-15 17:04:25',
            ),
            231 => 
            array (
                'id' => 898,
                'question_id' => 190,
                'parent_question_id' => 4,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:04:25',
                'updated_at' => '2025-09-15 17:04:25',
            ),
            232 => 
            array (
                'id' => 899,
                'question_id' => 190,
                'parent_question_id' => 6,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:04:25',
                'updated_at' => '2025-09-15 17:04:25',
            ),
            233 => 
            array (
                'id' => 904,
                'question_id' => 191,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Tidak',
                'operator' => '=',
                'created_at' => '2025-09-15 17:05:40',
                'updated_at' => '2025-09-15 17:05:40',
            ),
            234 => 
            array (
                'id' => 905,
                'question_id' => 191,
                'parent_question_id' => 2,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:05:40',
                'updated_at' => '2025-09-15 17:05:40',
            ),
            235 => 
            array (
                'id' => 906,
                'question_id' => 191,
                'parent_question_id' => 4,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:05:40',
                'updated_at' => '2025-09-15 17:05:40',
            ),
            236 => 
            array (
                'id' => 907,
                'question_id' => 191,
                'parent_question_id' => 6,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:05:40',
                'updated_at' => '2025-09-15 17:05:40',
            ),
            237 => 
            array (
                'id' => 912,
                'question_id' => 192,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Tidak',
                'operator' => '=',
                'created_at' => '2025-09-15 17:06:02',
                'updated_at' => '2025-09-15 17:06:02',
            ),
            238 => 
            array (
                'id' => 913,
                'question_id' => 192,
                'parent_question_id' => 2,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:06:02',
                'updated_at' => '2025-09-15 17:06:02',
            ),
            239 => 
            array (
                'id' => 914,
                'question_id' => 192,
                'parent_question_id' => 4,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:06:02',
                'updated_at' => '2025-09-15 17:06:02',
            ),
            240 => 
            array (
                'id' => 915,
                'question_id' => 192,
                'parent_question_id' => 6,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:06:02',
                'updated_at' => '2025-09-15 17:06:02',
            ),
            241 => 
            array (
                'id' => 920,
                'question_id' => 193,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Tidak',
                'operator' => '=',
                'created_at' => '2025-09-15 17:06:11',
                'updated_at' => '2025-09-15 17:06:11',
            ),
            242 => 
            array (
                'id' => 921,
                'question_id' => 193,
                'parent_question_id' => 2,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:06:11',
                'updated_at' => '2025-09-15 17:06:11',
            ),
            243 => 
            array (
                'id' => 922,
                'question_id' => 193,
                'parent_question_id' => 4,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:06:11',
                'updated_at' => '2025-09-15 17:06:11',
            ),
            244 => 
            array (
                'id' => 923,
                'question_id' => 193,
                'parent_question_id' => 6,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:06:11',
                'updated_at' => '2025-09-15 17:06:11',
            ),
            245 => 
            array (
                'id' => 928,
                'question_id' => 194,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Tidak',
                'operator' => '=',
                'created_at' => '2025-09-15 17:06:19',
                'updated_at' => '2025-09-15 17:06:19',
            ),
            246 => 
            array (
                'id' => 929,
                'question_id' => 194,
                'parent_question_id' => 2,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:06:19',
                'updated_at' => '2025-09-15 17:06:19',
            ),
            247 => 
            array (
                'id' => 930,
                'question_id' => 194,
                'parent_question_id' => 4,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:06:19',
                'updated_at' => '2025-09-15 17:06:19',
            ),
            248 => 
            array (
                'id' => 931,
                'question_id' => 194,
                'parent_question_id' => 6,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:06:19',
                'updated_at' => '2025-09-15 17:06:19',
            ),
            249 => 
            array (
                'id' => 936,
                'question_id' => 195,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Tidak',
                'operator' => '=',
                'created_at' => '2025-09-15 17:06:29',
                'updated_at' => '2025-09-15 17:06:29',
            ),
            250 => 
            array (
                'id' => 937,
                'question_id' => 195,
                'parent_question_id' => 2,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:06:29',
                'updated_at' => '2025-09-15 17:06:29',
            ),
            251 => 
            array (
                'id' => 938,
                'question_id' => 195,
                'parent_question_id' => 4,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:06:29',
                'updated_at' => '2025-09-15 17:06:29',
            ),
            252 => 
            array (
                'id' => 939,
                'question_id' => 195,
                'parent_question_id' => 6,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:06:29',
                'updated_at' => '2025-09-15 17:06:29',
            ),
            253 => 
            array (
                'id' => 944,
                'question_id' => 196,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Tidak',
                'operator' => '=',
                'created_at' => '2025-09-15 17:06:59',
                'updated_at' => '2025-09-15 17:06:59',
            ),
            254 => 
            array (
                'id' => 945,
                'question_id' => 196,
                'parent_question_id' => 2,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:06:59',
                'updated_at' => '2025-09-15 17:06:59',
            ),
            255 => 
            array (
                'id' => 946,
                'question_id' => 196,
                'parent_question_id' => 4,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:06:59',
                'updated_at' => '2025-09-15 17:06:59',
            ),
            256 => 
            array (
                'id' => 947,
                'question_id' => 196,
                'parent_question_id' => 6,
                'parent_answer_value' => 'Ya',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:06:59',
                'updated_at' => '2025-09-15 17:06:59',
            ),
            257 => 
            array (
                'id' => 948,
                'question_id' => 197,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-15 17:09:25',
                'updated_at' => '2025-09-15 17:09:25',
            ),
            258 => 
            array (
                'id' => 949,
                'question_id' => 197,
                'parent_question_id' => 2,
                'parent_answer_value' => 'Tidak',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:09:25',
                'updated_at' => '2025-09-15 17:09:25',
            ),
            259 => 
            array (
                'id' => 950,
                'question_id' => 197,
                'parent_question_id' => 4,
                'parent_answer_value' => 'Tidak',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:09:25',
                'updated_at' => '2025-09-15 17:09:25',
            ),
            260 => 
            array (
                'id' => 951,
                'question_id' => 197,
                'parent_question_id' => 6,
                'parent_answer_value' => 'Tidak',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:09:25',
                'updated_at' => '2025-09-15 17:09:25',
            ),
            261 => 
            array (
                'id' => 956,
                'question_id' => 198,
                'parent_question_id' => 1,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-15 17:10:12',
                'updated_at' => '2025-09-15 17:10:12',
            ),
            262 => 
            array (
                'id' => 957,
                'question_id' => 198,
                'parent_question_id' => 2,
                'parent_answer_value' => 'Tidak',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:10:12',
                'updated_at' => '2025-09-15 17:10:12',
            ),
            263 => 
            array (
                'id' => 958,
                'question_id' => 198,
                'parent_question_id' => 4,
                'parent_answer_value' => 'Tidak',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:10:12',
                'updated_at' => '2025-09-15 17:10:12',
            ),
            264 => 
            array (
                'id' => 959,
                'question_id' => 198,
                'parent_question_id' => 6,
                'parent_answer_value' => 'Tidak',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:10:12',
                'updated_at' => '2025-09-15 17:10:12',
            ),
            265 => 
            array (
                'id' => 960,
                'question_id' => 199,
                'parent_question_id' => 197,
                'parent_answer_value' => 'o5',
                'operator' => '=',
                'created_at' => '2025-09-15 17:12:03',
                'updated_at' => '2025-09-15 17:12:03',
            ),
            266 => 
            array (
                'id' => 961,
                'question_id' => 199,
                'parent_question_id' => 198,
                'parent_answer_value' => 'o7',
                'operator' => '=',
                'created_at' => '2025-09-15 17:12:03',
                'updated_at' => '2025-09-15 17:12:03',
            ),
            267 => 
            array (
                'id' => 964,
                'question_id' => 200,
                'parent_question_id' => 197,
                'parent_answer_value' => 'o5',
                'operator' => '!=',
                'created_at' => '2025-09-15 17:13:40',
                'updated_at' => '2025-09-15 17:13:40',
            ),
            268 => 
            array (
                'id' => 966,
                'question_id' => 201,
                'parent_question_id' => 198,
                'parent_answer_value' => 'o7',
                'operator' => '!=',
                'created_at' => '2025-09-15 17:13:55',
                'updated_at' => '2025-09-15 17:13:55',
            ),
            269 => 
            array (
                'id' => 968,
                'question_id' => 202,
                'parent_question_id' => 197,
                'parent_answer_value' => 'o5',
                'operator' => '!=',
                'created_at' => '2025-09-15 17:14:52',
                'updated_at' => '2025-09-15 17:14:52',
            ),
            270 => 
            array (
                'id' => 971,
                'question_id' => 203,
                'parent_question_id' => 198,
                'parent_answer_value' => 'o7',
                'operator' => '!=',
                'created_at' => '2025-09-15 17:15:08',
                'updated_at' => '2025-09-15 17:15:08',
            ),
            271 => 
            array (
                'id' => 972,
                'question_id' => 204,
                'parent_question_id' => 202,
                'parent_answer_value' => 'o7',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:15:49',
                'updated_at' => '2025-09-15 17:15:49',
            ),
            272 => 
            array (
                'id' => 973,
                'question_id' => 204,
                'parent_question_id' => 203,
                'parent_answer_value' => 'o7',
                'operator' => 'ATAU',
                'created_at' => '2025-09-15 17:15:49',
                'updated_at' => '2025-09-15 17:15:49',
            ),
            273 => 
            array (
                'id' => 974,
                'question_id' => 3,
                'parent_question_id' => 2,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-15 17:20:43',
                'updated_at' => '2025-09-15 17:20:43',
            ),
            274 => 
            array (
                'id' => 975,
                'question_id' => 3,
                'parent_question_id' => 2,
                'parent_answer_value' => 'Ya',
                'operator' => '=',
                'created_at' => '2025-09-15 17:20:43',
                'updated_at' => '2025-09-15 17:20:43',
            ),
        ));
        
        
    }
}