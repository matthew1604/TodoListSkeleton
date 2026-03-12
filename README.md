# TodoList Skeleton (Symfony + Vue)

## Quick start
1. Build and start the containers: `docker compose up -d --build`
2. Backend: `http://localhost:8000`
3. Frontend: `http://localhost:3000`

## Symfony commands (inside the backend container)
Run these from your host:
- `docker compose exec backend php bin/console make:entity`
- `docker compose exec backend php bin/console make:controller`
- `docker compose exec backend php bin/console make:migration`
- `docker compose exec backend php bin/console doctrine:migrations:migrate`

## SQLite (local file)
This project uses SQLite (no separate DB service).
- DB file: `backend/var/data_dev.db`

## Stop containers
- `docker compose down`
