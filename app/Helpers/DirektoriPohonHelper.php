<?php

namespace App\Helpers;

class DirektoriPohonHelper
{
    public function buatPohon($direktori): array
    {
        $bukaDirektori = opendir($direktori);

        $data = [];

        while (($bacaDirektori = readdir($bukaDirektori)) !== false) {
            // lanjutkan looping jika $bacaDirektori berupa ./ atau ../
            if ($bacaDirektori === '.' || $bacaDirektori === '..') {
                continue;
            }

            $namaBerkas = sprintf('%s/%s', $direktori, $bacaDirektori);

            // periksa apakah $namaBerkas berupa direktori atau bukan
            if (is_dir($namaBerkas)) {
                $data[] = [
                    'children' => $this->buatPohon($namaBerkas),
                    'icon' => 'ti ti-folder',
                    'text' => $bacaDirektori
                ];
            } else {
                $data[] = [
                    'icon' => 'ti ti-photo',
                    'text' => $bacaDirektori
                ];
            }
        }

        closedir($bukaDirektori);

        return $data;
    }
}
