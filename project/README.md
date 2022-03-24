# Update Faker

remove fzaninotto/faker
require fakerphp/faker

## MIGRATIONS, MODEL, SEEDER

### COMANDO: php artisan make:model -m -s

1. User
1. Subscription
1. Specialization
1. Service
1. Message
1. Review

## RELAZIONI

1. User-Subscription: M-M
1. User-Specializations: M-M
1. User-Service: 1-M
1. Specializations-Service: 1-M
1. User-Message: 1-M
1. User-Review: 1-M

ciao a tutti quanti
