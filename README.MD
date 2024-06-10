# Provincias y Localidades de Argentina

Este repositorio contiene todas las provincias y la mayoría de las localidades de Argentina. Está estructurado para su uso en un proyecto Laravel, pero también incluye un archivo SQL para importar los datos manualmente si no se usa Laravel.

## Estructura del Proyecto

- `app/models`: Contiene los modelos `Provincia` y `Localidad` con las relaciones entre ellos.
- `database/migrations`: Contiene las migraciones para crear las tablas y poblarlas con datos.
- `sql`: Contiene los archivos SQL para insertar manualmente los datos en la base de datos.

## Uso

### Con Laravel

1. **Agregar el repositorio a tu proyecto Laravel existente**

Navega a la raíz de tu proyecto Laravel y agrega este repositorio como un submódulo.

```bash
   git submodule add https://github.com/tu-usuario/provincias-localidades-argentina.git
```
    
2. **Copiar los archivos necesarios a tu proyecto**

Copia los modelos y las migraciones a las respectivas carpetas de tu proyecto Laravel.

```bash
    cp provincias-localidades-argentina/app/Models/Localidad.php app/Models/
    cp provincias-localidades-argentina/app/Models/Provincia.php app/Models/
    cp provincias-localidades-argentina/database/migrations/* database/migrations/
```

3. **Ejecutar las migraciones y poblar la base de datos**

Este comando ejecutará las migraciones y poblará la base de datos con los datos iniciales de provincias y localidades.

```php
    php artisan migrate
```

### Sin Laravel

1. **Agregar el repositorio a tu proyecto**

Navega a la raíz de tu proyecto y agrega este repositorio como un submódulo.

```bash
    git submodule add https://github.com/tu-usuario/provincias-localidades-argentina.git
    cd provincias-localidades-argentina
```

2. **Importar el archivo SQL**

Utiliza tu cliente de base de datos favorito para importar el archivo provincias.sql y localidades.sql

```sql
    mysql -u usuario -p base_de_datos < sql/provincias.sql
    mysql -u usuario -p base_de_datos < sql/localidades.sql
```

## Modelos (Laravel)

1. **Modelo Provincia**

El modelo Provincia representa las provincias de Argentina.

```php
    <?php
    
    namespace App\Models;
    
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    
    class Provincia extends Model
    {
        use HasFactory;
    
        protected $table = "provincias";
    
        // Especifica la clave primaria
        protected $primaryKey = 'provID';
    
        /**
         * The attributes that are mass assignable.
         *
         * @var array<int, string>
         */
        protected $fillable = [
            'provNombre',
            'provCodigo'
        ];
    
        /**
         * Esto indica que una provincia puede tener muchas localidades.
         */
    
        public function localidades()
        {
            return $this->hasMany(Localidad::class, 'provID', 'provID');
        }
    }
```

2. **Modelo Localidad**

El modelo Localidad representa las localidades de Argentina por provincia.

```php
    <?php
    
    namespace App\Models;
    
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    
    class Localidad extends Model
    {
        use HasFactory;
    
        protected $table = "localidades";
    
        // Especifica la clave primaria
        protected $primaryKey = 'locID';
    
        /**
         * The attributes that are mass assignable.
         *
         * @var array<int, string>
         */
        protected $fillable = [
            'provID',
            'locNombre',
            'locCodigoPostal'
        ];
    
        /**
         * Esto indica que cada localidad pertenece a una provincia.
         */
        public function provincia()
        {
            return $this->belongsTo(Provincia::class, 'provID', 'provID');
        }
    }
```

## Contribuciones

Las contribuciones son bienvenidas. Por favor, abre un issue o envía un pull request con tus mejoras y correcciones.

## Licencia

Este proyecto está licenciado bajo la MIT License.