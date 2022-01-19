<img src="{{ asset('images/database/sql-lite-configuration-problem-1.PNG') }}" alt="sql lite laravel config" width="50%"/>

<a target="_blank" href="https://laracasts.com/discuss/channels/laravel/sqlite-database-throw-error-could-not-find-driver-sql-pragma-foreign-keys-on">solution</a>

<ol>
    <li>Navigate to the php.ini file</li>
    <li>
        <p>
            Enable the following :
        </p>
        pdo_sqlite
        <br>
        pdo_sqlite3
    </li>
</ol>



<p>Select migrations table from SQL lite</p>
@foreach ($migrations as $migration)
    <em>{{ $migration->migration }}</em>
    <br>
@endforeach


<u>what i learned !</u>
<ol>
    <li>using sqllite database instead of default database driver MYSQL</li>
    <li>i got an error because i didn't enable [sqlite3 extension] [sql_pdo extension] from php.ini config file</li>
    <li>DB_DATABASE environment variable should be absolute to the file</li>
</ol>