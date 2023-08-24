# OOP PHP Project

## Object Oriented PHP - Real World Application

---

## Difference between `require_once()` & `include()` in php

**1. `require_once():`**

-   `require_once()` is a statement used to include a file in the current PHP script. It's often used for including **essential files**, like configuration files or libraries that your script depends on.
-   **If the specified file cannot be included (e.g., file not found or a syntax error), a fatal error will occur, and the script will stop executing.**
-   It ensures that the file is included only once. If the same file has been included before, PHP won't include it again. This helps prevent issues related to redefining functions, classes, or variables.

**2. `include():`**

-   `include()` is also used to include a file in the current PHP script. It's typically used for including files that might not be crucial to the script's functionality or files that might be missing.
-   **If the specified file cannot be included, a warning will be issued, but the script will continue executing.**
-   It does not enforce inclusion only once. If the same file is included multiple times, PHP will include it every time, which might lead to redefining functions, classes, or variables.

In summary, the main differences between require_once() and include() are:

-   `require_once()` stops the script with a fatal error if the file cannot be included, while `include()` only issues a warning and continues script execution.
-   `require_once()` ensures that a file is included only once, preventing redeclaration issues. `include()` does not enforce this and might lead to multiple inclusions of the same file.
-   Choose `require_once()` for essential files that your script relies on, and use `include()` for optional files or those that might be missing without causing critical errors.

---

## trim()

In PHP, the `trim()` function is used to **remove whitespace or other specified characters from the beginning and end of a string.** This can be useful for cleaning up user inputs, such as form data, to ensure that no unwanted spaces or characters are present.

---

## Magic Constants in PHP

```
echo __FILE__ . "<br>";
echo __LINE__ . "<br>";
echo __DIR__ . "<br>";

if (file_exists(__DIR__)) {
    echo __DIR__ . " 👈 directory exists." . "<br>";
}

// Check if something is file
if (is_file(__DIR__)) {
    echo __DIR__ . " 👈 is FILE." . "<br>";
} else {
    echo "No - is is not file!, it is Directory!" . "<br>";
}

// Check if something is file
if (is_file(__FILE__)) {
    echo __FILE__ . " 👈 is FILE." . "<br>";
} else {
    echo "No - is is not file!, it is Directory!" . "<br>";
}

// Check if something is directory
if (is_dir(__DIR__)) {
    echo __DIR__ . " 👈 is DIRECTORY." . "<br>";
} else {
    echo "No - it is not DIRECTORY!" . "<br>";
}
```

---

![uploaded file structure](slides/uploaded-file-structure.png)

`$_FILES` is a PHP superglobal variable that is used to retrieve information about uploaded files in a web application. When a user submits a form that includes a file upload input field, the data about the uploaded file is made available in the `$_FILES` array. This array contains several pieces of information about the uploaded file, including its name, type, temporary location, error status, and size.

![file upload errors](slides/file_upload_errors.png)

---

## `mysqli_insert_id($connection)`

Returns the value generated for an AUTO_INCREMENT column by the last query.

---
