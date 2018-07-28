<?php
require_once "db.php";
session_start();

function queryFunc($query)
{
    // Function to query the database for queries

    global $connection;
    $queryResult = mysqli_query($connection, $query);

    // If query fails
    if (!$queryResult) {
        die('Error in querying database ' . mysqli_error($connection));
    }
    // Returning the results of a query
    return $queryResult;
}

function isData($queryResult)
{
    // Checking if query has returned some data or not?
    // Are there any records returned or not?
    return (mysqli_num_rows($queryResult) != 0);
}

function isRecord($queryResult)
{
    // Iterating over records one by one and returning that record
    return (mysqli_fetch_assoc($queryResult));
}

function hashString($string)
{
    //Function for password hashing

    // hash and salt
    $hash = '$2y$10$';
    $salt = 'thisisthestringusedfor';

    $hashed = $hash . $salt;

    // Creating hash of the passed string
    $string = crypt($string, $hashed);

    // Returning hashed string
    return $string;
}

function clearString($string)
{
    global $connection;
    return mysqli_real_escape_string($connection, (htmlentities(stripslashes(trim($string)))));
}
