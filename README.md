# Application interface

Requires PHP 7

## Usage
```php
declare(strict_types=1);

namespace My\Super;

use Satori\Application\ApplicationInterface;

class Application implements ApplicationInterface
{
    public function __get(string $id)
    {
        // You must implement this method. 
    }

    public function __set(string $id, callable $definition)
    {
        // You must implement this method. 
    }

    public function __isset(string $id): bool
    {
        // You must implement this method. 
    }

    public function offsetExists($key)
    {
        // You must implement this method. 
    }

    public function offsetGet($key)
    {
        // You must implement this method. 
    }

    public function offsetSet($key, $value)
    {
        // You must implement this method. 
    }

    public function offsetUnset($key)
    {
        // You must implement this method. 
    }

    public function subscribe(string $event, string $listener, callable $callback)
    {
        // You must implement this method. 
    }

    public function notify(string $event, array $arguments = null)
    {
        // You must implement this method. 
    }

    public function run(string $id)
    {
        // You must implement this method. 
    }
}
```

## License
MIT License
