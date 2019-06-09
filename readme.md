# Idea Inicial

Skeleton de usuarios y permisos con sus operaciones basicas (CRUD)

# Nuevo Objetivo

Boilerplate para iniciar una aplicacion monolitica con algunas librerias / snippets utiles y comunes precargadas sobre la ultima version de laravel.

### To DO
- [ ] CRUD Usuarios
- [ ] CRUD Permisos
- [ ] CRUD Roles

## Features

### Permissions
Se cuenta con el paquete [Laravel Permissions](https://github.com/spatie/laravel-permission) para gestionar permisos en la app.

### CSS

#### table-mini
Estilo precargado para hacer las tablas responsivas con solo agregar esta clase a la etiqueta table, corresponde con el breakpoint de 768px que usa bootstrap 4.3.x.

```html
<table class="table table-mini">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Puesto</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td data-label="nombre" >Marco Gallegos</td>
            <td data-label="puesto" >Dev</td>
            <td data-label="acciones" > <button class="btn btn-primary" >OK</button></td>
        </tr>
    </tbody>
</table>
```

![Preview de la Tabla](data:image/png;base64,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)

Este fue una adaptacionde el [Codigo original](https://codepen.io/AllThingsSmitty/pen/MyqmdM) de Matt Smith.