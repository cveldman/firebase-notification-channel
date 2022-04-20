# Firebase

### Firebase Notifications

Before you can send notifications via Firebase, you must install the Firebase notification 
channel via Composer:

```
composer require laravel/slack-notification-channel 
```

### Formatting Firebase Notifications

```php
/**
 * Get the Firebase representation of the notification.
 *
 * @param  mixed  $notifiable
 * @return \Veldman\Notifications\Messages\FirebaseMessage 
 */
public function toFirebase($notifiable)
{
    return (new FirebaseMessage)
                ->title('One of your invoices has been paid!')
                ->body('Lorem ipsum')
                ->data(['foo' => 'bar']);
}
```

### Routing Firebase Notifications

To route Firebase notifications to the proper topic and token, define a
``` routeNotificationForFirebase ``` method on your notifiable entity. This should return the
topic or tokens to which the notification should be delivered.

```php
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
 
class User extends Authenticatable
{
    use Notifiable;
    
    public function routeNotificationForSlack($notification)
    {
        return $this->fcm_token;
    }
}
```

### On-Demand Notifications

```php
Notification::route('firebase', '/topics/news')
    ->notify(new InvoicePaid($invoice));
```