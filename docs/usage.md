# Usage Guide

## Using ApiResponseTrait
```php
use MichaelOrenda\ApiResponse\Traits\ApiResponseTrait;

class ExampleController extends Controller
{
    use ApiResponseTrait;

    public function index()
    {
        return $this->success(User::all(), "Users loaded");
    }
}
```
