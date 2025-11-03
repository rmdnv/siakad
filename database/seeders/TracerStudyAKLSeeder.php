<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TracerStudyAKLSeeder extends Seeder
{
    public function run()
    {
        $students = [
            ['nis' => '20224541', 'nisn' => '0062600721', 'nama' => 'ADETIA SAFITRI'],
            ['nis' => '20224367', 'nisn' => '0069252409', 'nama' => 'AINA IDA YASA'],
            ['nis' => '20224368', 'nisn' => '0079599043', 'nama' => 'AL FIRZAH WAHNA'],
            ['nis' => '20224369', 'nisn' => '0067778635', 'nama' => 'ALFIN RASYID ZAKARIYA'],
            ['nis' => '20224370', 'nisn' => '0067508623', 'nama' => 'ANINDYA SEPTYA RATRI'],
            ['nis' => '20224371', 'nisn' => '0077190771', 'nama' => 'CHOIRUNNISA CAHYATI YUSUF'],
            ['nis' => '20224372', 'nisn' => '0079393352', 'nama' => 'CINDY ARIYANI'],
            ['nis' => '20224373', 'nisn' => '0065242641', 'nama' => 'DHEA AYU SASMITA'],
            ['nis' => '20224374', 'nisn' => '0071564882', 'nama' => 'EKA APRIANI'],
            ['nis' => '20224375', 'nisn' => '0074949260', 'nama' => 'FAISAL FAJAR'],
            ['nis' => '20224376', 'nisn' => '0069338636', 'nama' => 'FAJRI ANSYAH DWI RAMADHAN'],
            ['nis' => '20224377', 'nisn' => '0069464007', 'nama' => 'FANISHA NIRMALA PUTRI'],
            ['nis' => '20224378', 'nisn' => '0066070184', 'nama' => 'GLADYS OKTO WIJAYA'],
            ['nis' => '20224379', 'nisn' => '0076625758', 'nama' => 'HERNAWATI PUSPITA SARI'],
            ['nis' => '20224380', 'nisn' => '0069782069', 'nama' => 'ISMI ULIYAH RAMADHANI'],
            ['nis' => '20224382', 'nisn' => '0075616747', 'nama' => 'KHANSA RAIHANUN'],
            ['nis' => '20224383', 'nisn' => '0076831377', 'nama' => 'LULU SAFINATUN NAZAH'],
            ['nis' => '20224384', 'nisn' => '0148913502', 'nama' => 'MALYQA AL GHINAYA'],
            ['nis' => '20224385', 'nisn' => '0062493561', 'nama' => 'MARINI PUSPITA'],
            ['nis' => '20224386', 'nisn' => '3062713552', 'nama' => 'MARLIANIS RUSTAM'],
            ['nis' => '20224387', 'nisn' => '0077121999', 'nama' => 'MARSYA AULIA ZAHRA'],
            ['nis' => '20224388', 'nisn' => '0063101937', 'nama' => 'MUHAMAD VICKY MALINGKA'],
            ['nis' => '20224389', 'nisn' => '0053640360', 'nama' => 'MUHAMMAD ALFA RICKY HIMAWAN'],
            ['nis' => '20224390', 'nisn' => '0061629228', 'nama' => 'MUHAMMAD LUTFI FABIAN'],
            ['nis' => '20224391', 'nisn' => '0069678564', 'nama' => 'MUHAMMAD MALIQ ZAINI YAHYA'],
            ['nis' => '20224392', 'nisn' => '3069874318', 'nama' => 'MUHAMMAD RANGGA SURYA WIJAYA'],
            ['nis' => '20224539', 'nisn' => '0064646143', 'nama' => 'MUHAMMAD VIKRI HIDAYAT'],
            ['nis' => '20224393', 'nisn' => '0071581199', 'nama' => 'MUZKIYA MAHIRATUN NAZWA'],
            ['nis' => '20224394', 'nisn' => '0065464010', 'nama' => 'NABILA ZALIANTI'],
            ['nis' => '20224395', 'nisn' => '0063538117', 'nama' => 'NADIA NURHALIZAH'],
            ['nis' => '20224396', 'nisn' => '0078165757', 'nama' => 'NADYA JULIANA'],
            ['nis' => '20224397', 'nisn' => '0076150966', 'nama' => 'NADYA RAHMADANI'],
            ['nis' => '20224398', 'nisn' => '0073754783', 'nama' => 'NAYSYA KAYLA AURELIA LUBIS'],
            ['nis' => '20224399', 'nisn' => '0072045226', 'nama' => 'NAZWA NUR AMALINA'],
            ['nis' => '20224400', 'nisn' => '0061116044', 'nama' => 'NAZWA SABILA'],
            ['nis' => '20224401', 'nisn' => '0064410770', 'nama' => 'NURUS SYIFA ALFATONAH'],
            ['nis' => '20224402', 'nisn' => '0066357955', 'nama' => 'PUTRI RIEFTA DAMAYANTI'],
            ['nis' => '20224403', 'nisn' => '0078358671', 'nama' => 'PUTRI ROHMAYANTI'],
            ['nis' => '20224404', 'nisn' => '0077671222', 'nama' => 'PUTRI ZAHRA SALSABILLAH'],
            ['nis' => '20224405', 'nisn' => '0072869752', 'nama' => 'QUEEN FITRIANI SHOFIYYAH'],
            ['nis' => '20214228', 'nisn' => '0065842271', 'nama' => 'QUMALA FARAH APRILIA'],
            ['nis' => '20224406', 'nisn' => '0061682983', 'nama' => 'RAHMA NURHIDAYAH'],
            ['nis' => '20224407', 'nisn' => '0074059724', 'nama' => 'RAISSA AGNIMAYA'],
            ['nis' => '20224408', 'nisn' => '0071691300', 'nama' => 'RANI SALSA BILALDI'],
            ['nis' => '20224409', 'nisn' => '0078502245', 'nama' => 'ROFINATUL JANNAH'],
            ['nis' => '20224410', 'nisn' => '0073938880', 'nama' => 'SITI NURJANAH'],
            ['nis' => '20224411', 'nisn' => '0075265095', 'nama' => 'SITI PADILAH ANDARAWATI'],
            ['nis' => '20224412', 'nisn' => '3068555356', 'nama' => 'SITI QOIRUNISSA BASRI'],
            ['nis' => '20224413', 'nisn' => '0077043158', 'nama' => 'TASYA DIVA APRILIA'],
            ['nis' => '20224414', 'nisn' => '0063616084', 'nama' => 'TSANI FATIMAH NOORAFNI'],
            ['nis' => '20224416', 'nisn' => '0075103967', 'nama' => 'VINA FEBRIANI'],
            ['nis' => '20224417', 'nisn' => '0065630494', 'nama' => 'VIYA RAMADHANI'],
            ['nis' => '20224418', 'nisn' => '0061111816', 'nama' => 'WIDIA TASYANIA'],
            ['nis' => '20224419', 'nisn' => '0072093155', 'nama' => 'WINDI NURWIDA'],
            ['nis' => '20224421', 'nisn' => '0062475334', 'nama' => 'ZAHRA MAULIYA'],
        ];

        foreach ($students as $student) {
            $exists = DB::table('tracer_study')
                ->where('nis', $student['nis'])
                ->exists();

            if (!$exists) {
                DB::table('tracer_study')->insert([
                    'nis'                 => $student['nis'],
                    'nisn'                => $student['nisn'],
                    'nama'                => $student['nama'],
                    'kompetensi_keahlian' => 'Akuntansi dan Keuangan Lembaga',
                    'no_hp'               => '-',
                    'status'              => 'Belum Mengisi',
                    'status_supervisor'   => '-',
                    'updated_at'          => now(),
                ]);
            }
        }
    }
}
