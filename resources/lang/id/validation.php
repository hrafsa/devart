<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'Isian :attribute harus diterima.',
    'active_url'           => 'Isian :attribute bukan URL yang valid.',
    'after'                => 'Isian :attribute harus tanggal setelah :date.',
    'alpha'                => 'Isian :attribute hanya boleh berisi huruf.',
    'alpha_dash'           => 'Isian :attribute hanya boleh berisi huruf, angka, dan tanda hubung.',
    'alpha_num'            => 'Isian :attribute hanya boleh berisi huruf dan angka.',
    'array'                => 'Isian :attribute harus berupa array.',
    'before'               => 'Isian :attribute harus tanggal sebelum :date.',
    'between'              => [
        'numeric' => 'Isian :attribute harus antara :min dan :max.',
        'file'    => 'Isian :attribute harus antara :min dan :max kilobyte.',
        'string'  => 'Isian :attribute harus antara :min dan :max karakter.',
        'array'   => 'Isian :attribute harus memiliki antara :min dan :max item.',
    ],
    'boolean'              => 'Isian :attribute harus berupa true atau false.',
    'confirmed'            => 'Konfirmasi :attribute tidak cocok.',
    'date'                 => 'Isian :attribute bukan tanggal yang valid.',
    'date_format'          => 'Isian :attribute tidak cocok dengan format :format.',
    'different'            => 'Isian :attribute dan :other harus berbeda.',
    'digits'               => 'Isian :attribute harus :digits digit.',
    'digits_between'       => 'Isian :attribute harus antara :min dan :max digit.',
    'dimensions'           => 'Isian :attribute memiliki dimensi gambar yang tidak valid.',
    'distinct'             => 'Isian :attribute memiliki nilai yang duplikat.',
    'email'                => 'Isian :attribute harus alamat email yang valid.',
    'exists'               => 'Isian :attribute yang dipilih tidak valid.',
    'file'                 => 'Isian :attribute harus berupa file.',
    'filled'               => 'Isian :attribute harus diisi.',
    'image'                => 'Isian :attribute harus berupa gambar.',
    'in'                   => 'Isian :attribute yang dipilih tidak valid.',
    'in_array'             => 'Isian :attribute tidak terdapat dalam :other.',
    'integer'              => 'Isian :attribute harus berupa bilangan bulat.',
    'ip'                   => 'Isian :attribute harus alamat IP yang valid.',
    'json'                 => 'Isian :attribute harus berupa string JSON yang valid.',
    'max'                  => [
        'numeric' => 'Isian :attribute tidak boleh lebih besar dari :max.',
        'file'    => 'Isian :attribute tidak boleh lebih besar dari :max kilobyte.',
        'string'  => 'Isian :attribute tidak boleh lebih dari :max karakter.',
        'array'   => 'Isian :attribute tidak boleh memiliki lebih dari :max item.',
    ],
    'mimes'                => 'Isian :attribute harus berupa file dengan tipe: :values.',
    'min'                  => [
        'numeric' => 'Isian :attribute minimal :min.',
        'file'    => 'Isian :attribute minimal :min kilobyte.',
        'string'  => 'Isian :attribute minimal :min karakter.',
        'array'   => 'Isian :attribute minimal :min item.',
    ],
    'not_in'               => 'Isian :attribute yang dipilih tidak valid.',
    'numeric'              => 'Isian :attribute harus berupa angka.',
    'present'              => 'Isian :attribute harus ada.',
    'regex'                => 'Format isian :attribute tidak valid.',
    'required'             => 'Isian :attribute harus diisi.',
    'required_if'          => 'Isian :attribute harus diisi bila :other adalah :value.',
    'required_unless'      => 'Isian :attribute harus diisi kecuali :other memiliki nilai :values.',
    'required_with'        => 'Isian :attribute harus diisi bila terdapat :values.',
    'required_with_all'    => 'Isian :attribute harus diisi bila terdapat :values.',
    'required_without'     => 'Isian :attribute harus diisi bila tidak terdapat :values.',
    'required_without_all' => 'Isian :attribute harus diisi bila tidak terdapat satupun dari :values.',
    'same'                 => 'Isian :attribute dan :other harus sama.',
    'size'                 => [
        'numeric' => 'Isian :attribute harus berukuran :size.',
        'file'    => 'Isian :attribute harus berukuran :size kilobyte.',
        'string'  => 'Isian :attribute harus berukuran :size karakter.',
        'array'   => 'Isian :attribute harus mengandung :size item.',
    ],
    'string'               => 'Isian :attribute harus berupa string.',
    'timezone'             => 'Isian :attribute harus berupa zona waktu yang valid.',
    'unique'               => 'Isian :attribute sudah ada sebelumnya.',
    'url'                  => 'Format isian :attribute tidak valid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'name'                  => 'nama',
        'username'              => 'nama pengguna',
        'email'                 => 'alamat email',
        'first_name'            => 'nama depan',
        'last_name'             => 'nama belakang',
        'password'              => 'kata sandi',
        'password_confirmation' => 'konfirmasi kata sandi',
        'city'                  => 'kota',
        'country'               => 'negara',
        'address'               => 'alamat',
        'phone'                 => 'telepon',
        'mobile'                => 'ponsel',
        'age'                   => 'umur',
        'sex'                   => 'jenis kelamin',
        'gender'                => 'jenis kelamin',
        'day'                   => 'hari',
        'month'                 => 'bulan',
        'year'                  => 'tahun',
        'hour'                  => 'jam',
        'minute'                => 'menit',
        'second'                => 'detik',
        'title'                 => 'judul',
        'content'               => 'konten',
        'description'           => 'deskripsi',
        'excerpt'               => 'kutipan',
        'date'                  => 'tanggal',
        'time'                  => 'waktu',
        'available'             => 'tersedia',
        'size'                  => 'ukuran',
    ],

];
