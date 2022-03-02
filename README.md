composer install   
php vendor/bin/homestead make  
cp Homestead.yaml.dev Homestead.yaml  
vagrant up  

```bash
php artisan ide-helper:models "App\Models\About" "App\Models\Contact" "App\Models\History" "App\Models\HistoryList" "App\Models\Image" "App\Models\Log" "App\Models\MainSlider" "App\Models\Menu" "App\Models\Movie" "App\Models\Post" "App\Models\Spam" "App\Models\User"  
```

