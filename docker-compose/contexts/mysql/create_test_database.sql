CREATE DATABASE IF NOT EXISTS wallet_php_testing;

GRANT SELECT, INSERT, UPDATE, DELETE, CREATE, DROP, ALTER
ON wallet_php_testing.*
TO 'wallet'@'%';