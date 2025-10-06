# Deploy and Host Symfony 7.3 on Railway

Symfony is a PHP framework for web and console applications and a set of reusable PHP components.

[![Deploy on Railway](https://railway.com/button.svg)](https://railway.com/deploy/symfony-73?referralCode=U_A-zP&utm_medium=integration&utm_source=template&utm_campaign=generic)


## About Hosting Symfony 7.3

This template makes it very easy to deploy Symfony. It includes an app service, a worker service and a Postgres database.

After you deploy the template, you can open the public URL of your **railway-app** service and add `/health` in your browser. This endpoint should show that the status is up. Now you are free to add your own pages, API routes, scheduled tasks, commands and business logic. Happy coding!


## Common Use Cases

Symfony can be used for a variety of use cases, including

- Web applications
- API-driven backends
- Microservices
- Enterprise systems


## Dependencies for Symfony 7.3 Hosting

This template includes all the dependencies you need to get started: an app service, a worker service and a Postgres database.

### Deployment Dependencies

- **[Symfony: Installation & Setup](https://symfony.com/doc/current/setup.html)** - how to set up Symfony
- **[Symfony: Creating pages](https://symfony.com/doc/current/page_creation.html)** - how to create your first page
- **[Symfony: Official documentation](https://symfony.com/doc)** - for all further information

### Implementation Details

#### Architecture

This template deploys 3 services:
- **App Service:** Main instance serving your web pages and APIs
- **Worker Service:** Background worker processes for running jobs, scheduled tasks etc.
- **PostgreSQL:** Database for storing your application data

Workers are independent of the main app, allowing you to scale them horizontally for higher performance.

#### Pre-installed packages

To make it easy for you to start, the following packages are pre-installed:
- symfony/flex
- symfony/messenger
- symfony/scheduler
- doctrine/orm

Feel free to install further packages that you would like to use.
