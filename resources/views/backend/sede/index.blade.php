@extends('backend.layouts.main')

@section('title', 'Admin | Sedes')

@extends('backend.layouts.table',
    [
        'headers' => $headers,
        'datos' => $sedes,
        'titulo' => 'SEDES',
        'primaryKey' => 'sede_id'
    ])
