<?php

declare(strict_types=1);

class VitalSign
{
    public static function all(): array
    {
        return Database::connection()->query('SELECT vs.*, CONCAT(oa.nombres," ",oa.apellidos) as adulto FROM vital_signs vs INNER JOIN older_adults oa ON oa.id=vs.older_adult_id ORDER BY vs.fecha_registro DESC')->fetchAll();
    }

    public static function create(array $data): bool
    {
        $sql = 'INSERT INTO vital_signs (older_adult_id,presion_sistolica,presion_diastolica,frecuencia_cardiaca,saturacion_oxigeno,temperatura,peso,talla,imc,fecha_registro) VALUES (:older_adult_id,:presion_sistolica,:presion_diastolica,:frecuencia_cardiaca,:saturacion_oxigeno,:temperatura,:peso,:talla,:imc,NOW())';
        return Database::connection()->prepare($sql)->execute($data);
    }
}
