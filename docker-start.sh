#!/bin/sh
set -e

if ! php -r '$key = getenv("APP_KEY"); if (str_starts_with($key, "base64:")) { $key = base64_decode(substr($key, 7), true); } exit($key !== false && strlen($key) === 32 ? 0 : 1);'; then
    export APP_KEY="base64:$(php -r 'echo base64_encode(random_bytes(32));')"
fi

exec php artisan serve --host=0.0.0.0 --port="${PORT:-10000}"
