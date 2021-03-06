<?php

namespace App;

use App\Exceptions\TokenExpiredException;
use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Message;
use Markdown;
use Mail;

class Fuck extends Model
{
    use FormAccessible;

    protected $casts = [
        'confirmed' => 'boolean',
    ];

    protected $dates = ['token_updated', ];

    protected $fillable = ['name', 'email', 'fuck',];

    protected $visible = ['id', 'name', 'fuck_rendered', 'created_at',];

    public function link($action)
    {
        return action('FuckController@'.$action, [$this, 'token' => $this->token]);
    }

    public function refreshToken()
    {
        $this->token = str_random(20);
        $this->token_updated = $this->freshTimestamp();
        return $this->save();
    }

    public function sendTokenEmail()
    {
        $this->sendMail('fuck.email.token', 'Did you ask to edit your fuck?');
    }

    public function sendConfirmEmail()
    {
        $this->sendMail('fuck.email.confirm', 'Please confirm the fuck you have given');
    }

    public function confirm()
    {
        $this->confirmed = TRUE;
        $this->save();
    }

    public function checkToken($token)
    {
        if (empty($token) || ! hash_equals($token, $this->token)) {
            abort(403);
        } else if ($this->token_updated->diffInMinutes() > config('app.token_expiry')) {
            throw new TokenExpiredException($this);
        }
    }

    public function scopeConfirmed($query, $confirmed = TRUE)
    {
        return $query->where('confirmed', $confirmed);
    }

    public function scopeChronological($query, $direction = 'DESC')
    {
        return $query->orderBy($this->getCreatedAtColumn(), $direction);
    }

    public function setFuckAttribute($value)
    {
        $this->attributes['fuck'] = $value;
        $this->attributes['fuck_rendered'] = Markdown::convertToHtml($value);
        // TODO: Potential moderation needed here
    }

    public function getNameAttribute($value)
    {
        return empty($value) ? 'Anonymous' : $value;
    }

    public function formNameAttribute($value)
    {
        return $value;
    }

    protected function sendMail($view, $subject)
    {
        if ( ! $this->refreshToken()) {
            // TODO: Error handling
        } else {
            Mail::send($view, ['fuck' => $this], function (Message $m) use ($subject) {
                $m->to($this->email);
                $m->subject($subject);
            });
        }
    }
}
