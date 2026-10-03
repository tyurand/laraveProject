<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Laravel автоматически связывает модель и файлы миграции по соглашениям об именовании например Message === messages 
// 1 это модель а 2 файлы миграции

// если название не стандартное то связь надо указывать через определенную команду например модель:
// Client а ФМ:my_clients то в модели нужно написать protected $table = 'my_clients';

class Message extends Model
{
    //
}
