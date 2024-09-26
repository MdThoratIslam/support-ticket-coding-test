# <h2 style="text-align:center">Support Ticket System</h2>
# <h2 style="text-align:center; color:lightgreen">Project Setup</h2>

### Step 1: Clone the repository
```bash
git clone https://github.com/netcodengit/support-ticket-coding-test
cd support-ticket-coding-test
git checkout md_thorat_islam_01322920575
```
## Step 2: Create Database command is below code run your CMD
```bash
mysql -u root -p
create database db_sts;
```
## Step 3: .env File Create and Copy Below Code and past your .env file

```bash
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_sts
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1

VITE_APP_NAME="${APP_NAME}"
VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```

## Step 4: User Factory data set admin and customer then below command run
```bash
php artisan migrate --seed
```
## Step 5: Project run
```bash
php artisan serve
npm run dev
```
## Step 6: Login 
<table>
    <tr>
        <th colspan="2">Admin</th>
    </tr>
    <tr>
        <th>Email</th>
        <td>admin@gmail.com</td>
    </tr>
    <tr>
        <th>Password</th>
        <td>password</td>
    </tr>
    <tr>
        <th colspan="2">Customer</th>
    </tr>
    <tr>
        <th>Email</th>
        <td>customer@gmail.com</td>
    </tr>
    <tr>
        <th>Password</th>
        <td>password</td>
    </tr>
</table>

