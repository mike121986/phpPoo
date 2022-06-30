<?php
    /* definimos la url de nuestro proyecto  */
    define("BASE_URL","http://localhost/tiendaV/");
    /* definimos la zona horaria del nuastra region */
    date_default_timezone_set('America/Mexico_City');
    /* datos de la conexion a la base de datos */
    const DB_HOST = "localhost";
    const DB_NAME = "db_sistema";
    const DB_USER = "sistemayt";
    const DB_PASSWORD = "MIKEtrujillo1986";
    const DB_CHARSET = "charset=utf8";

    // Delimitadores decimales y millares ej. 24.1989.00
    const SPD = ".";
    const SPM = ",";

    // simbolo de la moneda
    const SMONEY = "$";