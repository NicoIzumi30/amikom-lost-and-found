<?php
namespace App\Http\Controllers\Administrator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function downloadTemplate()
    {
        $file_path = public_path('template/employees_template.xlsx');

        if (file_exists($file_path)) {
            return Response::download($file_path);
        } else {
            abort(404, 'File not found');
        }
    }
}
