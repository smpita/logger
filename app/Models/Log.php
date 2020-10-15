<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Log extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'verb',
        'path',
        'all',
        'query',
        'content',
        'host',
        'header',
        'meta',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'all' => 'array',
        'query' => 'array',
        'header' => 'array',
    ];

    public static function request(Request $request)
    {
        $data['verb'] = $request->method();
        $data['path'] = $request->path();
        $data['all'] = $request->all();
        $data['query'] = $request->query();
        $data['content'] = $request->getContent();
        $data['host'] = $request->getHost();
        $data['header'] = $request->header();
        $data['meta'] = (string) $request;
        return static::create($data);
    }
}
