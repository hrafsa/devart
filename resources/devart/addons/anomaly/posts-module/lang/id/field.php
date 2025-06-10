<?php

return [
    'name'             => [
        'name'         => 'Nama',
        'instructions' => [
            'types'      => 'Tentukan nama deskriptif singkat untuk jenis postingan ini.',
            'categories' => 'Tentukan nama deskriptif singkat untuk kategori ini.',
        ],
    ],
    'title'            => [
        'name'         => 'Judul',
        'instructions' => 'Tentukan judul deskriptif singkat untuk postingan ini.',
    ],
    'slug'             => [
        'name'         => 'Slug',
        'instructions' => [
            'types'      => 'Slug digunakan dalam membuat tabel database untuk postingan jenis ini.',
            'categories' => 'Slug digunakan dalam membangun URL kategori.',
            'posts'      => 'Slug digunakan dalam membangun URL postingan.',
        ],
    ],
    'description'      => [
        'name'         => 'Deskripsi',
        'instructions' => [
            'types'      => 'Jelaskan secara singkat jenis postingan.',
            'categories' => 'Jelaskan secara singkat kategori.',
        ],
        'warning'      => 'Ini mungkin atau mungkin tidak ditampilkan secara publik tergantung pada bagaimana website Anda dibangun.',
    ],
    'summary'          => [
        'name'         => 'Ringkasan',
        'instructions' => 'Tulis ringkasan singkat untuk memperkenalkan postingan ini.',
    ],
    'category'         => [
        'name'         => 'Kategori',
        'instructions' => 'Pilih kategori mana yang dimiliki postingan ini.',
    ],
    'meta_title'       => [
        'name'         => 'Meta Title',
        'instructions' => 'Tentukan judul SEO.',
        'warning'      => [
            'posts'      => 'Judul postingan akan digunakan secara default.',
            'types'      => 'Nama jenis akan digunakan secara default.',
            'categories' => 'Nama kategori akan digunakan secara default.',
        ],
    ],
    'meta_description' => [
        'name'         => 'Meta Description',
        'instructions' => 'Tentukan deskripsi SEO.',
    ],
    'theme_layout'     => [
        'name'         => 'Tata Letak Tema',
        'instructions' => 'Tentukan tata letak tema untuk membungkus <strong>tata letak postingan</strong>.',
    ],
    'layout'           => [
        'name'         => 'Tata Letak Postingan',
        'instructions' => 'Tata letak digunakan untuk menampilkan konten postingan.',
    ],
    'tags'             => [
        'name'         => 'Tag',
        'instructions' => 'Tentukan tag organisasi apa pun untuk membantu mengelompokkan postingan Anda dengan yang lain.',
    ],
    'enabled'          => [
        'name'         => 'Aktif',
        'label'        => 'Apakah postingan ini aktif?',
        'instructions' => 'Jika dinonaktifkan, Anda masih dapat mengakses tautan pratinjau aman di panel kontrol.',
        'warning'      => 'Postingan ini harus diaktifkan sebelum dapat dilihat <strong>secara publik</strong>.',
    ],
    'featured'         => [
        'name'         => 'Unggulan',
        'label'        => 'Apakah ini postingan unggulan?',
        'instructions' => 'Postingan unggulan dapat digunakan untuk menarik perhatian ke postingan tertentu.',
        'warning'      => 'Ini mungkin atau mungkin tidak berpengaruh tergantung pada bagaimana website Anda dibangun.',
    ],
    'publish_at'       => [
        'name'         => 'Tanggal/Waktu Publikasi',
        'instructions' => 'Tentukan tanggal/waktu publikasi untuk postingan ini.',
        'warning'      => 'Jika diatur ke masa depan, postingan ini tidak akan terlihat sampai saat itu.',
    ],
    'author'           => [
        'name'         => 'Penulis',
        'instructions' => 'Tentukan penulis yang ditampilkan secara publik dari postingan ini.',
    ],
    'status'           => [
        'name'   => 'Status',
        'option' => [
            'live'      => 'Aktif',
            'draft'     => 'Draft',
            'scheduled' => 'Terjadwal',
        ],
    ],
    'content'          => [
        'name' => 'Konten',
    ],
    'type'             => [
        'name' => 'Jenis',
    ],
];
