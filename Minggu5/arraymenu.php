<?php
    $menu = [
        ["nama" => "Beranda"],
        [
            "nama" => "Berita", 
            "subMenu" => [
                [
                    "nama" => "Wisata", 
                    "subMenu" => [
                        ["nama" => "Pantai"],
                        ["nama" => "Gunung"]
                    ]
                ],
                [
                    "nama" => "Kuliner"
                ],
                [
                    "nama" => "Hiburan"
                ]
            ]
        ],
        ["nama" => "Tentang"],
        ["nama" => "Kontak"]
    ];

    function tampilkanMenuBertingkat(array $menu) {
        echo "<ul>";
            foreach ($menu as $item) {
                echo "<li> {$item['nama']} </li>";
                
                $subMenu = false;
                foreach ($item as $key => $value) {
                    if ($key == 'subMenu' && $value != null) {
                        $subMenu = true;
                        break;
                    }
                }
                
                if ($subMenu) {
                    tampilkanMenuBertingkat($item['subMenu']);
                }

            }
        echo "</ul>";
    }

    tampilkanMenuBertingkat($menu);
?>