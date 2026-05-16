# SICAM - Sistema Integral del Cuidado al Adulto Mayor

## Instalación (XAMPP)
1. Copie la carpeta `SICAM` en `C:/xampp/htdocs/SICAM`.
2. Importe `database/sicam.sql` en phpMyAdmin.
3. Ajuste credenciales en `config/database.php`.
4. Abra `http://localhost/SICAM/public/`.

## Credenciales iniciales
- Usuario: `admin`
- Contraseña: `admin123`

## Módulos incluidos
- Autenticación y sesiones seguras
- Dashboard
- Registro de adultos mayores (crear/listar)
- Signos vitales con cálculo de IMC
- Base para alertas y auditoría

## Arquitectura
- MVC en `app/controllers`, `app/models`, `app/views`
- Rutas centralizadas en `config/routes.php`
- PDO y consultas preparadas

## Diagramas (texto)
### MVC
Cliente -> Router (`public/index.php`) -> Controlador -> Modelo -> MySQL -> Vista

### ER simplificado
roles 1..n users
older_adults 1..n vital_signs
older_adults 1..n alerts
