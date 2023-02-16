# My API

This API provides basic functionality for managing users.

## Getting Started

1. Clone this repository.
2. Install dependencies with `composer install`.
3. Start the server with `php artisan serve`.

## API Endpoints

### `GET /getPersonData/:dni`

Returns the data of a person.

Example response:

```json
[
  {
    "nombres": "JOSE STIVEN",
    "apellido_paterno": "VARGAS",
    "apellido_materno": "GALINDO",
    "created_at": "2018-03-14T15:49:58.000000Z",
    "updated_at": "2018-03-14T15:49:58.000000Z",
    "id": 6,
    "direccion": null,
    "dni": "48377891",
    "name": "JOSE STIVEN VARGAS GALINDO",
    "only_names": "JOSE STIVEN",
    "surnames": "VARGAS GALINDO",
    "address": "",
    "identification": "48377891"
    }
]
```

`GET /getCompanyData/:companyRuc`
Returns the data of a company.

Example response:
```json
{
    "id": 16,
    "RUC": "10483778941",
    "RAZON": "ROSALES QUISPE ELEF ABNER",
    "ESTADO": "ACTIVO",
    "CONDICION": "HABIDO",
    "NOMBRECOMERCIAL": "-",
    "TIPO": "PERSONA NATURAL SIN NEGOCIO",
    "DIRECCION": "-",
    "TELEFONO": "/ 960699941",
    "created_at": "2018-03-20T21:40:10.000000Z",
    "updated_at": "2018-03-20T21:40:10.000000Z",
    "DEPARTAMENTO": null,
    "PROVINCIA": null,
    "DISTRITO": null,
    "ACTIVIDADES_ECONOMICAS": null,
    "OBLIGACION": null,
    "name": "ROSALES QUISPE ELEF ABNER",
    "address": "-",
    "identification": "10483778941"
}
```

Technology Used
* Laravel
* PHP