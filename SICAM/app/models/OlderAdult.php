<?php

declare(strict_types=1);

class OlderAdult
{
    public static function all(): array
    {
        return Database::connection()->query('SELECT * FROM older_adults WHERE deleted_at IS NULL ORDER BY id DESC')->fetchAll();
    }

    public static function create(array $data): bool
    {
        $sql = 'INSERT INTO older_adults (tipo_documento, numero_documento, nombres, apellidos, fecha_nacimiento, sexo, eps, estado, fecha_ingreso, created_at) VALUES (:tipo_documento,:numero_documento,:nombres,:apellidos,:fecha_nacimiento,:sexo,:eps,:estado,:fecha_ingreso,NOW())';
        return Database::connection()->prepare($sql)->execute($data);
    }
}
