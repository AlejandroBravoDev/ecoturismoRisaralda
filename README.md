# EcoTurismoRisaralda

Plataforma web desarrollada como proyecto formativo académico para la promoción del ecoturismo en los **14 municipios del departamento de Risaralda**. Permite a los turistas explorar lugares ecoturísticos y hospedajes sostenibles, mientras que un administrador gestiona y mantiene actualizado el contenido del sistema.

> **Plataforma en producción:** [https://ecoturismorisaralda.alejandrobravo.xyz](https://ecoturismorisaralda.alejandrobravo.xyz)

---

## Requisitos previos

Asegúrese de tener instalado en su equipo:

| Herramienta | Versión recomendada |
|-------------|---------------------|
| PHP | >= 8.2 |
| Composer | >= 2.x |
| Node.js | >= 18.x |
| npm | >= 9.x |
| MySQL | >= 8.x |

---

## Estructura del proyecto

El proyecto está dividido en **dos repositorios independientes**:

```
ecoturismorisaralda-backend/        ecoturismorisaralda-frontend/
├── app/                            ├── public/
│   ├── Console/                    │   ├── index.html
│   ├── Exceptions/                 │   └── vite.svg
│   ├── Http/                       ├── src/
│   │   ├── Controllers/            │   ├── assets/
│   │   └── Middleware/             │   ├── components/
│   ├── Models/                     │   ├── hooks/
│   ├── Notifications/              │   ├── pages/
│   └── Providers/                  │   ├── services/
├── bootstrap/                      │   ├── utils/
├── config/                         │   ├── App.css
├── database/                       │   ├── App.jsx
│   ├── migrations/                 │   ├── index.css
│   └── seeders/                    │   └── main.jsx
├── lang/                           ├── .env
├── public/                         ├── .env.example
├── resources/                      ├── .gitignore
├── routes/                         ├── eslint.config.js
│   └── api.php                     ├── index.html
├── storage/                        ├── package.json
├── tests/                          ├── package-lock.json
├── .env                            ├── README.md
├── .env.example                    └── vite.config.js
├── artisan
├── composer.json
├── composer.lock
├── package.json
├── phpunit.xml
├── README.md
└── vite.config.js
```

---

## Instalación y ejecución local

> Esta guía es solo para ejecución en ambiente local de desarrollo. El proyecto ya se encuentra desplegado y disponible en producción.

Para correr el sistema completo se necesitan **dos terminales abiertas simultáneamente**, una para el backend y otra para el frontend.

---

### Backend (Laravel)

#### 1. Clonar e instalar dependencias

```bash
git clone <https://github.com/AlejandroBravoDev/ecoturismo-backend.git>
cd ecoturismorisaralda-backend

composer install
```

#### 2. Configurar el entorno

```bash
cp .env.example .env
php artisan key:generate
```

#### 3. Configurar el archivo `.env`

Abra el archivo `.env` y configure las variables de base de datos:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ecoturismo
DB_USERNAME=root
DB_PASSWORD=su_contraseña

# URL del frontend (para CORS)
FRONTEND_URL=http://localhost:5173
```

#### 4. Ejecutar migraciones

```bash
php artisan migrate
```

Si el proyecto incluye datos de ejemplo:

```bash
php artisan db:seed
```

#### 5. Iniciar el servidor

```bash
php artisan serve
```

Backend disponible en: `http://localhost:8000`

---

### Frontend (React)

#### 1. Clonar e instalar dependencias

```bash
git clone <https://github.com/AlejandroBravoDev/ecoturismo-frontend.git>
cd ecoturismorisaralda-frontend

npm install
```

> `npm install` solo se ejecuta la primera vez que se clona el proyecto, cuando se eliminan las carpetas `node_modules`, o cuando se agregan nuevas dependencias.

#### 2. Configurar el archivo `.env`

```env
VITE_API_URL=http://localhost:8000/api
```

#### 3. Iniciar el servidor

```bash
npm run dev
```

✅ Frontend disponible en: `http://localhost:5173`

---

## Flujo de ejecución correcto

```
Terminal 1 — Backend          Terminal 2 — Frontend
──────────────────────        ──────────────────────
cd ecoturismorisaralda-backend    cd ecoturismorisaralda-frontend
php artisan serve             npm run dev

→ http://localhost:8000       → http://localhost:5173
```

1. Iniciar el servidor del **backend**.
2. Iniciar el servidor del **frontend**.
3. Abrir `http://localhost:5173` en el navegador.

> Ambos servidores deben estar activos al mismo tiempo para que el sistema funcione correctamente.

---

## Usuarios del sistema

| Rol | Descripción |
|-----|-------------|
| **Administrador** | Acceso completo al panel de gestión del sistema. |
| **Usuario** | Consulta de lugares, hospedajes, reseñas y favoritos. |

---

## 🛠️ Comandos útiles — Backend

```bash
# Limpiar caché
php artisan cache:clear
php artisan config:clear
php artisan route:clear

# Ver todas las rutas de la API
php artisan route:list --path=api

# Revisar logs en tiempo real
tail -f storage/logs/laravel.log

# Recrear enlace de storage (imágenes)
php artisan storage:link
```

---

## Notas importantes

- Si alguno de los dos servidores se detiene, el sistema no funcionará correctamente.
- Si hay errores de dependencias, verifique que ejecutó `composer install` en el backend y `npm install` en el frontend.
- Si la base de datos no conecta, revise las variables `DB_*` en el `.env` del backend.
- En producción, el sistema ya está disponible en [https://ecoturismorisaralda.alejandrobravo.xyz](https://ecoturismorisaralda.alejandrobravo.xyz) — no se requiere ningún proceso de instalación para acceder a él.

---

## Licencia

Proyecto formativo académico — SENA · Análisis y Desarrollo de Software.
