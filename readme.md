A symfony cli template to create command line app.

## How to use

Create symfony cli project

```bash
composer create-project laraws/symfony-cli your_cli_project_name
```

Run your project

```bash
cd your_cli_project_name
bin/symfony-cli
```

Write your own commands at `src/Command` folder, then add your new class at bin/symfony-cli file.

## reference

https://symfony.com/doc/current/components/console.html