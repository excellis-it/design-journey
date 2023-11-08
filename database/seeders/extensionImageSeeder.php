<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ExtensionImage;

class extensionImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $extensions = [
            [
                'extension' => 'accdb',
                'name' => 'Microsoft Access database file',
                'image' => 'extension/accdb.jpg',
            ],
            [
                'extension' => 'accde',
                'name' => 'Microsoft Access execute-only file',
                'image' => 'extension/accde.png',
            ],
            [
                'extension' => 'accdr',
                'name' => 'Microsoft Access runtime database',
                'image' => 'extension/accdr.png',
            ],
            [
                'extension' => 'accdt',
                'name' => 'Microsoft Access database template',
                'image' => 'extension/accdt.png',
            ],
            [
                'extension' => 'aif',
                'name' => 'Audio Interchange File format file',
                'image' => 'extension/aif.png',
            ],
            [
                'extension' => 'bat',
                'name' => 'PC batch file',
                'image' => 'extension/bat.png',
            ],
            [
                'extension' => 'bin',
                'name' => 'Binary compressed file',
                'image' => 'extension/bin.png',
            ],
            [
                'extension' => 'bmp',
                'name' => 'Bitmap file',
                'image' => 'extension/bmp.png',
            ],
            [
                'extension' => 'cab',
                'name' => 'Windows Cabinet file',
                'image' => 'extension/cab.png',
            ],
            [
                'extension' => 'csv',
                'name' => 'Comma-separated values file',
                'image' => 'extension/csv.png',
            ],
            [
                'extension' => 'dif',
                'name' => 'Spreadsheet data interchange format file',
                'image' => 'extension/dif.png',
            ],
            [
                'extension' => 'dll',
                'name' => 'Dynamic Link Library file',
                'image' => 'extension/dll.png',
            ],
            [
                'extension' => 'zip',
                'name' => 'Compressed file',
                'image' => 'extension/zip.png',

            ],
            [
                'extension' => 'txt',
                'name' => 'Unformatted text file',
                'image' => 'extension/txt.png',
            ],
            [
                'extension' => 'tmp',
                'name' => 'Temporary data file',
                'image' => 'extension/tmp.png',
            ],
            [
                'extension' => 'rar',
                'name' => 'Roshal Archive compressed file',
                'image' => 'extension/rar.png',
            ],
            [
                'extension' => 'ppt',
                'name' => 'Microsoft PowerPoint format before PowerPoint 2007',
                'image' => 'extension/ppt.png',
            ],
            [
                'extension' => 'png',
                'name' => 'Portable Network Graphics file',
                'image' => 'extension/png.png',
            ],
            [
                'extension' => 'pdf',
                'name' => 'Portable Document Format file',
                'image' => 'extension/pdf.png',
            ],
            [
                'extension' => 'mp4',
                'name' => 'MPEG 4 video',
                'image' => 'extension/mp4.png',
            ],
            [
                'extension' => 'mp3',
                'name' => 'MPEG layer 3 audio file',
                'image' => 'extension/mp3.png',
            ],
            [
                'extension' => 'jpg',
                'name' => 'Joint Photographic Experts Group photo file',
                'image' => 'extension/jpg.png',
            ],
            [
                'extension' => 'html',
                'name' => 'Hypertext markup language page',
                'image' => 'extension/html.png',
            ],
            [
                'extension' => 'gif',
                'name' => 'Graphical Interchange Format file',
                'image' => 'extension/gif.png',
            ],
            [
                'extension' => 'exe',
                'name' => 'Executable program file',
                'image' => 'extension/exe.png',
            ],
            [
                'extension' => 'docx',
                'name' => 'Microsoft Word document file',
                'image' => 'extension/docx.png',
            ],
            [
                'extension' => 'doc',
                'name' => 'Microsoft Word document before Word 2007',
                'image' => 'extension/doc.png',
            ],
        ];

        foreach ($extensions as $extension) {
            ExtensionImage::create($extension);
        }
    }
}
