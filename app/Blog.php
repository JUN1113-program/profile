<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \cebe\markdown\GithubMarkdown as Markdown;

class Blog extends Model
{
    // マークダウンをhtmlに変換する
    public function parse() {
        $parser = new Markdown();
        return $parser->parse($this->content);
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
