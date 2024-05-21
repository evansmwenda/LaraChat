<?php

namespace App\Filament\Pages;

use App\Models\Conversation;
use Filament\Pages\Page;

class Chat extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.chat';

    public $conversations;

    public function mount()
    {
        //load conversations from the database
        $this->conversations = Conversation::all();
    }

    public function getWidgetData() :array
    {
        // return view(static::$view,[
        //     'conversations' => $this->conversations,
        // ]);

        return [
            'conversations' => $this->conversations,
        ];
    }

    public function getLayout(): string
    {
        return 'layouts.full-page';
    }
}
