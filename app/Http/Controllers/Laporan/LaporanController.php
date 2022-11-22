<?php

namespace App\Http\Controllers\Laporan;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use PDF;

class LaporanController extends Controller
{
    public function exportpdfcategory(){
        //mengambil data dan tampilan dari halaman laporan_pdf
        //data di bawah ini bisa kalian ganti nantinya dengan data dari database

        $data = Category::all();
        $data = PDF::loadview('admin.laporan.laporan_pdf_category', ['data' => $data]);
        //mendownload laporan.pdf
    	return $data->download('laporan.pdf');
    }

    public function exportpdfmenu(){
        //mengambil data dan tampilan dari halaman laporan_pdf
        //data di bawah ini bisa kalian ganti nantinya dengan data dari database

        $data = Menu::all();
        $data = PDF::loadview('admin.laporan.laporan_pdf_menu', ['data' => $data]);
        //mendownload laporan.pdf
    	return $data->download('laporan.pdf');
    }

    public function exportpdfpesanan(){
        //mengambil data dan tampilan dari halaman laporan_pdf
        //data di bawah ini bisa kalian ganti nantinya dengan data dari database

        $data = Pesanan::all();
        $data = PDF::loadview('admin.laporan.laporan_pdf_pesanan', ['data' => $data]);
        //mendownload laporan.pdf
    	return $data->download('laporan.pdf');
    }
}
