Установка проекта

```
Клонируем проект
git clone

Заходим в папку с проектом
cd project_crud_mvc_yii

Копируем env файл
cp .env.example .env

Запускаем сборку docker
docker-compose up -d --build

Запускаем composer isntall
docker exec -it PROJECT_CRUD_PHP_YII composer install

Запускаем миграции
docker exec -it PROJECT_CRUD_PHP_YII ./yii migrate
```

открыть http://127.0.0.1/review
