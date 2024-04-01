<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
    ];

    public function generateResponse(): string
    {
        $command = strtolower($this->content);
        switch($command)
        {
            case 'hi':
                return 'Hello there! I am Laravel Chatbot.';
                break;
            case 'joke':
                return 'Why don\'t scientists trust atoms? Because they make up everything!';
                break;
            case 'help':
                return '<div>Hi, I am Laravel Chat Bot!</div><div>Available commands:</div><div>- Hi </div><div>- Joke </div><div>- Help </div>';
                break;
            default:
                return 'I don\'t understand. Please provide a valid command.';
        }
    }
}
