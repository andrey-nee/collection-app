<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   */
  public function register(): void
  {
    //
  }

  /**
   * Bootstrap any application services.
   */
  public function boot(): void
  {
    // Добавляем кастомную директиву @linkactive
    // которая проверяет адресную строку и добавляет класс active
    Blade::directive('linkactive', function ($route) {
      return "<?php echo request()->is($route) ? 'active' : null; ?>";
    });

    Paginator::useBootstrap();
  }
}
