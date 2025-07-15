

In Filament v4, using `$get()` within deeply nested form structures (such as inside `Builder` components with nested `Section` or `Grid` containers) introduces **critical performance issues**. Form submission and rendering times can take up to several minutes, even for relatively small and dynamic forms.

This seems to be caused by inefficient recursion inside the `getSchemaComponent()` method when resolving the component path.

---

**Environment**

* Filament: `v4.x`
* Laravel: `12.x`
* PHP: `8.x`

---

### 🐛 **Steps to Reproduce**

1. Clone the reproduction repository
2. Run the following setup:

   ```bash
   cp .env.example .env
   composer install
   php artisan migrate
   php artisan serve
   ```
3. Go to [http://localhost:8000](http://localhost:8000)
4. Create a new account
5. Navigate to the `PostResource` form and create a post using **deeply nested blocks** (via the `Builder` field)
6. Observe that saving the form is **very slow**
7. Now repeat the same process using the `PostOptimizedResource` — this version uses a custom utility called `GetOptimized`, and the performance is **significantly better**

---

### 🔍 **Technical Details**

The problem appears to stem from this code in Filament’s internal `$get()` utility:

```php
$component = $livewire->getSchemaComponent(
    $this->component->resolveRelativeKey($key, $isAbsolute),
    withHidden: true,
    skipComponentChildContainersWhileSearching: $this->component,
);
```

When replaced with:

```php
$component = $livewire->getSchemaComponent(
    $this->component->resolveRelativeKey($key, $isAbsolute),
    withHidden: true,
);
```

— performance is restored immediately.

The `skipComponentChildContainersWhileSearching` parameter causes **excessive recursion** within `HasComponents::getComponent()`, especially in large nested schemas. Benchmarks confirm this is the main performance bottleneck.

---
