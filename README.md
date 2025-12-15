# CRUD-PHP

---

## Instalación

1. Clona el repositorio:
   ```bash
   git clone https://github.com/jesusgonzalvezgarcia10-ux/CRUD-PHP.git
   ```
2. Accede al directorio:
   ```bash
   cd CRUD-PHP
   ```
3. Levanta los servicios con Docker Compose:
   ```bash
   docker compose up
   ```

---

## URLs de Acceso

| Servicio      | URL                      |
|---------------|--------------------------|
| Aplicación    | http://localhost:8080    |
| phpMyAdmin    | http://localhost:8000    |

---

## Credenciales de Login en la Aplicación

| Campo   | Valor                |
|---------|----------------------|
| nombre  | admin                |
| Password| admin                |

Puedes encontrar (y modificar) más usuarios en el archivo [`Usuarios.sql`](./Usuarios.sql).

---

## Credenciales de phpMyAdmin

| Campo     | Valor   |
|-----------|---------|
| Usuario   | root    |
| Password  | 1234    |

_También puedes acceder con el usuario_ **user** _y contraseña_ **1234**.

---

## Observaciones Importantes

- El contenedor carga automáticamente los datos de ejemplo la primera vez que ejecutas `docker compose up`. Si necesitas recargar los datos, elimina los volúmenes de Docker con:
  ```bash
  docker compose down -v
  docker compose up
  ```
- Si modificas `Usuarios.sql` y quieres que los cambios se reflejen, asegúrate de eliminar los volúmenes antes de levantar los servicios.

---