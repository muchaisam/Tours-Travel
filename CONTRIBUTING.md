# Contributing to ToursTravel Kenya

Thank you for your interest in contributing to ToursTravel Kenya! This document provides guidelines and instructions for contributing.

## Code of Conduct

By participating in this project, you agree to maintain a welcoming and inclusive environment for all contributors.

## Getting Started

### Prerequisites

- PHP 8.2+
- Composer 2.x
- Node.js 18+
- MySQL 8.0+

### Local Development Setup

1. **Fork and clone the repository**
   ```bash
   git clone https://github.com/YOUR_USERNAME/tours-travel.git
   cd tours-travel
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Configure environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Set up database**
   ```bash
   # Update .env with your database credentials
   php artisan migrate --seed
   ```

5. **Start development server**
   ```bash
   php artisan serve
   npm run dev
   ```

### Using Docker

```bash
docker-compose up -d
docker-compose exec app php artisan migrate --seed
```

Access the application at `http://localhost:8080`

## Development Workflow

### Branching Strategy

- `main` - Production-ready code
- `dev` - Development branch
- Feature branches: `feature/your-feature-name`
- Bug fixes: `fix/bug-description`

### Making Changes

1. **Create a feature branch**
   ```bash
   git checkout dev
   git pull origin dev
   git checkout -b feature/your-feature
   ```

2. **Write your code**
   - Follow the existing code style (Laravel conventions)
   - Add tests for new functionality
   - Update documentation if needed

3. **Run tests and code style checks**
   ```bash
   ./vendor/bin/phpunit
   ./vendor/bin/pint
   ```

4. **Commit your changes**
   ```bash
   git add .
   git commit -m "feat: add your feature description"
   ```

   We follow [Conventional Commits](https://www.conventionalcommits.org/):
   - `feat:` - New feature
   - `fix:` - Bug fix
   - `docs:` - Documentation changes
   - `style:` - Code style changes (formatting, semicolons, etc.)
   - `refactor:` - Code refactoring
   - `test:` - Adding or updating tests
   - `chore:` - Maintenance tasks

5. **Push and create a Pull Request**
   ```bash
   git push origin feature/your-feature
   ```

## Pull Request Guidelines

### Before Submitting

- [ ] Tests pass (`./vendor/bin/phpunit`)
- [ ] Code style is clean (`./vendor/bin/pint`)
- [ ] Documentation is updated if needed
- [ ] Commit messages follow conventional commits

### PR Description

Include in your PR description:
- What changes you made
- Why you made them
- How to test the changes
- Screenshots (if UI changes)

### Review Process

1. CI checks must pass
2. At least one maintainer review required
3. All comments must be addressed
4. Squash merge preferred for clean history

## Code Style

### PHP

- Follow PSR-12 coding standard
- Use Laravel Pint for formatting
- Use type hints where possible
- Write descriptive variable and method names

### JavaScript

- Use ES6+ syntax
- Follow Prettier formatting
- Prefer `const` over `let`

### Blade Templates

- Use Blade components when possible
- Keep logic minimal in views
- Use proper indentation

## Testing

### Running Tests

```bash
# All tests
./vendor/bin/phpunit

# Specific test file
./vendor/bin/phpunit tests/Feature/DestinationTest.php

# With coverage
./vendor/bin/phpunit --coverage-html coverage
```

### Writing Tests

- Place feature tests in `tests/Feature`
- Place unit tests in `tests/Unit`
- Use factories for test data
- Test both happy paths and edge cases

Example:

```php
public function test_admin_can_create_destination(): void
{
    $admin = User::factory()->admin()->create();
    $category = Category::factory()->create();

    $response = $this->actingAs($admin)->post('/destinations', [
        'title' => 'Test Destination',
        'description' => 'Test description',
        // ...
    ]);

    $response->assertRedirect('/destinations');
    $this->assertDatabaseHas('destinations', ['title' => 'Test Destination']);
}
```

## Documentation

- Update README.md for major features
- Add PHPDoc comments for public methods
- Update API.md for API changes
- Keep CHANGELOG.md up to date

## Reporting Issues

### Bug Reports

Use the bug report template and include:
- Steps to reproduce
- Expected behavior
- Actual behavior
- Screenshots if applicable
- Environment details

### Feature Requests

Use the feature request template and include:
- Problem description
- Proposed solution
- Alternatives considered

## Questions?

Feel free to open an issue with the `question` label or reach out to the maintainers.

Thank you for contributing!
