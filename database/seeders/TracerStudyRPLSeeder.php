<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TracerStudyRPLSeeder extends Seeder
{
    public function run()
    {
        $students = [
            ['nis' => '20224499', 'nisn' => '0065502833', 'nama' => 'ADJIE SANTIKA PRATAMA'],
            ['nis' => '20224500', 'nisn' => '0072588532', 'nama' => 'AHMAD NIZAM AMRULLAH'],
            ['nis' => '20224501', 'nisn' => '0065853290', 'nama' => 'AHMAD SUJANA'],
            ['nis' => '20224502', 'nisn' => '0068386422', 'nama' => 'ALFIAN FERDIANSYAH'],
            ['nis' => '20224503', 'nisn' => '0067687628', 'nama' => 'ANGGI RAHMADANI'],
            ['nis' => '20224505', 'nisn' => '0062075117', 'nama' => 'BINTANG RAHDIKAL'],
            ['nis' => '20224506', 'nisn' => '0066035924', 'nama' => 'DIKI RAHMAWAN'],
            ['nis' => '20224507', 'nisn' => '0068201839', 'nama' => 'DWI SAPUTRA'],
            ['nis' => '20224508', 'nisn' => '0069823868', 'nama' => 'ERLANGGA TIRTA MAHAMERU'],
            ['nis' => '20224509', 'nisn' => '0062840628', 'nama' => 'FABIAN KURNIAWAN'],
            ['nis' => '20224510', 'nisn' => '0063949671', 'nama' => 'FADLAH NUR AINI AFIFAH'],
            ['nis' => '20224511', 'nisn' => '0067834272', 'nama' => 'FARREL ARYA PRATAMA RAMADHAN'],
            ['nis' => '20224512', 'nisn' => '0058398560', 'nama' => 'IHSAN HIDAYAT'],
            ['nis' => '20224513', 'nisn' => '0078603243', 'nama' => 'INDAKA RAHMAN'],
            ['nis' => '20224514', 'nisn' => '0066524855', 'nama' => 'IRSYAD HIDAYAT'],
            ['nis' => '20224515', 'nisn' => '0061537000', 'nama' => 'IRVAN PUTRA RAMADHAN'],
            ['nis' => '20234543', 'nisn' => '0061648151', 'nama' => 'KHAIKAL MANAFI'],
            ['nis' => '20224516', 'nisn' => '0075142028', 'nama' => 'MALIK ALGHOZI'],
            ['nis' => '20224517', 'nisn' => '0073995625', 'nama' => 'MOCHAMAD RIZKI AGIANTORO'],
            ['nis' => '20224518', 'nisn' => '0075629495', 'nama' => 'MOHAMMAD RIZQI MUBAROK'],
            ['nis' => '20224519', 'nisn' => '0066812857', 'nama' => 'MUHAMAD RAYHAN'],
            ['nis' => '20224520', 'nisn' => '0077441233', 'nama' => 'MUHAMMAD ABIMANYU HILMY NABIL'],
            ['nis' => '20224521', 'nisn' => '0078763294', 'nama' => 'MUHAMMAD ALEXSY BANKS'],
            ['nis' => '20224522', 'nisn' => '0077569419', 'nama' => 'MUHAMMAD FACHRI AL HUSEIN'],
            ['nis' => '20224523', 'nisn' => '0077695501', 'nama' => 'MUHAMMAD FADZRI'],
            ['nis' => '20224524', 'nisn' => '3072150193', 'nama' => 'MUHAMMAD FATHURRAHMAN'],
            ['nis' => '20224525', 'nisn' => '0078059716', 'nama' => 'MUHAMMAD LINTAR TRIPANDAWA HARAHAP'],
            ['nis' => '20224526', 'nisn' => '0067278440', 'nama' => 'MUHAMMAD NABIL ALZIKRA'],
            ['nis' => '20224527', 'nisn' => '0048465807', 'nama' => 'MUHAMMAD SYAHREZA'],
            ['nis' => '20224528', 'nisn' => '0065737735', 'nama' => 'NAUFAL AZIZ SAPUTRA'],
            ['nis' => '20224529', 'nisn' => '0033846583', 'nama' => 'RAFII AHMAD PAHLEVY'],
            ['nis' => '20224530', 'nisn' => '0072084144', 'nama' => 'RAIHAN BAGUS ARADZAK'],
            ['nis' => '20224531', 'nisn' => '0069066070', 'nama' => 'RIANA NUR FAUZIAH'],
            ['nis' => '20224532', 'nisn' => '0062498863', 'nama' => 'RYAN AGESTA'],
            ['nis' => '20224533', 'nisn' => '0071192201', 'nama' => 'SAEFULLOH JATI ADI NINGRAT'],
            ['nis' => '20224534', 'nisn' => '0069169442', 'nama' => 'SATRIO PUJI HARTANTO'],
            ['nis' => '20224535', 'nisn' => '0064973253', 'nama' => 'SYADAM DAFA IRSAN SYAHPUTRA'],
            ['nis' => '20224536', 'nisn' => '0077067477', 'nama' => 'SYAKILLAH SYAKIB'],
            ['nis' => '20224537', 'nisn' => '0061778168', 'nama' => 'VERA ROSMALIA'],
            ['nis' => '20224538', 'nisn' => '0071096900', 'nama' => 'WANDA KHAIRINA'],
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
                    'kompetensi_keahlian' => 'Rekrayasa Perangkat Lunak',
                    'no_hp'               => '-',
                    'status'              => 'Belum Mengisi',
                    'status_supervisor'   => '-',
                    'updated_at'          => now(),
                ]);
            }
        }
    }
}
