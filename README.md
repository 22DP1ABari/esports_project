# 🏆 E-sporta turnīru pārvaldības sistēma

Šī ir Laravel veidota tīmekļa lietotne e-sporta turnīru organizēšanai un pārvaldīšanai. Lietotāji var izveidot turnīrus, pievienot spēles, reģistrēt rezultātus un pārvaldīt dalībniekus. 

---

## Funkcionalitāte

- Reģistrācija un autorizācija
- Turnīru izveide un rediģēšana
- Pieteikšanās turnīriem
- Spēļu pievienošana katram turnīram
- Spēļu rezultātu reģistrēšana
- Meklēšana pēc nosaukuma un atrašanās vietas
- Lietotāja profils ar savu turnīru sarakstu

---

##  Uzstādīšana

1. Klonēt projektu:
   ```bash
   git clone https://github.com/22DP1ABari/esports_project.git

2. Ieiet projektā:
   ```bash
   cd esports_project

3. Instalēt atkarības:
   ```bash
   composer install
   npm install && npm run dev

4. Izveidot .env failu:
    ```bash
    cp .env.example .env
    
5. Ģenerēt lietotnes atslēgu:
   ```bash
   php artisan key:generate

6. Izveidot datubāzi un migrēt tabulas:
   ```bash
   php artisan migrate

7. Startēt serveri:
   ```bash
   php artisan serve


## Lietošanas norādījumi

1. Reģistrēties kā lietotājs

2. Izveidot jaunu turnīru

3. Pievienot spēles (mačus)

4. Saglabāt rezultātus katrai spēlei

5. Apskatīt visu turnīru sarakstu savā profilā

## Tehnoloģijas
- Laravel 10
- Blade Templates
- Tailwind CSS
- MySQL
- Git + GitHub

Izveidoja Alina Barišņikova DP3-1

