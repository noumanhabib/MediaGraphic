<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Chat extends Model

{

    use HasFactory;

    protected $fillable = [
        'from_user_id',
        'to_user_id',
        'from_message',
        'to_message',
    ];
    public function sender()
    {
        return $this->hasOne(User::class, 'id', 'from_user_id');
    }
    public function reciever()
    {
        return $this->hasOne(User::class, 'id', 'to_user_id');
    }

    public static function customers(): Collection
    {
        $chat_ids = DB::select("SELECT max(id) as id FROM chats WHERE from_user_id != 1 GROUP BY from_user_id;");

        $ids = array_map(function ($v) {
            return $v->id;
        }, $chat_ids);

        $ids = array_unique($ids);

        $user_chats = Chat::with("sender")->whereIn("id", $ids)->orderBy("created_at", 'desc')->get();
        return $user_chats;
    }
}