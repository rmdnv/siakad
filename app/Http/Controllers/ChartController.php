<?php
namespace App\Http\Controllers;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class ChartController extends Controller
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function index()
    {
        $pie = $this->chart->pieChart()
            ->setTitle('Persentase BMW')
            ->setSubtitle('Bekerja, Melanjutkan, dan Wirausaha')
            ->addData([48.8, 11.6, 7.0, 25.6, 1, 4.7])
            ->setLabels(['Bekerja', 'Wirausaha', 'Pengangguran', 'Melanjutkan Studi', 'Mengurus Rumah Tangga', 'Lainnya']);

        $donut = $this->chart->donutChart()
            ->setTitle('Donut Chart Example')
            ->addData([55, 25, 20])
            ->setLabels(['X', 'Y', 'Z']);

        $radial = $this->chart->radialChart()
            ->setTitle('Radial Chart Example')
            ->addData([75])
            ->setLabels(['Progress']);

        $polar = $this->chart->polarAreaChart()
            ->setTitle('Polar Area Example')
            ->addData([10, 20, 30, 40])
            ->setLabels(['Red', 'Blue', 'Green', 'Yellow']);

        $line = $this->chart->lineChart()
            ->setTitle('Line Chart Example')
            ->addData('Sales 2025', [10, 15, 20, 25, 30])
            ->setXAxis(['Jan', 'Feb', 'Mar', 'Apr', 'May']);

        $area = $this->chart->areaChart()
            ->setTitle('Area Chart Example')
            ->addData('Revenue', [20, 40, 25, 50, 30])
            ->setXAxis(['Jan', 'Feb', 'Mar', 'Apr', 'May']);

        $bar = $this->chart->barChart()
            ->setTitle('Bar Chart Example')
            ->addData('Population', [100, 200, 300])
            ->setXAxis(['City A', 'City B', 'City C']);

        $hbar = $this->chart->horizontalBarChart()
            ->setTitle('Horizontal Bar Example')
            ->addData('Votes', [50, 70, 30])
            ->setXAxis(['Option 1', 'Option 2', 'Option 3']);

        $heatmap = $this->chart->heatMapChart()
            ->setTitle('Heatmap Example')
            ->addData('Metric 1', [1, 2, 3, 4])
            ->addData('Metric 2', [2, 4, 6, 8])
            ->setXAxis(['Q1', 'Q2', 'Q3', 'Q4']);

        $radar = $this->chart->radarChart()
            ->setTitle('Radar Chart Example')
            ->addData('Scores', [80, 90, 70, 60, 85])
            ->setLabels(['Math', 'Science', 'English', 'History', 'Art']);

        return view('charts.index', compact(
            'pie', 'donut', 'radial', 'polar', 'line',
            'area', 'bar', 'hbar', 'heatmap', 'radar'
        ));
    }
}
