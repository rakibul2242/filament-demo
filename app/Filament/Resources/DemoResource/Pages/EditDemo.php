<?php

namespace App\Filament\Resources\DemoResource\Pages;

use App\Filament\Resources\DemoResource;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms;
use Filament\Actions;
use Filament\Forms\Form;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Components\Actions\Action as FormAction;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;

class EditDemo extends EditRecord
{
    protected static string $resource = DemoResource::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Wizard::make([
                    Step::make('Basic Info')->schema([
                        TextInput::make('demo')
                            ->label('Demo Title')
                            ->required()
                            ->maxLength(255),
                    ]),
                    Step::make('Details')->schema([
                        Textarea::make('description')
                            ->label('Description')
                            ->rows(4),
                    ]),
                    Step::make('Status')->schema([
                        ToggleButtons::make('status')
                            ->options([
                                'draft' => 'Draft',
                                'scheduled' => 'Scheduled',
                                'published' => 'Published',
                            ])
                            ->icons([
                                'draft' => 'heroicon-o-pencil-square',
                                'scheduled' => 'heroicon-o-clock',
                                'published' => 'heroicon-o-check-badge',
                            ])
                            ->colors([
                                'draft' => 'gray',
                                'scheduled' => 'warning',
                                'published' => 'success',
                            ])
                            ->default('draft')
                            ->inline()
                            ->required(),
                    ]),
                ])->columnSpanFull()
             ->nextAction(
                    fn (FormAction $action) => $action
                        ->label('Next')
                        ->iconPosition('after')
                        ->icon('heroicon-m-arrow-right')
                        ->color('primary')
                )
                ->previousAction(
                    fn (FormAction $action) => $action
                        ->label('Back')
                        ->icon('heroicon-m-arrow-left')
                        ->color('gray')
                )
            ->submitAction(
                Action::make('submit')
                    ->label('Submit')
                    ->icon('heroicon-m-check-circle')
                    ->color('success')
                    ->action('save')
                ),
            ]);
    }

    protected function getFormActions(): array
    {
        return [];
    }
     protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}