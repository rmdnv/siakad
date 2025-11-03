<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TracerStudyMPSeeder extends Seeder
{
    public function run()
    {
        $students = [
            ['nis' => '20224422', 'nisn' => '0062696476', 'nama' => 'AHMAD DANI NUR'],
            ['nis' => '20224423', 'nisn' => '0068003497', 'nama' => 'AHMAD KAFI'],
            ['nis' => '20224424', 'nisn' => '0066346752', 'nama' => 'AINUN TINTANIA NABILLAH'],
            ['nis' => '20224425', 'nisn' => '0064837134', 'nama' => 'ALISYANA ZAHIRA SYAFRUDIN'],
            ['nis' => '20224426', 'nisn' => '0073973156', 'nama' => 'ALYA AZAHRA'],
            ['nis' => '20224427', 'nisn' => '0062350430', 'nama' => 'ANDIRA PRATAMA PUTRI'],
            ['nis' => '20224428', 'nisn' => '0072105732', 'nama' => 'ANGGI SWARLIYA'],
            ['nis' => '20224431', 'nisn' => '0074769202', 'nama' => 'ANNISA MUTIARA'],
            ['nis' => '20224432', 'nisn' => '0034340412', 'nama' => 'BELLA SAFIRA'],
            ['nis' => '20224433', 'nisn' => '0065442154', 'nama' => 'BILQIS SUCI FATIMAH'],
            ['nis' => '20224434', 'nisn' => '0072264531', 'nama' => 'CEYSA OLIVIA'],
            ['nis' => '20224435', 'nisn' => '0077360743', 'nama' => 'DALVA JAHRATUL FAFZIAH HAERUNISA'],
            ['nis' => '20224436', 'nisn' => '0062825183', 'nama' => 'DESY ASHARI'],
            ['nis' => '20224437', 'nisn' => '0076699664', 'nama' => 'DEWI MAYA ROSIYANTI'],
            ['nis' => '20224438', 'nisn' => '0069809234', 'nama' => 'ELIYANA PUTRI'],
            ['nis' => '20224439', 'nisn' => '0079431631', 'nama' => 'FAHMI PRATAMA PUTRA'],
            ['nis' => '20224440', 'nisn' => '0077199387', 'nama' => 'FANY ANGGRAENI'],
            ['nis' => '20224441', 'nisn' => '0077960903', 'nama' => 'FILIA HANAA\'DZAKIYYAH'],
            ['nis' => '20224442', 'nisn' => '0062606633', 'nama' => 'FITRIAH RAHMADANI'],
            ['nis' => '20224443', 'nisn' => '0073879786', 'nama' => 'HAFNA ILMY MUHALLA'],
            ['nis' => '20224444', 'nisn' => '0066598736', 'nama' => 'IKHIFIYATUL KHASANAH'],
            ['nis' => '20214222', 'nisn' => '0015789902', 'nama' => 'IKSAN'],
            ['nis' => '20224445', 'nisn' => '0076933159', 'nama' => 'ILSI PUTRI TALENTA'],
            ['nis' => '20224446', 'nisn' => '0069428881', 'nama' => 'IMAM AMIN NULLAH'],
            ['nis' => '20224366', 'nisn' => '0069671689', 'nama' => 'IQBAL AINUR ROFIQ'],
            ['nis' => '20224447', 'nisn' => '0075435745', 'nama' => 'ITA PURNAMASARI'],
            ['nis' => '20224448', 'nisn' => '0067763734', 'nama' => 'JESICA INDIRA AGUSTINA'],
            ['nis' => '20224449', 'nisn' => '0065106712', 'nama' => 'KANAYA PUTRI IRAWAN'],
            ['nis' => '20224451', 'nisn' => '0067644574', 'nama' => 'LARAS SATI AYUNING TIAS'],
            ['nis' => '20224452', 'nisn' => '0077345041', 'nama' => 'LILI NURUL AZNI'],
            ['nis' => '20224454', 'nisn' => '0074473835', 'nama' => 'MAYKA PUTRI'],
            ['nis' => '20224455', 'nisn' => '0074054978', 'nama' => 'MAYSILLA AFRIJA'],
            ['nis' => '20224456', 'nisn' => '0076186620', 'nama' => 'MEDINA PUTRI APRILIA'],
            ['nis' => '20224457', 'nisn' => '0067209611', 'nama' => 'MEISKA LARASATI'],
            ['nis' => '20224458', 'nisn' => '0067352568', 'nama' => 'MUHAMAD IZAR PRATAMA'],
            ['nis' => '20224459', 'nisn' => '0073679690', 'nama' => 'MUHAMMAD SAENI'],
            ['nis' => '20224460', 'nisn' => '0071022582', 'nama' => 'MUTIARA SANI'],
            ['nis' => '20224461', 'nisn' => '0079150332', 'nama' => 'NABILA KAMELIA PUTRI IRFANA'],
            ['nis' => '20224462', 'nisn' => '3063412001', 'nama' => 'NADINA RAHMA ILHAMI'],
            ['nis' => '20224463', 'nisn' => '0071569648', 'nama' => 'NAILA MUTHIA RAMADHANI'],
            ['nis' => '20224464', 'nisn' => '0062373321', 'nama' => 'NAILAH NURUL FAJRIAH'],
            ['nis' => '20224465', 'nisn' => '0065777509', 'nama' => 'NAJWA ASYA ASYAHRA'],
            ['nis' => '20224466', 'nisn' => '0063075502', 'nama' => 'NASYWA QUEENA AZHALEIA'],
            ['nis' => '20224467', 'nisn' => '0078759734', 'nama' => 'NAYLA ADELIA PUTRI'],
            ['nis' => '20224469', 'nisn' => '0072163570', 'nama' => 'NUR AZIZAH'],
            ['nis' => '20224470', 'nisn' => '0076777403', 'nama' => 'NURUL ARIFIN'],
            ['nis' => '20224471', 'nisn' => '0063651020', 'nama' => 'PUTRI DINI AMINARTI'],
            ['nis' => '20224472', 'nisn' => '0062448702', 'nama' => 'PUTRI NURLAILA ISWANINGRUM'],
            ['nis' => '20214354', 'nisn' => '0038275290', 'nama' => 'RAHMA TIOFANI LESTARI'],
            ['nis' => '20224473', 'nisn' => '0069367956', 'nama' => 'RAHMAH PRIHARTINI'],
            ['nis' => '20224474', 'nisn' => '0065933171', 'nama' => 'RATNA SARI DEWI'],
            ['nis' => '20224475', 'nisn' => '3078323894', 'nama' => 'REVALISA ANGGRAINI'],
            ['nis' => '20224476', 'nisn' => '0075260441', 'nama' => 'REVANIE ARISSA'],
            ['nis' => '20224477', 'nisn' => '0078660291', 'nama' => 'RIFQOH ZAQIYAH ZALFA SIREGAR'],
            ['nis' => '20224478', 'nisn' => '0072449037', 'nama' => 'RIZKYA PUTRI ARIFIANI'],
            ['nis' => '20224479', 'nisn' => '3064135952', 'nama' => 'ROSITA DZAHRA'],
            ['nis' => '20224480', 'nisn' => '0071175393', 'nama' => 'SAFINA AZZAHRA'],
            ['nis' => '20224481', 'nisn' => '3081736715', 'nama' => 'SAHARA TRI FEBRIYANI'],
            ['nis' => '20224542', 'nisn' => '0064751065', 'nama' => 'SAIFUL ANWAR'],
            ['nis' => '20224482', 'nisn' => '0079301538', 'nama' => 'SALWA SAKILAH'],
            ['nis' => '20224483', 'nisn' => '0065915746', 'nama' => 'SEPTI RAHAYU NINGSIH'],
            ['nis' => '20224484', 'nisn' => '0055903839', 'nama' => 'SEPTIANA PUTRI UTAMI'],
            ['nis' => '20224485', 'nisn' => '0064483660', 'nama' => 'SHERAVINA HANUM LAUDYA'],
            ['nis' => '20224486', 'nisn' => '0063730840', 'nama' => 'SITI JAHRA'],
            ['nis' => '20224487', 'nisn' => '0067798759', 'nama' => 'SITI NUR AZIZAH'],
            ['nis' => '20224488', 'nisn' => '0062430224', 'nama' => 'SITI NURAISYAH'],
            ['nis' => '20224489', 'nisn' => '0079997601', 'nama' => 'SOVI CAHYA OKTAVIANTI'],
            ['nis' => '20224491', 'nisn' => '0035487521', 'nama' => 'SYAWALUDIN FIRZA'],
            ['nis' => '20224492', 'nisn' => '0138055902', 'nama' => 'TYARA PUJA ANDARANETA'],
            ['nis' => '20224493', 'nisn' => '0074019965', 'nama' => 'UMMU KHUZAIMAH'],
            ['nis' => '20224496', 'nisn' => '0077882675', 'nama' => 'WULAN WENINGSIH'],
            ['nis' => '20224497', 'nisn' => '0061844482', 'nama' => 'ZECIKA'],
            ['nis' => '20224498', 'nisn' => '0072759197', 'nama' => 'ZIKTRA NAUFAL RAKHA ADHIANSYAH'],

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
                    'kompetensi_keahlian' => 'Manajemen Perkantoran',
                    'no_hp'               => '-',
                    'status'              => 'Belum Mengisi',
                    'status_supervisor'   => '-',
                    'updated_at'          => now(),
                ]);
            }
        }
    }
}
