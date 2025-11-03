<?php
namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class StatusChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build($belum, $sedang, $selesai)
    {
        return $this->chart->pieChart()
            ->setTitle('Status Pengisian')
            ->addData([$belum, $sedang, $selesai])
            ->setLabels(['Belum Mengisi', 'Sedang Mengisi', 'Selesai Mengisi'])
            ->setColors(['#9ca3af', '#facc15', '#22c55e'])
            ->setHeight(400)
            ->setWidth(400);
    }
}
