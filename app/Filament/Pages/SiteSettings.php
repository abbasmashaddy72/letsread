<?php

namespace App\Filament\Pages;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Actions\Action;
use App\Settings\SitesSettings;
use Filament\Pages\SettingsPage;
use Illuminate\Support\Facades\Http;
use Spatie\Sitemap\SitemapGenerator;
use Filament\Notifications\Notification;
use Guava\FilamentIconPicker\Forms\IconPicker;
use Ysfkaya\FilamentPhoneInput\Forms\PhoneInput;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Ysfkaya\FilamentPhoneInput\PhoneInputNumberType;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Tapp\FilamentTimezoneField\Forms\Components\TimezoneSelect;
use Parfaitementweb\FilamentCountryField\Forms\Components\Country;

class SiteSettings extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $settings = SitesSettings::class;

    protected static ?string $navigationGroup = 'CMS';

    protected function getActions(): array
    {
        return [
            Action::make('sitemap')->action('generateSitemap')->label(__('Generate Sitemap')),
        ];
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()->schema([
                    Forms\Components\Group::make()->schema([
                        Forms\Components\Group::make()->schema([
                            CuratorPicker::make('logo'),
                            TimezoneSelect::make('timezone')
                                ->searchable(),
                            Country::make('location')
                                ->searchable(),
                            Forms\Components\Select::make('currency')
                                ->searchable()
                                ->options(config('main.currencies')),
                        ])->columns(2),
                        Forms\Components\Group::make()->schema([
                            Forms\Components\TextInput::make('name'),
                            Forms\Components\TextInput::make('author'),
                            Forms\Components\TextInput::make('email'),
                            PhoneInput::make('phone')
                                ->focusNumberFormat(PhoneInputNumberType::E164)
                                ->useFullscreenPopup()
                                ->ipLookup(function () {
                                    return rescue(fn () => Http::get('https://ipinfo.io/json')->json('country'), app()->getLocale(), report: false);
                                }),
                            Forms\Components\Textarea::make('address')->columnSpanFull(),
                        ])->columns(2),
                        Forms\Components\Group::make()->schema([
                            Forms\Components\Textarea::make('description'),
                        ]),
                        Forms\Components\Group::make()->schema([
                            Forms\Components\Repeater::make('social')->schema([
                                IconPicker::make('icon')
                                    ->sets(['remix'])
                                    ->columns([
                                        'default' => 1,
                                        'lg' => 3,
                                        '2xl' => 5,
                                    ]),
                                Forms\Components\TextInput::make('platform'),
                                Forms\Components\TextInput::make('link')->url(),
                            ])->grid([
                                'default' => 1,
                                'md' => 2,
                                'xl' => 3,
                                '2xl' => 3,
                            ]),
                        ]),
                    ])->columns(2),
                ]),
            ]);
    }

    public function generateSitemap()
    {
        SitemapGenerator::create(config('app.url'))->writeToFile(public_path('sitemap.xml'));

        Notification::make()
            ->title('Sitemap Generated Success')
            ->success()
            ->send();
    }
}
