<?php
require "libs/rb.php";
R::setup( 'mysql:host=localhost;dbname=clients',
        'root', '' );
session_start();
