# CRH-03

> Creative Hope

## Quick Project Setup

1. Clone this repository.

2. Create and accomplish `.env`. Refer to the Environment Setup Section for what variables need to complete.

3. Run the `run` script and pass any number of arguments of the names of scripts to execute in the `/scripts/` directory. This includes: `install`, and `seed`

4. Run the command `php artisan serve` to launch the server.


## Environment setup
Edit the .env file as it contains the environment variables being used by the system`

> If .env is missing, check if the file is hidden otherwise override the .env.exmaple file

Make sure to edit the following variables:
- `APP_ENV`   - Environment of the web application
- `APP_DEBUG` - Shows error verbose
- `APP_KEY`   - Salt for the encryption used by the system. Requires 32 characters.
- `DB_`       - Database Configuration

### List of Scripts
| Scripts     | Description  |
|:-----------:|:------------:|
| `install`   | Installs the dependencies of the server. |
| `seed`      | Seeds unseeded database tables. |

Here are some examples:

```
# format
$ sh run [...script_name]

# install dependencies then run seed
$ sh run install dev
```
