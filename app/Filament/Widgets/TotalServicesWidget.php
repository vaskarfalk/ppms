<?php

namespace App\Filament\Widgets;

use App\Models\Blog\Post;
use App\Models\ContactFormSubmission;
use App\Models\Service;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class TotalServicesWidget extends BaseWidget
{
    protected static ?int $sort = 1;
    protected function getStats(): array
    {
        return [
            Stat::make('Total Services', Service::count())
            ->description('Services available in the system')
            ->descriptionIcon('heroicon-o-briefcase')
            ->color('success'),
            
            Stat::make('Total Contact Submissions', ContactFormSubmission::count())
            ->description('All time')
            ->descriptionIcon('heroicon-o-envelope')
            ->color('info'),
            Stat::make('Total Posts', Post::count()) // Add the total posts stat
            ->description('Published posts in the system')
            ->descriptionIcon('heroicon-o-document-text')
            ->color('primary'),
        ];
    }
}
