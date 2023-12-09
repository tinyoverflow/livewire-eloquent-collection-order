# Example Repository for my Livewire Bug Report

This repository demonstrates the difference and issues with the synths for both the Eloquent Collection and the default
Collection in Laravel. The Eloquent Collection synth does not persist the model order. The Collection synth does, but
with a lot of overhead.

## Usage

This is a default Sail project. Because this is a demo project, I've configured it so you do not need to create a `.env`
file.

1. Clone this repository and navigate into it.
2. Install any dependencies with Sail:
    ```
    docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
   ```
3. Start the project with `vendor/bin/sail up -d`.
4. Create the database file with `touch database/database.sqlite`.
5. Migrate and seed the database with `vendor/bin/sail artisan migrate --seed`.
6. Open [localhost](http://localhost) in your browser.
7. You will see two lists with the same items. Both represent a component but with a different type of Collection. The
   number behind the names represent the expected order. This makes it easier to keep track of when something goes
   wrong.
8. Click the button below the EloquentCollectionDemo and notice that the order of the model resets to the model keys.
9. Click the button below the CollectionDemo and notice that the order stays the same.
