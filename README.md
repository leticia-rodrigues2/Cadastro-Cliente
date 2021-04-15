# Como executar

## Pré requisitos
- php 5.+
- composer 1.+

## Instalar dependências
Na raiz do projeto execute
```composer install```

## Subir banco de dados
- Execute o script init_db.sql no mysql
- Rode as migrações para subir com a tabela de clientes
```php artisan migrate```

## Execute a aplicação
```php artisan serve```