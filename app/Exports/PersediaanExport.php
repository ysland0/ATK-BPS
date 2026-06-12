<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

class PersediaanExport implements FromArray, WithStyles, WithColumnWidths, WithTitle, WithEvents
{
    protected $data;
    protected $dataEndRow;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function title(): string
    {
        return 'Kartu Kendali';
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $sheet = $event->sheet->getDelegate();
                
                // 1. FIX: Cara benar untuk memaksa Excel menampilkan angka nol
                $sheet->getSheetView()->setShowZeros(true);

                // 2. Setting Logo
                $logoPath = public_path('assets/images/logoBPS.png');
                if (!file_exists($logoPath)) $logoPath = public_path('img/logo.png');
                if (file_exists($logoPath)) {
                    $drawing = new Drawing();
                    $drawing->setName('Logo BPS');
                    $drawing->setPath($logoPath);
                    $drawing->setHeight(55);
                    $drawing->setCoordinates('B1');
                    $drawing->setOffsetX(10);
                    $drawing->setOffsetY(5);
                    $drawing->setWorksheet($sheet);
                }
            },
        ];
    }

    public function array(): array
    {
        $barang      = $this->data['barang'];
        $bulanan     = $this->data['bulanan'];
        $logs        = $this->data['logs'];
        $tahun       = $this->data['tahun'];
        $stokAwal    = $barang->stok_awal ?? 0;
        $totalKeluar = array_sum($bulanan);
        $stokAkhir   = $stokAwal - $totalKeluar;

        $rows = [];
        $rows[] = ['', '', '', '', 'KARTU PERSEDIAAN BARANG HABIS PAKAI (ATK/ARK/CS)', '', '', '', '', '', '', '', '', '', '', '', ''];
        $rows[] = ['', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''];
        $rows[] = ['', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''];

        // Row 4: Instansi
        $rows[] = ['BPS KOTA SEMARANG', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''];

        // Row 5-7: Info Barang
        $rows[] = ['Jl. Inspeksi Kali No. 1 Semarang', '', '', '', 'Nama Barang', '', ': ' . $barang->nama_barang, '', '', '', '', '', 'Halaman', '', ': 1', '', ''];
        $rows[] = ['', '', '', '', 'Kode Barang', '', ': ' . ($barang->kode_barang ?? '-'), '', '', '', '', '', 'Program', '', ': -', '', ''];
        $rows[] = ['', '', '', '', 'Satuan Barang', '', ': ' . ($barang->satuan ?? '-'), '', '', '', '', '', 'Tahun', '', ': ' . $tahun, '', ''];

        $rows[] = array_fill(0, 17, ''); 

        // Row 9-10: Header Tabel 1
        $rows[] = ['Banyaknya Pengeluaran Tiap-Tiap Bulan', '', '', '', '', '', '', '', '', '', '', '', 'Jumlah Pengeluaran', 'Stok Awal', '', 'Stok Akhir', ''];
        $rows[] = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des', '', '', '', '', ''];

        $dataBulan = [];
        for ($m = 1; $m <= 12; $m++) { 
            $val = $bulanan[$m] ?? 0;
            $dataBulan[] = ($val == 0) ? "0" : $val; 
        }
        $dataBulan[] = ($totalKeluar == 0) ? "0" : $totalKeluar;
        $dataBulan[] = ($stokAwal == 0) ? "0" : $stokAwal; 
        $dataBulan[] = ""; 
        $dataBulan[] = ($stokAkhir == 0) ? "0" : $stokAkhir; 
        $dataBulan[] = ""; 
        $rows[] = $dataBulan;

        $rows[] = array_fill(0, 17, ''); 

        // Row 12: Header Tabel 2
        $rows[] = ['No.', 'No. Bon / Factur', '', 'Tgl M/K', '', 'Uraian Pemasukan / Pengeluaran', '', '', '', '', '', 'Harga Satuan (Rp)', '', 'Masuk (M)', 'Keluar (K)', 'Sisa Barang', ''];
        $rows[] = ['(1)', '(2)', '', '(3)', '', '(4)', '', '', '', '', '', '(5)', '', '(6)', '(7)', '(8)', ''];

        // Row 15: Stok Awal Tabel 2
        $rows[] = ['', '-', '', '', '', 'Stok Awal Tahun ' . $tahun, '', '', '', '', '', '', '', '', '', ($stokAwal == 0 ? "0" : $stokAwal), ''];

        // Row 16+: Data Logs
        $no = 1;
        foreach ($logs as $log) {
            $rows[] = [
                $no++, $log->bukti ?? '-', '', \Carbon\Carbon::parse($log->tanggal)->format('d/m/Y'), '',
                $log->uraian ?? '-', '', '', '', '', '', '', '',
                ($log->masuk == 0 ? "0" : $log->masuk), 
                ($log->keluar == 0 ? "0" : $log->keluar), 
                ($log->sisa == 0 ? "0" : $log->sisa), 
                ''
            ];
        }

        $curr = count($logs);
        for ($i = $curr + 1; $i <= 10; $i++) {
            $rows[] = [$i, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''];
        }

        $this->dataEndRow = 15 + max($curr, 10);

        // Tanda Tangan (Semarang, 15 Mei 2026)
        $rows[] = array_fill(0, 17, '');
        $rows[] = ['Mengetahui,', '', '', '', '', '', '', '', '', '', 'Semarang, ' . \Carbon\Carbon::now()->locale('id')->isoFormat('D MMMM YYYY'), '', '', '', '', '', ''];
        $rows[] = ['Kepala Subbagian Umum', '', '', '', '', '', '', '', '', '', 'Petugas Persediaan', '', '', '', '', '', ''];
        $rows[] = array_fill(0, 17, '');
        $rows[] = array_fill(0, 17, '');
        $rows[] = ['IRMA WULANDARI', '', '', '', '', '', '', '', '', '', 'HARTANTO ADISATRIANTO', '', '', '', '', '', ''];
        $rows[] = ['NIP. 19880128 199403 2-01', '', '', '', '', '', '', '', '', '', 'NIP. 19780922 199126 1-02', '', '', '', '', '', ''];

        return $rows;
    }

    public function columnWidths(): array
    {
        return [
            'A' => 6, 'B' => 7, 'C' => 7, 'D' => 6, 'E' => 6, 'F' => 9,
            'G' => 9, 'H' => 9, 'I' => 9, 'J' => 9, 'K' => 9, 'L' => 9,
            'M' => 16, 'N' => 9, 'O' => 9, 'P' => 9, 'Q' => 9,
        ];
    }

    public function styles(Worksheet $sheet): array
    {
        
        $sheet->mergeCells('E1:Q3');
        $sheet->mergeCells('A4:D4');
        $sheet->mergeCells('A5:D5');
        $sheet->getStyle('A5')->getFont()->setSize(10); 
        
        $sheet->mergeCells('G5:L5'); $sheet->mergeCells('O5:Q5');
        $sheet->mergeCells('G6:L6'); $sheet->mergeCells('O6:Q6');
        $sheet->mergeCells('G7:L7'); $sheet->mergeCells('O7:Q7');

        $sheet->mergeCells('A9:L9'); 
        $sheet->mergeCells('M9:M10'); 
        $sheet->mergeCells('N9:O10'); 
        $sheet->mergeCells('P9:Q10'); 
        $sheet->mergeCells('N11:O11');
        $sheet->mergeCells('P11:Q11');

        for ($i = 13; $i <= $this->dataEndRow; $i++) {
            $sheet->mergeCells("B{$i}:C{$i}"); 
            $sheet->mergeCells("D{$i}:E{$i}"); 
            $sheet->mergeCells("F{$i}:K{$i}"); 
            $sheet->mergeCells("L{$i}:M{$i}"); 
            $sheet->mergeCells("P{$i}:Q{$i}"); 
        }

        $sheet->getStyle('A11:Q11')->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_NUMBER);
        $sheet->getStyle('N15:Q' . $this->dataEndRow)->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_NUMBER);

        $sheet->getStyle('E1')->getFont()->setBold(true)->setSize(14);
        $sheet->getStyle('E1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        
        $sheet->getStyle('A9:Q11')->applyFromArray([
            'borders' => ['allBorders' => ['borderStyle' => Border::BORDER_THIN]],
            'alignment' => ['horizontal' => Alignment::HORIZONTAL_CENTER, 'vertical' => Alignment::VERTICAL_CENTER],
            'font' => ['size' => 9]
        ]);

        $sheet->getStyle('A9')->getFont()->setBold(true);
        
        $sheet->getStyle('A13:Q'.$this->dataEndRow)->applyFromArray([
            'borders' => ['allBorders' => ['borderStyle' => Border::BORDER_THIN]],
           'alignment' => ['vertical' => Alignment::VERTICAL_CENTER],
            'font' => ['size' => 9]
        ]);
        
        $sheet->getStyle('A13:A'.$this->dataEndRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('A13:Q14')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('A13:Q14')->getFont()->setBold(true);

        $ttd = $this->dataEndRow + 2;
        $sheet->mergeCells("A{$ttd}:D{$ttd}"); // Mengetahui
        $sheet->mergeCells("K{$ttd}:Q{$ttd}"); // Semarang, ...
        
        $ttd1 = $ttd + 1;
        $sheet->mergeCells("A{$ttd1}:D{$ttd1}"); // Jabatan Kiri
        $sheet->mergeCells("K{$ttd1}:Q{$ttd1}"); // Jabatan Kanan

        $ttdNama = $ttd1 + 3;
        $sheet->mergeCells("A{$ttdNama}:D{$ttdNama}"); // Nama Kiri
        $sheet->mergeCells("K{$ttdNama}:Q{$ttdNama}"); // Nama Kanan

        $ttdNip = $ttdNama + 1;
        $sheet->mergeCells("A{$ttdNip}:D{$ttdNip}"); // NIP Kiri
        $sheet->mergeCells("K{$ttdNip}:Q{$ttdNip}"); // NIP Kanan

        $sheet->getStyle("A{$ttd}:Q".($ttdNip))->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle("A{$ttdNama}:Q{$ttdNama}")->getFont()->setBold(true)->setUnderline(true);

        return [];
    }
}